<?
$wherestr="";
$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$uid=nicktouid($nick);
	if(!empty($uid)){
		$wherestr=$wherestr." where uid=".$uid;
	}else{
		$wherestr=$wherestr." where uid=0";
	}
}


$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `taocanlist` ".$wherestr;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


$sql="SELECT * FROM taocanlist ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$userarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$jiage= getuserjiage($row["uid"]);
	$row["ayfanhuanjine"]=ceil($row["ayfanhuanjine"]/$jiage);
	$row["myfhje"]=ceil($row["myfhje"]/$jiage);
	$mytcmsg="";
	$mytjfmc="";
	$row["ayffzt"]="û��״̬";
	if($row["ayfanhuanjine"]>0){
		$mytcmsg.="��̯����:".$row["ayfanhuanjine"]."�� ".$row["yueshu"]."���£�ÿ����".$row["myfhje"]."����";
		$mytjfmc.="���·�����";
		if($row["yffyueshu"]>=$row["yueshu"]){
			$row["ayffzt"]="�ѹ���";
		}else{
			$row["ayffzt"]="δ����";
		}
		
	}
	if($row["myzdxfjine"]>0){
		$mytcmsg.="���������:".$row["myzdxfjine"]."Ԫ";
		$mytjfmc.="�������";
	}
	
	
	
	 
	$row["mytjfmc"]=$mytjfmc;
	$row["mytcmsg"]=$mytcmsg;
	$row["mytcmsgstr"]=bai_substr($row["mytcmsg"],8);
	
	$row["nick"]=uidtonick($row["uid"]);
 	$userarr[]=$row;
}
$url=XZKJURL."/index.php?action=jifeibangdinguser&nick=".$nick;
$fenarr=packagepag($url,$page,$zpage);


include template('jifeibangdinguser');
?>