<?php
//��������������ͨ����ʧ�ܷ���false���ɹ�����taskid
//����˵�� $sjh �ֻ���,$liuliang Ҫ��ֵ������,$tongdaoid ͨ��id,$qita ������������,&$err ������Ϣ������
 function sendliuliang($sjh,$liuliang,$tongdaoid,$qita,&$err){
	global $con;
	if(empty($sjh) || empty($liuliang)){
		$err="�ֻ��Ż���������Ϊ��";
		return false;
	}
	
	//��ȡ����ͨ��
	$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
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

	//��ȡ����ͨ��ά����Ϣ
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
			$err="ָ������ά����";
			return false;
		}
	}

	$sjhhd=substr($sjh,0,3);
	if(($sjhhd=="147") || ($sjhhd=="170")){
			$err="ָ���Ŷ��ѹر�";
			return false;
	}
	$bz=$functionname($sjh,$liuliang,$qita,$err);
	return $bz;
}


//��ȡ�����ֻ��ŷ��ͳɹ�ʧ��״̬
 function getliuliangstatus(){
	global $con;
	//��ȡ����ͨ��
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

/********************���涼�Ǿ���ͨ������******************************************/

/***************��һ��ͨ��*******************/
function sendliuliangf1($mobile,$orderMmount,$qita,&$err){
	if(empty($mobile) || empty($orderMmount)){
		return false;
	}
	$orderMmount=intval($orderMmount);
	$orderMmount="".$orderMmount."M";
	//$err="�ײ���";
	//return 0;
	$effectiveDate=0;
	$timeStamp=date("YmdHis");
	$msgId="".$timeStamp.rand(100,999).rand(100,999).rand(1000,9999);//�Զ�����Ϣid
	$userId="ws0002";//�û�id
	$userPwd="8789wh";//����
	$serviceCode="yd";//ҵ�����
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


//Ҫ��ѯ�Ķ�����¼ msgId���Զ�����Ϣid restr�����������ص�״̬
function sendliuliangf1_getstatus_tool1($msgId,&$err){
	global $con;
	$timeStamp=date("YmdHis");
	$userId="ws0002";//�û�id
	$userPwd="8789wh";//����
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
	
	$isdaili=0;//�Ƿ��Ǵ����� 0���� 1��	
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
		$sql="UPDATE ".$tablename." SET zt=2,apimsg='�ӿڷ���ʧ��:".$err."',upzttime=".$nowtime." where msgId='".$msgId."'  and createtime>".$time;
		$con->query($sql);
		
		return true;
	}
	return false;
}






/***************�ڶ���ͨ��*******************/
function sendliuliangf2($mobile,$package,$qita,&$err){
	//$err="�ײ���";
	//return 0;
	$range=0;
	$action="charge";
	$v="1.1";
	$account="���пƼ�";//�˺�
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//ǩ��
	$key="15be05a4b87f4f4d9486f87609495372";//��Կ

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
	$account="���пƼ�";//�˺�
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//ǩ��
	$key="15be05a4b87f4f4d9486f87609495372";//��Կ
	
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
			//����һ���û�
			if($Status==4){
				$sql="UPDATE liuliang_log SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
			}else if($Status==5){
				liuliang_fanhuandxnum_llsendtool($TaskID);
				$sql="UPDATE liuliang_log SET zt=2,apimsg='�ӿڷ���ʧ��:".$value['ReportCode']."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
				
				
			}





		}else{
			//���������
			if($Status==4){
			$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
			$con->query($sql);
			}else if($Status==5){
				liuliang_fanhuandxnum_daili_llsendtool($TaskID);
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='�ӿڷ���ʧ��:".$value['ReportCode']."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
				
				
			}
		
		}
	}//END foreach
}












