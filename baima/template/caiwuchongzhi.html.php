<!--{template header}-->

<div id="mains">
	<div id="cwglwycz">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：财务管理-我要充值</div>
        </div>
        <div class="colorred" style="font-size:13px; font-weight:bold; margin-top:30px;">
        	注：短信充值余额长期有效，没有使用时间限制，单次充值最少300元
        </div>
		<input type="hidden" id="userdxjiage" value="{$userinfo[jiage]}"/>
        <div class="v1">
        	<div class="fl v2" style="font-family:'微软雅黑';">
            	<div class="fl v3">请选择支付方式：&nbsp;</div>
                <div class="fl" style="margin-left:-2px;">
                	<select id="vv" class="v4" name="" onChange="showstate()">
                        <option value="0">网银/支付宝充值</option>
                        <option value="1">打款至银行账户</option>
                    </select>
                </div>
            </div>
            <div id="statetext1" class="fl v5">
            	<span><img src="baima/template/images/wycztips1.png" width="473" height="60"></span>
            </div>
            <div id="statetext2" class="fl v5" style=" display:none;">
            	<span><img src="baima/template/images/wycztips2.png" width="473" height="60"></span>
            </div>
        </div>
		
		
		<form action="dxchongzhi.php?action=smsnumchongzhi" method="post" target="_blank" onsubmit="return checkok()">
        <div id="state1" class="v6">
        	<div class="v8" style="font-family:'微软雅黑';">
            	<div class="fl v3">您要充值的金额：&nbsp;</div>
                <div class="fl" style="margin-left:-2px;">
                	<input id="myyuan" name="chongzhipic" type="text" style="color:#7e7e7e;width:150px;height:28px; font-size:14px; font-weight:bold;border:#add1fe 1px solid;" maxlength="20" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'');shownum()" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="请输入充值金额..." onBlur="checkok()"/>
                </div>
                <div class="fl v3">&nbsp;元</div>
                <div id="texttips" class="fl v3" style="color:#F00; font-size:12px;">&nbsp;（请输入整数金额）</div>
            </div>
            <div style="height:30px;">
                <div id="thecznumdiv" style="padding-top:50px; font-size:15px; display:none;">
                    当前可充值短信条数为：<span id="thecznum" style="color:#F00; font-size:18px;">0</span>条
                </div>
            </div>
            <div class="v9">
            	<input type="submit" value="" style="width:95px; height:37px;background-image:url(baima/template/images/wyczqcz.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onClick="checkok()">
            </div>
        </div>
		</form>
		
		
		
        <div id="state2" class="v7" style="display:none;">
            <div id="mythetable">
                <div id="table" class="v6">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>账号</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>账户名</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>开户行</div></span>
                        </li>
                        
                        <li>
                            
                            <span class="list1 mt">9380 7002 0109 1089 41</span>
                            <span class="list2 mt">郑州新中电子科技有限公司</span>
                            <span class="list3 mt">郑州银行股份有限公司大石桥支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6227 0024 3340 0005 579</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国建设银行郑州淮河路支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6222 0217 0200 6661 599</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国工商银行郑州金水路支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6228 4807 1048 1981 417</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国农业银行郑州城北支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6221 8849 1000 8445 964</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国邮政储蓄银行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6217 8580 0001 5066 639</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国银行郑州棉纺东路支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6214 6231 4300 0044 830</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">广发银行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6230 5800 0000 7946 218</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">平安银行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6226 6822 0022 6827</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">光大银行</span>
                            
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/cwglwycz.js" type="text/javascript"></script>

<!--{template footer}-->