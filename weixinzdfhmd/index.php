<?php
require_once("common.php");
$con=new MySql();
//��ȡ��ˢ��access_token
$sql="select * from `sessionconfig_md` where id=1";
$re=$con->query($sql);
$row=mysql_fetch_array($re);

$access_token=$row["access_token"];
$gqtime=intval($row["gqtime"]);
$time=time()+60*60;
if($time>$gqtime){
	$access_token=getaccessToken();
	$time=time()+60*60*3;
	$sql="UPDATE sessionconfig_md set access_token='".$access_token."',gqtime=".$time." where id=1";
	$con->query($sql);
}
$a=spuFullInfoGet ($access_token);
cs($a);


?>