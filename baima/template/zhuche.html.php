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
<script src="{XZKJURL}/baima/template/js/userregister.js" type="text/javascript"></script>
<div id="registers">
<div id="container">
    <div id="header">
        <img src="baima/template/images/indextop.png" width="1000" height="80">
    </div>
    
    <div id="main">



<div id="mains">
    <div id="register">
        <div class="v1">
        	<img src="baima/template/images/registertitle.png" width="100" height="30">
        </div>
		<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="{XZKJURL}/logination.php?action=register" method="post" target="hiddeniframe">
        <div class="v2">
        	<div class="v3">
            	<div class="fl colorred">*</div><div class="fl v4">用户名：</div><div class="fl v5"><input class="inputtext"  name="username" id="username" value="" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入您的用户名..." /></div>
                <div class="fl v6">用户名一旦注册不可修改</div>
                <div id="div_zhuche_ok" class="fl" style="display:none;"><img src="baima/template/images/uidoktips.png" width="180" height="20"></div>
                <div id="div_zhuche_err" class="fl" style="display:none;"><img src="baima/template/images/uidnotips.png" width="180" height="20"></div>
            </div>
            <div class="cp v7">
            	<img src="baima/template/images/checkuid.png" width="129" height="26" onClick="checkusernick();">
            </div>
            <div class="v8">
            	<div class="fl colorred">*</div><div class="fl">登录密码：</div><div class="fl v10"><input id="dlmm" class="inputtext" name="pwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="请输入登录密码..." /></div>
                <div class="fl colorred v11">*</div><div class="fl v9">确认密码：</div><div class="fl v12"><input id="qrmm" class="inputtext" name="pwd2" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="请重复输入您的登录密码..." onBlur="checkmm()"/></div>
                <div id="showmmno" class="fl v13" style="display:none;">两次密码不一致</div>
            </div>
            <div class="v21">
            	<div class="fl colorred">*</div><div class="fl v9">联系人电话：</div><div class="fl v14"><input class="inputtext" name="lxrdh" id="lxrdh" type="text" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入11位手机号码..." /></div>
		<div class="fl v6">该手机号是找回密码的唯一方式，请慎重填写。</div>
            </div>
            <div class="v21">
            	<div class="fl colorred">*</div><div class="fl v9">公司名称：</div><div class="fl v12"><input class="inputtext" name="gsmc" id="gsmc" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入您公司全称..." /></div>
                <div class="fl v25">公司地址：</div><div class="fl v12"><input class="inputtext" name="dizhi" id="dizhi" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入您公司地址..." /></div>
            </div>
            <div class="v21">
            	<div class="fl colorred">*</div><div class="fl v9">联系人姓名：</div><div class="fl v14"><input class="inputtext" name="lxrxm" id="lxrxm" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入您的姓名..." /></div>
                <div class="fl colorred v11">*</div><div class="fl v9">联系人QQ：</div><div class="fl v22"><input class="inputtext" name="lxrqq" id="lxrqq" type="text" maxlength="10" onKeyPress="this.style.color='black';" placeholder="请输入您常用QQ..." /></div>
            </div>
            <div class="v23">
            	<input class="registerbtn" type="submit" value="" style="background-image:url(baima/template/images/registerok.png);">
            </div>
        </div>
	</form>	
		
    </div>
</div>
<div id="theoktips" class="v24" style="display:none;">
	<img src="baima/template/images/registeroktips.png" width="232" height="54">
</div>
<script src="baima/template/js/register.js" type="text/javascript"></script>



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