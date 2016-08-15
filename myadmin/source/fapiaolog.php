<?
if(empty($_SESSION["kefu_qx_cwgl"])){
	die("非法请求，你没有权限操作此功能!");
}
//获取所属客服id
$kefuid=$_SESSION["kefu_uid"];

//获取所有接口用户
$sql="SELECT id FROM user where kefuid=".$kefuid;
$re=$con->query($sql);
$useridarr=array(0);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$useridarr[]=$row["id"];
}
$userids=implode(",",$useridarr);

$wherestr=" where fapiao_log.uid in (".$userids.")";


$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$uid=nicktouid($nick);
	if(!empty($uid)){
		$wherestr=$wherestr." and fapiao_log.uid=".$uid;
	}
}

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from fapiao_log LEFT JOIN fapiao_userinfo ON fapiao_log.uid=fapiao_userinfo.uid  ".$wherestr;
//echo $sql;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT fapiao_log.*,fapiao_userinfo.lxrxm,fapiao_userinfo.shdz,fapiao_userinfo.xlrsjh FROM fapiao_log	LEFT JOIN fapiao_userinfo ON fapiao_log.uid=fapiao_userinfo.uid ".$wherestr." ORDER BY fapiao_log.id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["nick"]=uidtonick($row["uid"]);
	$row["shdzmsg"]=bai_substr($row["shdz"],6);
 	$orderarr[]=$row;
}
$url=XZKJURL."/index.php?action=fapiaolog&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);


include template('fapiaolog');
?>