<?
$wherestr="";

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `weihudqlist` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM weihudqlist ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$whdqarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["starttime"]=date("Y-m-d H:i:s",$row["starttime"]);
	$row["endtime"]=date("Y-m-d H:i:s",$row["endtime"]);
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
 	$whdqarr[]=$row;
}
$url=XZKJURL."/index.php?action=whdq";
$fenarr=packagepag($url,$page,$zpage);

//��ȡ����ͨ��
$sql="SELECT * FROM liuliangtongdaolist where isbdtd=0";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$tongdaoarr[]=$row;
}

include template('whdq');
?>