<?php
//用户发送短信
function usersendsmsduanxin($uid,$sjh,$nei,&$err){
	global $con;
	if(empty($sjh) || empty($nei)){
		$err="手机号或内容不能为空";
		return false;
	}
	//获取用用户信息
	$sql="select * from `user` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		$err="指定用户不存在";
		return false;
	}
	$dxnum=floatval($userinfo["dxnum"]);
	$jiage=floatval($userinfo["jiage"]);
	if(($dxnum<=0) || ($dxnum<$jiage)){
		$err="余额不足";
		return false;
	}
	$sjharr=explode(',', $sjh);
	$sjharr=filteremptyarr($sjharr);
	if(empty($sjharr)){
		$err="手机号为空";
		return false;
	}
	$dxcount=intval(count($sjharr));
	$dxjg=$dxcount*$jiage;
	if($dxnum<$dxjg){
		$err="余额不足";
		return false;
	}
	
	//获取发送通道
	$sql="select * from `tongdaolist` where zt=1 limit 0,1";
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
	// $tempstr=$functionname($userinfo,$items,$err);
	
	$sjh=implode(",",$sjharr);
	
	//发送短信
	$con->query("BEGIN");
		$dxnum=$dxnum-$dxjg;
		$sql="UPDATE user set dxnum=".$dxnum." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
		$bz=$functionname($sjh,$nei,$err);
	$con->query("COMMIT");
	
	return $bz;
}