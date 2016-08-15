<?
$wherestr="";

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `youhuimsg` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM youhuimsg ".$wherestr." ORDER BY tjtype DESC,id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$youhuiarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["tjtypestr"]=empty($row["tjtype"])?"累计充值金额":"平均月充值金额";
	if(empty($row["tjtype"])){
		$row["tjstr"]="累充金额大于".$row["tj1"]."小于等于".$row["tj2"]."单价大于".$row["tj3"];
	}else{
		$row["tjstr"]="注册时长大于".$row["tj1"]."小于等于".$row["tj2"]."平充金额大于".$row["tj3"]."平充金额小于等于".$row["tj4"];
	}
 	$youhuiarr[]=$row;
}
$url=XZKJURL."/index.php?action=youhui";
$fenarr=packagepag($url,$page,$zpage);


include template('youhui');
?>