<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../smsfunction.php");
	require_once("../jishenfunction.php");
	$con=new MySql();
	
	exit;
	//获取所有未处理订单
	$createtime=time()-60*60*24*3;
	$sql="SELECT * FROM smsorders where createtime > ".$createtime." and zt=0 and id=43";
	$re=$con->query($sql);
	$orderarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderarr[]=$row;
	}
	/*
	//获取发送通道
	$sql="select id from `tongdaolist` where zt=1 limit 0,1";
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	$tongdaoid=intval($tongdaoinfo["id"]);
	if(empty($tongdaoid)){
		die("获取不到发送通道!");
	}
	*/

//循环处理订单
foreach($orderarr as $orderinfo){
	//先把扫描状态设置
	$sql="update `smsorders` set jishensmbz=1 where id=".$orderinfo["id"];
	$re=$con->query($sql);
	
	$orderid=$orderinfo["id"];//订单编号
	$smsnei=$orderinfo["nei"];//短信内容
	$smshmnum=intval($orderinfo["hmnum"]);//短信号码条数
	
	$tongdaoid=intval($orderinfo["tongdaoid"]);
	
	//判断是不是免审用户
	$sql="select * from `mianshenuser` where uid=".$orderinfo["uid"];
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		//所有机审条件验证
		if(!jishen_heizidian($smsnei)){
			continue;
		}
		if(!jishen_dianhuayanzheng($smsnei)){
			continue;
		}
		if(!jishen_smssjhnumyanzheng($smshmnum)){
			continue;
		}
	}
	
	
	//如果是定时发送
	if(!empty($orderinfo["dssendtime"])){
		$inarr=array(
				"shenheid"=>"0",
				"zt"=>3
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		continue;
	}
	
	
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
	$bz=sendsms($sjh,$nei,$tongdaoid,$err);
	if(empty($bz)){
		//发送失败
		$inarr=array(
				"shenheid"=>"0",
				"tongdaoid"=>$tongdaoid,
				"zt"=>2,
				"msg"=>$err
		);
		//cs($inarr);
		//exit;
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$orderid;
		$re=$con->query($sql);
		
		//返还用户金额
		userdxchongzhi($orderinfo["uid"],$orderinfo["kfje"],4);
	}else{
		//发送成功
		$inarr=array(
				"shenheid"=>"0",
				"tongdaoid"=>$tongdaoid,
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
	}
}//END 循环处理订单
	
	

?>