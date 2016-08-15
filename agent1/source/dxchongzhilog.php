<?
$wherestr=" where zt=1";

$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$uid=nicktouid($nick);
	if(empty($uid)){
		$uid=0;
	}
	$wherestr=$wherestr." and uid=".$uid;
}


//获取所有下级用户
$sql="SELECT id FROM user where dlid=".$_SESSION["dl_uid"];
$re=$con->query($sql);
$useridarr=array(0);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$useridarr[]=$row["id"];
}
$userids=implode(",",$useridarr);

$wherestr.=" and uid in (".$userids.") ";




$cztypearr=array("0"=>"自动充值","1"=>"手动充值","2"=>"套餐返还","3"=>"最低消费扣费","4"=>"发送失败返还","5"=>"手动扣费","6"=>"代理商充值");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `chongzhilog` ".$wherestr;

$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM chongzhilog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$czlogarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["nick"]=uidtonick($row["uid"]);
	
	$jiage= getuserjiage($row["uid"]);
	$row["jine"]=ceil($row["jine"]/$jiage);
	
 	$czlogarr[]=$row;
}
$url=XZKJURL."/index.php?action=dxchongzhilog&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);

include template('dxchongzhilog');
?>