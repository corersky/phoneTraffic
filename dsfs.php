<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
require_once("smsfunction.php");
$con=new MySql();

//获取要定时发送的订单
$nowtime=time();
$createtime=$nowtime-60*60*24*90;
$sql="select * from `smsorders` where createtime>".$createtime." and zt=3 and dssendtime<=".$nowtime;
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re)){
	$orderarr[]=$row;
}
/*
//获取发送通道
$sql="select id from `tongdaolist` where zt=1 limit 0,1";
$re=$con->query($sql);
$tongdaoinfo=mysql_fetch_array($re);
$tongdaoid=intval($tongdaoinfo["id"]);
if(empty($tongdaoid)){
	die("获取不到发送通道!");
}
*/
foreach($orderarr as $orderinfo){
	//获取发送号码
	$orderid=$orderinfo["id"];
	$sql="select sjh from `smsordersinfo` where tid=".$orderinfo["id"];
	$re=$con->query($sql);
	$sjharr=array();
	while($row=mysql_fetch_array($re)){
		$sjharr[]=$row["sjh"];
	}
	$sjh=implode(",",$sjharr);
	
	$nei=trim($orderinfo["nei"]);
	$err="";
	$bz=sendsms($sjh,$nei,$orderinfo["tongdaoid"],$err);
	if(empty($bz)){
		//发送失败
		$inarr=array(
				"zt"=>2,
				"msg"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$orderid;
		$re=$con->query($sql);
		
		//返还用户金额
		userdxchongzhi($orderinfo["uid"],$orderinfo["kfje"],4);
		
	}else{
		//发送成功
		$inarr=array(
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
	}
	


}

$somecontent=date("Y-m-d H:i:s").":dscf \n";
csw("111.txt",$somecontent);

?>
ok