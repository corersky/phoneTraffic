<?
//��ȡ����������Ĵ�����
$sql="SELECT tjrid FROM user_daili WHERE tjrid>0 GROUP BY tjrid";
$re=$con->query($sql);
$tjridarr=array(0);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$tjridarr[]=$row["tjrid"];
}
$tjrids=implode(",",$tjridarr);
$wherestr.=" where id in(".$tjrids.")";

$nick=trim($_GET["nick"]);
if(!empty($nick)){
	 $wherestr.=" and username='".$nick."'";
}

$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$stime=$sosoy."-".$sosom."-01";
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);



$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `user_daili` ".$wherestr;
//echo $sql;
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
	$row["jianglijine"]=gettongjijine($row["id"],$stime,$etime);
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=daili_yaoqinggl2&nick=".$nick."&sosoy=".$sosoy."&sosom=".$sosom;
$fenarr=packagepag($url,$page,$zpage);

function gettongjijine($uid,$stime,$etime){
global $con;
	$wherestr="where 1=1 ";
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
	//��ȡ���´����ֵ�ܽ��
	$sql="select SUM(shje) as num from `chongzhidaililog` ".$wherestr;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zchongzhijine=floatval($row["num"]);//�ܳ�ֵ���
	$zjianglijine=$zchongzhijine*0.01;//�ܽ������
	return $zjianglijine;
}

//��ȡ����������Ĵ�����
$sql="SELECT id,username,tjrid FROM user_daili ".$wherestr;
$re=$con->query($sql);
$yaoqingdailiuserarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$yaoqingdailiuserarr[]=$row;
}


include template('daili_yaoqinggl2');
?>