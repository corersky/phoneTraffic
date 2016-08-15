<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>


<div id="mains">
	<div id="zkglkwh">
        <div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">制卡管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">卡维护</div>
        </div>
        
        <form action="{XZKJURL}/kmation.php?action=plmoveka" method="post" target="hiddeniframe">
        <div style="margin-top:50px; margin-left:20px; ">
        	<div style="height:35px;">
            	<div style="float:left; font-family:'微软雅黑'; font-size:18px; font-weight:bold; margin-top:4px;">卡批量转移</div>
            </div>
            <div style="width:750px; height:40px; padding-top:0px;">
                <div style="margin-top:10px; margin-left:40px; height:50px;">
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">卡批量转移：卡号：</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="startid" id="startid" maxlength="20" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px; margin-left:10px;">至</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="endid" id="endid" maxlength="20" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
                    <div style="float:left; font-family:'微软雅黑'; font-size:13px; color:#F00; font-weight:bold; margin-top:4px; margin-left:10px;">(本批卡必须属于同一运营商，否则按最后一个卡号运营商计费)</div>
                </div>
                <div style="margin-top:10px; margin-left:40px; height:35px;">
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">代理商：</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="dailiname" id="dailiname" maxlength="29" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;"></div>
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:0px; margin-left:10px;"><input type="submit" style="width:73px;height:25px; background:url(baima/template/images/myzy.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" value=""></div>
                </div>
            </div>
        </div>
		</form>
		
        <form action="{XZKJURL}/kmation.php?action=plsetkabeizhu" method="post" target="hiddeniframe">
        <div style="margin-top:90px; margin-left:20px; ">
        	<div style="height:35px;">
            	<div style="float:left; font-family:'微软雅黑'; font-size:18px; font-weight:bold; margin-top:4px;">卡批量备注</div>
            </div>
            <div style="width:750px; height:40px; padding-top:0px;">
                <div style="margin-top:10px; margin-left:40px; height:40px;">
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">批量添加备注：本批次中卡号：</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="startid" id="startid" maxlength="20" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px; margin-left:10px;">至</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="endid" id="endid" maxlength="20" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
                </div>
                <div style="margin-top:0px; margin-left:40px; height:35px;">
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">备注修改为：</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="beizhu" id="beizhu" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;"></div>
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:0px; margin-left:10px;"><input type="submit" style="width:73px;height:25px; background:url(baima/template/images/myxg.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" value=""></div>
                </div>
            </div>
        </div>
        </form>
		
		<form action="{XZKJURL}/kmation.php?action=dlshbeizhu" method="post" target="hiddeniframe">
        <div style="margin-top:70px; margin-left:20px; ">
        	<div style="height:35px;">
            	<div style="float:left; font-family:'微软雅黑'; font-size:18px; font-weight:bold; margin-top:4px;">代理商售后信息备注</div>
            </div>
            <div style="width:750px; height:40px; padding-top:0px;">
                <div style="margin-top:10px; margin-left:40px; height:35px;">
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">代理商：</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="dailiname" id="dailiname" maxlength="9" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;"></div>
                </div>
                <div style="margin-top:10px; margin-left:40px; height:35px;">
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">备注：</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="beizhu" id="beizhu" maxlength="900" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;"></div>
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:0px; margin-left:10px;"><input type="submit" style="width:73px;height:25px; background:url(baima/template/images/myxg.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" value=""></div>
                </div>
            </div>
        </div>
		</form>
        
		<form action="{XZKJURL}/kmation.php?action=kazhuxiao" method="post" target="hiddeniframe">
        <div style="margin-top:70px; margin-left:20px; ">
        	<div style="height:35px;">
            	<div style="float:left; font-family:'微软雅黑'; font-size:18px; font-weight:bold; margin-top:4px;">卡注销</div>
            </div>
            <div style="width:750px; height:40px; padding-top:0px;">
                <div style="margin-top:10px; margin-left:40px; height:35px;">
                     <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">卡ID：</div>
                    <div style="float:left; margin-left:10px;"><input type="text" name="kaid" id="kaid" maxlength="20" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
                    <div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:0px; margin-left:10px;"><input type="submit" style="width:73px;height:25px; background:url(baima/template/images/myzx.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" value=""></div>
                </div>
            </div>
        </div>
		</form>
		
		
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zkglkwh.js" type="text/javascript" charset="utf-8"></script>
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