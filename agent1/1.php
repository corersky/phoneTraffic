<?php 
	ignore_user_abort();//�Ͽ����������ִ��
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
	//��ȡ�û�����ۿ�
	$sql="select sum(shje) as num from `chongzhidaililog` where uid=".$uid." and zt=1";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zongcznum=floatval($row["num"]);//�ܳ�ֵ���
	
	$dxnum=floatval($userinfo["dxnum"]);//���
	
	
	$sql="select sum(shje) as num from `liuliangdaili_log` where uid=".$uid." and istk=0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zongkfnum=floatval($row["num"]);//�ܳ�ֵ���
	
	$ysyye=$zongcznum-$zongkfnum;
	
	$wcje=$dxnum-$ysyye;
	
	echo $uid.":�ܳ�ֵ��".$zongcznum."  �����ѽ��:".$zongkfnum." ��".$dxnum." Ӧʣ�����:".$ysyye. "����".$wcje."<br>";
	
		
}
?>