<?
$wherestr=" and zt=1";
$sosoy=trim($_GET["sosoy"]);
$sosom=trim($_GET["sosom"]);

$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$wherestr.=" and createtime>".$stime." and createtime<".$etime;

//��ֵ���� 0�Զ���ֵ 1�ֶ���ֵ 2�ײͰ��·��� 3�ײ�������Ѵﲻ���۷�  4����ʧ�ܷ���
$cztypearr=array("0"=>"�Զ���ֵ","1"=>"�ֶ���ֵ","2"=>"�ײͷ���","3"=>"������ѿ۷�","4"=>"�ύʧ�ܷ���","5"=>"�ֶ��۷�","7"=>"����ʧ���˿�");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `chongzhilog` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);



$sql="SELECT * FROM chongzhilog where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$czlogarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	
	$jiage= getuserjiage($_SESSION["uid"]);
	$row["jine"]=ceil($row["jine"]/$jiage);

 	$czlogarr[]=$row;
}
$url=XZKJURL."/user.php?action=caiwuchongzhilog&sosoy=".$sosoy."&sosom=".$sosom;
$fenarr=packagepag($url,$page,$zpage);

include template('caiwuchongzhilog');
?>