<?php
//���Ͷ��ţ�����ͨ����ʧ�ܷ���false���ɹ�����taskid
 function sendsms($sjh,$nei,$tongdaoid,&$err){
	global $con;
	//$con1=new MySql();
	if(empty($sjh) || empty($nei)){
		$err="�ֻ��Ż����ݲ���Ϊ��";
		return false;
	}
	//��ȡ����ͨ��
	$sql="select * from `tongdaolist` where id=".$tongdaoid;
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	if(empty($tongdaoinfo)){
		$err="��ȡ����ͨ��ʧ��";
		return false;
	}
	$functionname=trim($tongdaoinfo["functionname"]);
	if(!function_exists($functionname)){
		$err="��ȡ����ͨ������ʧ��";
		return false;
	}
	
	$bz=$functionname($sjh,$nei,$err);
	return $bz;
}


//��ȡ�����ֻ��ŷ��ͳɹ�ʧ��״̬
 function getsmsstatus(){
	global $con;
	//��ȡ����ͨ��
	$sql="select * from `tongdaolist` where zt=1";
	$re=$con->query($sql);
	
	while($tongdaoinfo=mysql_fetch_array($re)){
		$functionname=trim($tongdaoinfo["getstatusfunctionname"]);
		if(!function_exists($functionname)){
			continue;
		}
		$bz=$functionname();
	}
	return true;
}

//��ȡָ��ͨ���Ļظ�
 function getsmshuifu(){
	global $con;
	//��ȡ����ͨ��
	$sql="select * from `tongdaolist` where zt=1";
	$re=$con->query($sql);
	while($tongdaoinfo=mysql_fetch_array($re)){
		$functionname=trim($tongdaoinfo["gethuifufunctionname"]);
		if(!function_exists($functionname)){
			continue;
		}
		$bz=$functionname();
	}
	return $bz;
}


/********************���涼�Ǿ���ͨ������******************************************/

/***************��һ��ͨ��*******************/
function baics($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$SoapRequest="action=send&userid=540&account=101201801&password=xzkj168&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://115.29.170.211:8085/sms.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("err.txt",$result);
	$a=getXmlData($result);
	u8togbk($a);
$taskID=$a["taskID"];
	if(($a["returnstatus"]=="Success") || ($taskID>0)){
		$err=$a["message"];
		csw("err.txt",$a["message"]);
		return $a["taskID"];
	}else{
		$err=$a["message"];
		$err="����������������漰���н����ʣ���ɱ����ύʧ�ܡ��ύʧ�ܵĶ������۷ѣ����ڳ�ֵ��¼��鿴������";
		csw("err.txt",$a["message"]);
		return false;
	}
	return false;
}



function baicsgetstatus(){
	global $con;
	$SoapRequest="action=query&userid=540&account=101201801&password=xzkj168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://115.29.170.211:8085/statusApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/smstd1_".date(YmdHis).".txt",$result);
	$a=getXmlData($result);
	$arr=$a["statusbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*90;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$status=$value["status"];
		$mobile=$value["mobile"];
		$errorcode=$value["errorcode"];
		$receivetime=$value["receivetime"];//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
		$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		
		if($status==20){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		}
		$con->query($sql);
	}
	
	return true;	
}




function baicsgethuifu(){
	global $con;
	$SoapRequest="action=query&userid=540&account=101201801&password=xzkj168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://115.29.170.211:8085/callApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	$a=getXmlData($result);
	$arr=$a["callbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	//cs($arr);
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*90;
	$sql="SELECT uid,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["uid"];
	}
	$nowtime=time();
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$mobile=$value["mobile"];
		$content=$value["content"];
		u8togbk($content);
		$uid=$orderidarr[$taskid];
		if(empty($uid) || empty($mobile)){
			continue;
		}
		
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$mobile,
			"nei"=>$content,
			"createtime"=>$nowtime
		);
		$con->insertabe("smshuifu",$inarr);
	}
	
	return $arr;	
}



