<?
//获取最新公告
$sql="select * from `gonggaolist` where isshow=1 ORDER BY id DESC LIMIT 0,1";
$re=$con->query($sql);
$gonggaoinfo=mysql_fetch_array($re);

include template('llchongzhi');
?>