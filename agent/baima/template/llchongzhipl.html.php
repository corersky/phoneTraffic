<!--{template header}-->





<div id="mains">
	<div id="plcsjllczll">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：充手机流量-批量充值流量</div>
        </div>
		
		
		<form action="liuliangationpl.php?action=addliuliangpl" method="post">
        
        <div style="margin-top:20px; margin-left:15px; height:125px;">
        	<div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">输入号码区域：</div>
            <div style="float:left;"><textarea id="sjh" name="sjh" style="color:#666;width:590px;height:120px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:#add1fe 1px solid;" name="" maxlength="100000" onpropertychange="if(value.length>100000) value=value.substr(0,100000)" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/[^\r\n0-9]/g,'')" onafterpaste="this.value=this.value.replace(/[^\r\n0-9]/g,'')"></textarea></div>
            
        </div>
        
        <div style="margin-top:0px; margin-left:140px; height:16px; font-family:'微软雅黑'; font-size:13px; color:#F00; font-weight:bold;">
        	注：每行一个手机号码，支持文本粘贴使用。
        </div>
        <div style="margin-left:120px; margin-top:10px;">
        	<span class="cp" onClick="showdaorutxt()"><img src="baima/template/images/dxfs1.png" width="64" height="30"></span>
        </div>
        
        <div id="thetaocan" style="margin-top:0px; margin-left:25px;">
        	<div style="float:left;font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px; margin-right:75px;">流量充值套餐：</div>
            <div id="theyidong" style="float:left; width:638px; margin-left:50px;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为移动套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="10"></div>
                    	<div style="float:left;">10M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="30"></div>
                    	<div style="float:left;">30M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="70"></div>
                    	<div style="float:left;">70M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="150"></div>
                    	<div style="float:left;">150M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="500"></div>
                    	<div style="float:left;">500M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="1024"></div>
                    	<div style="float:left;">1G</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="2048"></div>
                    	<div style="float:left;">2G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="3072"></div>
                    	<div style="float:left;">3G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="4096"></div>
                    	<div style="float:left;">4G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="6144"></div>
                    	<div style="float:left;">6G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:10px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="11264"></div>
                    	<div style="float:left;">11G</div>
                    </div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:10px; text-align:center;">
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费3元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费5元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费10元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费20元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费30元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费50元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费70元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费100元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费130元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费180元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费280元</div>
                </div>
            </div>
            <div id="theyidong" style="float:left; width:638px; margin-left:50px;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为联通套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="20"></div>
                    	<div style="float:left;">20M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="50"></div>
                    	<div style="float:left;">50M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="100"></div>
                    	<div style="float:left;">100M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="200"></div>
                    	<div style="float:left;">200M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="500"></div>
                    	<div style="float:left;">500M</div>
                    </div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:10px; text-align:center;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费3元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费6元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费10元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费15元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费30元</div>
                </div>
            </div>
            <div id="theyidong" style="float:left; width:638px; margin-left:50px;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为电信套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="5"></div>
                    	<div style="float:left;">5M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="10"></div>
                    	<div style="float:left;">10M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="30"></div>
                    	<div style="float:left;">30M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="50"></div>
                    	<div style="float:left;">50M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="100"></div>
                    	<div style="float:left;">100M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="200"></div>
                    	<div style="float:left;">200M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="500"></div>
                    	<div style="float:left;">500M</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="1024"></div>
                    	<div style="float:left;">1G</div>
                    </div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:10px; text-align:center;">
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费1元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费2元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费5元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费7元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费10元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费15元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费30元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费50元</div>
                </div>
            </div>
            
            <div id="thesure" style="padding-top:320px; padding-bottom:20px; width:131px; height:45px; margin-left:280px;">
                <input type="submit" style="width:131px;height:45px; background:url(baima/template/images/sjcllsuretraffic.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" value="">
            </div>
        </div>
		
		
		</form>
        
        
        
    </div>
</div>

<span id="boxshowtxtdr" style="display:none;">
	<a id="showtxtdr" href="javascript:;"></a>
	<div id="dialogBgshowtxtdr" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div id="dialogshowtxtdr" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-105px 0 0 -275px;width:550px;height:210px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
		<div class="dialogTopshowtxtdr">
			<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">TXT文本导入</div>
                </div>
                <div style="margin-top:6px;">
                	<iframe name="showfzdr_daorutxt_iframe" id="showfzdr_daorutxt_iframe" src="#" width="550" height="170" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe> 
                </div>
            </div>
			<div id="showtxtdrclose" style="position:absolute;margin-top:-280px;padding-left:500px" onClick="document.getElementById('boxshowtxtdr').style.display='none';">
				<a href="javascript:;" class="claseDialogBtnshowtxtdr"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
			</div>
		</div>
	</div>
</span>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/csjllplczll.js" type="text/javascript" charset="utf-8"></script>

<script>
function setsendsmssjh(sjh){
	sjh=sjh.replace(/,/ig,"\n"); 
	document.getElementById("sjh").value=document.getElementById("sjh").value+"\n"+sjh;
	document.getElementById('boxshowtxtdr').style.display="none";
	
}

function showdaorutxt(){
	document.getElementById("showfzdr_daorutxt_iframe").src="";
	document.getElementById("showfzdr_daorutxt_iframe").src="index.php?action=llchongzhipl_daorutxt";
	document.getElementById('boxshowtxtdr').style.display='';
}
</script>

<!--{template footer}-->