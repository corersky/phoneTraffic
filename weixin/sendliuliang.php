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
<html>
<head>
<title>充值界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=360, user-scalable=no"/>
<style type="text/css">
<!--
@media only screen
and (min-device-width : 320px)
and (max-device-width : 1024px) {
	select:focus,
	textarea:focus,
	input:focus {font-size: 36px !important;
	}
}

#left {
	position:absolute;
	left:0px;
	top:623px;
	width:303px;
	height:456px;
}
#numcard {
	position:absolute;
	left:303px;
	top:622px;
	width:614px;
	height:120px;
}
#right {
	position:absolute;
	left:917px;
	top:623px;
	width:163px;
	height:456px;
}
#mid1 {
	position:absolute;
	left:303px;
	top:743px;
	width:614px;
	height:22px;
}
#password {
	position:absolute;
	left:303px;
	top:764px;
	width:614px;
	height:120px;
}
#mid2 {
	position:absolute;
	left:303px;
	top:885px;
	width:614px;
	height:21px;
}
#phonenumber {
	position:absolute;
	left:303px;
	top:905px;
	width:614px;
	height:120px;
}
#mid3 {
	position:absolute;
	left:303px;
	top:1026px;
	width:614px;
	height:53px;
}
#el {
	position:absolute;
	left:0px;
	top:1078px;
	width:151px;
	height:791px;
}
#ip {
	position:absolute;
	left:151px;
	top:1078px;
	width:779px;
	height:120px;
}
#er {
	position:absolute;
	left:930px;
	top:1078px;
	width:150px;
	height:791px;
}
#end {
	position:absolute;
	left:151px;
	top:1198px;
	width:779px;
	height:671px;
}
#notice{	
    position: absolute;
    left: 0px;
    top: 56px;
    width: 779px;
    height: 100px;
    color: #666;
    font-size: 34px;
}
.num-box {
margin: 0 0 20px 0;
height: 40px;
border: 1px solid #dedede;
border-radius: 3px;
background-color: #fcfcfc;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
dl {
display: block;
-webkit-margin-before: 1em;
-webkit-margin-after: 1em;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
}
dd {
display: block;
-webkit-margin-start: 40px;
}
.num-ipt {
width: 100%;
height: 120px;
line-height: normal;
margin-top: 1px;
border: none;
font-size: 46px;
color: #666;
background: 0;
}
input {
vertical-align: middle;
resize: none;
font-family: inherit;
font-size: inherit;
font-style: inherit;
font-weight: inherit;
cursor: auto;
font: -webkit-small-control;
letter-spacing: normal;
word-spacing: normal;
text-transform: none;
text-indent: 0px;
text-shadow: none;
display: inline-block;
text-align: start;
-webkit-writing-mode: horizontal-tb;
}
-->
</style>
</head>
<body style="background-color:#FFFFFF; margin-top: 0px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px;">
<div id="body">
<form action="../agent/kmsendliuliangcode.php" method="post">
	<div id="head">
		<img src="images/c1.jpg" width="1080" height="623" alt="">
	</div>
	<div id="left">
		<img src="images/c2.jpg" width="303" height="456" alt="">
	</div>
	<div id="numcard">
<input type="tel" maxlength="30"  name="kahao" ng-model="recharge.phone" id="number" ng-focus="showNumberInput();" placeholder="请输入卡号" class="num-ipt">
	</div>
  <div id="right">
		<img src="images/c4.jpg" width="163" height="456" alt="">
  </div>
	<div id="mid1">
		<img src="images/c5.jpg" width="614" height="22" alt="">
	</div>
	<div id="password">
	  <input type="tel"  maxlength="30" id="cardnumber" ng-keyup="isHasCard()" name="pwd" ng-model="recharge.cardPwd"placeholder="请输入密码" class="num-ipt">
	</div>
	<div id="mid2">
		<img src="images/c6.jpg" width="614" height="21" alt="">
	</div>
	<div id="phonenumber">
	  <input type="tel" maxlength="30"  name="sjh" ng-model="recharge.phone" id="number" ng-focus="showNumberInput();" placeholder="请输入您要充值的手机号" class="num-ipt">
	</div>
	<div id="mid3">
		<img src="images/c7.jpg" width="614" height="53" alt="">
	</div>
	<div id="el">
		<img src="images/c8.jpg" width="151" height="791" alt="">
	</div>
	<div id="ip">
	<input type="hidden" name="openid" id="openid" value="<?=$openid?>"/>
	  <input style="background-image: url(images/c9.jpg);width: 100%;height: 100%;border: 0;" type="submit" name="submit" id="submit" value="">
	</div>
	<div id="er">
		<img src="images/c10.jpg" width="150" height="791" alt="">
	</div>
	<div id="end" style="background-image: url(images/c11.jpg);">
		<div id="notice"><p>流量充值到账时间为24小时内,可致电10086查询。</p></div>
	</div>
	
</form>
	
</div>


</body>
</html>