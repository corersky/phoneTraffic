<?
require_once("common.php");
exit;
		$reqToken=md5("10104#$%DS568D@25");
	$id="10104";
	$SoapRequest="";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/getToken?reqToken=".$reqToken."&id=".$id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	
	$json=json_decode($result,true);
	$token=trim($json["token"]);
	echo $token;
	
	
	$orderId="".$id.time().rand(10,99).rand(0,9);
	$accNumber="13323718543";
	$pricePlanCd="300050033834";
	$orderType="0";
	
	
	$arr=array(
		"orderId"=>"101041469176305930"
	);
	$para=json_encode($arr);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://hn.yuny.com.cn:9292/crm/query?token=".$token."&id=".$id."&para=".$para);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch, CURLOPT_TIMEOUT,5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	var_dump($result);
	
	$json=json_decode($result,true);
	echo "<pre>";
	print_r($json);
	
	$orderResult=$json["orderResult"];
	echo "<pre>";
	print_r($orderResult);
	
$err=iconv("UTF-8","GBK//IGNORE",$result);
var_dump($err);
	
?>