<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>


<div id="mains">
	<div id="cwglwyfp">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：财务管理-我要发票</div>
        </div>
        <div class="colorred fl v1">
        	注：单张发票超过1000元免快递费，低于1000元将以挂号信的形式发送
        </div>
        <div class="fr v2" onClick="document.getElementById('boxshowck').style.display='';">
        	<img src="baima/template/images/ckfpsqjl.png" width="129" height="28">
        </div>
        <div class="v3">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title" style="font-family:'微软雅黑';">
                            申请发票
                        </li>
                        <li>
                            <div class="v4">
							
							
							<form action="{XZKJURL}/caiwuation.php?action=syfapiao" method="post" target="hiddeniframe">
                            	<div id="theborderheight" class="v5">
                                    <div class="v6">
                                        <span>●</span><span class="v8">当前您累计可领取发票金额为：</span><span class="colorred">{$zjine}</span><span>&nbsp;元</span>
                                    </div>
                                    <div class="v7">
                                        <span>●</span><span class="v8">当前您已经领取发票金额为：</span><span class="colorred">{$ylqjine}</span><span>&nbsp;元</span>
                                    </div>
                                    <div style="width:550px; height:1px; background-color:#caedf8; margin:0 auto; margin-top:15px; margin-left:-70px;"></div>
                                    <div style="margin-top:15px;">
                                        <span>●</span><span class="v8">请填写您要开的发票金额：</span><span class="colorred"><input class="v9" name="syjine" id="syjine" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="在此输入发票金额..." /></span><span style="color:#2391d5;">&nbsp;元</span>
                                    </div>
                                    <div class="v7">
                                        <span>●</span><span class="v8">请填写您要开票的公司全称：</span><span class="colorred"><input class="v9" name="fpgongshi" id="fpgongshi" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="在此输入发票抬头..." /></span>
                                    </div>
                                    <div class="v7">
                                        <span><input type="radio" checked></span><span class="v8">使用默认寄送地址</span><span id="wyfpckshdz1" class="colorred" style="cursor:pointer;" onClick="showmsg()"><img src="baima/template/images/wyfpckshdz.png" width="150" height="16"></span><spa id="wyfpckshdz2" class="colorred cp" style="display:none;" onClick="closemsg()"><img src="baima/template/images/wyfpckshdz2.png" width="150" height="16"></span>
                                    </div>
                                </div>
                                
                                <div id="wyfpbtn" class="v10">
                                	<input class="v13" type="submit" value="" style="width:136px; height:39px;background-image:url(baima/template/images/ljlqfp.png);">
                                </div>
								 </form>
								
								
								
								
								
								
								
                                <form action="{XZKJURL}/caiwuation.php?action=setfapiaouserinfo" method="post" target="hiddeniframe">
                                <div id="showmsgarea" class="v11">
                                	<div class="v12">
                                        <div style="margin-top:20px;">
                                        	<span>发票收货联系人：</span><span class="colorred"><input class="v14" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="在此输入联系人..." name="lxrxm" id="lxrxm" value="{$fapiaouserinfo[lxrxm]}"/></span>
                                    	</div>
                                        <div style="margin-top:10px;">
                                        	<span>发票收货联系人电话：</span><span class="colorred"><input class="v14" type="text" maxlength="12" onKeyPress="this.style.color='black';" placeholder="在此输入联系人电话..." name="xlrsjh" id="xlrsjh" value="{$fapiaouserinfo[xlrsjh]}"/></span>
                                    	</div>
                                        <div style="margin-top:10px;">
                                        	<div class="fl">
                                        		<span>您的发票邮寄地址：</span><span class="colorred"><input class="v15"  type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="在此输入发票邮寄地址..." name="shdz" id="shdz" value="{$fapiaouserinfo[shdz]}"/></span>
                                            </div>
                                            <div class="fl cp v16"><input class="v13" type="submit" value="" style="width:69px; height:24px;background-image:url(baima/template/images/wyfpbc.png);"></div>
                                    	</div>
                                    </div>
                                </div>
								 </form>
								
								
								
                            </div>
                        </li>

                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<span id="boxshowck" class="boxshowck" style="display:none;">
	<div id="dialogBgshowck" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div id="dialogshowck" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-245px 0 0 -275px;width:550px;height:490px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
		<div class="dialogTopshowck">
			<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">发票申请记录</div>
                </div>
                <div style="margin-top:6px;">
                	<iframe name="showck" src="user.php?action=caiwuwyfp_log" width="550" height="450" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe> 
                </div>
            </div>
			<div id="showckclose" style="position:absolute;margin-top:-560px;margin-left:500px; cursor:pointer;" onClick="document.getElementById('boxshowck').style.display='none';">
				<img src="baima/template/images/openclose.png" style="margin-top:67px">
			</div>
		</div>
	</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/cwglwyfp.js" type="text/javascript"></script>
<!--{template footer}-->