<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<style>
#zkglkgl .inputtext{color:#666;width:120px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#zkglkgl .inputtext2{width:100px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#zkglkgl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#zkglkgl .mt{margin-top:12px;}
#zkglkgl .mt2{margin-top:5px;}
#zkglkgl #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#zkglkgl #mythetable{
	width:740px;
	margin:0 auto;
}
#zkglkgl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#zkglkgl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#zkglkgl #table li span.list1{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#zkglkgl #table li span.list2{
text-decoration:none;
float:left;
width:90px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zkglkgl #table li span.list3{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zkglkgl #table li span.list4{
text-decoration:none;
float:left;
width:100px;
height:30px;
overflow:hidden;
cursor:pointer;
font-size:13px;
}
#zkglkgl #table li span.list5{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:pointer;
font-size:13px;
}
#zkglkgl #table li span.list6{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zkglkgl #table li span.list7{
text-decoration:none;
float:left;
width:90px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zkglkgl #table li span.list8{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#zkglkgl #table li span.list9{
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
	var  kaid=document.getElementById("kaid").value;
	var  sjh=document.getElementById("sjh").value;
	
	var  dlname=document.getElementById("dlname").value;
	var  czzt=document.getElementById("czzt").value;
	var  shzt=document.getElementById("shzt").value;
	var url="{XZKJURL}"+"/index.php?action=km_kalist&kaid="+kaid+"&sjh="+sjh+"&dlname="+dlname+"&czzt="+czzt+"&shzt="+shzt;
	window.location.href=url;
}
</script>

