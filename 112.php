<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
$con=new MySql();
exit;
//getsmsstatus();
tongdao2_getzt("");
//发送短信，返回通道的失败返回false，成功返回taskid
 function sendsms($sjh,$nei,$tongdaoid,&$err){
	global $con;
	//$con1=new MySql();
	if(empty($sjh) || empty($nei)){
		$err="手机号或内容不能为空";
		return false;
	}
	//获取发送通道
	$sql="select * from `tongdaolist` where id=".$tongdaoid;
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	if(empty($tongdaoinfo)){
		$err="获取发送通道失败";
		return false;
	}
	$functionname=trim($tongdaoinfo["functionname"]);
	if(!function_exists($functionname)){
		$err="获取发送通道程序失败";
		return false;
	}
	
	$bz=$functionname($sjh,$nei,$err);
	return $bz;
}


//获取发送手机号发送成功失败状态
 function getsmsstatus(){
	global $con;
	//获取发送通道
	$sql="select * from `tongdaolist` where zt=1 and id=2";
	$re=$con->query($sql);
	
	while($tongdaoinfo=mysql_fetch_array($re)){
		$functionname=trim($tongdaoinfo["getstatusfunctionname"]);
		if(!function_exists($functionname)){
			continue;
		}
		echo "开始调用:".$functionname."<br>";
		$bz=$functionname();
	}
	return true;
}

