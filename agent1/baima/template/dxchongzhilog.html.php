<!--{template header}-->
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=dxchongzhilog&nick="+sosonick;
	window.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="dxglczdxjl" style="margin-bottom:30px;">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã���ֵ����-��ֵ���ż�¼</div>
        </div>
        <div class="v1">
            <div class="v8">
                <div class="fl v9">&nbsp;&nbsp;������</div>
                <div class="fl"><input id="sosonick"  value="{$nick}" class="v10" type="text" name="date" placeholder="�ڴ������û������в���"></div>
                <div class="fl v12"><input id="thesearch" class="v11" type="text" name="" style="background:url(baima/template/images/search2.png) no-repeat;" onclick="soso()"></div>
            </div>
        </div>
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ͻ���</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ����</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���Ľ��</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ύʱ��</div></span>
                        </li>

                        
                        <div id="msgyes">
                            <!--{loop $czlogarr $value}-->
                            <li>
                                <span class="list1 mt">{$value[nick]}</span>
                                <span class="list2 mt">��ֵ{$value[jine]}������</span>
                                <span class="list3 mt" >{$value[shje]}Ԫ</span>
                                <span class="list4 mt">{$value[createtime]}</span>
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
                        </div>
                        <div id="msgno" style="display:none;">
                            <li style="height:300px;">
                            
                                <div style="margin-top:140px; font-size:14px; font-weight:bold;">
                                    �ף�δ��ѯ��������¼...
                                </div>
                                
                            </li>
                        </div>
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxglczdxjl.js" type="text/javascript"></script>
		  
<!--{template footer}-->