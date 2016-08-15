<?
$wherestr=" where zt in(1,2)";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$uid=nicktouid($nick);
	if(!empty($uid)){
		$wherestr=$wherestr." and uid=".$uid;
	}
}

$zt=trim($_GET["zt"]);
if(!empty($zt)){
	$wherestr=$wherestr." and zt=".$zt;
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `jiekou_temp` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM jiekou_temp ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["shenhetime"]=date("Y-m-d H:i:s",$row["shenhetime"]);
	$row["nick"]=uidtonick($row["uid"]);
	$row["temp"]=addcslashes($row["temp"],'\\');
	$row["temp"] = str_replace(array("\r\n","\r","\n"), '',$row["temp"]);
 	$userarr[]=$row;
}
//cs($userarr);
$url=XZKJURL."/index.php?action=templist&nick=".$nick."&zt=".$zt;
$fenarr=packagepag($url,$page,$zpage);

//获取所有专员列表
$sql="SELECT id,username FROM user_kefu";
$re=$con->query($sql);
$fuwuzyarr=array("0"=>"管理员");
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$fuwuzyarr[$row["id"]]=$row["username"];
}


include template('templist');
?>