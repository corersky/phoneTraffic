<?
$wherestr=" where kefuid=0";
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
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=userweifenpei&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);


//获取所有专员列表
$sql="SELECT id,username FROM user_kefu where zt=1";
$re=$con->query($sql);
$zhuanyuanarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$zhuanyuanarr[]=$row;
}
include template('userweifenpei');
?>