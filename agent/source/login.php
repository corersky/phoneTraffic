<?
$_SESSION=array();

$nowtime=time();
if(!empty($_POST["yzm"])){
	$username=trim($_POST["username"]);
	$userpwd=trim($_POST["pwd"]);
	$yzm=trim($_POST["yzm"]);
	
	if(empty($yzm)){
		die("<script>alert('��ˢ��ҳ��������ύ!');window.parent.location.href=window.parent.location.href;</script>");
	}
	$yzm=authcodej($yzm);
	if(($yzm+100)<$nowtime){
		die("<script>alert('��ˢ��ҳ��������ύ!');window.parent.location.href=window.parent.location.href;</script>");
	}
	if(empty($username) || empty($userpwd)){
		die("<script>alert('�û������벻��Ϊ��!');</script>");
	}
	
	$sql="select * from `user_daili` where username='".$username."' and pwd='".$userpwd."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		die("<script>alert('�û������������!');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	if(!empty($row["id"])){
		$ip= GetIP();
		$sql="UPDATE user_daili set zhdltime=".$nowtime.",zhdlip='".$ip."' where id=".$row["id"];
		$re=$con->query($sql);
		
		
		
		$_SESSION["dl_uid"]=intval($row["id"]);
		$_SESSION["dl_username"]=trim($row["username"]);
		$_SESSION["dl_zhdltime"]=date("Y-m-d H:i:s",$row["zhdltime"]);
		$_SESSION["dl_zhdlip"]=trim($row["zhdlip"]);
		
		$_SESSION["dl_isdxuser"]=trim($row["isdxuser"]);
		$_SESSION["dl_islluser"]=trim($row["islluser"]);
		
		
		die("<script>window.parent.location.href='".XZKJURL."/index.php?action=index';</script>");
	}
	
}

$yzm=authcode($nowtime);
include template('login');
?>