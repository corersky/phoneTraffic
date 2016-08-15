<?php
require_once("common.php");
$nowtime=time();

$username=trim($_COOKIE["username"]);
$pwd=trim($_COOKIE["cctime"]);//УмТы
$jzmm=intval($_COOKIE["jzmm"]);
if(!empty($pwd)){
	$pwd=authcodej($pwd);
}
$yzm=authcode($nowtime);
include template('index');
?>