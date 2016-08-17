<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../smsfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["kefu_uid"]) || empty($_SESSION["kefu_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="setpwd"){
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
	$sql="select * from `user_kefu` where id=".$_SESSION["kefu_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$jiup=trim($userinfo["pwd"]);
	if($jiup!=$jiupwd){
		die("<script>alert('旧密码错误!');</script>");
	}
	
	$sql="UPDATE user_kefu set pwd='".$pwd."' where id=".$_SESSION["kefu_uid"];
	$re=$con->query($sql);//更新用户密码
	die("<script>alert('修改成功');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserinfo"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	if(empty($username) || empty($sjh)){
		die("<script>alert('填写信息不完整!');</script>");
	}


	
	$sql="UPDATE user_kefu set username='".$username."',sjh='".$sjh."' where id=".$_SESSION["kefu_uid"];
	$re=$con->query($sql);//更新用户密码
	die("<script>alert('修改成功');window.parent.location.href=window.parent.location.href;</script>");
}

?>