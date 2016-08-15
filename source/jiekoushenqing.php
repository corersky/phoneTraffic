<?
//获取接口用户信息
$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$jiekouuserinfo=mysql_fetch_array($re);

include template('jiekoushenqing');
?>