<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");
require_once("smsfunction.php");
$con=new MySql();

//��ȡҪ��ʱ���͵Ķ���
$nowtime=time();
$createtime=$nowtime-60*60*24*90;
$sql="select * from `smsorders` where createtime>".$createtime." and zt=3 and dssendtime<=".$nowtime;
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re)){
	$orderarr[]=$row;
}
/*
//��ȡ����ͨ��
$sql="select id from `tongdaolist` where zt=1 limit 0,1";
$re=$con->query($sql);
$tongdaoinfo=mysql_fetch_array($re);
$tongdaoid=intval($tongdaoinfo["id"]);
if(empty($tongdaoid)){
	die("��ȡ��������ͨ��!");
}
*/
foreach($orderarr as $orderinfo){
	//��ȡ���ͺ���
	$orderid=$orderinfo["id"];
	$sql="select sjh from `smsordersinfo` where tid=".$orderinfo["id"];
	$re=$con->query($sql);
	$sjharr=array();
	while($row=mysql_fetch_array($re)){
		$sjharr[]=$row["sjh"];
	}
	$sjh=implode(",",$sjharr);
	
	$nei=trim($orderinfo["nei"]);
	$err="";
	$bz=sendsms($sjh,$nei,$orderinfo["tongdaoid"],$err);
	if(empty($bz)){
		//����ʧ��
		$inarr=array(
				"zt"=>2,
				"msg"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$orderid;
		$re=$con->query($sql);
		
		//�����û����
		userdxchongzhi($orderinfo["uid"],$orderinfo["kfje"],4);
		
	}else{
		//���ͳɹ�
		$inarr=array(
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
	}
	


}

$somecontent=date("Y-m-d H:i:s").":dscf \n";
csw("111.txt",$somecontent);

?>
ok