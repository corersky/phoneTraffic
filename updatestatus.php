<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");
require_once("smsfunction.php");
$con=new MySql();
getsmsstatus();

$somecontent=date("Y-m-d H:i:s");
csw("updatestatus.txt",$somecontent);

?>