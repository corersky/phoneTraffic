<?php
require_once("common.php");
$con=new MySql();
$username=trim($_POST["username"]);
$sjh="";
if(!empty($username)){
	$sql="select username,sjh from `user` where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		die("ָ���˺Ų����ڣ�");
	}
	$sjh=trim($row["sjh"]);
	if(empty($sjh)){
		die("���˺�û�а��ֻ��ţ�����ϵ�ͷ��һأ�");
	}
	$sjh=substr($sjh,0,3)."****".substr($sjh,-3);
}
include template('zhaohuimima');
?>