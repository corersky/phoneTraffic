<!--{template header}-->

<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjxftj .inputtext{color:#666;width:100px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjxftj .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; 

font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjxftj .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; 

font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjxftj .v1{}
#lltjxftj .v2{}
#lltjxftj .v3{}
#lltjxftj .v4{}
#lltjxftj .v5{}
#lltjxftj .v6{}
#lltjxftj .v7{}
#lltjxftj .v8{}
#lltjxftj .mt{margin-top:12px;}
#lltjxftj #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#lltjxftj #mythetable{
	width:740px;
	margin:0 auto;
}
#lltjxftj #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjxftj #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjxftj #table li span.list1{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjxftj #table li span.list2{
text-decoration:none;
float:left;
width:70px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list3{
text-decoration:none;
float:left;
width:70px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list4{
text-decoration:none;
float:left;
width:90px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list5{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list6{
text-decoration:none;
float:left;
width:90px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list7{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list8{
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
	var  sosoy=document.getElementById("sosoy").value;
	var  sosom=document.getElementById("sosom").value;
	var  sosonick=document.getElementById("sosonick").value;
	
	var  yystype=document.getElementById("yystype").value;
	var  tongdaiid=document.getElementById("tongdaiid").value;
	var  tjzt=document.getElementById("tjzt").value;
	var  yingxiaoid=document.getElementById("yingxiaoid").value;
	
	var url="{XZKJURL}"+"/index.php?action=liuliangxftj2&sosoy="+sosoy+"&sosom="+sosom+"&nick="+sosonick+"&yystype="+yystype+"&tongdaiid="+tongdaiid+"&tjzt="+tjzt+"&yingxiaoid="+yingxiaoid;
	window.location.href=url;
}

function xfjlqh(){
	var  sosoy=document.getElementById("sosoy").value;
	var  sosom=document.getElementById("sosom").value;
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=liuliangxftj&sosoy="+sosoy+"&sosom="+sosom+"&nick="+sosonick;
	window.location.href=url;

}
</script>
<div id="mains">
	<div id="lltjxftj" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; 

font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;

-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" 

width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; 

font-weight:bold;">消费统计</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">

            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:120px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                            	<div style="height:35px;">
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">消费方式：</div>
                                        <div class="fl">
                                            <select name="" class="inputtext2" onchange="xfjlqh()">
                                                <option value="0">流量充值</option>
                                                <option value="1">短信充值</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">运营商：</div>
                                        <div class="fl">
                                            <select name="" class="inputtext2" id="yystype" onchange="soso()">
											    <option value="0">全部</option>
                                                <option value="3" <!--{if $yystype==3}-->selected="selected"<!--{/if}-->>移动</option>
                                                <option value="1" <!--{if $yystype==1}-->selected="selected"<!--{/if}-->>联通</option>
                                                <option value="2" <!--{if $yystype==2}-->selected="selected"<!--{/if}-->>电信</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">通道：</div>
                                        <div class="fl">
                                            <select name="" class="inputtext2" id="tongdaiid" onchange="soso()">
												<option value="0">全部</option>
												<!--{loop $tongdaoarr $value}-->
                                                <option value="{$value[id]}" <!--{if $tongdaiid==$value['id']}-->selected="selected"<!--{/if}-->>{$value[title]}</option>
												<!--{/loop}-->
                                               
												
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">时间查询：</div>
                                        <div class="fl">
                                           <select name="" class="inputtext3" id="sosoy" onchange="soso()">
                                             <option value="2015" <!--{if $sosoy==2015}-->selected="selected"<!--{/if}-->>2015</option>
                                            <option value="2016" <!--{if $sosoy==2016}-->selected="selected"<!--{/if}-->>2016</option>
                                            <option value="2017" <!--{if $sosoy==2017}-->selected="selected"<!--{/if}-->>2017</option>
											<option value="2018" <!--{if $sosoy==2018}-->selected="selected"<!--{/if}-->>2018</option>
                                        </select>
                                        </div>
                                        <div class="fl" style="margin-top:4px; margin-left:5px;">年&nbsp;&nbsp;</div>
                                        <div class="fl">
                                           <select name="" class="inputtext3" id="sosom" onchange="soso()">
                                            <option value="1" <!--{if $sosom==1}-->selected="selected"<!--{/if}-->>1</option>
											<option value="2" <!--{if $sosom==2}-->selected="selected"<!--{/if}-->>2</option>
											<option value="3" <!--{if $sosom==3}-->selected="selected"<!--{/if}-->>3</option>
											<option value="4" <!--{if $sosom==4}-->selected="selected"<!--{/if}-->>4</option>
											<option value="5" <!--{if $sosom==5}-->selected="selected"<!--{/if}-->>5</option>
											<option value="6" <!--{if $sosom==6}-->selected="selected"<!--{/if}-->>6</option>
											<option value="7" <!--{if $sosom==7}-->selected="selected"<!--{/if}-->>7</option>
											<option value="8" <!--{if $sosom==8}-->selected="selected"<!--{/if}-->>8</option>
											<option value="9" <!--{if $sosom==9}-->selected="selected"<!--{/if}-->>9</option>
											<option value="10" <!--{if $sosom==10}-->selected="selected"<!--{/if}-->>10</option>
											<option value="11" <!--{if $sosom==11}-->selected="selected"<!--{/if}-->>11</option>
											<option value="12" <!--{if $sosom==12}-->selected="selected"<!--{/if}-->>12</option>
                                        </select>
                                        </div>
                                        <div class="fl" style="margin-top:4px; margin-left:5px;">月</div>
                                    </div>
                                </div>
                                <div style="height:40px;">
                                	<div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                        <div class="fl"><input class="inputtext" type="text" name="" placeholder="输入代理商查询..." id="sosonick" value="{$nick}"></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:70px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()">
</div>


                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:5px;">
                                        <div class="fl" style="margin-top:4px; margin-left:-5px;">状态：</div>
                                        <div class="fl">
                                            <select name="" class="inputtext3" id="tjzt" onchange="soso()">
                                            <option value="0">成功</option>
											<option value="1" <!--{if $tjzt==1}-->selected="selected"<!--{/if}-->>失败未付款</option>
											<option value="2" <!--{if $tjzt==2}-->selected="selected"<!--{/if}-->>失败已返款</option>
                                        </select>
                                        </div>
                                    </div>
									<div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:5px;">
                                        <div class="fl" style="margin-top:4px; margin-left:20px;">营销专员：</div>
                                        <div class="fl">
                                            <select name="" class="inputtext3" id="yingxiaoid" onchange="soso()">
											<option value="0">全部</option>
											 <option value="-1" <!--{if $yingxiaoid==-1}-->selected="selected"<!--{/if}-->>公司</option>
												<!--{loop $yingxiaozyarr $k=>$v}-->
												<option value="{$k}" <!--{if $yingxiaoid==$k}-->selected="selected"<!--{/if}-->>{$v}</option>
												<!--{/loop}-->
											
                                        </select>
                                        </div>
                                    </div>
                                    

                                </div>
                                <div style="height:40px;">
                                	<div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:0px; margin-left:10px;">
                                        <div class="fl" style="margin-top:2px; margin-left:10px;">原价：<span style="color:#F00; font-size:16px;">{$mianzhijine}</span>元</div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:0px; margin-left:10px;font-size:13px;">

                                        <div class="fl" style="margin-top:2px; margin-left:10px;">代理价：<span style="color:#F00; font-size:16px;">{$shihoujine}</span>元</div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:0px; margin-left:10px;font-size:13px;">

										<!--{if empty($tjzt)}-->
                                        <div class="fl" style="margin-top:2px; margin-left:10px;">毛利：<span style="color:#F00; font-size:16px;">{$maolijine}</span>元</div>
										<!--{/if}-->
										
                                    </div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>代理商</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>运营商</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>通道</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>消费方式</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>消费时间</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>消费数量</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>原价</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>代理商价</div></span>
                            </li>
                            
                            <!--{loop $userarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[dlnick]}</span>
                                <span class="list2 mt">{$yunyingsarr[$value['sjhtype']]}</span>
                                <span class="list3 mt">通道{$value[tongdaoid]}</span>
                                <span class="list4 mt">流量充值</span>
                                <span class="list5 mt">{$value[createtime]}</span>
                                <span class="list6 mt">{$value[liuliang]}M*{$value[num]}</span>
                                <span class="list7 mt">{$value[mianzhijine]}元</span>
                                <span class="list8 mt">{$value[shihoujine]}元</span>
                                
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
                            暂无发票管理记录
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjxftj.js" type="text/javascript"></script>

<!--{template footer}-->