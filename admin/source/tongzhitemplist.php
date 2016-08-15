<?
$wherestr="";
$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `tongzhitemp` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$sql="SELECT * FROM tongzhitemp ".$wherestr." LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$tongzhitemparr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["neimsg"]=bai_substr($row["nei"],6);
 	$tongzhitemparr[]=$row;
}
$url=XZKJURL."/index.php?action=tongzhitemplist";
$fenarr=packagepag($url,$page,$zpage);


include template('tongzhitemplist');
?>