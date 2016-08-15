<?php
require_once("common.php");
$do = empty($_GET['action'])?'index':$_GET['action'];
//ละถฯำรปงสวท๑ตวยผ
if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
	$do="login";
}

$con=new MySql();


include_once(S_ROOT.'source/'.$do.'.php');
?>