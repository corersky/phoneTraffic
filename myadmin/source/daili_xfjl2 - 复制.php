<?
$wherestr=" where 1=1";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	 $sql="select id from `user_daili` where username='".$nick."'";
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	 if(empty($row)){
	 	die("<script>alert('指定用户不存在!');</script>");
	 }
	 $dailiid=$row["id"];
	$wherestr.=" and uid =".$dailiid;
}


$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$wherestr.=" and createtime>".$stime." and createtime<".$etime;


$llczztarr=array("0"=>"提交成功","1"=>"充值成功","2"=>"充值失败","3"=>"提交成功");
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
$url=XZKJURL."/index.php?action=daili_xfjl2&nick=".$nick."&sosoy=".$sosoy."&sosom=".$sosom;
$fenarr=packagepag($url,$page,$zpage);


//获取列表的套餐集
$wherestr.=" and zt=1";
$sql="SELECT sjhtype,liuliang,COUNT(sjhtype) as num,SUM(shje) AS shihoujine FROM liuliangdaili_log ".$wherestr." GROUP BY liuliang,sjhtype";
//echo $sql;
$re=$con->query($sql);
$tcsjhtypearr=array("0"=>"移动","1"=>"联通","2"=>"电信");
$tcarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["sjhtypestr"]=$tcsjhtypearr[$row["sjhtype"]];
	$tcarr[]=$row;
}
//cs($tcarr);


include template('daili_xfjl2');


function getdailishangnick($uid){
	global $con;
	
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row["username"];

}
?>