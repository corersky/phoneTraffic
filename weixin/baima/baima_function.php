<?php
//��ȡ�ļ�
function baima_sreadfile($filename){
	$content = '';
	if(function_exists('file_get_contents')) {
		@$content = file_get_contents($filename);
	} else {
		if(@$fp = fopen($filename, 'r')) {
			@$content = fread($fp, filesize($filename));
			@fclose($fp);
		}
	}
	return $content;
}
//д���ļ�
function baima_swritefile($filename, $writetext, $openmod='w') {
	if(@$fp = fopen($filename, $openmod)) {
		flock($fp, 2);
		fwrite($fp, $writetext);
		fclose($fp);
		return true;
	} else {
		return false;
	}
}

function template($name){
   if(strpos($name, "/")===false && strpos($name, "\\")===false){
	 //û��ָ��Ŀ¼����Ĭ��Ŀ¼
	 $tpl = BAIMA_TEMPLATE."$name";
	 }else{
	 //���ָ��Ŀ¼�Ļ�����ָ��Ŀ¼
	 $tpl = $name;
	 }
	$objfile = BAIMA_TEMPLATE_CACHE.preg_replace('/\/|\\\/s','_',$tpl).BAIMA_TEMPLATE_SUFFIX;
	$tplname=$tpl.BAIMA_TEMPLATE_SUFFIX;
	if(!file_exists($objfile) || (filemtime($objfile)<filemtime($tplname))) {
			include_once(BAIMA_ROOT.'./baima/baima_template.php');
			baima_template($tpl);
		}
	return $objfile;

}
?>