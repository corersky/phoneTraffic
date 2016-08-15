<!--{template header}-->
<style>
#dlsglxfjl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#dlsglxfjl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; 

font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#dlsglxfjl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; 

font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#dlsglxfjl .v1{}
#dlsglxfjl .v2{}
#dlsglxfjl .v3{}
#dlsglxfjl .v4{}
#dlsglxfjl .v5{}
#dlsglxfjl .v6{}
#dlsglxfjl .v7{}
#dlsglxfjl .v8{}
#dlsglxfjl .mt{margin-top:12px;}
#dlsglxfjl #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#dlsglxfjl #mythetable{
	width:740px;
	margin:0 auto;
}
#dlsglxfjl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#dlsglxfjl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#dlsglxfjl #table li span.list1{
text-decoration:none;
float:left;
width:250px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#dlsglxfjl #table li span.list2{
text-decoration:none;
float:left;
width:250px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list3{
text-decoration:none;
float:left;
width:180px;
height:14px;
overflow:hidden;
cursor:pointer;
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
	var url="{XZKJURL}"+"/index.php?action=daili_yaoqinggl2&sosoy="+sosoy+"&sosom="+sosom+"&nick="+sosonick;
	window.location.href=url;
}

function showtuijianinfo(uid){
	var  sosoy=document.getElementById("sosoy").value;
	var  sosom=document.getElementById("sosom").value;
	var url="{XZKJURL}"+"/index.php?action=daili_yaoqinggl_showtuijianinfo2&uid="+uid+"&sosoy="+sosoy+"&sosom="+sosom;
	document.getElementById("showck").src=url;
}

function qiehuan(){
var url="{XZKJURL}"+"/index.php?action=daili_yaoqinggl";
location.href=url;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="dlsglxfjl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; 

font-weight:bold;">代理商管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-

webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" 

width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; 

font-weight:bold;">消费记录</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -

1px;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin

-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">代理：</div>
                                    <div class="fl">
									
									<select name="" class="inputtext3" id="sosonick">
											<option value="0">全部</option>
											<!--{loop $yaoqingdailiuserarr 

$value}-->
                                             <option value="$value[username]" <!--{if $value['username']==$nick}--

>selected="selected"<!--{/if}-->>$value[username]</option>
											 <!--{/loop}-->
                                        </select>
										
									</div>
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" 

type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; 

color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                </div>


<div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:30px;">类型：</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" onchange="qiehuan()">
										<option value="2">奖励明细</option>
                                            <option value="1">结算奖励</option>
                                            
                                        </select>
                                    </div>
                                </div>


                                <div style="float:right;font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-

top:0px; margin-right:20px;">
                                    <div class="fl" style="margin-top:4px; margin-left:30px;">时间查询：</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3" id="sosoy" onchange="soso()">
											<option value="0">全部</option>
                                             <option value="2015" <!--{if $sosoy==2015}-->selected="selected"<!--{/if}-->>2015</option>
                                            <option value="2016" <!--{if $sosoy==2016}-->selected="selected"<!--{/if}-->>2016</option>
                                            <option value="2017" <!--{if $sosoy==2017}-->selected="selected"<!--{/if}-->>2017</option>
											<option value="2018" <!--{if $sosoy==2018}-->selected="selected"<!--{/if}-->>2018</option>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">年&nbsp;&nbsp;</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3" id="sosom" onchange="soso()">
											<option value="0">全部</option>
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
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">月</div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>代理商</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>结算总金额</div></span>
                              
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>推荐详情</div></span>
                                
                            </li>
                            
                            <!--{loop $userarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[username]}</span>
                                <span class="list2 mt">{$value[jianglijine]}元</span>
                                <span class="list3 mt" onClick="showtuijianinfo('{$value[id]}');document.getElementById

('showtuijian').style.display=''">推荐详情</span>
								
	                         
                            </li>
							 <!--{/loop}-->
                            
                            
                            <li style="height:58px;">
                            
                                <div class="thepage">
                                    <span class="pagechoose">{$fenarr[sy]}</span>&nbsp;
									<span class="pagechoose">{$fenarr[shangy]}

</span>&nbsp;
									<span class="pagechoose">{$fenarr[xiay]}

</span>&nbsp;
									<span class="pagechoose">{$fenarr[weiy]}

</span>&nbsp;
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
            
            
            
        </div>
        
    </div>
</div>


<span id="showtuijian" class="showtuijian" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-275px 0 0 -275px;width:550px;height:550px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">奖励明细</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showtuijian').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:550px; height:480px; overflow:hidden; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <iframe name="showck" id="showck" src="#" width="550" height="510" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe>
            </div>
        </div>
	</div>
</span>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dlsgltjjs.js" type="text/javascript"></script>

		

<!--{template footer}-->