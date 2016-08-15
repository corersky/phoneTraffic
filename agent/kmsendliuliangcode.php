<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	$con=new MySql();
	
	$sjh=trim($_POST["sjh"]);
	$kahao=trim($_POST["kahao"]);
	$pwd=intval($_POST["pwd"]);
	$openid=trim($_POST["openid"]);

	
	
	if(empty($sjh) || empty($kahao)|| empty($pwd)){
		baierrmsg('填写信息不完整!',"0");
	}
	
	if((!is_numeric($kahao)) || (!is_numeric($pwd)) || (!is_numeric($sjh))){
		baierrmsg('账号密码错误!',"0");
	}
	if(empty($openid)){
		baierrmsg('来源错误!',"0");
	}
	
	
	$sql="select * from `ka_infos` where id=".$kahao." and pwd='".$pwd."' and uid>0";
	$re=$con->query($sql);
	$kainfo=mysql_fetch_array($re);
	if(empty($kainfo)){
		baierrmsg('账号密码错误!',"0");
	}
	if(!empty($kainfo["zt"])){
			baierrmsg('此卡已被使用!',"0");
	}
		
	$err="";
	$a=addliuliang_km($kahao,$sjh,$openid,$err);
	if(empty($a)){
		baierrmsg("充值失败:".$err,"0");
	}

	baierrmsg('提交成功!',"1");
	
function baierrmsg($msg,$code){
	$msg=urlencode($msg);
	if(!empty($code)){
		die("<script>window.parent.location.href='../weixin/msgshow.php?msg=".$msg."&code=".$code."';</script>");
	}
	die("<script>window.parent.location.href='../weixin/msgshowerr.php?msg=".$msg."&code=".$code."';</script>");
}
?>