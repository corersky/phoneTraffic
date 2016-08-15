<?
$wherestr=" where 1=1";
$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$sosod=empty($_GET["sosod"])?date("d"):trim($_GET["sosod"]);
$stime=$sosoy."-".$sosom."-".$sosod;
$stime=strtotime($stime);
$etime=$stime+60*60*24;
//$etime=strtotime("+1 month",$stime);
$wherestr.=" and createtime>".$stime." and createtime<".$etime;

$czuid=intval($_GET["czuid"]);
if(!empty($czuid)){
	$wherestr.=" and uid=".$czuid;
}

$cztype=intval($_GET["cztype"]);
if(!empty($cztype)){
	$cztypebuf=$cztype;
	if($cztype==500){
		$cztypebuf=0;
	}
	$wherestr.=" and cztype=".$cztypebuf;
}



$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `caozuolog` ".$wherestr;
//echo $sql;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$cztypearr=array("0"=>"修改价格","1"=>"充值","2"=>"新增代理");

$sql="SELECT * FROM caozuolog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$logarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
 	$logarr[]=$row;
}


//获取所有专员列表
$sql="SELECT id,username FROM user_kefu";
$re=$con->query($sql);
$fuwuzyarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$fuwuzyarr[$row["id"]]=$row["username"];
}


$url=XZKJURL."/index.php?action=kefuczlog&sosoy=".$sosoy."&sosom=".$sosom."&czuid=".$czuid."&cztype=".$cztype."&sosod=".$sosod;
$fenarr=packagepag($url,$page,$zpage);
//cs($logarr);

include template('kefuczlog');
?>