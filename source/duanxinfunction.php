<?php
//�û����Ͷ���
function usersendsmsduanxin($uid,$sjh,$nei,&$err){
	global $con;
	if(empty($sjh) || empty($nei)){
		$err="�ֻ��Ż����ݲ���Ϊ��";
		return false;
	}
	//��ȡ���û���Ϣ
	$sql="select * from `user` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		$err="ָ���û�������";
		return false;
	}
	$dxnum=floatval($userinfo["dxnum"]);
	$jiage=floatval($userinfo["jiage"]);
	if(($dxnum<=0) || ($dxnum<$jiage)){
		$err="����";
		return false;
	}
	$sjharr=explode(',', $sjh);
	$sjharr=filteremptyarr($sjharr);
	if(empty($sjharr)){
		$err="�ֻ���Ϊ��";
		return false;
	}
	$dxcount=intval(count($sjharr));
	$dxjg=$dxcount*$jiage;
	if($dxnum<$dxjg){
		$err="����";
		return false;
	}
	
	//��ȡ����ͨ��
	$sql="select * from `tongdaolist` where zt=1 limit 0,1";
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	if(empty($tongdaoinfo)){
		$err="��ȡ����ͨ��ʧ��";
		return false;
	}
	
	$functionname=trim($tongdaoinfo["functionname"]);
	if(!function_exists($functionname)){
		$err="��ȡ����ͨ������ʧ��";
		return false;
	}
	// $tempstr=$functionname($userinfo,$items,$err);
	
	$sjh=implode(",",$sjharr);
	
	//���Ͷ���
	$con->query("BEGIN");
		$dxnum=$dxnum-$dxjg;
		$sql="UPDATE user set dxnum=".$dxnum." where id=".$uid;
		$re=$con->query($sql);//�����û����
		$bz=$functionname($sjh,$nei,$err);
	$con->query("COMMIT");
	
	return $bz;
}