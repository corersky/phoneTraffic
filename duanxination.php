<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("smsfunction.php");
	require_once("smsorderfunction.php");
	
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="sendsms"){
	$sjh=trim($_POST["sjh"]);
	$sendtime=trim($_POST["sendtime"]);
	$nei=trim($_POST["nei"]);
	
	$tongdaoid=intval($_POST["tongdaoid"]);
	$syqianming=intval($_POST["syqianming"]);
	if(empty($nei)){
		die("<script>alert('发送内容不能为空!');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	$nowtime=time();
	if(!empty($sendtime)){
		$sendtime=strtotime($sendtime);
		if($sendtime<($nowtime)){
			$sendtime="";
		}
	}

	
	$pieces= preg_split('/\n|,| /', $sjh, -1, PREG_SPLIT_NO_EMPTY);
	$txlarr=array();
	foreach($pieces as $value){
		$sjh=trim($value);
		if(strlen($sjh)==11){
			$txlarr[]=$sjh;
		}
	}
	$txlstr = implode(",", $txlarr);
	
	if(empty($txlarr)){
		die("<script>alert('手机号不能为空！');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	$functionname="tongdaoation_".$tongdaoid;
	if(!function_exists($functionname)){
		die("<script>alert('获取发送通道程序失败!');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	$err="";
	$a=$functionname($_SESSION["uid"],$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,$err);
	if(!$a){
		die("<script>alert('".$err."');window.parent.location.href=window.parent.location.href;</script>");
	}
	die("<script>window.parent.location.href='".XZKJURL."/user.php?action=sendlog';</script>");
}elseif($action=="setpwd"){
	$jiupwd=trim($_POST["jiupwd"]);
	$pwd=trim($_POST["pwd"]);
	$pwd2=trim($_POST["pwd2"]);
	if(empty($jiupwd) || empty($pwd) || empty($pwd2)){
		die("<script>alert('填写信息不完整!');</script>");
	}
	if($pwd!=$pwd2){
		die("<script>alert('两次密码输入不一致!');</script>");
	}
	
	//验证旧密码是否正确
	$sql="select * from `user` where id=".$_SESSION["uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$jiup=trim($userinfo["pwd"]);
	if($jiup!=$jiupwd){
		die("<script>alert('旧密码错误!');</script>");
	}
	
	$sql="UPDATE user set pwd='".$pwd."' where id=".$_SESSION["uid"];
	$re=$con->query($sql);//更新用户密码
	die("<script>alert('修改成功');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserinfo"){
	$sjh=trim($_GET["sjh"]);
	if(!empty($sjh)){
		$sql="UPDATE user set sjh='".$sjh."' where id=".$_SESSION["uid"];
		$re=$con->query($sql);
	}
	$lxrxm=trim($_GET["lxrxm"]);
	if(!empty($lxrxm)){
		$sql="UPDATE user set lxrxm='".$lxrxm."' where id=".$_SESSION["uid"];
		$re=$con->query($sql);
	}
	
	$lxrqq=trim($_GET["lxrqq"]);
	if(!empty($lxrqq)){
		$sql="UPDATE user set lxrqq='".$lxrqq."' where id=".$_SESSION["uid"];
		$re=$con->query($sql);
	}
	
	$gsmc=trim($_GET["gsmc"]);
	if(!empty($gsmc)){
		$sql="UPDATE user set gsmc='".$gsmc."' where id=".$_SESSION["uid"];
		$re=$con->query($sql);
	}
	
	$dizhi=trim($_GET["dizhi"]);
	if(!empty($dizhi)){
		$sql="UPDATE user set dizhi='".$dizhi."' where id=".$_SESSION["uid"];
		$re=$con->query($sql);
	}
	
	
	$qianming=trim($_GET["qianming"]);
	if(!empty($qianming)){
		$qmq=substr($qianming,0,2);
		if($qmq !="【"){
			$qianming="【".$qianming."】";
		}
	
		$sql="UPDATE user set qianming='".$qianming."' where id=".$_SESSION["uid"];
		$re=$con->query($sql);
	}
	


die("<script>alert('修改成功');window.parent.location.href=window.parent.location.href;</script>");
}

?>