<!--{template header}-->
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function showuserinfo(username,sjh,lxrxm,lxrqq,gsmc,dizhi,qianming){
	document.getElementById('span_userinfo_username').innerHTML = username;
	document.getElementById('span_userinfo_sjh').innerHTML = sjh;
	document.getElementById('span_userinfo_lxrxm').innerHTML = lxrxm;
	document.getElementById('span_userinfo_lxrqq').innerHTML = lxrqq;
	document.getElementById('span_userinfo_gsmc').innerHTML = gsmc;
	document.getElementById('span_userinfo_dizhi').innerHTML = dizhi;
	document.getElementById('span_userinfo_qianming').innerHTML = qianming;
}

function querendel(id){
		url="useration.php?action=delmianshenuser&uid="+id;
		hiddeniframe.location.href=url;
}

function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=mianshenuser&nick="+sosonick;
	window.location.href=url;
}


function setmianshenusertype(id,usertype_wzms,usertype_jkms,usertype_nbzh){
	document.getElementById("usertype_wzms").checked=false;
	document.getElementById("usertype_jkms").checked=false;
	document.getElementById("usertype_nbzh").checked=false;
	  
    if(usertype_wzms=='1'){
		document.getElementById("usertype_wzms").checked=true;
	}
	if(usertype_jkms=='1'){
		document.getElementById("usertype_jkms").checked=true;
	}
	if(usertype_nbzh=='1'){
		document.getElementById("usertype_nbzh").checked=true;
	}
	document.getElementById("usertype_userid").value=id;
}

function setmianshenusertongdao(uid){
	var  settongdao=document.getElementById("settongdao_"+uid).value;
	hiddeniframe.location.href='{XZKJURL}/useration.php?action=setmianshenusertongdao&uid='+uid+'&settongdaoid='+settongdao;
}
</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="jsyzmshyh" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">机审验证</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">免审核用户</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                <div class="fr cp" onClick="document.getElementById('showtjmsyh').style.display='';">
                    <img src="baima/template/images/mshyhtjmsyh.png" width="137" height="41">
                </div>
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                        <div class="fl"><input class="inputtext" type="text" id="sosonick"  value="{$nick}" placeholder="在此输入用户名..."></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                    </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>余额(条)</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户资料</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>加入免审核时间</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>免审类型</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>绑定通道</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            
							<!--{loop $userarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[username]}</span>
                                <span class="list2 mt">{$value[dxnum]}</span>
                                <span class="list3 mt" style="color:#006dcb;">
                                	<span class="cp" onClick="showuserinfo('{$value[username]}','{$value[sjh]}','{$value[lxrxm]}','{$value[lxrqq]}','{$value[gsmc]}','{$value[dizhi]}','{$value[qianming]}');document.getElementById('showyhzl').style.display='';">查看</span>
                                </span>
                                <span class="list4 mt">{$value[mstime]}</span>
				<span class="list5 mt3" onClick="setmianshenusertype('{$value[id]}','{$value[wzms]}','{$value[jkms]}','{$value[nbzh]}');document.getElementById('showmslx').style.display='';"><span class="cp">
				<div>{$value[wzmsstr]}</div>
				<div>{$value[jkmsstr]}</div>
				<div>{$value[nbzhstr]}</div>
				</span></span>
                                <span class="list6 mt">
                                	<!--带标识-->
                                    <span id="yxa'{$value[id]}'" style="cursor:pointer;" onClick="bdtd(this)">{$value[tongdaoname]}<img src="baima/template/images/bj.png" width="16" height="16"></span>
                                    <!--带标识-->
                                    <span id="yxb'{$value[id]}'" style="cursor:pointer;display:none;" onClick="bdtd(this)"><img src="baima/template/images/bj.png" width="16" height="16"></span>
                                    <!--带标识-->
                                    <span id="yxc'{$value[id]}'" style="display:none;">
                                        <select id="settongdao_{$value[id]}" name="" style="width:80px;height:20px; border:#add1fe 1px solid; font-size:11px; color:#666; font-family:'微软雅黑'; font-weight:bold; cursor:pointer;" onblur="setmianshenusertongdao('{$value[id]}')" onchange="setmianshenusertongdao('{$value[id]}')">
											<!--{loop $tongdaoarr $k=>$v}-->
                                            <option value="{$k}">{$v}</option>
											<!--{/loop}-->
                                        </select>
                                    </span>
                                </span>
                                <span class="list7 mt" style="color:#006dcb;">
                                    <!--带标识-->
                                    <span class="cp" onClick="document.getElementById('showtdeltips{$key}').style.display='';">移除</span>
                                </span>
                                <!--带标识-->
                                <div id="showtdeltips{$key}" style="position:absolute; font-size:13px; margin-top:-30px; margin-left:508px; width:230px; height:37px; border:#ff8400 1px solid; background-color:#ffface; display:none;">
                                	<div style="float:left; margin-top:12px; margin-left:8px; margin-right:5px;">是否从免审用户中移除？</div>
                                    <div style="float:left; margin:6px; cursor:pointer;"><input type="button" value="" style="width:25px; height:25px;background-image:url(baima/template/images/scfzyes.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onclick="querendel('{$value[id]}')"></div>
                                    <!--带标识-->
                                    <div style="float:left; margin:6px; cursor:pointer;" onClick="document.getElementById('showtdeltips{$key}').style.display='none';"><img src="baima/template/images/scfzno.png" width="25" height="25"></div>
                                </div>
                                
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
                
                    <div style="margin-top:140px; margin-left:140px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            当前没有免审用户，您可以在此添加免审用户
                        </div>
                        <div class="fl cp" style="margin-top:-13px; margin-left:20px;" onClick="document.getElementById('showtjmsyh').style.display='';">
                            <img src="baima/template/images/mshyhtjmsyh.png" width="137" height="41">
                        </div>
                    </div>
                    
                </li>
            </div>
            
            <div id="msgnosearch" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:210px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            您搜索的用户名<span class="colorred">不存在</span>，请核对后重新搜索！
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>






