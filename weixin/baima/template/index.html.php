<!doctype html>
<html>
<head>
<title>短信服务平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="短信服务平台">
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
		<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
		<form action="{XZKJURL}/logination.php?action=login" method="post" target="hiddeniframe">
            <div class="pa">
                <img src="baima/template/images/loginborderbg.png" width="290" height="385">
            </div>
            <div class="pa">
                <div class="username">
                    <input class="usernametext" name="username" id="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="在此输入用户名..."  value="{$username}"/>
                </div>
                <div class="psd">
                    <input class="psdtext"  name="pwd" id="pwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="在此输入密码..." value="{$pwd}"/>
                </div>
                <div class="jzmm">
                    <input class="jzmmcheck" type="checkbox" name="jzmm" id="jzmm" value="1" <!--{if !empty($jzmm)}-->checked="checked"<!--{/if}-->>
                </div>
                <div class="wjmm">
                    <a href="zhaohuimima.php" target="_blank"><div class="wjmmarea"></div></a>
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

<script src="baima/template/js/index.js" type="text/javascript"></script>




    </div>
    <div id="footer">
        <div id="copyright">
            <p>Copyright 2011 郑州新中电子科技有限公司 版权所有 豫ICP备09014995号</p>
            <p>工作时间：周一至周五8:30-18:30（节假日除外）公司地址：郑州市健康路168号</p>
        </div>
    </div>
</div>
</div>

</body>
</html>