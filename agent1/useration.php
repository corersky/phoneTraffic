<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="adduser"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$lxrxm=trim($_POST["lxrxm"]);
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$qianming="";
	$yingxiaoid=0;
	if(empty($username) || empty($sjh)){
		die("<script>alert('填写信息不完整!');</script>");
	}
	
	if(empty($qianming)){
		$qianming="【".$username."】";
	}
	$qmq=substr($qianming,0,2);
	if($qmq !="【"){
		$qianming="【".$qianming."】";
	}
	
	//检查用户吗是否存在
	$sql="select username from `user` where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('用户名已存在!');</script>");
	}
	//检查电话是否存在
	$sql="select username from `user` where sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('指定电话已存在!');</script>");
	}
	
	
	//存储用户信息
	$nowtime=time();
	$ip= GetIP();
	$inarr=array(
		   "username"=>$username,
		   "pwd"=>"123123",
		   "dxnum"=>0,
		   "jiage"=>"0.0625",
		   
		   "zhdltime"=>$nowtime,
		   "zhdlip"=>$ip,
		   "sjh"=>$sjh,
		   "gsmc"=>$gsmc,
		   "dizhi"=>$dizhi,
		   "lxrxm"=>$lxrxm,
		   "lxrqq"=>$lxrqq,
		   "kefuid"=>0,
		   "yingxiaoid"=>$yingxiaoid,
		   "qianming"=>$qianming,
		   "dlid"=>$_SESSION["dl_uid"],
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("user",$inarr);
	die("<script>alert('添加成功!');window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="setuserinfo"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$lxrxm=trim($_POST["lxrxm"]);
	
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$uid=trim($_POST["uid"]);

	if(empty($uid)){
		die("<script>alert('非法请求!');</script>");
	}
	
	if(empty($username) || empty($sjh)){
		die("<script>alert('用户名和和手机号不能为空!');</script>");
	}
	
	

	$inarr=array(
			"username"=>$username,
			"sjh"=>$sjh,
			"lxrxm"=>$lxrxm,
			"lxrqq"=>$lxrqq,
			"gsmc"=>$gsmc,
			"dizhi"=>$dizhi
			
	);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserbeizhu"){
	$uid=trim($_POST["uid"]);
	$beizhu=trim($_POST["beizhu"]);
	if(empty($uid)){
		die("<script>alert('非法请求!');</script>");
	}

	$inarr=array(
				"beizhu"=>$beizhu
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="dxchongzhi"){
	$username=trim($_POST["username"]);
	if(empty($username)){
		die("<script>alert('用户名不能为空!');</script>");
	}
	$jine=intval($_POST["jine"]);
	if($jine<0){
		die("<script>alert('充值条数错误!');</script>");
	}
	//获取用户id
	$sql="select * from `user` where username='".$username."' and dlid=".$_SESSION["dl_uid"];
	echo $sql;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=$row["id"];
	if(empty($uid)){
		die("<script>alert('获取指定用户信息失败，请确认用户名是否正确!');</script>");
	}
	//获取代理商信息
	$sql="select * from `user_daili` where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$dljiage= floatval($userinfo["jiage"]);
	$dldxnum= floatval($userinfo["dxnum"]);
	$shje=$jine*$dljiage;
	if($shje>$dldxnum){
		die("<script>alert('余额不足!');</script>");
	}
	//扣费
	$sql="UPDATE user_daili set dxnum=dxnum-".$shje." where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);//更新用户余额
	
	
	$jiage= getuserjiage($uid);
	$jine=$jine*$jiage;
	
	userdxchongzhi_sdcz($uid,$jine,6,'-2',$shje,"代理商充值");
	
	die("<script>alert('充值成功');window.parent.location.href=window.parent.location.href;</script>");
}
?>