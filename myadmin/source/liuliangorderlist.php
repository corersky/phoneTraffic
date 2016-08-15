<?
$wherestr="";

$nick=trim($_GET["nick"]);
if(!empty($nick)){
	if(!is_numeric($nick)){
		$uid=nicktouid($nick);
			$uid=intval($uid);
			$wherestr=$wherestr." and uid=".$uid;
	}else{
			$wherestr=$wherestr." and id=".$nick;
	}
}

$zt=intval($_GET["zt"]);
if(!empty($zt)){
	$wherestr=$wherestr." and zt=".$zt;
}

$ztarr=array("0"=>"提交成功","1"=>"充值成功","2"=>"充值失败");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `liuliang_log` where 1=1 ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM liuliang_log where 1=1 ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["nick"]=uidtonick($row["uid"]);
 	$orderarr[]=$row;
}
$url=XZKJURL."/index.php?action=liuliangorderlist&nick=".$nick."&zt=".$zt;
$fenarr=packagepag($url,$page,$zpage);

include template('liuliangorderlist');
?>