<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	$con=new MySql();
	
	$sjh=trim($_POST["sjh"]);
	$kahao=trim($_POST["kahao"]);
	$pwd=intval($_POST["pwd"]);
	$openid=trim($_POST["openid"]);
	
	if(empty($sjh) || empty($kahao)|| empty($pwd)){
		baierrmsg('��д��Ϣ������!',$openid);
	}
	
	if((!is_numeric($kahao)) || (!is_numeric($pwd)) || (!is_numeric($sjh))){
		baierrmsg('�˺��������!',$openid);
	}
	if(empty($openid)){
		$openid="0";
	}
	
	
	$sql="select * from `ka_infos` where id=".$kahao." and pwd='".$pwd."' and uid>0";
	$re=$con->query($sql);
	$kainfo=mysql_fetch_array($re);
	if(empty($kainfo)){
		baierrmsg('�˺��������!',$openid);
	}
	if(!empty($kainfo["zt"])){
			baierrmsg('�˿��ѱ�ʹ��!',$openid);
	}
		
	$err="";
	$a=addliuliang_km($kahao,$sjh,$openid,$err);
	if(empty($a)){
		baierrmsg("��ֵʧ��:".$err,$openid);
	}

	baierrmsg('��ֵ�ɹ�!',$openid);
	
function baierrmsg($msg,$openid){
	if(!empty($openid)){
		die($msg);
	}
	die("<script>alert('".$msg."');window.parent.location.href=window.parent.location.href;</script>");
}
?>