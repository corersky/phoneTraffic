<!--{template header}-->
<style>
#tdgltdqm .inputtext{color:#666;width:180px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showcjtdqm .inputtext{color:#666;width:180px;height:26px; font-size:13px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
#showcjtdqm .inputtext2{width:170px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#tdgltdqm .v1{}
#tdgltdqm .v2{}
#tdgltdqm .v3{}
#tdgltdqm .v4{}
#tdgltdqm .v5{}
#tdgltdqm .v6{}
#tdgltdqm .v7{}
#tdgltdqm .v8{}
#tdgltdqm .mt{margin-top:12px;}
#tdgltdqm #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#tdgltdqm #mythetable{
	width:740px;
	margin:0 auto;
}
#tdgltdqm #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#tdgltdqm #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#tdgltdqm #table li span.list1{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#tdgltdqm #table li span.list2{
text-decoration:none;
float:left;
width:290px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#tdgltdqm #table li span.list3{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#tdgltdqm #table li span.list4{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<script>
function deltongdaoqianming(id){
	hiddeniframe.location.href='{XZKJURL}/useration.php?action=deltongdaoqianming&id='+id;
}
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=tongdaoqianming&nick="+sosonick;
	window.location.href=url;
}
</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="tdgltdqm" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">通道管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">通道签名</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                <div class="fr cp" onClick="document.getElementById('showcjtdqm').style.display='';">
                    <img src="baima/template/images/cjtdqm.png" width="136" height="41">
                </div>
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                        <div class="fl"><input class="inputtext" type="text" name="" id="sosonick" placeholder="在此输入通道名称搜索..."></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                    </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道名称</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>签名内容</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>添加时间</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            
							<!--{loop $userarr $key=>$value}-->
                            <li>
                                <span class="list1 mt">{$value[tongdaoname]}</span>
                                <span class="list2 mt">{$value[qianming]}</span>
                                <span class="list3 mt">{$value[createtime]}</span>
                                <span class="list4 mt" style="color:#006dcb;">
                                    <!--带标识-->
                                    <span class="cp" onClick="document.getElementById('showtdeltips{$key}').style.display='';">删除</span>
                                </span>
                                <!--带标识-->
                                <div id="showtdeltips{$key}" style="position:absolute; font-size:13px; margin-top:-30px; margin-left:558px; width:180px; height:37px; border:#ff8400 1px solid; background-color:#ffface; display:none;">
                                	<div style="float:left; margin-top:12px; margin-left:8px; margin-right:5px;">是否删除签名？</div>
                                    <div style="float:left; margin:6px; cursor:pointer;"><input type="button" value="" style="width:25px; height:25px;background-image:url(baima/template/images/scfzyes.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onclick="deltongdaoqianming('{$value[id]}')"></div>
                                    <!--带标识-->
                                    <div style="float:left; margin:6px; cursor:pointer;" onClick="document.getElementById('showtdeltips{$key}').style.display='none';"><img src="baima/template/images/scfzno.png" width="25" height="25"></div>
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
                
                    <div style="margin-top:140px; margin-left:160px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            当前还未创建客服专员账户，请先
                        </div>
                        <div class="fl cp" style="margin-top:-13px; margin-left:20px;" onClick="document.getElementById('showcjtdqm').style.display='';">
                            <img src="baima/template/images/cjtdqm.png" width="136" height="41">
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showcjtdqm" class="showcjtdqm" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-145px 0 0 -275px;width:550px;height:290px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">创建通道签名</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showcjtdqm').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			<form action="{XZKJURL}/useration.php?action=settongdaoqianming" method="post" target="hiddeniframe">
            <div style="width:530px; height:250px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:130px; margin-top:40px;">
                	<span>通道名称：</span><span>
                        <select name="tongdaoid" id="tongdaoid" class="inputtext2">
							<!--{loop $tongdaoarr $key=>$value}-->
                            <option value="{$key}">{$value[title]}</option>
							<!--{/loop}-->
                        </select>
                    </span>
                </div>
                <div style="margin-left:130px; margin-top:30px;">
                	<span>签名内容：</span><span><input class="inputtext" name="qianming" id="qianming" type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="请输入通道签名..."/></span>
                </div>
                <div style="margin-left:130px; margin-top:50px;">
                	<div class="fl cp">
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:120px;" onClick="document.getElementById('showcjtdqm').style.display='none';">
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
<script src="baima/template/js/tdgltdqm.js" type="text/javascript"></script>

<!--{template footer}-->