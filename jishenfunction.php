<?php
//����������� ���ֵ� �Ϸ�����true �Ƿ�����false
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

//����������� �����в����е绰��֤ �Ϸ�����true �Ƿ�����false
function jishen_dianhuayanzheng($nei){
	//ȥ����������� �ո� б��
	$nei =preg_replace("/\s|\\\\|\//is","",$nei);
	//ȫ�ǹ���
	$qian=array("��","��","��","��","��","��","��","��","��","��");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    

	//���Ĺ��� 1
	$qian=array("һ","��","��","��","��","��","��","��","��","��");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    

	//���Ĺ��� 2
	$qian=array("��","��","��","��","��","��","��","��","��","��");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    


	
	
	if( preg_match("/(.*?)(\d{3,4})*\-*?\d{7,8}(.*)/is",$nei) || preg_match("/(.*?)1\d{10}(.*)/is",$nei))
	{
	 return false;
	}
	return true;
}


//����������� ���ź������ �Ϸ�����true �Ƿ�����false
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
