<?
$wherestr=" where uid=".$_SESSION["dl_uid"];
$pid=trim($_GET["pid"]);
if(empty($pid)){
	die("<script>alert('��д��Ϣ����');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
}
$wherestr.=" and pid=".$pid;
$sosoname=trim($_GET["sosoname"]);
if(is_numeric($sosoname)){
	$wherestr.=" and id=".$sosoname;
}


$sjhtypearr=array(0=>"�ƶ�",1=>"��ͨ",2=>"����");
$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `ka_infos` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM ka_infos ".$wherestr." ORDER BY id ASC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$piarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	if(!empty($row["jihuotime"])){
	$row["jihuotime"]=date("Y-m-d H:i:s",$row["jihuotime"]);
	}
	$row["tcname"]=$row["liuliang"]."M";
	if($row["liuliang"]>=1024){
		$row["tcname"]=ceil($row["liuliang"]/1024)."G";
	}
	$row["tcname"]=$sjhtypearr[$row["sjhtype"]].$row["tcname"];
 	$piarr[]=$row;
}
$url=XZKJURL."/index.php?action=km_kalist&pid=".$pid."&sosoname=".$sosoname;
$fenarr=packagepag($url,$page,$zpage);


//ͳ�� ״̬ 0δ����  1����ɹ� 2����ʧ�� 3������
$sql="select count(*) as num from `ka_infos` where uid=".$_SESSION["dl_uid"]." and pid=".$pid." and zt=0";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$tongjizt0=intval($row["num"]);//δ����������

$sql="select count(*) as num from `ka_infos` where uid=".$_SESSION["dl_uid"]." and pid=".$pid." and zt=1";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$tongjizt1=intval($row["num"]);//����ɹ�

$sql="select count(*) as num from `ka_infos` where uid=".$_SESSION["dl_uid"]." and pid=".$pid." and zt=2";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$tongjizt2=intval($row["num"]);//����ʧ��

$sql="select count(*) as num from `ka_infos` where uid=".$_SESSION["dl_uid"]." and pid=".$pid." and zt=3";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$tongjizt3=intval($row["num"]);//������

include template('km_kalist');
?>