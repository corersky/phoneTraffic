<?php
require_once("common.php");
require_once("zdfhfunction.php");
$con=new MySql();
//获取和刷新access_token
$sql="select * from `sessionconfig` where id=1";
$re=$con->query($sql);
$row=mysql_fetch_array($re);

$access_token=$row["access_token"];
$gqtime=intval($row["gqtime"]);
$time=time()+60*60;
if($time>$gqtime){
	$access_token=getaccessToken();
	$time=time()+60*60*3;
	$sql="UPDATE sessionconfig set access_token='".$access_token."',gqtime=".$time." where id=1";
	$con->query($sql);
}

$time=time()-60*60*24*5;

$tid="61603010007646039";
$a=logisticsDelivery($access_token,$tid);
var_dump($a);
cs($a);

?>