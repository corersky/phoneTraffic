<?
$wherestr=" where 1=1";


$kaid=trim($_GET["kaid"]);
if(is_numeric($kaid)){
	$wherestr.=" and id=".$kaid;
}


$sjh=trim($_GET["sjh"]);
if(is_numeric($sjh)){
	$wherestr.=" and sjh='".$sjh."'";
}

$dlname=trim($_GET["dlname"]);
if(!empty($dlname)){
	$sql="select * from `user_daili` where username='".$dlname."'";
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$uid=trim($userinfo["id"]);
	if(empty($uid)){
		$uid=-5;
	}
	$wherestr.=" and uid=".$uid;
}


$czzt=intval($_GET["czzt"]);
if(!empty($czzt)){
	$czztbuf=$czzt-1;
	$wherestr.=" and zt=".$czztbuf;
}

$shzt=intval($_GET["shzt"]);
if(!empty($shzt)){
	$shztbuf=$shzt-1;
	$wherestr.=" and shzt=".$shztbuf;
}



$sjhtypearr=array(0=>"移动",1=>"联通",2=>"电信");
$ztarr=array(0=>"未激活",1=>"充值成功",2=>"充值失败",2=>"充值中");
$shztarr=array(0=>"没有售后",1=>"售后已解决",2=>"售后未解决");

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


$sql="SELECT * FROM ka_infos ".$wherestr." ORDER BY id ASC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$piarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	if(!empty($row["jihuotime"])){
		$row["jihuotime"]=date("Y-m-d H:i:s",$row["jihuotime"]);
	}
	$row["tcname"]=$row["liuliang"]."M";
	if($row["liuliang"]>=1024){
		$row["tcname"]=ceil($row["liuliang"]/1024)."G";
	}
	$row["tcname"]=$sjhtypearr[$row["sjhtype"]].$row["tcname"];
	$row["piname"]=getpiname($row["pid"]);
	$row["dailiname"]=getdailiname($row["uid"]);
	
 	$piarr[]=$row;
}

$url=XZKJURL."/index.php?action=km_kalist&kaid=".$kaid."&sjh=".$sjh."&dlname=".$dlname."&czzt=".$czzt."&shzt=".$shzt;
$fenarr=packagepag($url,$page,$zpage);


function getpiname($piid){
global $con;
	$sql="select piname from `ka_picilist` where id=".$piid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	return $row["piname"];	
}

function getdailiname($dlid){
global $con;
	if($dlid==0){
		return "未分配";
	}elseif($dlid==-1){
		return "注销";
	}
	$sql="select username from `user_daili` where id=".$dlid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	return $row["username"];	
}


include template('km_kalist');
?>