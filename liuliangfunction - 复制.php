<?php
//发送流量，返回通道的失败返回false，成功返回taskid
//参数说明 $sjh 手机号,$liuliang 要充值的流量,$tongdaoid 通道id,$qita 其他参数备用,&$err 错误信息填充变量
 function sendliuliang($sjh,$liuliang,$tongdaoid,$qita,&$err){
	global $con;
	if(empty($sjh) || empty($liuliang)){
		$err="手机号或流量不能为空";
		return false;
	}
	
	//获取发送通道
	$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
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

	//获取发送通道维护信息
	$nowtime=time();
	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
	$re=$con->query($sql);
	$shengs="";
	while($row=mysql_fetch_array($re)){
		$shengs.=$row["sheng"].",";
	}
	if(!empty($shengs)){
		$sjhinfo=getsjhinfo($sjh);
		$province=$sjhinfo["province"];
		$bdllarr="";
		$preg_ah="/".$province."/is";
		if (preg_match($preg_ah,$shengs,$bdllarr)) {
			$err="指定地区维护中";
			return false;
		}
	}

	$sjhhd=substr($sjh,0,3);
	if(($sjhhd=="147") || ($sjhhd=="170")){
			$err="指定号段已关闭";
			return false;
	}
	$bz=$functionname($sjh,$liuliang,$qita,$err);
	return $bz;
}


//获取发送手机号发送成功失败状态
 function getliuliangstatus(){
	global $con;
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
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://if.dahanfc.com/FCOrderServlet");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
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
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf4_getstatus(){

}

/***************第五个通道*******************/
function sendliuliangf5($mobiles,$packageSize,$qita,&$err){
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf5_getstatus(){

}
/***************第六个通道*******************/
function sendliuliangf6($mobiles,$packageSize,$qita,&$err){
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf6_getstatus(){

}
/***************第七个通道*******************/
function sendliuliangf7($mobiles,$packageSize,$qita,&$err){
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf7_getstatus(){

}
/***************第八个通道*******************/
function sendliuliangf8($mobiles,$packageSize,$qita,&$err){
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf8_getstatus(){

}
/***************第九个通道*******************/
function sendliuliangf9($mobiles,$packageSize,$qita,&$err){
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
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf13_getstatus(){

}
/***************第十四个通道*******************/
function sendliuliangf14($mobiles,$packageSize,$qita,&$err){
	return sendliuliangf3($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf14_getstatus(){

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
	//返还金额
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	
	
	//$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	//csw("liuliangerr.log",$str);
	
}