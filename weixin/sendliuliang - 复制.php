<?php
require_once("common.php");
$code=trim($_GET["code"]);
$nowtime=time();
if(empty($code)){
	die("非法来源");
}
$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".$code."&grant_type=authorization_code";
$json=get_url_contents($url);
$json=json_decode($json,true);

$openid=$json["openid"];
if(empty($openid)){
	die("获取信息失败");
}

$headercontent=$openid;
	$h="\n\n\n\n\n\n".date("Y-m-d H:i:s").":";
csw("123.log",$h.$headercontent);

?>
<form action="../agent/kmsendliuliang.php" method="post">
卡号：<input type="text" name="kahao" id="kahao"/><br />
密码：<input type="password" name="pwd" id="pwd"/><br />
手机号：<input type="text" name="sjh" id="sjh"/><br />
<input type="hidden" name="openid" id="openid" value="<?=$openid?>"/>
<input type="submit" value="充值"/>
</form>