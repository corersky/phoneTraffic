<?
//��ֵʧ���˿�ʱ��
$sql="select * from `configdb` where configkey='llsbtktime'";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$llsbtktime=$row["congigvalue"];


$wherestr=" where cytkbz=1";


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
$url=XZKJURL."/index.php?action=addcytkuser";
$fenarr=packagepag($url,$page,$zpage);

include template('addcytkuser');
?>