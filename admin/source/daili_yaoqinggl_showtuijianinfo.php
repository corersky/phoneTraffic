<?
$id=trim($_GET["uid"]);//��ȡ��¼id
if(empty($id)){
	die("ȷʵϵͳ����!");
}
$wherestr="where 1=1 ";
//��ȡ�û�id���·�
$sql="SELECT * FROM daili_zhangdanlog where id=".$id;
$re=$con->query($sql);
$row=mysql_fetch_array($re,MYSQL_ASSOC);
$uid=$row["uid"];
$yuefen=trim($row["yuefen"]);
$stime=$yuefen."01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);
$wherestr.=" and createtime>=".$stime." and createtime<".$etime;


//��ȡ�������Ƽ��Ĵ���id
$sql="SELECT id FROM user_daili where tjrid=".$uid;
$re=$con->query($sql);
$mytjdailiidarr=array(0);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$mytjdailiidarr[]=$row["id"];
}
$mydailiids=implode(",",$mytjdailiidarr);
$wherestr.=" and uid in(".$mydailiids.")";

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from user_daili where tjrid=".$uid;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM user_daili where tjrid=".$uid." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["chongzhijine"]=getdailishangchobgzhijine($row["id"],$stime,$etime);
	$row["jianglijine"]=$row["chongzhijine"]*0.01;
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=daili_yaoqinggl_showtuijianinfo&uid=".$id;
$fenarr=packagepag($url,$page,$zpage);

//��ȡ�û���Ϣ
$sql="SELECT * FROM user_daili where id=".$uid;
$re=$con->query($sql);
$userinfo=mysql_fetch_array($re,MYSQL_ASSOC);

include template('daili_yaoqinggl_showtuijianinfo');


function getdailishangchobgzhijine($uid,$stime,$etime){
	global $con;
	$wherestr="where uid= ".$uid;
	$wherestr.=" and zt=1 and createtime>=".$stime." and createtime<".$etime;

	$sql="select SUM(shje) as num from `chongzhidaililog` ".$wherestr;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zchongzhijine=floatval($row["num"]);//�ܳ�ֵ���
	return $zchongzhijine;

}
?>