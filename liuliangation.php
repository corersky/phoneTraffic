<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	//require_once("source/liuliangfunction.php");
	require_once("liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}



if($action=="addliuliang"){
	$sjh=trim($_GET["sjh"]);
	$liuliang=trim($_GET["liuliang"]);
	$sjhtype=intval($_GET["sjhtype"]);
	if(empty($sjh) || empty($liuliang)){
		liuliangerr("操作失败！");
	}
	if(!is_numeric($sjh)){
		liuliangerr("操作失败！");
	}
	$uid=$_SESSION["uid"];
	$sql="select * from `user` where id=".$_SESSION["uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$jiage=floatval($userinfo["jiage"]);//每条短信的价格
	if($jiage<=0){
		liuliangerr("用户信息错误！");
	}
	
	
	
	
	$tongdaoid="";
	if(empty($sjhtype)){
		//处理移动
		$sql="select * from `configdb` where configkey='liuliangtdyd'";
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}elseif($sjhtype==1){
		//联通处理
		$sql="select * from `configdb` where configkey='liuliangtdlt'";
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}elseif($sjhtype==2){
		//电信处理
		$sql="select * from `configdb` where configkey='liuliangtddx'";
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}
	
	if(empty($tongdaoid)){
		liuliangerr("获取通道失败！");
	}
	$functionname="liuliang_tongdaoation_".$tongdaoid;
	if(!function_exists($functionname)){
		liuliangerr("获取发送通道程序失败！");
	}
	$err="";
	$a=$functionname($_SESSION["uid"],$sjh,$liuliang,$err);
	if(empty($a)){
		liuliangerr($err);
	}
	
	die("<script>window.parent.location.href='".XZKJURL."/user.php?action=liuliangchongzhilog';</script>");
	
	
}






function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/user.php?action=liuliangchongzhi';</script>");
}
?>