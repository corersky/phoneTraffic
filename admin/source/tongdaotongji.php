<?
$wherestr="";
$nowtime=time();
$stime=empty($_GET["stime"])?date("Y-m-d H:i:s",$nowtime-60*60*24*30):trim($_GET["stime"]);
$etime=empty($_GET["etime"])?date("Y-m-d H:i:s",$nowtime):trim($_GET["etime"]);

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `tongdaolist` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$sql="SELECT * FROM tongdaolist ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["tongjinum"]=gettongdaosendnum($row["id"],$stime,$etime);
	$row["tongjijine"]=gettongdaosendjine($row["id"],$stime,$etime);
 	$tongdaoarr[]=$row;
}
$url=XZKJURL."/index.php?action=tongdaotongji&stime=".$stime."&etime=".$etime;
$fenarr=packagepag($url,$page,$zpage);


include template('tongdaotongji');


function gettongdaosendnum($tongdaoid,$stime,$etime){
	global $con;
	if(empty($tongdaoid)){
		return false;
	}
	$stime=strtotime($stime);
	$etime=strtotime($etime);
	
	
	$sql="select SUM(num) as num from `smsorders` where createtime>=".$stime." and createtime<=".$etime." and tongdaoid=".$tongdaoid." and zt in(1,3)";
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//总条数
	return $ztiao;
}


function gettongdaosendjine($tongdaoid,$stime,$etime){
	global $con;
	if(empty($tongdaoid)){
		return false;
	}
	$stime=strtotime($stime);
	$etime=strtotime($etime);
	
	
	$sql="select SUM(kfje) as num from `smsorders` where createtime>=".$stime." and createtime<=".$etime." and tongdaoid=".$tongdaoid." and zt in(1,3)";
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=floatval($zage["num"]);//总条数
	return $ztiao;
}
?>