<?
$sql="select * from `configdb` where configkey='jishensendnum'";
$re=$con->query($sql);
$row=mysql_fetch_array($re);

include template('jishensmsnumyz');
?>