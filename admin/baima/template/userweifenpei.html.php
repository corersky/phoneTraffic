<!--{template header}-->
<script>
function setuser(uid,username,sjh,lxrxm,lxrqq,gsmc,dizhi,qianming,createtime){
	document.getElementById("uid").value=uid;
	document.getElementById("username").value=username;
	document.getElementById("sjh").value=sjh;
	document.getElementById("lxrxm").value=lxrxm;
	document.getElementById("lxrqq").value=lxrqq;
	document.getElementById("gsmc").value=gsmc;
	document.getElementById("dizhi").value=dizhi;
	document.getElementById("qianming").value=qianming;
	document.getElementById("span_usercreatetime").innerHTML=createtime;
	
}

function setuserzhuanyuanbuf(id){
	var zuid=document.getElementById("selectid"+id).value;
	setuserzhuanyuan(id,zuid);
}

function setuserzhuanyuan(uid,kefuid){
	hiddeniframe.location.href='{XZKJURL}/useration.php?action=setuserkefuid&uid='+uid+'&kefuid='+kefuid;
}

function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}

function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=userweifenpei&nick="+sosonick;
	window.location.href=url;
}
</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="yhglwfpkh" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">用户管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">未分配客户</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                        <div class="fl"><input class="inputtext" type="text" name="" placeholder="在此输入用户名..." id="sosonick"></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name=""  onclick="soso()"></div>
                                    </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>余额(元)</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>单价(元/条)</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户资料</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>分配客服专员</div></span>
                            </li>
                            
                            
							<!--{loop $userarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[username]}</span>
                                <span class="list2 mt">{$value[dxnum]}<span id="bzbj0" style="cursor:pointer;display:none;" onClick="document.getElementById('boxshowxgfz').style.display='';"><img src="baima/template/images/bj.png" width="16" height="16"></span></span>
                                <span class="list3 mt">{$value[jiage]}</span>
                                <span class="list4 mt" style="color:#006dcb;">
                                	<span class="cp" onClick="setuser('{$value[id]}','{$value[username]}','{$value[sjh]}','{$value[lxrxm]}','{$value[lxrqq]}','{$value[gsmc]}','{$value[dizhi]}','{$value[qianming]}','{$value[createtime]}');document.getElementById('showyhzl').style.display='';">查看</span>
                                </span>
                                <span class="list5 mt" style="color:#006dcb;">
                                <!--带标识-->
                                	<span class="cp" onClick="document.getElementById('showtfptips{$key}').style.display='';">分配</span>
                                </span>
                                <!--带标识-->
                                <div id="showtfptips{$key}" style="position:absolute; font-size:11px; font-family:'微软雅黑'; font-weight:bold; margin-top:-70px; margin-left:548px; width:212px; height:70px; border:#ff8400 1px solid; background-color:#ffface; display:none;">
                                    <div class="fl" style="margin-top:14px; margin-left:10px; margin-right:5px;">分配至:</div>
                                    <div class="fl" style="margin-top:8px;">
									
                                        <select id="selectid{$value[id]}" style="font-size:13px; width:120px;height:27px; border:#add1fe 1px solid; cursor:pointer;">	
											<!--{loop $zhuanyuanarr $zv}-->
                                            <option value="{$zv[id]}">{$zv[username]}</option>
											<!--{/loop}-->
                                        </select>
										
                                    </div>
                                    <div class="fl" style="margin-top:14px; margin-left:3px; margin-right:5px;">客服</div>
                                    <div class="cp" style="margin-top:40px;">
                                        <span>
                                            <input id="thesearch" type="button" name="" style="font-size:13px; color:#666;width:37px;height:20px;cursor:pointer; border:none; background:url(baima/template/images/fpqd.png) no-repeat;" onclick="setuserzhuanyuanbuf('{$value[id]}')">
                                        </span>
                                        <!--带标识-->
                                        <span onClick="document.getElementById('showtfptips{$key}').style.display='none';">
                                            <img src="baima/template/images/fpqx.png" width="37" height="20">
                                        </span>
                                    </div>
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
                
                    <div style="margin-top:140px; margin-left:300px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            当前没有未分配客户
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showyhzl" class="showyhzl" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-250px 0 0 -275px;width:550px;height:500px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">用户资料</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showyhzl').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			
			<form action="{XZKJURL}/useration.php?action=setuserinfo" method="post" target="hiddeniframe">

            <div style="width:530px; height:460px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:100px; margin-top:20px;">
                	<span>用户名：</span><span style="margin-left:44px;"><input class="inputtext" name="username" id="username"  type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入用户名..."/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>联系电话：</span><span style="margin-left:27px;"><input class="inputtext" name="sjh" id="sjh" type="text" maxlength="11" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="请输入联系电话..."/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>联系人姓名：</span><span style="margin-left:10px;"><input class="inputtext" name="lxrxm" id="lxrxm" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入联系人姓名..."/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>联系人QQ：</span><span style="margin-left:16px;"><input class="inputtext" name="lxrqq" id="lxrqq" type="text" maxlength="10" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="请输入联系人QQ..."/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>公司名称：</span><span style="margin-left:27px;"><input class="inputtext2" name="gsmc" id="gsmc" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入公司名称..."/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>公司地址：</span><span style="margin-left:27px;"><input class="inputtext2" name="dizhi" id="dizhi"  type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="请输入公司地址..."/></span>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<span>短信签名：</span><span style="margin-left:27px;"><input class="inputtext2"  name="qianming" id="qianming" type="text" maxlength="10000" onKeyPress="this.style.color='black';" placeholder="请输入短信签名..."/></span>
                </div>
<div style="margin-left:100px; margin-top:20px;">
                	<span>注册时间：</span><span style="margin-left:27px;" id="span_usercreatetime">2015-11-11 11:11</span>
                </div>
                <div style="margin-left:130px; margin-top:20px;">
                	<div class="fl cp">
					<input type="hidden" name="uid" id="uid" value=""/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showyhzl').style.display='none';">
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
<script src="baima/template/js/yhglwfpkh.js" type="text/javascript"></script>

<!--{template footer}-->