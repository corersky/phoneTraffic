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
#lltjlltdglgl .mt{margin-top:13px;}
#lltjlltdglgl .mt2{margin-top:8px;}
#lltjlltdglgl .inputtext{color:#666;width:70px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjlltdglgl .pageli{height:58px;}
#lltjlltdglgl .thepage{float:left; margin-top:22px; font-size:13px; margin-left:25px; color:#666;}
#lltjlltdglgl .pagechoose{border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;}
#lltjlltdglgl .pagechoose a{color:#666;}
#lltjlltdglgl .pagegoto{float:left; font-size:12px; margin-top:-1px; margin-left:5px; cursor:pointer;}
#lltjlltdglgl .pagenum{font-size:12px; margin-left:-4px; margin-right:-4px;}
#lltjlltdglgl .nowpagetext{color:#7e7e7e;width:26px;height:18px;font-size:12px;}
#lltjlltdglgl .pagego{float:left; font-size:12px; margin-left:10px; margin-top:-2px;}
#lltjlltdglgl .pageall{float:left; margin-top:22px; font-size:12px; margin-left:20px; color:#666;}
#lltjlltdglgl .pagetheall{float:left; font-size:12px; margin-top:2px;}
#lltjlltdglgl .pagetheallfont{font-size:12px;}
#lltjlltdglgl .pagelimsga{color:#299be4;}
#lltjlltdglgl .pagelia{color:#299be4;}
#lltjlltdglgl #table{
	float:left;
	width:530px;
	text-align:left;
	border:1px #81beff solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#lltjlltdglgl #mythetable{
	width:530px;
	margin:0 auto;
}
#lltjlltdglgl #table li{
float:left;
width:530px;
height:40px;
border-bottom:1px solid #81beff;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjlltdglgl #table li.title{
width:530px;
height:20px;
line-height:16px;
font-size:14px;
cursor:default;
background-color:#cdedf8;
padding-top:5px;
}

#lltjlltdglgl #table li span.list1{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjlltdglgl #table li span.list2{
text-decoration:none;
float:left;
width:80px;
height:30px;
overflow:hidden;
cursor:pointer;
font-size:13px;
}
#lltjlltdglgl #table li span.list3{
text-decoration:none;
float:left;
width:80px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdglgl #table li span.list4{
text-decoration:none;
float:left;
width:80px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdglgl #table li span.list5{
text-decoration:none;
float:left;
width:80px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdglgl #table li span.list6{
text-decoration:none;
float:left;
width:100px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<script>
function settongdaobeizhu(id){
	var  mytheinput=document.getElementById("mytheinput"+id).value;
	
	var  yidongzk=document.getElementById("yidongzk"+id).value;
	var  liantongzk=document.getElementById("liantongzk"+id).value;
	var  dianxinzk=document.getElementById("dianxinzk"+id).value;
	
	var url="{XZKJURL}/dailiation.php?action=settongdaobeizhu&tongdaoid="+id+"&tongdaobeizhu="+mytheinput+"&yidongzk="+yidongzk+"&liantongzk="+liantongzk+"&dianxinzk="+dianxinzk;
	hiddeniframe.location.href=url;
}

