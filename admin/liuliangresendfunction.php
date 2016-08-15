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
				"apimsg"=>$err
			);
			$re=$con->updatetabe("liuliangdaili_log",$inarr,$tid,"id");
			return false;
		}
		
		$zt=0;
		$inarr=array(
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err
		);
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$tid,"id");
		return true;
}
