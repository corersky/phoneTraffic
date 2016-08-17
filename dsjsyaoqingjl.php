<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");

//$con=new MySql();
$con   =   MySQL::getInstance();

$nowtime=time();
//先获取最后一次执行的时间
$sql="select * from `configdb` where configkey='yaoqingjstime'";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
if(empty($row)){
	die("配置文件configdb错误!");
}
$congigvalue=intval($row["congigvalue"]);

//当月月初时间
$jstime=date("Y-m-1");
$jstime=strtotime($jstime);
if($congigvalue>$jstime){
	die("已经执行过了!");
}
//更新最后一次执行的时间
$sql="UPDATE configdb set congigvalue='".$nowtime."' where configkey='yaoqingjstime'";
$re=$con->query($sql);


//获取有下级的代理商id
$sql="SELECT tjrid FROM user_daili WHERE tjrid>0 GROUP BY tjrid";
$re=$con->query($sql);
$dailiuserarr=array();
while($row=mysql_fetch_array($re)){
	$dailiuserarr[]=$row["tjrid"];
}
//获取上月的时间
$stime=strtotime("-1 month",$nowtime);
$stime=date("Y-m-1",$stime);
$stime=strtotime($stime);
$etime=strtotime("+1 month",$stime);

$yuefen=date("Ym",$stime);

foreach($dailiuserarr as $value){
	$uid=$value;
	$jlje=getdailishangjianglijine($uid,$stime,$etime);
	
	$inarr=array(
		   "uid"=>$uid,
		   "yuefen"=>$yuefen,
		   
		   "jine"=>$jlje,
		   "zt"=>0,
		   "jstime"=>0,
		   "createtime"=>$nowtime
	);
	$con->insertabe("daili_zhangdanlog",$inarr);

}



//获取代理商指定月份奖励金额
function getdailishangjianglijine($uid,$stime,$etime){
	global $con;
	$sql="SELECT id FROM user_daili where tjrid=".$uid;
	$re=$con->query($sql);
	$jianglijine=0;
	while($row=mysql_fetch_array($re)){
		$dlid=$row["id"];
		$czje=getdailishangchobgzhijine($dlid,$stime,$etime);
		$jianglijine+=($czje*0.01);
	}
	return $jianglijine;
}

//获取代理商指定月份充值金额
function getdailishangchobgzhijine($uid,$stime,$etime){
	global $con;
	$wherestr="where uid= ".$uid;
	$wherestr.=" and zt=1 and createtime>=".$stime." and createtime<".$etime;
	$sql="select SUM(shje) as num from `chongzhidaililog` ".$wherestr;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zchongzhijine=floatval($row["num"]);//总充值金额
	return $zchongzhijine;
}

?>
ok