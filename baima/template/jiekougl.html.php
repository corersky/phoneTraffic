<!--{template header}-->


		

<div id="mains">
	<div id="dxjkjkgl">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：短信接囗-接囗管理</div>
        </div>
        <div class="colorred fl" style="font-size:14px; font-weight:bold; margin-top:10px;">
        	<div>注意事项：1.注意接口地址不要写错</div>
          	<div style="margin-left:75px;">2.提交方式采用http协议post提交</div>
          	<div style="margin-left:75px;">3.所有编码均采用GBK格式</div>
        </div>
        <div class="v1">
            <div>
                <span class="cp" onClick="showjksmwd()"><span id="jksmwd1"><img src="baima/template/images/jksmwd1.png" width="100" height="33"></span><span id="jksmwd2" style="display:none;"><img src="baima/template/images/jksmwd2.png" width="100" height="28"></span></span>
                <span class="cp" onClick="showdmsl()" onMouseMove="showdsmllist()" onMouseOut="closedsmllist()"><span id="dmsl1" style="display:none;"><img src="baima/template/images/dmsl1.png" width="100" height="33"></span><span id="dmsl2"><img src="baima/template/images/dmsl2.png" width="100" height="28"></span></span>
                <div id="dsmllist" style="position:absolute; margin-left:108px; margin-top:-4px; background-color:#d2f2fd; font-family:'微软雅黑'; font-size:14px; display:none;" onMouseMove="showdsmllist()" onMouseOut="closedsmllist()">
                	<div class="cp" style="border:#83bbd9 1px solid; width:98px; height:20px; padding-top:5px;" onClick="showphp()">
                    	PHP代码示例
                    </div>
                    <div class="cp" style="border:#83bbd9 1px solid; width:98px; height:20px; padding-top:5px;" onClick="showjava()">
                    	java代码示例
                    </div>
                    <div class="cp" style="border:#83bbd9 1px solid; width:98px; height:20px; padding-top:5px;" onClick="showasp()">
                    	asp代码示例
                    </div>
                </div>
            </div>
            <div class="v2">
                <div id="mythetable">
                    <div id="table">
                    	<ul id="jksmwdshow">
                            <li class="title v4">
                                接囗说明文档
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="thejksmwdtext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>
一、发送接口：
	1.请求地址：请求地址是客户接口程序调用时请求的url地址，采用的是http post 接口，地址是：http://duanxin.xzkj168.cn/server/sendsms.php
	（入口地址一般不会发生变化，当发生变化的时候，会通知接口用户）
	
	2.参数说明
	
	参数名称        说明
	username        账号
	pwd             密码
	mobile          全部发送的号码，多个号码之间用半角逗号隔开
	content         发送内容	短信的内容，内容需要GBK编码
	sendtime        定时发送时间 为空表示立即发送，定时发送格式2010-10-24 09:08:10
	例如：
	username=账号&pwd=密码&mobile=15023230000&content=内容&sendtime=
	3返回值
	在接收到客户端发送的http请求后，返回一个数字代码。格式为：
	
	0:  参数信息不完整
	1:  用户名密码错误。
	2:  短信内容和模板不匹配。
	3:  定时发送时间过短。（定时发送时间要大于当前时间五分钟以上）。
	4:  余额不足。
	5:  提交失败。
	6:  不是接口用户
	
	20: 由于网络等原因，造成异常错误，提交失败，请重新提交。
	200:提交成功
	
	
二.余额查询接口
	2.1请求地址
	请求地址是客户接口程序调用时请求的url地址，采用的是http post 接口，地址是
	http://duanxin.xzkj168.cn/server/getyue.php
	入口地址一般不会发生变化，当发生变化的时候，会通知接口用户	
	
2.2参数说明
	
	参数名称 	   说明
	username	   账号
	pwd	           密码
	例如：
	username=账号&pwd=密码
	2.3返回值
	在接收到客户端发送的http请求后，返回一个数字代码。格式为：
	
	-1：参数信息不完整
	-2: 用户名密码错误
	-3: 不是接口用户
	
	其他：短信余额（返回的数字如果大于等于0，则表示此为余额）。
</textarea>
                                </div>
                            </li>
                        </ul>
                        <ul id="phpshow" style="display:none;">
                            <li class="title v4">
                                php代码示例
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="thephptext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>{$shili_php}</textarea>
                                </div>
                            </li>
                        </ul>
                        <ul id="javashow" style="display:none;">
                            <li class="title v4">
                                java代码示例
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="thejavatext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>{$shili_java}</textarea>
                                </div>
                            </li>
                        </ul>
                        <ul id="aspshow" style="display:none;">
                            <li class="title v4">
                                asp代码示例
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="theasptext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>{$shili_asp}</textarea>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="v6" style=" display:none;">
            <div class="v7">
                您还没有申请短信接囗，请先<a href="" style="color:#0078ad;">&gt;&gt;接囗申请</a>
            </div>
        </div>
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxjkjkgl.js" type="text/javascript"></script>






<!--{template footer}-->