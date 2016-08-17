<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");

//$con=new MySql();
$con   =   MySQL::getInstance();

if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}

$tid=trim($_GET["tid"]);

	$time=time()-60*60*24*30;
	$sql="select * from `liuliangdaili_log` where id=".$tid." and createtime>".$time." and istk=0";
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	if(empty($orderinfo)){
		die("<script>alert('指定订单不存在或已经退过款！');</script>");
	}
	
	$uid=$orderinfo["uid"];
	$shje=floatval($orderinfo["shje"]);
	if(empty($uid) && ($shje<=0)){
		die("<script>alert('指定订单信息错误！');</script>");
	}
	
	$sql="UPDATE liuliangdaili_log SET istk=1,issd=1,beizhu2='未到账退款' where id=".$tid;
	$con->query($sql);
			
	//返还金额
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//更新用户余额

die("<script>alert('退款成功');window.parent.location.href=window.parent.location.href;</script>");
	


?>