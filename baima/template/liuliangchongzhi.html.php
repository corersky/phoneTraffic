<!--{template header}-->


<div id="mains">
	<div id="sjcllcsjll">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
             <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：手机充流量-充手机流量</div>
        </div>
        
        <div style="height:20px; color:#F00; font-family:'微软雅黑'; font-size:14px; font-weight:bold;">
        	注:  兑换流量需扣除一定数量的短信
        </div>
        
        <div style="margin-top:20px; height:60px;">
        	<div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">请输入兑换流量的手机号：</div>
            <div style="float:left;"><input id="thephonenum" type="text" name="" maxlength="11" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" onKeyDown="showtraffic()"></div>



<div style="float:left; margin-left:10px; margin-top:3px; cursor:pointer;" onClick="checkphonenum()">
            	<img src="baima/template/images/txlglcyxgdgcyqd.png" width="37" height="20">
            </div>




            <div style="float:left; border:#ff6600 1px solid; background-color:#fff2c0; color:#ff6600; font-size:13px; width:130px; margin-left:30px; margin-top:-7px; line-height:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; cursor:default;">
                <div style="margin:3px;">输入不同运营商的号码会显示不同的套餐!</div>
             </div>
        </div>
        
        <div id="thetaocan" style="margin-top:20px; height:470px; display:none;">
        	<div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px; margin-right:75px;">流量兑换套餐：</div>
            <div id="theyidong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为移动套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic1" name="theydtraffic" type="radio" style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:60px;">折合扣除75条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic2" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">30M</div>
                    <div style="float:left;margin-left:60px;">折合扣除125条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic3" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">70M</div>
                    <div style="float:left;margin-left:60px;">折合扣除250条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic4" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">150M</div>
                    <div style="float:left;margin-left:50px;">折合扣除500条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic5" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:50px;">折合扣除750条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic6" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:67px;">折合扣除1250条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic7" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">2G</div>
                    <div style="float:left;margin-left:67px;">折合扣除1750条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic8" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">3G</div>
                    <div style="float:left;margin-left:67px;">折合扣除2500条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic9" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">4G</div>
                    <div style="float:left;margin-left:67px;">折合扣除3250条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic10" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">6G</div>
                    <div style="float:left;margin-left:67px;">折合扣除4500条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic11" name="theydtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">11G</div>
                    <div style="float:left;margin-left:60px;">折合扣除7000条短信</div>
                </div>
            </div>
            <div id="theliantong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为联通套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic1" name="thelttraffic" type="radio" style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">20M</div>
                    <div style="float:left;margin-left:60px;">折合扣除75条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic2" name="thelttraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:60px;">折合扣除150条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic3" name="thelttraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:50px;">折合扣除250条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic4" name="thelttraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:50px;">折合扣除375条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic5" name="thelttraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:50px;">折合扣除750条短信</div>
                </div>
            </div>
            <div id="thedianxin" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为电信套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic1" name="thedxtraffic" type="radio" style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">5M</div>
                    <div style="float:left;margin-left:67px;">折合扣除25条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic2" name="thedxtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:60px;">折合扣除50条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic3" name="thedxtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">30M</div>
                    <div style="float:left;margin-left:60px;">折合扣除125条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic4" name="thedxtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:60px;">折合扣除175条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic5" name="thedxtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:50px;">折合扣除250条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic6" name="thedxtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:50px;">折合扣除350条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic7" name="thedxtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:50px;">折合扣除750条短信</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic8" name="thedxtraffic" type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:67px;">折合扣除1250条短信</div>
                </div>
            </div>
            <div id="thesure" style="padding-top:400px; width:131px; height:45px; margin-left:270px;">
                <img src="baima/template/images/sjcllsuretraffic.png" width="131" height="45" style="cursor:pointer;" onClick="showsure()">
            </div>
        </div>
        
        
        
    </div>
</div>

<span id="showtraffic" class="showtraffic" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-100px 0 0 -150px;width:300px;height:200px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:300px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">请确认所选信息</div>
            </div>
            
            <div id="mysjhtype" style="display:none;"></div>
            
            <div id="close" style="margin-top:-36px;margin-left:265px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showtraffic').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:280px; height:150px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">您输入的手机号：</div>
                    <div id="myphonenum" style="float:left; color:#F00;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">兑换流量为：</div>
                    <div id="mytraffic" style="float:left; color:#F00;"></div>
			<div id="mytrafficsend" style="display:none;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">扣除短信数：</div>
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
<script src="baima/template/js/sjcllcsjll.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
function sendliuliang()
{
	var sjh = encodeURIComponent(document.getElementById("myphonenum").innerHTML);
	var liuliang = encodeURIComponent(document.getElementById("mytrafficsend").innerHTML);
	var sjhtype = encodeURIComponent(document.getElementById("mysjhtype").innerHTML);
	//alert(sjh+"，"+liuliang+"，"+sjhtype);
	window.location.href="http://duanxin.xzkj168.cn/liuliangation.php?action=addliuliang&sjh="+sjh+"&liuliang="+liuliang+"&sjhtype="+sjhtype;
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
		
		requestshowtraffic.open("GET","agent/getsjhgs.php?hd="+hd,true);
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
		
		requestshowtraffic.open("GET","agent/getsjhgs.php?hd="+hd,true);
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