<div id="mains">
	<div id="zkglkgl">
        <div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">制卡管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">卡管理</div>
        </div>
        
        
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                            
                            
                            <li style="height:80px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                            
                            	<div style="height:35px;">
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                        <div class="fl"><input class="inputtext" type="text" name="" id="kaid" value="{$kaid}" placeholder="在此输入卡号..." onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">手机号：</div>
                                        <div class="fl"><input class="inputtext" type="text" name="" id="sjh" value="{$sjh}" maxlength="11" placeholder="在此输入手机号..." onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">代理商：</div>
                                        <div class="fl"><input class="inputtext" type="text" name="" id="dlname" value="{$dlname}"  placeholder="在此输入代理商..."></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                    </div>
                                    
                                </div>
                                
                            	<div style="height:35px;">
                                    
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">充值状态：</div>
                                        <div class="fl">
                                            <select name="" class="inputtext2" id="czzt" onchange="soso()">
                                                <option value="0">全部</option>
                                                <option value="2" <!--{if $czzt==2}-->selected="selected"<!--{/if}-->>已充值成功卡</option>
                                                <option value="1" <!--{if $czzt==1}-->selected="selected"<!--{/if}-->>未充值卡</option>
                                                <option value="3" <!--{if $czzt==3}-->selected="selected"<!--{/if}-->>充值失败卡</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">售后状态：</div>
                                        <div class="fl">
                                            <select name="" class="inputtext2" id="shzt" onchange="soso()">
                                                <option value="0">全部</option>
                                                <option value="1" <!--{if $shzt==1}-->selected="selected"<!--{/if}-->>未售后</option>
                                                <option value="2" <!--{if $shzt==2}-->selected="selected"<!--{/if}-->>已售后已解决</option>
                                                <option value="3" <!--{if $shzt==3}-->selected="selected"<!--{/if}-->>已售后未解决</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>卡号</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>密码</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>套餐面额</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>生成时间</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值状态</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值号码</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>批次</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>所属代理</div></span>
                                <span class="list9" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>售后状态</div></span>
                            </li>
                            
                            <!--{loop $piarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[id]}</span>
                                <span class="list2 mt">{$value[pwd]}</span>
                                <span class="list3 mt">{$value[tcname]}</span>
                                <span class="list4 mt2">{$value[createtime]}</span>
                                <span class="list5 mt">{$ztarr[$value['zt']]}</span>
                                <span class="list6 mt">{$value[sjh]}</span>
                                <span class="list7 mt">{$value[piname]}</span>
                                <span class="list8 mt">{$value[dailiname]}</span>
                                <span class="list9 mt">{$shztarr[$value['shzt']]}</span>
                                
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
<script src="baima/template/js/zkglkgl.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
function sendliuliang()
{
	var sjh = encodeURIComponent(document.getElementById("myphonenum").innerHTML);
	var liuliang = encodeURIComponent(document.getElementById("mytrafficsend").innerHTML);
	var sjhtype = encodeURIComponent(document.getElementById("mysjhtype").innerHTML);
	//alert(sjh+"，"+liuliang+"，"+sjhtype);
	window.location.href="liuliangation.php?action=addliuliang&sjh="+sjh+"&liuliang="+liuliang+"&sjhtype="+sjhtype;
}
function showtraffic(){
	if(document.getElementById("thephonenum").value.length==4)
	{
		var requestshowtraffic;
		if(window.XMLHttpRequest){
			requestshowtraffic = new XMLHttpRequest();
		}else{
			requestshowtraffic = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		var hd=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,4));
		
		requestshowtraffic.open("GET","getsjhgs.php?hd="+hd,true);
		requestshowtraffic.onreadystatechange=function (){
			if(requestshowtraffic.readyState==4 && requestshowtraffic.status==200){
				
				var str = eval(requestshowtraffic.responseText);
				
				if(str=="-1")
				{
					//alert("号段未能识别");
				}
				else if(str=="0")
				{
					document.getElementById("thetaocan").style.display="";
					document.getElementById("theyidong").style.display="";
					document.getElementById("theliantong").style.display="none";
					document.getElementById("thedianxin").style.display="none";
					
					document.getElementById("mysjhtype").innerHTML="0";
				}
				else if(str=="1")
				{
					document.getElementById("thetaocan").style.display="";
					document.getElementById("theyidong").style.display="none";
					document.getElementById("theliantong").style.display="";
					document.getElementById("thedianxin").style.display="none";
					
					document.getElementById("mysjhtype").innerHTML="1";
				}
				else if(str=="2")
				{
					document.getElementById("thetaocan").style.display="";
					document.getElementById("theyidong").style.display="none";
					document.getElementById("theliantong").style.display="none";
					document.getElementById("thedianxin").style.display="";
					
					document.getElementById("mysjhtype").innerHTML="2";
				}
				else
				{
					alert("号段识别错误");
				}
			}
		}
		requestshowtraffic.send(null);
	}
	if(document.getElementById("thephonenum").value.length>4)
	{
		
	}
	else
	{
		document.getElementById("thetaocan").style.display="none";
		document.getElementById("theyidong").style.display="none";
		document.getElementById("theliantong").style.display="none";
		document.getElementById("thedianxin").style.display="none";
		
		document.getElementById("mysjhtype").innerHTML="";
	}
}
function checkphonenum(){
	if(document.getElementById("thephonenum").value.length>=4)
	{
		var requestshowtraffic;
		if(window.XMLHttpRequest){
			requestshowtraffic = new XMLHttpRequest();
		}else{
			requestshowtraffic = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		var hd=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,4));
		
		requestshowtraffic.open("GET","getsjhgs.php?hd="+hd,true);
		requestshowtraffic.onreadystatechange=function (){
			if(requestshowtraffic.readyState==4 && requestshowtraffic.status==200){
				
				var str = eval(requestshowtraffic.responseText);
				
				if(str=="-1")
				{
					//alert("号段未能识别");
				}
				else if(str=="0")
				{
					document.getElementById("thetaocan").style.display="";
					document.getElementById("theyidong").style.display="";
					document.getElementById("theliantong").style.display="none";
					document.getElementById("thedianxin").style.display="none";
					
					document.getElementById("mysjhtype").innerHTML="0";
				}
				else if(str=="1")
				{
					document.getElementById("thetaocan").style.display="";
					document.getElementById("theyidong").style.display="none";
					document.getElementById("theliantong").style.display="";
					document.getElementById("thedianxin").style.display="none";
					
					document.getElementById("mysjhtype").innerHTML="1";
				}
				else if(str=="2")
				{
					document.getElementById("thetaocan").style.display="";
					document.getElementById("theyidong").style.display="none";
					document.getElementById("theliantong").style.display="none";
					document.getElementById("thedianxin").style.display="";
					
					document.getElementById("mysjhtype").innerHTML="2";
				}
				else
				{
					alert("号段识别错误");
				}
			}
		}
		requestshowtraffic.send(null);
	}
	if(document.getElementById("thephonenum").value.length>4)
	{
		
	}
	else
	{
		document.getElementById("thetaocan").style.display="none";
		document.getElementById("theyidong").style.display="none";
		document.getElementById("theliantong").style.display="none";
		document.getElementById("thedianxin").style.display="none";
		
		document.getElementById("mysjhtype").innerHTML="";
	}
}
</script>

<!--{template footer}-->