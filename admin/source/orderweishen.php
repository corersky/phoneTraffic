<?
$wherestr=" where zt=0";

//获取所属客服id
$kefuid=empty($_GET["kefuid"])?0:trim($_GET["kefuid"]);
if(!empty($kefuid)){
	//获取所有用户
	$sql="SELECT id FROM user where kefuid=".$kefuid;
	$re=$con->query($sql);
	$useridarr=array(0);
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$useridarr[]=$row["id"];
	}
	$userids=implode(",",$useridarr);
	
	$wherestr.=" and uid in (".$userids.") ";
}

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

//获取所有通道
$sql="SELECT * FROM tongdaolist";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$tongdaoarr[$row["id"]]=$row;
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
	$row["tongdaoname"]=$tongdaoarr[$row["tongdaoid"]]["title"];
	$row["tongdaoguizhe"]=$tongdaoarr[$row["tongdaoid"]]["guizhe"];
	$row["nei"]=addcslashes($row["nei"],'\\');
	$row["nei"] = str_replace(array("\r\n","\r","\n"), '',$row["nei"]);
 	$orderarr[]=$row;
}
$url=XZKJURL."/index.php?action=orderweishen&nick=".$nick;
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