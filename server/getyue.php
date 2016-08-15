<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("../common.php");
	require_once("../smsfunction.php");
	require_once("serverfunction.php");
	//$con=new MySql();
	$username=trim($_POST["username"]);
	$pwd=trim($_POST["pwd"]);

	
	if(empty($username) || empty($pwd)){
		returnmsg(-1,"参数信息不完整");
	}
	
	$sql="select * from `user` where username='".$username."' and pwd='".$pwd."'";
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$uid=$userinfo["id"];
	if(empty($uid)){
		returnmsg(-2,"用户名密码错误");
	}
	
	//判断用户是否是接口用户
	$sql="SELECT uid FROM user_jiekou where uid=".$uid." and zt=1";
	
	$re=$con->query($sql);
	$row=mysql_fetch_array($re,MYSQL_ASSOC);
	if(empty($row)){
		returnmsg(-3,"不是接口用户");
	}
	$userdxnum=floatval($userinfo["dxnum"]);
	returnmsg($userdxnum,"成功");

	/*************
	-1：参数信息不完整
	-2:用户名密码错误
	-3:不是接口用户
	
	其他：短信余额
	*********/
	
?>