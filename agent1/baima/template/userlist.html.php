<!--{template header}-->
<script>
function setuser(uid,username,sjh,lxrxm,lxrqq,gsmc,dizhi){
	document.getElementById("uid").value=uid;
	document.getElementById("username").value=username;
	document.getElementById("sjh").value=sjh;
	document.getElementById("lxrxm").value=lxrxm;
	
	document.getElementById("lxrqq").value=lxrqq;
	document.getElementById("gsmc").value=gsmc;
	document.getElementById("dizhi").value=dizhi;
}
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}

function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=userlist&nick="+sosonick;
	window.location.href=url;
}
</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="dxglwdkh" style="margin-bottom:30px;">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：用户管理-我的客户</div>
        </div>
        <div class="v1">
            <div class="v8">
                <div class="fl v9">&nbsp;&nbsp;搜索：</div>
                <div class="fl"><input id="sosonick" class="v10" type="text" name="date" placeholder="在此输入用户名进行查找"></div>
                <div class="fl v12"><input id="thesearch" class="v11" type="text" name="" style="background:url(baima/template/images/search2.png) no-repeat;" onclick="soso()"></div>
            </div>
				
        </div>
		
	
        
		
		<div class="v7">
            <div id="mythetable">
			
			<font color="#FF0000">
				注：新开用户的默认密码为：123123，请通过<a href="http://duanxin.xzkj168.cn" target="_blank">http://duanxin.xzkj168.cn</a>平台登陆使用。
				</font>
				
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信余额</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>详细信息</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>管理</div></span>
                        </li>

                        
                        <div id="msgyes">
                            <!--{loop $userarr $key=>$value}-->
                            <li>
                                <!--标识：id="xxxx1"，id="showxxxxtips1"-->
                                <span class="list1 mt">{$value[username]}</span>
                                <span class="list2 mt">{$value[dxnum]}条</span>
                                <span id="xxxx{$key}" class="list3 mt" onMouseMove="showmovexxxx(this)" onMouseOut="showoutxxxx(this)">详细信息</span>
                                <span class="list4 mt" onClick="setuser('{$value[id]}','{$value[username]}','{$value[sjh]}','{$value[lxrxm]}','{$value[lxrqq]}','{$value[gsmc]}','{$value[dizhi]}');document.getElementById('showxgzl').style.display='';">修改</span>
                                <div id="showxxxxtips{$key}" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:250px; margin-left:500px; margin-top:-60px; line-height:20px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; display:none;">
                                	<div style="margin:8px; text-align:left;">
                                    	{$value[xxinfo]}
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
                        </div>
						
                        <div id="msgno" style="display:none;">
                            <li style="height:300px;">
                            
                                <div style="margin-top:140px; font-size:14px; font-weight:bold;">
                                    亲，未查询到搜索记录...
                                </div>
                                
                            </li>
                        </div>
						
						
						
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<span id="showxgzl" class="showxgzl" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-190px 0 0 -275px;width:550px;height:380px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">修改资料</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showxgzl').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
			
			<form action="{XZKJURL}/useration.php?action=setuserinfo" method="post" target="hiddeniframe">
            <div style="width:540px; height:340px; overflow:hidden; margin-left:40px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
            	<div style="width:540px; padding-left:10px; padding-top:20px;">
                    
                    <div style=" margin-left:30px; font-family:'微软雅黑'; font-size:16px;">
                        <div>
                            <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">用户名：</div><div class="fl" style="margin-left:53px; margin-top:-6px;"><input class="inputtext"   name="username" id="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入用户名..." /></div>
                        </div>
                        <div style="padding-top:45px;">
                            <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">联系人电话：</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="sjh" id="sjh" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入联系人电话..."/></div>
                        </div>
                        <div style="padding-top:45px;">
                            <div class="fl" style="margin-left:47px;">联系人姓名：</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="lxrxm" id="lxrxm" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入联系人姓名..."/></div>
                        </div>
                        <div style="padding-top:40px;">
                            <div class="fl" style="margin-left:47px;">联系人QQ：</div><div class="fl" style="margin-left:28px; margin-top:-6px;"><input class="inputtext" name="lxrqq" id="lxrqq" type="text" maxlength="10" onKeyPress="this.style.color='black';"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="请输入联系人QQ..."/></div>
                        </div>
                        <div style="padding-top:45px;">
                            <div class="fl" style="margin-left:47px;">公司名称：</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="gsmc" id="gsmc" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入公司名称..."/></div>
                        </div>
                        <div style="padding-top:45px;">
                            <div class="fl" style="margin-left:47px;">公司地址：</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="dizhi" id="dizhi" type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="请输入公司地址..."/></div>
                        </div>
                        <div style="padding-top:40px; margin-left:150px;">
						<input type="hidden" name="uid" id="uid" value=""/>
                            <input class="v7" type="submit" value="" style="width:117px; height:39px;background-image:url(baima/template/images/bcxg.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                        </div>
                    </div>
                    
                </div>
            </div>
			</form>
			
        </div>
	</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxglwdkh.js" type="text/javascript"></script>


<!--{template footer}-->