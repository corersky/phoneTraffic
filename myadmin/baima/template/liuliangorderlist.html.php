<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<style>
#ddgldhlldd .inputtext{color:#666;width:180px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#ddgldhlldd .inputtext2{width:100px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#ddgldhlldd .mt{margin-top:12px;}
#ddgldhlldd .mt2{margin-top:5px;}
#ddgldhlldd #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#ddgldhlldd #mythetable{
	width:740px;
	margin:0 auto;
}
#ddgldhlldd #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#ddgldhlldd #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#ddgldhlldd #table li span.list1{
text-decoration:none;
float:left;
width:90px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#ddgldhlldd #table li span.list2{
text-decoration:none;
float:left;
width:110px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#ddgldhlldd #table li span.list3{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#ddgldhlldd #table li span.list4{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:pointer;
font-size:13px;
}
#ddgldhlldd #table li span.list5{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:pointer;
font-size:13px;
}
#ddgldhlldd #table li span.list6{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#ddgldhlldd #table li span.list7{
text-decoration:none;
float:left;
width:80px;
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
	var  sosonick=document.getElementById("sosonick").value;
	var  sosozt=document.getElementById("sosozt").value;
	var url="{XZKJURL}"+"/index.php?action=liuliangorderlist&nick="+sosonick+"&zt="+sosozt;
	window.location.href=url;
}

</script>

<div id="mains">
	<div id="ddgldhlldd" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">订单管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">兑换流量订单</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                            	<div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">提交状态：</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2"  id="sosozt">
                                            <option value="0">全部</option>
                                            <option value="1" <!--{if $zt==1}-->selected="selected"<!--{/if}-->>提交成功</option>
                                            <option value="2" <!--{if $zt==2}-->selected="selected"<!--{/if}-->>提交失败</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                    <div class="fl"><input class="inputtext" id="sosonick" type="text" name="" placeholder="在此输入订单编号/用户名查询..." value="{$nick}"></div>
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>订单编号</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>兑换时间</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>兑换号码</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>兑换内容</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信扣除</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交状态</div></span>
                            </li>
                            
                            <!--{loop $orderarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[id]}</span>
                                <span class="list2 mt2">{$value[createtime]}</span>
                                <span class="list3 mt">{$value[nick]}</span>
                                <span class="list4 mt">{$value[sjh]}</span>
                                <span class="list5 mt">{$value[msg]}</span>
                                <span class="list6 mt">{$value[dxnum]}</span>
                                <span class="list7 mt">{$ztarr[$value[zt]]}</span>
                                
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
<script src="baima/template/js/ddgldhlldd.js" type="text/javascript"></script>


<!--{template footer}-->