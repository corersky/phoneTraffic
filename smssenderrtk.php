<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$nowtime=time();
	//获取所有有权限退款的用户
	$sql="select id,jiage,smssbtkbz,tksj from `user` where smssbtkbz=1";
	$re=$con->query($sql);
	$tkuserarr=array();
	while($row=mysql_fetch_array($re)){
		$tkuserarr[]=$row;
	}
	
	foreach($tkuserarr as $userinfo){
		//获取用户下所有要退款的订单
		$time=$nowtime-60*60*$userinfo["tksj"];
		$stime=$time-60*60*24*5;
		$sql="select id,num,hmnum from `smsorders` where createtime >".$stime." and createtime<".$time." and uid=".$userinfo["id"]." and zt=1 and tksmbz=0";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$num=intval($row["num"]);
			$hmnum=intval($row["hmnum"]);
			$num=ceil($num/$hmnum);
			sms_ordererraction_id($userinfo,$row["id"],$num);
		}
	}
	
	


//根据订单给代理商退款退款
function sms_ordererraction_id($userinfo,$tid,$num){
	global $con;
	$uid=$userinfo["id"];
	//更新返款状态
	$sql="UPDATE smsorders set tksmbz=1 where id=".$tid;
	$re=$con->query($sql);
	
	//获取失败条数
	$sql="select count(*) as num from `smsordersinfo` where tid=".$tid." and zt=2";
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$hmnum=intval($orderinfo["num"]);
	$tknum=$hmnum*$num;
	if($tknum<=0){
		return true;
	}
	$jiage=floatval($userinfo["jiage"]);
	
	$jine=$tknum*$jiage;
	$jine=floatval($jine);
	
	$inactiv=array(
			'uid' =>$uid,
			'tid'=>0, 
			'jine'=>$jine, 
			'cztype' =>7,
			'czuid' =>0,
			'zt' =>1,
			'shje' =>0,
			'beizhu' =>"部分发送失败退款",
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhilog",$inactiv);
	
	$sql="UPDATE user set dxnum=dxnum+".$jine." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	
}
?>
ok