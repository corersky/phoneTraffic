<?
$wherestr=" and zt=1";
$sosoy=trim($_GET["sosoy"]);
$sosom=trim($_GET["sosom"]);

$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$wherestr.=" and createtime>".$stime." and createtime<".$etime;

//充值类型 0自动充值 1手动充值 2套餐按月返还 3套餐最低消费达不到扣费  4发送失败返还
$cztypearr=array("0"=>"自动充值","1"=>"手动充值","2"=>"套餐返还","3"=>"最低消费扣费","4"=>"提交失败返还","5"=>"手动扣费","7"=>"发送失败退款");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `chongzhilog` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);



$sql="SELECT * FROM chongzhilog where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$czlogarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	
	$jiage= getuserjiage($_SESSION["uid"]);
	$row["jine"]=ceil($row["jine"]/$jiage);

 	$czlogarr[]=$row;
}
$url=XZKJURL."/user.php?action=caiwuchongzhilog&sosoy=".$sosoy."&sosom=".$sosom;
$fenarr=packagepag($url,$page,$zpage);

include template('caiwuchongzhilog');
?>