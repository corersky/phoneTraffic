<!--{template header}-->
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>


<div id="mains">
	<div id="zkglsckm">
        <div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">�ƿ�����</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">���ɿ���</div>
        </div>
        
        
        <form action="{XZKJURL}/kmation.php?action=addkm" method="post" target="hiddeniframe">
		
        <div style="margin-top:50px; margin-left:80px; height:35px;">
        	<div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px;">�������ƣ�</div>
            <div style="float:left; margin-left:10px;"><input type="text"  name="piname" id="piname"  style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;"></div>
        </div>
        <div style="margin-top:10px; margin-left:50px; height:35px;">
        	<div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px;">���ɿ��ܸ�����</div>
            <div style="float:left; margin-left:10px;"><input type="text" name="kanum" id="kanum" maxlength="20" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></div>
            <div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px; margin-left:10px;">��</div>
        </div>
        <div style="margin-top:10px; margin-left:66px; height:35px;">
        	<div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px;">��ѡ���ײͣ�</div>
            <div id="chooseyys" style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px;">
            	&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="sjhtype" id="sjhtype" value="0" style="cursor:pointer;" onChange="showyd()">&nbsp;�ƶ�&nbsp;&nbsp;&nbsp;
                <input type="radio"  name="sjhtype" id="sjhtype" onChange="showlt()" value="1" style="cursor:pointer;">&nbsp;��ͨ&nbsp;&nbsp;&nbsp;
                <input type="radio"  name="sjhtype" id="sjhtype" onChange="showdx()" value="2" style="cursor:pointer;">&nbsp;����&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        
        
        <div id="thetaocan" style="margin-top:10px; margin-left:50px; height:460px; display:none;">
        	<div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px; margin-right:10px;">������ֵ�ײͣ�</div>
            <div id="theyidong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'΢���ź�'; font-size:16px;">
                	��ǰΪ�ƶ��ײ�
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="10" checked></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�3Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="30"></div>
                    <div style="float:left;margin-left:30px;">30M</div>

                    <div style="float:left;margin-left:68px;">�ʷ�5Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="70"></div>
                    <div style="float:left;margin-left:30px;">70M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�10Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="150"></div>
                    <div style="float:left;margin-left:30px;">150M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�20Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="500"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�30Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="1024"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:80px;">�ʷ�50Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="2048"></div>
                    <div style="float:left;margin-left:30px;">2G</div>
                    <div style="float:left;margin-left:80px;">�ʷ�70Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="3072"></div>
                    <div style="float:left;margin-left:30px;">3G</div>
                    <div style="float:left;margin-left:80px;">�ʷ�100Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="4096"></div>
                    <div style="float:left;margin-left:30px;">4G</div>
                    <div style="float:left;margin-left:80px;">�ʷ�130Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="6144"></div>
                    <div style="float:left;margin-left:30px;">6G</div>
                    <div style="float:left;margin-left:80px;">�ʷ�180Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="11264"></div>
                    <div style="float:left;margin-left:30px;">11G</div>
                    <div style="float:left;margin-left:72px;">�ʷ�280Ԫ</div>
                </div>
            </div>
            <div id="theliantong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'΢���ź�'; font-size:16px;">
                	��ǰΪ��ͨ�ײ�
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;"  value="20"></div>
                    <div style="float:left;margin-left:30px;">20M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�3Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="50"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�6Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="100"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�10Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="200"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�15Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="500"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�30Ԫ</div>
                </div>
            </div>
            <div id="thedianxin" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'΢���ź�'; font-size:16px;">
                	��ǰΪ�����ײ�
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="5"></div>
                    <div style="float:left;margin-left:30px;">5M</div>
                    <div style="float:left;margin-left:78px;">�ʷ�1Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="10"></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:70px;">�ʷ�2Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="30"></div>
                    <div style="float:left;margin-left:30px;">30M</div>
                    <div style="float:left;margin-left:70px;">�ʷ�5Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="50"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:70px;">�ʷ�7Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="100"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�10Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="200"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�15Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="500"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�30Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="taocanliuliang" name="taocanliuliang" type="radio" style="cursor:pointer;" value="1024"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:80px;">�ʷ�50Ԫ</div>
                </div>
            </div>
            <div id="thesure" style="padding-top:400px; width:131px; height:45px; margin-left:270px;">
               
				<input type="submit" value="" style="width:131px; height:45px;background-image:url(baima/template/images/kssc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
            </div>
        </div>
        
        
		</form>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zkglsckm.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
function showyd()
{
	document.getElementById("thetaocan").style.display="";
	document.getElementById("theyidong").style.display="";
	document.getElementById("theliantong").style.display="none";
	document.getElementById("thedianxin").style.display="none";
}
function showlt()
{
	document.getElementById("thetaocan").style.display="";
	document.getElementById("theyidong").style.display="none";
	document.getElementById("theliantong").style.display="";
	document.getElementById("thedianxin").style.display="none";
}
function showdx()
{
	document.getElementById("thetaocan").style.display="";
	document.getElementById("theyidong").style.display="none";
	document.getElementById("theliantong").style.display="none";
	document.getElementById("thedianxin").style.display="";
}
</script>


<!--{template footer}-->