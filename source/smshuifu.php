<?
$createtime=time()-60*60*90;
$wherestr="";
$sosostime=trim($_GET["sosostime"]);
$sosoetime=trim($_GET["sosoetime"]);
if(!empty($sosostime)){
	$sotime=strtotime($sosostime);
	$wherestr=$wherestr." and createtime>".$sotime;
}
if(!empty($sosoetime)){
	$sotime=strtotime($sosoetime);
	$wherestr=$wherestr." and createtime<".$sotime;
}

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `smshuifu` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM smshuifu where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$logarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["xingming"]=sjhtoxingming($_SESSION["uid"],$row["sjh"]);
	
 	$logarr[]=$row;
}
$url=XZKJURL."/user.php?action=smshuifu&sosostime=".$sosostime."&sosoetime=".$sosoetime;
$fenarr=packagepag($url,$page,$zpage);
include template('smshuifu');
?>