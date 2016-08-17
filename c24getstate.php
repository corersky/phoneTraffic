<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
$headercontent=file_get_contents("php://input");

//$con=new MySql();
$con   =   MySQL::getInstance();

csw("24.txt",$headercontent);

$nowtime=time();

$time=time()-60*60*24*14;
$json=json_decode($headercontent,true);


$TaskID=trim($json["request_no"]);
$Status=trim($json["result_code"]);
$apimsg=addslashes($headercontent);
if(empty($TaskID)){
	exit;
}
		
		$sql="select * from `liuliangdaili_log` where msgId='".$TaskID."' and createtime>".$time." and zt=0";
		$re=$con->query($sql);
		$rw=mysql_fetch_array($re);
		if(empty($rw)){
			//处理一般用户
			if(empty($Status)){
				$sql="UPDATE liuliang_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
			}else{
				liuliang_fanhuandxnum_llsendtool($TaskID);
				$sql="UPDATE liuliang_log SET zt=2,apimsg='接口返回失败:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
				
			}
		}else{
			//处理代理商
			if(empty($Status)){
				$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
			}else{
				liuliang_fanhuandxnum_daili_llsendtool($TaskID);
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$con->query($sql);
			}
		
		}
	
	






	echo "1";
	exit;







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

?>