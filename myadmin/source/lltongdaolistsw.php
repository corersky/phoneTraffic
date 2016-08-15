<?
$wherestr=" where isbdtd=1";
$sf=trim($_GET["sf"]);
if(!empty($sf)){
	$wherestr=$wherestr." and sheng='".$sf."'";
}

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `liuliangtongdaolist` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM liuliangtongdaolist ".$wherestr." ORDER BY sheng DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=lltongdaolistsw&sf=".$sf;
$fenarr=packagepag($url,$page,$zpage);

include template('lltongdaolistsw');
?>