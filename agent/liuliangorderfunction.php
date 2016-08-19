<?php
//通道处理程序 参数：用户id,手机号，流量
//发送成功返回true 失败 false 
function liuliang_tongdaoation_1($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,1,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_2($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,2,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_3($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,3,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_4($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,4,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_5($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,5,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_6($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,6,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_7($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,7,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_8($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,8,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_9($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,9,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_10($uid,$sjh,$liuliang,&$err){
		global $con;
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){

				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if(!empty($sjhtype)){
			$err="通道类型错误！";
			return false;
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}
		
		$mobileProductIdarr=array(
				"10"=>"8a2876934fb6d9a2014fbac56cce0af8",
				"30"=>"8a2876934fb6d9a2014fbac4f5e50af5",
				"70"=>"8a2876934fb6d9a2014fbac4625e0af2",
				"150"=>"8a2876934fb6d9a2014fbac3f7440af0",
				"500"=>"8a2876934fb6d9a2014fbac2cb050aea",
				"1024"=>"8a2876934fb6d9a2014fbac35d8e0aed",
				"2048"=>"8a2876934fb6d9a2014fbac5cb5c0afa",
				"3072"=>"8a2876934fb6d9a2014fbac656840afd",
				"4096"=>"8a2876934fb6d9a2014fbac6abbc0aff",
				"6144"=>"8a2876934fb6d9a2014fbac70a260b01",
				"11264"=>"8a2876934fb6d9a2014fbac763250b04"
		);
		$mobileProductId=$mobileProductIdarr[$liuliang];
		$qita=array("mobileProductId"=>$mobileProductId);
					

		$err="";
		$tongdaoid=10;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err);
		
		
		//获取通道价和毛利
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if(!empty($sjhtype)){
			$err="通道类型错误！";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

		
		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_11($uid,$sjh,$liuliang,&$err){
		global $con;
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if(!empty($sjhtype)){
			$err="通道类型错误！";
			return false;
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}
		
		
					
		$qita="";
		$err="";
		$tongdaoid=11;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err);
		
		
		//获取通道价和毛利
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if(!empty($sjhtype)){
			$err="通道类型错误！";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

		
		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_12($uid,$sjh,$liuliang,&$err){
		global $con;
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),

			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if(!empty($sjhtype)){
			$err="通道类型错误！";
			return false;
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}
		
		
					
		$qita="";
		$err="";
		$tongdaoid=12;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err);
		
		
		//获取通道价和毛利
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if(!empty($sjhtype)){
			$err="通道类型错误！";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

		
		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_13($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,13,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_14($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,14,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_15($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,15,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_16($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,16,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_17($uid,$sjh,$liuliang,&$err){
		global $con;
		//判断对方传送的手机号归属
	return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,17,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_18($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,18,$err);
}





//发送成功返回true 失败 false 
function liuliang_tongdaoation_19($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,19,$err);
}






//发送成功返回true 失败 false 
function liuliang_tongdaoation_20($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,20,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_21($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,21,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_22($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,22,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_23($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,23,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_24($uid,$sjh,$liuliang,&$err){
	global $con;
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("code"=>"104645","mianzhi"=>3),
			"50"=>array("code"=>"104645","mianzhi"=>6),
			"100"=>array("code"=>"104645","mianzhi"=>10),
			"200"=>array("code"=>"104645","mianzhi"=>15),
			"500"=>array("code"=>"104645","mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("code"=>"104645","mianzhi"=>1),
			"10"=>array("code"=>"104645","mianzhi"=>2),
			"30"=>array("code"=>"104645","mianzhi"=>5),
			"50"=>array("code"=>"104645","mianzhi"=>7),
			"100"=>array("code"=>"104645","mianzhi"=>10),
			"200"=>array("code"=>"104645","mianzhi"=>15),
			"500"=>array("code"=>"104645","mianzhi"=>30),
			"1024"=>array("code"=>"104645","mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("code"=>"104645","mianzhi"=>3),
			"30"=>array("code"=>"104645","mianzhi"=>5),
			"70"=>array("code"=>"104645","mianzhi"=>10),
			"150"=>array("code"=>"104645","mianzhi"=>20),
			"500"=>array("code"=>"104645","mianzhi"=>30),
			"1024"=>array("code"=>"104645","mianzhi"=>50),
			"2048"=>array("code"=>"104645","mianzhi"=>70),
			"3072"=>array("code"=>"104645","mianzhi"=>100),
			"4096"=>array("code"=>"104645","mianzhi"=>130),
			"6144"=>array("code"=>"104645","mianzhi"=>180),
			"11264"=>array("code"=>"104645","mianzhi"=>280)
		);
		
		$kfmianzhi=0;//付款面值
		$qita="";//其他参数
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
			$qita=trim($yidongtcarr[$liuliang]["code"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
			$qita=trim($liantongtcarr[$liuliang]["code"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
			$qita=trim($dianxintcarr[$liuliang]["code"]);
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}

		$err="";
		$tongdaoid=24;
		$qitaarr=array();
		$qitaarr["code"]=$qita;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qitaarr,$err);
		
		//获取通道价和毛利
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//扣费金额
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;



		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		
	
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}





//发送成功返回true 失败 false 
function liuliang_tongdaoation_25($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,25,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_26($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,26,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_27($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,27,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_28($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,28,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_29($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,29,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_30($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,30,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_31($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,31,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_32($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,32,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_33($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,33,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_34($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,34,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_35($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,35,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_36($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,36,$err);
}




//发送成功返回true 失败 false 
function liuliang_tongdaoation_37($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,37,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_38($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,38,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_39($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,39,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_40($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,40,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_41($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,41,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_42($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,42,$err);
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_43($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,43,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_44($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,44,$err);
}





//发送成功返回true 失败 false 
function liuliang_tongdaoation_45($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,45,$err);
}





//发送成功返回true 失败 false 
function liuliang_tongdaoation_46($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,46,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_47($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,47,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_48($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,48,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_49($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,49,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_50($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,50,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_51($uid,$sjh,$liuliang,&$err){
		global $con;
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("code"=>"29101089","mianzhi"=>3),
			"50"=>array("code"=>"29100633","mianzhi"=>6),
			"100"=>array("code"=>"29000508","mianzhi"=>10),
			"200"=>array("code"=>"29100634","mianzhi"=>15),
			"500"=>array("code"=>"29000509","mianzhi"=>30),
			"1024"=>array("code"=>"29000506","mianzhi"=>60)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//付款面值
		$qita="";
		if(empty($sjhtype)){
			$err="选择套餐错误！";
			return false;
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
			$qita=trim($liantongtcarr[$liuliang]["code"]);
		}else if($sjhtype==2){
				$err="选择套餐错误！";
				return false;
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
	
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}
		
		
					

		$err="";
		$tongdaoid=51;
		
		//获取通道价和毛利
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if($sjhtype!=1){
			$err="通道类型错误！";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
        
        $functionname=trim($tongdaoinfo["functionname"]); ##对应通道流量推送方法
    	if(!function_exists($functionname)){
    		$err="获取通道推送方法失败";
    		return false;
    	}
    
    	//获取发送通道维护信息
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="指定地区维护中";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="指定号段已关闭";
    			return false;
    	}

		
		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
        if(!$re){
            $err="用户费用扣除失败！";
            return FALSE;
        }
		
		$zt=1; ##通道51默认成功
		$istk=0;
		
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>0,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"istk"=>$istk,
			"upzttime"=>time(),
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $err="订单保存失败!";
            return false;
        }
        
        $a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err,$functionname);
        
        $inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=2;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."通道{$tongdaoid}提交失败 uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
        
		return true;
}



//发送成功返回true 失败 false 
function liuliang_tongdaoation_52($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,52,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_53($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,53,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_54($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,54,$err);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_55($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,55,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_56($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,56,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_57($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,57,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_58($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,58,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_59($uid,$sjh,$liuliang,&$err){
	global $con;
		//此通道失败时直接推送过来，会有本程序还未处理完时推送过来不识别情况
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),

			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}
		
		
	
		
		//获取通道价和毛利
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//扣费金额
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

        $functionname=trim($tongdaoinfo["functionname"]); ##对应通道流量推送方法
    	if(!function_exists($functionname)){
    		$err="获取通道推送方法失败";
    		return false;
    	}
    
    	//获取发送通道维护信息
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="指定地区维护中";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="指定号段已关闭";
    			return false;
    	}

		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
        if(!$re){
            $msg    =   '扣除费用失败!';
            return FALSE;
        }
		$zt=0;
		
	    $tongdaoid=59;
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>"",
			"apimsg"=>"",
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],

			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $msg    =   '保存订单信息失败!';
            return FALSE;
        }
		
		
		$tongdaoid=59;
		$err="";
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err, $functionname);
		
		$inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."通道{$tongdaoid}提交失败 uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		
		return true;
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_60($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,60,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_61($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,61,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_62($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,62,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_63($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,63,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_64($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,64,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_65($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,65,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_66($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,66,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_67($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,67,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_68($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,68,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_69($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,69,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_70($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,70,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_71($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,71,$err);
}

//发送成功返回true 失败 false 
function liuliang_tongdaoation_72($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,72,$err);
}
//发送成功返回true 失败 false 
function liuliang_tongdaoation_73($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,73,$err);
}
function liuliang_tongdaoation_74($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,74,$err);
}
function liuliang_tongdaoation_75($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,75,$err);
}

function liuliang_tongdaoation_76($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,76,$err);
}
function liuliang_tongdaoation_77($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,77,$err);
}
function liuliang_tongdaoation_78($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,78,$err);
}

function liuliang_tongdaoation_79($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,79,$err);
}

function liuliang_tongdaoation_80($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,80,$err);
}
function liuliang_tongdaoation_81($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,81,$err);
}

function liuliang_tongdaoation_83($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,83);
}


//发送成功返回true 失败 false 
function liuliang_tongdaoation_82($uid,$sjh,$liuliang,&$err,$tongdaoid=82){
	global $con;
    
		//此通道失败时直接推送过来，会有本程序还未处理完时推送过来不识别情况
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);

		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
            "100"=>array("dxnum"=>300,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}
	
		
		//获取通道价和毛利
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//扣费金额
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

        $functionname=trim($tongdaoinfo["functionname"]); ##对应通道流量推送方法
    	if(!function_exists($functionname)){
    		$err="获取通道推送方法失败";
    		return false;
    	}
    
    	//获取发送通道维护信息
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="指定地区维护中";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="指定号段已关闭";
    			return false;
    	}

		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
        if(!$re){
            $msg    =   '扣除费用失败!';
            return FALSE;
        }
		$zt=0;
		
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>"",
			"apimsg"=>"",
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],

			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $msg    =   '保存订单信息失败!';
            return FALSE;
        }

		$err="";
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err, $functionname);
		
		$inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."通道{$tongdaoid}提交失败 uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		
		return true;
}

function liuliang_tongdaoation_84($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,84);
}

function liuliang_tongdaoation_85($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,85);
}

function liuliang_tongdaoation_86($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,86);
}
function liuliang_tongdaoation_87($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,87);
}
function liuliang_tongdaoation_88($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,88);
}
function liuliang_tongdaoation_89($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,89);
}
function liuliang_tongdaoation_90($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,90);
}
function liuliang_tongdaoation_91($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,91);
}
function liuliang_tongdaoation_92($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,92);
}
function liuliang_tongdaoation_93($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,93);
}
function liuliang_tongdaoation_94($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,94);
}
function liuliang_tongdaoation_95($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,95);
}
function liuliang_tongdaoation_96($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,96);
}
function liuliang_tongdaoation_97($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,97);
}
function liuliang_tongdaoation_98($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,98);
}
function liuliang_tongdaoation_99($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,99);
}
function liuliang_tongdaoation_100($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,100);
}
function liuliang_tongdaoation_101($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,101);
}
function liuliang_tongdaoation_102($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,102);
}
function liuliang_tongdaoation_103($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,103);
}
function liuliang_tongdaoation_104($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,104);
}
function liuliang_tongdaoation_105($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,105);
}

function liuliang_tongdaoation_106($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,106);
}

function liuliang_tongdaoation_107($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,107);
}

function liuliang_tongdaoation_108($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,108);
}

function liuliang_tongdaoation_109($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,109);
}

function liuliang_tongdaoation_110($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,110);
}

function liuliang_tongdaoation_111($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,111);
}


/************通用************/
//发送成功返回true 失败 false 
function liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$tongdaoid,&$err){
	global $con;
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//处理联通套餐
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),

			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="选择套餐错误！";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}

		$err="";
		//获取通道价和毛利
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//扣费金额
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
        
        $functionname=trim($tongdaoinfo["functionname"]); ##对应通道流量推送方法
    	if(!function_exists($functionname)){
    		$err="获取通道推送方法失败";
    		return false;
    	}
    
    	//获取发送通道维护信息
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="指定地区维护中";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="指定号段已关闭";
    			return false;
    	}

		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
        if(!$re){
            $err    =   '扣除费用失败！';
            return FALSE;
        }
		$zt=0;
	
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>'',
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $err    =   '保存订单信息失败!';
            return FALSE;
        }
        
        $a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err,$functionname);
        
        $inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."通道{$tongdaoid}提交失败 uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		return true;
}



