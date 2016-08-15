<?php
//==================================================================
//��������is_utf8
//���ߣ�����ժȡ
//���ڣ�2012.04.11
//���ܣ�����ָ���ַ����Ƿ���utf-8���룬
//���������Ҫ�жϵ��ַ���
//����ֵ�������u8����true ���򷵻�false
//�޸ļ�¼����
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
//��������u8togbk
//���ߣ��׶���
//���ڣ�2012.04.11
//���ܣ��õݹ��ָ��������ַ�����utf-8����ת����gbk�����ô����÷�ʽ 
//���������Ҫת���Ķ���
//����ֵ����
//�޸ļ�¼����
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
//��������get_token_info
//���ߣ��׶���
//���ڣ�2012.11.10
//���ܣ�������Ȩ��Ϣ��ѯ�ӿ� 
//���������$access_token:�û���Ȩ��access_token
//����ֵ����Ȩ��Ϣ
//�޸ļ�¼����
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
//��������do_post
//���ߣ���Ѷ����ƽ̨demo
//���ڣ�...
//���ܣ��ύ����
//���������$url Ҫ�ύ�ĵ�ַ
//          $date post�����ݣ����������飬Ҳ������string
//����ֵ���ύ�󷵻ص�����
//�޸ļ�¼����
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
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // ��֤���м��SSL�����㷨�Ƿ����
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
    $ret = curl_exec($ch);

    curl_close($ch);
    return $ret;
}

//==================================================================
//��������get_url_contents
//���ߣ���Ѷ����ƽ̨demo
//���ڣ�...
//���ܣ���ȡ�ƶ�ҳ�����ݣ�����getҳ���ύ
//���������$url Ҫ�ύ�ĵ�ַ
//����ֵ����ȡָ��ҳ������
//�޸ļ�¼����
/**
Ϊ�˼��ݻ�ȡ https������ֻ������file_get_contents�������ͼ���
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
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // ����֤֤����Դ�ļ��
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // ��֤���м��SSL�����㷨�Ƿ����
    curl_setopt($ch, CURLOPT_URL, $url);
    $result =  curl_exec($ch);
    curl_close($ch);

    return $result;
}
//==================================================================
//��������getXmlData
//���ߣ��ϸ�����
//���ڣ�...
//���ܣ�����xml
//���������xml��ʽ���ַ���
//����ֵ�������������
//�޸ļ�¼����
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
//��������get_object_vars_final
//���ߣ��ϸ�����
//���ڣ�...
//���ܣ��Ѷ���ת��������
//���������Ҫת���Ķ���
//����ֵ��ת���������
//�޸ļ�¼����
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
//��������filteremptyarr
//���ߣ��׶���
//���ڣ�2012.04.13
//���ܣ����˿�����
//���������$arr��Ҫ���˵�����
//          $mark:��־�Ƿ���ԭ���ļ�ֵ��1������ 0��������
//����ֵ�����˺������
//�޸ļ�¼����
//==================================================================
function filteremptyarr($arr,$mark=1){ //1���� 0������
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
//��������cs
//���ߣ��׶���
//���ڣ�2012.04.14
//���ܣ����һ�����飬��Ҫ���ڲ���
//���������$arr��Ҫ���������
//����ֵ����
//�޸ļ�¼����
//==================================================================
function cs($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
//==================================================================
//��������bai_strlen
//���ߣ��׶���
//���ڣ�2012.04.16
//���ܣ�����һ��GBK�ַ����ĳ���
//���������$str��Ҫ���Ե��ַ���
//����ֵ���ַ����ĳ���
//�޸ļ�¼����
//==================================================================
function bai_strlen($str){
	if(function_exists("mb_strlen")){
	return mb_strlen($str,"GBK");
	}else{
		$coun=0;
		for($i=0;$i<strlen($str);$i++){
			if(ord($str[$i])>127){
			//����
			$i++;
			}
			$coun++;
		}
		return $coun;
	}
}

//==================================================================
//��������bai_substr
//���ߣ��׶���
//���ڣ�2012.04.25
//���ܣ������ַ�����ȡ
//���������$str��Դ�ַ���
//          $len:Ҫ��ȡ�ĳ���
//����ֵ����ȡ����ַ���
//�޸ļ�¼����
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
			//����
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
//��������curl
//���ߣ��Ա�demo
//���ڣ�2012.11.09
//���ܣ�POST������
//���������$url�������ַ
//          $postFields:��������
//����ֵ����������
//�޸ļ�¼����
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



//��ȡ�����б�
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
//��ȡ��������
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


//����
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
