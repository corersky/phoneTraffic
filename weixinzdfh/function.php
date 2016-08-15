<?php
//==================================================================
//函数名：is_utf8
//作者：网上摘取
//日期：2012.04.11
//功能：返回指定字符串是否是utf-8编码，
//输入参数：要判断的字符串
//返回值：如果是u8返回true 否则返回false
//修改记录：无
//==================================================================

function is_utf8($string) {
$encode = mb_detect_encoding($string, array("ASCII",'UTF-8','GB2312',"GBK",'BIG5')); 
if($encode=="UTF-8"){
return true;
}else{
return false;
}
}

//==================================================================
//函数名：u8togbk
//作者：白东升
//日期：2012.04.11
//功能：用递归把指定对象或字符串的utf-8编码转换成gbk，采用传引用方式 
//输入参数：要转换的对象
//返回值：无
//修改记录：无
//==================================================================
function u8togbk(&$arr){
	if(is_object($arr)){
		$arr=(array)$arr;
	}
	if(is_array($arr)){
		foreach($arr as $k=>$v){
			if(is_array($v) || is_object($v)){
				 u8togbk($arr[$k]);
			}else{
			   if(is_utf8($arr[$k])) $arr[$k]=iconv("UTF-8","GBK//IGNORE",$arr[$k]);
				
			}
		}
	}else{
		if(is_utf8($arr)) $arr=iconv("UTF-8","GBK//IGNORE",$arr);
	}

}
//==================================================================
//函数名：get_token_info
//作者：白东升
//日期：2012.11.10
//功能：新浪授权信息查询接口 
//输入参数：$access_token:用户授权的access_token
//返回值：授权信息
//修改记录：无
//==================================================================
function get_token_info($access_token){
    if(empty($access_token)){
		return false;
	}
	$url="/oauth2/get_token_info";
	$parametersarr=array(
	"access_token"=>$access_token
	);
	$purl=APIURL.$url;
	$restr=json_decode(curl($purl,$parametersarr));
	return $restr;
}


//==================================================================
//函数名：do_post
//作者：腾讯开放平台demo
//日期：...
//功能：提交请求
//输入参数：$url 要提交的地址
//          $date post的数据，可以是数组，也可以是string
//返回值：提交后返回的数据
//修改记录：无
//==================================================================
function do_post($url, $data)
{
	$header = array(
            'Content-Type: application/json',
     );
	 
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    curl_setopt($ch, CURLOPT_POST, TRUE); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
    $ret = curl_exec($ch);

    curl_close($ch);
    return $ret;
}

//==================================================================
//函数名：get_url_contents
//作者：腾讯开放平台demo
//日期：...
//功能：获取制定页面内容，可做get页面提交
//输入参数：$url 要提交的地址
//返回值：获取指定页面内容
//修改记录：无
/**
为了兼容获取 https的内容只能抛弃file_get_contents函数，和加入
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
*/
//==================================================================
function get_url_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result =  curl_exec($ch);
    curl_close($ch);

    return $result;
}

function get_url_contentshttps($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_URL, $url);
    $result =  curl_exec($ch);
    curl_close($ch);

    return $result;
}
//==================================================================
//函数名：getXmlData
//作者：上个技术
//日期：...
//功能：解析xml
//输入参数：xml格式的字符串
//返回值：解析后的数组
//修改记录：无
//==================================================================
function getXmlData ($strXml) {
	$pos = strpos($strXml, 'xml');
	if ($pos) {
		$xmlCode=simplexml_load_string($strXml,'SimpleXMLElement', LIBXML_NOCDATA);
		$arrayCode=get_object_vars_final($xmlCode);
		return $arrayCode ;
	} else {
		return '';
	}
}
//==================================================================
//函数名：get_object_vars_final
//作者：上个技术
//日期：...
//功能：把对象转换成数组
//输入参数：要转换的对象
//返回值：转换后的数组
//修改记录：无
//==================================================================
function get_object_vars_final($obj){
	if(is_object($obj)){
		$obj=get_object_vars($obj);
	}
	if(is_array($obj)){
		foreach ($obj as $key=>$value){
			$obj[$key]=get_object_vars_final($value);
		}
	}
	return $obj;
}



