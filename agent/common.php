<?php
session_start();
set_time_limit(0);//永不超时
//error_reporting(E_ALL);//报告所有错误 测试时用
error_reporting(0);//屏蔽所有错误 正式运营时用
date_default_timezone_set ("Asia/Shanghai");
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

include_once(S_ROOT.'config.php');
include_once(S_ROOT.'baimaconfig.php');
require_once(S_ROOT."function.php");
require_once(S_ROOT."class_mysql.php");
?>
