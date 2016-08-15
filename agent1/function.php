<?php
function error($msg){
	die("<script>alert('".$msg."');window.location.href='".XZKJURL."/index.php';</script>");
}
function exit_location_href(){
	die("<script>window.location.href='".XZKJURL."/index.php';</script>");
}
//==================================================================
//函数名：is_utf8
//作者：网上摘取
//日期：2012.04.11
//功能：返回指定字符串是否是utf-8编码，
//输入参数：要判断的字符串
//返回值：如果是u8返回true 否则返回false
//修改记录：无
//==================================================================
function is_utf8($liehuo_net) 
{ 
	if (preg_match("/^([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}/",$liehuo_net) == true || preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){1}$/",$liehuo_net) == true || preg_match("/([".chr(228)."-".chr(233)."]{1}[".chr(128)."-".chr(191)."]{1}[".chr(128)."-".chr(191)."]{1}){2,}/",$liehuo_net) == true) 
	{ 
		return true; 
	} 
	else 
	{ 
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
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    curl_setopt($ch, CURLOPT_POST, TRUE); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($ch, CURLOPT_URL, $url);
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
//==================================================================
function get_url_contents($url)
{
    if (ini_get("allow_url_fopen") == "1")
        return file_get_contents($url);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
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
//函数名：packagepag
//作者：白东升
//日期：2012.04.12
//功能：封装分页
//输入参数：$url：分页网址
//          $page:当前页数
//          $pagesize:每页大小
//          $zpage:总页数
//返回值：订购信息数组
//修改记录：无
//==================================================================
function packagepag($url,$page,$zpage){
		$rearr=array();
     $rearr["sy"]="<a href=\"".$url."&page=1"."\">首页</a>";
	 $rearr["shangy"]="<a href=\"".$url."&page=".($page-1>=1?($page-1):1)."\">上页</a>";
	 $rearr["xiay"]="<a href=\"".$url."&page=".($page+1<=$zpage?($page+1):$zpage)."\">下页</a>";
	 $rearr["weiy"]="<a href=\"".$url."&page=$zpage"."\">尾页</a>";
    
	
	return $rearr;
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

function csw($f,$somecontent){
	$handle = fopen($f, 'a');
    fwrite($handle, $somecontent);
    fclose($handle);
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
//函数名：bai_compressionimg
//作者：白东升
//日期：2012.04.23
//功能：等比压缩图片 
//输入参数：$filename:源文件地址
//           $yswidth://压缩后宽
//           $ysheight://压缩后高
//           $ysfilename://压缩后文件保存的地址
//返回值：成功 true 失败 false
//修改记录：无
//==================================================================
function bai_compressionimg($filename,$yswidth,$ysheight,$ysfilename){
if(empty($filename) || empty($yswidth) || empty($ysheight) || empty($ysfilename)){
 return false;//参数错误
}
 $_imageTypes = array (1 => "gif",2 => "jpeg",3 => "png",6=>"bmp");//图片类型标识
if (!$imagesize = getimagesize($filename)) {
    return false;//指定文件无法读取
 }

list($width,$height,$type) = $imagesize;//获取图片的宽高类型 类型标识
$imagefunction = "imagecreatefrom".$_imageTypes[$type];
  if(function_exists($imagefunction)){
	  $imghandle=$imagefunction($filename);//载入原图
	  if(!$imghandle){
	     return false;//图片打开失败
	  }
  }else{
   return false;//图片类型错误
  }
$image_p = imagecreatetruecolor($yswidth, $ysheight);//新建压缩后的图片 
if(imagecopyresampled($image_p, $imghandle, 0, 0, 0, 0, $yswidth, $ysheight, $width, $height)){
	if(imagejpeg($image_p, $ysfilename,100)){
	  imagedestroy($image_p);
	  return true;//压缩成功
	}else{
	   return false;//压缩完保存失败
	}
	
}else{
 return false;//压缩失败
} 
 return false;//未知失败原因
}









/*
加密
*/
function authcode($string, $key = '') {
$string="".$string;
    $ckey_length = 4; // 随机密钥长度 取值 0-32;
    $key = md5($key ? $key : "57342172");//如果有密匙，则md5密匙，如果没有则md5 57342172
 $sj =  substr(md5(microtime()), -$ckey_length);//随即四位字符串
 $kk=md5($key.$sj);
 $kk_length = strlen($kk);//其实不用求也知道是32 
 $string_length = strlen($string);
 $r="";
 for($i = 0; $i < $string_length; $i++) {
 $r .= chr(ord($string[$i]) ^ ($kk[$i%$kk_length]));
 }
 return $sj.str_replace('=', '', base64_encode($r));
}
/*
解密
*/
function authcodej($string, $key = '') {
$string="".$string;
    $ckey_length = 4; // 随机密钥长度 取值 0-32; 和加密函数要保持一致
    $key = md5($key ? $key : "57342172");//如果有密匙，则md5密匙，如果没有则md5 57342172
 $sj=substr($string, 0, $ckey_length);
 $kk=md5($key.$sj);
 $kk_length = strlen($kk);
 $aa=substr($string, $ckey_length);
 $string=base64_decode($aa);
 $string_length = strlen($string);
 $r="";
 for($i = 0; $i < $string_length; $i++) {
 $r .= chr(ord($string[$i]) ^ ($kk[$i%$kk_length]));
 }
 return $r;
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



function GetIP()
{
	if(!empty($_SERVER["HTTP_CLIENT_IP"]))
	   $cip = $_SERVER["HTTP_CLIENT_IP"];
	else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
	   $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	else if(!empty($_SERVER["REMOTE_ADDR"]))
	   $cip = $_SERVER["REMOTE_ADDR"];
	else
	   $cip = false;
	return $cip;
}

function uidtonick($id){
	global $con;
	$sql="select username from `user` where id=".$id;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	return $row["username"];
}

function nicktouid($nick){
	global $con;
	$sql="select id,username from `user` where username='".$nick."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	return $row["id"];
}

function sjhtoxingming($uid,$sjh){
	global $con;
	if(empty($uid) || empty($sjh)){
		return false;
	}
	
	$sql="select xm from `txluser` where uid=".$uid." and sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	return $row["xm"];
}


//更新通讯录组成员
function updatetxlzunum($zuid){
	global $con;
	$sql="select count(*) as num from `txluser` where zuid=".$zuid;
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//总条数
	
	$sql="UPDATE txlzu set num=".$ztiao." where id=".$zuid;
	$re=$con->query($sql);
	return $ztiao;
}



//获取指定用户的充值金额
function getusercznum($uid){
	global $con;
	//获取累计充值金额 充值类型 0自动充值 1手动充值 2套餐按月返还 3套餐最低消费达不到扣费  4发送失败返还cztype
	$sql="select SUM(jine) as num from `chongzhilog` where uid=".$uid." and zt=1 and cztype in(0,1,2)";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zjine=floatval($row["num"]);//总充值金额
	return $zjine;
}


//用户充值
function userdxchongzhi($uid,$jine,$cztype,$czuid=-1){
	global $con;
	$jine=floatval($jine);
	$inactiv=array(
			'uid' =>$uid,
			'tid'=>0, 
			'jine'=>$jine, 
			'cztype' =>$cztype,
			'czuid' =>$czuid,
			'zt' =>1, 
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhilog",$inactiv);
	$sql="UPDATE user set dxnum=dxnum+".$jine." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	
	return true;
}

//用户充值 手动充值，后期修改业务需求新增
function userdxchongzhi_sdcz($uid,$jine,$cztype,$czuid,$shje,$beizhu){
	global $con;
	$jine=floatval($jine);
	$inactiv=array(
			'uid' =>$uid,
			'tid'=>0, 
			'jine'=>$jine, 
			'cztype' =>$cztype,
			'czuid' =>$czuid,
			'zt' =>1, 
			'shje' =>$shje,
			'beizhu' =>$beizhu,
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhilog",$inactiv);
	
	$sql="UPDATE user set dxnum=dxnum+".$jine." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	
	return true;
}


//用户充值 手动扣费，后期修改业务需求新增
function userdxchongzhi_sdkf($uid,$jine,$cztype,$czuid,$shje,$beizhu){
	global $con;
	$jine=floatval($jine);
	$inactiv=array(
			'uid' =>$uid,
			'tid'=>0, 
			'jine'=>$jine, 
			'cztype' =>$cztype,
			'czuid' =>$czuid,
			'zt' =>1, 
			'shje' =>$shje,
			'beizhu' =>$beizhu,
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhilog",$inactiv);
	$sql="UPDATE user set dxnum=dxnum-".$jine." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	
	return true;
}

function getuserjiage($id){
	global $con;
	$sql="select jiage from `user` where id=".$id;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	return $row["jiage"];
}


//获取手机号段
function getsjhdgs($hd){
	global $con;
	$hd="".$hd;

	if(strlen($hd)!=4){
		return -1;
	}
	$sql="select gs from `tool_haoduan` where hd='".$hd."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		return -1;
	}
	return intval($row["gs"]);
}


//根据订单给代理商退款退款
function liuliang_ordererraction_id($id){
	global $con;
	$time=time()-60*60*24*30;
	$sql="select * from `liuliangdaili_log` where id=".$id." and zt=2 and istk=0";
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$uid=$orderinfo["uid"];
	
	$shje=floatval($orderinfo["shje"]);
	if(empty($uid) && ($shje<0)){
		return false;
	}
	
	//更新返款状态
	$sql="UPDATE liuliangdaili_log set istk=1 where id=".$orderinfo["id"];
	$re=$con->query($sql);
	
	//返还金额
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
}



function getsjhinfo($sjh){
    $ch = curl_init();
    $url = 'http://apis.baidu.com/apistore/mobilephoneservice/mobilephone?tel='.$sjh;
    $header = array(
        'apikey: eb93be9a57ac944145be6a685b39ae15',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,3);
	curl_setopt($ch, CURLOPT_TIMEOUT,3);
	
    $res = curl_exec($ch);
	curl_close($ch);
    $a=json_decode($res,true);
	u8togbk($a);
	$rearr=$a["retData"];
	
	$province=trim($rearr["province"]);
	$city=trim($rearr["city"]);
	if((strlen($province)<=2) || (strlen($city)<=2)){
		//启用备用程序
		$a=getsjhinfo_beiyong($sjh);
		$rearr["province"]=$a["prov"];
		$rearr["city"]=$a["city"];
	}
	
	return $rearr;
}


function getsjhinfo_beiyong($sjh){
    $ch = curl_init();
    $url = 'http://apis.baidu.com/showapi_open_bus/mobile/find?num='.$sjh;
    $header = array(
        'apikey: eb93be9a57ac944145be6a685b39ae15',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,3);
	curl_setopt($ch, CURLOPT_TIMEOUT,3);
	
    $res = curl_exec($ch);
	curl_close($ch);
    $a=json_decode($res,true);
	u8togbk($a);
	$rearr=$a["showapi_res_body"];
	return $rearr;
}

