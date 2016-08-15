<?
$_SESSION=array();

$nowtime=time();
if(!empty($_POST["yzm"])){
	$username=trim($_POST["username"]);
	$userpwd=trim($_POST["pwd"]);
	$yzm=trim($_POST["yzm"]);
	
	if(empty($yzm)){
		die("<script>alert('请刷新页面后重新提交!');window.parent.location.href=window.parent.location.href;</script>");
	}
	$yzm=authcodej($yzm);
	if(($yzm+100)<$nowtime){
		die("<script>alert('请刷新页面后重新提交!');window.parent.location.href=window.parent.location.href;</script>");
	}
	if(empty($username) || empty($userpwd)){
		die("<script>alert('用户名密码不能为空!');</script>");
	}
	
	$sql="select * from `user_kefu` where username='".$username."' and pwd='".$userpwd."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		die("<script>alert('用户名或密码错误!');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	if(!empty($row["id"])){
		$ip= GetIP();
		$sql="UPDATE user_kefu set zhdltime=".$nowtime.",zhdlip='".$ip."' where id=".$row["id"];
		$re=$con->query($sql);
		
		
		
		$_SESSION["kefu_uid"]=intval($row["id"]);
		$_SESSION["kefu_username"]=trim($row["username"]);
		$_SESSION["kefu_zhdltime"]=date("Y-m-d H:i:s",$row["zhdltime"]);
		$_SESSION["kefu_zhdlip"]=trim($row["zhdlip"]);
		
		$_SESSION["kefu_qx_mbgl"]=trim($row["qx_mbgl"]);
		$_SESSION["kefu_qx_ddgl"]=trim($row["qx_ddgl"]);
		$_SESSION["kefu_qx_cwgl"]=trim($row["qx_cwgl"]);
		$_SESSION["kefu_qx_dlsgl"]=trim($row["qx_dlsgl"]);
		$_SESSION["kefu_qx_lltdgl"]=trim($row["qx_lltdgl"]);
		die("<script>window.parent.location.href='".XZKJURL."/index.php?action=index';</script>");
	}
	
}

$yzm=authcode($nowtime);
include template('login');
?>