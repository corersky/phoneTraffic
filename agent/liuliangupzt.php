<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("source/liuliangfunction.php");
	$con=new MySql();
	//���¿��ܳ�ֵ״̬

$time=time()-60*60*24*15;
$sql="SELECT * FROM ka_infos where jihuotime>".$time." and zt=3";
$re=$con->query($sql);
$logarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$logarr[]=$row;
	upliuliangorderzt($row["id"],$row["tid"]);
}




$baisomecontent=date("Y-m-d H:i:s")."\n";
csw("126.txt",$baisomecontent);

//kid:��ֵ��id tid����Ӧ�Ķ������id
function upliuliangorderzt($kid,$tid){
global $con;
	if(empty($kid) || empty($tid)){
		return false;
	}
	//��ȡ����״̬
	$sql="SELECT * FROM liuliangdaili_log where id=".$tid;
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re,MYSQL_ASSOC);
	$zt=intval($orderinfo["zt"]);
	if(($zt!=1) && ($zt!=2)){
		return false;
	}
	
	$sql="UPDATE ka_infos set zt=".$zt." where id=".$kid;
	$re=$con->query($sql);

}
?>