<!--{template header}-->
<script>
function soso(){
	var  sosoname=document.getElementById("sosoname").value;
	var url="{XZKJURL}"+"/index.php?action=km_kalist&pid={$pid}&sosoname="+sosoname;
	window.location.href=url;
}
</script>
<div id="mains">
	<div id="cwglwdjg">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��ƿ�����-������</div>
        </div>
        <div class="v1">
            <div id="mythetable">
                <div id="table">
				<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
				
				<table width="100%" border="0">
				<tr>
				<td colspan="6">
				����:<input type="text" id="sosoname" value="{$sosoname}"/>
				<input type="button" value="����" onclick="soso()"/>
				
				<br />
				&nbsp;
	
				�ܸ�����{$ztiao} &nbsp;
				δ��������{$tongjizt0} &nbsp;
				����ɹ�����{$tongjizt1} &nbsp;
				����ʧ������{$tongjizt2} &nbsp;
				����������{$tongjizt3}
				<br /><br />
				
				<form action="{XZKJURL}/kmation.php?action=plsetkabeizhu" method="post" target="hiddeniframe">
				������ӱ�ע���������п��ţ�<input type="text" name="startid" id="startid" value="" size="12"/> �� 
				<input type="text" name="endid" id="endid" value="" size="12"/><br />
				�ı�ע�޸�Ϊ��<input type="text" name="beizhu" id="beizhu" value="" size="20"/>
				<input type="hidden" name="pid" id="pid" value="{$pid}"/>
				<input type="submit" value="�޸�"/>
				
				</form>
				
				</td>
				</tr>
				
				<tr>
				<td width="15%">����</td>
				<td width="10%">����</td>
				<td width="10%">�ײ�</td>
				<td width="12%">�����ֻ���</td>
				<td width="15%">����ʱ��</td>
				<td width="15%">����״̬</td>
				<td>��ע</td>
				</tr>
				
				<!--{loop $piarr $value}-->
				<tr>
				<td>{$value[id]}</td>
				<td>{$value[pwd]}</td>
				<td>{$value[tcname]}</td>
				<td>{$value[sjh]}</td>
				<td>{$value[jihuotime]}</td>
				<td>
				<!--{if empty($value['zt'])}-->
					<font color="#999999">δ����</font>
				<!--{elseif $value['zt']==3}-->
					<font color="#00FF00">������</font>
				<!--{elseif $value['zt']==1}-->
					<font color="#00FF00">����ɹ�</font>
				<!--{elseif $value['zt']==2}-->
					<font color="#FF0000">����ʧ��</font>
				<!--{/if}-->
				</td>
				<td>{$value[beizhu]}</td>
				</tr>
				<!--{/loop}-->
				
				<tr><td colspan="6" align="center">
						
							 {$fenarr[sy]} {$fenarr[shangy]}  {$fenarr[xiay]} {$fenarr[weiy]} {$page}/{$zpage}ҳ
							</td></tr>
				
				</table>
                    
                    
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
	$("#kmglkm").css("background-color","#FFF");
	$("#kmglkm").css("color","#299be4");
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