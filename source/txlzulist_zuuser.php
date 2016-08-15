<?
$wherestr="";
$sosozuid=trim($_GET["sosozuid"]);
$sosozsjh=trim($_GET["sosozsjh"]);

if(empty($sosozuid)){
	die("非法请求！");
}
$wherestr.=" and zuid=".$sosozuid;

if(!empty($sosozsjh)){
	$wherestr.=" and sjh='".$sosozsjh."'";
}



$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `txluser` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM txluser where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$zuuserarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["beizhumsg"]=bai_substr($beizhu,10);
 	$zuuserarr[]=$row;
}

$url=XZKJURL."/user.php?action=txlzulist_zuuser&sosozuid=".$sosozuid."&sosozsjh=".$sosozsjh;
$fenarr=packagepag($url,$page,$zpage);

//获取用户所有组
$sql="SELECT id,zuname FROM txlzu where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$zuarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$zuarr[$row["id"]]=$row["zuname"];
}

include template('txlzulist_zuuser');
?>