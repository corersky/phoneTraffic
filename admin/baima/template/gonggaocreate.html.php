<!--{template header}-->

<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjllggxj .inputtext{color:#666;width:180px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjllggxj .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjllggxj .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjllggxj .inputtext4{color:#666;width:80px;height:30px; font-size:14px; border:#bbb 1px solid; outline:none;}
#lltjllggxj .v1{}
#lltjllggxj .v2{}
#lltjllggxj .v3{}
#lltjllggxj .v4{}
#lltjllggxj .v5{}
#lltjllggxj .v6{}
#lltjllggxj .v7{}
#lltjllggxj .v8{}
#lltjllggxj .mt{margin-top:12px;}
#lltjllggxj #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#lltjllggxj #mythetable{
	width:740px;
	margin:0 auto;
}
#lltjllggxj #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjllggxj #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjllggxj #table li span.list1{
text-decoration:none;
float:left;
width:70px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjllggxj #table li span.list2{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list3{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list4{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list5{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list6{
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
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="lltjllggxj" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">流量公告</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:10px;">
        	<form action="gaonggaoation.php?action=addgonggao" method="post" target="hiddeniframe">
        	<div style="margin-top:10px; margin-left:50px; font-family:'微软雅黑'; font-size:16px;">
                <div style="padding-top:50px;">
                    <div class="fl">标题：</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><input class="inputtext" name="title" id="title" value="{$gonggaoinfo[title]}" type="text" placeholder="请输入标题..." onKeyPress="this.style.color='black';" /></div>
                </div>
                
                <div id="showthesms" style="padding-top:50px;">
                    <div class="fl">内容：</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><textarea name="gonggaomsg" id="gonggaomsg" style="color:#666;width:480px;height:80px; font-size:16px; padding:10px; resize: none; background-color:#FFF; line-height:20px; border:#bbb 1px solid; outline:none;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;" placeholder="请输入内容..." onpropertychange="if(value.length>67) value=value.substr(0,67)" onKeyPress="this.style.color='black';">{$gonggaoinfo[gonggaomsg]}</textarea></div>
                </div>
                <div style="width:73px; height:25px; margin-top:140px; margin-left:280px;">
				<input  type="hidden" name="id" id="id" value="{$id}"/>
                	<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            </form>
        </div>
        
    </div>
</div>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjllgg.js" type="text/javascript"></script>


<!--{template footer}-->
