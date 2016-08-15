<?php
require_once("common.php");
$con=new MySql();
$hd = intval($_GET['hd']);
$re=getsjhdgs($hd);
echo $re;
exit;
?>