<?php
require_once("common.php");

$access_token="5f39dd03c9bbbc9ac012deb7a7e17180524f32127b42bfe941d572983eb10413f17b011cbeacacaa8b01f0f4a6c6be62b889fa61b7c7d6d8c945a86535b46108";
$a=spuFullInfoGet ($access_token);
cs($a);
//获取订单详情
function spuFullInfoGet ($access_token){
    if(empty($access_token)){
		return false;
	}
	$update_end_time=date("Y-m-d H:i:s");
	$update_begin_time=date("Y-m-d H:i:s",(time()-60*60*3));
	$url="https://open.weimob.com/api/mname/WE_MALL/cname/spuFullInfoGet?accesstoken=".$access_token;
	$data=array(
		"is_onsale"=>2,
		"page_no"=>1,
		"page_size"=>100
	);
	
	$json=json_encode($data);
	$arr=do_post($url, $json);
	$arr=json_decode($arr,true);
	u8togbk($arr);
	return $arr;
}

?>