<?
//��ȡ�ӿ��û���Ϣ
$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$jiekouuserinfo=mysql_fetch_array($re);

include template('jiekoushenqing');
?>