//接口开通流量
function addliuliang_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,$ly){
	global $con;
		$liuliang=intval($liuliang);
		if(empty($sjh) || empty($liuliang)){
			die("-2");
		}

		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//余额
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		$yidongzk=floatval($userinfo["yidongzk"]);//折扣
		
		//判断对方传送的手机号归属和实际归属是否相同
		$hd=substr($sjh,0,4);
		$sjhgsd=getsjhdgs($hd);
		if($sjhtype==3){
			$sjhtype=$sjhgsd;
		}
		if($sjhgsd!=$sjhtype){
			die("-1");
		}
		$sjhinfo=getsjhinfo($sjh);
		//处理联通套餐
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"300"=>array("dxnum"=>600,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1500,"mianzhi"=>60)
		);
		
		//处理电信套餐
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),

			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//处理移动
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"300"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"700"=>array("dxnum"=>750,"mianzhi"=>40),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
			
			
		);
		$kfmianzhi=0;//付款面值
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐不存在！",$ly);
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐不存在！",$ly);
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐不存在！",$ly);
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"选择套餐错误！",$ly);
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		}
		
		//判断金额
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			die("-3");
		}

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
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"获取通道失败！",$ly);
		}
		
		
		//判断是否走省内通道
		if(empty($sjhtype)){
			$bdllarr="";//没用
			$province=$sjhinfo["province"];
			if(empty($province)){
				$province="没意义的文字";
			}
			$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszcyd=1";
			$re=$con->query($sql);
			while($row=mysql_fetch_array($re)){
				$sheng=$row["sheng"];
				if(($sheng=="河北") && ($liuliang>150)){
					continue;
				}
				if(($sheng=="新疆") && ($liuliang>150)){
					continue;
				}
				if(($row["id"]==66) && ($liuliang>150)){
					continue;
				}
				if(($row["id"]==17) && (($liuliang==70) || ($liuliang==150))){
					continue;
				}
				if(($row["id"]==20) && (($liuliang==70) || ($liuliang==150))){
					continue;
				}
				if(($row["id"]==62) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			if(($row["id"]==63) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
				$preg_ah="/".$sheng."/is";
				if (preg_match($preg_ah,$province,$bdllarr)) {
					$tongdaoid=$row["id"];
					break;
				}
			}
			
			//如果绑定的是省网通道，强制走省网
			$bdlltdbdydid=$userinfo["lltdbdyd"];
			if(!empty($bdlltdbdydid)){
				$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
				$re=$con->query($sql);
				$row=mysql_fetch_array($re);
				$isbdtd=intval($row["isbdtd"]);//是否是本地通道 0不是 1是
				$sheng=trim($row["sheng"]);//如果是本地通道，此字段存储省份
				if(!empty($isbdtd)){
					$tongdaoid=$bdlltdbdydid;
					
					$preg_ah="/".$sheng."/is";
					if (!preg_match($preg_ah,$province,$bdllarr)) {
						liuliangerr("请勿提交没有权限的省份号码！");
					}
					
				}
			}
			
		}
		
		
		if($sjhtype==1){
			$bdllarr="";//没用
			$province=$sjhinfo["province"];
			if(empty($province)){
				$province="没意义的文字";
			}
			$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszclt=1";
			$re=$con->query($sql);
			while($row=mysql_fetch_array($re)){
				$sheng=$row["sheng"];
				$preg_ah="/".$sheng."/is";
				if (preg_match($preg_ah,$province,$bdllarr)) {
					$tongdaoid=$row["id"];
					break;
				}
			}
			
			//如果绑定的是省网通道，强制走省网
			$bdlltdbdydid=$userinfo["lltdbdlt"];
			if(!empty($bdlltdbdydid)){
				$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
				$re=$con->query($sql);
				$row=mysql_fetch_array($re);
				$isbdtd=intval($row["isbdtd"]);//是否是本地通道 0不是 1是
				$sheng=trim($row["sheng"]);//如果是本地通道，此字段存储省份
				if(!empty($isbdtd)){
					$tongdaoid=$bdlltdbdydid;
					
					$preg_ah="/".$sheng."/is";
					if (!preg_match($preg_ah,$province,$bdllarr)) {
						liuliangerr("请勿提交没有权限的省份号码！");
					}
					
				}
			}
			
		}
		
		if($sjhtype==2){
			$bdllarr="";//没用
			$province=$sjhinfo["province"];
			if(empty($province)){
				$province="没意义的文字";
			}
			$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszcdx=1";
			$re=$con->query($sql);
			while($row=mysql_fetch_array($re)){
				$sheng=$row["sheng"];
				$preg_ah="/".$sheng."/is";
				if (preg_match($preg_ah,$province,$bdllarr)) {
					$tongdaoid=$row["id"];
					break;
				}
			}
			
			//如果绑定的是省网通道，强制走省网
			$bdlltdbdydid=$userinfo["lltdbddx"];
			if(!empty($bdlltdbdydid)){
				$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
				$re=$con->query($sql);
				$row=mysql_fetch_array($re);
				$isbdtd=intval($row["isbdtd"]);//是否是本地通道 0不是 1是
				$sheng=trim($row["sheng"]);//如果是本地通道，此字段存储省份
				if(!empty($isbdtd)){
					$tongdaoid=$bdlltdbdydid;
					
					$preg_ah="/".$sheng."/is";
					if (!preg_match($preg_ah,$province,$bdllarr)) {
						liuliangerr("请勿提交没有权限的省份号码！");
					}
					
				}
			}
			
		}
		
		
		
		
		
		$err="";
        
		//获取通道价和毛利
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
        if(empty($tongdaoinfo)){
            $err="未拉取到通道信息!";
    		return FALSE;
        }
        
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//扣费金额
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
        
    	$functionname=trim($tongdaoinfo["functionname"]); ##对应通道流量推送方法
    	if(!function_exists($functionname)){
    		$err="获取通道推送方法失败";
    		return false;
    	}
    
    	//获取发送通道维护信息
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="指定地区维护中";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="指定号段已关闭";
    			return false;
    	}
		
		
		//开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额

		if(empty($re)){
			$aaa=date("Y-m-d H:i:s").":扣费失败： uid:".$uid." sjh:".$sjh.'sql:'.$sql.' '.mysql_error();
			csw("agentOrderPostError.log",$aaa);
            return FALSE;
		}

		$zt=0;
		
		
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,

			"msgId"=>0,
			"apimsg"=>$err,
			"beizhu"=>$beizhu,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"ly"=>$ly,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $aaa=date("Y-m-d H:i:s")."：保存订单信息失败： uid:".$uid." sjh:".$sjh.' 信息:'.json_encode($inarr);
			csw("agentOrderPostError.log",$aaa);
            return FALSE;
        }
        
        if(isset($_POST['test'])){
            echo '测试成功!';
            exit;
        }else{
            $a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err,$functionname);
        }
        
        
        $inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}

		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."通道{$tongdaoid}提交失败 uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		return $id;
}









