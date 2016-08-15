<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
$con=new MySql();

$nowtime=time();
$time=time()-60*60*24*14;


		$TaskID=trim($_GET["orderNo"]);
		$Status=trim($_GET["orderStatus"]);
		

		$apimsg=serialize($_GET);
		$apimsg=addslashes($apimsg);
$con->begin();		
		/*
		$p1=serialize($_POST);
		$p1=addslashes($p1);
		$headercontent=file_get_contents("php://input");
		$aaa=$apimsg.":".$p1.":".$headercontent."\n\n";
		csw("59.txt",$aaa);
		*/
		//sleep(4);
		$sql="select * from `liuliangdaili_log` where msgId='".$TaskID."' and createtime>".$time." and zt=0";
		$re=$con->query($sql);
		$rw=mysql_fetch_array($re);
		if(empty($rw)){
			//处理一般用户
			if($Status=="SUCCESS"){
				$sql="UPDATE liuliang_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
			}else{
				$info   =   liuliang_fanhuandxnum_llsendtool($TaskID);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
				$sql="UPDATE liuliang_log SET zt=2,apimsg='接口返回失败:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
				
			}
		}else{
			//处理代理商
			if($Status=="SUCCESS"){
				$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
			}else{
				$info   =   liuliang_fanhuandxnum_daili_llsendtool($TaskID);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
			}
		
		}

$con->commit();	

	echo "SUCCESS";
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
	$info  =userdxchongzhi_dxnum($uid,$dxnum);
	
	$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	csw("liuliangerr.log",$str);
    return $info;
	
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

?>