<!--{template header}-->
<script>
function setsjh(){
	 var  sjh=document.getElementById("sjh").value;
	 if(sjh==""){
	 	alert("��д��Ϣ����Ϊ��!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&sjh='+sjh;
}

function setlxrxm(){
	 var  lxrxm=document.getElementById("lxrxm").value;
	 if(lxrxm==""){
	 	alert("��д��Ϣ����Ϊ��!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&lxrxm='+lxrxm;
}

function setlxrqq(){
	 var  lxrqq=document.getElementById("lxrqq").value;
	 if(lxrqq==""){
	 	alert("��д��Ϣ����Ϊ��!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&lxrqq='+lxrqq;
}

function setgsmc(){
	 var  gsmc=document.getElementById("gsmc").value;
	 if(gsmc==""){
	 	alert("��д��Ϣ����Ϊ��!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&gsmc='+gsmc;
}

function setdizhi(){
	 var  dizhi=document.getElementById("dizhi").value;
	 if(dizhi==""){
	 	alert("��д��Ϣ����Ϊ��!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&dizhi='+dizhi;
}


function setqianming(){
	 var  qianming=document.getElementById("qianming").value;
	 if(qianming==""){
	 	alert("��д��Ϣ����Ϊ��!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&qianming='+qianming;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="zhglxgzl">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��{$yingxiaoinfo[username]}����ϵ�绰��{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��˻�����-�޸�����</div>
        </div>
        <div class="v1" style="background:url(baima/template/images/xgzlbg.png) no-repeat;">
            <div class="v2" >
            	�û�����<span class="v3" >{$_SESSION["username"]}</span>
            </div>
            <div class="v4" style="position:absolute; font-family:'΢���ź�'; font-size:16px; margin-top:25px; padding-left:75px; width:625px; z-index:6;">
            	
				��ϵ�˵绰��
                <span id="lxrdh1" class="v3">{$userinfo[sjh]}</span><span id="lxrdh2" style="display:none;"><input name="sjh" id="sjh" value="{$userinfo[sjh]}" type="text" style="width:120px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="�������޸ĵĵ绰" /></span>
                <span class="v10" >��ע�����ֻ���Ϊ�һ�����Ψһ��ʽ��</span>
                <span id="lxrdhbtn1" class="fr v11" onClick="lxrdh()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrdhbtn2"  class="fr v11" style="display:none;"><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setsjh()"></span>
            </div>
			
            <div class="v5" style="position:absolute; font-family:'΢���ź�'; font-size:16px; margin-top:77px; padding-left:75px; width:625px; z-index:5;">
            	��ϵ��������
                <span id="lxrxm1" class="v3">{$userinfo[lxrxm]}</span><span id="lxrxm2" style="display:none;"><input name="lxrxm" id="lxrxm" value="{$userinfo[lxrxm]}" type="text" style="width:143px; height:25px;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�������޸ĵ�����" /></span>
                <span id="lxrxmbtn1" class="fr v11" onClick="lxrxm()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrxmbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);"  onclick="setlxrxm()"></span>
            </div>
			
            <div class="v6" style="position:absolute; font-family:'΢���ź�'; font-size:16px; margin-top:130px; padding-left:75px; width:625px; z-index:4;">
            	��ϵ��QQ��
                <span id="lxrqq1" class="v3">{$userinfo[lxrqq]}</span><span id="lxrqq2" style="display:none;"><input name="lxrqq" id="lxrqq" value="{$userinfo[lxrqq]}" type="text" style="width:148px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="�������޸ĵ�QQ����" /></span>
                <span id="lxrqqbtn1" class="fr v11" onClick="lxrqq()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrqqbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setlxrqq()"></span>
            </div>
            <div class="v7" style="position:absolute; font-family:'΢���ź�'; font-size:16px; padding-top:184px; padding-left:75px; width:625px; z-index:3;">
            	��˾���ƣ�
                <span id="gsmc1" class="v3">{$userinfo[gsmc]}</span><span id="gsmc2" style="display:none;"><input name="gsmc" id="gsmc" value="{$userinfo[gsmc]}" type="text" style="width:157px; height:25px;" maxlength="100" onKeyPress="this.style.color='black';" placeholder="�������޸ĵĹ�˾����" /></span>
                <span id="gsmcbtn1" class="fr v11" onClick="gsmc()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsmcbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setgsmc()"></span>
            </div>
            <div class="v8" style="position:absolute; font-family:'΢���ź�'; font-size:16px; padding-top:237px; padding-left:75px; width:625px; z-index:2;">
            	��˾��ַ��
                <span id="gsdz1" class="v3">{$userinfo[dizhi]}</span><span id="gsdz2" style="display:none;"><input name="dizhi" id="dizhi" value="{$userinfo[dizhi]}" type="text" style="width:157px; height:25px;" maxlength="500" onKeyPress="this.style.color='black';" placeholder="�������޸ĵĹ�˾��ַ" /></span>
                <span id="gsdzbtn1" class="fr v11" onClick="gsdz()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsdzbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setdizhi()"></span>
            </div>
            <div class="v9" style="position:absolute; font-family:'΢���ź�'; font-size:16px; padding-top:286px; padding-left:75px; width:625px; z-index:1;">
            	<div>����ǩ����
                <span class="v3">{$userinfo[qianming]}</span>
                </div>
                <div style="color:#F00; font-size:13px;">��ע������ǩ�������޸ģ������޸�����ϵ�ͷ�רԱ��</div>
            </div>
            <div class="v9" style="position:absolute; font-family:'΢���ź�'; font-size:16px; padding-top:344px; padding-left:75px; width:625px; z-index:1;">
            	ע��ʱ�䣺
                <span class="v3">{$userinfo[createtime]}</span>
            </div>
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zhglxgzl.js" type="text/javascript"></script>

<!--{template footer}-->