<?php
define('BAIMA_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('BAIMA_TEMPLATE', "baima".DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR);//ģ��Ĭ��Ŀ¼���ɸ��ġ�����ڸ�Ŀ¼
define('BAIMA_TEMPLATE_CACHE', BAIMA_ROOT."baima".DIRECTORY_SEPARATOR."tpl_cache".DIRECTORY_SEPARATOR);//����Ŀ¼���ɸ���
define('BAIMA_TEMPLATE_SUFFIX', ".html.php");//�����׺
include_once(BAIMA_ROOT.'baima/baima_function.php');
$evalarr=array();//eval ��ǩ����
$evali=0;//eval ��ǩ�����־
?>