/***************�ڶ���ͨ��*******************/
//���Ͷ���
function tongdao_sms2($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$sjharr=explode(",", $sjh);
	
	$ydsjharr=array();
	$qtsjharr=array();
	foreach($sjharr as $hm){
		if(empty($hm)){
			continue;
		}
		$bz=gettongdaotype($hm);
		if($bz==1){
			$ydsjharr[]=$hm;
		}else{
			$qtsjharr[]=$hm;
		}
	}
	$ydtaskid="";
	$qttaskid="";
	if(!empty($ydsjharr)){
		$sjh=implode(",",$ydsjharr);
		$ydtaskid=tongdao_sms2_yidong($sjh,$nei,$err);
	}
	
	if(!empty($qtsjharr)){
		$sjh=implode(",",$qtsjharr);
		$qttaskid=tongdao_sms2_liantong($sjh,$nei,$err);
	}
	
	$restr="";
	if(!empty($ydtaskid)){
		$restr=$ydtaskid.",";
	}
	if(!empty($qttaskid)){
		$restr.=$qttaskid.",";
	}
	if(!empty($restr)){
		$restr=substr($restr,0,-1);
	}
	return $restr;
}

function tongdao_sms2_yidong($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$SoapRequest="flag=sendsms&loginname=zzxzkj&password=D2F1739DB1DEADAD88F506BE9E77B361&p=".$sjh."&c=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.0532dxw.net/Modules/Interface/http/Iservices.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	//var_dump($result);
	$b = explode(",", $result);
	if(empty($b[0])){
		return $b[1];
	}
	return false;
}
function tongdao_sms2_liantong($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$SoapRequest="flag=sendsms&loginname=ldzzxz&password=D2F1739DB1DEADAD88F506BE9E77B361&p=".$sjh."&c=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.0532dxw.net/Modules/Interface/http/Iservices.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	//var_dump($result);
	$b = explode(",", $result);
	if(empty($b[0])){
		return $b[1];
	}
	return false;
}



//��ȡ����״̬ ������������ϳ�����ͨ��������һ���������εĻ�ȡͨ������
function tongdao2_getstatus(){


global $con;
	//��ȡorderid
	$time=time()-60*60*24*10;
	$sql="SELECT id,taskid FROM smsorders where createtime>".$time." and tongdaoid=2 and zt=1 ";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$taskarr=explode(",", $row["taskid"]);
		foreach($taskarr as $taskid){
			$orderidarr[$taskid]=$row["id"];
		}
	}
	
	$nowtime=time();
	
	$arr=tongdao2_getzt("");
	//���·�������״̬
	foreach($arr as $value){
		$t=$value[2];
		$t=substr($t,6,4)."-".substr($t,0,2)."-".substr($t,3,2)." ".substr($t,11);
		$receivetime=strtotime($t);
		if(empty($receivetime)){
			$receivetime=$nowtime;
		}
		$taskid=$value[4];
		$status=$value[1];
		$mobile=$value[0];
		$errorcode=$value[3];
		$receivetime=$receivetime;//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		//$receivetime=strtotime($receivetime);
		if($status==10){
			$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
			$re=$con->query($sql);
		}elseif($status==11){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
			$re=$con->query($sql);
		}
	}
	
	
	$arr=tongdao2_getzt2("");
	//���·�������״̬
	foreach($arr as $value){
		$t=$value[2];
		$t=substr($t,6,4)."-".substr($t,0,2)."-".substr($t,3,2)." ".substr($t,11);
		$receivetime=strtotime($t);
		if(empty($receivetime)){
			$receivetime=$nowtime;
		}
		
		$taskid=$value[4];
		$status=$value[1];
		$mobile=$value[0];
		$errorcode=$value[3];
		$receivetime=$receivetime;//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		//$receivetime=strtotime($receivetime);
		if($status==10){
			$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
			$re=$con->query($sql);
		}elseif($status==11){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
			$re=$con->query($sql);
		}
	}
	

	
}

