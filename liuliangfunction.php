<?php
//发送流量，返回通道的失败返回false，成功返回taskid
//参数说明 $sjh 手机号,$liuliang 要充值的流量,$tongdaoid 通道id,$qita 其他参数备用,&$err 错误信息填充变量
function sendliuliang($sjh,$liuliang,$tongdaoid,$qita,&$err,$functionname = ''){
	global $con;
	$bz=$functionname($sjh,$liuliang,$qita,$err);
	return $bz;
}

//获取发送手机号发送成功失败状态
 function getliuliangstatus(){
	global $con;
orderaction_huancunorderaction();
	//获取发送通道
	$sql="select * from `liuliangtongdaolist` where 1=1";
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


function  orderaction_huancunorderaction(){
global $con;
	$time=time()-60*60*24*14;
	$sql="SELECT * FROM liuliangdaili_log where createtime>".$time." and zt=3";
	$re=$con->query($sql);
	$logarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		liuliang_fanhuandxnum_daili_llsendtool_ty($row["id"]);
		
	}

}
/********************下面都是具体通道函数******************************************/

/***************第一个通道*******************/
function sendliuliangf1($mobile,$orderMmount,$qita,&$err){
	if(empty($mobile) || empty($orderMmount)){
		return false;
	}
	$orderMmount=intval($orderMmount);
	$orderMmount="".$orderMmount."M";
	//$err="白测试";
	//return 0;
	$effectiveDate=0;
	$timeStamp=date("YmdHis");
	$msgId="".$timeStamp.rand(100,999).rand(100,999).rand(1000,9999);//自定义消息id
	$userId="ws0002";//用户id
	$userPwd="8789wh";//密码
	$serviceCode="yd";//业务代码
	$userPwd=md5($userPwd."|".$timeStamp);
	
	if(is_array($qita) && (!empty($qita["serviceCode"]))){
		$serviceCode=$qita["serviceCode"];
	}
	
	

$SoapRequest="timeStamp=".$timeStamp."&userId=".$userId."&userPwd=".$userPwd."&mobile=".$mobile."&orderMmount=".$orderMmount."&orderTime=1&serviceCode=".$serviceCode."&msgId=".$msgId."&effectiveDate=".$effectiveDate."&extend=";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://flow.hbsmservice.com:8080/flow_interface/cClientFlowOrderMountInfo.do");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td1sendre".date("Ymd").".txt",$result);
	
	$json=json_decode($result,true);
	$code=$json["code"];
	if($code=="0000"){
		$result=iconv("UTF-8","GBK//IGNORE",$result);
		$err=$result;
		$err=addslashes($err);
		return $json["msgId"];
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	$err=addslashes($err);
	return false;
}

function sendliuliangf1_getstatus(){
	global $con;
	$time=time()-60*60*24*14;
	$sql="SELECT * FROM liuliang_log where createtime>".$time." and zt=0 and tongdaoid in(1,11,12)";
	$re=$con->query($sql);
	$logarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$msgId=trim($row["msgId"]);
		if(empty($msgId)){
			continue;
		}
		$err="";
		$bz=sendliuliangf1_getstatus_tool1($msgId,$err);
	}
	
	$sql="SELECT * FROM liuliangdaili_log where createtime>".$time." and zt=0 and tongdaoid=1";
	$re=$con->query($sql);
	$logarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$msgId=trim($row["msgId"]);
		if(empty($msgId)){
			continue;
		}
		$err="";
		$bz=sendliuliangf1_getstatus_tool1($msgId,$err);
	}

	
	return true;	
}


//要查询的订购记录 msgId：自定义消息id restr：服务器返回的状态
function sendliuliangf1_getstatus_tool1($msgId,&$err){
	global $con;
	$timeStamp=date("YmdHis");
	$userId="ws0002";//用户id
	$userPwd="8789wh";//密码
	$userPwd=md5($userPwd."|".$timeStamp);
	
	$SoapRequest="timeStamp=".$timeStamp."&userId=".$userId."&userPwd=".$userPwd."&msgId=".$msgId."&extend=";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://flow.hbsmservice.com:8080/flow_interface/cClientGetReportInfoByMsgId.do");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	$restr=$result;
	
	$json=json_decode($result,true);
	//echo "<pre>";
	//print_r($json);

	$remsgId="";
	$err="";
	if(is_array($json["result"])){
		$remsgId=$json["result"][0]["msgId"];
		$err=intval($json["result"][0]["err"]);
	}
	
	$isdaili=0;//是否是代理订单 0不是 1是	
	$tablename="liuliang_log";
	$time=time()-60*60*24*14;
	$nowtime=time();
	$sql="select * from `liuliang_log` where msgId='".$msgId."' and createtime>".$time;
	$re=$con->query($sql);
	$rw=mysql_fetch_array($re);
	if(empty($rw)){
		$isdaili=1;
		$tablename="liuliangdaili_log";
	}
		
	if(($remsgId==$msgId) && empty($err)){
		$sql="UPDATE ".$tablename." SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$msgId."'  and createtime>".$time;
		$con->query($sql);
		return true;
	}
	
	if(($remsgId==$msgId) && (!empty($err))){
		if(empty($isdaili)){
			liuliang_fanhuandxnum_llsendtool($msgId);
		}else{
			liuliang_fanhuandxnum_daili_llsendtool($msgId);
		}
		$sql="UPDATE ".$tablename." SET zt=2,apimsg='接口返回失败:".$err."',upzttime=".$nowtime." where msgId='".$msgId."'  and createtime>".$time;
		$con->query($sql);
		
		return true;
	}
	return false;
}






