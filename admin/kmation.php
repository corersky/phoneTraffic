<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}



if($action=="addkm"){
	$piname=trim($_POST["piname"]);
	$kanum=intval($_POST["kanum"]);
	$sjhtype=intval($_POST["sjhtype"]);
	$taocanliuliang=intval($_POST["taocanliuliang"]);
	$uid=0;
	$guoqitime=0;
	
	$liuliang=$taocanliuliang;
	if(empty($piname) || ($kanum<=0) || ($taocanliuliang<=0)){
		liuliangerr("��д��Ϣ����");
	}
	
	//�����ƶ�
	$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
	);
	//������ͨ�ײ�
	$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
	);
		
	//��������ײ�
	$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
	);
		
	$kfmianzhi=0;//������ֵ
	if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				liuliangerr("ѡ���ײʹ���,ָ���ײ���ʧЧ��");
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
	}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				liuliangerr("ѡ���ײʹ���,ָ���ײ���ʧЧ��");
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
	}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				liuliangerr("ѡ���ײʹ���,ָ���ײ���ʧЧ��");
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
	}
	if($kfmianzhi<=0){
			liuliangerr("ѡ���ײʹ���,ָ���ײ���ʧЧ��");
	}
		
	
	
		//���Ļ���ʼ���ɿ���
		$con->query("BEGIN");
		
		$inarr=array(
			"uid"=>$uid,
			"piname"=>$piname,
			"kanum"=>$kanum,
			"liuliang"=>intval($liuliang),
			"sjhtype"=>$sjhtype,
			"guoqitime"=>$guoqitime,
			"zongmianzhi"=>0,
			"zongssje"=>0,
			"createtime"=>time()
		);
		$kid=$con->insertabe("ka_picilist",$inarr);
	
		if(empty($kid)){
			liuliangerr("����ʧ�ܣ�");
		}
		//�������ɿ���
		for($i=0;$i<$kanum;$i++){
			$pwd=rand(1000000,9999999);
			$inarr=array(
				"uid"=>$uid,
				"pwd"=>$pwd,
				"pid"=>$kid,
				"liuliang"=>$liuliang,
				"sjhtype"=>$sjhtype,
				"mianzhi"=>$kfmianzhi,
				"shje"=>0,
				"zt"=>0,
				"createtime"=>time()
			);
			$id=$con->insertabe("ka_infos",$inarr);
		}
		$con->query("COMMIT");
	
	
	
	die("<script>alert('���ɳɹ�');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	
	
}elseif($action=="setpiname"){
	$newname=trim($_GET["newname"]);
	$id=trim($_GET["id"]);
	u8togbk($newname);
	if(empty($newname) || empty($id)){
		die("<script>alert('��д��Ϣ����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	
	$sql="UPDATE ka_picilist set piname='".$newname."' where id=".$id."";
	$re=$con->query($sql);
	exit;
}elseif($action=="plsetkabeizhu"){
	$startid=trim($_POST["startid"]);
	$endid=trim($_POST["endid"]);
	$beizhu=trim($_POST["beizhu"]);
	if(empty($startid) || empty($endid) || empty($beizhu)){
		die("<script>alert('��д��Ϣ����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	if((!is_numeric($startid)) || (!is_numeric($endid))){
		die("<script>alert('��д��Ϣ����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	
	$sql="UPDATE ka_infos set beizhu='".$beizhu."' where id>=".$startid." and id<=".$endid."";
	$re=$con->query($sql);
	die("<script>alert('��ע�ɹ�');window.parent.location.href=window.parent.location.href;</script>");

}elseif($action=="plmoveka"){
	$startid=trim($_POST["startid"]);
	$endid=trim($_POST["endid"]);
	$dailiname=trim($_POST["dailiname"]);
	if(empty($startid) || empty($endid) || empty($dailiname)){
		die("<script>alert('��д��Ϣ����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	if((!is_numeric($startid)) || (!is_numeric($endid))){
		die("<script>alert('��д��Ϣ����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	
	//�鿴�������Ƿ����
	
	//�鿴ָ�����������Ƿ�����ת�Ƶ�
	$sql="select count(*) as num from ka_infos where id>=".$startid." and id<=".$endid." and uid != 0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$ztiao=intval($row["num"]);//������
	if($ztiao>0){
		liuliangerr('ת��ʧ�ܣ�ָ������������ת�ƵĿ���');
	}
	
	/***************��ʼ����ת��*****************/
	//��ȡ����ת�Ƶ�����ֵ
	$sql="select sum(mianzhi) as num,sjhtype from ka_infos where id>=".$startid." and id<=".$endid." and uid=0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$kfmianzhi=floatval($row["num"]);//����ת�Ƶ�����ֵ
	$sjhtype=floatval($row["sjhtype"]);//����ת�Ƶ���Ӫ��
	
	$sql="select * from user_daili where username='".$dailiname."'";
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("<script>alert('ָ�������̲�����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	$dxnum=floatval($userinfo["dxnum"]);//���
	$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
	$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
	$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
	$uid=$userinfo["id"];
	
	$sqlzk=$yidongzk;
	$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
	if($sjhtype==1){
		$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
		$sqlzk=$liantongzk;
	}elseif($sjhtype==2){
		$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//�۷ѽ��
		$sqlzk=$dianxinzk;
	}
	$sqlzk=$sqlzk*0.1;
	//�жϽ��
	$userdxnum=$dxnum-$zongfeiyong;
	if($userdxnum<0){
		liuliangerr("���㣡");
	}
	//���Ļ���ʼ���ɿ���
	$con->query("BEGIN");
	$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
	$re=$con->query($sql);//�����û����
	
	$sql="UPDATE ka_infos SET uid=".$uid.",shje = mianzhi * ".$sqlzk." where id>=".$startid." and id<=".$endid." and uid=0";
	$re=$con->query($sql);//���¿�����
		
	$con->query("COMMIT");
	

	die("<script>alert('ת�Ƴɹ�');window.parent.location.href=window.parent.location.href;</script>");

}elseif($action=="dlshbeizhu"){
	$beizhu=trim($_POST["beizhu"]);
	$dailiname=trim($_POST["dailiname"]);
	$sql="select * from user_daili where username='".$dailiname."'";
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("<script>alert('ָ�������̲�����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	$uid=$userinfo["id"];
	$sql="UPDATE user_daili set kashbz='".$beizhu."' where id=".$uid;
	$re=$con->query($sql);//�����û���ע
	die("<script>alert('�����ɹ�');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="kazhuxiao"){
	$kaid=trim($_POST["kaid"]);
	$sql="select * from ka_infos where id=".$kaid;
	$re=$con->query($sql);
	$kainfo=mysql_fetch_array($re);
	if(empty($kainfo)){
		die("<script>alert('ָ����������');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	if($kainfo["zt"]!=0){
			die("<script>alert('�˿��ѱ�ʹ��');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	if($kainfo["uid"]<=0){
		$sql="UPDATE ka_infos set uid=-1 where id=".$kaid;
		$re=$con->query($sql);
		die("<script>alert('ע���ɹ�');window.parent.location.href=window.parent.location.href;</script>");
	}else{
		//������ѷ��䣬���˿�
		$dlid=$kainfo["uid"];
		$shje=$kainfo["shje"];
		
		$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$dlid;
		$re=$con->query($sql);//�����û����
		
		$sql="UPDATE ka_infos set uid=-1 where id=".$kaid;
		$re=$con->query($sql);
		die("<script>alert('ע���ɹ����˿�');window.parent.location.href=window.parent.location.href;</script>");
	
	}
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=km_create';</script>");
}
?>