<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");
$con=new MySql();
//ÿ��һ��ִ��
$d=date("d");
$d=intval($d);
if($d!=1){
	exit;
}


$nowtime=time();//����ʱ��
$yuechutime=date("Y-m-1");
$yuechutime=strtotime($yuechutime);//�³�ʱ��

$sql="select * from `taocanlist`";
$re=$con->query($sql);
while($row=mysql_fetch_array($re)){
	if(($row["zjycfhtime"]<$yuechutime) && ($row["ayfanhuanjine"]>0) && ($row["yffyueshu"]<$row["yueshu"])){
		ayfanhuanaction($row);
	}
	
	if(($row["myzdxfjine"]>0) && ($row["myzdxfjinecltime"]<$yuechutime)){
		myzdxfaction($row);
	}
}




//�����·���
function ayfanhuanaction($taocaninfo){
	global $con;
	if($taocaninfo["yffyueshu"]>=$taocaninfo["yueshu"]){
		return false;
	}
	//��ֵ���� 0�Զ���ֵ 1�ֶ���ֵ 2�ײͰ��·��� 3�ײ�������Ѵﲻ���۷�  4����ʧ�ܷ���
	//��ʼ����
	userdxchongzhi($taocaninfo["uid"],$taocaninfo["myfhje"],2);
	
	$yffyueshu=intval($taocaninfo["yffyueshu"]);
	$yffyueshu++;
	$inarr=array(
		"yffyueshu"=>$yffyueshu,
		"zjycfhtime"=>time()
	);
	$re=$con->updatetabe("taocanlist",$inarr,$taocaninfo["id"],"id");
}

//�����������
function myzdxfaction($taocaninfo){
	global $con;
	
	if($taocaninfo["myzdxfjine"]<=0){
		return false;
	}
	$uid=$taocaninfo["uid"];
	//��ȡ�ϸ��µ����ѽ��
	$ecreatetime=date("Y-m-1");
	$ecreatetime=strtotime($ecreatetime);//������³�ʱ��
	
	$screatetime=date("Y-m-1",($ecreatetime-60*60*24));
	$screatetime=strtotime($screatetime);//�ϸ����³�ʱ��
	
	$sql="select SUM(kfje) as num from `smsorders` where uid=".$uid." and createtime>=".$screatetime." and createtime<".$ecreatetime." and zt!=2";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$xfjine=floatval($row["num"]);//�������ѽ��
	
	$myzdxfjine=floatval($taocaninfo["myzdxfjine"]);//������ѽ��
	
	if($xfjine>=$myzdxfjine){
		return true;
	}
	
	$kfje=$myzdxfjine - $xfjine;
	
	
	//��ʼ�۷�
	$kfje=$kfje-($kfje*2);
	userdxchongzhi($uid,$kfje,3);

	$inarr=array(
		"myzdxfjinecltime"=>time()
	);
	$re=$con->updatetabe("taocanlist",$inarr,$taocaninfo["id"],"id");
}




$somecontent=date("Y-m-d H:i:s").":tccl \n";
csw("111.txt",$somecontent);
?>