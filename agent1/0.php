<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");

	$con=new MySql();
	exit;
$sql="SELECT * FROM liuliangdaili_log WHERE tongdaoid = 1 AND sjhtype IN(1,2)";
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
$orderarr[]=$row;
}
cs($orderarr);

foreach($orderarr as $orderinfo){
	errjiuzheng($orderinfo);

}

function errjiuzheng($orderinfo){
	global $con;
	$uid=trim($orderinfo["uid"]);
	//��ȡ�û�����ۿ�
	$sql="select * from `user_daili` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$dxnum=floatval($userinfo["dxnum"]);//���
		
	$yidongzk=floatval($userinfo["yidongzk"]);//�ƶ��ۿ�
	$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
	$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
	
	$sjhtype=intval($orderinfo["sjhtype"]);
	
	$kfmianzhi=trim($orderinfo["mianzhi"]);
	$shje=trim($orderinfo["shje"]);

	$ysje=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
	if($sjhtype==1){
		$ysje=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
	}elseif($sjhtype==2){
		$ysje=$kfmianzhi*$dianxinzk*0.1;//�۷ѽ��
	}
	
	$wcje=$ysje-$shje;
	echo $uid."����".$wcje."<br>";
	
	//�޸�
	$sql="UPDATE liuliangdaili_log set shje=".$ysje." where id=".$orderinfo["id"];
	$re=$con->query($sql);
	
	if($orderinfo["zt"]!=1){
echo "����".$orderinfo["id"]."ʧ�ܣ��������<br>";
		return false;
	}
	
	
	//�޸Ľ��
	if($wcje>0){
		//�۷�
		$dxnum=$dxnum-$wcje;
		if($dxnum<0){
			echo $uid."��������<br>";
			return false;
		}
		echo "�û���".$uid."��ʼ�����<br>";
		$sql="UPDATE user_daili set dxnum=dxnum-".$wcje." where id=".$uid;
		$re=$con->query($sql);//�����û����
	}
	
		
}
?>