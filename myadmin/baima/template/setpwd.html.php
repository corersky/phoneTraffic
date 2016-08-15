<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="zhglxgmm" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">账户管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">修改密码</div>
        </div>
        
		<form action="{XZKJURL}/duanxination.php?action=setpwd" method="post" target="hiddeniframe">
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
        	<div class="v1">
                <div>
                    <div class="fl colorred">*</div><div class="fl v2">原密码：</div><div class="fl v4"><input class="inputtext" name="jiupwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="请输入原密码..." /></div>
                </div>
                <div class="v8">
                    <div class="fl colorred">*</div><div class="fl v2">新密码：</div><div class="fl v4"><input id="xmm" class="inputtext" name="pwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="请输入新密码..." onBlur="checkmm()"/></div>
                </div>
                <div class="v8">
                    <div class="fl colorred">*</div><div class="fl v3">确认密码：</div><div class="fl v4"><input id="qrmm" class="inputtext" name="pwd2" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="请重复输入您的新密码..." onBlur="checkmm()"/></div>
                    <div id="showmmno" class="fl v5" style="display:none;">两次密码不一致</div>
                </div>
                <div class="v6">
                    <input class="v7" type="submit" value="" style="width:105px; height:41px;background-image:url(baima/template/images/xgmmbcmm.png);">
                </div>
            </div>
            
        </div>
        </form>
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zhglxgmm.js" type="text/javascript"></script>

<!--{template footer}-->