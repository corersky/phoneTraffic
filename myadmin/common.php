<?php
session_start();
set_time_limit(0);//������ʱ
//error_reporting(E_ALL);//�������д��� ����ʱ��
error_reporting(0);//�������д��� ��ʽ��Ӫʱ��
date_default_timezone_set ("Asia/Shanghai");
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

include_once(S_ROOT.'config.php');
include_once(S_ROOT.'baimaconfig.php');
require_once(S_ROOT."function.php");
require_once(S_ROOT."class_mysql.php");
?>
