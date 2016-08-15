<?
if(empty($_SESSION["dl_qx_ddgl"])){
	die("非法请求，你没有权限操作此功能!");
}
//获取所属客服id
$kefuid=empty($_GET["kefuid"])?$_SESSION["dl_uid"]:trim($_GET["kefuid"]);

//获取所有接口用户
$sql="SELECT id FROM user where kefuid=".$kefuid;
$re=$con->query($sql);
$useridarr=array(0);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$useridarr[]=$row["id"];
}
$userids=implode(",",$useridarr);

$wherestr=" where uid in (".$userids.") and zt=0";

$nick=trim($_GET["nick"]);
if(!empty($nick)){
	if(!is_numeric($nick)){
		$uid=nicktouid($nick);
		if(!empty($uid)){
			$wherestr=$wherestr." and uid=".$uid;
		}
	}else{
			$wherestr=$wherestr." and id=".$nick;
	}
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `smsorders` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM smsorders ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["nick"]=uidtonick($row["uid"]);
	$row["neimsg"]=bai_substr($row["nei"],6);
 	$orderarr[]=$row;
}
$url=XZKJURL."/index.php?action=orderweishen&nick=".$nick."&kefuid=".$kefuid;
$fenarr=packagepag($url,$page,$zpage);


//获取所有专员列表
$sql="SELECT id,username FROM user_kefu";
$re=$con->query($sql);
$fuwuzyarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$fuwuzyarr[$row["id"]]=$row["username"];
}

include template('orderweishen');
?>