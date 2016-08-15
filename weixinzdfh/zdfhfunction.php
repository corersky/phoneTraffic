<?php 
//微信自动发货
//$orderinfo 订单信息
function weixinzdfh($orderinfo,$session){
global $con;
	$receiver_tel=$orderinfo["receiver_tel"];//收货人手机号
	$remark=$orderinfo["remark"];//留言
	$real_amount=floatval($orderinfo["real_amount"]);//实付金额
	$open_id=$orderinfo["open_id"];//粉丝唯一编号
	$tid=$orderinfo["order_no"];

	$czsjh=getbuyer_messageinsjh($remark);//要充值的手机号
	if(empty($czsjh)){
		$czsjh=$receiver_tel;
	}

	//获取所有活动商品
	$sql="select * from `items`";
	$re=$con->query($sql);
	$itemlistarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$itemlistarr[$row["itemid"]]=$row;
	}
	
	foreach($orderinfo["order_details"] as $value){
			if(empty($itemlistarr[$value["spu_code"]])){
				continue;	
			}
			$liuliang=$itemlistarr[$value["spu_code"]]['liuliang'];
			$sjhtype=$itemlistarr[$value["spu_code"]]['lltype'];
			liuliangsend($open_id,$czsjh,$tid,$liuliang,$sjhtype,$session,$real_amount);
	}
}


//获取留言中的手机号 合法返回手机号 非法返回false
function getbuyer_messageinsjh($nei){
	//去掉里面的所有 空格 斜杠
	$nei =preg_replace("/\s|\\\\|\/|\-/is","",$nei);
	//全角过滤
	$qian=array("１","２","３","４","５","６","７","８","９","０");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);
	//中文过滤 1
	$qian=array("一","二","三","四","五","六","七","八","九","零");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    

	//中文过滤 2
	$qian=array("①","②","③","④","⑤","⑥","⑦","⑧","⑨","〇");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);
	

	$sjh=preg_replace("/(.*?)(1\d{10})(.*)/is","\\2",$nei);
	if(is_numeric($sjh) && (strlen($sjh)==11)){
		return $sjh;
	}
	return false;     
}

/*****
流量充值
$sjh,要充值的手机号
$tid,订单编号
$buyer_nick,买家昵称
$itemid,商品id
$liuliang,流量
$sjhtype,要充值的手机号类型
$apizh,接口账号
$apipwd 接口密码
*******/
function liuliangsend($open_id,$sjh,$tid,$liuliang,$sjhtype,$session,$ddje=0){
	global $con;
	
	$liuliang=intval($liuliang);
	$taskid=liuliangchongzhisend($sjh,$sjhtype,$liuliang,$tid,$open_id);
	$taskid=intval($taskid);
	
	$insql=array(
	    'tid' => $tid,
		'open_id' => $open_id,
		'lltype' => $sjhtype,
		'liuliang' => $liuliang,
		'zt' => 0,
		'taskid' => $taskid,
		'sjh' => $sjh,
		'ddje' => $ddje,
		'createtime'=>time(),
		'beizhu' => ""
	   );
	 
	$logid=$con->insertabe("orderlog",$insql);
	
	if($taskid>0){
		//$a=taobao_logistics_dummy_send($session,$tid);
		logisticsDelivery($session,$tid);
		$nei="您购买的流量套餐，系统正在充值中，超过48小时未生效，可申请退款。如有问题可咨询微信号：18037507065【流量充值】";
		sendliuliangoksmsmsg($sjh,$nei);
	}
	//cs($a);

}


//调用充值接口 成功返回大于0的订单编号
/******
-2 系统参数错误
-3 余额不足
-1 套餐与实际归属地不同
0其他错误

$apizh,接口账号
$apipwd 接口密码
$sjh,要充值的手机号
$sjhtype,要充值的手机号类型
$liuliang,流量
$tid,订单编号
$buyer_nick,买家昵称
******/
function liuliangchongzhisend($sjh,$sjhtype,$liuliang,$tid,$buyer_nick){
	$apizh="xzkj";
	$apipwd="xzkj168zhangqian";
	$beizhu="".$tid.":".$buyer_nick;
	$SoapRequest="sjh=".$sjh."&liuliang=".$liuliang."&sjhtype=".$sjhtype."&apizh=".$apizh."&apipwd=".$apipwd."&beizhu=".$beizhu."&ly=2";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://duanxin.xzkj168.cn/agent/liuliangserver.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	return $result; 
}
//发送短信
function sendliuliangoksmsmsg($sjh,$nei){
	$SoapRequest="username=微盟后台专用&pwd=123123&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://duanxin.xzkj168.cn/server/sendsms.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	var_dump($result);
	return $result; 

}
?>
