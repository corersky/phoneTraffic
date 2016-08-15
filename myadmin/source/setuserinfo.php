<?
$sql="select * from `user_kefu` where id=".$_SESSION["kefu_uid"];
$re=$con->query($sql);
$userinfo=mysql_fetch_array($re);
	
include template('setuserinfo');
?>