<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>


<div id="mains">
	<div id="cwglwdjg">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：财务管理-我的价格</div>
        </div>
        <div class="v1">
            <div id="mythetable">
			
			<form action="{XZKJURL}/duanxination.php?action=setpwd" method="post" target="hiddeniframe">
                <div id="table">
                    <ul>
                        <li class="title" style="font-family:'微软雅黑';">
                            我的资费套餐
                        </li>
                        <li>
                            <div class="v2">
                            	<div class="v3">
                                    <div class="fl v5">
                                        <span>用户名：</span><span class="fw">{$userinfo[username]}</span>
                                    </div>
                                    <div class="fl v5">
                                        <span>我的联系电话：</span><span class="fw">{$userinfo[sjh]} </span>
                                    </div>
                                </div>
                                <div class="v4">
                                    <div class="fl v5">
                                        <span>我的余额：</span><span class="fw">{$userinfo[dxnum]} 条</span>
                                    </div>
                                </div>
                                <div class="v4">
                                	<div class="fl">
                                		<div class="fl v6">我的优惠套餐：</div><div class="fl fw v7">{$mytcmsg}</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    
                </div>
			</form>
				
				
				
            </div>
        </div>
        
        <div style="margin-top:10px;margin-left:-10px;">
            <div style="font-family:'微软雅黑'; font-size:17px; text-align:left; margin-top:30px; height:150px;">
                <div id="show1" style="background:url(baima/template/images/wdjgyhzq1.png) no-repeat; width:752px; height:205px;">
                    <div class="cp" style="position:absolute; margin-left:310px; margin-top:150px;" onClick="showstate()">
                        <img src="baima/template/images/wdjgckgdyh.png" width="116" height="33">
                    </div>
                </div>
                <div id="show2" style="background:url(baima/template/images/wdjgyhzq2.png) no-repeat; width:752px; height:205px; display:none;">
                    <div class="fl" style="margin-left:230px; margin-top:60px;">
                        <img src="baima/template/images/wdjgloading.gif" width="114" height="117">
                    </div>
                    <div class="fl fw" style="margin-top:100px; margin-left:30px;">
                        系统计算优惠中
                    </div>
                </div>
                <div id="show31" class="fw" style="background:url(baima/template/images/wdjgyhzq31.png) no-repeat; width:752px; height:205px; display:none;">
                    <div id="theyhgg" style="color:#F00; padding-top:80px; padding-left:100px; width:570px; height:90px; line-height:32px; overflow:hidden;">{$myyouhuimsg}</div>
                </div>
                <div id="show32" class="fw" style="background:url(baima/template/images/wdjgyhzq32.png) no-repeat; width:752px; height:205px; color:#F00; display:none;"></div>
            </div>
        </div>
        
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/cwglwdjg.js" type="text/javascript"></script>



<!--{template footer}-->