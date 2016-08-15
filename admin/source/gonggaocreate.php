<?
$id=trim($_GET["id"]);
if(!is_numeric($id)){
	$id=0;
}
$gonggaoinfo=array();
if(!empty($id)){
	$sql="SELECT * FROM gonggaolist where id=".$id;
	$re=$con->query($sql);
	$gonggaoinfo=mysql_fetch_array($re,MYSQL_ASSOC);
}

include template('gonggaocreate');
?>