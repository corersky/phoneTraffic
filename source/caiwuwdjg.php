<?

//获取我的套餐
$sql="select * from `taocanlist` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$mytcmsg="";
while($row=mysql_fetch_array($re)){
	if(($row["ayfanhuanjine"]>0) && ($row["yffyueshu"]<$row["yueshu"])){
		$t=date("t",$row["createtime"]);
		$d=date("d",$row["createtime"]);
		$time=$row["createtime"]+(($t-$d+2)*60*60*24);
		$time=date("Y年m月",$time);
		$mytcmsg.="分摊返还:".$row["ayfanhuanjine"]."元，分摊".$row["yueshu"]."个月，每月返还".$row["myfhje"]."元。（从".$time."开始返还，每月一号返还。）";
	}
	if($row["myzdxfjine"]>0){
		$mytcmsg.="月最低消费:".$row["myzdxfjine"]."元";
	}
}
if(empty($mytcmsg)){
	$mytcmsg="无";
}
	
	
//获取我的优惠信息
$myyouhuimsg=getmyyouhuimsg($_SESSION["uid"]);

include template('caiwuwdjg');


//获取我的优惠信息
function getmyyouhuimsg($uid){
global $con;
	//获取累计充值金额
	$zjine=getusercznum($uid);
	
	// 平均月充值金额
	$sql="select id,createtime,jiage from `user` where id=".$uid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$createtime=intval($row["createtime"]);
	$jiage=floatval($row["jiage"]);
	$zctimem=ceil((time()-$createtime)/(60*60*24*30));
	$pjyxfjine=$zjine/$zctimem;//平均月充值金额
	
	
	
	//优惠信息
	$sql="select * from `youhuimsg`";
	$re=$con->query($sql);
	$youhuiarr=array();
	while($row=mysql_fetch_array($re)){
		$youhuiarr[]=$row;
	}
	
	//列举所有可能用户到的条件数据
	//$zjine; 累计充值金额
	//$jiage; 用户单价
	//$createtime;用户注册时间
	//$zctimem;注册月份
	//$pjyxfjine;平均充值金额
	
	$reyouhuimsgarr=array();//长期优惠信息
	$reyouhuimsglinshiarr=array();//临时优惠信息
	foreach($youhuiarr as $value){
		if(empty($value["tjtype"])){
			$tj1=floatval($value["tj1"]);
			$tj2=floatval($value["tj2"]);
			$tj3=floatval($value["tj3"]);
			if(($zjine>$tj1) && ($zjine<=$tj2) && ($jiage>$tj3)){
				$msg=trim($value["msg"]);
				$msg=preg_replace("/【累计充值金额】/","".$zjine." 元",$msg);
				
				$reyouhuimsgarr[]=$msg;
			}
		}else{
			$tj1=floatval($value["tj1"]);
			$tj2=floatval($value["tj2"]);
			$tj3=floatval($value["tj3"]);
			$tj4=floatval($value["tj4"]);
			if(($zctimem>$tj1) && ($zctimem<=$tj2) && ($pjyxfjine>$tj3) && ($pjyxfjine<=$tj4)){
				$msg=trim($value["msg"]);
				$reyouhuimsglinshiarr[]=$msg;
			}
		}
	}
	
	if(!empty($reyouhuimsglinshiarr)){
		return $reyouhuimsglinshiarr[0];
	}
	return $reyouhuimsgarr[0];
	
}
?>