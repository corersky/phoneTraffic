<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
$headercontent=file_get_contents("php://input");

//$con=new MySql();
$con   =   MySQL::getInstance();

csw(S_ROOT.'receive_log/'.date('Y-m-d H_i_s').'_c3.log', $headercontent);
//csw("11.txt",$headercontent);
/*
$headercontent='{"clientOrderId":"AdminShideal1507291016550322","mobile":"18022221111","reportTime":"May 19, 2015 2:33:44 PM","status":0,"errorCode":"","errorDesc":""}{"clientOrderId":"AdminShideal1507291016550322","mobile":"18022221111","reportTime":"May 19, 2015 2:33:44 PM","status":0,"errorCode":"","errorDesc":""}';
*/
$headercontent="[".$headercontent."]";
$headercontent = preg_replace("/\}(.*?)\{/s", "},{", $headercontent);
$json=json_decode($headercontent,true);
$nowtime=time();
$con->begin();

$time=time()-60*60*24*14;
$a  =   '';
foreach($json as $value){
		$TaskID=trim($value["clientOrderId"]);
		$Status=intval($value["status"]);
		$value['errorCode']=iconv("UTF-8","GBK//IGNORE",$value['errorCode']);
		$value['errorDesc']=iconv("UTF-8","GBK//IGNORE",$value['errorDesc']);
		$apimsg="".$value['errorCode'].":".$value['errorDesc'];
		$apimsg=addslashes($apimsg);
		
		$sql="select * from `liuliangdaili_log` where msgId='".$TaskID."' and createtime>".$time." and zt=0";
		$re=$con->query($sql);
		$rw=mysql_fetch_array($re);
		if(empty($rw)){
			//处理一般用户
			if(empty($Status)){
				$sql="UPDATE liuliang_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    $a  =   '{"resultCode":"1111","resultMsg":"保存失败1!"}';
                    break;
                }
			}else{
				$info   =   liuliang_fanhuandxnum_llsendtool($TaskID);
                if(!$info){
                    $con->rollback();
                    $a  =   '{"resultCode":"1111","resultMsg":"保存失败2!"}';
                    break;;
                }
				$sql="UPDATE liuliang_log SET zt=2,apimsg='接口返回失败:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    $a  =   '{"resultCode":"1111","resultMsg":"保存失败3!"}';
                    break;
                }
				
			}
		}else{
			//处理代理商
			if(empty($Status)){
				$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    $a  =   '{"resultCode":"1111","resultMsg":"保存失败4!"}';
                    break;
                }
			}else{
				$info   =   liuliang_fanhuandxnum_daili_llsendtool($TaskID);
                if(!$info){
                    $con->rollback();
                    $a  =   '{"resultCode":"1111","resultMsg":"保存失败5!"}';
                    break;
                }
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='接口返回失败:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    $a  =   '{"resultCode":"1111","resultMsg":"保存失败6!"}';
                    break;
                }
			}
		
		}
	}//END foreach

    if(!$a){
        $con->commit();
        $a='{"resultCode":"0000","resultMsg":"处理成功！"}';
    }
	$aa=iconv("GBK","UTF-8//IGNORE",$a);
	echo $aa;
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
	$info  =   userdxchongzhi_dxnum($uid,$dxnum);
	
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