/***************第二个通道*******************/
function sendliuliangf2($mobile,$package,$qita,&$err){
	//$err="白测试";
	//return 0;
	$range=0;
	$action="charge";
	$v="1.1";
	$account="新中科技";//账号
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//签名
	$key="15be05a4b87f4f4d9486f87609495372";//密钥

	if($package >=1024){
		$package=ceil($package/1024)*1000;
	}
	
	$p="account=".$account."&mobile=".$mobile."&package=".$package."&key=".$key;
	$sign=md5($p);
	$SoapRequest="account=".urlencode($account)."&action=".$action."&mobile=".$mobile."&package=".$package."&range=".$range."&v=".$v."&sign=".$sign;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://121.40.211.78:8083/api.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td2sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	$code=trim($json["Code"]);
	$TaskID=trim($json["TaskID"]);
	if(($code=="0") && !empty($TaskID)){
		$result=iconv("UTF-8","GBK//IGNORE",$result);
		$err=$result;
		$err=addslashes($err);
		return $TaskID;
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	$err=addslashes($err);
	return false;
}





function sendliuliangf2_getstatus(){
global $con;
	$action="getReports";
	$v="1.1";
	$count=50;
	$account="新中科技";//账号
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//签名
	$key="15be05a4b87f4f4d9486f87609495372";//密钥
	
	$p="account=".$account."&count=".$count."&key=".$key;
	$sign=md5($p);
	$SoapRequest="account=".urlencode($account)."&action=".$action."&count=".$count."&v=".$v."&sign=".$sign;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://121.40.211.78:8083/api.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	//var_dump($result);
	
	//$result='{"Code":"0","Message":"OK","Reports":[{"TaskID":69,"Mobile":"18501254686","Status":4,"ReportTime":"2015-08-10 17:40:24","ReportCode":"0000"}]}';	
//var_dump($result);
	curl_close($ch);
	$json=json_decode($result,true);
//cs($json);
	if(!is_array($json["Reports"])){
		return false;
		
	}
	$time=time()-60*60*24*14;
	$nowtime=time();
	$arr=$json["Reports"];
	foreach($arr as $value){
		$TaskID=trim($value["TaskID"]);
		$Status=intval($value["Status"]);
		$value['ReportCode']=iconv("UTF-8","GBK//IGNORE",$value['ReportCode']);
		$sql="select * from `liuliang_log` where msgId='".$TaskID."' and createtime>".$time."";
		$re=$con->query($sql);
		$rw=mysql_fetch_array($re);
		if(!empty($rw)){
			//处理一般用户
			if($Status==4){
				$sql="UPDATE liuliang_log SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
			}else if($Status==5){
				liuliang_fanhuandxnum_llsendtool($TaskID);
				$sql="UPDATE liuliang_log SET zt=2,apimsg='接口返回失败:".$value['ReportCode']."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
				
				
			}





		}else{
			//处理代理商
			if($Status==4){
			$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
			$con->query($sql);
			}else if($Status==5){
				liuliang_fanhuandxnum_daili_llsendtool($TaskID);
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$value['ReportCode']."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
				
				
			}
		
		}
	}//END foreach
}












/***************第三个通道*******************/
function sendliuliangf3($mobiles,$packageSize,$qita,&$err){
	global $con;
	if(empty($mobiles) || empty($packageSize)){
		return false;
	}
	$packageSize=intval($packageSize);
	if($packageSize >=1024){
		$packageSize=ceil($packageSize/1024)*1000;
	}
	$timestamp=time();
	$clientOrderId="".$timestamp.rand(100,999).rand(100,999).rand(1000,9999);;//自定义消息id
	$timestamp.="000";
	$account="AdminXinzhd";//账号
	$userPwd="test5320";//密码
	$userPwd=md5($userPwd);
	$sign=md5($account.$userPwd.$timestamp.$mobiles);

	if(is_array($qita) && (!empty($qita["mobileProductId"]))){
		$mobileProductId=$qita["mobileProductId"];
	}else{
		//处理移动
		$yidongtcarr=array(
			"10"=>"8a2876934f011f62014f171c9b151168",
			"30"=>"8a2876934f011f62014f171d6f61116b",
			"70"=>"8a2876934f011f62014f171e4276116e",
			"150"=>"8a2876934f011f62014f171ecdb41170",
			"500"=>"8a2876934f011f62014f171f5ecc1172",
			"1000"=>"8a2876934f011f62014f171ffc2f1174",
			"2000"=>"8a2876934f011f62014f1724cd05117d",
			"3000"=>"8a2876934f011f62014f172a0f22117f",
			"4000"=>"8a28e8c24f011d81014f172b474a08b2",
			"6000"=>"8a2876934f011f62014f172be0191181",
			"11000"=>"8a28e8c24f011d81014f172c458f08b5"
		);

		//处理联通套餐
		$liantongtcarr=array(
			"20"=>"8a28e8c2501e45630150286e08901d83",
			"50"=>"8a28e8c2501e45630150287794051da3",
			"100"=>"8a28e8c2501e4563015028799ff81dc2",
			"200"=>"8a28e8c2501e45630150287b69e21de1",
			"500"=>"8a28e8c2501e45630150287c7cef1e00"
		);

		//处理电信套餐
		$dianxintcarr=array(
			"5"=>"000000004cdff715014ce062806c0020",
			"10"=>"000000004cdff715014ce0ab9f50005f",
			"30"=>"000000004d09ba28014d09f143d60000",
			"50"=>"000000004ce97bdb014cede579c80047",
			"100"=>"000000004d375387014d41dc5144008d",
			"200"=>"000000004d375387014d41dd174b00ad",
			"500"=>"000000004d375387014d41dd94ac00cd",
			"1000"=>"000000004d375387014d41ddf64200ed"
		);
		
		$hd=substr($mobiles,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		if(empty($sjhtype)){
			$mobileProductId=  trim($yidongtcarr[$packageSize]);
		}else if($sjhtype==1){
			$mobileProductId=  trim($liantongtcarr[$packageSize]);
		}else if($sjhtype==2){
			$mobileProductId=  trim($dianxintcarr[$packageSize]);
		}
	}
	if($mobileProductId=="57342172"){
		$mobileProductId="";
	}
	$date=array(
		"timestamp"=>$timestamp,
		"account"=>$account,
		"mobiles"=>$mobiles,
		"sign"=>$sign,
		"packageSize"=>$packageSize,
		"mobileProductId"=>$mobileProductId,
		"unicomProductId"=>"",
		"telecomProductId"=>"",
		"msgTemplateId"=>"8a2876934ffdf8ac0150034482081188",
		"clientOrderId"=>$clientOrderId
	);
	$SoapRequest=json_encode($date);

	csw("tonfdao3sendlog.txt",$SoapRequest);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://if.dahanfc.com/FCOrderServlet");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td3sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	$code=$json["resultCode"];
	if($code=="00"){
		$err=iconv("UTF-8","GBK//IGNORE",$result);
		$err=addslashes($err);
		return $json["clientOrderId"];
	}
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	return false;
}





function sendliuliangf3_getstatus(){

}






/***************第四个通道*******************/
function sendliuliangf4($mobiles,$packageSize,$qita,&$err){
	//河北省网150M及以下
	$mobileProductIdarr=array(
		"10"=>"8a2876934f1a6d4b014f1fc562650aeb",
		"30"=>"8a2876934f1a6d4b014f1fc806530aef",
		"70"=>"8a28769350d0abab0150d22b62600841",
		"150"=>"8a2876934f1a6d4b014f1fc9cb520af5",
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf4_getstatus(){

}

/***************第五个通道*******************/
function sendliuliangf5($mobiles,$packageSize,$qita,&$err){
//陕西省网
	$mobileProductIdarr=array(
		"10"=>"8a28e8c25118088001511ec8893c174e",
		"30"=>"8a28e8c25118088001511eca3a9f1750",
		"70"=>"8a28e8c25118088001511eca96d91752",
		"150"=>"8a28e8c25118088001511ecb034b1754",
		"500"=>"8a28e8c25118088001511ecb848a1757",
		"1024"=>"8a28e8c25118088001511ecc73971759",
		"2048"=>"8a28e8c25118088001511ecce57f175d",
		"3072"=>"8a28e8c25118088001511ecd56051761",
		"4096"=>"8a28e8c25118088001511ecdaf661765",
		"6144"=>"8a28e8c25118088001511ece18931767",
		"11264"=>"8a28e8c25118088001511ececb2d1769"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf5_getstatus(){

}
/***************第六个通道*******************/
function sendliuliangf6($mobiles,$packageSize,$qita,&$err){
//辽宁省网
	$mobileProductIdarr=array(
		"10"=>"8a28769350d0abab0150d21f246f0829",
		"30"=>"8a28769350d0abab0150d2205665082b",
		"70"=>"8a28769350d0abab0150d220fa12082d",
		"150"=>"8a28769350d0abab0150d2217bd1082f",
		"500"=>"8a28769350d0abab0150d222066e0831",
		"1024"=>"8a28769350d0abab0150d22275e30833",
		"2048"=>"8a28769350d0abab0150d2233cea0835",
		"3072"=>"8a28769350d0abab0150d223bc2c0837",
		"4096"=>"8a28769350d0abab0150d2242dae0839",
		"6144"=>"8a28769350d0abab0150d22491af083b",
		"11264"=>"8a28769350d0abab0150d2250125083d"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf6_getstatus(){

}
/***************第七个通道*******************/
function sendliuliangf7($mobiles,$packageSize,$qita,&$err){
//四川省网
	$mobileProductIdarr=array(
		"10"=>"8a28e8c250eee3410150fad7814a2387",
		"30"=>"8a28e8c250eee3410150fad8fa2f2394",
		"70"=>"8a28e8c250eee3410150fad9a0bd2398",
		"150"=>"8a28e8c250eee3410150fada452b239c",
		"500"=>"8a28e8c250eee3410150fadad68523a0",
		"1024"=>"8a28e8c250eee3410150fadb5cf523a4",
		"2048"=>"8a28e8c250eee3410150fadc0f2723aa",
		"3072"=>"8a28e8c250eee3410150fadc8ea923ae",
		"4096"=>"8a28e8c250eee3410150fadd35de23b2",
		"6144"=>"8a28e8c250eee3410150faddc40b23b4",
		"11264"=>"8a28e8c250eee3410150fade758b23b6"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf7_getstatus(){

}
/***************第八个通道*******************/
function sendliuliangf8($mobiles,$packageSize,$qita,&$err){
//浙江省网
	$mobileProductIdarr=array(
		"10"=>"8a28e8c250eee3410150faeb795b23e5",
		"30"=>"8a28e8c250eee3410150faec561d23e7",
		"70"=>"8a28e8c250eee3410150faedc91d23e9",
		"150"=>"8a28e8c25184d09701518622d0c915a1",
		"500"=>"8a28e8c250eee3410150faf03a5c23ef",
		"1024"=>"8a28e8c250eee3410150faf0ad7923f1",
		"2048"=>"8a28e8c25184d097015186189e421579",
		"3072"=>"8a28e8c25184d097015186193786157d",
		"4096"=>"8a28e8c25184d09701518619a6e91581",
		"6144"=>"8a28e8c25184d0970151861ba042158b",
		"11264"=>"8a28e8c25184d09701518620779f159a"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf8_getstatus(){

}
/***************第九个通道*******************/
function sendliuliangf9($mobiles,$packageSize,$qita,&$err){
	//河南省网
	$mobileProductIdarr=array(
		"10"=>"8a28e8c250eee3410150fad4f6102373",
		"30"=>"8a28e8c250eee3410150fad6aba32382",
		"70"=>"8a28e8c250eee3410150fad84b602392",
		"150"=>"8a28e8c250eee3410150fad94a132396",
		"500"=>"8a28e8c250eee3410150fad9d9d4239a",
		"1024"=>"8a28e8c250eee3410150fada89d0239e",
		"2048"=>"8a28e8c250eee3410150fadaf5e723a2",
		"3072"=>"8a28e8c250eee3410150fadb880c23a6",
		"4096"=>"8a28e8c250eee3410150fadbed6a23a8",
		"6144"=>"8a28e8c250eee3410150fadc6ed923ac",
		"11264"=>"8a28e8c250eee3410150fadcd4b123b0"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf9_getstatus(){

}

/***************第十个通道*******************/
function sendliuliangf10($mobiles,$packageSize,$qita,&$err){
	$mobileProductIdarr=array(
				"10"=>"8a2876934fb6d9a2014fbac56cce0af8",
				"30"=>"8a2876934fb6d9a2014fbac4f5e50af5",
				"70"=>"8a2876934fb6d9a2014fbac4625e0af2",
				"150"=>"8a2876934fb6d9a2014fbac3f7440af0",
				"500"=>"8a2876934fb6d9a2014fbac2cb050aea",
				"1024"=>"8a2876934fb6d9a2014fbac35d8e0aed",
				"2048"=>"8a2876934fb6d9a2014fbac5cb5c0afa",
				"3072"=>"8a2876934fb6d9a2014fbac656840afd",
				"4096"=>"8a2876934fb6d9a2014fbac6abbc0aff",
				"6144"=>"8a2876934fb6d9a2014fbac70a260b01",
				"11264"=>"8a2876934fb6d9a2014fbac763250b04"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
		
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf10_getstatus(){

}


/***************第十一个通道*******************/
function sendliuliangf11($mobiles,$packageSize,$qita,&$err){
	
	$qita=array("serviceCode"=>"ws00021");
	return sendliuliangf1($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf11_getstatus(){

}
/***************第十二个通道*******************/
function sendliuliangf12($mobiles,$packageSize,$qita,&$err){
	
	$qita=array("serviceCode"=>"ws00020");
	return sendliuliangf1($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf12_getstatus(){

}
/***************第十三个通道*******************/
function sendliuliangf13($mobiles,$packageSize,$qita,&$err){

//安徽省网
	$mobileProductIdarr=array(
		"10"=>"8a287693518bdf8701518fe23c7e1b74",
		"30"=>"8a287693518bdf8701518fe2d73e1b76",
		"70"=>"8a287693518bdf8701518fe358571b7a",
		"150"=>"8a287693518bdf8701518fe3f8e31b7e",
		"500"=>"8a287693518bdf8701518fe47b4c1b80",
		"1024"=>"8a287693518bdf8701518fe4f7051b82",
		"2048"=>"8a287693518bdf8701518fe603c01b84",
		"3072"=>"8a287693518bdf8701518fe6905f1b86",
		"4096"=>"8a287693518bdf8701518fe70c2c1b88",
		"6144"=>"8a287693518bdf8701518fe780be1b8d",
		"11264"=>"8a287693518bdf8701518fe81ead1b8f"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf13_getstatus(){

}
/***************第十四个通道*******************/
function sendliuliangf14($mobiles,$packageSize,$qita,&$err){
//福建省网
	$mobileProductIdarr=array(
		"10"=>"57342172",
		"30"=>"57342172",
		"70"=>"57342172",
		"150"=>"57342172",
		"500"=>"57342172",
		"1024"=>"57342172",
		"2048"=>"57342172",
		"3072"=>"57342172",
		"4096"=>"57342172",
		"6144"=>"57342172",
		"11264"=>"57342172"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf14_getstatus(){

}




/***************第十五个通道*******************/
function sendliuliangf15($mobile,$package,$qita,&$err){
	//$err="白测试";
	//return 0;
	$range=0;
	$action="charge";
	$v="1.1";
	$account="xzkj";//账号
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//签名
	$key="dbe0a88b10834e5cac3a3a0983c900a3";//密钥

	if($package >=1024){
		$package=ceil($package/1024)*1000;
	}
	
	$p="account=".$account."&mobile=".$mobile."&package=".$package."&key=".$key;
	$sign=md5($p);
	$SoapRequest="account=".urlencode($account)."&action=".$action."&mobile=".$mobile."&package=".$package."&range=".$range."&v=".$v."&sign=".$sign;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://my.umichina.cc/api.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td15sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	$code=trim($json["Code"]);
	$TaskID=trim($json["TaskID"]);
	if(($code=="0") && !empty($TaskID)){
		$result=iconv("UTF-8","GBK//IGNORE",$result);
		$err=$result;
		$err=addslashes($err);
		return $TaskID;
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	$err=addslashes($err);
	return false;
}





function sendliuliangf15_getstatus(){
global $con;
	$action="getReports";
	$v="1.1";
	$count=50;
	$account="xzkj";//账号
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//签名
	$key="dbe0a88b10834e5cac3a3a0983c900a3";//密钥
	
	$p="account=".$account."&count=".$count."&key=".$key;
	$sign=md5($p);
	$SoapRequest="account=".urlencode($account)."&action=".$action."&count=".$count."&v=".$v."&sign=".$sign;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://my.umichina.cc/api.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	//var_dump($result);
	
	//$result='{"Code":"0","Message":"OK","Reports":[{"TaskID":69,"Mobile":"18501254686","Status":4,"ReportTime":"2015-08-10 17:40:24","ReportCode":"0000"}]}';	
//var_dump($result);
	curl_close($ch);
	$json=json_decode($result,true);
//cs($json);
	if(!is_array($json["Reports"])){
		return false;
		
	}
	$time=time()-60*60*24*14;
	$nowtime=time();
	$arr=$json["Reports"];
	foreach($arr as $value){
		$TaskID=trim($value["TaskID"]);
		$Status=intval($value["Status"]);
		$value['ReportCode']=iconv("UTF-8","GBK//IGNORE",$value['ReportCode']);
		$sql="select * from `liuliang_log` where msgId='".$TaskID."' and createtime>".$time."";
		$re=$con->query($sql);
		$rw=mysql_fetch_array($re);
		if(!empty($rw)){
			//处理一般用户
			if($Status==4){
				$sql="UPDATE liuliang_log SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
			}else if($Status==5){
				liuliang_fanhuandxnum_llsendtool($TaskID);
				$sql="UPDATE liuliang_log SET zt=2,apimsg='接口返回失败:".$value['ReportCode']."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
				
				
			}





		}else{
			//处理代理商
			if($Status==4){
			$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
			$con->query($sql);
			}else if($Status==5){
				liuliang_fanhuandxnum_daili_llsendtool($TaskID);
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$value['ReportCode']."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
				
				
			}
		
		}
	}//END foreach
}


/***************第十六个通道*******************/
function sendliuliangf16($mobiles,$packageSize,$qita,&$err){
//广东省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf16_getstatus(){

}
/***************第十7个通道*******************/
function sendliuliangf17($mobiles,$packageSize,$qita,&$err){
//安徽省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf17_getstatus(){

}
/***************第十8个通道*******************/
function sendliuliangf18($mobiles,$packageSize,$qita,&$err){
//湖南省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf18_getstatus(){

}
/***************第十9个通道*******************/
function sendliuliangf19($mobiles,$packageSize,$qita,&$err){
//陕西省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf19_getstatus(){

}
/***************第20个通道*******************/
function sendliuliangf20($mobiles,$packageSize,$qita,&$err){
//江苏省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf20_getstatus(){

}
/***************第21个通道*******************/
function sendliuliangf21($mobiles,$packageSize,$qita,&$err){
//河南省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf21_getstatus(){

}
/***************第22个通道*******************/
function sendliuliangf22($mobiles,$packageSize,$qita,&$err){
//福建省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf22_getstatus(){

}


/***************第23个通道*******************/
function sendliuliangf23($mobile,$package,$qita,&$err){

	$userid="13343853020";
	$pwd="D87E14FDA257649E9C743D24E6077032";
	$orderid=date("YmdHis").rand(10,99).rand(100,999).rand(1000,9999);
	$account=$mobile;
	$gprs=$package;
	$area="0";
	$effecttime="0";
	$validity="0";
	$times=date("YmdHis");
	$userkey=md5("userid".$userid."pwd".$pwd."orderid".$orderid."account".$account."gprs".$gprs."area".$area."effecttime".$effecttime."validity".$validity."times".$times."D9F13B905049CEFC54D1EBB38E3D4B45");
	
	
	$url="http://api.miliuliang.cn:11140/gprsChongzhiAdvance.do?"."userid=".$userid."&pwd=".$pwd."&orderid=".$orderid."&account=".$account."&gprs=".$gprs."&area=".$area."&effecttime=".$effecttime."&validity=".$validity."&times=".$times."&userkey=".$userkey;
$result=get_url_contents($url);

	csw("log/td23sendre".date("Ymd").".txt",$result);
	$json=getXmlData($result);
	$error=trim($json["error"]);

	
	$code=trim($json["state"]);
	$TaskID=trim($json["orderid"]);
	$ztarr=array("8","0","9","1","3");

	if((empty($error)) && !empty($TaskID) && in_array($code,$ztarr)){
		$result=iconv("UTF-8","GBK//IGNORE",$result);
		$err=$result;
		$err=addslashes($err);
		return $TaskID;
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	$err=addslashes($err);
	return false;
}

function sendliuliangf23_getstatus(){

}

/***************第24个通道*******************/
function sendliuliangf24($mobile,$package,$qita,&$err){
	$partner_no="201178965";
	$request_no="".date("YmdHis").rand(10,99).rand(10,99).rand(10,99);
	$service_code="FS0001";
	$contract_id="test20160324";
	$activity_id="109999";
	$order_type="1";
	$phone_id=$mobile;
	$plat_offer_id=$qita["code"];
	$effect_type=0;
	$dataarr=array(
		"request_no"=>$request_no,
		"service_code"=>$service_code,
		"contract_id"=>$contract_id,
		"activity_id"=>$activity_id,
		"order_type"=>$order_type,
		"phone_id"=>$phone_id,
		"plat_offer_id"=>$plat_offer_id,
		"effect_type"=>$effect_type
	);
	$jsonstr=json_encode($dataarr);
	$code=aes_cbc_str_encrypt($jsonstr,"gBNitlDim4G3tW54","9537783121404286");
	$dataarr=array(
		"partner_no"=>$partner_no,
		"code"=>$code
	);
	$jsonstr=json_encode($dataarr);
	
	$header = array(
            'Content-Type: application/json',
    );
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://42.123.76.124:8083/fps/flowService.do");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonstr);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td24sendre".date("Ymd").".txt",$result);
	
	//csw("log/td19sendre".date("Ymd").".txt",$result);
	if(empty($result)){
		$err="接口异常，等待人工处理";
		return $request_no;
	}
	
	$json=json_decode($result,true);
	$code=trim($json["result_code"]);
	$TaskID=trim($json["orderstatus"]);
	
	if(($code=="00000")){
		$err="";
		$result=iconv("UTF-8","GBK//IGNORE",$result);
		$err=$result;
		$err=addslashes($err);
		return $request_no;
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	$err=addslashes($err);
	return false;
	
}





function sendliuliangf24_getstatus(){

}

/***************第25个通道*******************/
function sendliuliangf25($mobiles,$packageSize,$qita,&$err){
//山西省网
	$mobileProductIdarr=array(
		"10"=>"8a28e8c25118088001511ec8893c174e",
		"30"=>"8a28e8c25118088001511eca3a9f1750",
		"70"=>"8a28e8c25118088001511eca96d91752",
		"150"=>"8a28e8c25118088001511ecb034b1754",
		"500"=>"8a28e8c25118088001511ecb848a1757",
		"1024"=>"8a28e8c25118088001511ecc73971759",
		"2048"=>"8a28e8c25118088001511ecce57f175d",
		"3072"=>"8a28e8c25118088001511ecd56051761",
		"4096"=>"8a28e8c25118088001511ecdaf661765",
		"6144"=>"8a28e8c25118088001511ece18931767",
		"11264"=>"8a28e8c25118088001511ececb2d1769"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf25_getstatus(){

}

/***************第26个通道*******************/
function sendliuliangf26($mobiles,$packageSize,$qita,&$err){
//北京省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf26_getstatus(){

}

/***************第27个通道*******************/
function sendliuliangf27($mobiles,$packageSize,$qita,&$err){
//贵州省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf27_getstatus(){

}

/***************第28个通道*******************/
function sendliuliangf28($mobiles,$packageSize,$qita,&$err){
//天津省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf28_getstatus(){

}

/***************第29个通道*******************/
function sendliuliangf29($mobiles,$packageSize,$qita,&$err){
//广西省网
	$mobileProductIdarr=array(
		"10"=>"8a28e8c25118088001511ec8893c174e",
		"30"=>"8a28e8c25118088001511eca3a9f1750",
		"70"=>"8a28e8c25118088001511eca96d91752",
		"150"=>"8a28e8c25118088001511ecb034b1754",
		"500"=>"8a28e8c25118088001511ecb848a1757",
		"1024"=>"8a28e8c25118088001511ecc73971759",
		"2048"=>"8a28e8c25118088001511ecce57f175d",
		"3072"=>"8a28e8c25118088001511ecd56051761",
		"4096"=>"8a28e8c25118088001511ecdaf661765",
		"6144"=>"8a28e8c25118088001511ece18931767",
		"11264"=>"8a28e8c25118088001511ececb2d1769"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf29_getstatus(){

}


/***************第30个通道*******************/
function sendliuliangf30($mobiles,$packageSize,$qita,&$err){
//山西省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf30_getstatus(){

}


/***************第31个通道*******************/
function sendliuliangf31($mobiles,$packageSize,$qita,&$err){
//浙江省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf31_getstatus(){

}

/***************第32个通道*******************/
function sendliuliangf32($mobiles,$packageSize,$qita,&$err){
//湖北省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf32_getstatus(){

}

/***************第33个通道*******************/
function sendliuliangf33($mobiles,$packageSize,$qita,&$err){
//江苏省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf33_getstatus(){

}

/***************第34个通道*******************/
function sendliuliangf34($mobiles,$packageSize,$qita,&$err){
//天津省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf34_getstatus(){

}


/***************第35个通道*******************/
function sendliuliangf35($mobiles,$packageSize,$qita,&$err){
//北京省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf35_getstatus(){

}



/***************第36个通道*******************/
function sendliuliangf36($mobiles,$packageSize,$qita,&$err){
//江苏省网
	$qita=array("mobileProductId"=>"123");
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf36_getstatus(){

}
/***************第37个通道*******************/
function sendliuliangf37($mobiles,$packageSize,$qita,&$err){
//湖北省网
	$qita=array("mobileProductId"=>"123");
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf37_getstatus(){

}


/***************第38个通道*******************/
function sendliuliangf38($mobiles,$packageSize,$qita,&$err){
//辽宁省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf38_getstatus(){

}
/***************第39个通道*******************/
function sendliuliangf39($mobiles,$packageSize,$qita,&$err){
//陕西省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf39_getstatus(){

}
/***************第40个通道*******************/
function sendliuliangf40($mobiles,$packageSize,$qita,&$err){
//福建省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf40_getstatus(){

}
/***************第41个通道*******************/
function sendliuliangf41($mobiles,$packageSize,$qita,&$err){
//山东省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf41_getstatus(){

}

/***************第42个通道*******************/
function sendliuliangf42($mobiles,$packageSize,$qita,&$err){
//山西省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf42_getstatus(){

}

/***************第43个通道*******************/
function sendliuliangf43($mobiles,$packageSize,$qita,&$err){
//安徽省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf43_getstatus(){

}

/***************第44个通道*******************/
function sendliuliangf44($mobiles,$packageSize,$qita,&$err){
	//山东
	$mobileProductIdarr=array(
		"10"=>"8a28e8c25118088001511ec8893c174e",
		"30"=>"8a28e8c25118088001511eca3a9f1750",
		"70"=>"8a28e8c25118088001511eca96d91752",
		"150"=>"8a28e8c25118088001511ecb034b1754",
		"500"=>"8a28e8c25118088001511ecb848a1757",
		"1024"=>"8a28e8c25118088001511ecc73971759",
		"2048"=>"8a28e8c25118088001511ecce57f175d",
		"3072"=>"8a28e8c25118088001511ecd56051761",
		"4096"=>"8a28e8c25118088001511ecdaf661765",
		"6144"=>"8a28e8c25118088001511ece18931767",
		"11264"=>"8a28e8c25118088001511ececb2d1769"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf44_getstatus(){

}

/***************第45个通道*******************/
function sendliuliangf45($mobiles,$packageSize,$qita,&$err){
//山东
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf45_getstatus(){

}
/***************第46个通道*******************/
function sendliuliangf46($mobiles,$packageSize,$qita,&$err){
//新疆
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf46_getstatus(){

}


/***************第47个通道*******************/
function sendliuliangf47($mobiles,$packageSize,$qita,&$err){
//广东电信
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf47_getstatus(){

}

/***************第48个通道*******************/
function sendliuliangf48($mobiles,$packageSize,$qita,&$err){
//福建电信
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf48_getstatus(){

}

/***************第49个通道*******************/
function sendliuliangf49($mobiles,$packageSize,$qita,&$err){
//江苏电信
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf49_getstatus(){

}

/***************第50个通道*******************/
function sendliuliangf50($mobiles,$packageSize,$qita,&$err){
//湖北电信
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf50_getstatus(){

}

 function sendliuliangf51($mobiles,$packageSize,$qita,&$err){
	$apptx="".time().rand(1,9).rand(1,9).rand(10,99);
	$timestamp=date("Y-m-d H:i:s");
	$appkey="ai.cuc.ll.appkey.zzxzdzkj";
	$method="ai.cuc.ll.method.gav";

	if(empty($qita)){
		$liantongtcarr=array(
			"20"=>"29101089",
			"50"=>"29100633",
			"100"=>"29000508",
			"200"=>"29100634",
			"300"=>"29000507",
			"500"=>"29000509",
			"1024"=>"29000506"
		);
		$qita=trim($liantongtcarr[$packageSize]);
	}
	$msg=array(
		"usernumber"=>"0371LLPF0006631",
		"gavingnumber"=>$mobiles,
		"packagetype"=>"1",
		"packagecode"=>$qita,
		"validtype"=>"0"
	);
	$msgstr=json_encode($msg);
	

	$my=md5("Za1R6!qJ3yJ$");
	$mw='appkey='.$appkey.'&apptx='.$apptx.'&method='.$method.'&msg='.$msgstr.'&timestamp='.$timestamp."&";
	$sign=md5($mw.$my);
	
	$url='http://61.168.11.30:8011/uflowapi/uflow/api.do?apptx='.$apptx.'&timestamp='.urlencode($timestamp).'&appkey='.$appkey.'&sign='.$sign.'&method='.$method.'&msg='.$msgstr;
	csw("11.txt",$url);
 $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result =  curl_exec($ch);
    curl_close($ch);
	//$a=iconv("UTF-8","GBK//IGNORE",$a);
	csw("log/td51sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	$code=$json["code"];
	if($code=="0000"){
		$err=iconv("UTF-8","GBK//IGNORE",$result);
		$err=addslashes($err);
		return $apptx;
	}
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	return false;
}
function sendliuliangf51_getstatus(){
	global $con;
	$time=time()-60*60*24*14;
	
	$sql="SELECT * FROM liuliangdaili_log where createtime>".$time." and zt=0 and tongdaoid=51";
	$re=$con->query($sql);
	$logarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$sql="UPDATE liuliangdaili_log set zt=1,upzttime=".time()." where id=".$row["id"];
		$con->query($sql);
	}
	
	
	
	return false;
}

/***************第52个通道*******************/
function sendliuliangf52($mobiles,$packageSize,$qita,&$err){
//海南
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf52_getstatus(){

}

/***************第53个通道*******************/
function sendliuliangf53($mobiles,$packageSize,$qita,&$err){
//贵州
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf53_getstatus(){

}

/***************第54个通道*******************/
function sendliuliangf54($mobiles,$packageSize,$qita,&$err){
//河北
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf54_getstatus(){

}

/***************第55个通道*******************/
function sendliuliangf55($mobiles,$packageSize,$qita,&$err){
//四川电信
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf55_getstatus(){

}

/***************第56个通道*******************/
function sendliuliangf56($mobiles,$packageSize,$qita,&$err){
//浙江电信
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf56_getstatus(){

}

/***************第57个通道*******************/
function sendliuliangf57($mobiles,$packageSize,$qita,&$err){
//上海联通
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf57_getstatus(){

}

/***************第58个通道*******************/
function sendliuliangf58($mobiles,$packageSize,$qita,&$err){
//山东联通
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf58_getstatus(){

}


 function sendliuliangf59($mobiles,$packageSize,$qita,&$err){
	global $con;
	$hd=substr($mobiles,0,4);
	$sjhtype=getsjhdgs($hd);
	$ownership="MOBILE";
	if($sjhtype==1){
		$ownership="UNICOM";
	}
	if($sjhtype==2){
		$ownership="TELECOM";
	}
	
	
	$mobileNo=$mobiles;
	$ownership=$ownership;
	$agentCode="AGENT10000001902";
	$agentOrderNo="".time().rand(1,9).rand(1,9).rand(10,99);
	$orderAmount=$packageSize;
	$provinceCode="100000";
	$isNotify=1;
	$notifyUrl="http://duanxin.xzkj168.cn/c59getstate.php";
	$requestTimestamp=time();

	$my="XV1B20B1875F5A764PV";
	$mw='mobileNo='.$mobileNo.'&ownership='.$ownership.'&agentCode='.$agentCode.'&agentOrderNo='.$agentOrderNo.'&orderAmount='.$orderAmount.'&provinceCode='.$provinceCode.'&isNotify='.$isNotify.'&notifyUrl='.$notifyUrl.'&requestTimestamp='.$requestTimestamp;
	$sign=hash_hmac("md5",$mw,$my);
	$mw=$mw."&hmac=".$sign;
	
	
	$url='https://yeeyk.com/md-service/order/acceptOrder';
 $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $mw);
    $result =  curl_exec($ch);
    curl_close($ch);
	csw("log/td59sendre".date("Ymd").".txt",$result);
	//$a=iconv("UTF-8","GBK//IGNORE",$a);
	$json=json_decode($result,true);
	$orderNo=$json["orderNo"];
	$code=$json["code"];
	if($code=="000000"){
		$err=iconv("UTF-8","GBK//IGNORE",$result);
		$err=addslashes($err);
		return $orderNo;
	}
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	return false;
}
function sendliuliangf59_getstatus(){

}

/***************第60个通道*******************/
function sendliuliangf60($mobiles,$packageSize,$qita,&$err){
//安徽电信省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf60_getstatus(){

}

/***************第61个通道*******************/
function sendliuliangf61($mobiles,$packageSize,$qita,&$err){
//浙江省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf61_getstatus(){

}

/***************第62个通道*******************/
function sendliuliangf62($mobiles,$packageSize,$qita,&$err){
//湖北省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf62_getstatus(){

}

/***************第63个通道*******************/
function sendliuliangf63($mobiles,$packageSize,$qita,&$err){
//海南省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf63_getstatus(){

}
/***************第64个通道*******************/
function sendliuliangf64($mobiles,$packageSize,$qita,&$err){
//河南省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf64_getstatus(){

}

/***************第65个通道*******************/
function sendliuliangf65($mobiles,$packageSize,$qita,&$err){
	if(empty($mobiles) || empty($packageSize)){
		return false;
	}
	
	$UserId="9185";
	$UserName="xzkj";
	$Password="Aa123456";
	$mobile=$mobiles;
	$flow=$packageSize;
	$stamp=date("mdHis");
	$secret="";
	$Password=strtoupper(md5($Password.$stamp));
	$secret=strtoupper(md5($UserId.",".$UserName.",".$Password.",".$mobile.",".$flow.",".$stamp));
	
	
	$url="http://sdk.le-mian.com/JsonApi.ashx?UserId=".$UserId."&UserName=".$UserName."&Password=".$Password."&mobile=".$mobile."&flow=".$flow."&stamp=".$stamp."&secret=".$secret;
	$result=get_url_contents($url);
	csw("log/td65sendre".date("Ymd").".txt",$result);
	if(empty($result)){
		$err="接口异常，等待人工处理";
		return "1";
	}
	$a=$result;
	$arr=json_decode($a, true);
	u8togbk($arr);
	
	
	$Code=trim($arr["status"]);
	$TransIDO=trim($arr["msgid"]);
	if(($Code=="1") && (!empty($TransIDO))){
		$err=iconv("UTF-8","GBK//IGNORE",$result);
		$err=addslashes($err);
		return $TransIDO;
	}
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	return false;
}

function sendliuliangf65_getstatus(){

}


/***************第66个通道*******************/
function sendliuliangf66($mobiles,$packageSize,$qita,&$err){
	if(empty($mobiles) || empty($packageSize)){
		return false;
	}
	
	$UserId="8174";
	$UserName="xzkjsw";
	$Password="Xzkj1234";
	$mobile=$mobiles;
	$flow=$packageSize;
	$stamp=date("mdHis");
	$secret="";
	$Password=strtoupper(md5($Password.$stamp));
	$secret=strtoupper(md5($UserId.",".$UserName.",".$Password.",".$mobile.",".$flow.",".$stamp));
	
	
	$url="http://sdk.le-mian.com/JsonApi.ashx?UserId=".$UserId."&UserName=".$UserName."&Password=".$Password."&mobile=".$mobile."&flow=".$flow."&stamp=".$stamp."&secret=".$secret;
	$result=get_url_contents($url);
	csw("log/td66sendre".date("Ymd").".txt",$result);
	if(empty($result)){
		$err="接口异常，等待人工处理";
		return "1";
	}
	$a=$result;
	$arr=json_decode($a, true);
	u8togbk($arr);
	
	
	$Code=trim($arr["status"]);
	$TransIDO=trim($arr["msgid"]);
	if(($Code=="1") && (!empty($TransIDO))){
		$err=iconv("UTF-8","GBK//IGNORE",$result);
		$err=addslashes($err);
		return $TransIDO;
	}
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	return false;
}

function sendliuliangf66_getstatus(){

}

/***************第67个通道*******************/
function sendliuliangf67($mobiles,$packageSize,$qita,&$err){
//辽宁省网
	return sendliuliangf66($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf67_getstatus(){

}


/***************第68个通道*******************/
function sendliuliangf68($mobiles,$packageSize,$qita,&$err){
//四川省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf68_getstatus(){

}

/***************第69个通道*******************/
function sendliuliangf69($mobiles,$packageSize,$qita,&$err){
//福建省网
	return sendliuliangf66($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf69_getstatus(){

}

/***************第70个通道*******************/
function sendliuliangf70($mobiles,$packageSize,$qita,&$err){
//江苏 联通
	$mobileProductIdarr=array(
		"10"=>"8a28e8c25118088001511ec8893c174e",
		"30"=>"8a28e8c25118088001511eca3a9f1750",
		"70"=>"8a28e8c25118088001511eca96d91752",
		"150"=>"8a28e8c25118088001511ecb034b1754",
		"500"=>"8a28e8c25118088001511ecb848a1757",
		"1024"=>"8a28e8c25118088001511ecc73971759",
		"2048"=>"8a28e8c25118088001511ecce57f175d",
		"3072"=>"8a28e8c25118088001511ecd56051761",
		"4096"=>"8a28e8c25118088001511ecdaf661765",
		"6144"=>"8a28e8c25118088001511ece18931767",
		"11264"=>"8a28e8c25118088001511ececb2d1769"
	);
	$mobileProductId=$mobileProductIdarr[$packageSize];
	$qita=array("mobileProductId"=>$mobileProductId);
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf70_getstatus(){

}

/***************第71个通道*******************/
function sendliuliangf71($mobiles,$packageSize,$qita,&$err){
//山西省网
	return sendliuliangf23($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf71_getstatus(){

}

/***************第72个通道*******************/
function sendliuliangf72($mobiles,$packageSize,$qita,&$err){
//河南电信 全国
$reqToken=md5("10104#$%DS568D@25");
	$id="10104";
	$SoapRequest="";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/getToken?reqToken=".$reqToken."&id=".$id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$json=json_decode($result,true);
	
	$token=trim($json["token"]);
	
	$codeidarr=array(
		"5"=>"300050034384",
		"10"=>"300050034385",
		"30"=>"300050034386",
		"50"=>"300050034387",
		"100"=>"300050034388",
		"200"=>"300050034389",
		"500"=>"300050034390",
		"1024"=>"300050034391"
	);
	
	$orderId="".$id.time().rand(10,99).rand(0,9);
	$accNumber=$mobiles;
	$pricePlanCd=$codeidarr[$packageSize];
	if(empty($pricePlanCd)){
		$err="套餐不存在";
		return false;
	}
	$orderType="0";
	
	$arr=array(
		"orderId"=>$orderId,
		"accNumber"=>$accNumber,
		"pricePlanCd"=>$pricePlanCd,
		"orderType"=>$orderType
	);
	$arr=array($arr);
	$para=json_encode($arr);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/order?token=".$token."&id=".$id."&para=".$para);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td72sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	$code=trim($json["result"]);
	if($code=="0"){
		return $orderId;
	}
	return false;
}

function sendliuliangf72_getstatus(){

}
/***************第73个通道*******************/
function sendliuliangf73($mobiles,$packageSize,$qita,&$err){
//河南电信 省内
$reqToken=md5("10104#$%DS568D@25");
	$id="10104";
	$SoapRequest="";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/getToken?reqToken=".$reqToken."&id=".$id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$json=json_decode($result,true);
	
	$token=trim($json["token"]);
	
	$codeidarr=array(
		"10"=>"300050033834",
		"30"=>"300050033841",
		"100"=>"300050033848",
		"200"=>"300050033855",
		"500"=>"300050033862"
	);
	
	$orderId="".$id.time().rand(10,99).rand(0,9);
	$accNumber=$mobiles;
	$pricePlanCd=$codeidarr[$packageSize];
	if(empty($pricePlanCd)){
		$err="套餐不存在";
		return false;
	}
	$orderType="0";
	
	$arr=array(
		"orderId"=>$orderId,
		"accNumber"=>$accNumber,
		"pricePlanCd"=>$pricePlanCd,
		"orderType"=>$orderType
	);
	$arr=array($arr);
	$para=json_encode($arr);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/order?token=".$token."&id=".$id."&para=".$para);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td73sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	$code=trim($json["result"]);
	if($code=="0"){
		return $orderId;
	}
	return false;
}

function sendliuliangf73_getstatus(){
global $con;
	$time=time()-60*60*24*15;
	$sql="select id,msgId from `liuliangdaili_log` where createtime>".$time." and zt=0 and tongdaoid in(72,73)";
	$re=$con->query($sql);
	$tidarr=array();
	$dataarr=array();
	while($row=mysql_fetch_array($re)){
		$dataarr[]=$row;
		$tidarr[]=$row["msgId"];
	}
	if(empty($tidarr)){
		return false;
	}
	$msgids = implode(",",$tidarr);
	
	$reqToken=md5("10104#$%DS568D@25");
	$id="10104";
	$SoapRequest="";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/getToken?reqToken=".$reqToken."&id=".$id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$json=json_decode($result,true);
	$token=trim($json["token"]);
	
	
	$arr=array(
		"orderId"=>$msgids
	);
	$para=json_encode($arr);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/query?token=".$token."&id=".$id."&para=".$para);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
    
    csw(S_ROOT.'receive_log/'.date('Y-m-d H_i_s').'_c73.log', $result);
    
	$json=json_decode($result,true);
	$orderResult=$json["orderResult"];
	
	$nowtime=time();
	foreach($orderResult as $value){
		$con->begin();
		$TaskID=trim($value["orderId"]);
		$Status=intval($value["orderResult"]);
		if(empty($TaskID)){
			continue;
		}
		if(empty($Status)){
			$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
			$info    =   $con->query($sql);
            if(!$info){
                $con->rollback();
                continue;
            }
		}else{
				$info   =   liuliang_fanhuandxnum_daili_llsendtool($TaskID);
                if(!$info){
                    $con->rollback();
                    continue;
                }
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$value['orderResult']."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    continue;
                }
		}
		$con->commit();
	}
	
}



function sendliuliangf74($mobiles,$packageSize,$qita,&$err){
//利茸 全国
	$username="adminXinZhong";
	$password=md5($username."123456".$mobiles);
	$mobile=$mobiles;
	$amount=$packageSize;
	$range="0";
	$backUrl="http://duanxin.xzkj168.cn/c74getstate.php";
	
	$SoapRequest="username=".$username."&password=".$password."&mobile=".$mobile."&amount=".$amount."&range=".$range."&backUrl=".$backUrl;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://139.129.220.55/externalV2/charge.action");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	csw("log/td74sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	$orderNo=$json["module"];
	$code=$json["success"];
	if(!empty($code)){
		$err=iconv("UTF-8","GBK//IGNORE",$result);
		$err=addslashes($err);
		return $orderNo;
	}
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	return false;
}
function sendliuliangf74_getstatus(){

}

/***************第75个通道*******************/
function sendliuliangf75($mobiles,$packageSize,$qita,&$err){
//江苏省网
	return sendliuliangf66($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf75_getstatus(){

}



/***************第76个通道*******************/
function sendliuliangf76($mobiles,$packageSize,$qita,&$err){
//辽宁省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}
function sendliuliangf76_getstatus(){

}

/***************第77个通道*******************/
function sendliuliangf77($mobiles,$packageSize,$qita,&$err){
//内蒙古省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}
function sendliuliangf77_getstatus(){

}

/***************第78个通道*******************/
function sendliuliangf78($mobiles,$packageSize,$qita,&$err){
//西藏省网
	return sendliuliangf15($mobiles,$packageSize,$qita,$err);
}
function sendliuliangf78_getstatus(){

}
function sendliuliangf79($mobiles,$packageSize,$qita,&$err){
//suolang 全国
	$sign=strtoupper(md5($mobiles.$packageSize));
	$url="http://123.56.182.32:32001/api/v1/sendOrder?apikey=9d2c88045634133b1b93292e3f3fa0a1&number=".$mobiles."&flowsize=".$packageSize."&sign=".$sign."&reporturl=".urlencode("http://duanxin.xzkj168.cn/c79getstate.php");
	$result=get_url_contents($url);
	csw("log/td79sendre".date("Ymd").".txt",$result);
	$json=json_decode($result,true);
	$orderNo=trim($json["order"]["transaction_id"]);
	$code=$json["errcode"];
	if(empty($code) && (!empty($orderNo))){
		$err=iconv("UTF-8","GBK//IGNORE",$result);
		$err=addslashes($err);
		return $orderNo;
	}
	$err=iconv("UTF-8","GBK//IGNORE",$result);
	$err=addslashes($err);
	return false;
}
function sendliuliangf79_getstatus(){

}

function sendliuliangf80($mobiles,$packageSize,$qita,&$err){
    return sendliuliangf79($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf80_getstatus(){

}

function sendliuliangf81($mobiles,$packageSize,$qita,&$err){
    return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf81_getstatus(){

}



//下面是工具类函数
function liuliang_fanhuandxnum_llsendtool($tid){
	global $con;
	$time=time()-60*60*24*15;
	$sql="select * from `liuliang_log` where msgId='".$tid."' and createtime>".$time." and zt=0";
	$re=$con->query($sql);

	$orderinfo=mysql_fetch_array($re);
	$uid=$orderinfo["uid"];
	$dxnum=intval($orderinfo["dxnum"]);
	if(empty($uid) && ($dxnum<=0)){
		return false;
	}
	//返还短信
	userdxchongzhi_dxnum($uid,$dxnum);
	
	$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	csw("liuliangerr.log",$str);
	
}



function liuliang_fanhuandxnum_daili_llsendtool($tid){
	global $con;
	$time=time()-60*60*24*15;
	$sql="select * from `liuliangdaili_log` where msgId='".$tid."' and createtime>".$time." and zt=0 and istk=0";
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$uid=$orderinfo["uid"];
	
	$shje=floatval($orderinfo["shje"]);
	if(empty($uid) && ($shje<0)){
		return false;
	}
	
	$sql="select cytkbz from `user_daili` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$cytkbz=intval($userinfo["cytkbz"]);
	if(empty($cytkbz)){
		return true;
	}	
	
	//更新返款状态
	$sql="UPDATE liuliangdaili_log set istk=1 where id=".$orderinfo["id"];
	$re=$con->query($sql);
    if(!$re){
        return FALSE;
    }
	//返还金额
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
    if(!$re){
        return FALSE;
    }
    
	return TRUE;
	//$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	//csw("liuliangerr.log",$str);
	
}