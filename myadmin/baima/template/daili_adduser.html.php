<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<style>
#dlsgltjdls .inputtext{color:#666;width:200px;height:30px; font-size:14px; border:#bbb 1px solid; outline:none;}
#dlsgltjdls .inputtext2{color:#666;width:300px;height:30px; font-size:14px; border:#bbb 1px solid; outline:none;}
</style>

<div id="mains">
	<div id="dlsgltjdls" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">�����̹���</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">��Ӵ�����</div>
        </div>
        <form action="{XZKJURL}/dailiation.php?action=adduser" method="post" target="hiddeniframe">
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
        	<div style="margin-top:50px; margin-left:130px; font-family:'΢���ź�'; font-size:16px;">
                <div>
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">�û�����</div><div class="fl" style="margin-left:53px; margin-top:-6px;"><input class="inputtext" name="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�������û���..." /></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��ϵ�˵绰��</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="sjh" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" onKeyPress="this.style.color='black';" placeholder="��������ϵ�˵绰..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��½���룺</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext" name="pwd" type="password" maxlength="100" onKeyPress="this.style.color='black';" placeholder="�������½����..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">ȷ�����룺</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext" name="pwd2" type="password" maxlength="100" onKeyPress="this.style.color='black';" placeholder="���ٴ���������..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��ϵ��������</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="lxrxm" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="��������ϵ������..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��ϵ��QQ��</div><div class="fl" style="margin-left:28px; margin-top:-6px;"><input class="inputtext" name="lxrqq" type="text" maxlength="10" onKeyPress="this.style.color='black';"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="��������ϵ��QQ..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��˾���ƣ�</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="gsmc" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="�����빫˾����..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��˾��ַ��</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="dizhi" type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="�����빫˾��ַ..."/></div>
                </div>
		<div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">�Ƽ��ˣ�</div>
                    <div class="fl" style="margin-left:54px; margin-top:-6px;">
                        <select name="tjrid" style="width:200px;height:28px;border:#bbb 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; cursor:pointer;">
                            <option value="0">��</option>
							<!--{loop $dailiuserarr $value}-->
                            <option value="{$value[id]}">{$value[username]}</option>
							<!--{/loop}-->
                        </select>
                    </div>
                </div>
		<div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">Ӫ��רԱ��</div>
                    <div class="fl" style="margin-left:39px; margin-top:-6px;">
                        <select style="width:200px;height:28px;border:#bbb 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; cursor:pointer;" name="yingxiaoid" id="yingxiaoid">
                            <option value="0">��˾</option>
							<!--{loop $yingxiaozyarr $k=>$v}-->
							<option value="{$k}">{$v}</option>
							<!--{/loop}-->
                        </select>
                    </div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">�û����ͣ�</div>
                    <div class="fl" style="margin-left:38px; margin-top:0px;">
                    	<input type="checkbox" name="isdxuser" id="isdxuser" value="1" style="cursor:pointer;">&nbsp;����&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="islluser" id="islluser" value="1" checked="checked" style="cursor:pointer;">&nbsp;����
                    </div>
                </div>
                
                <div style="padding-top:70px; margin-left:180px;">
                    <input class="v7" type="submit" value="" style="width:105px; height:40px;background-image:url(baima/template/images/tjdls.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            
        </div>
        </form>
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dlsgltjdls.js" type="text/javascript"></script>



		

<!--{template footer}-->