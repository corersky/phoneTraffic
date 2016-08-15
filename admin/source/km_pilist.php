<?
$wherestr=" where uid=".$_SESSION["dl_uid"];
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$wherestr.=" and piname LIKE '%".$nick."%'";
}


$sjhtypearr=array(0=>"移动",1=>"联通",2=>"电信");
$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `ka_picilist` ".$wherestr;

$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM ka_picilist ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$piarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["tcname"]=$row["liuliang"]."M";
	if($row["liuliang"]>=1024){
		$row["tcname"]=ceil($row["liuliang"]/1024)."G";
	}
	$row["tcname"]=$sjhtypearr[$row["sjhtype"]].$row["tcname"];
 	$piarr[]=$row;
}
$url=XZKJURL."/index.php?action=km_pilist&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);

include template('km_pilist');
?>