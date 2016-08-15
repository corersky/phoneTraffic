<?php
define('BAIMA_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('BAIMA_TEMPLATE', "baima".DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR);//模板默认目录，可更改。相对于根目录
define('BAIMA_TEMPLATE_CACHE', BAIMA_ROOT."baima".DIRECTORY_SEPARATOR."tpl_cache".DIRECTORY_SEPARATOR);//缓存目录，可更改
define('BAIMA_TEMPLATE_SUFFIX', ".html.php");//缓存后缀
include_once(BAIMA_ROOT.'baima/baima_function.php');
$evalarr=array();//eval 标签缓存
$evali=0;//eval 标签缓存标志
?>