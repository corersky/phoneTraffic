<?php
ignore_user_abort();//¶Ï¿ªä¯ÀÀÆ÷¼ÌÐøÖ´ÐÐ
require_once("common.php");
require_once("smsfunction.php");

//$con=new MySql();
$con   =   MySQL::getInstance();
    
getsmsstatus();

$somecontent=date("Y-m-d H:i:s");
csw("updatestatus.txt",$somecontent);

?>