<!--{template header}-->

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="jsyzhzd" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">机审验证</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">号码个数验证</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	<form action="{XZKJURL}/useration.php?action=sethmgsyz" method="post" target="hiddeniframe">
            <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                <div class="fl" style="margin-top:4px; margin-left:10px;">少于：</div>
                <div class="fl"><input type="text" name="hmgs" value="{$row[congigvalue]}" style="color:#666;width:180px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;">个号码时免审。（填写0表示关闭此验证）</div>
                <div class="fl" style="margin-left:10px;margin-top:4px;"><input type="submit" value="" style="width:37px;height:20px; background:url(baima/template/images/fpqd.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name=""></div>
            </div>
            </form>
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/jsyzhmgsyz.js" type="text/javascript"></script>


<!--{template footer}-->