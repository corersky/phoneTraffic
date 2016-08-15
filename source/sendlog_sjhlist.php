<?
$tid=trim($_GET["tid"]);
if(empty($tid)){
	die("error!");
}
$wherestr=" tid=".$tid;

$sosozt=intval($_GET["sosozt"]);
$sososjh=trim($_GET["sososjh"]);
if(!empty($sososjh)){
	$wherestr=$wherestr." and sjh='".$sososjh."'";
}
if(!empty($sosozt)){
	$sozt=$sosozt;
	if($sosozt==4){
		$sozt=0;
	}
	$wherestr=$wherestr." and zt=".$sozt;
}


//查看活动是不是本人
$sql="select count(*) as num from `smsorders` where id=".$tid." and uid=".$_SESSION["uid"];
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$num=intval($row["num"]);//总条数
if($num<=0){
	die("error!");
}

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `smsordersinfo` where ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM smsordersinfo where ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$logarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	if(!empty($row["createtime"])){
		$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	}else{
		$row["createtime"]="";
	}
	$row["nick"]=sjhtoxingming($_SESSION["uid"],$row["sjh"]);
 	$logarr[]=$row;
}
$url=XZKJURL."/user.php?action=sendlog_sjhlist&sosozt=".$sosozt."&sososjh=".$sososjh."&tid=".$tid;
$fenarr=packagepag($url,$page,$zpage);
include template('sendlog_sjhlist');
?>