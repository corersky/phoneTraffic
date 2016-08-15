<!--{template header}-->
<script src="{XZKJURL}/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function soso(){
	var  sosostime=document.getElementById("sosostime").value;
	var  sosoetime=document.getElementById("sosoetime").value;
	var url="{XZKJURL}"+"/user.php?action=smshuifu&sosostime="+sosostime+"&sosoetime="+sosoetime;
	window.location.href=url;
}

</script>


<div id="mains">
	<div id="dxgldxhf">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：短信管理-短信回复</div>
        </div>
        
        <div class="v1">
        	<div class="v2">
            	<div class="fl v3">短信回复时间：</div><div class="fl"><input id="sosostime" value="{$sosostime}" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" class="v4" type="text" name="date" style="background:url(baima/template/images/datetextboxinput.png) no-repeat;"></div>
				<div class="fl" style="margin-top:5px;">&nbsp;&nbsp;至&nbsp;&nbsp;</div><div class="fl"><input id="sosoetime" class="v4" type="text" name="date" value="{$sosoetime}" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" style=" background:url(baima/template/images/datetextboxinput.png) no-repeat; "></div><div class="fl" style="margin-top:3px; margin-left:10px;"><input class="v5" type="button" value="" style="width:41px; height:22px;background-image:url(baima/template/images/search.png); " onclick="soso();"></div>
            </div>
        </div>
        <div class="v6">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信号码</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>姓名</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信时间</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>回复内容</div></span>
                        </li>

                        
                        <div id="nowpage1" class="nowpage">
                            
                            <!--循环结束-->
                            
							<!--{loop $logarr $value}-->
                            <li>
                                
                                <span class="list1 mt40">{$value[sjh]}</span>
                                <span class="list2 mt40">{$value[xingming]}</span>
                                <span class="list3 mt40">{$value[createtime]}</span>
                                <span class="list4 mt12" style="text-align:left;">{$value[nei]}</span>
                                
                            </li>
							
							<!--{/loop}-->
                            
                            <!--循环结束-->
                            
                            
                        </div>
                        
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
                                        <input type="button" value="" onClick="tiaozhuan('{$url}');"  style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxgldxhf.js" type="text/javascript"></script>
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
</script>
<!--{template footer}-->