<?php
//ͨ��������� �������û�id,�ֻ������飬���ݣ�ͨ��id���Ƿ�ʹ��ǩ����0���ã� ����ʱ��
//���ͳɹ�����true ʧ�� false 
function tongdaoation_1($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//��ȡ���û���Ϣ
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	if(empty($syqianming)){
		$err="����ʹ��ǩ����";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="ǩ������Ϊ�գ�";
		return false;
	}
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		$err="���ż۸����";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//ÿ�������������
	$txlarrlen=count($txlarr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="���㣬����ʧ�ܣ�";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="����ʧ�ܣ�";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}




//ͨ��������� �������û�id,�ֻ������飬���ݣ�ͨ��id���Ƿ�ʹ��ǩ����0���ã� ����ʱ��
//���ͳɹ�����true ʧ�� false 
function tongdaoation_2($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//��ȡ���û���Ϣ
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	if(empty($syqianming)){
		$err="����ʹ��ǩ����";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="ǩ������Ϊ�գ�";
		return false;
	}
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		$err="���ż۸����";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/65);//ÿ�������������
	$txlarrlen=count($txlarr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	
	
	if($txlarrlen<500){
		$err="��ٸ������𷢣�";
		return false;
	}
	
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="���㣬����ʧ�ܣ�";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="����ʧ�ܣ�";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}




//ͨ��������� �������û�id,�ֻ������飬���ݣ�ͨ��id���Ƿ�ʹ��ǩ����0���ã� ����ʱ��
//���ͳɹ�����true ʧ�� false 
function tongdaoation_3($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//��ȡ���û���Ϣ
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	/*
	if(empty($syqianming)){
		$err="����ʹ��ǩ����";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="ǩ������Ϊ�գ�";
		return false;
	}
	*/
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		$err="���ż۸����";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//ÿ�������������
	$txlarrlen=count($txlarr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	
	if($txlarrlen<500){
		$err="500�������𷢣�";
		return false;
	}
	
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="���㣬����ʧ�ܣ�";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="����ʧ�ܣ�";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}




//���ͳɹ�����true ʧ�� false 
function tongdaoation_4($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//��ȡ���û���Ϣ
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="����ʹ��ǩ����";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="ǩ������Ϊ�գ�";
		return false;
	}
	
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		$err="���ż۸����";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//ÿ�������������
	$txlarrlen=count($txlarr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	


	if($txlarrlen<100){
		$err="100�������𷢣�";
		return false;
	}
	
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="���㣬����ʧ�ܣ�";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="����ʧ�ܣ�";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}






//���ͳɹ�����true ʧ�� false 
function tongdaoation_5($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//��ȡ���û���Ϣ
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="����ʹ��ǩ����";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="ǩ������Ϊ�գ�";
		return false;
	}
	/*
	//��֤ǩ���Ƿ񱨱�
	$bbqm=preg_replace("/��|��/is", "", $qianming);
	$sql="select * from `tongdaoqianminglist` where tongdaoid=5 and qianming='".$bbqm."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		$err="ǩ��û�б�����";
		return false;
	}*/
	
	
	
	
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		$err="���ż۸����";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//ÿ�������������
	$txlarrlen=count($txlarr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	
	
	if($txlarrlen<100){
		$err="100�������𷢣�";
		return false;
	}
	
	
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="���㣬����ʧ�ܣ�";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="����ʧ�ܣ�";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}



//���ͳɹ�����true ʧ�� false 
function tongdaoation_6($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//��ȡ���û���Ϣ
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="����ʹ��ǩ����";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="ǩ������Ϊ�գ�";
		return false;
	}
	
	
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		$err="���ż۸����";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//ÿ�������������
	$txlarrlen=count($txlarr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	
	
	if($txlarrlen<100){
		$err="100�������𷢣�";
		return false;
	}
	
	
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="���㣬����ʧ�ܣ�";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="����ʧ�ܣ�";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}



//���ͳɹ�����true ʧ�� false 
function tongdaoation_7($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//��ȡ���û���Ϣ
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="����ʹ��ǩ����";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="ǩ������Ϊ�գ�";
		return false;
	}
	
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		$err="���ż۸����";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//ÿ�������������
	$txlarrlen=count($txlarr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	

/*
	if($txlarrlen<100){
		$err="100�������𷢣�";
		return false;
	}
	*/
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="���㣬����ʧ�ܣ�";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="����ʧ�ܣ�";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}
