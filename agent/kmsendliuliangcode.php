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
		baierrmsg('��д��Ϣ������!',"0");
	}
	
	if((!is_numeric($kahao)) || (!is_numeric($pwd)) || (!is_numeric($sjh))){
		baierrmsg('�˺��������!',"0");
	}
	if(empty($openid)){
		baierrmsg('��Դ����!',"0");
	}
	
	
	$sql="select * from `ka_infos` where id=".$kahao." and pwd='".$pwd."' and uid>0";
	$re=$con->query($sql);
	$kainfo=mysql_fetch_array($re);
	if(empty($kainfo)){
		baierrmsg('�˺��������!',"0");
	}
	if(!empty($kainfo["zt"])){
			baierrmsg('�˿��ѱ�ʹ��!',"0");
	}
		
	$err="";
	$a=addliuliang_km($kahao,$sjh,$openid,$err);
	if(empty($a)){
		baierrmsg("��ֵʧ��:".$err,"0");
	}

	baierrmsg('�ύ�ɹ�!',"1");
	
function baierrmsg($msg,$code){
	$msg=urlencode($msg);
	if(!empty($code)){
		die("<script>window.parent.location.href='../weixin/msgshow.php?msg=".$msg."&code=".$code."';</script>");
	}
	die("<script>window.parent.location.href='../weixin/msgshowerr.php?msg=".$msg."&code=".$code."';</script>");
}
?>