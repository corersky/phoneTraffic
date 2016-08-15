<?
require_once("common.php");
$headercontent=file_get_contents("php://input");
$h="\n\n\n\n\n\n".date("Y-m-d H:i:s").":";
csw("callback.log",$h.$headercontent);

if(checkSignature()){
echo $_GET["echostr"];
}else{
echo "error";
}

function checkSignature()
{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
	$token = "xinzhongkejibai5734asdfghjkloiuy";
	$tmpArr = array($token, $timestamp, $nonce);
	sort($tmpArr, SORT_STRING);
	$tmpStr = implode( $tmpArr );
	$tmpStr = sha1( $tmpStr );
	
	if( $tmpStr == $signature ){
		return true;
	}else{
		return false;
	}
}
?>