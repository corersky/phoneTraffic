<?
//��ȡĬ��ͨ��
//�ƶ�
$sql="select * from `configdb` where configkey='liuliangtdyd'";
$re=$con->query($sql);
$tongdaoinfo=mysql_fetch_array($re);
$ydtongdaoid=$tongdaoinfo["congigvalue"];

//��ͨ
$sql="select * from `configdb` where configkey='liuliangtdlt'";
$re=$con->query($sql);
$tongdaoinfo=mysql_fetch_array($re);
$lttongdaoid=$tongdaoinfo["congigvalue"];

//����
$sql="select * from `configdb` where configkey='liuliangtddx'";
$re=$con->query($sql);
$tongdaoinfo=mysql_fetch_array($re);
$dxtongdaoid=$tongdaoinfo["congigvalue"];





$wherestr=" where lltdbdyd>0";


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `user_daili` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM user_daili ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=lltongdaolist";
$fenarr=packagepag($url,$page,$zpage);

//��ȡ����ͨ��

$sql="SELECT * FROM liuliangtongdaolist where isbdtd=0";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$tongdaoarr[]=$row;
}

//��ȡ����ͨ��
$sql="SELECT * FROM liuliangtongdaolist";
$re=$con->query($sql);
$alltongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$alltongdaoarr[]=$row;
}


include template('lltongdaolist');
?>