<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="setpwd"){
	$jiupwd=trim($_POST["jiupwd"]);
	$pwd=trim($_POST["pwd"]);
	$pwd2=trim($_POST["pwd2"]);
	if(empty($jiupwd) || empty($pwd) || empty($pwd2)){
		die("<script>alert('��д��Ϣ������!');</script>");
	}
	if($pwd!=$pwd2){
		die("<script>alert('�����������벻һ��!');</script>");
	}

	//��֤�������Ƿ���ȷ
	$sql="select * from `user_admin` where id=".$_SESSION["admin_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$jiup=trim($userinfo["pwd"]);
	if($jiup!=$jiupwd){
		die("<script>alert('���������!');</script>");
	}
	
	$sql="UPDATE user_admin set pwd='".$pwd."' where id=".$_SESSION["admin_uid"];
	$re=$con->query($sql);//�����û�����
	die("<script>alert('�޸ĳɹ�');window.parent.location.href=window.parent.location.href;</script>");
}

?>