//获取指定通道的回复
 function getsmshuifu(){
	global $con;
	//获取发送通道
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


/********************下面都是具体通道函数******************************************/

/***************第一个通道*******************/
function baics($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$SoapRequest="action=send&userid=540&account=101201801&password=xzkj168&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://115.29.170.211:8085/sms.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	$a=getXmlData($result);
	u8togbk($a);
	if($a["returnstatus"]=="Success"){
		$err=$a["message"];
		return $a["taskID"];
	}else{
		$err=$a["message"];
		$err="由于网络或发送内容涉及敏感禁发词，造成本次提交失败。提交失败的订单不扣费，可在充值记录里查看返还金额。";
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
	
	//获取orderid
	$createtime=time()-60*60*24*90;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	//更新发送详情状态
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$status=$value["status"];
		$mobile=$value["mobile"];
		$errorcode=$value["errorcode"];
		$receivetime=$value["receivetime"];//接收时间
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
	
	//获取orderid
	$createtime=time()-60*60*24*90;
	$sql="SELECT uid,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["uid"];
	}
	$nowtime=time();
	//更新发送详情状态
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



/***************第二个通道*******************/
//发送短信
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



//获取发送状态 扯淡的需求加上扯淡的通道产生出一个扯淡畸形的获取通道程序
function tongdao2_getstatus(){
global $con;
echo "通道2开始获取状态<br>";
	//获取orderid
	$time=time()-60*60*24*10;
	$sql="SELECT id,taskid FROM smsorders where createtime>".$time." and tongdaoid=2 and zt=1 ";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$taskarr=explode(",", $row["taskid"]);
		foreach($taskarr as $taskid){
			$orderarr[$taskid]=$row["id"];
		}
	}
	
	$arr=tongdao2_getzt("");
	echo "通道2获取移动状态信息<br>";
	cs($arr);
	//更新发送详情状态
	foreach($arr as $value){
		$t=$value[2];
		$t=substr($t,6,4)."-".substr($t,0,2)."-".substr($t,3,2)." ".substr($t,11);
		echo "时间：".$t."<br>";
		$receivetime=strtotime($t);

		$taskid=$value[4];
		$status=$value[1];
		$mobile=$value[0];
		$errorcode=$value[3];
		$receivetime=$receivetime;//接收时间
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
		if($status==10){
			$sql="UPDATE smsordersinfo SET zt=1,createtime=".$receivetime.",beizhu='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
			$re=$con->query($sql);
		}elseif($status==11){
			$sql="UPDATE smsordersinfo SET zt=2,msg='".$errorcode."' where tid=".$tid." and sjh='".$mobile."'";
			$re=$con->query($sql);
		}
	}
	
	
	$arr=tongdao2_getzt2("");
	echo "通道2获取lt状态信息<br>";
	cs($arr);
	//更新发送详情状态
	foreach($arr as $value){
		$t=$value[2];
		$t=substr($t,6,4)."-".substr($t,0,2)."-".substr($t,3,2)." ".substr($t,11);
		$receivetime=strtotime($t);

		$taskid=$value[4];
		$status=$value[1];
		$mobile=$value[0];
		$errorcode=$value[3];
		$receivetime=$receivetime;//接收时间
		$tid=$orderidarr[$taskid];
		if(empty($tid) || empty($mobile)){
			continue;
		}
		$receivetime=strtotime($receivetime);
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
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	var_dump($result);
	$str=iconv("UTF-8","GBK//IGNORE",$result);
	var_dump($str);
	echo "获取移动状态<br>";
	cs($str);
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
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$str=iconv("UTF-8","GBK//IGNORE",$result);
	echo "获取联通状态<br>";
	cs($str);
	$arr=explode("#", $str);
	$ztarr=array();
	foreach($arr as $value){
		$row=explode("|*|", $value);
		$ztarr[]=$row;
	}
	return $ztarr;
}

//获取回复

function tongdao2_gethuifu(){
	global $con;
	$SoapRequest="flag=getreceive&loginname=zzxzkj&password=D2F1739DB1DEADAD88F506BE9E77B361";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.0532dxw.net/Modules/Interface/http/Iservices.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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
	//更新发送详情状态
	foreach($hfarr as $value){
		$mobile=$value[0];
		$content=$value[1];
		if(empty($mobile)){
			continue;
		}
		//获取用户id
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







/***************第三个通道*******************/
//发送短信
function tongdao_sms3($sjh,$nei,&$err){
	if(empty($sjh) || empty($nei)){
		return false;
	}
	$nei=iconv("GBK","UTF-8//IGNORE",$nei);
	$name=iconv("GBK","UTF-8//IGNORE","新中科技商超");
	$SoapRequest="action=send&userid=451&account=".$name."&password=zhangqian168&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://113.11.210.108:6666/sms.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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
		$err="由于网络或发送内容涉及敏感禁发词，造成本次提交失败。提交失败的订单不扣费，可在充值记录里查看返还金额。";
		return false;
	}
	return false;
}


function tongdao3_getstatus(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","新中科技商超");
	$SoapRequest="action=query&userid=451&account=".$name."&password=zhangqian168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://113.11.210.108:6666/statusApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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
	
	//获取orderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT id,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["id"];
	}
	
	//更新发送详情状态
	foreach($arr as $value){
		$taskid=$value["taskid"];
		$status=$value["status"];
		$mobile=$value["mobile"];
		$errorcode=$value["errorcode"];
		$receivetime=$value["receivetime"];//接收时间
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





//获取回复
function tongdao3_gethuifu(){
	global $con;
	$name=iconv("GBK","UTF-8//IGNORE","新中科技商超");
	$SoapRequest="action=query&userid=451&account=".$name."&password=zhangqian168";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://113.11.210.108:6666/callApi.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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
	
	//获取orderid
	$createtime=time()-60*60*24*30;
	$sql="SELECT uid,taskid FROM smsorders WHERE createtime>".$createtime." AND taskid IN(".$taskids.")";
	$re=$con->query($sql);
	$orderidarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderidarr[$row["taskid"]]=$row["uid"];
	}
	$nowtime=time();
	//更新发送详情状态
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
//函数名：gettongdaotype
//作者：白东升
//日期：2014.01.17
//功能：获取通道类型
//输入参数：$sjh:手机号
//返回值：所走通道1移动2联通3电信
//修改记录：无
//==================================================================
function gettongdaotype($sjh){
	//$yidonghd=array('134','135','136','137','138','139','147','150','151','152','157','158','159','182','187','188');
	$liantonghd=array('130','131','132','155','156','185','186','145');
	$dianxinhd=array('133','153','180','189','181');
	$hd=substr($sjh,0,3);
	if(in_array($hd,$liantonghd)){
		//用联通发
		return 2;
	}elseif(in_array($hd,$dianxinhd)){
		//用电信发
		return 3;
	}else{
		//用移动发
		return 1;
	}
	return 1;
}