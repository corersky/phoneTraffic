<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	$con=new MySql();
	
	//��ֵʧ���˿�ʱ��
	$sql="select * from `configdb` where configkey='llsbtktime'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$llsbtktime=intval($row["congigvalue"]);
	$time=time()-60*60*24*$llsbtktime;
	$stime=$time-60*60*24*90;

$sql="SELECT id FROM liuliangdaili_log where createtime > ".$stime." and createtime < ".$time." and zt=2 and istk=0";
$re=$con->query($sql);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
    $con->begin();
	$info  =   liuliang_ordererraction_id($row["id"]);
    if(!$info){
        $con->rollback();
        continue;
    }
    $con->commit();
}

get_url_contents("http://duanxin.xzkj168.cn/smssenderrtk.php");
?>