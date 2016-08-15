<!--{template header}-->
<script>
function soso(){
	var  sosozt=document.getElementById("sosozt").value;
	var  sososjh=document.getElementById("sososjh").value;
	var url="{XZKJURL}"+"/user.php?action=liuliangchongzhilog&sosozt="+sosozt+"&sososjh="+sososjh;
	window.location.href=url;
}
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}

</script>



<div id="mains">
	<div id="sjclldhjl">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：手机充流量-兑换记录</div>
        </div>
        
        <div style="height:20px; color:#F00; font-family:'微软雅黑'; font-size:14px; font-weight:bold;">
        	注:  由于短信数据量较大，系统仅显示三个月以内的所有订单
        </div>
        
        <div class="v1">
        	<div class="v2">
            	<div class="fl v3">兑换状态：&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="sosozt" onchange="soso()">
						<option value="0">所有</option>
                        <option value="1"  <!--{if $sosozt==1}-->selected="selected"<!--{/if}-->>兑换成功</option>
                        <option value="2"  <!--{if $sosozt==2}-->selected="selected"<!--{/if}-->>兑换失败</option>
                    </select>
                </div>
            </div>
            <div class="v8">
                <div class="fl v9">&nbsp;&nbsp;搜索：</div>
                <div class="fl"><input id="sososjh" class="v10" type="text" name="date" placeholder="在此输入手机号码" value="{$sososjh}"></div>
                <div class="fl v12"><input id="thesearch" class="v11" type="text" name="" style="background:url(baima/template/images/search2.png) no-repeat;" onclick="soso()"></div>
            </div>
        </div>
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>兑换号码</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>套餐内容</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>兑换条数</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交时间</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交状态</div></span>
                        </li>

                        <!--{if !empty($logarr)}-->
                        <div id="msgyes">
                            
							<!--{loop $logarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[sjh]}</span>
                                <span class="list2 mt">{$value[msg]}</span>
                                <span class="list3 mt">{$value[dxnum]}</span>
                                <span class="list4 mt">{$value[createtime]}</span>
                                <span class="list5 mt">{$value[ztstr]}</span>
                                
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
                                        <input class="nowpagetext" name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
                                    </span>页
                                    </div>
                                    <div class="pagegoto">
                                        <input type="button" value="" onClick="tiaozhuan('{$url}');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                        </div>
						
						<!--{else}-->
						
                        <div id="msgno">
                            <li style="height:300px;">
                            
                                <div style="margin-top:140px; font-size:14px; font-weight:bold;">
                                    亲，该时间未查询到搜索记录...
                                </div>
                                
                            </li>
                        </div>
						
						<!--{/if}-->
						
						
						
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/sjclldhjl.js" type="text/javascript"></script>

<!--{template footer}-->