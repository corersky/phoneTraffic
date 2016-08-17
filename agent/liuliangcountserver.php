<?php 
	ignore_user_abort();//¶Ï¿ªä¯ÀÀÆ÷¼ÌÐøÖ´ÐÐ
	require_once("common.php");
	require_once("source/liuliangfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();

	
	$apizh=trim($_POST["apizh"]);
	$apipwd=trim($_POST["apipwd"]);
	
	if(empty($apizh) || empty($apipwd)){
		die("-2");
	}
	
	$sql="select * from `user_daili` where username='".$apizh."' and pwd='".$apipwd."'";
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("-2");
	}
	$uid=$userinfo["id"];
	$dxnum=floatval($userinfo["dxnum"]);
	echo $dxnum;
	exit;
?>