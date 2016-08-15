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
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="{XZKJURL}/index.php?action=login" method="post" target="hiddeniframe">

<div id="userinnersystem">
    <div id="container">
        <div id="mains">
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
</form>
<script src="baima/template/js/index.js" type="text/javascript"></script>

</body>
</html>