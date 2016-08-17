<?php 
	ignore_user_abort();//¶Ï¿ªä¯ÀÀÆ÷¼ÌÐøÖ´ÐÐ
	require_once("common.php");
	require_once("liuliangfunction.php");
	
//$con=new MySql();
$con   =   MySQL::getInstance();
	
getliuliangstatus();


$baisomecontent=date("Y-m-d H:i:s")."\n";
csw("125.txt",$baisomecontent);
?>