<?php
//mobile:要开通的手机号 orderMmount 流量 例如 30M  effectiveDate 生效时间 默认0立即生效 1下月生效
function ordermount_yidong($mobile,$orderMmount,$effectiveDate,&$err){
	$timeStamp=date("YmdHis");
	$msgId="".$timeStamp.rand(100,999);//自定义消息id
	$userId="ws0002";//用户id
	$userPwd="8789wh";//密码
	$serviceCode="yd";//业务代码
	$userPwd=md5($userPwd."|".$timeStamp);
	

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
		$err="";
		return $json["msgId"];
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	return false;
}

//要查询的订购记录 msgId：自定义消息id restr：服务器返回的状态
function getordermountzt_yidong($msgId,&$err){
	global $con;
	$timeStamp=date("YmdHis");
	$userId="ws0002";//用户id
	$userPwd="8789wh";//密码
	$userPwd=md5($userPwd."|".$timeStamp);
	
	$SoapRequest="timeStamp=".$timeStamp."&userId=".$userId."&userPwd=".$userPwd."&msgId=".$msgId."&extend=";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://flow.hbsmservice.com:8080/flow_interface/cClientGetReportInfoByMsgId.do");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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
	
	$time=time()-60*60*24*14;
	if(($remsgId==$msgId) && empty($err)){
		$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='' where msgId='".$msgId."' and createtime>".$time;
		$con->query($sql);
		return true;
	}
	
	if(($remsgId==$msgId) && (!empty($err))){
		$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$err."' where msgId='".$msgId."' and 

createtime>".$time;
		$con->query($sql);
		
		liuliang_fanhuandxnum($msgId);
		return true;
	}
	return false;
}


//mobile:要开通的手机号 package 流量 例如 30  range 0 全国流量 1省内流量
function ordermount_liantong($mobile,$package,$range=0,&$err){
	$action="charge";
	$v="1.1";
	$account="新中科技";//账号
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//签名
	$key="15be05a4b87f4f4d9486f87609495372";//密钥
	
	
	$p="account=".$account."&mobile=".$mobile."&package=".$package."&key=".$key;
	$sign=md5($p);
	$SoapRequest="account=".urlencode

($account)."&action=".$action."&mobile=".$mobile."&package=".$package."&range=".$range."&v=".$v."&sign=".$sign;
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
		$err="";
		return $TaskID;
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	return false;
}

//要查询的订购记录 msgId：自定义消息id restr：服务器返回的状态
function getordermountzt_liantong(){
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
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	//var_dump($result);
	
	//$result='{"Code":"0","Message":"OK","Reports":[{"TaskID":55,"Mobile":"18501254686","Status":4,"ReportTime":"2015-08-10 17:40:24","ReportCode":"0000"}]}';
	//var_dump($result);
	curl_close($ch);
	$json=json_decode($result,true);
//cs($json);
	if(!is_array($json["Reports"])){
		return false;
		
	}
	$time=time()-60*60*24*14;
	
	$arr=$json["Reports"];
	foreach($arr as $value){
		$TaskID=trim($value["TaskID"]);
		$Status=intval($value["Status"]);
		if($Status==4){
			$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='' where msgId='".$TaskID."' and createtime>".$time;
//echo $sql;
			$con->query($sql);
		}else if($Status==5){
			$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$value['ReportCode']."' where 

msgId='".$TaskID."' and createtime>".$time;
			$con->query($sql);
			
			liuliang_fanhuandxnum($TaskID);
		}
	}
}




//开通流量 移动
function addliuliang_yidong($uid,$sjh,$liuliang){
	global $con;
		$liuliang=intval($liuliang);
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$yidongzk=floatval($userinfo["yidongzk"]);//移动折扣

		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		
		if(empty($yidongtcarr[$liuliang])){
			liuliangerr("选择套餐不存在！");
		}
		$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		if($kfmianzhi<=0){
			liuliangerr("选择套餐错误！");
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			liuliangerr("余额不足！");
		}
		
		$liuliangbuf="".$liuliang."M";
		
		$err="";
		$a=ordermount_yidong($sjh,$liuliangbuf,0,$err);

		$zt=0;
		if(!empty($a)){
			//开通成功
			$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
			$re=$con->query($sql);//更新用户余额
		}else{
			$zt=2;
		}
		$msg=$zongfeiyong."元购买".$liuliangbuf."流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>0,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}




//开通流量 联通
function addliuliang_liantong($uid,$sjh,$liuliang,$sjhtype){
	global $con;
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
			
			
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				liuliangerr("选择套餐错误！");
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				liuliangerr("选择套餐错误！");
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				liuliangerr("选择套餐错误！");
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			liuliangerr("选择套餐错误！");
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			liuliangerr("余额不足！");
		}

		$err="";
		$a=ordermount_liantong($sjh,$liuliang,0,$err);

		$zt=0;
		if(!empty($a)){
			//开通成功
			$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
			$re=$con->query($sql);//更新用户余额
		}else{
			$zt=2;
		}
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}




function liuliang_fanhuandxnum($tid){
	global $con;
	$time=time()-60*60*24*15;
	$sql="select * from `liuliangdaili_log` where msgId='".$tid."' and createtime>".$time;
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$uid=$orderinfo["uid"];
	
	$shje=floatval($orderinfo["shje"]);
	if(empty($uid) && ($shje<=0)){
		return false;
	}
	//返还金额
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	
	
	$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	csw("liuliangerr.log",$str);
	
}


//接口开通流量 联通
function addliuliang_liantong_server($uid,$sjh,$liuliang,$sjhtype,$beizhu){
	global $con;
		$liuliang=intval($liuliang);

		if(empty($sjh) || empty($liuliang)){
			die("-2");
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"手机号不正确或流量套餐选择错误！");
		}

		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		//判断对方传送的手机号归属和实际归属是否相同
		$hd=substr($sjh,0,4);
		$sjhgsd=getsjhdgs($hd);
		if($sjhtype==3){
			$sjhtype=$sjhgsd;
		}
		if($sjhgsd!=$sjhtype){
			die("-1");
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"套餐与实际归属地不同！");
		}
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
			
			
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐不存在！");
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐不存在！");
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐不存在！");
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐错误！");
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			die("-3");
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"余额不足！");
		}

		$err="";
		$a=0;
		if(empty($sjhtype)){
			$liuliangbuf="".$liuliang."M";
			$a=ordermount_yidong($sjh,$liuliangbuf,0,$err);
		}else{
			$a=ordermount_liantong($sjh,$liuliang,0,$err);
		}
		$zt=0;
		if(!empty($a)){
			//开通成功
			$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
			$re=$con->query($sql);//更新用户余额
		}else{
			$zt=2;
		}
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"beizhu"=>$beizhu,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return $id;
}



//接口开通流量 联通
function liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,$errmsg){
	global $con;
	$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>0,
			"shje"=>0,
			"msg"=>$errmsg,
			
			"zt"=>2,
			"msgId"=>0,
			"apimsg"=>$errmsg,
			"beizhu"=>$beizhu,
			"createtime"=>time()
	);
	$id=$con->insertabe("liuliangdaili_log",$inarr);
	die("0");
}


?>