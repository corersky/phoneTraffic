<?
$uid=trim($_GET["uid"]);
if(empty($uid)){
	die("�Ƿ�����");
}
$wherestr=" where uid=".$uid." and cztype=3";


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `chongzhilog` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM chongzhilog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=jifeibangdinguser_zdxf&uid=".$uid;
$fenarr=packagepag($url,$page,$zpage);


include template('jifeibangdinguser_zdxf');
?>