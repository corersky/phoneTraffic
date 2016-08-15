<?php
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
$con=new MySql();
//每月一号执行
$d=date("d");
$d=intval($d);
if($d!=1){
	exit;
}


$nowtime=time();//现在时间
$yuechutime=date("Y-m-1");
$yuechutime=strtotime($yuechutime);//月初时间

$sql="select * from `taocanlist`";
$re=$con->query($sql);
while($row=mysql_fetch_array($re)){
	if(($row["zjycfhtime"]<$yuechutime) && ($row["ayfanhuanjine"]>0) && ($row["yffyueshu"]<$row["yueshu"])){
		ayfanhuanaction($row);
	}
	
	if(($row["myzdxfjine"]>0) && ($row["myzdxfjinecltime"]<$yuechutime)){
		myzdxfaction($row);
	}
}




//处理按月返还
function ayfanhuanaction($taocaninfo){
	global $con;
	if($taocaninfo["yffyueshu"]>=$taocaninfo["yueshu"]){
		return false;
	}
	//充值类型 0自动充值 1手动充值 2套餐按月返还 3套餐最低消费达不到扣费  4发送失败返还
	//开始返还
	userdxchongzhi($taocaninfo["uid"],$taocaninfo["myfhje"],2);
	
	$yffyueshu=intval($taocaninfo["yffyueshu"]);
	$yffyueshu++;
	$inarr=array(
		"yffyueshu"=>$yffyueshu,
		"zjycfhtime"=>time()
	);
	$re=$con->updatetabe("taocanlist",$inarr,$taocaninfo["id"],"id");
}

//处理最低消费
function myzdxfaction($taocaninfo){
	global $con;
	
	if($taocaninfo["myzdxfjine"]<=0){
		return false;
	}
	$uid=$taocaninfo["uid"];
	//获取上个月的消费金额
	$ecreatetime=date("Y-m-1");
	$ecreatetime=strtotime($ecreatetime);//这个月月初时间
	
	$screatetime=date("Y-m-1",($ecreatetime-60*60*24));
	$screatetime=strtotime($screatetime);//上个月月初时间
	
	$sql="select SUM(kfje) as num from `smsorders` where uid=".$uid." and createtime>=".$screatetime." and createtime<".$ecreatetime." and zt!=2";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$xfjine=floatval($row["num"]);//上月消费金额
	
	$myzdxfjine=floatval($taocaninfo["myzdxfjine"]);//最低消费金额
	
	if($xfjine>=$myzdxfjine){
		return true;
	}
	
	$kfje=$myzdxfjine - $xfjine;
	
	
	//开始扣费
	$kfje=$kfje-($kfje*2);
	userdxchongzhi($uid,$kfje,3);

	$inarr=array(
		"myzdxfjinecltime"=>time()
	);
	$re=$con->updatetabe("taocanlist",$inarr,$taocaninfo["id"],"id");
}




$somecontent=date("Y-m-d H:i:s").":tccl \n";
csw("111.txt",$somecontent);
?>