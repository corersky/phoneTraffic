<?php
require_once("common.php");
$do = empty($_GET['action'])?'userindex':$_GET['action'];
//�ж��û��Ƿ��¼
if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
	exit_location_href();
}

//$con=new MySql();
$con   =   MySQL::getInstance();
    
//��ȡ�û���Ϣ
$sql="select * from `user` where id=".$_SESSION["uid"];
$re=$con->query($sql);
$userinfo=mysql_fetch_array($re);
$userinfo['dxnum']=ceil($userinfo['dxnum']/$userinfo['jiage']);
//��ȡӪ��רԱ��Ϣ
$kefuid=intval($userinfo["kefuid"]);
$yingxiaoinfo=array("username"=>"��","sjh"=>"��");
if(!empty($kefuid)){
	$sql="select * from `user_kefu` where id=".$kefuid;
	$re=$con->query($sql);
	$yingxiaoinfo=mysql_fetch_array($re);
}

include_once(S_ROOT.'source/'.$do.'.php');
?>