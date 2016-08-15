<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("../common.php");
	require_once("../smsfunction.php");
	require_once("serverfunction.php");
	$con=new MySql();
	$username=trim($_POST["username"]);
	$pwd=trim($_POST["pwd"]);
	$mobile=trim($_POST["mobile"]);
	$content=trim($_POST["content"]);
	$sendtime=trim($_POST["sendtime"]);
	
	$lang=trim($_POST["lang"]);//默认为gbk 也可以是u8
	if($lang=="u8"){
		$content=iconv("UTF-8","GBK//IGNORE",$content);
	}
	
	
$aaa=date("Y-m-d H:i:s").":".serialize($_GET).":".serialize($_POST).":".$content."\n";
csw("1122331.txt",$aaa);

	if(empty($username) || empty($pwd) || empty($mobile) || empty($content)){
		returnmsg(0,"参数信息不完整");
	}
	
	$sql="select * from `user` where username='".$username."' and pwd='".$pwd."'";
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	$uid=$userinfo["id"];
	if(empty($uid)){
		returnmsg(1,"用户名密码错误");
	}
	
	//判断用户是否是接口用户
	$sql="SELECT uid FROM user_jiekou where uid=".$uid." and zt=1";
	
	$re=$con->query($sql);
	$row=mysql_fetch_array($re,MYSQL_ASSOC);
	if(empty($row)){
		returnmsg(6,"不是接口用户");
	}
	
	//获取免审用户
	$sql="select * from `mianshenuser` where uid=".$uid." and (nbzh=1 or jkms=1)";
	$re=$con->query($sql);
	$mianshenuserinfo=mysql_fetch_array($re,MYSQL_ASSOC);
	$nbzh=intval($mianshenuserinfo["nbzh"]);
	$jkms=intval($mianshenuserinfo["jkms"]);
	
	
	
	if(!empty($nbzh)){
		//内部账号不用验证
	}elseif(!empty($jkms)){
		//接口免审用户验证待确定
	
	}else{
		//一般接口用户验证
		
		//获取用户短信模板
		$sql="SELECT temp,temptype FROM jiekou_temp where uid=".$uid." and zt=1";
		$re=$con->query($sql);
		$temparr=array();
		while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
			$temparr[]=$row;
		}
		
		//验证用户短信模板
		$tempppzt=0;
		$temptype=0;
		foreach($temparr as $tempvalue){
			//模板验证
			$temp=$tempvalue["temp"];
			$replace=preg_replace("/(\*\*\*\*\*)/s","baibianliang", $temp);
			$replace = preg_quote($replace, '/');
			$replace=preg_replace("/baibianliang/s","(.*?)", $replace);
			//$replace=preg_replace("/(\*\*\*\*\*)/s","(.*?)", $temp);
			//$replace=preg_replace("/(\*\*\*\*\*)/s","(.*?)", $temp);
			$replace="/".$replace."/is";
			$ppgjzarr="";
			if (preg_match($replace,$content,$ppgjzarr)) {
				$tempppzt=1;
				$temptype=$tempvalue["temptype"];
				break;
			}
		}
		if(empty($tempppzt)){
			returnmsg(2,"短信内容和模板不匹配");
		}
	}
	
	
	$nowtime=time();
	if(!empty($sendtime)){
		$sendtime=strtotime($sendtime);
		if($sendtime<($nowtime+300)){
			returnmsg(3,"定时发送时间至少要在五分钟以后");
		}
	}
	
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		returnmsg(20,"短信价格错误");
	}
	
	//获取通道id
	$tongdaoid=0;
	if(empty($temptype)){
		$sql="select id from `tongdaolist` where zt=1 and  qt_jktd=1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$tongdaoid=intval($row["id"]);
	}else{
		$sql="select id from `tongdaolist` where zt=1 and  qt_jkyzmtd=1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$tongdaoid=intval($row["id"]);
	}
	
	
	if((!empty($nbzh)) || (!empty($jkms))){
		//使用指定通道发送
		$tongdaoid=$mianshenuserinfo["tongdaoid"];
	}
	
	$meitiaosmssizef=67;//每条短信最多字数
	
	$sql="select * from `tongdaolist` where id=".$tongdaoid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$meitiaosmssizef=intval($row["kfts"]);
		
	
	$sjharr=explode(',', $mobile);
	$sjharr=filteremptyarr($sjharr);
	if(empty($sjharr)){
		returnmsg(0,"参数信息不完整");
	}
	$sendsjhstr=implode(",",$sjharr);
	
	$nei=$content;
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/$meitiaosmssizef);//每个号码短信条数
	$txlarrlen=count($sjharr);//手机号个数
	$smsnum=$smsnum*$txlarrlen;//发送短信条数
	$zongfeiyong=$smsnum*$jiage;//扣费金额
	
	//判断金额
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		returnmsg(4,"余额不足");
	}
	

	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>1,
		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	cs($inarr);

	

	


	foreach($sjharr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		cs($inarr);
	}


	
	

	
?>
ok