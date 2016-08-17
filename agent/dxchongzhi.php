<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
	//die("暂未开放!");
if($action=="smsnumchongzhi"){
	$pic=floatval($_POST["chongzhipic"]);
	
	if($pic<500){
		die("充值金额不能小于500元!");
	}
	
	$tid=time().rand(1000,9999);
	$inactiv=array(
			'uid' =>$_SESSION["dl_uid"],
			'tid'=>$tid, 
			'jine'=>$pic, 
			'shje'=>$pic, 
			'cztype'=>2,
			'czuid'=>-1,
			'zt' =>0, 
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhidaililog",$inactiv);
	if(empty($id)){
	 	die("创建订单失败！");
	}
	die("<script>window.parent.location.href='".XZKJURL."/zfbjsdz/alipayapi.php?tid=".$tid."&inprinc=".$pic."';</script>");
}elseif($action=="resendchongzhi"){
	$tid=intval($_GET["tid"]);
	if(empty($tid)){
	 die("非法请求！");
	}
	$sql="select * from `chongzhidaililog` where id=".$tid." and uid=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
	 die("指定订单不存在！");
	}
	$tid=$row["tid"];
	$pic=$row["jine"];
	$pic = number_format($pic,2,'.', '');
	die("<script>window.parent.location.href='".XZKJURL."/zfbjsdz/alipayapi.php?tid=".$tid."&inprinc=".$pic."';</script>");

}
?>
