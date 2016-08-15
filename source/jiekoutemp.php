<?
$wherestr="";
$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `jiekou_temp` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM jiekou_temp where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$temparr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	//$row["temp"]=bai_substr($row["temp"],10);
	$row["tempnei"] = preg_replace("/【(.*?)】/s", "", $row["temp"]);
	$row["tempqm"] = preg_replace("/(.*?)【(.*?)】(.*?)/s", "【\\2】", $row["temp"]);
	
 	$temparr[]=$row;
}

$url=XZKJURL."/user.php?action=jiekoutemp";
$fenarr=packagepag($url,$page,$zpage);


$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$jiekouuserinfo=mysql_fetch_array($re);
if($jiekouuserinfo["zt"]!=1){
		die("<script>alert('请先开通接口用户!');window.parent.location.href='".XZKJURL."/user.php?action=jiekoushenqing';</script>");
}


include template('jiekoutemp');
?>