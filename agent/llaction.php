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



if($action=="ordercx"){
	$id=trim($_GET["id"]);
	
	if(empty($id)){
		liuliangerr("非法请求！");
	}
	if(!is_numeric($id)){
		liuliangerr("非法请求！");
	}
	
	//判断订单状态
	$sql="select * from `liuliangdaili_log` where uid=".$_SESSION["dl_uid"]." and id=".$id;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if($row["zt"]!=3){
		liuliangerr("非法请求！");
	}
	$shje=$row["shje"];
	
    $con->begin();
    
	//改状态退款
	$sql="update `liuliangdaili_log` set zt=2,apimsg='用户撤销',beizhu2='用户撤销',upzttime=".time()." where uid=".$_SESSION["dl_uid"]." and id=".$id;
	$re=$con->query($sql);
    if(!$re){
        $con->rollback();
        liuliangerr("更新退款信息失败!");
    }
	
	$uid=$_SESSION["dl_uid"];
	$sql="select cytkbz from `user_daili` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$cytkbz=intval($userinfo["cytkbz"]);
	if(!empty($cytkbz)){
		//更新返款状态
		$sql="UPDATE liuliangdaili_log set istk=1 where id=".$id;
		$re=$con->query($sql);
        if(!$re){
            $con->rollback();
            liuliangerr("更新是否退款标识失败!");
        }
		
		//返还金额
		$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
        if(!$re){
            $con->rollback();
            liuliangerr("返款失败!");
        }
	}	
    $con->commit();
	
	die("<script>window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}elseif($action=="ordertk"){
	$id=trim($_GET["id"]);
	
	if(empty($id)){
		liuliangerr("非法请求！");
	}
	if(!is_numeric($id)){
		liuliangerr("非法请求！");
	}
	//判断订单状态
	$sql="select * from `liuliangdaili_log` where uid=".$_SESSION["dl_uid"]." and id=".$id." and zt=0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		liuliangerr("订单状态错误！");
	}
	
	$time=$row["createtime"]+60*60*48;
	$nowtime=time();
	if($time>$nowtime){
		liuliangerr("超过48小时还未返回状态的订单才可以退款！");
	}
    
    $con->begin();
    
	$shje=$row["shje"];
	//改状态退款
	$sql="update `liuliangdaili_log` set istk=1,istk72=1,beizhu2='超时退款' where uid=".$_SESSION["dl_uid"]." and id=".$id;
	$re=$con->query($sql);
    if(!$re){
        $con->rollback();
        liuliangerr("更新退款信息失败!!");
    }
	
	//返还金额
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);//更新用户余额
    if(!$re){
        $con->rollback();
        liuliangerr("返款失败!");
    }
	$con->commit();
	die("<script>window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
}
?>