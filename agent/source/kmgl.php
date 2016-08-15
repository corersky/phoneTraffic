<?

$wherestr=" where uid=".$_SESSION["dl_uid"];

$kazt=intval($_GET["kazt"]);
if(!empty($kazt)){
	if($kazt==1){
		$wherestr.=" and zt=0";
	}else{
		$wherestr.=" and zt>0";
	}
}

$czzt=intval($_GET["czzt"]);
if(!empty($czzt)){
	$wherestr.=" and zt=".$czzt;
}


$sjh=trim($_GET["sjh"]);
if(!empty($sjh)){
	$wherestr.=" and (sjh='".$sjh."' or id=".$sjh.")";
}

$llczztarr=array("0"=>"未激活","1"=>"充值成功","2"=>"充值失败","3"=>"充值中");
$sjhtypearr=array("0"=>"移动","1"=>"联通","2"=>"电信");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `ka_infos` ".$wherestr;

$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$sql="SELECT * FROM `ka_infos` ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$kaarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	if(!empty($row["jihuotime"])){
		$row["jihuotime"]=date("Y-m-d H:i:s",$row["jihuotime"]);
	}
	$row["kkmsg"]=gettkztmsg($row["tid"]);
 	$kaarr[]=$row;
}
$url=XZKJURL."/index.php?action=kmgl&kazt=".$kazt."&czzt=".$czzt."&sjh=".$sjh;
$fenarr=packagepag($url,$page,$zpage);

include template('kmgl');

function gettkztmsg($tid){
	global $con;
	if(empty($tid)){
		return "未激活";
	}
	$sql="select zt,istk from `liuliangdaili_log` where id=".$tid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		return "未激活";
	}
	$kkzt="";
	if($row['istk']==1){
		$kkzt="已返款";
	}else{
		if($row['zt']==2){
			$kkzt="等待返款";
		}else{
			$kkzt="已扣款";
		}
	}
	return $kkzt;
}

?>