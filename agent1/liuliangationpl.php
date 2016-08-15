<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}



if($action=="addliuliangpl"){
	$sjh=trim($_POST["sjh"]);
	$liuliang0=trim($_POST["liuliang0"]);
	$liuliang1=intval($_POST["liuliang1"]);
	$liuliang2=intval($_POST["liuliang2"]);

	if(empty($sjh)){
		liuliangerr("操作失败！");
	}
	
	$pieces= preg_split('/\n|,| /', $sjh, -1, PREG_SPLIT_NO_EMPTY);
	$txlarr=array();
	foreach($pieces as $value){
		$sjh=trim($value);
		if((strlen($sjh)==11) && is_numeric($sjh)){
			$txlarr[]=$sjh;
		}
	}
	
	if(empty($txlarr)){
		liuliangerr("请按照规则输入手机号！");
	}


	
	$sql="select * from `user_daili` where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
		
	$tongdaoid=0;
	if((!empty($userinfo["lltdbdyd"])) || (!empty($userinfo["lltdbdlt"])) || (!empty($userinfo["lltdbddx"]))){
			$tongdaoid=$userinfo["lltdbdyd"];//默认移动
			if($sjhtype==1){
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
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}
	if(empty($tongdaoid)){
		liuliangerr("获取通道失败！");
	}
	
	
	
	$functionname="liuliang_tongdaoation_".$tongdaoid;
	if(!function_exists($functionname)){
		liuliangerr("获取发送通道程序失败！");
	}
	
	
	
	$errsjharr=array();
	$errnum=0;
	foreach($txlarr as $sjh){
		
		$hd=substr($sjh,0,4);
		$sjhtype=getsjhdgs($hd);
		
		$liuliang=$liuliang0;
		if($sjhtype==1){
			$liuliang=$liuliang1;
		}elseif($sjhtype==2){
			$liuliang=$liuliang2;
		}
		
		$err="";
		$a=$functionname($_SESSION["dl_uid"],$sjh,$liuliang,$err);
		if(empty($a)){
			$errsjharr[]=$sjh;
			$errnum++;
		}
	}
	$errmsg="批量充值成功";
	if($errnum>0){
		$errmsg="批量充值成功,其中 ".$errnum." 个号码提交失败!";
	}
	
	die("<script>alert('".$errmsg."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhipl';</script>");
}
?>