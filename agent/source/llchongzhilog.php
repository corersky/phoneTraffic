<?

$wherestr=" and ly!=3";

$sjh=trim($_GET["sjh"]);
if(!empty($sjh)){

	$wherestr.=" and (sjh='".$sjh."' or (beizhu like '%".$sjh."%'))";//ֻҪ���ܣ�����������
}

$zt=intval($_GET["zt"]);
if(!empty($zt)){
	$ztbuf=$zt-1;
	
		$wherestr.=" and zt=".$ztbuf;
	
}

$starttime=trim($_GET["starttime"]);
if(empty($starttime)){
	$starttime=date("Y-m-d",(time()-60*60*24*10));
}

$starttimebuf=strtotime($starttime);
$wherestr.=" and createtime>".$starttimebuf;

$endtime=trim($_GET["endtime"]);
if(empty($endtime)){
	$endtime=date("Y-m-d");
}

$endtimebuf=strtotime($endtime);
$endtimebuf+=60*60*24;
$wherestr.=" and createtime<".$endtimebuf;


$tkzt=intval($_GET["tkzt"]);
if($tkzt==1){//��ʱ�˿�
	$wherestr=$wherestr." and istk72=1 and istk=1";
}
if($tkzt==2){//δ�����˿�
	$wherestr=$wherestr." and issd=1 and istk=1";
}

$fkzt=intval($_GET["fkzt"]);
if($fkzt==1){//��ֵʧ�ܷ���
	$wherestr=$wherestr." and zt=2 and istk=1";
}
if($fkzt==2){//��ֵʧ�ܴ�����
	$wherestr=$wherestr." and zt=2 and istk=0";
}

$yystype=intval($_GET["yystype"]);
if(!empty($yystype)){
	$yystypebuf=$yystype;
	if($yystype==3){
		$yystypebuf=0;
	}
	$wherestr=$wherestr." and sjhtype=".$yystypebuf;
}


$llczztarr=array("0"=>"��ֵ��","1"=>"��ֵ�ɹ�","2"=>"��ֵʧ��","3"=>"�ȴ���ֵ");


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `liuliangdaili_log` where uid=".$_SESSION["dl_uid"].$wherestr;

$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);

$sql="SELECT * FROM `liuliangdaili_log` where uid=".$_SESSION["dl_uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$czlogarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	if(!empty($row["upzttime"])){
		$row["upzttime"]=date("Y-m-d H:i:s",$row["upzttime"]);
	}
 	$czlogarr[]=$row;
}


$url=XZKJURL."/index.php?action=llchongzhilog&sjh=".$sjh."&zt=".$zt."&starttime=".$starttime."&endtime=".$endtime."&tkzt=".$tkzt."&fkzt=".$fkzt."&yystype=".$yystype;
$fenarr=packagepag($url,$page,$zpage);

include template('llchongzhilog');

?>