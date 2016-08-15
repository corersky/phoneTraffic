<?
$wherestr="";
$soso=trim($_GET["soso"]);

if(!empty($soso)){
	$wherestr=" and zuname LIKE '".$soso."'";
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `txlzu` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM txlzu where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$zuarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["beizhumsg"]=bai_substr($row["beizhu"],10);
	$row["num"]=updatetxlzunum($row["id"]);
 	$zuarr[]=$row;
}
$url=XZKJURL."/user.php?action=txlzulist&soso=".$soso;
$fenarr=packagepag($url,$page,$zpage);
include template('txlzulist');
?>