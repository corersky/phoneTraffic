<?
$wherestr=" where uid=".$_SESSION["dl_uid"];

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `daili_zhangdanlog` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$sql="SELECT * FROM daili_zhangdanlog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$logarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$logarr[]=$row;
}
$url=XZKJURL."/index.php?action=jianglijiesuan";
$fenarr=packagepag($url,$page,$zpage);

include template('jianglijiesuan');
?>