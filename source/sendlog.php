<?
$createtime=time()-60*60*24*90;
$wherestr=" and createtime>".$createtime;
$sosozt=intval($_GET["sosozt"]);
$sosotime=trim($_GET["sosotime"]);
if(!empty($sosotime)){
	$sotime=strtotime($sosotime);
	$wherestr=$wherestr." and createtime>".$sotime;
}
if(!empty($sosozt)){
	$sozt=$sosozt;
	if($sosozt==4){
		$sozt=0;
	}
	$wherestr=$wherestr." and zt=".$sozt;
}

//获取所有通道
$sql="SELECT * FROM tongdaolist";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$tongdaoarr[$row["id"]]=$row["title"];
}




$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `smsorders` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM smsorders where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$logarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["dssendtimestr"]=date("Y-m-d H:i:s",$row["dssendtime"]);
	$row["neimsg"]=bai_substr($row["nei"],8);
	$row["tongdaoname"]=$tongdaoarr[$row["tongdaoid"]];
	$row["nei"]=addcslashes($row["nei"],'\\');
	$row["nei"] = str_replace(array("\r\n","\r","\n"), '',$row["nei"]);
 	$logarr[]=$row;
}
$url=XZKJURL."/user.php?action=sendlog&sosozt=".$sosozt."&sosotime=".$sosotime;
$fenarr=packagepag($url,$page,$zpage);
include template('sendlog');
?>