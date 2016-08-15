<?php
//机器审核条件 黑字典 合法返回true 非法返回false
function jishen_heizidian($nei){
	global $con;
	$sql="SELECT wjc FROM hzd WHERE INSTR('".$nei."',wjc) LIMIT 0,1";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		return true;
	}
	return false;
}

//机器审核条件 内容中不能有电话验证 合法返回true 非法返回false
function jishen_dianhuayanzheng($nei){
	//去掉里面的所有 空格 斜杠
	$nei =preg_replace("/\s|\\\\|\//is","",$nei);
	//全角过滤
	$qian=array("１","２","３","４","５","６","７","８","９","０");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    

	//中文过滤 1
	$qian=array("一","二","三","四","五","六","七","八","九","零");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    

	//中文过滤 2
	$qian=array("①","②","③","④","⑤","⑥","⑦","⑧","⑨","〇");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    


	
	
	if( preg_match("/(.*?)(\d{3,4})*\-*?\d{7,8}(.*)/is",$nei) || preg_match("/(.*?)1\d{10}(.*)/is",$nei))
	{
	 return false;
	}
	return true;
}


//机器审核条件 短信号码个数 合法返回true 非法返回false
function jishen_smssjhnumyanzheng($num){
	global $con;
	$sql="select * from `configdb` where configkey='jishensendnum'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$congigvalue=intval($row["congigvalue"]);
	
	if($congigvalue<=0){
		return true;
	}
	if($num<=$congigvalue){
		return true;
	}
	return false;
}
