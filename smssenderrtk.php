<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$nowtime=time();
	//��ȡ������Ȩ���˿���û�
	$sql="select id,jiage,smssbtkbz,tksj from `user` where smssbtkbz=1";
	$re=$con->query($sql);
	$tkuserarr=array();
	while($row=mysql_fetch_array($re)){
		$tkuserarr[]=$row;
	}
	
	foreach($tkuserarr as $userinfo){
		//��ȡ�û�������Ҫ�˿�Ķ���
		$time=$nowtime-60*60*$userinfo["tksj"];
		$stime=$time-60*60*24*5;
		$sql="select id,num,hmnum from `smsorders` where createtime >".$stime." and createtime<".$time." and uid=".$userinfo["id"]." and zt=1 and tksmbz=0";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$num=intval($row["num"]);
			$hmnum=intval($row["hmnum"]);
			$num=ceil($num/$hmnum);
			sms_ordererraction_id($userinfo,$row["id"],$num);
		}
	}
	
	


//���ݶ������������˿��˿�
function sms_ordererraction_id($userinfo,$tid,$num){
	global $con;
	$uid=$userinfo["id"];
	//���·���״̬
	$sql="UPDATE smsorders set tksmbz=1 where id=".$tid;
	$re=$con->query($sql);
	
	//��ȡʧ������
	$sql="select count(*) as num from `smsordersinfo` where tid=".$tid." and zt=2";
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$hmnum=intval($orderinfo["num"]);
	$tknum=$hmnum*$num;
	if($tknum<=0){
		return true;
	}
	$jiage=floatval($userinfo["jiage"]);
	
	$jine=$tknum*$jiage;
	$jine=floatval($jine);
	
	$inactiv=array(
			'uid' =>$uid,
			'tid'=>0, 
			'jine'=>$jine, 
			'cztype' =>7,
			'czuid' =>0,
			'zt' =>1,
			'shje' =>0,
			'beizhu' =>"���ַ���ʧ���˿�",
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhilog",$inactiv);
	
	$sql="UPDATE user set dxnum=dxnum+".$jine." where id=".$uid;
	$re=$con->query($sql);//�����û����
	
}
?>
ok