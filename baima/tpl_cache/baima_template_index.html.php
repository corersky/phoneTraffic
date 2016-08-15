<!doctype html>
<html>
<head>
<title>短信服务平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="短信服务平台">
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="Bookmark" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="baima/template/css/style.css" />
</head>
<body>

<div id="indexs">
<div id="container">
    <div id="header">
        <img src="baima/template/images/indextop.png" width="1000" height="80">
    </div>
    
    <div id="main">



<div id="mains">
    <div id="index">
        <div id="indexbox" style="float:left;">
            <pre class="prev">&nbsp;</pre>
            <pre class="next">&nbsp;</pre>
            <ul>
              <li><img src="baima/template/images/index2.png"></li>
              <li><img src="baima/template/images/index1.png"></li>
              <li><img src="baima/template/images/index3.png"></li>
              <li><img src="baima/template/images/index5.png"></li>
              <li><img src="baima/template/images/index4.png"></li>
            </ul>
        </div>
        <div class="indexmain">
            <div style="position:absolute; width:340px; height:70px; margin-top:-85px; margin-left:-10px;">
            	<div id="showindexqq1" class="cp" style="position:absolute; margin-left:210px; width:130px; height:70px;" onMouseMove="showindexqq2()">
                	<img src="baima/template/images/indexqq1.png" width="130" height="70">
                </div>
                <div id="showindexqq2" style="position:absolute; display:none;" onMouseMove="showindexqq2()" onMouseOut="showindexqq1()">
                	<div style=" padding-top:-50px;"><img src="baima/template/images/indexqq2.png" width="340" height="70" onMouseMove="showindexqq2()" onMouseOut="showindexqq1()"></div>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1398967845&site=qq&menu=yes"><div class="fl cp" style="position:absolute; z-index:100; margin-top:-65px; width:80px; height:50px; margin-left:55px;"></div></a>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1657439480&site=qq&menu=yes"><div class="fl cp" style="position:absolute; z-index:100; margin-top:-65px; width:80px; height:50px; margin-left:148px;"></div></a>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=820394935&site=qq&menu=yes"><div class="fl cp" style="position:absolute; z-index:100; margin-top:-65px; width:80px; height:50px; margin-left:242px;"></div></a>
                </div>
            </div>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="<?=XZKJURL?>/logination.php?action=login" method="post" target="hiddeniframe">
            <div class="pa">
                <img src="baima/template/images/loginborderbg.png" width="290" height="385">
            </div>
            <div class="pa">
                <div class="username">
                    <input class="usernametext" name="username" id="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="在此输入用户名..."  value="<?=$username?>"/>
                </div>
                <div class="psd">
                    <input class="psdtext"  name="pwd" id="pwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="在此输入密码..." value="<?=$pwd?>"/>
                </div>
                <div class="jzmm">
                    <input class="jzmmcheck" type="checkbox" name="jzmm" id="jzmm" value="1" <?php if(!empty($jzmm)) { ?>checked="checked"<?php } ?>>
                </div>
                <div class="wjmm">
                    <a href="zhaohuimima.php"><div class="wjmmarea"></div></a>
                </div>
                <div class="login">
                    <input class="loginbtn" type="submit" value="" style="background-image:url(baima/template/images/login.png);">
                </div>
                <div class="wysy">
                    <a href="zhuche.php"><img src="baima/template/images/use.png" width="200" height="70"></a>
                </div>
            </div>
</form>

        </div>
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/index.js" type="text/javascript"></script>
<script>
function showindexqq2()
{
document.getElementById("showindexqq1").style.display="none";
document.getElementById("showindexqq2").style.display="";
/*$("#showindexqq1").fadeOut();
$("#showindexqq2").fadeIn();*/
}
function showindexqq1()
{
document.getElementById("showindexqq2").style.display="none";
document.getElementById("showindexqq1").style.display="";
/*$("#showindexqq2").fadeOut();
$("#showindexqq1").fadeIn();*/
}
</script>



    </div>
    <div id="footer">
        <div id="copyright">
            <p>Copyright 2011 郑州新中电子科技有限公司 版权所有 豫ICP备09015928号</p>
            <p>工作时间：周一至周五8:30-18:30（节假日除外）公司地址：郑州市健康路168号
<script type="text/javascript" src="http://js.tongji.linezing.com/3594310/tongji.js"></script><noscript><a href="http://www.linezing.com"><img src="http://img.tongji.linezing.com/3594310/tongji.gif"/></a></noscript>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e90a259d24f0277f8c0264f3b9ecb609";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</p>

        </div>
    </div>
</div>
</div>

</body>
</html>