<!--{template header}-->


<div id="mains">
	<div id="cwglwdjg">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��ƿ�����-���ɿ���</div>
        </div>
        <div class="v1">
            <div id="mythetable">
                <div id="table">
				<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
				<form action="{XZKJURL}/kmation.php?action=addkm" method="post" target="hiddeniframe">
				
				�������ƣ�<input type="text" name="piname" id="piname" maxlength="17"/> <br />
				���ɿ��ܸ���:<input type="text" name="kanum" id="kanum"/> �� <br />
				��ѡ���ײͣ�
				<input type="radio" name="sjhtype" id="sjhtype" value="0" onclick="showtaocan(0)" checked="checked"/> �ƶ�
				<input type="radio" name="sjhtype" id="sjhtype" value="1" onclick="showtaocan(1)"/> ��ͨ
				<input type="radio" name="sjhtype" id="sjhtype" value="2" onclick="showtaocan(2)"/> ����
				
				
				
				<div id="div_taochan_0" style=" margin-left:35px;">
									<div style="font-size:16px;font-weight:bold;">�ƶ��ײ�</div>
									<!--{loop $yidongtcarr $key=>$value}-->
									<input type="radio" name="taocanliuliang" id="taocanliuliang" value="{$key}"/> {$value[name]} 
									&nbsp;&nbsp; �۸�:{$value[mianzhi]}Ԫ
									<br /> 
									<!--{/loop}-->
								</div>
								
								<div id="div_taochan_1" style="margin-left:35px;display:none;">
									<div style="font-size:16px; font-weight:bold;">��ͨ�ײ�</div>
									<!--{loop $liantongtcarr $key=>$value}-->
									<input type="radio" name="taocanliuliang" id="taocanliuliang" value="{$key}"/> {$value[name]} 
									&nbsp;&nbsp; �۸�:{$value[mianzhi]}Ԫ
									<br /> 
									<!--{/loop}-->
								</div>
								
								<div id="div_taochan_2" style="margin-left:35px;display:none;">
									<div style="font-size:16px; font-weight:bold;">�����ײ�</div>
									<!--{loop $dianxintcarr $key=>$value}-->
									<input type="radio" name="taocanliuliang" id="taocanliuliang" value="{$key}"/> {$value[name]} 
									&nbsp;&nbsp; �۸�:{$value[mianzhi]}Ԫ
									<br /> 
									<!--{/loop}-->
								</div>
				
				<input  type="submit" value="��ʼ����"/>
				</form>
                    
                    
                </div>
            </div>
        </div>

        
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script>
$(function(){
	$("#menulizkgl").trigger("click");
	$("#mksckm").css("background-color","#FFF");
	$("#mksckm").css("color","#299be4");
})


//�����ֻ��Ź�����ʾ�ײ�
function showtaocan(gs){
	var divname="div_taochan_";
	var id=divname+"0";
	if(gs=="0"){
		var id=divname+"0";
	}else if(gs=="1"){
		var id=divname+"1";
	}else if(gs=="2"){
		var id=divname+"2";
	}
	
	document.getElementById(divname+"0").style.display="none";
	document.getElementById(divname+"1").style.display="none";
	document.getElementById(divname+"2").style.display="none";
	document.getElementById(id).style.display="";
	document.getElementById("tr_taocan").style.display="";
	
}
</script>
<!--{template footer}-->