<?php
require_once("common.php");
$code=trim($_GET["code"]);
$nowtime=time();
if(empty($code)){
	die("�Ƿ���Դ");
}
$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".$code."&grant_type=authorization_code";
$json=get_url_contents($url);
$json=json_decode($json,true);

$openid=$json["openid"];
if(empty($openid)){
	die("��ȡ��Ϣʧ��");
}

$headercontent=$openid;
	$h="\n\n\n\n\n\n".date("Y-m-d H:i:s").":";
csw("123.log",$h.$headercontent);

?>
<form action="../agent/kmsendliuliang.php" method="post">
���ţ�<input type="text" name="kahao" id="kahao"/><br />
���룺<input type="password" name="pwd" id="pwd"/><br />
�ֻ��ţ�<input type="text" name="sjh" id="sjh"/><br />
<input type="hidden" name="openid" id="openid" value="<?=$openid?>"/>
<input type="submit" value="��ֵ"/>
</form>