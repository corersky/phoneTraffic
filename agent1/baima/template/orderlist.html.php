<!--{template header}-->
<script>
function jujueorder(orderid){
	document.getElementById("orderid").value=orderid;
	document.getElementById("jujuemsg").value='';
}

function showordererrnei(nei){
	document.getElementById("ordererrneirong").value=nei;
	
}
function showordernei(nei){
	document.getElementById("orderneirong").value=nei;
	
}
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var  sosozt=document.getElementById("sosozt").value;
	var url="{XZKJURL}"+"/index.php?action=orderlist&nick="+sosonick+"&zt="+sosozt;
	window.location.href=url;
}

function showoedersendinfo(tid){
	var title="��"+tid+"��������ϸ";
	document.getElementById("div_showduanxinsendinfo_title").innerHTML=title;
	document.getElementById("showck_iframe").src="index.php?action=orderlist_sjhlist&tid="+tid;
}

</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="ddglycldd" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site4.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">��������</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">�Ѵ�������</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                            	<div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">��˽����</div>
                                    <div class="fl">
                                       <select name="" class="inputtext2" id="sosozt">
											<option value="0">ȫ��</option>
											<option value="1">�������</option>
											<option value="2">�������</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">������</div>
                                    <div class="fl"><input class="inputtext" type="text" name="" placeholder="�ڴ����붩�����/�û�����ѯ..." id="sosonick"  value="{$nick}"></div>
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�������</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���ʱ��</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ύ�û���</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��������</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�۷�����</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�������</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��˷�ʽ</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>������ϸ</div></span>
                            </li>
                            
                             <!--{loop $orderarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[id]}</span>
                                <span class="list2 mt">{$value[createtime]}</span>
                                <span class="list3 mt">{$value[nick]}</span>
                                <span class="list4 mt" onClick="showordernei('{$value[nei]}');document.getElementById('showmbnr').style.display='';">{$value[neimsg]}...</span>
                                <span class="list5 mt">{$value[num]}</span>
                                <span class="list6 mt">{$value[hmnum]}</span>
                                <span class="list7 mt">
									
									<!--{if empty($value['shenheid'])}-->
									<!--{if $value['zt']==2}-->
									<span style="color:#de0000; cursor:pointer;" onClick="showordererrnei('{$value[msg]}');document.getElementById('showshbtgyy').style.display='';">����ʧ��<img src="baima/template/images/tjsbtips.png" width="16" height="16"></span>
									<!--{else}-->
									<span style="color:#25ae00;">������˳ɹ�</span>
									<!--{/if}-->
								<!--{else}-->
									<!--{if $value['zt']==2}-->
									<span style="color:#de0000; cursor:pointer;" onClick="showordererrnei('{$value[msg]}');document.getElementById('showshbtgyy').style.display='';">����ʧ��<img src="baima/template/images/tjsbtips.png" width="16" height="16"></span>
									<!--{else}-->
									<span style="color:#25ae00;">����˳ɹ�</span>
									<!--{/if}-->
									
								<!--{/if}-->
                                </span>
								
								
                                <span class="list8 mt" style="color:#006dcb;">
                                	<span class="cp" onClick="showoedersendinfo('{$value[id]}');document.getElementById('showckddmx').style.display='';">�鿴</span>
                                </span>
                                
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
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
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
            
            <div id="msgno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:300px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            ��������˶���
                        </div>
                    </div>
                    
                </li>
            </div>
            
            <div id="msgsearchno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:240px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            ���������û���<span class="colorred">������</span>����˶Ժ���������
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showmbnr" class="showmbnr" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-170px 0 0 -275px;width:550px;height:340px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">��������</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showmbnr').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:530px; height:300px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'΢���ź�'; font-size:17px;">
                <div style="margin-left:20px; margin-top:30px;">
                	<textarea name="" id="orderneirong"  style="color:#666;width:450px;height:190px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:20px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" onKeyPress="this.style.color='black';" readonly></textarea>
                </div>
            </div>
        </div>
	</div>
</span>
<span id="showshbtgyy" class="showshbtgyy" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-170px 0 0 -275px;width:550px;height:340px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">����ʧ��ԭ��</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showshbtgyy').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:530px; height:300px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'΢���ź�'; font-size:17px;">
                <div style="margin-left:20px; margin-top:30px;">
                	<textarea name="" id="ordererrneirong"  style="color:#666;width:450px;height:190px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:20px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" onKeyPress="this.style.color='black';" readonly></textarea>
                </div>
            </div>
        </div>
	</div>
</span>
<span id="showckddmx" class="showckddmx" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-275px 0 0 -275px;width:550px;height:550px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;"  id="div_showduanxinsendinfo_title">������ϸ</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showckddmx').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:550px; height:480px; overflow:hidden; margin-top:10px; font-family:'΢���ź�'; font-size:17px;">
                <iframe name="showck_iframe" id="showck_iframe" src="ddglyshddck.html" width="550" height="510" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">���ŷ���ƽ̨ʹ���˿�ܼ��������������������֧�ֿ�ܣ����������������Ա�����ʹ�á� </iframe>
            </div>
        </div>
	</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/ddglycldd.js" type="text/javascript"></script>



<!--{template footer}-->