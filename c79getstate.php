<?php
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");

//$con=new MySql();
$con   =   MySQL::getInstance();

$str=serialize($_GET).":".serialize($_POST)."\n\n";
//csw("79.log",$str);
csw(S_ROOT.'receive_log/'.date('Y-m-d H_i_s').'_c74.log', $headercontent);

$nowtime=time();
$time=time()-60*60*24*14;

$errcode=trim($_POST["errcode"]);
$TaskID=trim($_POST["transaction_id"]);
$Status=intval($_POST["status"]);
if(empty($TaskID)){
	$errcode=trim($_GET["errcode"]);
	$TaskID=trim($_GET["transaction_id"]);
	$Status=intval($_GET["status"]);
}

$apimsg=serialize($_GET);
$apimsg=addslashes($apimsg);

$con->begin();

if($Status=="4"){
		$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
		$info =   $con->query($sql);
        if(!$info){
            $con->rollback();
            echo 'error';
            exit;
        }
}elseif($Status=="8"){
		$info =   liuliang_fanhuandxnum_daili_llsendtool($TaskID);
        if(!$info){
            $con->rollback();
            echo 'error';
            exit;
        }
		$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='�ӿڷ���ʧ��:".$apimsg."',upzttime=".$nowtime." where msgId='".$TaskID."' and createtime>".$time."";
		$info =   $con->query($sql);
        if(!$info){
            $con->rollback();
            echo 'error';
            exit;
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