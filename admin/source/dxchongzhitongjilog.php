<?
$wherestr=" where zt=1 and cztype in(0,1,2,5)";

//��ʱ���
$stime=trim($_GET["stime"]);
$etime=trim($_GET["etime"]);
if(!empty($stime)){
	$stimebuf=strtotime($stime);
	$wherestr=$wherestr." and createtime >=".$stimebuf;
}
if(!empty($etime)){
	$etimebuf=strtotime($etime);
	$wherestr=$wherestr." and createtime <=".$etimebuf;
}


//��ֵ���� 0�Զ���ֵ 1�ֶ���ֵ 2�ײͰ��·��� 3�ײ�������Ѵﲻ���۷�  4����ʧ�ܷ��� 5�ֶ��۷�

$uidarr=array(0);
$kefuid=intval($_GET["kefuid"]);
$yingxiaoid=intval($_GET["yingxiaoid"]);

if(!empty($kefuid) || !empty($yingxiaoid)){
	$userwherestr=" where 1=1";
	//�ͷ�רԱ
	if(!empty($kefuid)){
		$userwherestr=$userwherestr." and kefuid =".$kefuid;
	}
	
	if(!empty($yingxiaoid)){
		$userwherestr=$userwherestr." and yingxiaoid =".$yingxiaoid;
	}
	
	$sql="SELECT id FROM user ".$userwherestr;
	$re=$con->query($sql);
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$uidarr[]=$row["id"];
	}
	$uids=implode(",",$uidarr);
	$wherestr=$wherestr." and uid in(".$uids.")";
	
}



//�����ͽ�� ��ֵ���+��̯���
$sql="select SUM(jine) as num from `chongzhilog` ".$wherestr." and (iszs=1 or cztype=2)";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zengsongzongczjine=floatval($row["num"]);

//��ȡ����ʵ�ս��
$sql="select SUM(shje) as num from `chongzhilog` ".$wherestr." and iszs=1";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zengsongzongczshje=floatval($row["num"]);




//��ȡ�ܳ�ֵ���
$sql="select SUM(jine) as num from `chongzhilog` ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zongczjine=floatval($row["num"]);

//��ȡ�ܳ�ֵʵ�ս��
$sql="select SUM(shje) as num from `chongzhilog` ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zongczshje=floatval($row["num"]);



//��ȡ�����ܿ۷ѽ�� 
$sql="select SUM(shje) as num from `chongzhilog` ".$wherestr." and cztype=5";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$koufeijine=floatval($row["num"]);
$zongczshje=$zongczshje-($koufeijine*2);//��ȡ�ܳ�ֵʵ�ս���ȥ�۷�ʵ�ս��


//��ȡ�ܳ�ֵ����
$zongczdxnum=ceil($zongczjine/0.0625);

//��ǰ�����û�ʣ��������
$sql="select SUM(dxnum) as num from `user` ";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$userzongsynum=floatval($row["num"]);
$userzongsydxnum=ceil($userzongsynum/0.0625);


$cztypearr=array("0"=>"�Զ���ֵ","1"=>"�ֶ���ֵ","2"=>"�ײͷ���","3"=>"������ѿ۷�","4"=>"�ύʧ�ܷ���","5"=>"�ֶ��۷�");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `chongzhilog` ".$wherestr;
//echo $sql;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//������
$zpage=ceil($ztiao/$sizepage);//��ҳ��
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


//��ȡ����רԱ�б�
$sql="SELECT id,username FROM user_kefu";
$re=$con->query($sql);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$fuwuzyarr[$row["id"]]=$row["username"];
}

//��ȡ����Ӫ��רԱ�б�
$yingxiaozyarr=array();
$sql="SELECT id,username FROM user_yingxiao";
$re=$con->query($sql);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$yingxiaozyarr[$row["id"]]=$row["username"];
}


$sql="SELECT * FROM chongzhilog ".$wherestr." ORDER BY id DESC LIMIT ".$short.",".$sizepage;
$re=$con->query($sql);
$czlogarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$row["nick"]=uidtonick($row["uid"]);
	
	$jiage= getuserjiage($row["uid"]);
	$row["jine"]=ceil($row["jine"]/$jiage);
	
	if($row["czuid"]=="-1"){
		$row["czynick"]="�ܺ�̨";
	}elseif(empty($row["czuid"])){
		$row["czynick"]="�Զ���ֵ";
	}else{
		$row["czynick"]=$fuwuzyarr[$row["czuid"]];
	}
	if($row["cztype"]==5){
		$row["shje"]="-".$row["shje"];
 	}
	$czlogarr[]=$row;
}
$url=XZKJURL."/index.php?action=dxchongzhitongjilog&nick=".$nick."&stime=".$stime."&etime=".$etime."&kefuid=".$kefuid."&yingxiaoid=".$yingxiaoid;
$fenarr=packagepag($url,$page,$zpage);

include template('dxchongzhitongjilog');
?>