<?
$wherestr=" where zt=1";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	 $sql="select id from `user_daili` where username='".$nick."'";
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	 if(empty($row)){
	 	die("<script>alert('ָ���û�������!');</script>");
	 }
	 $dailiid=$row["id"];
	 $wherestr.=" and uid =".$dailiid;
}


$sosoy=empty($_GET["sosoy"])?date("Y"):trim($_GET["sosoy"]);
$sosom=empty($_GET["sosom"])?date("m"):trim($_GET["sosom"]);
$sosod=empty($_GET["sosod"])?0:trim($_GET["sosod"]);

$stime="";
$etime="";
if(!empty($sosod)){
	$stime=$sosoy."-".$sosom."-".$sosod;
	$stime=strtotime($stime);
	$etime=$stime+60*60*24;
}else{
	$stime=$sosoy."-".$sosom."-01";
	$stime=strtotime($stime);
	$etime=strtotime("+1 month",$stime);
}
$wherestr.=" and createtime>".$stime." and createtime<".$etime;

$sosoyxxy=empty($_GET["sosoyxxy"])?0:trim($_GET["sosoyxxy"]);
$sosoczr=isset($_GET["sosoczr"])?trim($_GET["sosoczr"]):-2;
$sosoczfs=isset($_GET["sosoczfs"])?trim($_GET["sosoczfs"]):-2;

if(!empty($sosoyxxy)){
	//��ȡӪ��רԱ�µ����д�����id
	$sql="SELECT id FROM user_daili where yingxiaoid=".$sosoyxxy;
	$re=$con->query($sql);
	$useridarr=array(0);
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$useridarr[]=$row["id"];
	}
	$userids=implode(",",$useridarr);
	$wherestr.=" and uid in (".$userids.")";
}
if($sosoczr!=-2){
	$wherestr.=" and czuid=".$sosoczr;
}
if($sosoczfs!=-2){
	$wherestr.=" and cztype=".$sosoczfs;
}





$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `chongzhidaililog` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM chongzhidaililog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["dlnick"]=getdailishangnick($row["uid"]);
	
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=liuliangcztj&nick=".$nick."&sosoy=".$sosoy."&sosom=".$sosom."&sosod=".$sosod."&sosoyxxy=".$sosoyxxy."&sosoczr=".$sosoczr."&sosoczfs=".$sosoczfs;
$fenarr=packagepag($url,$page,$zpage);

//ͳ��
$sql="select SUM(jine) AS num from `chongzhidaililog` ".$wherestr;
//echo $sql;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zongjine=floatval($row["num"]);//������


//ʣ���ܽ��
$sql="select SUM(dxnum) AS num from `user_daili` ";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$usersyzongjine=floatval($row["num"]);//������




//��ȡ������
$sql="SELECT * FROM user_kefu";
$re=$con->query($sql);
$czruserarr=array("-1"=>"���߳�ֵ","0"=>"�ܺ�̨��ֵ");
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$czruserarr[$row["id"]]=$row["username"];
}
//��ֵ��ʽ
$czfstypearr=array("0"=>"�ֶ���ֵ","1"=>"�ֶ��۷�","2"=>"���߳�ֵ");

//��ȡӪ��רԱ
$sql="SELECT * FROM user_yingxiao";
$re=$con->query($sql);
$yxzyuserarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$yxzyuserarr[$row["id"]]=$row["username"];
}

include template('liuliangcztj');



function getdailishangnick($uid){
	global $con;
	
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row["username"];

}
?>