function tongdao2_getzt($pno){
	$SoapRequest="flag=getnreport&loginname=zzxzkj&password=D2F1739DB1DEADAD88F506BE9E77B361&pno=".$pno;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.0532dxw.net/Modules/Interface/http/Iservices.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	

csw("tongdao2.txt",$result);


	$str=iconv("UTF-8","GBK//IGNORE",$result);
	$arr=explode("#", $str);
	$ztarr=array();
	foreach($arr as $value){
		$row=explode("|*|", $value);
		if(!empty($row)){
			$ztarr[]=$row;
		}
	}


	return $ztarr;
}
function tongdao2_getzt2($pno){
	$SoapRequest="flag=getnreport&loginname=ldzzxz&password=D2F1739DB1DEADAD88F506BE9E77B361&pno=".$pno;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.0532dxw.net/Modules/Interface/http/Iservices.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);

	csw("tongdao2.txt",$result);

	$str=iconv("UTF-8","GBK//IGNORE",$result);
	$arr=explode("#", $str);
	$ztarr=array();
	foreach($arr as $value){
		$row=explode("|*|", $value);
		if(!empty($row)){
			$ztarr[]=$row;
		}
	}

	

	return $ztarr;
}

//��ȡ�ظ�

function tongdao2_gethuifu(){
	global $con;
	$SoapRequest="flag=getreceive&loginname=zzxzkj&password=D2F1739DB1DEADAD88F506BE9E77B361";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.0532dxw.net/Modules/Interface/http/Iservices.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$str=iconv("UTF-8","GBK//IGNORE",$result);
	$arr=explode("#", $str);
	$hfarr=array();
	foreach($arr as $value){
		if(empty($value)){
			continue;
		}
		$row=explode("|*|", $value);
		if(empty($row[0]) || empty($row[1])){
			continue;
		}
		$hfarr[]=$row;
	}
	
	if(empty($hfarr)){
		return false;
	}
	
	
	$nowtime=time();
	$time=$nowtime-60*60*24*7;
	//���·�������״̬
	foreach($hfarr as $value){
		$mobile=$value[0];
		$content=$value[1];
		if(empty($mobile)){
			continue;
		}
		//��ȡ�û�id
		$sql="SELECT tid FROM smsordersinfo where createtime>".$time." and sjh='".$mobile."' LIMIT 0,1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re,MYSQL_ASSOC);
		if(empty($row["tid"])){
			continue;
		}
		
		$sql="SELECT uid FROM smsorders where id=".$row["tid"]." and tongdaoid=2 LIMIT 0,1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re,MYSQL_ASSOC);
		if(empty($row["uid"])){
			continue;
		}
		$uid=$row["uid"];
		
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$mobile,
			"nei"=>$content,
			"createtime"=>$nowtime
		);
		$con->insertabe("smshuifu",$inarr);
	}
	
	return $arr;	
}







/***************������ͨ��*******************/
//���Ͷ���
function tongdao_sms3($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$name=iconv("GBK","UTF-8//IGNORE","���пƼ��̳�");
	$SoapRequest="action=send&userid=451&account=".$name."&password=zhangqian168&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://113.11.210.108:6666/sms.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	$a=getXmlData($result);
	u8togbk($a);
	//cs($a);
	if($a["returnstatus"]=="Success"){
		$err=$a["message"];
		return $a["taskID"];
	}else{
		$err=$a["message"];
		$err="����������������漰���н����ʣ���ɱ����ύʧ�ܡ��ύʧ�ܵĶ������۷ѣ����ڳ�ֵ��¼��鿴������";
		return false;
	}
	return false;
}


function tongdao3_getstatus(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","���пƼ��̳�");
	$SoapRequest="action=query&userid=451&account=".$name."&password=zhangqian168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://113.11.210.108:6666/statusApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$a=getXmlData($result);
	$arr=$a["statusbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$status=$value["status"];
		$mobile=$value["mobile"];
		$errorcode=$value["errorcode"];
		$receivetime=$value["receivetime"];//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
		$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		
		if($status==20){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		}
		$con->query($sql);
	}
	
	return true;	
}





