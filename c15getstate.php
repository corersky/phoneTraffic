<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");
$headercontent=file_get_contents("php://input");

//$con=new MySql();
$con   =   MySQL::getInstance();

//csw("td15_".date("Ymd").".txt",$headercontent);
csw(S_ROOT.'receive_log/'.date('Y-m-d H_i_s').'_c15.log', $headercontent);

$arr=json_decode($headercontent,true);
if(!empty($arr)&& empty($arr[0])){
	$arr=array($arr);
}

$nowtime=time();
$time=time()-60*60*24*14;
$con->begin();
foreach($arr as $value){
		$TaskID=trim($value["TaskID"]);
		$Status=trim($value["Status"]);

		$apimsg=serialize($value);
		$apimsg=addslashes($apimsg);
		
	
		
		if($Status=="4"){
				$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info = $con->query($sql);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
		}elseif($Status=="5"){
				$info   =   liuliang_fanhuandxnum_daili_llsendtool($TaskID);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='�ӿڷ���ʧ��:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
				$info   =   $con->query($sql);
                if(!$info){
                    $con->rollback();
                    echo 'error';
                    exit;
                }
		}
}

$con->commit();
	echo "ok";
	exit;







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
    if(!$re){
        return FALSE;
    }
	
	//�������
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//�����û����
    if(!$re){
        return FALSE;
    }
	return TRUE;
	//$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	//csw("liuliangerr.log",$str);
	
}

?>