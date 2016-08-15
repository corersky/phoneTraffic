<!--{template header}-->
<script src="{XZKJURL}/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>

<style>
#zwglczjl .inputtext{color:#666;width:190px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#zwglczjl .inputtext2{width:190px;height:28px; border:#bbb 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; 

font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#zwglczjl .mt{margin-top:12px;}
#zwglczjl .mt2{margin-top:8px;}
#zwglczjl #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#zwglczjl #mythetable{
	width:740px;
	margin:0 auto;
}
#zwglczjl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#zwglczjl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}
#zwglczjl #table li span.list1{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#zwglczjl #table li span.list2{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zwglczjl #table li span.list3{
text-decoration:none;
float:left;
width:110px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zwglczjl #table li span.list4{
text-decoration:none;
float:left;
width:110px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zwglczjl #table li span.list5{
text-decoration:none;
float:left;
width:150px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zwglczjl #table li span.list6{
text-decoration:none;
float:left;
width:110px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>

<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  stime=document.getElementById("thedatestart").value;
	var  etime=document.getElementById("thedateend").value;
	 
	var  kefuid=document.getElementById("kefuid").value;
	var  yingxiaoid=document.getElementById("yingxiaoid").value;
	 
	   
	var url="{XZKJURL}"+"/index.php?action=dxchongzhitongjilog&stime="+stime+"&etime="+etime+"&kefuid="+kefuid+"&yingxiaoid="+yingxiaoid;
	window.location.href=url;
}
</script>


<div id="mains">
	<div id="zwglczjl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; 

font-weight:bold;">账务管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-

webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" 

width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; 

font-weight:bold;">统计查询</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:175px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -

1px;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-top:10px; 

margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索时间段：</div>
                                    <div class="fl" style="margin-left:20px;"><input id="thedatestart" type="text" 

name="date" style="font-size:13px; color:#666;width:190px;height:27px;cursor:pointer; border:#bbb 1px solid;background:url

(baima/template/images/datetextboxinput.png) no-repeat;" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="{$stime}"></div>
                                    <div class="fl" style="margin-top:5px;">&nbsp;&nbsp;至&nbsp;&nbsp;</div>
                                    <div class="fl"><input id="thedateend" type="text" name="date" style="font-size:13px; 

color:#666;width:190px;height:27px;cursor:pointer; border:#bbb 1px solid; background:url

(baima/template/images/datetextboxinput.png) no-repeat; " onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="{$etime}"></div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-top:30px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索营销专员：</div>
                                    <div class="fl" style="margin-left:5px;">
                                    	<select name="" id="yingxiaoid" class="inputtext2">
                                            <option value="0">全部</option>
                                            <!--{loop $yingxiaozyarr $k=>$v}-->
                                            <option value="{$k}" <!--{if $yingxiaoid==$k}-->selected="selected"<!--{/if}-->>

{$v}</option>
                                            <!--{/loop}-->
                                        </select>
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-top:30px; 

margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索客服专员：</div>
                                    <div class="fl" style="margin-left:5px;">
                                    	<select name="" id="kefuid" class="inputtext2">
                                            <option value="0">全部</option>
                                             <!--{loop $fuwuzyarr $k=>$v}-->
                                            <option value="{$k}" <!--{if $kefuid==$k}-->selected="selected"<!--{/if}-->>{$v}

</option>
                                            <!--{/loop}-->
                                        </select>
                                    </div>
                                </div>
                                <div style="position:absolute; margin-left:400px;margin-top:-20px;"><input id="thesearch" 

type="button" style="width:100px;height:40px; background:url(baima/template/images/search3.png) no-repeat; font-size:13px; 

color:#666; border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                <div style="position:absolute; margin-top:35px;  margin-left:20px; text-align:left; font-family:'微软雅黑'; font-weight:bold; font-size:16px; color:#F00;">
                                    总实收金额：{$zongczshje}元<br>
									总赠送金额：{$zengsongzongczjine}元，赠送实收金额：{$zengsongzongczshje}元<br>
									总充值条数：{$zongczdxnum}条,当前所有用户剩余条数{$userzongsydxnum}条。 <br>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>用户名</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>充值时间</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>充值条数</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>实收金额</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>充值方式</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>充值人</div></span>
                            </li>
                            
 
							
							
							<!--{loop $czlogarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[nick]}</span>
                                <span class="list2 mt">{$value[createtime]}</span>
                                <span class="list3 mt">{$value[jine]}条</span>
<span class="list4 mt">{$value[shje]}元</span>
                                <span class="list5 mt2">{$cztypearr[$value[cztype]]}
								<!--{if !empty($value['beizhu'])}-->
								<img class="cp" src="baima/template/images/tjsbtips.png" 

width="16" height="16" title="{$value['beizhu']}">
								<!--{/if}-->
								</span>
                                <span class="list6 mt">{$value[czynick]}</span>
                            </li>
                            <!--{/loop}-->
							
                            
                            
                            <li style="height:58px;">
                            
                                 <div class="thepage">
                                    <span class="pagechoose">{$fenarr[sy]}</span>&nbsp;
									<span class="pagechoose">{$fenarr[shangy]}

</span>&nbsp;
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
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" 

maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>页
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('{$url}');" style="width:40px; 

height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; 

cursor:pointer;color:#FFF; font-size:16px;">
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
                            暂无充值记录
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>

<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zwgltjcx.js" type="text/javascript"></script>

   
<!--{template footer}-->