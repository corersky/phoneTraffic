<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../smsfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="orderjujue"){
	$orderid=trim($_POST["orderid"]);
	$jujuemsg=trim($_POST["jujuemsg"]);

	if(empty($orderid) || empty($jujuemsg)){
		die("<script>alert('拒绝理由不能为空!');</script>");
	}
	
	$sql="select id,uid,kfje,zt from `smsorders` where id=".$orderid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zt=intval($row["zt"]);
	if(!empty($zt)){
		die("<script>alert('指定订单已被处理!');</script>");
	}
	$uid=trim($row["uid"]);
	$kfje=floatval($row["kfje"]);
	if(empty($uid)){
		die("<script>alert('获取订单失败!');</script>");
	}
	
	$inarr=array(
			"shenheid"=>$_SESSION["dl_uid"],
			"zt"=>2,
			"msg"=>$jujuemsg
	);
	$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		
	$sql="UPDATE smsordersinfo set zt=2,msg='订单被拒绝' where tid=".$orderid;
	$re=$con->query($sql);
	
	userdxchongzhi($uid,$kfje,4);
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="orderchuli"){
	$orderid=trim($_GET["orderid"]);
	//$tdtype=intval($_GET["tdtype"]);//通道类型 0通知 1营销
	if(empty($orderid)){
		die("<script>alert('非法请求!');</script>");
	}
	
	$sql="select * from `smsorders` where id=".$orderid;
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$zt=intval($orderinfo["zt"]);
	
	if(!empty($zt)){
		die("<script>alert('指定订单已被处理!');</script>");
	}
	
	//如果是定时发送
	if(!empty($orderinfo["dssendtime"])){
		$inarr=array(
				"shenheid"=>$_SESSION["dl_uid"],
				"zt"=>3
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		die("<script>alert('处理成功');window.parent.location.href=window.parent.location.href;</script>");
	}
	/*
	//获取发送通道
	$sql="select id from `tongdaolist` where zt=1 and tdtype=".$tdtype." limit 0,1";
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	$tongdaoid=intval($tongdaoinfo["id"]);
	if(empty($tongdaoid)){
		die("<script>alert('获取不到发送通道!');</script>");
	}
	*/
	
	//获取发送号码
	$sql="select sjh from `smsordersinfo` where tid=".$orderid;
	$re=$con->query($sql);
	$sjharr=array();
	while($row=mysql_fetch_array($re)){
		$sjharr[]=$row["sjh"];
	}
	$sjh=implode(",",$sjharr);
	
	$nei=trim($orderinfo["nei"]);

	$err="";
	$bz=sendsms($sjh,$nei,$orderinfo["tongdaoid"],$err);


	if(empty($bz)){
		//发送失败
		$inarr=array(
				"shenheid"=>$_SESSION["dl_uid"],
				"zt"=>2,
				"msg"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$orderid;
		$re=$con->query($sql);
		
		//返还用户金额
		userdxchongzhi($orderinfo["uid"],$orderinfo["kfje"],4);
		
	}else{
		//发送成功
		$inarr=array(
				"shenheid"=>$_SESSION["dl_uid"],
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
	}
	
	die("<script>alert('发送成功');window.parent.location.href=window.parent.location.href;</script>");
	
	
}


?>