//��ȡ�ظ�
function tongdao3_gethuifu(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","���пƼ��̳�");
	$SoapRequest="action=query&userid=451&account=".$name."&password=zhangqian168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://113.11.210.108:6666/callApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	$a=getXmlData($result);
	$arr=$a["callbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	//cs($arr);
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT uid,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["uid"];
	}
	$nowtime=time();
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$mobile=$value["mobile"];
		$content=$value["content"];
		u8togbk($content);
		$uid=$orderidarr[$taskid];
		if(empty($uid) || empty($mobile)){
			continue;
		}
		
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$mobile,
			"nei"=>$content,
			"createtime"=>$nowtime
		);
		$con->insertabe("smshuifu",$inarr);
	}
	
	return $arr;	
}








/***************���ĸ�ͨ��*******************/
//���Ͷ���
function tongdao_sms4($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$name=iconv("GBK","UTF-8//IGNORE","ydyx-xinz");
	$SoapRequest="action=send&userid=648&account=".$name."&password=xzkj168zhangqian&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://112.74.130.54:5588/sms.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	$a=getXmlData($result);
	u8togbk($a);
	//cs($a);
	if($a["returnstatus"]=="Success"){
		$err=$a["message"];
		return $a["taskID"];
	}else{
		$err=$a["message"];
		$err="����������������漰���н����ʣ���ɱ����ύʧ�ܡ��ύʧ�ܵĶ������۷ѣ����ڳ�ֵ��¼��鿴������";
		return false;
	}
	return false;
}


function tongdao4_getstatus(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","ydyx-xinz");
	$SoapRequest="action=query&userid=648&account=".$name."&password=xzkj168zhangqian";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://112.74.130.54:5588/statusApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$a=getXmlData($result);
//cs($a);
	$arr=$a["statusbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$status=$value["status"];
		$mobile=$value["mobile"];
		$errorcode=$value["errorcode"];
		$receivetime=$value["receivetime"];//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
		$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		
		if($status==20){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		}
		$con->query($sql);
	}
	
	return true;	
}





//��ȡ�ظ�
function tongdao4_gethuifu(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","ydyx-xinz");
	$SoapRequest="action=query&userid=648&account=".$name."&password=xzkj168zhangqian";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://112.74.130.54:5588/callApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	$a=getXmlData($result);
	$arr=$a["callbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	//cs($arr);
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT uid,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();


	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["uid"];
	}
	$nowtime=time();
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$mobile=$value["mobile"];
		$content=$value["content"];
		u8togbk($content);
		$uid=$orderidarr[$taskid];
		if(empty($uid) || empty($mobile)){
			continue;
		}
		
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$mobile,
			"nei"=>$content,
			"createtime"=>$nowtime
		);
		$con->insertabe("smshuifu",$inarr);
	}
	
	return $arr;	
}





/***************�����ͨ��*******************/
//���Ͷ���
function tongdao_sms5($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=urlencode($nei);
	$SoapRequest="Channel=1&Account=xzkj&Password=zhangqian&Phones=".$sjh."&Content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://203.156.234.117:8000/SendSms.asp");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	if($result<1){
		$err="����������������漰���н����ʣ���ɱ����ύʧ�ܡ��ύʧ�ܵĶ������۷ѣ����ڳ�ֵ��¼��鿴������";
		return false;
	}
	return $result;
}


