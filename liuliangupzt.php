<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("liuliangfunction.php");
	$con=new MySql();
	
getliuliangstatus();


$baisomecontent=date("Y-m-d H:i:s")."\n";
csw("125.txt",$baisomecontent);
?>