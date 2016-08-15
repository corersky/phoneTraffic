<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="{XZKJURL}/useration.php?action=adduser" method="post" target="hiddeniframe">
<div id="mains">
	<div id="yhgltjyh" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">用户管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">添加用户</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
        	<div style="margin-top:50px; margin-left:130px; font-family:'微软雅黑'; font-size:16px;">
                <div>
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">用户名：</div><div class="fl" style="margin-left:53px; margin-top:-6px;"><input class="inputtext" name="username" id="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入用户名..." /></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">联系人电话：</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="sjh" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="12" onKeyPress="this.style.color='black';" placeholder="请输入联系人电话..."/></div>
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
                    <div class="fl" style="margin-left:47px;">营销专员：</div><div class="fl" style="margin-left:38px; margin-top:-6px;">
					<select name="yingxiaoid" id="yingxiaoid" style="width:200px;height:28px;border:#bbb 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; cursor:pointer;">
							<option value="0">公司</option>
						<!--{loop $yingxiaozyarr $id=>$value}-->
							<option value="{$id}">{$value}</option>
						<!--{/loop}-->
					</select>
					</div>
                </div>
				
				
                <div style="padding-top:50px;">
                    <div class="fl" style="margin-left:47px;">短信签名：</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="qianming" type="text" maxlength="10000" onKeyPress="this.style.color='black';" placeholder="请输入短信签名...(默认为用户名)"/></div>
                </div>
                <div style="padding-top:70px; margin-left:180px;">
                    <input class="v7" type="submit" value="" style="width:105px; height:41px;background-image:url(baima/template/images/tjyhtjyh.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            
        </div>
        
    </div>
</div>
</form>
<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/yhgltjyh.js" type="text/javascript"></script>

		

<!--{template footer}-->