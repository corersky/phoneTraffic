<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");
require_once("smsfunction.php");
$con=new MySql();

$sql="select * from `yuetixing`";
$re=$con->query($sql);
$yuetixinginfo=mysql_fetch_array($re);
$zt=intval($yuetixinginfo["zt"]);
if(empty($zt)){
	exit;
}
$yue=floatval($yuetixinginfo["yue"]);
if($yue<=0){
	exit;
}
$shybcz=intval($yuetixinginfo["shybcz"]);//�����²���ֵ������״̬ 0�ر�1����
$mytxyc=intval($yuetixinginfo["mytxyc"]);//ÿ������һ��״̬ 0�ر�1����
$nei=trim($yuetixinginfo["nei"]);

$sql="select id,username,dxnum,jiage,sjh from `user` where  dxnum <".$yue;
$re=$con->query($sql);
$sjharr=array();
while($row=mysql_fetch_array($re)){
//cs($row);
	if(!empty($shybcz)){
		$usershybcz=checkshybcz($row["id"]);
		if(empty($usershybcz)){
			continue;
		}
	}
	if(!empty($mytxyc)){
		$usermytxyc=checkmytxyc($row["sjh"]);
		if(!empty($usermytxyc)){
			continue;
		}
	}
	$sjharr[]=$row["sjh"];
}

//cs($sjharr);
$smscontentlen=bai_strlen($nei);
$dxnum=ceil($smscontentlen/67);//ÿ�������������
	
$nowtime=time();
$con->query("BEGIN");
foreach($sjharr as $sjh){
			//�洢
			$inarr=array(
				   "sjh"=>$sjh,
				   "nei"=>$nei,
				   "yzm"=>"",
				   "yzmconfigname"=>"yuetixing",
				   "num"=>$dxnum,
				   "createtime"=>$nowtime
			);
			$tid=$con->insertabe("yanzhengma",$inarr);
}
$con->query("COMMIT");
//���Ͷ���
$sjh=implode(",",$sjharr);

//��ȡ������֤��ͨ��id
	$tongdaoid=gettongdaoid_yzm();
$err="";
$bz=sendsms($sjh,$nei,$tongdaoid,$err);
die("ok");



//���ָ���û����������Ƿ��ֵ�������ֵ����1 ���򷵻�0
function checkshybcz($uid){
	global $con;
	$createtime=time()-60*60*24*90;
	$sql="select count(*) as num from `chongzhilog` where uid=".$uid." and createtime>".$createtime." and zt=1 and cztype in(0,1)";
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//������
	if($ztiao>0){
		return true;
	}else{
		return false;
	}
}

//���ָ���û������Ƿ������ѣ�������ѹ�����1 ���򷵻�0
function checkmytxyc($sjh){
	global $con;
	$createtime=time()-60*60*24*30;
	$sql="select count(*) as num from `yanzhengma` where createtime>".$createtime." and sjh='".$sjh."' and yzmconfigname='yuetixing'";
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//������
	if($ztiao>0){
		return true;
	}else{
		return false;
	}
}
?>