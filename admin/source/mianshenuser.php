<?
$wherestr="";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$uid=nicktouid($nick);
	if(!empty($uid)){
		$wherestr=$wherestr." where mianshenuser.uid=".$uid;
	}
}


//��ȡ����ͨ��
$sql="SELECT * FROM tongdaolist where zt=1";
$re=$con->query($sql);
$tongdaoarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$tongdaoarr[$row["id"]]=$row["title"];
}



$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from mianshenuser LEFT JOIN `user` ON mianshenuser.uid=user.id ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT user.*,mianshenuser.createtime AS mstime,mianshenuser.wzms,mianshenuser.jkms,mianshenuser.nbzh,mianshenuser.tongdaoid FROM mianshenuser LEFT JOIN `user` ON mianshenuser.uid=user.id ".$wherestr." ORDER BY mianshenuser.createtime DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["mstime"]=date("Y-m-d H:i:s",$row["mstime"]);
	
	$row["wzmsstr"]=empty($row["wzms"])?"":"��վ����";
	$row["jkmsstr"]=empty($row["jkms"])?"":"��������";
	$row["nbzhstr"]=empty($row["nbzh"])?"":"�ڲ��˺�";
	
	$jiage= getuserjiage($row["id"]);
	$row["dxnum"]=ceil($row["dxnum"]/$jiage);
	
	$row["tongdaoname"]=$tongdaoarr[$row["tongdaoid"]];
	
 	$userarr[]=$row;
}
//cs($userarr);
$url=XZKJURL."/index.php?action=mianshenuser&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);


include template('mianshenuser');
?>