function tongdao5_getstatus(){
	global $con;
	$SoapRequest="Account=xzkj&Password=zhangqian";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://203.156.234.117:8000/GetReport.asp");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	//var_dump($result);
	
	$arr=explode("||||", $result);
	$ztarr=array();
	foreach($arr as $value){
		$row=explode("$$$$", $value);
		if(!empty($row)){
			if(!empty($row)){
				$ztarr[]=$row;
			}
		}
	}
	
	
	if(empty($ztarr)){
		return false;
	}
	$taskidarr=array();
	foreach($ztarr as $value){
		$taskidarr[]=$value[0];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*5;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	//���·�������״̬
	foreach($ztarr as $value){
		$taskid=$value[0];
		$status=$value[3];
		$mobile=$value[1];
		$errorcode=$value[4];
		$receivetime=$value[2];//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
		$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		
		if($status=="ʧ��"){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		}
		$con->query($sql);
	}
	
	return true;	
}





//��ȡ�ظ�
function tongdao5_gethuifu(){
	global $con;
	$SoapRequest="Account=xzkj&Password=zhangqian";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://203.156.234.117:8000/GetMessage.asp");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	var_dump($result);
	
	
	$arr=explode("||||", $result);
	$ztarr=array();
	foreach($arr as $value){
		$row=explode("$$$$", $value);
		if(!empty($row)){
			if(!empty($row)){
				$ztarr[]=$row;
			}
		}
	}
	
	if(empty($ztarr)){
		return false;
	}
	
	$nowtime=time();
	$time=$nowtime-60*60*24*7;
	//���·�������״̬
	foreach($hfarr as $value){
		$mobile=$value[0];
		$content=$value[1];
		if(empty($mobile)){
			continue;
		}
		//��ȡ�û�id
		$sql="SELECT tid FROM smsordersinfo where createtime>".$time." and sjh='".$mobile."' LIMIT 0,1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re,MYSQL_ASSOC);
		if(empty($row["tid"])){
			continue;
		}
		
		$sql="SELECT uid FROM smsorders where id=".$row["tid"]." and tongdaoid=5 LIMIT 0,1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re,MYSQL_ASSOC);
		if(empty($row["uid"])){
			continue;
		}
		$uid=$row["uid"];
		
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$mobile,
			"nei"=>$content,
			"createtime"=>$nowtime
		);
		$con->insertabe("smshuifu",$inarr);
	}
	

}






/***************��6��ͨ��*******************/
//���Ͷ���
function tongdao_sms6($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	
	$nei=urlencode($nei);
	$SoapRequest="Account=820394935&Password=xzkj168&Phones=".$sjh."&Content=".$nei."&Channel=1&SendTime=";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://117.41.184.102:8000/SendSms.asp");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	if($result<=0){
		$err="����������������漰���н����ʣ���ɱ����ύʧ�ܡ��ύʧ�ܵĶ������۷ѣ����ڳ�ֵ��¼��鿴������";
		return false;
	}
	return $result;
}


function tongdao6_getstatus(){
	global $con;
	$SoapRequest="Account=820394935&Password=xzkj168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://117.41.184.102:8000/GetReport.asp");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	if(empty($result)){
		return false;
	}
	$arr=explode("||||", $result);
	
	$ztarr=array();
	foreach($arr as $value){
		$row=explode("$$$$", $value);
		if(!empty($row)){
			if(!empty($row)){
				$ztarr[]=$row;
			}
		}
	}
	
	
	if(empty($ztarr)){
		return false;
	}
	$taskidarr=array();
	foreach($ztarr as $value){
		$taskidarr[]=$value[0];
	}
	$taskids=implode(",",$taskidarr);
	
	
	//��ȡorderid
	$createtime=time()-60*60*24*5;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	
	//���·�������״̬
	foreach($ztarr as $value){
		$taskid=$value[0];
		$status=$value[3];
		$mobile=$value[1];
		$errorcode=$value[4];
		$receivetime=$value[2];//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
		$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		
		if($status=="ʧ��"){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		}
		$con->query($sql);
	}
	
	return true;	
	
}


//��ȡ�ظ�
function tongdao6_gethuifu(){
	global $con;
	$SoapRequest="Account=820394935&Password=xzkj168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://117.41.184.102/GetMessage.asp");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	if(empty($result)){
		return false;
	}
	$arr=explode("||||", $result);
	$ztarr=array();
	foreach($arr as $value){
		$row=explode("$$$$", $value);
		if(!empty($row)){
			if(!empty($row)){
				$ztarr[]=$row;
			}
		}
	}
	
	if(empty($ztarr)){
		return false;
	}
	
	$nowtime=time();
	$time=$nowtime-60*60*24*7;
	//���·�������״̬
	foreach($hfarr as $value){
		$mobile=$value[0];
		$content=$value[1];
		if(empty($mobile)){
			continue;
		}
		//��ȡ�û�id
		$sql="SELECT tid FROM smsordersinfo where createtime>".$time." and sjh='".$mobile."' LIMIT 0,1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re,MYSQL_ASSOC);
		if(empty($row["tid"])){
			continue;
		}
		
		$sql="SELECT uid FROM smsorders where id=".$row["tid"]." and tongdaoid=6 LIMIT 0,1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re,MYSQL_ASSOC);
		if(empty($row["uid"])){
			continue;
		}
		$uid=$row["uid"];
		
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$mobile,
			"nei"=>$content,
			"createtime"=>$nowtime
		);
		$con->insertabe("smshuifu",$inarr);
	}
	

}







