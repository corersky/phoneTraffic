<!--{template header}-->

<div id="mains">
	<div id="zwglyhcz" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">账务管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">用户充值</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:50px;">
        	
			<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="{XZKJURL}/useration.php?action=dxchongzhi" method="post" target="hiddeniframe">
        	<div style="margin-top:50px; margin-left:130px; font-family:'微软雅黑'; font-size:16px;">
                <div>
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">请输入充值用户名：</div><div class="fl" style="margin-left:14px; margin-top:-6px;"><input class="inputtext" name="username" id="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入充值用户名..." /></div>
                </div>
				
                <div style="padding-top:70px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">请输入充值条数：</div><div class="fl" style="margin-left:30px; margin-top:-6px;"><input class="inputtext" name="jine" id="jine" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入充值条数..."/></div><div class="fl" style="margin-left:10px;">条</div>
                </div>
				
				<div style="padding-top:70px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">请输入赠送条数：</div><div class="fl" style="margin-left:30px; margin-top:-6px;"><input class="inputtext" name="zengsongjine" id="zengsongjine" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入赠送条数..."/></div><div class="fl" style="margin-left:10px;">条</div>
                </div>
				
				
                <div style="padding-top:70px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">实收金额：</div><div class="fl" style="margin-left:78px; margin-top:-6px;"><input class="inputtext" name="shje" id="shje" type="text" onKeyPress="this.style.color='black';" placeholder="请输入实收金额..."/></div><div class="fl" style="margin-left:10px;">元</div>
                </div>
				<div style="padding-top:70px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">备注：</div><div class="fl" style="margin-left:110px; margin-top:-6px;"><input class="inputtext" name="beizhu" id="beizhu" type="text" onKeyPress="this.style.color='black';" placeholder="请输入备注..."/></div><div class="fl" style="margin-left:10px;"></div>
                </div>
				<div style="padding-top:70px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">充值类型：</div><div class="fl" style="margin-left:80px; margin-top:-6px;">
                    <span><input class="cp" type="radio" name="cztype" id="cztype" value="0" checked="checked"/>充值</span>
                    <span style="margin-left:30px;"><input class="cp" type="radio" name="cztype" id="cztype" value="1"/>扣费</span>
                    </div>
                </div>
				
				
                <div style="padding-top:70px; margin-left:180px;">
                    <input class="v7" type="submit" value="" style="width:105px; height:41px;background-image:url(baima/template/images/yhczqrcz.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
			</form>
			
            

        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zwglyhcz.js" type="text/javascript"></script>




<!--{template footer}-->