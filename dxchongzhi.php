<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="smsnumchongzhi"){
	$pic=floatval($_POST["chongzhipic"]);
	
	if($pic<300){
		die("充值条数非法!");
	}
	
	//$jiage= getuserjiage($_SESSION["uid"]);
	//$pic=$pic*$jiage;

	
	
	$tid=date("YmdHis").rand(10,99);
	$inactiv=array(
			'uid' =>$_SESSION["uid"],
			'tid'=>$tid, 
			'jine'=>$pic, 
			'shje'=>$pic, 
			'cztype' =>0,
			'zt' =>0, 
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhilog",$inactiv);
	if(empty($id)){
	 	die("创建订单失败！");
	}
	die("<script>window.parent.location.href='".XZKJURL."/zfbjsdz/alipayapi.php?tid=".$tid."&inprinc=".$pic."';</script>");
}
?>
