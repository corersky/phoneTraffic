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
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM user ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$jiage= getuserjiage($row["id"]);
	$row["dxnum"]=ceil($row["dxnum"]/$jiage);
	
	$row["xxinfo"]="�û�����".$row["username"]."<br>��ϵ�˵绰:".$row["sjh"]."<br>��ϵ������:".$row["lxrxm"]."<br>��ϵ��QQ:".$row["lxrqq"]."<br>��˾����:".$row["gsmc"]."<br>��˾��ַ:".$row["dizhi"]."";
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=userlist&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);

include template('userlist');
?>