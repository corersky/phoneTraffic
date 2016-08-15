<!--{template header}-->
<script>
function setjiekoutemp(id,temp,qm){
	document.getElementById("jiekoutempid").value=id;
	document.getElementById("thesmstext").value=temp;
	document.getElementById("set_jiekoutemp_qm").value=qm;
	if(id==0 || id==""){
		document.getElementById("div_settemp_title").innerHTML="创建短信模板";
	}else{
		document.getElementById("div_settemp_title").innerHTML="编辑短信模板";
	}
	

}

</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="dxjkdxmb">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：短信接囗-短信模板</div>
        </div>
        <div class="colorred fl v1">
        	<div class="v2">注：使用接口发送短信，需要先报备模板，接口发送短信时内容要与模板一致，如不一致，将会发送失败。</div>
        </div>
        
        
        <div class="v3" style="">
        	<div style="font-size:18px; font-family:'微软雅黑'; font-weight:bold; margin-top:10px; margin-left:10px;">
            	
            </div>
        </div>
		
		
         <!--{if !empty($temparr)}-->
        
        <div id="msgyes" style="margin-left:-20px; margin-top:-1px;">
        	<div class="v6" onClick="document.getElementById('boxshowtdxmb').style.display='';">
                <img src="baima/template/images/cjdxmb.png" width="151" height="39" onclick="setjiekoutemp(0,'','');">
            </div>
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>编号</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信内容</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信审核状态</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                        </li>
                          
                       
						<!--{loop $temparr $key=>$value}-->
                        <li id="li{$key}" onMouseMove="showbj(this)" onMouseOut="closebj(this)">
                            
                            <span class="list1 mt1">{$value[id]}</span>
                            <span class="list2 mt1">{$value[temp]}</span>
                            <span class="list3 mt2">
							<!--{if empty($value['zt'])}-->
							  <!--审核中-->
                                <span id="shz" style=""><img src="baima/template/images/shz.png" width="80" height="27"></span>
								<!--{elseif $value['zt']==1}-->
                               <!--审核通过-->
                                <span id="shtg" style=""><img src="baima/template/images/shtg.png" width="80" height="27"></span>
                              <!--{elseif $value['zt']==2}-->

                                <!--审核未通过-->
								<span id="shwtg{$key}" onMouseMove="showwtg(this)" onMouseOut="closewtg(this)"><img src="baima/template/images/shwtg.png" width="97" height="27"></span>
								<!--{/if}-->
                                <!--带标识-->
                                
								
								</span>
								
                            <span class="list4 mt3">
                                <span>
								<!--{if !empty($value['zt'])}-->
                                   <!--可编辑-->
                                    <span id="revise1" onClick="setjiekoutemp('{$value[id]}','{$value[tempnei]}','{$value[tempqm]}');document.getElementById('boxshowtdxmb').style.display='';"><img src="baima/template/images/dxmblistrevise1.png" width="40" height="40"></span>
									<!--{else}-->
                                    <!--不可编辑-->
                                    <span id="revise2"><img src="baima/template/images/dxmblistrevise2.png" width="40" height="40"></span>
									<!--{/if}-->
                                </span>
								
                               <span>
                                   <!--可删除-->
                                    <span id="del1"><a href="{XZKJURL}/jiekouation.php?action=deljiekoutemp&id={$value[id]}" target="hiddeniframe"><img src="baima/template/images/dxmblistdel1.png" width="40" height="40"></a></span>
                                </span>
								
								
								
                            </span>
                            <!--带标识-->
                            <div id="showterrtips{$key}" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:160px; margin-left:565px; margin-top:5px; line-height:20px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; text-align:left; display:none;">
                                <div style="margin:8px;">{$value[msg]}</div>
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
                                            <input class="nowpagetext" name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
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
        <!--{else}-->
        <div id="msgno" class="v8" style="">
            <li class="v9">
            
                <div class="v10">
                    <div class="fl v11">亲，您还没有短信模板，请先</div><div class="fl cp" onClick="document.getElementById('boxshowtdxmb').style.display='';"><img src="baima/template/images/cjdxmb.png" width="151" height="39"></div>
                </div>
                
            </li>
        </div>
		<!--{/if}-->
		
		
		
		
		
    </div>
</div>


<span id="boxshowtdxmb" class="boxshowtdxmb" style="display:none;">
	<div id="dialogBgshowtdxmb" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div id="dialogshowtdxmb" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-175px 0 0 -275px;width:550px;height:350px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
		<div class="dialogTopshowtdxmb">
			<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;" id="div_settemp_title">创建短信模板/编辑短信模板</div>
                </div>
                <div id="thesms" style="position:absolute; width:530px; height:310px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:15px;">


