<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="syfapiao"){
	$syjine=floatval($_POST["syjine"]);
	$fpgongshi=trim($_POST["fpgongshi"]);
	
	if(empty($syjine) || empty($fpgongshi)){
		die("<script>alert('信息不完整!');</script>");
	}
	
	//获取用户收取发票地址
	$sql="select * from `fapiao_userinfo` where uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	$fapiaouserinfo=mysql_fetch_array($re);
	
	if(empty($fapiaouserinfo["lxrxm"]) || empty($fapiaouserinfo["xlrsjh"]) || empty($fapiaouserinfo["shdz"])){
		die("<script>alert('领取失败，请先填写寄送地址!');</script>");
	}
	
	
	//获取累计充值金额
	//$zjine=getusercznum($_SESSION["uid"]);
	$sql="select SUM(shje) as num from `chongzhilog` where uid=".$_SESSION["uid"]." and zt=1 and cztype in(0,1,2)";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zjine=floatval($row["num"]);//总充值金额
	
	//已领取发票金额
	$sql="select SUM(jine) as num from `fapiao_log` where uid=".$_SESSION["uid"]." and zt !=2";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$ylqjine=floatval($row["num"]);//已领取发票金额
	
	if(($ylqjine+$syjine)>$zjine){
		die("<script>alert('领取失败，总共领取金额不得大于累计充值金额!');</script>");
	}
	
	



	$inarr=array(
		"uid"=>$_SESSION['uid'],
		"jine"=>$syjine,
		"gongshimingc"=>$fpgongshi,
		"zt"=>0,
		"createtime"=>time()
	);
	$id=$con->insertabe("fapiao_log",$inarr);

	die("<script>alert('领取成功！');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setfapiaouserinfo"){
	$lxrxm=trim($_POST["lxrxm"]);
	$xlrsjh=trim($_POST["xlrsjh"]);
	$shdz=trim($_POST["shdz"]);
	
	if(empty($lxrxm) || empty($xlrsjh) || empty($shdz)){
		die("<script>alert('信息不完整!');</script>");
	}
	
	//获取用户收取发票地址
	$sql="select * from `fapiao_userinfo` where uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	$fapiaouserinfo=mysql_fetch_array($re);
	
	

	$inarr=array(
		"uid"=>$_SESSION['uid'],
		"lxrxm"=>$lxrxm,
		"xlrsjh"=>$xlrsjh,
		"shdz"=>$shdz
	);
	if(empty($fapiaouserinfo)){
		$id=$con->insertabe("fapiao_userinfo",$inarr);
	}else{
		$re=$con->updatetabe("fapiao_userinfo",$inarr,$fapiaouserinfo["id"],"id");
	}
	die("<script>alert('保存成功！');window.parent.location.href=window.parent.location.href;</script>");
}


?>