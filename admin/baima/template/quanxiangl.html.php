<!--{template header}-->
<script>
function setkefuqx(id,qx_mbgl,qx_ddgl,qx_cwgl,qx_dlsgl,qx_lltdgl){
	document.getElementById("kefuid").value=id;
	if(qx_mbgl==1){
		document.getElementById("qx_mbgl").checked=true;
	}else{
		document.getElementById("qx_mbgl").checked=false;
	}
	if(qx_ddgl==1){
		document.getElementById("qx_ddgl").checked=true;
	}else{
		document.getElementById("qx_ddgl").checked=false;
	}
	
	if(qx_cwgl==1){
		document.getElementById("qx_cwgl").checked=true;
	}else{
		document.getElementById("qx_cwgl").checked=false;
	}
	
	if(qx_dlsgl==1){
		document.getElementById("qx_dlsgl").checked=true;
	}else{
		document.getElementById("qx_dlsgl").checked=false;
	}
	
	if(qx_lltdgl==1){
		document.getElementById("qx_lltdgl").checked=true;
	}else{
		document.getElementById("qx_lltdgl").checked=false;
	}
	
	
}

</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="qxglkfqx" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">权限管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">客服权限</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>客服姓名</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户个数</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>权限</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            
							<!--{loop $userarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[username]}</span>
                                <span class="list2 mt">{$value[usernum]}</span>
                                <span class="list3 mt">
								<!--{if !empty($value['qx_mbgl'])}-->模板管理、<!--{/if}-->
								<!--{if !empty($value['qx_ddgl'])}-->订单管理、<!--{/if}-->
								<!--{if !empty($value['qx_cwgl'])}-->财务管理、<!--{/if}-->
								<!--{if !empty($value['qx_dlsgl'])}-->代理商管理、<!--{/if}-->
								</span>
                                <span class="list4 mt" style="color:#006dcb;">
                                	<span class="cp" onClick="setkefuqx('{$value[id]}','{$value[qx_mbgl]}','{$value[qx_ddgl]}','{$value[qx_cwgl]}','{$value[qx_dlsgl]}','{$value[qx_lltdgl]}');document.getElementById('showxgqx').style.display='';">修改</span>
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
                
                    <div style="margin-top:140px; margin-left:300px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            暂无设置客服权限
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showxgqx" class="showxgqx" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-130px 0 0 -275px;width:550px;height:260px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">修改权限</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showxgqx').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			<form action="{XZKJURL}/useration.php?action=setkefuqx" method="post" target="hiddeniframe">
            <div style="width:530px; height:220px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:100px; margin-top:50px;">
                	<span>
                        <span><input class="cp" type="checkbox" name="qx_mbgl" id="qx_mbgl" value="1"></span>
                        <span class="cd">模板管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </span>
                    <span>
                        <span><input class="cp" type="checkbox" name="qx_ddgl" id="qx_ddgl" value="1"></span>
                        <span class="cd">订单管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </span>
                    <span>
                        <span><input class="cp" type="checkbox"  name="qx_cwgl" id="qx_cwgl" value="1"></span>
                        <span class="cd">账务管理</span>
                    </span>
					
					<span>
                        <span><input class="cp" type="checkbox"  name="qx_dlsgl" id="qx_dlsgl" value="1"></span>
                        <span class="cd">代理商管理</span>
                    </span>
					
					<span>
                        <span><input class="cp" type="checkbox"  name="qx_lltdgl" id="qx_lltdgl" value="1"></span>
                        <span class="cd">流量通道管理</span>
                    </span>
					
					
                </div>
                <div style="margin-left:130px; margin-top:60px;">
                	<div class="fl cp">
						<input type="hidden" name="kefuid" id="kefuid" value=""/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showxgqx').style.display='none';">
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
<script src="baima/template/js/qxglkfqx.js" type="text/javascript"></script>
        

<!--{template footer}-->