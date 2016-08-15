<!--{template header}-->
<script src="{XZKJURL}/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjwhdq .inputtext{color:#666;width:100px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjwhdq .inputtext2{width:70px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjwhdq .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjwhdq .inputtext4{width:70px;height:24px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjwhdq .inputtext5{width:70px;height:20px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjwhdq .v1{}
#lltjwhdq .v2{}
#lltjwhdq .v3{}
#lltjwhdq .v4{}
#lltjwhdq .v5{}
#lltjwhdq .v6{}
#lltjwhdq .v7{}
#lltjwhdq .v8{}
#lltjwhdq .mt{margin-top:12px;}
#lltjwhdq .mt2{margin-top:30px;}
#lltjwhdq .mt3{margin-top:5px;}
#lltjwhdq #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#lltjwhdq #mythetable{
	width:740px;
	margin:0 auto;
}
#lltjwhdq #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjwhdq #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjwhdq #table li span.list1{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjwhdq #table li span.list2{
text-decoration:none;
float:left;
width:60px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjwhdq #table li span.list3{
text-decoration:none;
float:left;
width:80px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjwhdq #table li span.list4{
text-decoration:none;
float:left;
width:80px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjwhdq #table li span.list5{
text-decoration:none;
float:left;
width:200px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjwhdq #table li span.list6{
text-decoration:none;
float:left;
width:200px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjwhdq #table li span.list7{
text-decoration:none;
float:left;
width:60px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="lltjwhdq" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">维护地区</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                            <form action="{XZKJURL}/dailiation.php?action=addtdwhdq" method="post" target="hiddeniframe">
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; border-bottom:none; margin:-1px 0 0 -1px;">
                            	<div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">省份：</div>
                                    <div class="fl">
                                    	<select name="sheng" class="inputtext2">
                                           
                                            <option value="河南">河南</option>
                                            <option value="北京">北京</option>
                                            <option value="河北">河北</option>
                                            <option value="吉林">吉林</option>
                                            <option value="辽宁">辽宁</option>
                                            <option value="黑龙江">黑龙江</option>
                                            <option value="安徽">安徽</option>
                                            <option value="陕西">陕西</option>
                                            <option value="山西">山西</option>
                                            <option value="甘肃">甘肃</option>
                                            <option value="湖北">湖北</option>
                                            <option value="天津">天津</option>
                                            <option value="上海">上海</option>
                                            <option value="浙江">浙江</option>
                                            <option value="福建">福建</option>
                                            <option value="广东">广东</option>
                                            <option value="广西">广西</option>
                                            <option value="贵州">贵州</option>
                                            <option value="湖南">湖南</option>
                                            <option value="江苏">江苏</option>
                                            <option value="江西">江西</option>
                                            <option value="内蒙古">内蒙古</option>
                                            <option value="宁夏">宁夏</option>
                                            <option value="青海">青海</option>
                                            <option value="四川">四川</option>
                                            <option value="云南">云南</option>
                                            <option value="新疆">新疆</option>
                                            <option value="西藏">西藏</option>
                                            <option value="重庆">重庆</option>
                                            <option value="海南">海南</option>
                                            <option value="山东">山东</option>
                                            <option value="香港">香港</option>
                                            <option value="澳门">澳门</option>
                                            <option value="台湾">台湾</option>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">开始时间：</div>
                                    <div class="fl"><input class="inputtext" type="text"  name="starttime" id="starttime" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})"></div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">结束时间：</div>
                                    <div class="fl"><input class="inputtext" type="text"   name="endtime" id="endtime" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})"></div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">备注：</div>
                                    <div class="fl"><input class="inputtext" type="text" name="beizhu"></div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="submit" style="width:45px;height:20px; background:url(baima/template/images/dqwhsave.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" value=""></div>
                                </div>
                            </li>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; border-top:none; margin:-1px 0 0 -1px;">
                            	<div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">通道：</div>
                                    <div class="fl">
                                    	<select name="tongdaoid" class="inputtext2">
											<!--{loop $tongdaoarr $value}-->
                                            <option value="{$value[id]}">{$value[title]}</option>
											<!--{/loop}-->
                                        </select>
                                    </div>
                                </div>
                                
                            </li>
                            </form>
                            
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>省份</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>开始时间</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>结束时间</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>备注</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>添加时间</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            <!--{loop $whdqarr $value}-->
                            <li>
                                <span class="list1 mt">{$value[sheng]}</span>
                                <span class="list2 mt">通道{$value[tongdaoid]}</span>
                                <span class="list3 mt3">{$value[starttime]}</span>
                                <span class="list4 mt3">{$value[endtime]}</span>
                                <span class="list5 mt">{$value[beizhu]}</span>
                                <span class="list6 mt">{$value[createtime]}</span>
                                <span class="list7 mt"><a href="{XZKJURL}/dailiation.php?action=deltdwhdq&tongdaoid={$value[id]}" target="hiddeniframe" style="color:#006dcb;">删除</a></span>
                                
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
                            暂无已审核订单
                        </div>
                    </div>
                    
                </li>
            </div>
            
            <div id="msgsearchno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:240px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            您搜索的用户名<span class="colorred">不存在</span>，请核对后重新搜索
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjwhdq.js" charset="utf-8" type="text/javascript"></script>

<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
</script>

<!--{template footer}-->