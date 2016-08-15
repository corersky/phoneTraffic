<?php
//通道处理程序 参数：用户id,手机号，流量
//发送成功返回true 失败 false 
function liuliang_tongdaoation_1($uid,$sjh,$liuliang,&$err){
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
		
		$yidongzk=floatval($userinfo["yidongzk"]);//移动折扣
		$liantongzk=floatval($userinfo["liantongzk"]);//折扣
		$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
		
		$sjhinfo=getsjhinfo($sjh);
		
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
		
		$liuliangbuf="".$liuliang."M";
		
		$err="";
		$tongdaoid=1;
		$a=sendliuliang($sjh,$liuliangbuf,$tongdaoid,"",$err);
		
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
		$msg=$zongfeiyong."元购买".$liuliangbuf."流量";
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
function liuliang_tongdaoation_2($uid,$sjh,$liuliang,&$err){
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
		$tongdaoid=2;
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
function liuliang_tongdaoation_3($uid,$sjh,$liuliang,&$err){
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
		$tongdaoid=3;
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
	$id=$con->insertabe("liuliangdaili_log",$inarr);
	die("0");
}