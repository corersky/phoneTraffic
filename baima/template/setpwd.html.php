<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="{XZKJURL}/duanxination.php?action=setpwd" method="post" target="hiddeniframe">
<div id="mains">
	<div id="zhglxgmm">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��{$yingxiaoinfo[username]}����ϵ�绰��{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��˻�����-�޸�����</div>
        </div>
        <div class="v1">
            <div>
            	<div class="fl colorred">*</div><div class="fl v2">��������룺</div><div class="fl v3"><input class="inputtext" name="jiupwd" id="jiupwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="�����������..." /></div>
            </div>
            <div class="v8">
            	<div class="fl colorred">*</div><div class="fl v2">�������룺</div><div class="fl v4"><input id="pwd" class="inputtext" name="pwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="������������..." /></div>
            </div>
            <div class="v8">
            	<div class="fl colorred">*</div><div class="fl v2">ȷ�����룺</div><div class="fl v4"><input id="pwd2" class="inputtext" name="pwd2" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="���ظ���������������..."  onBlur="checkmm()"/></div>
                <div id="showmmno" class="fl v5" style="display:none;">�������벻һ��</div>
            </div>
            <div class="v6">
                <input class="v7" type="submit" value="" style="width:125px; height:39px;background-image:url(baima/template/images/xgwc.png); ">
            </div>
        </div>
        
    </div>
</div>
</form>
<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zhglxgmm.js" type="text/javascript"></script>


<!--{template footer}-->