<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="setgonggaozt"){
	$zt=intval($_GET["zt"]);
	$id=trim($_GET["id"]);

	if(empty($id)){
		die("<script>alert('id����Ϊ��!');</script>");
	}
	
	$inarr=array(
			"isshow"=>$zt
		);
		$re=$con->updatetabe("gonggaolist",$inarr,$id,"id");

	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delgonggao"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('id����Ϊ��!');</script>");
	}
	$sql="DELETE FROM gonggaolist WHERE id =".$id;
$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="addgonggao"){
	$id=trim($_POST["id"]);
	$title=trim($_POST["title"]);
	$gonggaomsg=trim($_POST["gonggaomsg"]);
	
	$nowtime=time();
	$inarr=array(
		   "title"=>$title,
		   "gonggaomsg"=>$gonggaomsg,
		   "createtime"=>$nowtime
	);
	if(empty($id)){
		$tid=$con->insertabe("gonggaolist",$inarr);
	}else{
		$re=$con->updatetabe("gonggaolist",$inarr,$id,"id");
	}
	die("<script>window.parent.location.href='index.php?action=gonggaolist';</script>");
}






?>