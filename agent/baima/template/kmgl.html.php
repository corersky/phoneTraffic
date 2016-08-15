<!--{template header}-->
<script src="{XZKJURL}/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  kazt=document.getElementById("kazt").value;
	var  czzt=document.getElementById("czzt").value;
	
	var  sjh=document.getElementById("sjh").value;
	 
	var url="{XZKJURL}"+"/index.php?action=kmgl&kazt="+kazt+"&czzt="+czzt+"&sjh="+sjh;
	window.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<style>
#kmglkgl .inputtext{color:#666;width:230px;height:30px; font-size:14px;}
#kmglkgl .v1{margin-top:20px;}
#kmglkgl .v2{font-size:13px; font-family:'微软雅黑'; font-weight:bold;}
#kmglkgl .v3{margin-top:8px;}
#kmglkgl .v4{font-size:11px; color:#666;width:120px;height:30px; border:#add1fe 1px solid; cursor:pointer; font-size:13px; font-family:"微软雅黑"; font-weight:bold;}
#kmglkgl .v7{margin-top:10px;margin-left:-20px;}
#kmglkgl .v8{font-size:13px; font-family:'微软雅黑'; font-weight:bold;}
#kmglkgl .v9{margin-top:8px;}
#kmglkgl .v10{font-size:11px; color:#666;width:150px;height:27px; border:#add1fe 1px solid; outline:none;}
#kmglkgl .v11{font-size:13px; color:#666;border:none;cursor:pointer;width:49px;height:24px;}
#kmglkgl .v12{margin-left:10px;margin-top:2px;}
#kmglkgl .mt{margin-top:12px;}
#kmglkgl .mt2{margin-top:5px;}
#kmglkgl .pageli{height:58px;}
#kmglkgl .thepage{float:left; margin-top:22px; font-size:13px; margin-left:140px; color:#666;}
#kmglkgl .pagechoose{border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;}
#kmglkgl .pagechoose a{color:#666;}
#kmglkgl .pagegoto{float:left; font-size:12px; margin-top:-1px; margin-left:5px; cursor:pointer;}
#kmglkgl .pagenum{font-size:12px; margin-left:-4px; margin-right:-4px;}
#kmglkgl .nowpagetext{color:#7e7e7e;width:26px;height:18px;font-size:12px;}
#kmglkgl .pagego{float:left; font-size:12px; margin-left:10px; margin-top:-2px;}
#kmglkgl .pageall{float:left; margin-top:22px; font-size:12px; margin-left:20px; color:#666;}
#kmglkgl .pagetheall{float:left; font-size:12px; margin-top:2px;}
#kmglkgl .pagetheallfont{font-size:12px;}
#kmglkgl .pagelimsga{color:#299be4;}
#kmglkgl .pagelia{color:#299be4;}
#kmglkgl #table{
	float:left;
	width:750px;
	text-align:left;
	border:1px #81beff solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#kmglkgl #mythetable{
	width:750px;
	margin:0 auto;
}
#kmglkgl #table li{
float:left;
width:750px;
height:40px;
border-bottom:1px solid #81beff;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#kmglkgl #table li.title{
width:750px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#cdedf8;
padding-top:13px;
}

#kmglkgl #table li span.list1{
text-decoration:none;
float:left;
width:100px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#kmglkgl #table li span.list2{
text-decoration:none;
float:left;
width:100px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list3{
text-decoration:none;
float:left;
width:100px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list4{
text-decoration:none;
float:left;
width:80px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list5{
text-decoration:none;
float:left;
width:100px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list6{
text-decoration:none;
float:left;
width:90px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list7{
text-decoration:none;
float:left;
width:90px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list8{
text-decoration:none;
float:left;
width:90px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>

<div id="mains">
	<div id="kmglkgl">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：卡密管理-卡管理</div>
        </div>
        
        <div class="v1">
        	<div class="v2">
            	<div style="height:40px;">
                    <div class="fl v3">&nbsp;&nbsp;卡状态：&nbsp;</div>
                    <div class="fl">
                        <select class="v4" name="" id="kazt" onchange="soso()">
							<option value="0">全部</option>
                            <option value="1" <!--{if $kazt==1}-->selected="selected"<!--{/if}-->>未充值卡密</option>
                            <option value="2" <!--{if $kazt==2}-->selected="selected"<!--{/if}-->>已充值卡密</option>
                        </select>
                    </div>
                    <div class="fl v3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;充值状态：&nbsp;</div>
                    <div class="fl">
                        <select class="v4" name="" id="czzt" onchange="soso()">
							<option value="0">全部</option>
                            <option value="1" <!--{if $czzt==1}-->selected="selected"<!--{/if}-->>充值成功</option>
                            <option value="2" <!--{if $czzt==2}-->selected="selected"<!--{/if}-->>充值失败</option>
                            <option value="3" <!--{if $czzt==3}-->selected="selected"<!--{/if}-->>充值中</option>
                        </select>
                    </div>
                    <div class="fl v3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;搜索：&nbsp;</div>
                    <div class="fl">
                        <input class="v10" type="text" name="date" id="sjh" value="{$sjh}" placeholder="在此输入单个手机号或卡号...">
                    </div>
                    <div class="fl v12"><input id="thesearch" class="v11" type="text" name="" style="background:url(baima/template/images/search2.png) no-repeat;" onclick="soso()"></div>
                </div>
            </div>
        </div>
        
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>卡号</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>密码</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>套餐</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值状态</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值时间</div></span>
                            <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>运营商</div></span>
                            <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值号码</div></span>
                            <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>扣款状态</div></span>
                        </li>

                        
                        <div id="msgyes">
                             <!--{loop $kaarr $value}-->
                            <li>
                                <span class="list1 mt">{$value[id]}</span>
                                <span class="list2 mt">{$value[pwd]}</span>
                                <span class="list3 mt" >{$value[liuliang]}M</span>
                                <span class="list4 mt" >{$llczztarr[$value[zt]]}</span>
                                <span class="list5 mt2">{$value[jihuotime]}</span>
                                <span class="list6 mt">{$sjhtypearr[$value[sjhtype]]}</span>
                                <span class="list7 mt">{$value[sjh]}</span>
                                <span class="list8 mt">{$value[kkmsg]}</span>
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

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/kmglkgl.js" type="text/javascript"></script>


<!--{template footer}-->