<span id="showtjmsyh" class="showtjmsyh" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-100px 0 0 -275px;width:550px;height:200px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">添加免审用户</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showtjmsyh').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:530px; height:160px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
			
			
			<form action="{XZKJURL}/useration.php?action=addmsuser" method="post" target="hiddeniframe">
                <div style="margin-left:70px; padding-top:50px;">
                	<div class="fl">用户名：</div>
                    <div class="fl" style="margin-left:20px;"><input class="inputtext" name="mianshennick" id="mianshennick" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="在此输入需添加至免审的用户名..."/></div>
                    <div class="fl" style="margin-top:2px; margin-left:20px;"><input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/mshyhtj.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;"></div>
                </div>
			</form>
				
				
				
				
            </div>
        </div>
	</div>
</span>






<span id="showyhzl" class="showyhzl" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-200px 0 0 -275px;width:550px;height:400px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">用户资料</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showyhzl').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
            <div style="width:530px; height:360px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:100px; padding-top:20px;">
                	<div class="fl">用户名：</div><div class="fl" style="width:260px; height:20px; overflow:hidden;" id="span_userinfo_username">新中科技</div>
                </div>
                <div style="margin-left:100px; padding-top:35px;">
                	<div class="fl">联系电话：</div><div class="fl" style="width:240px; height:20px; overflow:hidden;" id="span_userinfo_sjh">12345678901</div>
                </div>
                <div style="margin-left:100px; padding-top:35px;">
                	<div class="fl">联系人姓名：</div><div class="fl" style="width:240px; height:20px; overflow:hidden;" id="span_userinfo_lxrxm">杨女士</div>
                </div>
                <div style="margin-left:100px; padding-top:35px;">
                	<div class="fl">联系人QQ：</div><div class="fl" style="width:240px; height:20px; overflow:hidden;" id="span_userinfo_lxrqq">123456789</div>
                </div>
                <div style="margin-left:100px; padding-top:35px;">
                	<div class="fl">公司名称：</div><div class="fl" style="width:240px; height:20px; overflow:hidden;" id="span_userinfo_gsmc">新中科技有限公司</div>
                </div>
                <div style="margin-left:100px; padding-top:35px;">
                	<div class="fl">公司地址：</div><div class="fl" style="width:240px; height:20px; overflow:hidden;" id="span_userinfo_dizhi">河南省郑州市文化路168号</div>
                </div>
                <div style="margin-left:100px; padding-top:35px;">
                	<div class="fl">短信签名：</div><div class="fl" style="width:240px; height:20px; overflow:hidden;" id="span_userinfo_qianming">新中科技</div>
                </div>
                <div style="margin-left:100px; padding-top:50px;">
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showyhzl').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
        </div>
	</div>
</span>


<span id="showmslx" class="showmslx" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-135px 0 0 -275px;width:550px;height:270px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">免审类型</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showmslx').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			<form action="{XZKJURL}/useration.php?action=setmianshenusertype" method="post" target="hiddeniframe">
            <div style="width:540px; height:230px; overflow:hidden; margin-left:40px; margin-top:30px; font-family:'微软雅黑'; font-size:17px;">
            	<div style="margin-top:50px;">
                	<span style="margin-left:50px;"><input class="cp" type="checkbox" name="usertype_wzms" id="usertype_wzms" value="1">网站免审</span>
                    <span style="margin-left:50px;"><input class="cp" type="checkbox" name="usertype_jkms" id="usertype_jkms" value="1">接口免审</span>
                    <span style="margin-left:50px;"><input class="cp" type="checkbox" name="usertype_nbzh" id="usertype_nbzh" value="1">内部账号</span>
                </div>
                <div style="margin-left:100px; margin-top:50px;">
                	<div class="fl cp">
						<input type="hidden" name="usertype_userid" id="usertype_userid" value=""/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showmslx').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
			</form>
        </div>
	</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/jsyzmshyh.js" type="text/javascript"></script>


<!--{template footer}-->