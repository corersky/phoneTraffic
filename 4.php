<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("smsfunction.php");
	require_once("jishenfunction.php");
	$con=new MySql();
	

	//����ȡ��Ʊ���
	$sql="select sjh from `smsordersinfo` where tid=8429";
	$re=$con->query($sql);
	while($row=mysql_fetch_array($re)){
	echo $row['sjh']."<br>";
	}
?>