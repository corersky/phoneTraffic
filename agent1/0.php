<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");

	$con=new MySql();
	exit;
$sql="SELECT * FROM liuliangdaili_log WHERE tongdaoid = 1 AND sjhtype IN(1,2)";
$re=$con->query($sql);
$orderarr=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
$orderarr[]=$row;
}
cs($orderarr);

foreach($orderarr as $orderinfo){
	errjiuzheng($orderinfo);

}

function errjiuzheng($orderinfo){
	global $con;
	$uid=trim($orderinfo["uid"]);
	//获取用户余额折扣
	$sql="select * from `user_daili` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$dxnum=floatval($userinfo["dxnum"]);//余额
		
	$yidongzk=floatval($userinfo["yidongzk"]);//移动折扣
	$liantongzk=floatval($userinfo["liantongzk"]);//折扣
	$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
	
	$sjhtype=intval($orderinfo["sjhtype"]);
	
	$kfmianzhi=trim($orderinfo["mianzhi"]);
	$shje=trim($orderinfo["shje"]);

	$ysje=$kfmianzhi*$yidongzk*0.1;//扣费金额
	if($sjhtype==1){
		$ysje=$kfmianzhi*$liantongzk*0.1;//扣费金额
	}elseif($sjhtype==2){
		$ysje=$kfmianzhi*$dianxinzk*0.1;//扣费金额
	}
	
	$wcje=$ysje-$shje;
	echo $uid."误差金额：".$wcje."<br>";
	
	//修改
	$sql="UPDATE liuliangdaili_log set shje=".$ysje." where id=".$orderinfo["id"];
	$re=$con->query($sql);
	
	if($orderinfo["zt"]!=1){
echo "订单".$orderinfo["id"]."失败，不补差价<br>";
		return false;
	}
	
	
	//修改金额
	if($wcje>0){
		//扣费
		$dxnum=$dxnum-$wcje;
		if($dxnum<0){
			echo $uid."短信余额不足<br>";
			return false;
		}
		echo "用户：".$uid."开始补差价<br>";
		$sql="UPDATE user_daili set dxnum=dxnum-".$wcje." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
	}
	
		
}
?>