//充值卡开通流量
function addliuliang_km($kid,$sjh,$openid,&$err){
	global $con;
		if(empty($kid) || empty($sjh)){
			$err="系统参数异常";
			return false;
		}


		
		$sql="select * from `ka_infos` where id=".$kid;
		$re=$con->query($sql);
		$kainfo=mysql_fetch_array($re);
		if(empty($kainfo)){
			$err="卡号异常";
			return false;
		}
		if(!empty($kainfo["zt"])){
			$err="此卡已被使用！";
			return false;
		}
		
		
		$liuliang=$kainfo["liuliang"];
		$uid=$kainfo["uid"];
		
		$kfmianzhi=$kainfo["mianzhi"];
		$zongfeiyong=$kainfo["shje"];
		//判断对方传送的手机号归属和实际归属是否相同
		$sjhtype=$kainfo["sjhtype"];
		$hd=substr($sjh,0,4);
		$sjhgsd=getsjhdgs($hd);
	
		
		if($sjhgsd!=$sjhtype){
			$err="手机所属运营商和卡套餐不符!";
			return false;
		}
		$sjhinfo=getsjhinfo($sjh);
		
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
			if($sjhtype==1){
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
			$province=$sjhinfo["province"];
			if(empty($province)){
				$province="没意义的文字";
			}
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
			$err="获取通道失败!";
			return false;
		}
		
		$err="";
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err);
		//获取通道价和毛利
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//移动折扣
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//折扣
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//折扣
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//通道扣费金额
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//扣费金额
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//扣费金额
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
		
		
		//开通成功
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg="充值卡激活".$liuliang."M流量";
		$beizhu="卡密激活";
		$ly=3;
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"beizhu"=>$beizhu,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"ly"=>$ly,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		
		//把卡标记为激活状态
		$sql="UPDATE ka_infos set sjh='".$sjh."',zt=3,jihuotime=".time().",tid=".$id.",openid='".$openid."' where id=".$kid;
		$re=$con->query($sql);
		
		return $id;
}






//接口开通流量 联通
function liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,$errmsg,$ly){
	global $con;
	$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>0,
			"shje"=>0,
			"msg"=>$errmsg,
			
			"zt"=>2,
			"msgId"=>0,
			"apimsg"=>$errmsg,
			"beizhu"=>$beizhu,
			"ly"=>$ly,

			"createtime"=>time()
	);
    $aaa=date("Y-m-d H:i:s").":基本信息错误 uid:".$uid." sjh:".$sjh.' 信息:'.$errmsg;
	csw("agentOrderPostError.log",$aaa);
	//$id=$con->insertabe("liuliangdaili_log",$inarr);
	die("0");
}