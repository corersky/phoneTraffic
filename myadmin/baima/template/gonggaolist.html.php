<!--{template header}-->

<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjllgg .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjllgg .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjllgg .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjllgg .v1{}
#lltjllgg .v2{}
#lltjllgg .v3{}
#lltjllgg .v4{}
#lltjllgg .v5{}
#lltjllgg .v6{}
#lltjllgg .v7{}
#lltjllgg .v8{}
#lltjllgg .mt{margin-top:12px;}
#lltjllgg #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#lltjllgg #mythetable{
	width:740px;
	margin:0 auto;
}
#lltjllgg #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjllgg #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjllgg #table li span.list1{
text-decoration:none;
float:left;
width:70px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjllgg #table li span.list2{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllgg #table li span.list3{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllgg #table li span.list4{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllgg #table li span.list5{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllgg #table li span.list6{
text-decoration:none;
float:left;
width:120px;
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
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="lltjllgg" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">流量公告</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                            	<div style="font-family:'微软雅黑'; font-size:15px; color:#979797; font-weight:bold; margin-top:12px; margin-left:550px;">
                                	<a href="index.php?action=gonggaocreate" style="color:#33C;">点击新建</a>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>编号</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>标题</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>内容</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发布时间</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>状态</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            <!--{loop $tongdaoarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[id]}</span>
                                <span class="list2 mt">{$value[title]}</span>
                                <span class="list3 mt">{$value[gonggaomsg]}</span>
                                <span class="list4 mt">{$value[createtime]}</span>
                                <span class="list5 mt">
								<!--{if empty($value['isshow'])}-->
不显示&nbsp;&nbsp;<a href="gaonggaoation.php?action=setgonggaozt&zt=1&id={$value[id]}" target="hiddeniframe" style="color:#33C;">点击显示</a>
<!--{else}-->
显示中&nbsp;&nbsp;<a href="gaonggaoation.php?action=setgonggaozt&zt=0&id={$value[id]}" target="hiddeniframe" style="color:#33C;">点击不显示</a>
<!--{/if}-->
								
								</span>
								<span class="list6 mt">
								<a href="index.php?action=gonggaocreate&id={$value[id]}" style="color:#33C;">编辑</a>
							 &nbsp;&nbsp;&nbsp;
							 <a href="gaonggaoation.php?action=delgonggao&id={$value[id]}" target="hiddeniframe" style="color:#33C;">删除</a>
                             
								</span>
                                
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
<script src="baima/template/js/lltjllgg.js" type="text/javascript"></script>


		

<!--{template footer}-->
