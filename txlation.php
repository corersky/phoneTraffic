<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="settxlzu"){
	$zuname=trim($_POST["zuname"]);
	$beizhu=trim($_POST["beizhu"]);
	$zuid=trim($_POST["zuid"]);
	
	if(empty($zuname)){
		die("<script>alert('组名不能为空!');</script>");
	}
	

	$inarr=array(
		"uid"=>$_SESSION['uid'],
		"zuname"=>$zuname,
		"beizhu"=>$beizhu,
		"num"=>0,
		"createtime"=>time()
	);
	if(!empty($zuid)){
		$sql="select * from `txlzu` where id=".$zuid." and uid=".$_SESSION["uid"];
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		if(empty($row)){
			die("<script>alert('指定组不存在!');</script>");
		}
		
		$inarr=array(
			"zuname"=>$zuname,
			"beizhu"=>$beizhu,
		);
	}
	
	if(empty($zuid)){
		$id=$con->insertabe("txlzu",$inarr);
	}else{
		$re=$con->updatetabe("txlzu",$inarr,$zuid,"id");
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delzu"){
	$zuid=trim($_GET["zuid"]);
	if(empty($zuid)){
		die("<script>alert('非法请求!');</script>");
	}
	//开始删除
	$sql="DELETE FROM txluser where zuid=".$zuid." and uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	
	$sql="DELETE FROM txlzu where id=".$zuid." and uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delzuuser"){
	$userid=trim($_GET["userid"]);
	if(empty($userid)){
		die("<script>alert('非法请求!');</script>");
	}
	//开始删除
	$sql="DELETE FROM txluser where id=".$userid." and uid=".$_SESSION["uid"];
	$re=$con->query($sql);
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="settxlzuuserinfo"){
	$xm=trim($_POST["xm"]);
	$xb=intval($_POST["xb"]);
	$sjh=trim($_POST["sjh"]);
	$zuid=intval($_POST["zuid"]);
	$gongshi=trim($_POST["gongshi"]);
	$dizhi=trim($_POST["dizhi"]);
	$qq=trim($_POST["qq"]);
	$email=trim($_POST["email"]);
	$userid=trim($_POST["userid"]);
	$userbeizhu=$_POST["userbeizhu"];
	
	csw("1.txt","123:".$userid);

	if(empty($sjh)){
		die("<script>alert('手机号不能为空!');</script>");
	}
	$userbeizhu=filteremptyarr($userbeizhu);
	if(!empty($userbeizhu)){
		$userbeizhu=implode("`",$userbeizhu);
	}

	$inarr=array(
		"uid"=>$_SESSION['uid'],
		"zuid"=>$zuid,
		"xm"=>$xm,
		
		"xm"=>$xm,
		"xb"=>$xb,
		"sjh"=>$sjh,
		"gongshi"=>$gongshi,
		"dizhi"=>$dizhi,
		"qq"=>$qq,
		"email"=>$email,
		"qita"=>$userbeizhu
	);
	
	if(empty($userid)){
		$id=$con->insertabe("txluser",$inarr);
	}else{
		$re=$con->updatetabe("txluser",$inarr,$userid,"id");
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="moveusertozu"){
	$moveusertozuid=trim($_GET["moveusertozuid"]);
	$userids=trim($_GET["userids"]);
	
	$useridarr = explode(",", $userids);
	$useridarr=filteremptyarr($useridarr);
	if(empty($moveusertozuid) || empty($useridarr)){
		die("<script>alert('请选择要移动的用户!');</script>");
	}
	
	$useridstr=implode(",",$useridarr);
	$sql="UPDATE txluser set zuid=".$moveusertozuid." where uid=".$_SESSION["uid"]." and id in(".$useridstr.")";
	$re=$con->query($sql);
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}


?>