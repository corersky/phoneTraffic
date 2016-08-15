<!--{template header}-->

<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjlltdgl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjlltdgl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext4{width:70px;height:24px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext5{width:70px;height:20px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .v1{}
#lltjlltdgl .v2{}
#lltjlltdgl .v3{}
#lltjlltdgl .v4{}
#lltjlltdgl .v5{}
#lltjlltdgl .v6{}
#lltjlltdgl .v7{}
#lltjlltdgl .v8{}
#lltjlltdgl .mt{margin-top:12px;}
#lltjlltdgl .mt2{margin-top:30px;}
#lltjlltdgl .mt3{margin-top:8px;}
#lltjlltdgl #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#lltjlltdgl #mythetable{
	width:740px;
	margin:0 auto;
}
#lltjlltdgl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjlltdgl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjlltdgl #table li span.list1{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjlltdgl #table li span.list2{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list3{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list4{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list5{
text-decoration:none;
float:left;
width:220px;
height:30px;
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
	<div id="lltjlltdgl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">立即退款管理</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
				
                    <div id="table">
					
					 <form action="{XZKJURL}/dailiation.php?action=setllsbtktime" method="post" target="hiddeniframe">
					  充值失败返款时长为:<input type="text" name="llsbtktime" id="llsbtktime" size="8" value="{$llsbtktime}"/>天
						<input type="submit" value="保存"/>
					  </form>
                        
						
						
						<table width="100%">
						<tr><td colspan="2">
						<form action="{XZKJURL}/dailiation.php?action=addcytkuser" method="post" target="hiddeniframe">
						添加代理商:<input type="text" name="dailiname" id="dailiname" value=""/>
						<input type="submit" value="添加"/>
						</form>
						</td></tr>
						
						<tr>
						<td>代理商</td>
						<td>操作</td>
						</tr>
						<!--{loop $userarr $value}-->
						<tr>
						<td>{$value[username]}</td>
						<td><a href="{XZKJURL}/dailiation.php?action=delcytkuser&userid={$value[id]}" target="hiddeniframe">删除</a></td>
						</tr>
						<!--{/loop}-->
						
						<tr><td colspan="2" align="center">
						 {$fenarr[sy]}&nbsp;
									{$fenarr[shangy]}&nbsp;
									{$fenarr[xiay]}&nbsp;
									{$fenarr[weiy]}&nbsp;
									  共{$page}/{$zpage}页
						</td></tr>
						</table>
                        
                        
                        
                      
           
                       
                        
                        
                        
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

<span id="showgllltd" class="showgllltd" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-275px 0 0 -275px;width:550px;height:560px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">流量通道管理</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showgllltd').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:550px; height:500px; overflow:hidden; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <iframe name="showck" src="index.php?action=lltongdaolist_list" width="550" height="510" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe>
            </div>
        </div>
	</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjlltdgl.js" charset="utf-8" type="text/javascript"></script>


		

<!--{template footer}-->