/***************������ͨ��*******************/
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
	$clientOrderId="".$timestamp.rand(100,999).rand(100,999).rand(1000,9999);;//�Զ�����Ϣid
	$timestamp.="000";
	$account="AdminXinzhd";//�˺�
	$userPwd="test5320";//����
	$userPwd=md5($userPwd);
	$sign=md5($account.$userPwd.$timestamp.$mobiles);

	if(is_array($qita) && (!empty($qita["mobileProductId"]))){
		$mobileProductId=$qita["mobileProductId"];
	}else{
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>"8a2876934f011f62014f171c9b151168",
			"30"=>"8a2876934f011f62014f171d6f61116b",
			"70"=>"8a2876934f011f62014f171e4276116e",
			"150"=>"8a2876934f011f62014f171ecdb41170",
			"500"=>"8a2876934f011f62014f171f5ecc1172",
			"1024"=>"8a2876934f011f62014f171ffc2f1174",
			"2048"=>"8a2876934f011f62014f1724cd05117d",
			"3072"=>"8a2876934f011f62014f172a0f22117f",
			"4096"=>"8a28e8c24f011d81014f172b474a08b2",
			"6144"=>"8a2876934f011f62014f172be0191181",
			"11264"=>"8a28e8c24f011d81014f172c458f08b5"
		);

		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>"8a28e8c2501e45630150286e08901d83",
			"50"=>"8a28e8c2501e45630150287794051da3",
			"100"=>"8a28e8c2501e4563015028799ff81dc2",
			"200"=>"8a28e8c2501e45630150287b69e21de1",
			"500"=>"8a28e8c2501e45630150287c7cef1e00"
		);

		//��������ײ�
		$dianxintcarr=array(
			"5"=>"000000004cdff715014ce062806c0020",
			"10"=>"000000004cdff715014ce0ab9f50005f",
			"30"=>"000000004d09ba28014d09f143d60000",
			"50"=>"000000004ce97bdb014cede579c80047",
			"100"=>"000000004d375387014d41dc5144008d",
			"200"=>"000000004d375387014d41dd174b00ad",
			"500"=>"000000004d375387014d41dd94ac00cd",
			"1024"=>"000000004d375387014d41ddf64200ed"
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






/***************���ĸ�ͨ��*******************/
function sendliuliangf4($mobiles,$packageSize,$qita,&$err){
	//�ӱ�ʡ��150M������
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

/***************�����ͨ��*******************/
function sendliuliangf5($mobiles,$packageSize,$qita,&$err){
//����ʡ��
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
/***************������ͨ��*******************/
function sendliuliangf6($mobiles,$packageSize,$qita,&$err){
//����ʡ��
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
/***************���߸�ͨ��*******************/
function sendliuliangf7($mobiles,$packageSize,$qita,&$err){
//�Ĵ�ʡ��
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
/***************�ڰ˸�ͨ��*******************/
function sendliuliangf8($mobiles,$packageSize,$qita,&$err){
//�㽭ʡ��
	$mobileProductIdarr=array(
		"10"=>"8a28e8c250eee3410150faeb795b23e5",
		"30"=>"8a28e8c250eee3410150faec561d23e7",
		"70"=>"8a28e8c250eee3410150faedc91d23e9",
		"150"=>"57342172",
		"500"=>"8a28e8c250eee3410150faf03a5c23ef",
		"1024"=>"8a28e8c250eee3410150faf0ad7923f1",
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

function sendliuliangf8_getstatus(){

}
/***************�ھŸ�ͨ��*******************/
function sendliuliangf9($mobiles,$packageSize,$qita,&$err){
	//����ʡ��
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

/***************��ʮ��ͨ��*******************/
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


/***************��ʮһ��ͨ��*******************/
function sendliuliangf11($mobiles,$packageSize,$qita,&$err){
	
	$qita=array("serviceCode"=>"ws00021");
	return sendliuliangf1($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf11_getstatus(){

}
/***************��ʮ����ͨ��*******************/
function sendliuliangf12($mobiles,$packageSize,$qita,&$err){
	
	$qita=array("serviceCode"=>"ws00020");
	return sendliuliangf1($mobiles,$packageSize,$qita,$err);
}

function sendliuliangf12_getstatus(){

}
/***************��ʮ����ͨ��*******************/
function sendliuliangf13($mobiles,$packageSize,$qita,&$err){

//����ʡ��
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

function sendliuliangf13_getstatus(){

}
/***************��ʮ�ĸ�ͨ��*******************/
function sendliuliangf14($mobiles,$packageSize,$qita,&$err){
//����ʡ��
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

//�����ǹ����ຯ��
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
	//��������
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
	
	//���·���״̬
	$sql="UPDATE liuliangdaili_log set istk=1 where id=".$orderinfo["id"];
	$re=$con->query($sql);
	//�������
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//�����û����
	
	
	//$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	//csw("liuliangerr.log",$str);
	
}