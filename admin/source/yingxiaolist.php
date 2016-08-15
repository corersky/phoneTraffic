<?
$wherestr="";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$wherestr=$wherestr." where username='".$nick."'";
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `user_yingxiao` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM user_yingxiao ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=yingxiaolist&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);

include template('yingxiaolist');
?>