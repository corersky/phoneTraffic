<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");
require_once("smsfunction.php");
$con=new MySql();
getsmshuifu();

//��������״̬���³���
$url="http://127.0.0.1/liuliangupzt.php";
get_url_contents($url);

//��������״̬���³���
$url="http://127.0.0.1/agent/liuliangupzt.php";
get_url_contents($url);


//��������״̬���³���
$url="http://127.0.0.1/agent/liuliangerrordertk.php";
get_url_contents($url);

//�������뽱���������
$url="http://127.0.0.1/dsjsyaoqingjl.php";
//get_url_contents($url);

$somecontent=date("Y-m-d H:i:s").":gethuifumsg \n";
csw("111.txt",$somecontent);
?>
ok