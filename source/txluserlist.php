<?
$wherestr="";
$sosozuid=trim($_GET["sosozuid"]);
$sosozsjh=trim($_GET["sosozsjh"]);

if(!empty($sosozuid)){
	$wherestr.=" and zuid=".$sosozuid;
}

if(!empty($sosozsjh)){
	$wherestr.=" and sjh='".$sosozsjh."'";
}



$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `txluser` where uid=".$_SESSION["uid"].$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM txluser where uid=".$_SESSION["uid"].$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$zuuserarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$beizhu="��˾����:".$row["gongshi"]."��˾��ַ:".$row["dizhi"]."��ϵQQ:".$row["qq"];
	$row["beizhumsg"]=bai_substr($beizhu,10);
	$row["xm"]=trim($row["xm"]);
	$row["sjh"]=trim($row["sjh"]);
	$row["zuid"]=trim($row["zuid"]);
	$row["gongshi"]=trim($row["gongshi"]);
	$row["dizhi"]=trim($row["dizhi"]);
	$row["qq"]=trim($row["qq"]);
	$row["email"]=trim($row["email"]);
	
 	$zuuserarr[]=$row;
}
$url=XZKJURL."/user.php?action=txluserlist&sosozuid=".$sosozuid."&sosozsjh=".$sosozsjh;
$fenarr=packagepag($url,$page,$zpage);

//��ȡ�û�������

$sql="SELECT id,zuname FROM txlzu where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$zuarr=array();
$zujsonstr="var zudata = {records: []};var a ={};";//������json����
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$zuarr[$row["id"]]=$row["zuname"];
	$zujsonstr.="a = {zuid: ".$row["id"].", zuname: '".$row["zuname"]."'};zudata.records.push(a);";
}


include template('txluserlist');
?>