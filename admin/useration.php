<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="setkefu"){
	$kefuxingming=trim($_POST["kefuxingming"]);
	$kefusjh=trim($_POST["kefusjh"]);
	$kefuid=trim($_POST["kefuid"]);

	if(empty($kefuxingming)){
		die("<script>alert('姓名不能为空!');</script>");
	}
	
	if(!empty($kefuid)){
		$inarr=array(
			"username"=>$kefuxingming,
			"sjh"=>$kefusjh
		);
		$re=$con->updatetabe("user_kefu",$inarr,$kefuid,"id");
	}else{
		$inarr=array(
			"username"=>$kefuxingming,
			"pwd"=>"123123",
			"sjh"=>$kefusjh,
			"createtime"=>time()
		);
		$id=$con->insertabe("user_kefu",$inarr);
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delkefuuser"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('内容不能为空!');</script>");
	}
	


	$sql="DELETE FROM user_kefu  where id=".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setyingxiao"){
	$yingxiaoxingming=trim($_POST["yingxiaoxingming"]);
	$yingxiaosjh=trim($_POST["yingxiaosjh"]);
	$yingxiaouid=trim($_POST["yingxiaouid"]);

	if(empty($yingxiaoxingming)){
		die("<script>alert('姓名不能为空!');</script>");
	}
	
	if(!empty($yingxiaouid)){
		$inarr=array(
			"username"=>$yingxiaoxingming,
			"sjh"=>$yingxiaosjh
		);
		$re=$con->updatetabe("user_yingxiao",$inarr,$yingxiaouid,"id");
	}else{
		$inarr=array(
			"username"=>$yingxiaoxingming,
			"sjh"=>$yingxiaosjh,
			"createtime"=>time()
		);
		$id=$con->insertabe("user_yingxiao",$inarr);
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delyingxiaouser"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('内容不能为空!');</script>");
	}
	


	$sql="DELETE FROM user_yingxiao  where id=".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="adduser"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$lxrxm=trim($_POST["lxrxm"]);
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$qianming=trim($_POST["qianming"]);
	$yingxiaoid=trim($_POST["yingxiaoid"]);
	if(empty($username) || empty($sjh)){
		die("<script>alert('填写信息不完整!');</script>");
	}
	
	if(empty($qianming)){
		$qianming="【".$username."】";
	}
	$qmq=substr($qianming,0,2);
	if($qmq !="【"){
		$qianming="【".$qianming."】";
	}
	
	//检查用户吗是否存在
	$sql="select username from `user` where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('用户名已存在!');</script>");
	}
	//检查电话是否存在
	$sql="select username from `user` where sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('指定电话已存在（".$row['username']."）!');</script>");
	}
	
	
	//存储用户信息
	$nowtime=time();
	$ip= GetIP();
	$inarr=array(
		   "username"=>$username,
		   "pwd"=>"123123",
		   "dxnum"=>0,
		   "jiage"=>"0.0625",
		   "yingxiaoid"=>$yingxiaoid,
		   "zhdltime"=>$nowtime,
		   "zhdlip"=>$ip,
		   "sjh"=>$sjh,
		   "gsmc"=>$gsmc,
		   "dizhi"=>$dizhi,
		   "lxrxm"=>$lxrxm,
		   "lxrqq"=>$lxrqq,
		    "qianming"=>$qianming,
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("user",$inarr);
	die("<script>alert('添加成功!');window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="setuserinfo"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$lxrxm=trim($_POST["lxrxm"]);
	
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$qianming=trim($_POST["qianming"]);
	$uid=trim($_POST["uid"]);

	if(empty($uid)){
		die("<script>alert('非法请求!');</script>");
	}
	
	if(empty($username) || empty($sjh)){
		die("<script>alert('用户名和和搜集好不能为空!');</script>");
	}
	
	$qmq=substr($qianming,0,2);
	if($qmq !="【"){
		$qianming="【".$qianming."】";
	}
	

	$inarr=array(
			"username"=>$username,
			"sjh"=>$sjh,
			"lxrxm"=>$lxrxm,
			"lxrqq"=>$lxrqq,
			"gsmc"=>$gsmc,
			"dizhi"=>$dizhi,
			"qianming"=>$qianming
			
	);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserkefuid"){
	$uid=trim($_GET["uid"]);
	$kefuid=trim($_GET["kefuid"]);
	if(empty($uid) || empty($kefuid)){
		die("<script>alert('请选择专员!');</script>");
	}

	$inarr=array(
				"kefuid"=>$kefuid
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuseryingxiaoid"){
	$uid=trim($_GET["uid"]);
	$kefuid=trim($_GET["kefuid"]);
	if(empty($uid) || empty($kefuid)){
		die("<script>alert('请选择专员!');</script>");
	}

	$inarr=array(
				"yingxiaoid"=>$kefuid
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserbeizhu"){
	$uid=trim($_POST["uid"]);
	$beizhu=trim($_POST["beizhu"]);
	if(empty($uid)){
		die("<script>alert('非法请求!');</script>");
	}

	$inarr=array(
				"beizhu"=>$beizhu
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserjiage"){
	$uid=trim($_GET["uid"]);
	$jiage=floatval($_GET["jiage"]);
	if(empty($uid) || ($jiage<=0)){
		die("<script>alert('价格错误!');</script>");
	}

	$inarr=array(
				"jiage"=>$jiage
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="tempshenheok"){
	$id=trim($_GET["id"]);
	$temptype=intval($_GET["temptype"]);
	if(empty($id)){
		die("<script>alert('错误!');</script>");
	}

	$inarr=array(
				"zt"=>1,
				"temptype"=>$temptype,
				"shenhetime"=>time(),
				"msg"=>""
			);
	$re=$con->updatetabe("jiekou_temp",$inarr,$id,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="tempshenheerr"){
	$beizhumsg=trim($_POST["beizhumsg"]);
	$tempid=trim($_POST["tempid"]);
	if(empty($tempid)){
		die("<script>alert('错误!');</script>");
	}
	if(empty($beizhumsg)){
		die("<script>alert('理由不能为空!');</script>");
	}
	
	$inarr=array(
				"zt"=>2,
				"shenhetime"=>time(),
				"msg"=>$beizhumsg
			);
	$re=$con->updatetabe("jiekou_temp",$inarr,$tempid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="dxchongzhi"){
	$username=trim($_POST["username"]);
	
	
	if(empty($username)){
		die("<script>alert('用户名不能为空!');</script>");
	}
	
	$jine=intval($_POST["jine"]);
	$zengsongjine=intval($_POST["zengsongjine"]);

	//获取用户id
	$uid=nicktouid($username);
	if(empty($uid)){
		die("<script>alert('获取指定用户信息失败，请确认用户名是否正确!');</script>");
	}
	
	$jiage= getuserjiage($uid);
	$jine=$jine*$jiage;
	$zengsongjine=$zengsongjine*$jiage;
	
	$beizhu=trim($_POST["beizhu"]);
	$shje=floatval($_POST["shje"]);
	
	if($jine>0){
		$cztype=intval($_POST["cztype"]);
		if(empty($cztype)){
			userdxchongzhi_sdcz($uid,$jine,1,$shje,$beizhu);
		}else{
			userdxchongzhi_sdkf($uid,$jine,5,$shje,$beizhu);
		}
		$shje=0;
	}
	
	if($zengsongjine>0){
		userdxchongzhi_sdcz($uid,$zengsongjine,1,$shje,$beizhu,1);
	}
	die("<script>alert('充值成功');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="sendfapiao"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('非法请求!');</script>");
	}
	$inarr=array(
				"zt"=>1
	);
	$re=$con->updatetabe("fapiao_log",$inarr,$id,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="taocanbangding"){
	$username=trim($_POST["username"]);
	$ayfanhuanjine=floatval($_POST["ayfanhuanjine"]);
	$yueshu=intval($_POST["yueshu"]);
	$myzdxfjine=floatval($_POST["myzdxfjine"]);
	if(empty($username)){
		die("<script>alert('请输入用户名!');</script>");
	}
	
	if(($ayfanhuanjine<0) || ($yueshu<0) || ($myzdxfjine<0)){
		die("<script>alert('输入数据非法!');</script>");
	}
	
	
	if($ayfanhuanjine>0 && $yueshu<=0){
		die("<script>alert('输入数据非法!');</script>");
	}
	
	$uid=nicktouid($username);
	if(empty($uid)){
		die("<script>alert('指定用户不存在!');</script>");
	}
	
	
	$ayfanhuanjine=$ayfanhuanjine;
	
	//条转换成金额
	$jiage= getuserjiage($uid);
	$ayfanhuanjine=$ayfanhuanjine*$jiage;
	
	
	$yueshu=$yueshu;
	$myfhje=0;
	if($ayfanhuanjine>0){
		$myfhje=number_format($ayfanhuanjine/$yueshu,2,".","");
	}
	$yffyueshu=0;
	$zjycfhtime=0;
	$myzdxfjine=$myzdxfjine;
	$createtime=time();
	
	
	$inarr=array(
		   "uid"=>$uid,
		   "ayfanhuanjine"=>$ayfanhuanjine,
		   "yueshu"=>$yueshu,
		   "myfhje"=>$myfhje,
		   "yffyueshu"=>$yffyueshu,
		   "zjycfhtime"=>$zjycfhtime,
		   "myzdxfjine"=>$myzdxfjine,
		   "createtime"=>$createtime
	);
	$tid=$con->insertabe("taocanlist",$inarr);
	
	die("<script>alert('绑定成功!');window.parent.location.href=window.parent.location.href;</script>");
	

}elseif($action=="settaocanbangding"){
	$id=intval($_POST["settaocanbangding_id"]);
	$myzdxfjine=floatval($_POST["settaocanbangding_myzdxfjine"]);
	if(empty($id)){
		die("<script>alert('异常!');</script>");
	}
	
	if($myzdxfjine<0){
		die("<script>alert('输入数据非法!');</script>");
	}
	
	$inarr=array(
				"myzdxfjine"=>$myzdxfjine
	);
	$re=$con->updatetabe("taocanlist",$inarr,$id,"id");
	
	
	die("<script>alert('操作成功!');window.parent.location.href=window.parent.location.href;</script>");
	

}elseif($action=="addhzdwjc"){
	$wjclist=trim($_POST["wjclist"]);
	$wjclist= preg_split('/\n|,| /', $wjclist, -1, PREG_SPLIT_NO_EMPTY);
	$wjcarr=array();
	foreach($wjclist as $value){
		$wjc=trim($value);
		if(!empty($wjc)){
			$wjcarr[]=$wjc;
		}
	}
	
	if(empty($wjcarr)){
		die("<script>alert('违禁词不能为空！');</script>");
	}
	
	$con->query("BEGIN");
	foreach($wjcarr as $wjc){
		$inarr=array(
			"wjc"=>$wjc
		);
		$con->insertabe("hzd",$inarr);
	}
	$con->query("COMMIT");
	die("<script>alert('添加成功!');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delhzdwjc"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('非法请求!');</script>");
	}
	$sql="DELETE FROM hzd WHERE id = ".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="delmianshenuser"){
	$uid=trim($_GET["uid"]);
	if(empty($uid)){
		die("<script>alert('非法请求!');</script>");
	}
	$sql="DELETE FROM mianshenuser WHERE uid = ".$uid;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="settongdaozt"){
	$id=trim($_GET["id"]);
	$zt=intval($_GET["zt"]);
	if(empty($id)){
		die("<script>alert('非法请求!');</script>");
	}
	if(!empty($zt)){
		$zt=1;
	}
	
	$inarr=array(
				"zt"=>$zt
	);
	$re=$con->updatetabe("tongdaolist",$inarr,$id,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="settongdaobeizhu"){
	$tongdaobeizhu=trim($_POST["tongdaobeizhu"]);
	$tongdaoid=intval($_POST["tongdaoid"]);
	if(empty($tongdaoid) || empty($tongdaobeizhu)){
		die("<script>alert('备注不能为空!');</script>");
	}
	$inarr=array(
				"beizhu"=>$tongdaobeizhu
	);
	$re=$con->updatetabe("tongdaolist",$inarr,$tongdaoid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="settongdaotitle"){
	$title=trim($_GET["title"]);
	$tongdaoid=intval($_GET["tongdaoid"]);
	if(empty($tongdaoid) || empty($title)){
		die("<script>alert('名称不能为空!');</script>");
	}
	$inarr=array(
				"title"=>$title
	);
	$re=$con->updatetabe("tongdaolist",$inarr,$tongdaoid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="settongzhitempbeizhu"){
	$tongzhitempbeizhu=trim($_POST["tongzhitempbeizhu"]);
	$tongzhitempid=trim($_POST["tongzhitempid"]);
	if(empty($tongzhitempbeizhu) || empty($tongzhitempid)){
		die("<script>alert('备注不能为空!');</script>");
	}
	
	$sql="update `tongzhitemp` set nei='".$tongzhitempbeizhu."' where configname='".$tongzhitempid."'";
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setyuetixing"){
	$yue=floatval($_POST["yue"]);
	$shybcz=intval($_POST["shybcz"]);
	$mytxyc=intval($_POST["mytxyc"]);
	$nei=trim($_POST["nei"]);
	$submitname=trim($_POST["submitname"]);
	
	if(empty($nei)|| empty($yue)){
		die("<script>alert('内容或余额不能为空!');</script>");
	}
	
	
	$sql="select * from `yuetixing`";
	$re=$con->query($sql);
	$yuetixinginfo=mysql_fetch_array($re);
	if(empty($yuetixinginfo)){
		$inarr=array(
			"nei"=>"123"
		);
		$id=$con->insertabe("yuetixing",$inarr);
	}
/*
	$inarr=array(
		"yue"=>$yue,
		"shybcz"=>$shybcz,
		"mytxyc"=>$mytxyc,
		"nei"=>$nei
	);
	cs($inarr);
	if(empty($yuetixinginfo)){
		$id=$con->insertabe("yuetixing",$inarr);
	}else{
		$re=$con->updatetabe("yuetixing",$inarr,$yuetixinginfo["zt"],"zt");
	}
	cs($_POST);
	*/
	
	$zt=0;
	if($submitname=="保存并开启"){
		$zt=1;
	}
	$sql="update `yuetixing` set zt=".$zt.",yue=".$yue.",shybcz=".$shybcz.",mytxyc=".$mytxyc.",nei='".$nei."'";
	$re=$con->query($sql);

die("<script>window.parent.location.href=window.parent.location.href;</script>");

}elseif($action=="setkefuqx"){
	$qx_mbgl=intval($_POST["qx_mbgl"]);
	$qx_ddgl=intval($_POST["qx_ddgl"]);
	$qx_cwgl=intval($_POST["qx_cwgl"]);
	$qx_dlsgl=intval($_POST["qx_dlsgl"]);
	$qx_lltdgl=intval($_POST["qx_lltdgl"]);
	$kefuid=intval($_POST["kefuid"]);
	if(empty($kefuid)){
		die("<script>alert('非法操作!');</script>");
	}
	
	$sql="update `user_kefu` set qx_mbgl=".$qx_mbgl.",qx_ddgl=".$qx_ddgl.",qx_cwgl=".$qx_cwgl.",qx_dlsgl=".$qx_dlsgl.",qx_lltdgl=".$qx_lltdgl." where id=".$kefuid;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="addmsuser"){
	$mianshennick=trim($_POST["mianshennick"]);
	if(empty($mianshennick)){
		die("<script>alert('非法操作!');</script>");
	}
	
	$uid=nicktouid($mianshennick);
	if(empty($uid)){
		die("<script>alert('指定用户不存在!');</script>");
	}
	
	$sql="select count(*) as num from `mianshenuser` where uid=".$uid;
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//总条数
	if($ztiao>0){
		die("<script>alert('请勿重复添加!');</script>");
	}
	
	
	$inarr=array(
			"uid"=>$uid,
			"createtime"=>time()
	);
	$con->insertabe("mianshenuser",$inarr);

	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delyouhui"){
	$id=trim($_GET["id"]);;
	$sql="DELETE FROM youhuimsg WHERE id = ".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="addyouhui"){
	$yhname=trim($_POST["yhname"]);
	$tjtype=intval($_POST["tjtype"]);
	$tj1=trim($_POST["tj1"]);
	$tj2=trim($_POST["tj2"]);
	$tj3=trim($_POST["tj3"]);
	$tj4=trim($_POST["tj4"]);
	$msg=trim($_POST["msg"]);
	
	$id=trim($_POST["id"]);
	if(empty($yhname)){
		die("<script>alert('名字不能为空!');</script>");
	}
	if(empty($msg)){
		die("<script>alert('内容不能为空!');</script>");
	}
	$inarr=array(
			"yhname"=>$yhname,
			"tjtype"=>$tjtype,
			"tj1"=>$tj1,
			"tj2"=>$tj2,
			"tj3"=>$tj3,
			"tj4"=>$tj4,
			"msg"=>$msg,
			"createtime"=>time()
	);
	if(empty($id)){
		$con->insertabe("youhuimsg",$inarr);
	}else{
		$re=$con->updatetabe("youhuimsg",$inarr,$id,"id");
	}
die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="sethmgsyz"){
	$hmgs=intval($_POST["hmgs"]);
	$sql="update `configdb` set congigvalue='".$hmgs."' where configkey='jishensendnum'";
	$re=$con->query($sql);

	die("<script>window.parent.location.href=window.parent.location.href;</script>");

}elseif($action=="deluser"){
	$id=trim($_GET["id"]);;
	$sql="DELETE FROM `user` WHERE id = ".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="deltemp"){
	$id=trim($_GET["id"]);
	$sql="DELETE FROM `jiekou_temp` WHERE id = ".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="settongdaoqtinfo"){
	$qt_qtshow=intval($_POST["qt_qtshow"]);
	$qt_jkyzmtd=intval($_POST["qt_jkyzmtd"]);
	$qt_jktd=intval($_POST["qt_jktd"]);
	$tongdaoid=intval($_POST["id"]);
	if(empty($tongdaoid)){
		die("<script>alert('非法请求!');</script>");
	}
	$inarr=array(
				"qt_qtshow"=>$qt_qtshow,
				"qt_jkyzmtd"=>$qt_jkyzmtd,
				"qt_jktd"=>$qt_jktd
	);
	$re=$con->updatetabe("tongdaolist",$inarr,$tongdaoid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="settongdaoguizhe"){
	$guizhe=trim($_POST["guizhe"]);
	$tongdaoid=intval($_POST["id"]);
	if(empty($tongdaoid)){
		die("<script>alert('非法请求!');</script>");
	}
	$inarr=array(
				"guizhe"=>$guizhe
	);
	$re=$con->updatetabe("tongdaolist",$inarr,$tongdaoid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="deltongdaoqianming"){
	$id=trim($_GET["id"]);;
	$sql="DELETE FROM `tongdaoqianminglist` WHERE id = ".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="settongdaoqianming"){
	$qianming=trim($_POST["qianming"]);
	$tongdaoid=intval($_POST["tongdaoid"]);
	if(empty($tongdaoid) || empty($qianming)){
		die("<script>alert('非法请求!');</script>");
	}
	
	$inarr=array(
			"tongdaoid"=>$tongdaoid,
			"qianming"=>$qianming,
			"createtime"=>time()
	);
	$con->insertabe("tongdaoqianminglist",$inarr);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setmianshenusertype"){
	$usertype_wzms=intval($_POST["usertype_wzms"]);
	$usertype_jkms=intval($_POST["usertype_jkms"]);
	$usertype_nbzh=intval($_POST["usertype_nbzh"]);
	$usertype_userid=trim($_POST["usertype_userid"]);
	if(empty($usertype_userid)){
		die("<script>alert('非法请求!');</script>");
	}
	$inarr=array(
				"wzms"=>$usertype_wzms,
				"jkms"=>$usertype_jkms,
				"nbzh"=>$usertype_nbzh
	);
	$re=$con->updatetabe("mianshenuser",$inarr,$usertype_userid,"uid");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setmianshenusertongdao"){
	$uid=trim($_GET["uid"]);
	$settongdaoid=intval($_GET["settongdaoid"]);
	if(empty($uid)){
		die("<script>alert('非法请求!');</script>");
	}
	
	$inarr=array(
				"tongdaoid"=>$settongdaoid
	);
	$re=$con->updatetabe("mianshenuser",$inarr,$uid,"uid");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}









?>