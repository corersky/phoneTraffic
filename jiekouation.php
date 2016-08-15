<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="setjiekouuserxm"){
	$xm=trim($_GET["xm"]);
	if(empty($xm)){
		die("<script>alert('姓名不能为空!');</script>");
	}
	

	
	$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	$jiekouuserinfo=mysql_fetch_array($re);

	if(empty($jiekouuserinfo)){
		$inarr=array(
			"uid"=>$_SESSION['uid'],
			"xm"=>$xm,
			"sjh"=>"",
			"zt"=>0,
			"createtime"=>time()
		);
		$id=$con->insertabe("user_jiekou",$inarr);
	}else{
			$inarr=array(
				"xm"=>$xm
			);
		$re=$con->updatetabe("user_jiekou",$inarr,$_SESSION['uid'],"uid");
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setjiekouusersjh"){
	$sjh=trim($_GET["sjh"]);
	if(empty($sjh)){
		die("<script>alert('手机号不能为空!');</script>");
	}
	if(!is_numeric($sjh) || (strlen($sjh)!=11)){
		die("<script>alert('请输入正确的手机号!');</script>");
	}
	

	
	$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	$jiekouuserinfo=mysql_fetch_array($re);

	if(empty($jiekouuserinfo)){
		$inarr=array(
			"uid"=>$_SESSION['uid'],
			"xm"=>"",
			"sjh"=>$sjh,
			"zt"=>0,
			"createtime"=>time()
		);
		$id=$con->insertabe("user_jiekou",$inarr);
	}else{
			$inarr=array(
				"sjh"=>$sjh
			);
		$re=$con->updatetabe("user_jiekou",$inarr,$_SESSION['uid'],"uid");
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setjiekouusershenqing"){
		
	$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	$jiekouuserinfo=mysql_fetch_array($re);
	
	if(empty($jiekouuserinfo["xm"]) || empty($jiekouuserinfo["sjh"])){
		die("<script>alert('请保存信息后，再提交申请。');</script>");
	}
	
	if($jiekouuserinfo["zt"]!=0){
		die("<script>alert('非法请求!');</script>");
	}
	
	$sql="UPDATE user_jiekou set zt=1 where uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setjiekoutemp"){
	$set_jiekoutemp=trim($_POST["set_jiekoutemp"]);
	$set_jiekoutemp_qm=trim($_POST["set_jiekoutemp_qm"]);
	$jiekoutempid=trim($_POST["jiekoutempid"]);

	if(empty($set_jiekoutemp)){
		die("<script>alert('内容不能为空!');</script>");
	}
	
	$set_jiekoutemp_qm=preg_replace("/【/s", "", $set_jiekoutemp_qm);
	$set_jiekoutemp_qm=preg_replace("/】/s", "", $set_jiekoutemp_qm);
	if(empty($set_jiekoutemp_qm)){
		$set_jiekoutemp_qm="【*****】";
	}
	
	$qmq=substr($set_jiekoutemp_qm,0,2);
	if($qmq !="【"){
			$set_jiekoutemp_qm="【".$set_jiekoutemp_qm."】";
	}
	
	$set_jiekoutemp=$set_jiekoutemp.$set_jiekoutemp_qm;
	if(!empty($jiekoutempid)){
		$sql="select * from `jiekou_temp` where id=".$jiekoutempid." and uid=".$_SESSION["uid"];
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		if(empty($row)){
			die("<script>alert('指定内容不存在!');</script>");
		}
		
		$inarr=array(
			"temp"=>$set_jiekoutemp,
			"zt"=>0
		);
		$re=$con->updatetabe("jiekou_temp",$inarr,$jiekoutempid,"id");
		
	}else{
		$inarr=array(
			"uid"=>$_SESSION["uid"],
			"temp"=>$set_jiekoutemp,
			"zt"=>0,
			"createtime"=>time()
		);
		$id=$con->insertabe("jiekou_temp",$inarr);
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="deljiekoutemp"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('内容不能为空!');</script>");
	}
	


	$sql="DELETE FROM jiekou_temp  where id=".$id." and uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}
?>