<?php
require_once("common.php");
$do = empty($_GET['action'])?'userindex':$_GET['action'];
//判断用户是否登录
if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
	exit_location_href();
}

//$con=new MySql();
$con   =   MySQL::getInstance();
    
//获取用户信息
$sql="select * from `user` where id=".$_SESSION["uid"];
$re=$con->query($sql);
$userinfo=mysql_fetch_array($re);
$userinfo['dxnum']=ceil($userinfo['dxnum']/$userinfo['jiage']);
//获取营销专员信息
$kefuid=intval($userinfo["kefuid"]);
$yingxiaoinfo=array("username"=>"无","sjh"=>"无");
if(!empty($kefuid)){
	$sql="select * from `user_kefu` where id=".$kefuid;
	$re=$con->query($sql);
	$yingxiaoinfo=mysql_fetch_array($re);
}

include_once(S_ROOT.'source/'.$do.'.php');
?>