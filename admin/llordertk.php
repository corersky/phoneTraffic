<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");

//$con=new MySql();
$con   =   MySQL::getInstance();

if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}

$tid=trim($_GET["tid"]);

	$time=time()-60*60*24*30;
	$sql="select * from `liuliangdaili_log` where id=".$tid." and createtime>".$time." and istk=0";
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	if(empty($orderinfo)){
		die("<script>alert('ָ�����������ڻ��Ѿ��˹��');</script>");
	}
	
	$uid=$orderinfo["uid"];
	$shje=floatval($orderinfo["shje"]);
	if(empty($uid) && ($shje<=0)){
		die("<script>alert('ָ��������Ϣ����');</script>");
	}
	
	$sql="UPDATE liuliangdaili_log SET istk=1,issd=1,beizhu2='δ�����˿�' where id=".$tid;
	$con->query($sql);
			
	//�������
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//�����û����

die("<script>alert('�˿�ɹ�');window.parent.location.href=window.parent.location.href;</script>");
	


?>