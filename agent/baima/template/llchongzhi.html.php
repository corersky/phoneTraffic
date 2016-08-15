<!--{template header}-->


<div id="mains">
	<div id="csjllczll">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：充手机流量-充值流量</div>
        </div>











<!--{if !empty($gonggaoinfo)}-->
        <div style="margin-top:-10px; margin-left:-25px; width:775px; height:65px; background-color:#FC6; border-bottom:1px #F00 solid;">
        	<div style="width:735px; height:40px; overflow:hidden; padding-left:20px; padding-top:10px;word-wrap: break-word;word-break: normal; font-family:'微软雅黑'; color:#F00; font-size:16px;">
        		{$gonggaoinfo[gonggaomsg]}
            </div>
        </div>
<!--{/if}-->












		
		
		<input type="hidden" id="yidongzk" value="{$userinfo[yidongzk]}">
		<input type="hidden" id="liantongzk" value="{$userinfo[liantongzk]}">
		<input type="hidden" id="dianxinzk" value="{$userinfo[dianxinzk]}">
		
        
        <div style="margin-top:50px; margin-left:50px; height:35px;">
        	<div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">请输入手机

号：</div>
            <div style="float:left;"><input id="thephonenum" type="text" name="" maxlength="11" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onafterpaste="this.value=this.value.replace(/\D/g,'')" onKeyUp="showtraffic()"></div>




<div style="float:left; margin-left:10px; margin-top:3px; cursor:pointer;" onClick="checkphonenum()">
            	<img src="baima/template/images/txlglcyxgdgcyqd.png" width="37" height="20">
            </div>





            <div style="float:left; border:#ff6600 1px solid; background-color:#fff2c0; color:#ff6600; font-size:13px; width:130px; margin-left:30px; margin-top:-7px; line-height:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; cursor:default;">
                <div style="margin:3px;">输入不同运营商的号码会显示不同的套餐!</div>
             </div>
        </div>
        
        
        <div style="margin-top:0px; margin-left:100px; height:35px;">
        	<div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">归属地：</div>
            <div id="attributiontext" style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px; display:none;"></div>
        </div>
        
        
        
        <div id="thetaocan" style="margin-top:0px; margin-left:50px; height:460px; display:none;">
        	<div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px; margin-

right:75px;">流量充值套餐：</div>
            <div id="theyidong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; 

padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为移动套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic1" name="theydtraffic" type="radio" 

style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:68px;">资费3元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic2" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">30M</div>
                    <div style="float:left;margin-left:68px;">资费5元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic3" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">70M</div>
                    <div style="float:left;margin-left:68px;">资费10元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic4" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">150M</div>
                    <div style="float:left;margin-left:60px;">资费20元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic5" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">资费30元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic6" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:77px;">资费50元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic7" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">2G</div>
                    <div style="float:left;margin-left:77px;">资费70元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic8" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">3G</div>
                    <div style="float:left;margin-left:77px;">资费100元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic9" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">4G</div>
                    <div style="float:left;margin-left:77px;">资费130元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic10" name="theydtraffic" 

type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">6G</div>
                    <div style="float:left;margin-left:77px;">资费180元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic11" name="theydtraffic" 

type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">11G</div>
                    <div style="float:left;margin-left:68px;">资费280元</div>
                </div>
            </div>
            <div id="theliantong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; 

padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为联通套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic1" name="thelttraffic" type="radio" 

style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">20M</div>
                    <div style="float:left;margin-left:68px;">资费3元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic2" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:68px;">资费6元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic3" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:60px;">资费10元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic4" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:60px;">资费15元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic5" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">资费30元</div>
                </div>
            </div>
            <div id="thedianxin" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; 

padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为电信套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic1" name="thedxtraffic" type="radio" 

style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">5M</div>
                    <div style="float:left;margin-left:77px;">资费1元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic2" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:68px;">资费2元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic3" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">30M</div>
                    <div style="float:left;margin-left:68px;">资费5元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic4" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:68px;">资费7元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic5" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:60px;">资费10元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic6" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:60px;">资费15元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic7" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">资费30元</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic8" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:77px;">资费50元</div>
                </div>
            </div>
            <div id="thesure" style="padding-top:400px; width:131px; height:45px; margin-left:270px;">
                <img src="baima/template/images/sjcllsuretraffic.png" width="131" height="45" style="cursor:pointer;" 

