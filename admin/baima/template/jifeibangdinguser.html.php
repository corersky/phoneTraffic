<!--{template header}-->
<script>
function setuserbeizhu(uid,beizhu){
	document.getElementById("beizhu_uid").value=uid;
	document.getElementById("beizhu_beizhu").value=beizhu;
	
}

function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=jifeibangdinguser&nick="+sosonick;
	window.location.href=url;
}
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}

function showoedersendinfo(nick,uid){
	var title="“"+nick+"”用户发放明细";
	document.getElementById("div_showduanxinsendinfo_title").innerHTML=title;
	document.getElementById("showck_iframe").src="index.php?action=jifeibangdinguser_zdxf&uid="+uid;
}



function settaocanbangding(id,username,ayfanhuanjine,yueshu,myzdxfjine){
	document.getElementById("settaocanbangding_id").value=id;
	document.getElementById("settaocanbangding_username").value=username;
	
	document.getElementById("settaocanbangding_ayfanhuanjine").value=ayfanhuanjine;
	document.getElementById("settaocanbangding_yueshu").value=yueshu;
	document.getElementById("settaocanbangding_myzdxfjine").value=myzdxfjine;
	
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="jfgljfgl2" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">计费管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">计费管理</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                <div class="fr cp" onClick="document.getElementById('showtjbdyh').style.display='';">
                    <img src="baima/template/images/tjbdyh.png" width="137" height="41">
                </div>
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <div style="position:absolute; margin-top:-29px;">
                            	<span class="cp"><a href="index.php?action=jifenindex"><img src="baima/template/images/jfgl12.png" width="84" height="28"></a></span>
                                <span class="cp"><img src="baima/template/images/jfgl21.png" width="102" height="28"></span>
                            </div>
                            
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                    <div class="fl"><input class="inputtext" type="text" name="" id="sosonick" placeholder="在此输入用户名..."></div>
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                </div>
                            </li>
                            
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>绑定时间</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>绑定计费名称</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>计费内容</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>状态</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发放明细</div></span>
                            </li>
                            
                            <!--{loop $userarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[nick]}</span>
                                <span class="list2 mt">{$value[createtime]}</span>
                                <span class="list3 mt">{$value[mytjfmc]}</span>
                                <span class="list4 mt" onClick="settaocanbangding('{$value[id]}','{$value[nick]}','{$value[ayfanhuanjine]}','{$value[yueshu]}','{$value[myzdxfjine]}');document.getElementById('showjfnrbdyh').style.display='';">{$value[mytcmsgstr]}</span>
								
<span class="list5 mt">{$value[ayffzt]}</span>
                                <span class="list6 mt" style="color:#006dcb;">
                                	<span class="cp" onClick="showoedersendinfo('{$value[nick]}','{$value[uid]}');document.getElementById('showffmx').style.display='';">查看</span>
                                </span>
                                
                            </li>
                            <!--{/loop}-->
                            
                            <li style="height:58px;">
                             <div class="thepage">
                                    <span class="pagechoose">{$fenarr[sy]}</span>&nbsp;
									<span class="pagechoose">{$fenarr[shangy]}</span>&nbsp;
									<span class="pagechoose">{$fenarr[xiay]}</span>&nbsp;
									<span class="pagechoose">{$fenarr[weiy]}</span>&nbsp;
                                </div>
                                <div class="pageall">
                                    <div class="pagetheall">
                                        共<span class="pagetheallfont">{$page}/{$zpage}</span>页
                                    </div>
                                    
                                    <div class="pagego">
                                        <div class="fl">
                                        第<span class="pagenum">
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>页
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('{$url}');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="msgno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:180px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            当前还未绑定用户，请先
                        </div>
                        <div class="fl cp" style="margin-top:-13px; margin-left:20px;" onClick="document.getElementById('showtjbdyh').style.display='';">
                            <img src="baima/template/images/tjbdyh.png" width="137" height="41">
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showtjbdyh" class="showtjbdyh" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-145px 0 0 -275px;width:550px;height:290px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">绑定新用户</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showtjbdyh').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			
			<form action="{XZKJURL}/useration.php?action=taocanbangding" method="post" target="hiddeniframe">
            <div style="width:530px; height:250px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:117px; margin-top:25px;">
                	<span>用户名：</span>
                    <span><input class="inputtext1" name="username" id="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入专员姓名..."/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>计费方式：返还</span>
                    <span><input class="inputtext2" name="ayfanhuanjine" id="ayfanhuanjine" type="text" maxlength="20" onKeyPress="this.style.color='black';"/></span>
                    <span>条，分摊</span>
                    <span><input class="inputtext2" name="yueshu" id="yueshu" type="text" maxlength="2" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/></span>
                    <span>月</span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>计费方式：每月最低消费</span>
                    <span><input class="inputtext2" name="myzdxfjine" id="myzdxfjine" type="text" maxlength="20" onKeyPress="this.style.color='black';"/></span>
                    <span>元</span>
                </div>
                <div style="margin-left:130px; margin-top:30px;">
                	<div class="fl cp">
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showtjbdyh').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
			
			</form>
			
        </div>
	</div>
</span>



<span id="showjfnrbdyh" class="showjfnrbdyh" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-145px 0 0 -275px;width:550px;height:290px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">绑定新用户</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showjfnrbdyh').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			<form action="{XZKJURL}/useration.php?action=settaocanbangding" method="post" target="hiddeniframe">
            <div style="width:530px; height:250px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:117px; margin-top:25px;">
                	<span>用户名：</span>
                    <span><input class="inputtext1" name="settaocanbangding_username" id="settaocanbangding_username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入专员姓名..." disabled="disabled"/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>计费方式：返还</span>
                    <span><input class="inputtext2" name="settaocanbangding_ayfanhuanjine" id="settaocanbangding_ayfanhuanjine" type="text" maxlength="20" onKeyPress="this.style.color='black';" disabled="disabled"/></span>
                    <span>条，分摊</span>
                    <span><input class="inputtext2" name="settaocanbangding_yueshu" id="settaocanbangding_yueshu" type="text" maxlength="2" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" disabled="disabled"/></span>
                    <span>月</span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>计费方式：每月最低消费</span>
                    <span><input class="inputtext2" name="settaocanbangding_myzdxfjine" id="settaocanbangding_myzdxfjine" type="text" maxlength="20" onKeyPress="this.style.color='black';"/></span>
                    <span>元</span>
                </div>
                <div style="margin-left:130px; margin-top:30px;">
                	<div class="fl cp">
						<input type="hidden" name="settaocanbangding_id" id="settaocanbangding_id" value=""/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showjfnrbdyh').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
			</form>
        </div>
	</div>
</span>

<span id="showffmx" class="showffmx" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-275px 0 0 -275px;width:550px;height:550px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;" id="div_showduanxinsendinfo_title">“新中科技”用户发放明细</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showffmx').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:550px; height:480px; overflow:hidden; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <iframe name="showck_iframe" id="showck_iframe" src="jfgljfgl2ck1.html" width="550" height="510" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe>
            </div>
        </div>
	</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/jfgljfgl.js" type="text/javascript"></script>

<!--{template footer}-->