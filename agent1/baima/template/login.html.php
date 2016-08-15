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

<style>
#index .inputtext{color:#666;width:220px;height:30px; font-size:14px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
</style>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="{XZKJURL}/index.php?action=login" method="post" target="hiddeniframe">
<div id="userinnersystem">
    <div id="container">
        <div id="mains" style="margin-left:0px;">
            <div id="index">
                <div  style="background:url(baima/template/images/index.jpg) no-repeat; width:1000px; height:562px;">
                	<div style="position:absolute; margin-left:440px; margin-top:232px;">
                    	<input class="inputtext" name="username" type="" maxlength="18" onKeyPress="this.style.color='black';" placeholder="请输入用户名..." />
                    </div>
                    <div style="position:absolute; margin-left:440px; margin-top:292px;">
                    	<input class="inputtext" name="pwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="请输入密码..." />
                    </div>
                    <div style="position:absolute; margin-left:470px; margin-top:360px;">
					<input type="hidden" name="yzm" id="yzm" value="{$yzm}"/>
                    	<input class="v7" type="submit" value="" style="width:112px; height:34px;background-image:url(baima/template/images/login.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="baima/template/js/index.js" type="text/javascript"></script>
</form>
</body>
</html>