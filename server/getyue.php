<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("../common.php");
	require_once("../smsfunction.php");
	require_once("serverfunction.php");
	//$con=new MySql();
	$username=trim($_POST["username"]);
	$pwd=trim($_POST["pwd"]);

	
	if(empty($username) || empty($pwd)){
		returnmsg(-1,"������Ϣ������");
	}
	
	$sql="select * from `user` where username='".$username."' and pwd='".$pwd."'";
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$uid=$userinfo["id"];
	if(empty($uid)){
		returnmsg(-2,"�û����������");
	}
	
	//�ж��û��Ƿ��ǽӿ��û�
	$sql="SELECT uid FROM user_jiekou where uid=".$uid." and zt=1";
	
	$re=$con->query($sql);
	$row=mysql_fetch_array($re,MYSQL_ASSOC);
	if(empty($row)){
		returnmsg(-3,"���ǽӿ��û�");
	}
	$userdxnum=floatval($userinfo["dxnum"]);
	returnmsg($userdxnum,"�ɹ�");

	/*************
	-1��������Ϣ������
	-2:�û����������
	-3:���ǽӿ��û�
	
	�������������
	*********/
	
?>