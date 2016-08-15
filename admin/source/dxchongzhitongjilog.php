<?
$wherestr=" where zt=1 and cztype in(0,1,2,5)";

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


//充值类型 0自动充值 1手动充值 2套餐按月返还 3套餐最低消费达不到扣费  4发送失败返还 5手动扣费

$uidarr=array(0);
$kefuid=intval($_GET["kefuid"]);
$yingxiaoid=intval($_GET["yingxiaoid"]);

if(!empty($kefuid) || !empty($yingxiaoid)){
	$userwherestr=" where 1=1";
	//客服专员
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



//总赠送金额 充值金额+分摊金额
$sql="select SUM(jine) as num from `chongzhilog` ".$wherestr." and (iszs=1 or cztype=2)";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zengsongzongczjine=floatval($row["num"]);

//获取赠送实收金额
$sql="select SUM(shje) as num from `chongzhilog` ".$wherestr." and iszs=1";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zengsongzongczshje=floatval($row["num"]);




//获取总充值金额
$sql="select SUM(jine) as num from `chongzhilog` ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zongczjine=floatval($row["num"]);

//获取总充值实收金额
$sql="select SUM(shje) as num from `chongzhilog` ".$wherestr;
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zongczshje=floatval($row["num"]);



//获取赠送总扣费金额 
$sql="select SUM(shje) as num from `chongzhilog` ".$wherestr." and cztype=5";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$koufeijine=floatval($row["num"]);
$zongczshje=$zongczshje-($koufeijine*2);//获取总充值实收金额减去扣费实收金额


//获取总充值条数
$zongczdxnum=ceil($zongczjine/0.0625);

//当前所有用户剩余条数。
$sql="select SUM(dxnum) as num from `user` ";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$userzongsynum=floatval($row["num"]);
$userzongsydxnum=ceil($userzongsynum/0.0625);


$cztypearr=array("0"=>"自动充值","1"=>"手动充值","2"=>"套餐返还","3"=>"最低消费扣费","4"=>"提交失败返还","5"=>"手动扣费");

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

//获取所有营销专员列表
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
		$row["czynick"]="总后台";
	}elseif(empty($row["czuid"])){
		$row["czynick"]="自动充值";
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