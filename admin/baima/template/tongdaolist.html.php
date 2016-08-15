<!--{template header}-->
<script>
function settongdaobeizhu(id,beizhu){
	document.getElementById("tongdaobeizhu").value=beizhu;
	document.getElementById("tongdaoid").value=id;
}
   
function settongdaoguizhe(id,title,guizhe){
	document.getElementById("settongdaoguizheid").value=id;
	document.getElementById("settongdaoguizhe").value=guizhe;
	document.getElementById("div_settongdaoguizhe_title").innerHTML="查看“"+title+"”发送规则";
}

function settongdaoqitainfo(id,qt_jkyzmtd,qt_jktd,qt_qtshow){
	document.getElementById("qt_qtshow").checked=false;
	document.getElementById("qt_jkyzmtd").checked=false;
	document.getElementById("qt_jktd").checked=false;
	
    if(qt_qtshow=='1'){
		document.getElementById("qt_qtshow").checked=true;
	}
	if(qt_jkyzmtd=='1'){
		document.getElementById("qt_jkyzmtd").checked=true;
	}
	if(qt_jktd=='1'){
		document.getElementById("qt_jktd").checked=true;
	}
	document.getElementById("settongdaoid").value=id;
}

function settongdaotitle(id,title){
hiddeniframe.location.href='{XZKJURL}/useration.php?action=settongdaotitle&tongdaoid='+id+'&title='+title;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="tdglgltdzl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">通道管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">管理通道资料</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道资料名称</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>创建时间</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道资料备注</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>使用状态</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道类型</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送规则</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            
							
							<!--{loop $tongdaoarr $key=>$value}-->
                            <!--带标识-->
                            <li id="li{$key}" onMouseMove="showbj(this)" onMouseOut="closebj(this)">
                                
                                <span class="list1 mt">

                                <span id="dja{$key}" style="cursor:pointer;" onClick="djtext(this)">{$value[title]}</span>
                                <span id="djb{$key}" style="display:none;"><input id="djc{$key}" class="inputtext3" type="text" name="" onblur="settongdaotitle('{$value[id]}',this.value);"></span>

                                </span>




                                <span class="list2 mt">{$value[createtime]}</span>
                                <span class="list3 mt" onClick="settongdaobeizhu('{$value[id]}','{$value[beizhu]}');document.getElementById('showtdzlbz').style.display='';">{$value[beizhumsg]}...</span>
                                <span class="list4 mt">
									<!--{if empty($value['zt'])}-->
										<span style="">未使用</span>
									<!--{else}-->
										<span style="color:#19b401;">使用中</span>
									<!--{/if}--> 
                                </span>

				<span class="list5 mt3" onClick="settongdaoqitainfo('{$value[id]}','{$value[qt_jkyzmtd]}','{$value[qt_jktd]}','{$value[qt_qtshow]}');document.getElementById('showxgtdlx').style.display='';"><span class="cp">
				<div>{$value[qt_qtshowstr]}</div>
				<div>{$value[qt_jkyzmtdstr]}</div>
				<div>{$value[qt_jktdstr]}</div>
				
				</span></span>
                                <span class="list6 mt" style="color:#006dcb;">
                                	<span class="cp" onClick="settongdaoguizhe('{$value[id]}','{$value[title]}','{$value[guizhe]}');document.getElementById('showfsgz').style.display='';">查看</span>
                                </span>


                                <span class="list7 mt" style="color:#006dcb;">
									<!--{if empty($value['zt'])}-->
                                	<span class="cp"><a href="{XZKJURL}/useration.php?action=settongdaozt&id={$value[id]}&zt=1" target="hiddeniframe" style="color:#006dcb;">启用</a></span>
									<!--{else}-->
									<span class="cp"><a href="{XZKJURL}/useration.php?action=settongdaozt&id={$value[id]}&zt=0" target="hiddeniframe" style="color:#006dcb;">停用</a></span>
									<!--{/if}-->
                                    |
                                    <!--带标识-->
                                    <span class="cp" onClick="alert('请勿删除');">删除</span>
                                </span>
                                <!--带标识-->
                                <div id="showtdeltips0" style="position:absolute; font-size:13px; margin-top:-30px; margin-left:528px; width:210px; height:37px; border:#ff8400 1px solid; background-color:#ffface; display:none;">
                                	<div style="float:left; margin-top:12px; margin-left:8px; margin-right:5px;">是否删除通道资料？</div>
                                    <div style="float:left; margin:6px; cursor:pointer;"><input type="button" value="" style="width:25px; height:25px;background-image:url(baima/template/images/scfzyes.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;"></div>
                                    <!--带标识-->
                                    <div style="float:left; margin:6px; cursor:pointer;" onClick="document.getElementById('showtdeltips0').style.display='none';"><img src="baima/template/images/scfzno.png" width="25" height="25"></div>
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
                            暂无可管理通道资料
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>


<span id="showfsgz" class="showfsgz" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-155px 0 0 -275px;width:550px;height:310px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;" id="div_settongdaoguizhe_title">查看“通道一”发送规则</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showfsgz').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			
			<form action="{XZKJURL}/useration.php?action=settongdaoguizhe" method="post" target="hiddeniframe">
            <div style="width:540px; height:270px; overflow:hidden; margin-left:40px; margin-top:30px; font-family:'微软雅黑'; font-size:17px;">
            	<div>
                	<textarea name="guizhe" id="settongdaoguizhe" style="color:#666;width:430px;height:120px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:20px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" maxlength="100000" onpropertychange="if(value.length>100000) value=value.substr(0,100000)" onKeyPress="this.style.color='black';"></textarea>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<div class="fl cp">
						<input type="hidden" name="id" id="settongdaoguizheid" value=""/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showfsgz').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
			</form>
        </div>
	</div>
</span>
<span id="showxgtdlx" class="showxgtdlx" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-135px 0 0 -275px;width:550px;height:270px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">修改通道类型</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showxgtdlx').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			
			
			<form action="{XZKJURL}/useration.php?action=settongdaoqtinfo" method="post" target="hiddeniframe">
            <div style="width:540px; height:230px; overflow:hidden; margin-left:40px; margin-top:30px; font-family:'微软雅黑'; font-size:17px;">
            	<div style="margin-top:50px;">
                	<span style="margin-left:50px;"><input class="cp" type="checkbox" name="qt_qtshow" id="qt_qtshow" value="1">网站通知</span>
                    <span style="margin-left:50px;"><input class="cp" type="checkbox" name="qt_jkyzmtd" id="qt_jkyzmtd" value="1">接囗验证码</span>
                    <span style="margin-left:50px;"><input class="cp" type="checkbox" name="qt_jktd" id="qt_jktd" value="1">接囗通知</span>
                </div>
                <div style="margin-left:100px; margin-top:50px;">
                	<div class="fl cp">
						<input type="hidden" name="id" id="settongdaoid" value=""/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showxgtdlx').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
			</form>
        </div>
	</div>
</span>

<span id="showtdzlbz" class="showtdzlbz" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-155px 0 0 -275px;width:550px;height:310px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">修改通道备注</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showtdzlbz').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			
			<form action="{XZKJURL}/useration.php?action=settongdaobeizhu" method="post" target="hiddeniframe">
            <div style="width:540px; height:270px; overflow:hidden; margin-left:40px; margin-top:30px; font-family:'微软雅黑'; font-size:17px;">
            	<div>
                	<textarea name="tongdaobeizhu" id="tongdaobeizhu" style="color:#666;width:430px;height:120px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:20px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" maxlength="100000" placeholder="在此输入通道备注..." onpropertychange="if(value.length>100000) value=value.substr(0,100000)" onKeyPress="this.style.color='black';"></textarea>
                </div>
                <div style="margin-left:100px; margin-top:20px;">
                	<div class="fl cp">
						<input type="hidden" name="tongdaoid" id="tongdaoid" value=""/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showtdzlbz').style.display='none';">
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
<script src="baima/template/js/tdglgltdzl.js" type="text/javascript"></script>
<script>
function showbj(obj)
{
	$("#li"+obj.id.substring(2,obj.id.length)).css("background","#e8fbff");
}
function closebj(obj)
{
	$("#li"+obj.id.substring(2,obj.id.length)).css("background-color","#FFF");
}
</script>
<!--{template footer}-->