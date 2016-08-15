<?
//获取所有接口用户
$sql="SELECT uid FROM user_jiekou where zt=1";
$re=$con->query($sql);
$jiekuserarr=array(0);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$jiekuserarr[]=$row["uid"];
}
$jiekuserids=implode(",",$jiekuserarr);

$wherestr=" where id in (".$jiekuserids.")";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$wherestr=$wherestr." and username='".$nick."'";
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `user` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM user ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["zhdltime"]=date("Y-m-d H:i:s",$row["zhdltime"]);
	$jiage= getuserjiage($row["id"]);
	$row["dxnum"]=ceil($row["dxnum"]/$jiage);
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=jiekouuser&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);


//获取所有专员列表
$sql="SELECT id,username FROM user_kefu";
$re=$con->query($sql);
$fuwuzyarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$fuwuzyarr[$row["id"]]=$row["username"];
}
//获取所有专员列表
$sql="SELECT id,username FROM user_yingxiao";
$re=$con->query($sql);
$yingxiaozyarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$yingxiaozyarr[$row["id"]]=$row["username"];
}


include template('jiekouuser');
?>