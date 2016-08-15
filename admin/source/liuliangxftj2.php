<?
$tjzt=intval($_GET["tjzt"]);
if(empty($tjzt)){
	$wherestr=" where zt in(0,1,3)";
}elseif($tjzt==1){
	$wherestr=" where zt=2 and istk=0";
}elseif($tjzt==2){
	$wherestr=" where zt=2 and istk=1";
}

$nick=trim($_GET["nick"]);
if(!empty($nick)){
	 $sql="select id from `user_daili` where username='".$nick."'";
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	 /*if(empty($row)){
	 	die("<script>alert('指定用户不存在!');</script>");
	 }*/
	$dailiid=$row["id"];
	if(!empty($dailiid)){
		$wherestr.=" and (uid =".$dailiid." or sjh='".$nick."')";
	}else{
		$wherestr.=" and (sjh='".$nick."')";
	}
}

$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$wherestr.=" and createtime>".$stime." and createtime<".$etime;

$yystype=empty($_GET["yystype"])?0:intval($_GET["yystype"]);//运营商类型
$tongdaiid=empty($_GET["tongdaiid"])?0:intval($_GET["tongdaiid"]);//通道
if(!empty($yystype)){
	$yystypebuf=$yystype;
	if($yystypebuf==3){
		$yystypebuf=0;
	}
	$wherestr.=" and sjhtype=".$yystypebuf;
}
if(!empty($tongdaiid)){
	$wherestr.=" and tongdaoid=".$tongdaiid;
}

//营销专员搜索
$yingxiaoid=trim($_GET["yingxiaoid"]);
if(!empty($yingxiaoid)){
	$yingxiaoidbuf=$yingxiaoid;
	 if($yingxiaoid==-1){
	 $yingxiaoidbuf=0;
	 }
	 $sql="select id from `user_daili` where yingxiaoid=".$yingxiaoidbuf;
	 $re=$con->query($sql);
	 $sosodluidarr=array();
	 while($row=mysql_fetch_array($re)){
	 	 $sosodluidarr[]=$row["id"];
	 }

	if(!empty($sosodluidarr)){
		$sosodluids=implode(",",$sosodluidarr);
		$wherestr.=" and (uid in(".$sosodluids."))";
	}else{
		$wherestr.=" and 1=2";
	}
}


$sql="SELECT sjhtype,liuliang,tongdaoid,COUNT(sjhtype) as num,SUM(shje) AS shihoujine,SUM(mianzhi) AS mianzhijine FROM liuliangdaili_log ".$wherestr." GROUP BY uid,liuliang,sjhtype,tongdaoid";
//echo $sql;
$re=$con->query($sql);
$ztiao=mysql_num_rows($re);

$llczztarr=array("0"=>"提交成功","1"=>"充值成功","2"=>"充值失败","3"=>"提交成功");
$yunyingsarr=array("0"=>"移动","1"=>"联通","2"=>"电信");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT uid,sjhtype,liuliang,tongdaoid,createtime,COUNT(sjhtype) as num,SUM(shje) AS shihoujine,SUM(mianzhi) AS mianzhijine FROM liuliangdaili_log ".$wherestr." GROUP BY uid,liuliang,sjhtype,tongdaoid ORDER BY uid DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["dlnick"]=getdailishangnick($row["uid"]);
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=liuliangxftj2&nick=".$nick."&sosoy=".$sosoy."&sosom=".$sosom."&yystype=".$yystype."&tongdaiid=".$tongdaiid."&tjzt=".$tjzt."&yingxiaoid=".$yingxiaoid;
$fenarr=packagepag($url,$page,$zpage);


$sql="SELECT SUM(shje) AS shihoujine,SUM(mianzhi) AS mianzhijine,SUM(maoli) AS maolijine FROM liuliangdaili_log ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
//echo $sql;
$shihoujine=floatval($row['shihoujine']);
$mianzhijine=floatval($row['mianzhijine']);
$maolijine=floatval($row['maolijine']);

if(!empty($tjzt)){
	$maolijine=0;
}





$sql="SELECT * FROM liuliangtongdaolist";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$tongdaoarr[]=$row;
}


//获取所有专员列表
$sql="SELECT id,username FROM user_yingxiao";
$re=$con->query($sql);
$yingxiaozyarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$yingxiaozyarr[$row["id"]]=$row["username"];
}

include template('liuliangxftj2');


function getdailishangnick($uid){
	global $con;
	
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row["username"];

}
?>