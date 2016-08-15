<!--{template header}-->
<script>

function getsdsendtongzhinum(){
		
		
		var bai;
		if(window.XMLHttpRequest){//其他浏览器初始化Ajax对象
			bai = new XMLHttpRequest();
		}else{//IE浏览器初始化Ajax对象
			bai = new ActiveXObject("Microsoft.XMLHTTP");
		}
		bai.onreadystatechange=function (){
		if(bai.readyState==4){
		  if(bai.status==200){
			 	var str = bai.responseText;
				 str=""+str;
				document.getElementById('span_tongzhinum').innerHTML = str;
		  }
		}  
	  }//函数结束
	  
	
	 var sendduixiang=document.getElementById("sendduixiang").value;
	var zcshichang=document.getElementById("zcshichang").value;
	var ljczjine=document.getElementById("ljczjine").value;
	var dxyedayu=document.getElementById("dxyedayu").value;
	var dxyexiaoyu=document.getElementById("dxyexiaoyu").value;
	
	 
	  bai.open("GET","orderation.php?action=getsdsendtongzhinum&sendduixiang="+sendduixiang+"&zcshichang="+zcshichang+"&ljczjine="+ljczjine+"&dxyedayu="+dxyedayu+"&dxyexiaoyu="+dxyexiaoyu,true);
	  bai.send(null);//向服务器发送请求
}


</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="tztxsdtz" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">通知提醒</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">自动提醒</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:50px;">
        	
			<form action="{XZKJURL}/orderation.php?action=sdsendtongzhi" method="post" target="hiddeniframe">
        	<div style="margin-top:10px; margin-left:50px; font-family:'微软雅黑'; font-size:16px; font-weight:bold;">
                <div>
                    <div class="fl">通知发送对象：</div>
                    <div class="fl" style="margin-left:10px;">
                    	<div>
                        	<div class="fl">●&nbsp;&nbsp;发送对象：</div>
                            <div class="fl" style="margin-top:-3px; margin-left:69px;">
                                <select name="sendduixiang" id="sendduixiang" onchange="getsdsendtongzhinum()" class="inputtext2">
                                    <option value="0">所有用户</option>
                                    <option value="1">接囗用户</option>
                                    <option value="2">绑定用户</option>
                                    <option value="3">非绑定用户</option>
                                </select>
                            </div>
                        </div>
                        <div style="padding-top:50px;">
                        	<div class="fl">●&nbsp;&nbsp;累计充值金额超过：</div>
                            <div class="fl" style="margin-top:-3px; margin-left:5px;">
                                <input class="inputtext" id="ljczjine" name="ljczjine" onblur="getsdsendtongzhinum()" type="text" maxlength="20" onKeyPress="this.style.color='black';" />
                            </div>
                            <div class="fl">&nbsp;元</div>
                        </div>
                        <div style="padding-top:50px;">
                        	<div class="fl">●&nbsp;&nbsp;短信余额：大于等于&nbsp;</div>
                            <div class="fl" style="margin-top:-2px;">
                            	<input class="inputtext"  name="dxyedayu" id="dxyedayu" onblur="getsdsendtongzhinum()" type="text" maxlength="20" onKeyPress="this.style.color='black';"/>
                            </div>
                            <div class="fl">&nbsp;小于等于&nbsp;</div>
                            <div class="fl" style="margin-top:-2px;">
                            	<input class="inputtext" name="dxyexiaoyu" id="dxyexiaoyu" onblur="getsdsendtongzhinum()" type="text" maxlength="20" onKeyPress="this.style.color='black';" />
                            </div>
                            <div class="fl">&nbsp;元</div>
                        </div>
                    </div>
                </div>
                <div class="colorred" style="padding-top:220px; margin-left:120px;">
                	本次共发送通知人数为：<span id="span_tongzhinum">0</span>人
                </div>
                <div id="showthesms" style="padding-top:15px;">
                    <div class="fl">通知发送内容：</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><textarea name="tongzhimsg" id="tongzhimsg" style="color:#666;width:480px;height:80px; font-size:16px; padding:10px; resize: none; background-color:#FFF; line-height:20px; border:#bbb 1px solid; outline:none;" maxlength="67" placeholder="请输入通知发送内容..." onpropertychange="if(value.length>67) value=value.substr(0,67)" onKeyPress="this.style.color='black';"></textarea></div>
                    <div style="position:absolute; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:300; color:#b3b3b3; margin-top:75px; margin-left:580px;">
                    	<span id="getsmszishu">0</span>/67
                    </div>
                </div>
                <div style="padding-top:130px; margin-left:250px;">
					<input type="hidden" name="zcshichang" id="zcshichang" value="0"/>
                    <input type="submit" value="" style="width:136px; height:41px;background-image:url(baima/template/images/sdtzqdfstz.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
			</form>
			
			
            
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/tztxsdtz.js" type="text/javascript"></script>



<!--{template footer}-->