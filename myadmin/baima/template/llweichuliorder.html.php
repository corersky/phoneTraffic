<!--{template header}-->

		
<style>
#dlsglxfjl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#dlsglxfjl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#dlsglxfjl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
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
width:90px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#dlsglxfjl #table li span.list2{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list3{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list4{
text-decoration:none;
float:left;
width:90px;
height:14px;
overflow:hidden;
cursor:pointer;
font-size:13px;
}
#dlsglxfjl #table li span.list5{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list6{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list7{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list8{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list9{
text-decoration:none;
float:left;
width:100px;
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
	var  sososjh=document.getElementById("sososjh").value;
	var url="{XZKJURL}"+"/index.php?action=llweichuliorder&sjh="+sososjh;
	window.location.href=url;
}

function piliangok(){
	openloading();
	var url="../agent/liuliangresendation.php?action=resend";
	hiddeniframe.location.href=url;
}

function piliangjujue(){
	openloading();
	var url="../agent/liuliangresendation.php?action=jujue";
	hiddeniframe.location.href=url;
}
</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="dlsglxfjl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">代理商管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">未处理订单</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                    <div class="fl"><input class="inputtext" type="text" name="" placeholder="在此输入手机号查询..." id="sososjh" value="{$sjh}"></div>
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                	<div class="fl" style=" margin-left:150px;">
                                    	<input type="button" style="width:120px;height:30px; background:url(baima/template/images/plcxtj.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="piliangok()">
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                	<div class="fl" style=" margin-left:40px;">
                                    	<input type="button" style="width:120px;height:30px; background:url(baima/template/images/pljj.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="piliangjujue()">
                                    </div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>代理商</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>消费金额</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>消费内容</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值对象</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>运营商</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>来源</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交时间</div></span>
                                <span class="list9" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            

                            
                            
                            <!--{loop $userarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[dlnick]}</span>
                                <span class="list2 mt">{$value[shje]}元</span>
                                <span class="list3 mt">{$value[liuliang]}M</span>
                                <span id="cz{$key}" class="list4 mt" onMouseMove="showmovecz(this)" onMouseOut="showoutcz(this)">{$value[sjh]}</span>
                                <span class="list5 mt">{$sjhtypearr[$value[sjhtype]]}</span>
                                <span class="list6 mt">通道{$value[tongdaoid]}</span>
                                <span class="list7 mt">{$lyarr[$value[ly]]}</span>
                                <span class="list8 mt">{$value[createtime]}</span>
                                <span class="list9 mt"><a href="../agent/liuliangresendation.php?action=resend&tid={$value[id]}" target="hiddeniframe" style="color:#36C;">重新提交</a>&nbsp;&nbsp;<a href="../agent/liuliangresendation.php?action=jujue&tid={$value[id]}" target="hiddeniframe" style="color:#36C;">拒绝</a></span>
                                
                                
                                
                                
                                
                                <div id="showzttips{$key}" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:180px; margin-left:320px; line-height:20px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; display:none;">
                                    <div style="margin:8px; text-align:left;word-break:break-all;word-warp:break-word;">
                                        
                                        {$value[apimsg]}                                    

                                    </div>
                                </div>
                                
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

<div id="myloading">
	<div id="thisload">
		<div id="load1"></div>
		<div id="load2"></div>
		<div id="load3"></div>
	</div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dlsglwcldd.js" type="text/javascript"></script>
<script type="text/javascript">
function showmovecz(obj)
{
	$("#showzttips"+obj.id.substring(2,4)).fadeIn();
}
function showoutcz(obj)
{
	$("#showzttips"+obj.id.substring(2,4)).fadeOut();
}
function openloading()
{
	document.getElementById("myloading").style.display ="block";
}
function closeloading()
{
	document.getElementById("myloading").style.display ="none";
}
</script>

<!--{template footer}-->