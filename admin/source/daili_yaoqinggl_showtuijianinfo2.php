<?
$id=trim($_GET["uid"]);//获取记录id
if(empty($id)){
	die("确实系统参数!");
}
$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);
$wherestr=" where createtime>=".$stime." and createtime<".$etime;


//获取我所有推荐的代理id
$sql="SELECT id FROM user_daili where tjrid=".$id;
$re=$con->query($sql);
$mytjdailiidarr=array(0);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$mytjdailiidarr[]=$row["id"];
}
$mydailiids=implode(",",$mytjdailiidarr);
$wherestr.=" and uid in(".$mydailiids.")";

$wherestr.=" and zt=1";

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from chongzhidaililog ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$sql="SELECT * FROM chongzhidaililog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["dlname"]=getdailishangnick($row["uid"]);
	$row["jianglijine"]=$row["shje"]*0.01;
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=daili_yaoqinggl_showtuijianinfo2&uid=".$id;
$fenarr=packagepag($url,$page,$zpage);

include template('daili_yaoqinggl_showtuijianinfo2');



function getdailishangnick($uid){
	global $con;
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row['username'];
}
?>
?>