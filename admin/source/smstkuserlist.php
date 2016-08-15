<?
$atc=trim($_GET["atc"]);
if($atc=="add"){
	$username=trim($_POST["username"]);
	$fksj=intval($_POST["fksj"]);
	
	
	$sql="SELECT * FROM user where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=intval($row["id"]);
	if(empty($uid)){
		die("<script>alert('指定用户不存在!');</script>");
	}
	
	$inarr=array(
		 "smssbtkbz"=>1,
		 "tksj"=>$fksj
	);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>alert('操作成功!');window.parent.location.href='".XZKJURL."/index.php?action=smstkuserlist';</script>");
}elseif($atc=="del"){
	$id=trim($_GET["id"]);	
	
	$sql="SELECT * FROM user where id=".$id;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=intval($row["id"]);
	if(empty($uid)){
		die("<script>alert('指定用户不存在!');</script>");
	}
	
	$inarr=array(
		 "smssbtkbz"=>0,
		 "tksj"=>0
	);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>alert('操作成功!');window.parent.location.href='".XZKJURL."/index.php?action=smstkuserlist';</script>");
}

$wherestr=" where smssbtkbz=1";
$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `user` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM user ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=smstkuserlist";
$fenarr=packagepag($url,$page,$zpage);

include template('smstkuserlist');
?>