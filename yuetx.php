<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
require_once("smsfunction.php");
$con=new MySql();

$sql="select * from `yuetixing`";
$re=$con->query($sql);
$yuetixinginfo=mysql_fetch_array($re);
$zt=intval($yuetixinginfo["zt"]);
if(empty($zt)){
	exit;
}
$yue=floatval($yuetixinginfo["yue"]);
if($yue<=0){
	exit;
}
$shybcz=intval($yuetixinginfo["shybcz"]);//三个月不充值不提醒状态 0关闭1开启
$mytxyc=intval($yuetixinginfo["mytxyc"]);//每月提醒一次状态 0关闭1开启
$nei=trim($yuetixinginfo["nei"]);

$sql="select id,username,dxnum,jiage,sjh from `user` where  dxnum <".$yue;
$re=$con->query($sql);
$sjharr=array();
while($row=mysql_fetch_array($re)){
//cs($row);
	if(!empty($shybcz)){
		$usershybcz=checkshybcz($row["id"]);
		if(empty($usershybcz)){
			continue;
		}
	}
	if(!empty($mytxyc)){
		$usermytxyc=checkmytxyc($row["sjh"]);
		if(!empty($usermytxyc)){
			continue;
		}
	}
	$sjharr[]=$row["sjh"];
}

//cs($sjharr);
$smscontentlen=bai_strlen($nei);
$dxnum=ceil($smscontentlen/67);//每个号码短信条数
	
$nowtime=time();
$con->query("BEGIN");
foreach($sjharr as $sjh){
			//存储
			$inarr=array(
				   "sjh"=>$sjh,
				   "nei"=>$nei,
				   "yzm"=>"",
				   "yzmconfigname"=>"yuetixing",
				   "num"=>$dxnum,
				   "createtime"=>$nowtime
			);
			$tid=$con->insertabe("yanzhengma",$inarr);
}
$con->query("COMMIT");
//发送短信
$sjh=implode(",",$sjharr);

//获取发送验证码通道id
	$tongdaoid=gettongdaoid_yzm();
$err="";
$bz=sendsms($sjh,$nei,$tongdaoid,$err);
die("ok");



//检查指定用户三个月内是否充值，如果充值返回1 否则返回0
function checkshybcz($uid){
	global $con;
	$createtime=time()-60*60*24*90;
	$sql="select count(*) as num from `chongzhilog` where uid=".$uid." and createtime>".$createtime." and zt=1 and cztype in(0,1)";
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//总条数
	if($ztiao>0){
		return true;
	}else{
		return false;
	}
}

//检查指定用户当月是否已提醒，如果提醒过返回1 否则返回0
function checkmytxyc($sjh){
	global $con;
	$createtime=time()-60*60*24*30;
	$sql="select count(*) as num from `yanzhengma` where createtime>".$createtime." and sjh='".$sjh."' and yzmconfigname='yuetixing'";
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//总条数
	if($ztiao>0){
		return true;
	}else{
		return false;
	}
}
?>