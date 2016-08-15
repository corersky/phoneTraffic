<?
$wherestr=" where zt=3";
$sjh=trim($_GET["sjh"]);
if(!empty($sjh)){
	$wherestr.=" and sjh ='".$sjh."'";
}

$llczztarr=array("0"=>"提交成功","1"=>"充值成功","2"=>"充值失败","3"=>"提交成功");
$lyarr=array("0"=>"平台充值","1"=>"淘宝充值","2"=>"接口充值");
$sjhtypearr=array("0"=>"移动","1"=>"联通","2"=>"电信");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `liuliangdaili_log` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM liuliangdaili_log ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["dlnick"]=getdailishangnick($row["uid"]);
	$row["unick"]=$row["sjh"];
	$row["jine"]="".$row["liuliang"]."M";
	
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=llweichuliorder&sjh=".$sjh;
$fenarr=packagepag($url,$page,$zpage);
include template('llweichuliorder');


function getdailishangnick($uid){
	global $con;
	
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row["username"];

}
?>