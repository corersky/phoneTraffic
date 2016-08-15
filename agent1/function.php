<?php
function error($msg){
	die("<script>alert('".$msg."');window.location.href='".XZKJURL."/index.php';</script>");
}
function exit_location_href(){
	die("<script>window.location.href='".XZKJURL."/index.php';</script>");
}
//==================================================================
//��������is_utf8
//���ߣ�����ժȡ
//���ڣ�2012.04.11
//���ܣ�����ָ���ַ����Ƿ���utf-8���룬
//���������Ҫ�жϵ��ַ���
//����ֵ�������u8����true ���򷵻�false
//�޸ļ�¼����
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
//��������get_url_contents
//���ߣ���Ѷ����ƽ̨demo
//���ڣ�...
//���ܣ���ȡ�ƶ�ҳ�����ݣ�����getҳ���ύ
//���������$url Ҫ�ύ�ĵ�ַ
//����ֵ����ȡָ��ҳ������
//�޸ļ�¼����
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
//��������packagepag
//���ߣ��׶���
//���ڣ�2012.04.12
//���ܣ���װ��ҳ
//���������$url����ҳ��ַ
//          $page:��ǰҳ��
//          $pagesize:ÿҳ��С
//          $zpage:��ҳ��
//����ֵ��������Ϣ����
//�޸ļ�¼����
//==================================================================
function packagepag($url,$page,$zpage){
		$rearr=array();
     $rearr["sy"]="<a href=\"".$url."&page=1"."\">��ҳ</a>";
	 $rearr["shangy"]="<a href=\"".$url."&page=".($page-1>=1?($page-1):1)."\">��ҳ</a>";
	 $rearr["xiay"]="<a href=\"".$url."&page=".($page+1<=$zpage?($page+1):$zpage)."\">��ҳ</a>";
	 $rearr["weiy"]="<a href=\"".$url."&page=$zpage"."\">βҳ</a>";
    
	
	return $rearr;
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

function csw($f,$somecontent){
	$handle = fopen($f, 'a');
    fwrite($handle, $somecontent);
    fclose($handle);
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
//��������bai_compressionimg
//���ߣ��׶���
//���ڣ�2012.04.23
//���ܣ��ȱ�ѹ��ͼƬ 
//���������$filename:Դ�ļ���ַ
//           $yswidth://ѹ�����
//           $ysheight://ѹ�����
//           $ysfilename://ѹ�����ļ�����ĵ�ַ
//����ֵ���ɹ� true ʧ�� false
//�޸ļ�¼����
//==================================================================
function bai_compressionimg($filename,$yswidth,$ysheight,$ysfilename){
if(empty($filename) || empty($yswidth) || empty($ysheight) || empty($ysfilename)){
 return false;//��������
}
 $_imageTypes = array (1 => "gif",2 => "jpeg",3 => "png",6=>"bmp");//ͼƬ���ͱ�ʶ
if (!$imagesize = getimagesize($filename)) {
    return false;//ָ���ļ��޷���ȡ
 }

list($width,$height,$type) = $imagesize;//��ȡͼƬ�Ŀ������ ���ͱ�ʶ
$imagefunction = "imagecreatefrom".$_imageTypes[$type];
  if(function_exists($imagefunction)){
	  $imghandle=$imagefunction($filename);//����ԭͼ
	  if(!$imghandle){
	     return false;//ͼƬ��ʧ��
	  }
  }else{
   return false;//ͼƬ���ʹ���
  }
$image_p = imagecreatetruecolor($yswidth, $ysheight);//�½�ѹ�����ͼƬ 
if(imagecopyresampled($image_p, $imghandle, 0, 0, 0, 0, $yswidth, $ysheight, $width, $height)){
	if(imagejpeg($image_p, $ysfilename,100)){
	  imagedestroy($image_p);
	  return true;//ѹ���ɹ�
	}else{
	   return false;//ѹ���걣��ʧ��
	}
	
}else{
 return false;//ѹ��ʧ��
} 
 return false;//δ֪ʧ��ԭ��
}









/*
����
*/
function authcode($string, $key = '') {
$string="".$string;
    $ckey_length = 4; // �����Կ���� ȡֵ 0-32;
    $key = md5($key ? $key : "57342172");//������ܳף���md5�ܳף����û����md5 57342172
 $sj =  substr(md5(microtime()), -$ckey_length);//�漴��λ�ַ���
 $kk=md5($key.$sj);
 $kk_length = strlen($kk);//��ʵ������Ҳ֪����32 
 $string_length = strlen($string);
 $r="";
 for($i = 0; $i < $string_length; $i++) {
 $r .= chr(ord($string[$i]) ^ ($kk[$i%$kk_length]));
 }
 return $sj.str_replace('=', '', base64_encode($r));
}
/*
����
*/
function authcodej($string, $key = '') {
$string="".$string;
    $ckey_length = 4; // �����Կ���� ȡֵ 0-32; �ͼ��ܺ���Ҫ����һ��
    $key = md5($key ? $key : "57342172");//������ܳף���md5�ܳף����û����md5 57342172
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


//����ͨѶ¼���Ա
function updatetxlzunum($zuid){
	global $con;
	$sql="select count(*) as num from `txluser` where zuid=".$zuid;
	$re=$con->query($sql);
	$zage=mysql_fetch_array($re);
	$ztiao=intval($zage["num"]);//������
	
	$sql="UPDATE txlzu set num=".$ztiao." where id=".$zuid;
	$re=$con->query($sql);
	return $ztiao;
}



//��ȡָ���û��ĳ�ֵ���
function getusercznum($uid){
	global $con;
	//��ȡ�ۼƳ�ֵ��� ��ֵ���� 0�Զ���ֵ 1�ֶ���ֵ 2�ײͰ��·��� 3�ײ�������Ѵﲻ���۷�  4����ʧ�ܷ���cztype
	$sql="select SUM(jine) as num from `chongzhilog` where uid=".$uid." and zt=1 and cztype in(0,1,2)";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zjine=floatval($row["num"]);//�ܳ�ֵ���
	return $zjine;
}


//�û���ֵ
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
	$re=$con->query($sql);//�����û����
	
	return true;
}

//�û���ֵ �ֶ���ֵ�������޸�ҵ����������
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
	$re=$con->query($sql);//�����û����
	
	return true;
}


//�û���ֵ �ֶ��۷ѣ������޸�ҵ����������
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
	$re=$con->query($sql);//�����û����
	
	return true;
}

function getuserjiage($id){
	global $con;
	$sql="select jiage from `user` where id=".$id;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	return $row["jiage"];
}


//��ȡ�ֻ��Ŷ�
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


//���ݶ������������˿��˿�
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
	
	//���·���״̬
	$sql="UPDATE liuliangdaili_log set istk=1 where id=".$orderinfo["id"];
	$re=$con->query($sql);
	
	//�������
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//�����û����
}



function getsjhinfo($sjh){
    $ch = curl_init();
    $url = 'http://apis.baidu.com/apistore/mobilephoneservice/mobilephone?tel='.$sjh;
    $header = array(
        'apikey: eb93be9a57ac944145be6a685b39ae15',
    );
    // ���apikey��header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // ִ��HTTP����
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
		//���ñ��ó���
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
    // ���apikey��header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // ִ��HTTP����
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

