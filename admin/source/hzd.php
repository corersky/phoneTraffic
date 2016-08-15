<?
$wherestr="";
$wjc=trim($_GET["wjc"]);
if(!empty($wjc)){
	$wherestr=$wherestr." where wjc='".$wjc."'";
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `hzd` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM hzd ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$hzdarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$hzdarr[]=$row;
}
$url=XZKJURL."/index.php?action=hzd&wjc=".$wjc;
$fenarr=packagepag($url,$page,$zpage);

include template('hzd');
?>