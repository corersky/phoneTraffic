<!--{template header}-->

<div id="mains">
	<div id="cwglwdjg">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：财务管理-我的价格</div>
        </div>
        <div class="v1">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title" style="font-family:'微软雅黑';">
                            我的资费套餐
                        </li>
                        <li>
                        	<div style="padding-top:40px;">
                            	<div class="fl" style="margin-left:206px;">用户名：</div><div class="fl fw" style="margin-left:73px; margin-top:-6px;">{$_SESSION["dl_username"]}</div>
                            </div>
                            <div style="padding-top:50px;">
                                <div class="fl" style="margin-left:190px;">短信单价：</div><div class="fl fw" style="margin-left:72px; margin-top:-6px;">{$userinfo[jiage]}元</div>
                            </div>
                            <div style="padding-top:50px;">
                                <div class="fl" style="margin-left:190px;">联系电话：</div><div class="fl fw" style="margin-left:72px; margin-top:-6px;">{$userinfo[sjh]}</div>
                            </div>
                             <div style="padding-top:50px;">
                                <div class="fl" style="margin-left:190px;">我的余额：</div><div class="fl fw" style="margin-left:72px; margin-top:-6px;">{$userinfo[dxnum]}元</div>
                            </div>
                            <div style="padding-top:50px; margin-bottom:40px;">
                                <div class="fl" style="margin-left:190px;">流量价格：</div>
                                <span class="fw"><div style="float:left;width:300px; text-align:left;"><div style="margin-left:73px;letter-spacing:1px;">移动流量套餐{$userinfo[yidongzk]}折</div><div style="margin-left:73px; margin-top:5px;letter-spacing:1px;">联通流量套餐{$userinfo[liantongzk]}折</div><div  style="margin-left:73px; margin-top:5px;letter-spacing:1px;">电信流量套餐{$userinfo[dianxinzk]}折</div></div></span>
                            </div>
                            <div style="height:50px;"></div>
                        </li>

                    </ul>
                    
                </div>
            </div>
        </div>

        
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/cwglwdjg.js" type="text/javascript"></script>
<!--{template footer}-->