<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="dxgltjyh" style="margin-bottom:30px;">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：用户管理-添加用户</div>
        </div>
		<form action="{XZKJURL}/useration.php?action=adduser" method="post" target="hiddeniframe">
        <div class="v1">
            <div style="width:740px; padding-left:10px; padding-top:20px;">
                
                <div style="margin-top:50px; margin-left:130px; font-family:'微软雅黑'; font-size:16px;">
                    <div>
                        <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">用户名：</div><div class="fl" style="margin-left:53px; margin-top:-6px;"><input class="inputtext" name="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入用户名..." /></div>
                    </div>
                    <div style="padding-top:50px;">
                        <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">联系人电话：</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="sjh" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入联系人电话..."/></div>
                    </div>
                    <div style="padding-top:50px;">
                        <div class="fl" style="margin-left:47px;">联系人姓名：</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="lxrxm" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入联系人姓名..."/></div>
                    </div>
                    <div style="padding-top:50px;">
                        <div class="fl" style="margin-left:47px;">联系人QQ：</div><div class="fl" style="margin-left:28px; margin-top:-6px;"><input class="inputtext" name="lxrqq" type="text" maxlength="10" onKeyPress="this.style.color='black';"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="请输入联系人QQ..."/></div>
                    </div>
                    <div style="padding-top:50px;">
                        <div class="fl" style="margin-left:47px;">公司名称：</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="gsmc" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入公司名称..."/></div>
                    </div>
                    <div style="padding-top:50px;">
                        <div class="fl" style="margin-left:47px;">公司地址：</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="dizhi" type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="请输入公司地址..."/></div>
                    </div>
					
					 <div style="padding-top:50px;">
                        <div class="fl" style="margin-left:47px;"><font color="#FF0000">注：新开用户的默认密码为：123123，请通过<a href="http://duanxin.xzkj168.cn" target="_blank">http://duanxin.xzkj168.cn</a>平台登陆使用。</font></div>
                    </div>
					
                    <div style="padding-top:70px; margin-left:180px;">
                        <input class="v7" type="submit" value="" style="width:105px; height:41px;background-image:url(baima/template/images/tjyhtjyh.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                </div>
                
            </div>
        </div>
        </form>
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxgltjyh.js" type="text/javascript"></script>


<!--{template footer}-->