function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="lltjlltdglgl" style="float:left;width:550px; height:230px;">
    <div style="margin-top:10px;">
        <div id="mythetable">
            <div id="table">
                <ul>
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道名称</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道备注</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>移动折扣</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>联通折扣</div></span>
                        <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>电信折扣</div></span>
                        <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>修改通道</div></span>
                    </li>
  					<!--{loop $userarr $key=>$value}-->
                    <li>
                        
                        <span class="list1 mt">{$value[title]}</span>
                        <span class="list2 mt">
                        	<!--标识-->
                            <div id="mytxt{$value[id]}" onClick="showtips(this)">{$value[beizhu]}</div>
                            <!--标识-->
                            <div id="myinput{$value[id]}" style="display:none;">
                            	<!--标识-->
                                <input id="mytheinput{$value[id]}" class="inputtext" type="text" name="" value="{$value[beizhu]}" placeholder="在此输入通道备注...">
                            </div>
                        </span>
                        <span class="list3 mt">
                        	<!--标识-->
                            <div id="myydtxt{$value[id]}" onClick="showtips(this)">{$value[yidongzk]}</div>
                            <!--标识-->
                            <div id="myydinput{$value[id]}" style="display:none;">
                            	<!--标识-->
                                <input id="yidongzk{$value[id]}" class="inputtext" type="text" name="" value="{$value[yidongzk]}" placeholder="在此输入移动折扣...">
                            </div>
                        </span>
                        <span class="list4 mt">
                        	<!--标识-->
                            <div id="mylttxt{$value[id]}" onClick="showtips(this)">{$value[liantongzk]}</div>
                            <!--标识-->
                            <div id="myltinput{$value[id]}" style="display:none;">
                            	<!--标识-->
                                <input id="liantongzk{$value[id]}" class="inputtext" type="text" name="" value="{$value[liantongzk]}" placeholder="在此输入联通折扣...">
                            </div>
                        </span>
                        <span class="list5 mt">
                        	<!--标识-->
                            <div id="mydxtxt{$value[id]}" onClick="showtips(this)">{$value[dianxinzk]}</div>
                            <!--标识-->
                            <div id="mydxinput{$value[id]}" style="display:none;">
                            	<!--标识-->
                                <input id="dianxinzk{$value[id]}" class="inputtext" type="text" name="" value="{$value[dianxinzk]}" placeholder="在此输入电信折扣...">
                            </div>
                        </span>
                        <span class="list6 mt2">
                        	<!--标识-->
                            <div id="myxg{$value[id]}" style="float:left; margin-left:18px; cursor:pointer;" onClick="xg(this)">
                                <img src="baima/template/images/lltjlltdglxg2.png" width="64" height="23">
                            </div>
                            <!--标识-->
                            <div id="mybc{$value[id]}" style="float:left; margin-left:18px; display:none;">
                                <input type="button" style="width:64px;height:23px; background:url(baima/template/images/lltjlltdglbc2.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="settongdaobeizhu('{$value[id]}')">
                            </div>
                        </span>
                        <!--标识-->
                        <div id="lltdgltips{$value[id]}" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:200px; margin-left:50px; margin-top:0px; line-height:10px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;white-space:normal; word-break:break-all; text-align:left; display:none;">
                            {$value[beizhu]}
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
function xg(obj)
{   
	document.getElementById("mytxt"+obj.id.substring(4)).style.display="none";
	document.getElementById("myinput"+obj.id.substring(4)).style.display="";
	document.getElementById("mytheinput"+obj.id.substring(4)).value=document.getElementById("mytxt"+obj.id.substring(4)).innerHTML;
	
	document.getElementById("myydtxt"+obj.id.substring(4)).style.display="none";
	document.getElementById("myydinput"+obj.id.substring(4)).style.display="";
	document.getElementById("yidongzk"+obj.id.substring(4)).value=document.getElementById("myydtxt"+obj.id.substring(4)).innerHTML;
	
	document.getElementById("mylttxt"+obj.id.substring(4)).style.display="none";
	document.getElementById("myltinput"+obj.id.substring(4)).style.display="";
	document.getElementById("yidongzk"+obj.id.substring(4)).value=document.getElementById("mylttxt"+obj.id.substring(4)).innerHTML;
	
	document.getElementById("mydxtxt"+obj.id.substring(4)).style.display="none";
	document.getElementById("mydxinput"+obj.id.substring(4)).style.display="";
	document.getElementById("yidongzk"+obj.id.substring(4)).value=document.getElementById("mydxtxt"+obj.id.substring(4)).innerHTML;
	
	document.getElementById("myxg"+obj.id.substring(4)).style.display="none";
	document.getElementById("mybc"+obj.id.substring(4)).style.display="";
}
function showtips(obj)
{
	document.getElementById("lltdgltips"+obj.id.substring(5,7)).style.display="";
	setTimeout(function(){
		document.getElementById("lltdgltips"+obj.id.substring(5,7)).style.display="none";
	},3000)
}
</script>


</body>
</html>