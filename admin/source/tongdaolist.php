<?
$wherestr="";
$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `tongdaolist` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$sql="SELECT * FROM tongdaolist ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["beizhumsg"]=bai_substr($row["beizhu"],6);
	$row["qt_jkyzmtdstr"]=empty($row["qt_jkyzmtd"])?"":"������֤��";
	$row["qt_jktdstr"]=empty($row["qt_jktd"])?"":"����֪ͨ";
	$row["qt_qtshowstr"]=empty($row["qt_qtshow"])?"":"��վ֪ͨ";
 	$tongdaoarr[]=$row;
}
$url=XZKJURL."/index.php?action=tongdaolist";
$fenarr=packagepag($url,$page,$zpage);

include template('tongdaolist');
?>