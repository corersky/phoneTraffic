<?php
session_start();
header('Content-Type:text/html;charset=GB2312');
set_time_limit(0);//������ʱ
//error_reporting(E_ALL);//�������д��� ����ʱ��
error_reporting(0);//�������д��� ��ʽ��Ӫʱ��
date_default_timezone_set ("Asia/Shanghai");
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
include_once(S_ROOT.'config.php');
require_once(S_ROOT."function.php");
require_once(S_ROOT."class_mysql.php");
?>
