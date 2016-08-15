<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
require_once("smsfunction.php");
$con=new MySql();
getsmshuifu();

//启动流量状态更新程序
$url="http://127.0.0.1/liuliangupzt.php";
get_url_contents($url);

//启动流量状态更新程序
$url="http://127.0.0.1/agent/liuliangupzt.php";
get_url_contents($url);


//启动流量状态更新程序
$url="http://127.0.0.1/agent/liuliangerrordertk.php";
get_url_contents($url);

//启动邀请奖励结算程序
$url="http://127.0.0.1/dsjsyaoqingjl.php";
//get_url_contents($url);

$somecontent=date("Y-m-d H:i:s").":gethuifumsg \n";
csw("111.txt",$somecontent);
?>
ok