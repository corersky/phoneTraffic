<?
$createtime=time()-60*60*24*90;
$wherestr=" and createtime>".$createtime;
$sosozt=intval($_GET["sosozt"]);
$sososjh=trim($_GET["sososjh"]);

if(!empty($sososjh)){
	$wherestr=$wherestr." and sjh='".$sososjh."'";
}

if(!empty($sosozt)){
	$wherestr=$wherestr." and zt=".$sosozt;
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `liuliang_log` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$ztarr=array(0=>"提交成功",1=>"开通成功",2=>"开通失败");
$sql="SELECT * FROM liuliang_log where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$logarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["ztstr"]=$ztarr[$row["zt"]];
 	$logarr[]=$row;
}
$url=XZKJURL."/user.php?action=liuliangchongzhilog&sosozt=".$sosozt."&sososjh=".$sososjh;
$fenarr=packagepag($url,$page,$zpage);

include template('liuliangchongzhilog');
?>