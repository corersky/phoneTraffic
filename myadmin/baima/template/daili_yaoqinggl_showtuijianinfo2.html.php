<!doctype html>
<html>
<head>
<title>短信服务平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="短信服务平台">
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="Bookmark" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="baima/template/css/style.css" />
</head>
<body>

<style>
#dlsgltjjsck .mt{margin-top:10px;}
#dlsgltjjsck .pageli{height:58px;}
#dlsgltjjsck .thepage{float:left; margin-top:22px; font-size:13px; margin-left:25px; color:#666;}
#dlsgltjjsck .pagechoose{border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;}
#dlsgltjjsck .pagechoose a{color:#666;}
#dlsgltjjsck .pagegoto{float:left; font-size:12px; margin-top:-1px; margin-left:5px; cursor:pointer;}
#dlsgltjjsck .pagenum{font-size:12px; margin-left:-4px; margin-right:-4px;}
#dlsgltjjsck .nowpagetext{color:#7e7e7e;width:26px;height:18px;font-size:12px;}
#dlsgltjjsck .pagego{float:left; font-size:12px; margin-left:10px; margin-top:-2px;}
#dlsgltjjsck .pageall{float:left; margin-top:22px; font-size:12px; margin-left:20px; color:#666;}
#dlsgltjjsck .pagetheall{float:left; font-size:12px; margin-top:2px;}
#dlsgltjjsck .pagetheallfont{font-size:12px;}
#dlsgltjjsck .pagelimsga{color:#299be4;}
#dlsgltjjsck .pagelia{color:#299be4;}
#dlsgltjjsck #table{
	float:left;
	width:530px;
	text-align:left;
	border:1px #81beff solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#dlsgltjjsck #mythetable{
	width:530px;
	margin:0 auto;
}
#dlsgltjjsck #table li{
float:left;
width:530px;
height:33px;
border-bottom:1px solid #81beff;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#dlsgltjjsck #table li.title{
width:530px;
height:20px;
line-height:16px;
font-size:14px;
cursor:default;
background-color:#cdedf8;
padding-top:5px;
}

#dlsgltjjsck #table li span.list1{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#dlsgltjjsck #table li span.list2{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsgltjjsck #table li span.list3{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsgltjjsck #table li span.list4{
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
 
function setzfbzhanghao(uid){
	var zfbzhanghao=document.getElementById("zfbinputtxt").value;
	hiddeniframe.location.href='{XZKJURL}/dailiation.php?action=setzfbzhanghao&uid='+uid+'&zfbzhanghao='+zfbzhanghao;

}
function setzfbname(uid){
	var zfbname=document.getElementById("yhminputtxt").value;
	hiddeniframe.location.href='{XZKJURL}/dailiation.php?action=setzfbname&uid='+uid+'&zfbname='+zfbname;

}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="dlsgltjjsck" style="float:left;width:550px; height:230px;">
    
	
    <div style="margin-top:30px;">
        <div id="mythetable">
            <div id="table">
                <ul>
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                     
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值时间</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>实收金额</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>奖励金额</div></span>
                    </li>
					<!--{loop $userarr $value}-->
                    <li>
                        
                        <span class="list1 mt">{$value[dlname]}</span>
                        <span class="list2 mt">{$value[createtime]}</span>
                        <span class="list3 mt">{$value[shje]}元</span>
                        <span class="list4 mt">{$value[jianglijine]}元</span>
                        
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
                <ul style="display:none;">
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信号码</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>姓名</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送时间</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送状态</div></span>
                    </li>

                    
                    <div id="nowpage1" class="nowpage">
                    	
                        <li style="height:400px;">
                        
                            <div style="margin-top:160px; font-size:14px; font-weight:bold;">
                            	您搜索的号码<span style="color:#F00;">不存在</span>，请核对后重新搜索！
                            </div>
                            
                        </li>
                        
                    </div>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function showzfbinput()
{
	document.getElementById("zfbtxt").style.display="none";
	document.getElementById("zfbinput").style.display="";
	document.getElementById("zfbbj").style.display="none";
	document.getElementById("zfbbc").style.display="";
	document.getElementById("zfbinputtxt").value = document.getElementById("zfbtxt").innerHTML;
}
function showyhminput()
{
	document.getElementById("yhmtxt").style.display="none";
	document.getElementById("yhminput").style.display="";
	document.getElementById("yhmbj").style.display="none";
	document.getElementById("yhmbc").style.display="";
	document.getElementById("yhminputtxt").value = document.getElementById("yhmtxt").innerHTML;
}
</script>


</body>
</html>