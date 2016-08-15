<?php
//通道处理程序 参数：用户id,手机号数组，内容，通道id，是否使用签名（0不用） 发送时间
//发送成功返回true 失败 false 
function tongdaoation_1($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//获取用用户信息
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	if(empty($syqianming)){
		$err="必须使用签名！";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="签名不能为空！";
		return false;
	}
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		$err="短信价格错误！";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//每个号码短信条数
	$txlarrlen=count($txlarr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="余额不足，发送失败！";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="发送失败！";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	$con->query("COMMIT");
	

	//用户手机号入库
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}




//通道处理程序 参数：用户id,手机号数组，内容，通道id，是否使用签名（0不用） 发送时间
//发送成功返回true 失败 false 
function tongdaoation_2($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//获取用用户信息
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	if(empty($syqianming)){
		$err="必须使用签名！";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="签名不能为空！";
		return false;
	}
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		$err="短信价格错误！";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/65);//每个号码短信条数
	$txlarrlen=count($txlarr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	
	
	if($txlarrlen<500){
		$err="五百个号码起发！";
		return false;
	}
	
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="余额不足，发送失败！";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="发送失败！";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	$con->query("COMMIT");
	

	//用户手机号入库
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}




//通道处理程序 参数：用户id,手机号数组，内容，通道id，是否使用签名（0不用） 发送时间
//发送成功返回true 失败 false 
function tongdaoation_3($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//获取用用户信息
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	/*
	if(empty($syqianming)){
		$err="必须使用签名！";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="签名不能为空！";
		return false;
	}
	*/
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		$err="短信价格错误！";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//每个号码短信条数
	$txlarrlen=count($txlarr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	
	if($txlarrlen<500){
		$err="500个号码起发！";
		return false;
	}
	
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="余额不足，发送失败！";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="发送失败！";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	$con->query("COMMIT");
	

	//用户手机号入库
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}




//发送成功返回true 失败 false 
function tongdaoation_4($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//获取用用户信息
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="必须使用签名！";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="签名不能为空！";
		return false;
	}
	
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		$err="短信价格错误！";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//每个号码短信条数
	$txlarrlen=count($txlarr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	


	if($txlarrlen<100){
		$err="100个号码起发！";
		return false;
	}
	
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="余额不足，发送失败！";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="发送失败！";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	$con->query("COMMIT");
	

	//用户手机号入库
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}






//发送成功返回true 失败 false 
function tongdaoation_5($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//获取用用户信息
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="必须使用签名！";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="签名不能为空！";
		return false;
	}
	/*
	//验证签名是否报备
	$bbqm=preg_replace("/【|】/is", "", $qianming);
	$sql="select * from `tongdaoqianminglist` where tongdaoid=5 and qianming='".$bbqm."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		$err="签名没有报备！";
		return false;
	}*/
	
	
	
	
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		$err="短信价格错误！";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//每个号码短信条数
	$txlarrlen=count($txlarr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	
	
	if($txlarrlen<100){
		$err="100个号码起发！";
		return false;
	}
	
	
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="余额不足，发送失败！";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="发送失败！";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	$con->query("COMMIT");
	

	//用户手机号入库
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}



//发送成功返回true 失败 false 
function tongdaoation_6($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//获取用用户信息
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="必须使用签名！";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="签名不能为空！";
		return false;
	}
	
	
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		$err="短信价格错误！";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//每个号码短信条数
	$txlarrlen=count($txlarr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	
	
	if($txlarrlen<100){
		$err="100个号码起发！";
		return false;
	}
	
	
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="余额不足，发送失败！";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="发送失败！";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	$con->query("COMMIT");
	

	//用户手机号入库
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}



//发送成功返回true 失败 false 
function tongdaoation_7($uid,$txlarr,$nei,$tongdaoid,$syqianming,$sendtime,&$err){
	//获取用用户信息
	global $con;
	$sql="select * from `user` where id=".$uid;
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	
	if(empty($syqianming)){
		$err="必须使用签名！";
		return false;
	}
	
	$qianming=trim($userinfo["qianming"]);
	if(empty($qianming)){
		$err="签名不能为空！";
		return false;
	}
	
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		$err="短信价格错误！";
		return false;
	}
	
	$txlstr = implode(",", $txlarr);
	$nowtime=time();
	if(!empty($syqianming)){
		$nei=$nei.$qianming;
	}
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/67);//每个号码短信条数
	$txlarrlen=count($txlarr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	

/*
	if($txlarrlen<100){
		$err="100个号码起发！";
		return false;
	}
	*/
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		$err="余额不足，发送失败！";
		return false;
	}
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>0,

		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		$err="发送失败！";
		return false;
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	$con->query("COMMIT");
	

	//用户手机号入库
	$con->query("BEGIN");
	foreach($txlarr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	return true;
}
