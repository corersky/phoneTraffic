<?php
//重新提交
function addliuliang_resend($tid){
	global $con;
		//先获取订单xinx
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
			//处理移动
				$tongdaoid=$userinfo["lltdbdyd"];
			}elseif($sjhtype==1){
				//联通处理
				$tongdaoid=$userinfo["lltdbdlt"];
			}elseif($sjhtype==2){
				//电信处理
				$tongdaoid=$userinfo["lltdbddx"];
			}
		}else{
			$sql="select * from `configdb` where configkey='liuliangtdyd'";
			if(empty($sjhtype)){
				//处理移动
				$sql="select * from `configdb` where configkey='liuliangtdyd'";
			}elseif($sjhtype==1){
				//联通处理
				$sql="select * from `configdb` where configkey='liuliangtdlt'";
			}elseif($sjhtype==2){
				//电信处理
				$sql="select * from `configdb` where configkey='liuliangtddx'";
			}
			$re=$con->query($sql);
			$tongdaoinfo=mysql_fetch_array($re);
			$tongdaoid=$tongdaoinfo["congigvalue"];//默认通道id
		}
		
		
		//判断是否走省内通道
		if(empty($sjhtype)){
			$bdllarr="";//没用
			$province=$orderinfo["province"];
			
			$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1";
			$re=$con->query($sql);
			while($row=mysql_fetch_array($re)){
				$sheng=$row["sheng"];
				if(($sheng=="河北") && ($liuliang>150)){
					continue;
				}
			
				$preg_ah="/".$sheng."/is";
				if (preg_match($preg_ah,$province,$bdllarr)) {
					$tongdaoid=$row["id"];
					break;
				}
			}
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
	
	$sql="UPDATE liuliangdaili_log SET zt = 2,apimsg='手动拒绝',upzttime=".time()." where id=".$tid;
	$re=$con->query($sql);
	return true;
}

//退款
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
	//更新返款状态
	$sql="UPDATE liuliangdaili_log set istk=1 where id=".$orderinfo["id"];
	$re=$con->query($sql);
	
	//返还金额
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
}