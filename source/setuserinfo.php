<?
$sql="select * from `user` where id=".$_SESSION["uid"];
$re=$con->query($sql);
$userinfo=mysql_fetch_array($re);
$userinfo["createtime"]=date("Y-m-d H:i:s",$userinfo["createtime"]);
include template('setuserinfo');
?>