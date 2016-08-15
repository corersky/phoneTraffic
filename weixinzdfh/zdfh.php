<?php
exit;
require_once("common.php");
require_once("zdfhfunction.php");
/*
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

$a=orderGetHighly($access_token);
$a=$a["data"]["page_data"];

foreach($a as $value){
	$tid=$value["order_no"];
	
	$sql="select count(*) as num from `orderlog` where tid=".$tid." and createtime>".$time;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$num=intval($row["num"]);
	if($num>0){
		continue;
	}
	$orderinfo=orderFullInfoGetHighly($access_token,$tid);
	$orderinfo=$orderinfo["data"];
	weixinzdfh($orderinfo,$access_token);
}
*/
get_url_contents("http://duanxin.xzkj168.cn/weixinzdfhmd/zdfh.php");
?>