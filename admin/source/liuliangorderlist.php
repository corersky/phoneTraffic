<?
$wherestr="";

$nick=trim($_GET["nick"]);
if(!empty($nick)){
	if(!is_numeric($nick)){
		$uid=nicktouid($nick);
			$uid=intval($uid);
			$wherestr=$wherestr." and uid=".$uid;
	}else{
			$wherestr=$wherestr." and id=".$nick;
	}
}

$zt=intval($_GET["zt"]);
if(!empty($zt)){
	$ztbuf=$zt;
	if($zt==3){
		$ztbuf=0;
	}
	$wherestr=$wherestr." and zt=".$ztbuf;
}

$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$wherestr.=" and createtime>".$stime." and createtime<".$etime;



$ztarr=array("0"=>"�ύ�ɹ�","1"=>"�һ��ɹ�","2"=>"�һ�ʧ��");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `liuliang_log` where 1=1 ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM liuliang_log where 1=1 ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["nick"]=uidtonick($row["uid"]);
 	$orderarr[]=$row;
}
$url=XZKJURL."/index.php?action=liuliangorderlist&nick=".$nick."&zt=".$zt."&sosoy=".$sosoy."&sosom=".$sosom;
$fenarr=packagepag($url,$page,$zpage);


//�һ�������
$wherestr.=" and zt=1";
$sql="select SUM(dxnum) AS num from `liuliang_log` where 1=1 ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$duihuanzongnum=floatval($row["num"]);//������

//�һ��ײ�����ܺ�
$sql="select SUM(mianzhi) AS num from `liuliang_log` where 1=1 ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$mianzhizongnum=floatval($row["num"]);//������


include template('liuliangorderlist');
?>