<?

$wherestr=" where uid=".$_SESSION["dl_uid"];

$kazt=intval($_GET["kazt"]);
if(!empty($kazt)){
	if($kazt==1){
		$wherestr.=" and zt=0";
	}else{
		$wherestr.=" and zt>0";
	}
}

$czzt=intval($_GET["czzt"]);
if(!empty($czzt)){
	$wherestr.=" and zt=".$czzt;
}


$sjh=trim($_GET["sjh"]);
if(!empty($sjh)){
	$wherestr.=" and (sjh='".$sjh."' or id=".$sjh.")";
}

$llczztarr=array("0"=>"δ����","1"=>"��ֵ�ɹ�","2"=>"��ֵʧ��","3"=>"��ֵ��");
$sjhtypearr=array("0"=>"�ƶ�","1"=>"��ͨ","2"=>"����");

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

$sql="SELECT * FROM `ka_infos` ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$kaarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	if(!empty($row["jihuotime"])){
		$row["jihuotime"]=date("Y-m-d H:i:s",$row["jihuotime"]);
	}
	$row["kkmsg"]=gettkztmsg($row["tid"]);
 	$kaarr[]=$row;
}
$url=XZKJURL."/index.php?action=kmgl&kazt=".$kazt."&czzt=".$czzt."&sjh=".$sjh;
$fenarr=packagepag($url,$page,$zpage);

include template('kmgl');

function gettkztmsg($tid){
	global $con;
	if(empty($tid)){
		return "δ����";
	}
	$sql="select zt,istk from `liuliangdaili_log` where id=".$tid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		return "δ����";
	}
	$kkzt="";
	if($row['istk']==1){
		$kkzt="�ѷ���";
	}else{
		if($row['zt']==2){
			$kkzt="�ȴ�����";
		}else{
			$kkzt="�ѿۿ�";
		}
	}
	return $kkzt;
}

?>