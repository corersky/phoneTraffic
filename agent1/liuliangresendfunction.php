<?php
//�����ύ
function addliuliang_resend($tid){
	global $con;
		//�Ȼ�ȡ����xinx
		//$uid,$sjh,$liuliang,$sjhtype,$beizhu,$ly
		$sql="select * from `liuliangdaili_log` where id=".$tid;
		$re=$con->query($sql);
		$orderinfo=mysql_fetch_array($re);
		if(empty($orderinfo)){
			return false;
		}
		
		$uid=trim($orderinfo["uid"]);
		$sjh=trim($orderinfo["sjh"]);
		$liuliang=trim($orderinfo["liuliang"]);
		$sjhtype=trim($orderinfo["sjhtype"]);
		$beizhu=trim($orderinfo["beizhu"]);
		$ly=trim($orderinfo["ly"]);
		
		$liuliang=intval($liuliang);
		if(empty($sjh) || empty($liuliang)){
			return false;
		}

		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		

		$tongdaoid=0;
		if((!empty($userinfo["lltdbdyd"])) || (!empty($userinfo["lltdbdlt"])) || (!empty($userinfo["lltdbddx"]))){
			if(empty($sjhtype)){
			//�����ƶ�
				$tongdaoid=$userinfo["lltdbdyd"];
			}elseif($sjhtype==1){
				//��ͨ����
				$tongdaoid=$userinfo["lltdbdlt"];
			}elseif($sjhtype==2){
				//���Ŵ���
				$tongdaoid=$userinfo["lltdbddx"];
			}
		}else{
			$sql="select * from `configdb` where configkey='liuliangtdyd'";
			if(empty($sjhtype)){
				//�����ƶ�
				$sql="select * from `configdb` where configkey='liuliangtdyd'";
			}elseif($sjhtype==1){
				//��ͨ����
				$sql="select * from `configdb` where configkey='liuliangtdlt'";
			}elseif($sjhtype==2){
				//���Ŵ���
				$sql="select * from `configdb` where configkey='liuliangtddx'";
			}
			$re=$con->query($sql);
			$tongdaoinfo=mysql_fetch_array($re);
			$tongdaoid=$tongdaoinfo["congigvalue"];//Ĭ��ͨ��id
		}

		if(empty($tongdaoid)){
			return false;
		}
		
		$err="";
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err);
		
		$zt=0;
		if(empty($a)){
			$zt=3;
			$inarr=array(
				"zt"=>$zt,
				"msgId"=>$a,
				"tongdaoid"=>$tongdaoid,
				"iseccl"=>1,
				"apimsg"=>$err
			);
			$re=$con->updatetabe("liuliangdaili_log",$inarr,$tid,"id");
			return false;
		}
		
		$zt=0;
		$inarr=array(
			"zt"=>$zt,
			"msgId"=>$a,
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time(),
			"iseccl"=>1,
			"apimsg"=>$err
		);
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$tid,"id");
		return true;
}


function addliuliang_jujue($tid){
	global $con;
	liuliang_fanhuandxnum_daili_resend($tid);
	
	$sql="UPDATE liuliangdaili_log SET zt = 2,apimsg='�ֶ��ܾ�',upzttime=".time()." where id=".$tid;
	$re=$con->query($sql);
	return true;
}

//�˿�
function liuliang_fanhuandxnum_daili_resend($tid){
	global $con;
	$time=time()-60*60*24*30;
	$sql="select * from `liuliangdaili_log` where id=".$tid." and zt=3 and istk=0";
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
}