<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="zwglyhcz" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">账户管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">修改资料<span class="colorred">（注：客服信息将显示在用户端内请勿随意修改）</span></div>
        </div>
        <form action="{XZKJURL}/duanxination.php?action=setuserinfo" method="post" target="hiddeniframe">
        <div style="width:740px; padding-left:10px; padding-top:50px;">
        	
        	<div style="margin-top:50px; margin-left:130px; font-family:'微软雅黑'; font-size:16px;">
                <div>
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">客服专员姓名：</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><input class="inputtext"  name="username" id="username" value="{$userinfo[username]}" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入客服专员姓名..." /></div>
                </div>
                <div style="padding-top:70px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">客服联系电话：</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><input class="inputtext" name="sjh" value="{$userinfo[sjh]}" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="12" onKeyPress="this.style.color='black';" placeholder="请输入客服联系电话..."/></div>
                </div>
                <div style="padding-top:70px; margin-left:170px;">
                    <input type="submit" value="" style="width:105px; height:41px;background-image:url(baima/template/images/xgzlbczl.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            
        </div>
        </form>
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zhglxgzl.js" type="text/javascript"></script>


<!--{template footer}-->