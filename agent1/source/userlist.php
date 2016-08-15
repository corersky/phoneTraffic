<?
$wherestr=" where dlid=".$_SESSION["dl_uid"];
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$wherestr=$wherestr." and username='".$nick."'";
}


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
	$jiage= getuserjiage($row["id"]);
	$row["dxnum"]=ceil($row["dxnum"]/$jiage);
	
	$row["xxinfo"]="用户名：".$row["username"]."<br>联系人电话:".$row["sjh"]."<br>联系人姓名:".$row["lxrxm"]."<br>联系人QQ:".$row["lxrqq"]."<br>公司名称:".$row["gsmc"]."<br>公司地址:".$row["dizhi"]."";
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=userlist&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);

include template('userlist');
?>