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

$sosoy=trim($_GET["sosoy"]);
$sosom=trim($_GET["sosom"]);
if((!empty($sosoy)) && (!empty($sosom))){
	$sosom=sprintf("%02d",$sosom);
	$ymstr="".$sosoy.$sosom;
	$wherestr.=" and yuefen='".$ymstr."'";
}else{
	$sosoy="";
	$sosom="";
}




$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `daili_zhangdanlog` ".$wherestr;
//echo $sql;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM daili_zhangdanlog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["dlnick"]=getdailishangnick($row["uid"]);
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=daili_yaoqinggl&nick=".$nick."&sosoy=".$sosoy."&sosom=".$sosom;
$fenarr=packagepag($url,$page,$zpage);

include template('daili_yaoqinggl');

function getdailishangnick($uid){
	global $con;
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row['username'];
}
?>