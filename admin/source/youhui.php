<?
$wherestr="";

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `youhuimsg` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM youhuimsg ".$wherestr." ORDER BY tjtype DESC,id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$youhuiarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["tjtypestr"]=empty($row["tjtype"])?"�ۼƳ�ֵ���":"ƽ���³�ֵ���";
	if(empty($row["tjtype"])){
		$row["tjstr"]="�۳������".$row["tj1"]."С�ڵ���".$row["tj2"]."���۴���".$row["tj3"];
	}else{
		$row["tjstr"]="ע��ʱ������".$row["tj1"]."С�ڵ���".$row["tj2"]."ƽ�������".$row["tj3"]."ƽ����С�ڵ���".$row["tj4"];
	}
 	$youhuiarr[]=$row;
}
$url=XZKJURL."/index.php?action=youhui";
$fenarr=packagepag($url,$page,$zpage);


include template('youhui');
?>