/***************��7��ͨ��*******************/
//���Ͷ���
function tongdao_sms7($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$name=iconv("GBK","UTF-8//IGNORE","ydhy-xinz");
	$SoapRequest="action=send&userid=788&account=".$name."&password=ydhy-xinz&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://112.74.130.54:5588/sms.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	$a=getXmlData($result);
	u8togbk($a);
	//cs($a);
	if($a["returnstatus"]=="Success"){
		$err=$a["message"];
		return $a["taskID"];
	}else{
		$err=$a["message"];
		$err="����������������漰���н����ʣ���ɱ����ύʧ�ܡ��ύʧ�ܵĶ������۷ѣ����ڳ�ֵ��¼��鿴������";
		return false;
	}
	return false;
}


function tongdao7_getstatus(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","ydhy-xinz");
	$SoapRequest="action=query&userid=788&account=".$name."&password=ydhy-xinz";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://112.74.130.54:5588/statusApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//echo $result;
	$a=getXmlData($result);
//cs($a);
	$arr=$a["statusbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$status=$value["status"];
		$mobile=$value["mobile"];
		$errorcode=$value["errorcode"];
		$receivetime=$value["receivetime"];//����ʱ��
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
		$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		
		if($status==20){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
		}
		$con->query($sql);
	}
	
	return true;	
}





//��ȡ�ظ�
function tongdao7_gethuifu(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","ydhy-xinz");
	$SoapRequest="action=query&userid=788&account=".$name."&password=ydhy-xinz";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://112.74.130.54:5588/callApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	$a=getXmlData($result);
	$arr=$a["callbox"];
	if(!empty($arr) && empty($arr[0])){
		$arr=array($arr);
	}
	//cs($arr);
	if(empty($arr)){
		return false;
	}
	$taskidarr=array();
	foreach($arr as $value){
		$taskidarr[]=$value["taskid"];
	}
	$taskids=implode(",",$taskidarr);
	
	//��ȡorderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT uid,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();


	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["uid"];
	}
	$nowtime=time();
	//���·�������״̬
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$mobile=$value["mobile"];
		$content=$value["content"];
		u8togbk($content);
		$uid=$orderidarr[$taskid];
		if(empty($uid) || empty($mobile)){
			continue;
		}
		
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$mobile,
			"nei"=>$content,
			"createtime"=>$nowtime
		);
		$con->insertabe("smshuifu",$inarr);
	}
	
	return $arr;	
}





//==================================================================
//��������gettongdaotype
//���ߣ��׶���
//���ڣ�2014.01.17
//���ܣ���ȡͨ������
//���������$sjh:�ֻ���
//����ֵ������ͨ��1�ƶ�2��ͨ3����
//�޸ļ�¼����
//==================================================================
function gettongdaotype($sjh){
	//$yidonghd=array('134','135','136','137','138','139','147','150','151','152','157','158','159','182','187','188');
	$liantonghd=array('130','131','132','155','156','185','186','145');
	$dianxinhd=array('133','153','180','189','181');
	$hd=substr($sjh,0,3);
	if(in_array($hd,$liantonghd)){
		//����ͨ��
		return 2;
	}elseif(in_array($hd,$dianxinhd)){
		//�õ��ŷ�
		return 3;
	}else{
		//���ƶ���
		return 1;
	}
	return 1;
}