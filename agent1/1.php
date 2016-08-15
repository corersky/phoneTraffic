<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");

	$con=new MySql();
	exit;
$sql="SELECT * FROM user_daili";
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
$userarr[]=$row;
}
cs($userarr);

foreach($userarr as $userinfo){
	errjiuzheng($userinfo);

}

function errjiuzheng($userinfo){
	global $con;
	
	$uid=trim($userinfo["id"]);
	//获取用户余额折扣
	$sql="select sum(shje) as num from `chongzhidaililog` where uid=".$uid." and zt=1";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zongcznum=floatval($row["num"]);//总充值余额
	
	$dxnum=floatval($userinfo["dxnum"]);//余额
	
	
	$sql="select sum(shje) as num from `liuliangdaili_log` where uid=".$uid." and istk=0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zongkfnum=floatval($row["num"]);//总充值余额
	
	$ysyye=$zongcznum-$zongkfnum;
	
	$wcje=$dxnum-$ysyye;
	
	echo $uid.":总充值金额：".$zongcznum."  总消费金额:".$zongkfnum." 余额：".$dxnum." 应剩余余额:".$ysyye. "误差金额：".$wcje."<br>";
	
		
}
?>