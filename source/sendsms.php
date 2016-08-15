<?
//获取可用通道
$sql="select * from `tongdaolist` where zt=1 and qt_qtshow=1";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re)){
	$tongdaoarr[$row["id"]]=$row;
}




include template('sendsms');
?>