<!--

                	<div style="margin-left:20px; margin-top:20px;">
                    	您当前共输入<span id="mysmsnum" class="colorred">0</span>个，您本次最多能输入<span class="colorred">180</span>字
                    </div>
					
					
					<form action="{XZKJURL}/jiekouation.php?action=setjiekoutemp" method="post" target="hiddeniframe">
                    <div style="margin-top:10px; margin-left:13px;">
                    	<textarea id="thesmstext" name="set_jiekoutemp" style="color:#666;width:500px;height:120px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:#97d7ff 1px solid;" maxlength="180" onpropertychange="if(value.length>180) value=value.substr(0,180)" onKeyPress="this.style.color='black';" placeholder="请在此区域内输入您要输入的内容..." ></textarea>
                    </div>
                    <div style="margin-top:10px; margin-left:13px;">
                    	<span>公司签名：</span>
                        <span>
                    	<input id="set_jiekoutemp_qm" name="set_jiekoutemp_qm"  type="text" style="width:422px; height:25px;border:#97d7ff 1px solid;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="您可在此输入公司签名..." />
                        </span>
                    </div>
                    <div style="margin-left:220px; margin-top:20px;">
						<input type="hidden" name="jiekoutempid" id="jiekoutempid" value=""/><br />
                    	<input type="submit" value="" style="width:87px; height:30px;background-image:url(baima/template/images/tjsh.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                                </form>

-->


<form action="{XZKJURL}/jiekouation.php?action=setjiekoutemp" method="post" target="hiddeniframe">
                    <div class="colorred" style="margin-left:10px; margin-top:10px;">
                    	说明：1模板内容可以有变量存在。例如：您的短信验证码为*****，10分钟内有效。2.如您编辑的模板内容有变量,按此格式：*****。
                    </div>
                    <div style="margin-top:20px; margin-left:13px;">
                    	<textarea id="thesmstext" name="set_jiekoutemp" style="color:#666;width:500px;height:100px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:#97d7ff 1px solid;" maxlength="280" onpropertychange="if(value.length>180) value=value.substr(0,180)" onKeyPress="this.style.color='black';" placeholder="请在此区域内输入您要输入的内容..." ></textarea>
                    </div>
                    <div class="cp" style="position:absolute; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#b3b3b3; margin-top:-125px; margin-left:415px;" onClick="crbl()">
                    	<img src="baima/template/images/dxmbcrbl.png" width="100" height="20">
                    </div>
                    <div style="position:absolute; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#b3b3b3; margin-top:-23px; margin-left:460px;">
                    	<span id="mysmsnum" style="font-size:16px;">0</span>/280
                    </div>
                    <div style="margin-top:10px; margin-left:13px;">
                    	<span style="margin-top:3px;">公司签名：</span>
                        <span>
                    		<input id="set_jiekoutemp_qm" name="set_jiekoutemp_qm" type="text" style="width:100px; height:25px;border:#97d7ff 1px solid;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入公司简称..."/>
                        </span>
                    </div>
                    <div class="fl colorred" style="font-size:13px; margin-left:15px; margin-top:5px;">注：签名如不填，也为变量，用接口发送时需加真实签名</div>
                    <div style="margin-left:220px; margin-top:20px;">
					<input type="hidden" name="jiekoutempid" id="jiekoutempid" value=""/><br />
                    	<input type="submit" value="" style="width:87px; height:30px;background-image:url(baima/template/images/tjsh.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
   </form>					
					
					
					
                </div>
            </div>
			<div id="showtdxmbclose" style="position:absolute;margin-top:-105px;margin-left:500px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('boxshowtdxmb').style.display='none';">
				<img src="baima/template/images/openclose.png" style="margin-top:67px">
			</div>
		</div>
	</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxjkdxmb.js" type="text/javascript"></script>
<script>
function xgqm()
{
	document.getElementById("xgqmyes").style.display="none";
	document.getElementById("xgqmno").style.display="";
	document.getElementById("xgqm").style.display="none";
	document.getElementById("bcqm").style.display="";
}
function showwtg(obj)
{
	$("#showterrtips"+obj.id.substring(5,obj.id.length)).fadeIn();
	/*setTimeout(function(){
		$("#showterrtips").fadeOut();
	},2000)*/
}
function closewtg(obj)
{
	$("#showterrtips"+obj.id.substring(5,obj.id.length)).fadeOut();
}
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
  
</script>


<!--{template footer}-->