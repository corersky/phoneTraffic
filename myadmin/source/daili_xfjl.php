<?
$wherestr=" where cztype=6";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	 $sql="select id from `user_daili` where username='".$nick."'";
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	 if(empty($row)){
	 	die("<script>alert('指定用户不存在!');</script>");
	 }
	 $dailiid=$row["id"];
	//获取所有名下用户
	$sql="SELECT id FROM user where dlid=".$dailiid;
	$re=$con->query($sql);
	$useridarr=array(0);
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$useridarr[]=$row["id"];
	}
	$userids=implode(",",$useridarr);
	$wherestr.=" and uid in (".$userids.")";
}


$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$wherestr.=" and createtime>".$stime." and createtime<".$etime;


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
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$a=getdailishangnick($row["uid"]);
	$row["dlnick"]=$a["dlnick"];
	$row["unick"]=$a["unick"];
	
	$jiage= getuserjiage($row["uid"]);
	$row["jine"]=ceil($row["jine"]/$jiage);
	
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=daili_xfjl&nick=".$nick."&sosoy=".$sosoy."&sosom=".$sosom;
$fenarr=packagepag($url,$page,$zpage);


//获取列表的总充值条数和扣费金额
$sql="select SUM(shje) as num from `chongzhilog` ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zengkoufeinum=floatval($row["num"]);//总扣费金额

//获取列表的总充值条数和扣费金额
$sql="select SUM(jine) as num from `chongzhilog` ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zongczjine=floatval($row["num"]);//总充值金额
$jiage=0.0625;
$zongcongzhinum=ceil($zongczjine/$jiage);//总充值条数


include template('daili_xfjl');


function getdailishangnick($uid){
	global $con;
	$sql="select dlid,username from `user` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	 $dlid=$row["dlid"];
	 $unick=$row["username"];
	 $sql="select username from `user_daili` where id=".$dlid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	 
	 $arr=array("dlnick"=>$row["username"],"unick"=>$unick);
	return $arr;

}
?>