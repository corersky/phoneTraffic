<!--{template header}-->
<script>
function setjiekoutemp(id,temp,qm){
	document.getElementById("jiekoutempid").value=id;
	document.getElementById("thesmstext").value=temp;
	document.getElementById("set_jiekoutemp_qm").value=qm;
	if(id==0 || id==""){
		document.getElementById("div_settemp_title").innerHTML="��������ģ��";
	}else{
		document.getElementById("div_settemp_title").innerHTML="�༭����ģ��";
	}
	

}

</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="dxjkdxmb">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��{$yingxiaoinfo[username]}����ϵ�绰��{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã����Ž���-����ģ��</div>
        </div>
        <div class="colorred fl v1">
        	<div class="v2">ע��ʹ�ýӿڷ��Ͷ��ţ���Ҫ�ȱ���ģ�壬�ӿڷ��Ͷ���ʱ����Ҫ��ģ��һ�£��粻һ�£����ᷢ��ʧ�ܡ�</div>
        </div>
        
        
        <div class="v3" style="">
        	<div style="font-size:18px; font-family:'΢���ź�'; font-weight:bold; margin-top:10px; margin-left:10px;">
            	
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
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��������</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�������״̬</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                        </li>
                          
                       
						<!--{loop $temparr $key=>$value}-->
                        <li id="li{$key}" onMouseMove="showbj(this)" onMouseOut="closebj(this)">
                            
                            <span class="list1 mt1">{$value[id]}</span>
                            <span class="list2 mt1">{$value[temp]}</span>
                            <span class="list3 mt2">
							<!--{if empty($value['zt'])}-->
							  <!--�����-->
                                <span id="shz" style=""><img src="baima/template/images/shz.png" width="80" height="27"></span>
								<!--{elseif $value['zt']==1}-->
                               <!--���ͨ��-->
                                <span id="shtg" style=""><img src="baima/template/images/shtg.png" width="80" height="27"></span>
                              <!--{elseif $value['zt']==2}-->

                                <!--���δͨ��-->
								<span id="shwtg{$key}" onMouseMove="showwtg(this)" onMouseOut="closewtg(this)"><img src="baima/template/images/shwtg.png" width="97" height="27"></span>
								<!--{/if}-->
                                <!--����ʶ-->
                                
								
								</span>
								
                            <span class="list4 mt3">
                                <span>
								<!--{if !empty($value['zt'])}-->
                                   <!--�ɱ༭-->
                                    <span id="revise1" onClick="setjiekoutemp('{$value[id]}','{$value[tempnei]}','{$value[tempqm]}');document.getElementById('boxshowtdxmb').style.display='';"><img src="baima/template/images/dxmblistrevise1.png" width="40" height="40"></span>
									<!--{else}-->
                                    <!--���ɱ༭-->
                                    <span id="revise2"><img src="baima/template/images/dxmblistrevise2.png" width="40" height="40"></span>
									<!--{/if}-->
                                </span>
								
                               <span>
                                   <!--��ɾ��-->
                                    <span id="del1"><a href="{XZKJURL}/jiekouation.php?action=deljiekoutemp&id={$value[id]}" target="hiddeniframe"><img src="baima/template/images/dxmblistdel1.png" width="40" height="40"></a></span>
                                </span>
								
								
								
                            </span>
                            <!--����ʶ-->
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
                                    ��<span class="pagetheallfont">{$page}/{$zpage}</span>ҳ
                                </div>
                                
                                <div class="pagego">
                                    <div class="fl">
                                     ��<span class="pagenum">
                                            <input class="nowpagetext" name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>ҳ
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
                    <div class="fl v11">�ף�����û�ж���ģ�壬����</div><div class="fl cp" onClick="document.getElementById('boxshowtdxmb').style.display='';"><img src="baima/template/images/cjdxmb.png" width="151" height="39"></div>
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
            	<div style="height:40px; background-color:#2da4eb; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;" id="div_settemp_title">��������ģ��/�༭����ģ��</div>
                </div>
                <div id="thesms" style="position:absolute; width:530px; height:310px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'΢���ź�'; font-size:15px;">


<!--

                	<div style="margin-left:20px; margin-top:20px;">
                    	����ǰ������<span id="mysmsnum" class="colorred">0</span>�������������������<span class="colorred">180</span>��
                    </div>
					
					
					<form action="{XZKJURL}/jiekouation.php?action=setjiekoutemp" method="post" target="hiddeniframe">
                    <div style="margin-top:10px; margin-left:13px;">
                    	<textarea id="thesmstext" name="set_jiekoutemp" style="color:#666;width:500px;height:120px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:#97d7ff 1px solid;" maxlength="180" onpropertychange="if(value.length>180) value=value.substr(0,180)" onKeyPress="this.style.color='black';" placeholder="���ڴ�������������Ҫ���������..." ></textarea>
                    </div>
                    <div style="margin-top:10px; margin-left:13px;">
                    	<span>��˾ǩ����</span>
                        <span>
                    	<input id="set_jiekoutemp_qm" name="set_jiekoutemp_qm"  type="text" style="width:422px; height:25px;border:#97d7ff 1px solid;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�����ڴ����빫˾ǩ��..." />
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
                    	˵����1ģ�����ݿ����б������ڡ����磺���Ķ�����֤��Ϊ*****��10��������Ч��2.�����༭��ģ�������б���,���˸�ʽ��*****��
                    </div>
                    <div style="margin-top:20px; margin-left:13px;">
                    	<textarea id="thesmstext" name="set_jiekoutemp" style="color:#666;width:500px;height:100px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:#97d7ff 1px solid;" maxlength="280" onpropertychange="if(value.length>180) value=value.substr(0,180)" onKeyPress="this.style.color='black';" placeholder="���ڴ�������������Ҫ���������..." ></textarea>
                    </div>
                    <div class="cp" style="position:absolute; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#b3b3b3; margin-top:-125px; margin-left:415px;" onClick="crbl()">
                    	<img src="baima/template/images/dxmbcrbl.png" width="100" height="20">
                    </div>
                    <div style="position:absolute; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#b3b3b3; margin-top:-23px; margin-left:460px;">
                    	<span id="mysmsnum" style="font-size:16px;">0</span>/280
                    </div>
                    <div style="margin-top:10px; margin-left:13px;">
                    	<span style="margin-top:3px;">��˾ǩ����</span>
                        <span>
                    		<input id="set_jiekoutemp_qm" name="set_jiekoutemp_qm" type="text" style="width:100px; height:25px;border:#97d7ff 1px solid;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�����빫˾���..."/>
                        </span>
                    </div>
                    <div class="fl colorred" style="font-size:13px; margin-left:15px; margin-top:5px;">ע��ǩ���粻�ҲΪ�������ýӿڷ���ʱ�����ʵǩ��</div>
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