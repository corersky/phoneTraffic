<?php
require_once("common.php");
$do = empty($_GET['action'])?'index':$_GET['action'];
//判断用户是否登录
if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
	$do="login";
}

$con=new MySql();
//获取用户信息
$sql="select * from `user_daili` where id=".$_SESSION["dl_uid"];
$re=$con->query($sql);
$userinfo=mysql_fetch_array($re);

include_once(S_ROOT.'source/'.$do.'.php');
?>