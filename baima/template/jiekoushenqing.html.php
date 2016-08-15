<!--{template header}-->
<script>
function setjiekouuserxm(){
	 var  jiekouuserxm=document.getElementById("jiekouuserxm").value;
	 if(jiekouuserxm==""){
	 	alert("填写信息不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/jiekouation.php?action=setjiekouuserxm&xm='+jiekouuserxm;
}

function setjiekouusersjh(){
	 var  jiekouusersjh=document.getElementById("jiekouusersjh").value;
	 if(jiekouusersjh==""){
	 	alert("填写手机号不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/jiekouation.php?action=setjiekouusersjh&sjh='+jiekouusersjh;
}

function setjiekouusershenqing(){
	hiddeniframe.location.href='{XZKJURL}/jiekouation.php?action=setjiekouusershenqing';
}

</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="dxjkjksq">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：短信接囗-接囗申请</div>
        </div>
        
        <div class="v1" style="background:url(baima/template/images/jksqbg.png) no-repeat;">
            <div class="colorred v2">
            	注意：以下内容务必填写真实有效，当通道接口发生变化时，会及时通知。
            </div>
            <div class="v3">
            	接囗联系人姓名：
                <span id="lxrxm1" class="v5" >{$jiekouuserinfo[xm]}</span><span id="lxrxm2" style=" display:none;"><input id="jiekouuserxm" value="{$jiekouuserinfo[xm]}" type="text" style="width:143px; height:25px;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入接囗联系人姓名" /></span>
                <span id="lxrxmbtn1" class="fr v6" onClick="jklxrxm()"><img src="baima/template/images/jksqxg.png" width="47" height="26"></span>
                <span id="lxrxmbtn2"  class="fr v6" style="display:none;"><input type="button" value="" style="width:47px; height:26px;background-image:url(baima/template/images/jksqbc.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onclick="setjiekouuserxm()"></span>
            </div>
            <div class="v4">
            	接囗联系人电话：
                <span id="lxrdh1" class="v5" >{$jiekouuserinfo[sjh]}</span><span id="lxrdh2" style="display:none;"><input id="jiekouusersjh" value="{$jiekouuserinfo[sjh]}" type="text" style="width:143px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入接囗联系人电话" /></span>
                <span id="lxrdhbtn1" class="fr v6" onClick="jklxrdh()"><img src="baima/template/images/jksqxg.png" width="47" height="26"></span>
                <span id="lxrdhbtn2"  class="fr v6" style="display:none;"><input type="button" id="jiekouusersjh" value="" style="width:47px; height:26px;background-image:url(baima/template/images/jksqbc.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onclick="setjiekouusersjh()"></span>
            </div>
			
			
			
			
			<!--{if $jiekouuserinfo[zt]!=1}-->
            <div id="showno" class="v7">
            	<div>
                	<input type="button" value="" style="width:178px; height:45px;background-image:url(baima/template/images/sqdxjk.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onClick="setjiekouusershenqing();">
                </div>
            </div>
			
			<!--{else}-->
			
			
            <div id="showyes" style="position:absolute; font-family:'微软雅黑'; font-size:16px; margin-top:230px; padding-left:120px; width:625px; z-index:7;">
            	<span style="color:#b20000;">当前短信接口已申请成功，请去</span><span style="color:#047eb7;"><a href="user.php?action=jiekougl" style="color:#047eb7;">&gt;&gt;接口管理</a></span><span style="color:#b20000;">中查看</span>
            </div>
			<!--{/if}-->
			
			
			
			
			
        </div>
        
    </div>
</div>
<span id="boxshowopentips" class="boxshowopentips" style="display:none;">
	<a id="showopentips" href="javascript:;" class="bounceIn"></a>
	<div id="dialogBgshowopentips" style="position:fixed;top:0;left:0;z-index:99999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div id="dialogshowopentips" class="animated" style="position:fixed;top:50%;left:50%;z-index:100000;margin:0 auto;margin:-25px 0 0 -160px;width:320px;height:50px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
		<div class="dialogTopshowopentips">
			<div style="width:320px; text-align:center; font-family:'微软雅黑'; font-size:18px; font-weight:bold; color:#007ed0;">
            	<div id="theopentipstext" style="margin-top:12px;"></div>
			</div>
            <div id="showqrtjclose" style="position:absolute;">
				<a href="javascript:;" class="claseDialogBtnshowopentips"></a>
			</div>
		</div>
	</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxjkjksq.js" type="text/javascript"></script>

<!--{template footer}-->