onClick="showsure()">
            </div>
        </div>
        
        
        
    </div>
</div>

<span id="showtraffic" class="showtraffic" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-

color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-100px 0 0 -

150px;width:300px;height:200px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-

radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:300px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-

radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">请确认所选信息</div>
            </div>
            
            <div id="mysjhtype" style="display:none;"></div>
            
            <div id="close" style="margin-top:-36px;margin-left:265px; width:30px; height:30px; cursor:pointer;" 

onClick="document.getElementById('showtraffic').style.display='none';">
                <img src="baima/template/images/openclose.png">

            </div>
            <div style="width:280px; height:150px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅

黑'; font-size:17px;">
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">您输入的手机号：</div>
                    <div id="myphonenum" style="float:left; color:#F00;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">充值套餐为：</div>
                    <div id="mytraffic" style="float:left; color:#F00;"></div>
			<div id="mytrafficsend" style="display:none;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">消耗金额为：</div>
                    <div id="mysmsnum" style="float:left; color:#F00;"></div>
                </div>
                <div style="width:91px; margin:0 auto; margin-top:15px; cursor:pointer;" onClick="sendliuliang()">
                	<img src="baima/template/images/sjcllsuretrafficopen.png" width="91" height="31">
                </div>
            </div>
        </div>
	</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/csjllczll.js" type="text/javascript" charset="utf-8"></script>
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
	else if(document.getElementById("thephonenum").value.length>4 && document.getElementById("thephonenum").value.length<9)
	{
		
		document.getElementById("attributiontext").text="none";
	}
	else if(document.getElementById("thephonenum").value.length>=9)
	{ 

		//alert("v");
		var requestshowAttribution;
		if(window.XMLHttpRequest){
			requestshowAttribution = new XMLHttpRequest();
		}else{
			requestshowAttribution = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		var mysjh=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,11));
		
		requestshowAttribution.open("GET","getsjhinfo.php?sjh="+mysjh,true);
		requestshowAttribution.onreadystatechange=function (){
			if(requestshowAttribution.readyState==4 && requestshowAttribution.status==200){
				//alert(requestshowAttribution.responseText);
				var str = requestshowAttribution.responseText;
				
				document.getElementById("attributiontext").style.display="";
				document.getElementById("attributiontext").innerHTML=str.split(":")[0];
			}
		}
		requestshowAttribution.send(null);
		
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
	else
	{
		document.getElementById("thetaocan").style.display="none";
		document.getElementById("theyidong").style.display="none";
		document.getElementById("theliantong").style.display="none";
		document.getElementById("thedianxin").style.display="none";
		
		document.getElementById("attributiontext").style.display="none";
		document.getElementById("attributiontext").text="none";
		
		document.getElementById("mysjhtype").innerHTML="";
	}
}
function checkphonenum(){
	if(document.getElementById("thephonenum").value.length>=4 && document.getElementById("thephonenum").value.length<11)
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
	if(document.getElementById("thephonenum").value.length>=11)
	{
		var requestshowAttribution;
		if(window.XMLHttpRequest){
			requestshowAttribution = new XMLHttpRequest();
		}else{
			requestshowAttribution = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		var mysjh=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,11));
		
		requestshowAttribution.open("GET","getsjhinfo.php?sjh="+mysjh,true);
		requestshowAttribution.onreadystatechange=function (){
			if(requestshowAttribution.readyState==4 && requestshowAttribution.status==200){
				
				var str = requestshowAttribution.responseText;
				
				document.getElementById("attributiontext").style.display="";
				document.getElementById("attributiontext").innerHTML=str.split(":")[0];
			}
		}
		requestshowAttribution.send(null);

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
	else
	{
		document.getElementById("thetaocan").style.display="none";
		document.getElementById("theyidong").style.display="none";
		document.getElementById("theliantong").style.display="none";
		document.getElementById("thedianxin").style.display="none";
		
		document.getElementById("attributiontext").style.display="none";
		document.getElementById("attributiontext").text="none";
				
		document.getElementById("mysjhtype").innerHTML="";
	}
}
</script>


<!--{template footer}-->