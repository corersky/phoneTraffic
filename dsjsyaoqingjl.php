<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");

//$con=new MySql();
$con   =   MySQL::getInstance();

$nowtime=time();
//�Ȼ�ȡ���һ��ִ�е�ʱ��
$sql="select * from `configdb` where configkey='yaoqingjstime'";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
if(empty($row)){
	die("�����ļ�configdb����!");
}
$congigvalue=intval($row["congigvalue"]);

//�����³�ʱ��
$jstime=date("Y-m-1");
$jstime=strtotime($jstime);
if($congigvalue>$jstime){
	die("�Ѿ�ִ�й���!");
}
//�������һ��ִ�е�ʱ��
$sql="UPDATE configdb set congigvalue='".$nowtime."' where configkey='yaoqingjstime'";
$re=$con->query($sql);


//��ȡ���¼��Ĵ�����id
$sql="SELECT tjrid FROM user_daili WHERE tjrid>0 GROUP BY tjrid";
$re=$con->query($sql);
$dailiuserarr=array();
while($row=mysql_fetch_array($re)){
	$dailiuserarr[]=$row["tjrid"];
}
//��ȡ���µ�ʱ��
$stime=strtotime("-1 month",$nowtime);
$stime=date("Y-m-1",$stime);
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$yuefen=date("Ym",$stime);

foreach($dailiuserarr as $value){
	$uid=$value;
	$jlje=getdailishangjianglijine($uid,$stime,$etime);
	
	$inarr=array(
		   "uid"=>$uid,
		   "yuefen"=>$yuefen,
		   
		   "jine"=>$jlje,
		   "zt"=>0,
		   "jstime"=>0,
		   "createtime"=>$nowtime
	);
	$con->insertabe("daili_zhangdanlog",$inarr);

}



//��ȡ������ָ���·ݽ������
function getdailishangjianglijine($uid,$stime,$etime){
	global $con;
	$sql="SELECT id FROM user_daili where tjrid=".$uid;
	$re=$con->query($sql);
	$jianglijine=0;
	while($row=mysql_fetch_array($re)){
		$dlid=$row["id"];
		$czje=getdailishangchobgzhijine($dlid,$stime,$etime);
		$jianglijine+=($czje*0.01);
	}
	return $jianglijine;
}

//��ȡ������ָ���·ݳ�ֵ���
function getdailishangchobgzhijine($uid,$stime,$etime){
	global $con;
	$wherestr="where uid= ".$uid;
	$wherestr.=" and zt=1 and createtime>=".$stime." and createtime<".$etime;
	$sql="select SUM(shje) as num from `chongzhidaililog` ".$wherestr;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zchongzhijine=floatval($row["num"]);//�ܳ�ֵ���
	return $zchongzhijine;
}

?>
ok