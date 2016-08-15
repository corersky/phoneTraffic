<?
$wherestr=" where zt=1 and cztype !=6";

$nick=trim($_GET["nick"]);
if(!empty($nick)){
	$uid=nicktouid($nick);
	if(!empty($uid)){
		$wherestr=$wherestr." and uid=".$uid;
	}
}

//按时间段
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


//按充值人
$czuid=intval($_GET["czuid"]);
if(!empty($czuid)){
	$czuidbuf=$czuid;
	if($czuidbuf==-2){
		$czuidbuf=0;
	}
	$wherestr=$wherestr." and czuid =".$czuidbuf;
}
//按充值类型
$cztype=intval($_GET["cztype"]);
if(!empty($cztype)){
	$cztypebuf=$cztype;
	if($cztypebuf==-1){
		$cztypebuf=0;
	}
	$wherestr=$wherestr." and cztype =".$cztypebuf;
}



$cztypearr=array("0"=>"在线充值","1"=>"手动充值","2"=>"套餐按月返还","3"=>"套餐最低消费达不到扣费","4"=>"提交失败返还","5"=>"手动扣费","6"=>"代理商充值","7"=>"发送失败退款");

$page=empty($_GET["page"])?1:intval($_GET["page"]);
$sizepage=10;
if($page<=0) $page=1;
$sql="select count(*) as num from `chongzhilog` ".$wherestr;
//echo $sql;
$re=$con->query($sql);
$zage=mysql_fetch_array($re);
$ztiao=intval($zage["num"]);//总条数
$zpage=ceil($ztiao/$sizepage);//总页数
if($zpage<=0) $zpage=1;
$short = $sizepage*($page-1);


//获取所有专员列表
$sql="SELECT id,username FROM user_kefu";
$re=$con->query($sql);
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
 	$fuwuzyarr[$row["id"]]=$row["username"];
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
		$row["czynick"]="总后台";
	}elseif($row["czuid"]=="-2"){
		$row["czynick"]="代理商充值";
	}elseif(empty($row["czuid"])){
		$row["czynick"]="系统自动充值";
	}else{
		$row["czynick"]=$fuwuzyarr[$row["czuid"]];
	}
	if($row["cztype"]==5){
		$row["shje"]="-".$row["shje"];
 	}
 	$czlogarr[]=$row;
}
$url=XZKJURL."/index.php?action=dxchongzhilog&nick=".$nick."&stime=".$stime."&etime=".$etime."&czuid=".$czuid."&cztype=".$cztype;
$fenarr=packagepag($url,$page,$zpage);

include template('dxchongzhilog');
?>