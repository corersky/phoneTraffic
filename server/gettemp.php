<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("../common.php");
	require_once("../smsfunction.php");
	require_once("serverfunction.php");
	$con=new MySql();
	$username=trim($_POST["username"]);
	$pwd=trim($_POST["pwd"]);

	
	if(empty($username) || empty($pwd)){
		die("3,����������");
	}
	
	$sql="select * from `user` where username='".$username."' and pwd='".$pwd."'";
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	$uid=$userinfo["id"];
	if(empty($uid)){
		die("1,�û����������");
	}
	
	//�ж��û��Ƿ��ǽӿ��û�
	$sql="SELECT uid FROM user_jiekou where uid=".$uid." and zt=1";
	
	$re=$con->query($sql);
	$row=mysql_fetch_array($re,MYSQL_ASSOC);
	if(empty($row)){
		die("2,���ǽӿ��û�");
	}
	
	//��ȡģ��
	$sql="SELECT temp FROM jiekou_temp where uid=".$uid." and zt=1";
	$re=$con->query($sql);
	$temparr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$temparr[]=$row["temp"];
	}
	$tempastr = implode("`",$temparr);
	$tempastr = "200`".$tempastr;
	die($tempastr);


	/*************
	3��������Ϣ������
	1:�û����������
	2:���ǽӿ��û�
	
	200���ɹ�
	*********/
	
?>