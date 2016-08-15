<?
$sql="select * from `yuetixing`";
$re=$con->query($sql);
$yuetixinginfo=mysql_fetch_array($re);


include template('yuetixing');
?>