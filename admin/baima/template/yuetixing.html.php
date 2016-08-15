<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="tztxzdtx" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">通知提醒</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">自动提醒</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:50px;">
        	<form action="{XZKJURL}/useration.php?action=setyuetixing" method="post" target="hiddeniframe">
        	<div style="margin-top:10px; margin-left:50px; font-family:'微软雅黑'; font-size:16px; font-weight:bold;">
            	<div>
                    <div class="fl">提醒使用状态：</div><div class="fl" style="margin-left:10px;">
					<!--{if empty($yuetixinginfo['zt'])}-->
					关闭
					<!--{else}-->
					开启
					<!--{/if}-->		
					</div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl">通知发送对象：</div><div class="fl" style="margin-left:10px;">短信余额不足</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><input class="inputtext" name="yue" id="yue" value="{$yuetixinginfo[yue]}" type="text" maxlength="20" onKeyPress="this.style.color='black';" /></div><div class="fl" style="margin-left:10px;">元的用户</div>
                </div>
                <div style="margin-left:120px;">
                    <div style="padding-top:40px; font-weight:300; font-size:15px;">
                        <div class="fl"><input type="checkbox" class="cp" name="shybcz" id="shybcz" value="1" <!--{if !empty($yuetixinginfo['shybcz'])}-->checked="checked"<!--{/if}-->></div><div class="fl" style="margin-left:5px;">三个月以上不充值用户不再发送余额不足提醒</div>
                    </div>
                    <div style="padding-top:30px; font-weight:300; font-size:15px;">
                        <div class="fl"><input type="checkbox" class="cp" name="mytxyc" id="mytxyc" value="1" <!--{if !empty($yuetixinginfo['mytxyc'])}-->checked="checked"<!--{/if}-->></div><div class="fl" style="margin-left:5px;">一个用户每个月只发送一次余额不足提醒</div>
                    </div>
                </div>
                <div id="showthesms" style="padding-top:50px;">
                    <div class="fl">通知发送内容：</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><textarea name="nei" style="color:#666;width:480px;height:80px; font-size:16px; padding:10px; resize: none; background-color:#FFF; line-height:20px; border:#bbb 1px solid; outline:none;" maxlength="67" placeholder="请输入通知发送内容..." onpropertychange="if(value.length>67) value=value.substr(0,67)" onKeyPress="this.style.color='black';">{$yuetixinginfo[nei]}</textarea></div>
                    <div style="position:absolute; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:300; color:#b3b3b3; margin-top:75px; margin-left:580px;">
                    	<span id="getsmszishu">0</span>/67
                    </div>
                </div>
                
                
				
             
                
                <div style="padding-top:130px; margin-left:150px;">
                	<input type="submit" name="submitname" value="保存并开启"/>
<input type="submit" name="submitname" value="关闭提醒"/>
					
                </div>
            </div>
            </form>
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/tztxzdtx.js" type="text/javascript"></script>



<!--{template footer}-->