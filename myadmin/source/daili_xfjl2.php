<?
$wherestr=" where 1=1";
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
	
	//$wherestr.=" and uid =".$dailiid;
}


$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$sosod=empty($_GET["sosod"])?0:trim($_GET["sosod"]);

$stime="";
$etime="";
if(!empty($sosod)){
	$stime=$sosoy."-".$sosom."-".$sosod;
	$stime=strtotime($stime);
	$etime=$stime+60*60*24;
}else{
	$stime=$sosoy."-".$sosom."-01";
	$stime=strtotime($stime);
	$etime=strtotime("+1 month",$stime);
}

$wherestr.=" and createtime>=".$stime." and createtime<".$etime;

$zt=intval($_GET["zt"]);
if(!empty($zt)){
	$ztbuf=$zt;
	$ztbuf-=1;
	
	$wherestr=$wherestr." and zt=".$ztbuf;
	
}

$ly=intval($_GET["ly"]);
if(!empty($ly)){
	$lybuf=$ly;
	if($ly==500){
		$lybuf=0;
	}
	$wherestr=$wherestr." and ly=".$lybuf;
}

$yystype=intval($_GET["yystype"]);
if(!empty($yystype)){
	$yystypebuf=$yystype;
	if($yystype==3){
		$yystypebuf=0;
	}
	$wherestr=$wherestr." and sjhtype=".$yystypebuf;
}

$tongdaoid=intval($_GET["tongdaoid"]);
if(!empty($tongdaoid)){
	
	$wherestr=$wherestr." and tongdaoid=".$tongdaoid;
}

$liuliang=intval($_GET["liuliang"]);
if(!empty($liuliang)){
	$wherestr=$wherestr." and liuliang=".$liuliang;
}

$sheng=trim($_GET["sheng"]);
if(!empty($sheng)){
	$wherestr=$wherestr." and province='".$sheng."'";
}

$tkzt=intval($_GET["tkzt"]);
if($tkzt==1){//超时退款
	$wherestr=$wherestr." and istk72=1 and istk=1";
}
if($tkzt==2){//未到账退款
	$wherestr=$wherestr." and issd=1 and istk=1";
}


$llczztarr=array("0"=>"充值中","1"=>"充值成功","2"=>"充值失败","3"=>"等待充值");
$lyarr=array("0"=>"平台充值","1"=>"淘宝充值","2"=>"接口充值","3"=>"卡密充值");

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
	if(!empty($row["upzttime"])){
		$row["upzttime"]=date("Y-m-d H:i:s",$row["upzttime"]);
	}
	
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=daili_xfjl2&nick=".$nick."&sosoy=".$sosoy."&sosom=".$sosom."&sosod=".$sosod."&zt=".$zt."&ly=".$ly."&yystype=".$yystype."&tongdaoid=".$tongdaoid."&liuliang=".$liuliang."&tkzt=".$tkzt."&sheng=".$sheng;
$fenarr=packagepag($url,$page,$zpage);


//获取列表的套餐集
$wherestr.=" and zt=1";
$sql="SELECT sjhtype,liuliang,COUNT(sjhtype) as num,SUM(shje) AS shihoujine,SUM(mianzhi) AS mianzhijine FROM liuliangdaili_log ".$wherestr." GROUP BY liuliang,sjhtype";
//echo $sql;
$re=$con->query($sql);
$tcsjhtypearr=array("0"=>"移动","1"=>"联通","2"=>"电信");
$tcarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["sjhtypestr"]=$tcsjhtypearr[$row["sjhtype"]];
	$tcarr[]=$row;
}
//cs($tcarr);

$sql="SELECT * FROM liuliangtongdaolist";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$tongdaoarr[]=$row;
}


include template('daili_xfjl2');


function getdailishangnick($uid){
	global $con;
	
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row["username"];

}
?>