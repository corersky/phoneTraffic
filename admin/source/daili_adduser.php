<?

$sql="SELECT id,username FROM user_daili";
$re=$con->query($sql);
$dailiuserarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$dailiuserarr[]=$row;
}


//��ȡ����רԱ�б�
$sql="SELECT id,username FROM user_yingxiao";
$re=$con->query($sql);
$yingxiaozyarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$yingxiaozyarr[$row["id"]]=$row["username"];
}

include template('daili_adduser');
?>