//==================================================================
//函数名：filteremptyarr
//作者：白东升
//日期：2012.04.13
//功能：过滤空数组
//输入参数：$arr：要过滤的数组
//          $mark:标志是否保留原来的键值，1：保留 0：不保留
//返回值：过滤后的数组
//修改记录：无
//==================================================================
function filteremptyarr($arr,$mark=1){ //1保留 0不保留
	$rearr=array();
	$i=0;
	foreach($arr as $key=>$value){
	 if($mark){
		$k=$key;
	 }else{
	   $k=$i;
	 }
	 if(empty($value) && $value!==0){
	 
	 }else{
	   $rearr[$k]=$value;
	   $i++;
	 }
	}
	return $rearr;
}
//==================================================================
//函数名：cs
//作者：白东升
//日期：2012.04.14
//功能：输出一个数组，主要用于测试
//输入参数：$arr：要输出的数组
//返回值：无
//修改记录：无
//==================================================================
function cs($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
//==================================================================
//函数名：bai_strlen
//作者：白东升
//日期：2012.04.16
//功能：返回一个GBK字符串的长度
//输入参数：$str：要测试的字符串
//返回值：字符串的长度
//修改记录：无
//==================================================================
function bai_strlen($str){
	if(function_exists("mb_strlen")){
	return mb_strlen($str,"GBK");
	}else{
		$coun=0;
		for($i=0;$i<strlen($str);$i++){
			if(ord($str[$i])>127){
			//中文
			$i++;
			}
			$coun++;
		}
		return $coun;
	}
}

//==================================================================
//函数名：bai_substr
//作者：白东升
//日期：2012.04.25
//功能：中文字符串截取
//输入参数：$str：源字符串
//          $len:要截取的长度
//返回值：截取后的字符串
//修改记录：无
//==================================================================
function bai_substr($str,$len){
    if(empty($str)){
	return false;;
	}elseif($len<=0){
	return $str;
	}
   if(function_exists("mb_substr")){
		return mb_substr($str,0,$len,"GBK");
	}else{
		
	    $restr="";
		$j=0;
		for($i=0;$i<strlen($str)&& $j<$len;$i++){
		  if(ord($str[$i])>127){
			//中文
			 $restr.=$str[$i].$str[++$i];
			}else{
			 $restr.=$str[$i];
			}
			$j++;
		}
	 return $restr;
	}
return $str;
}
//==================================================================
//函数名：curl
//作者：淘宝demo
//日期：2012.11.09
//功能：POST请求函数
//输入参数：$url：请求地址
//          $postFields:参数数组
//返回值：返回内容
//修改记录：无
//==================================================================

 function curl($url, $postFields = null)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FAILONERROR, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		if (is_array($postFields) && 0 < count($postFields))
		{
			$postBodyString = "";
			foreach ($postFields as $k => $v)
			{
				$postBodyString .= "$k=" . urlencode($v) . "&"; 
			}
			unset($k, $v);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);  
 			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
		}
		$reponse = curl_exec($ch);
		
		curl_close($ch);
		return $reponse;
	}
	 
	 
function getaccessToken(){
	$a=get_url_contentshttps("https://open.weimob.com/common/token?grant_type=client_credential&appid=d2c2ab9466a3d8fa457c2ef02d190e0b&secret=aebbbf0e7fe8239cf1367c95f862a25b");
	$arr=json_decode($a,true);
	$access_token=$arr["data"]["access_token"];
	return $access_token;
}



//获取订单列表
function orderGetHighly($access_token){
    if(empty($access_token)){
		return false;
	}
	$update_end_time=date("Y-m-d H:i:s");
	$update_begin_time=date("Y-m-d H:i:s",(time()-60*60*3));
	$url="https://open.weimob.com/api/mname/WE_MALL/cname/orderGetHighly?accesstoken=".$access_token;
	$data=array(
		"order_type"=>"",
		"order_source"=>"",
		"order_status"=>1,
		"pay_status"=>1,
		"delivery_status"=>0,
		"update_begin_time"=>$update_begin_time,
		"update_end_time"=>$update_end_time,
		"page_size"=>100,
		"page_no"=>1
	);
	
	//$data["order_status"]="";
	//$data["pay_status"]="";
	//$data["update_begin_time"]="2016-1-7 00:00:00";
	
	$json=json_encode($data);
	$arr=do_post($url, $json);
	$arr=json_decode($arr,true);
	u8togbk($arr);
	return $arr;
}
//获取订单详情
function orderFullInfoGetHighly($access_token,$order_no){
    if(empty($access_token)){
		return false;
	}
	$update_end_time=date("Y-m-d H:i:s");
	$update_begin_time=date("Y-m-d H:i:s",(time()-60*60*3));
	$url="https://open.weimob.com/api/mname/WE_MALL/cname/orderFullInfoGetHighly?accesstoken=".$access_token;
	$data=array(
		"order_no"=>$order_no
	);
	
	$json=json_encode($data);
	$arr=do_post($url, $json);
	$arr=json_decode($arr,true);
	u8togbk($arr);
	return $arr;
}


//发货
function logisticsDelivery($access_token,$order_no){
    if(empty($access_token)){
		return false;
	}
	$url="https://open.weimob.com/api/mname/WE_MALL/cname/logisticsDelivery?accesstoken=".$access_token;
	
	
	$data=array(
		"order_no"=>$order_no,
		"need_delivery"=>"false",
		"carrier_code"=>"ems",
		"carrier_name"=>"ems",
		"express_no"=>"123456",
		"remark"=>NULL,
		"sender_address"=>"",
		"sender_name"=>"",
		"sender_tel"=>""
	);
	$data=array("deliveries"=>array($data));
	$json=json_encode($data);
	$arr=do_post($url, $json);
	$arr=json_decode($arr,true);
	u8togbk($arr);
	return $arr;
}
?>
