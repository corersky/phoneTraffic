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
            <div class="fl kfsitetipstext">当前位置：制卡管理-管理卡密</div>
        </div>
        <div class="v1">
            <div id="mythetable">
                <div id="table">
				<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
				
				<table width="100%" border="0">
				<tr>
				<td colspan="6">
				卡号:<input type="text" id="sosoname" value="{$sosoname}"/>
				<input type="button" value="搜索" onclick="soso()"/>
				
				<br />
				&nbsp;
	
				总个数：{$ztiao} &nbsp;
				未激活数：{$tongjizt0} &nbsp;
				激活成功数：{$tongjizt1} &nbsp;
				激活失败数：{$tongjizt2} &nbsp;
				激活中数：{$tongjizt3}
				<br /><br />
				
				<form action="{XZKJURL}/kmation.php?action=plsetkabeizhu" method="post" target="hiddeniframe">
				批量添加备注：本批次中卡号：<input type="text" name="startid" id="startid" value="" size="12"/> 至 
				<input type="text" name="endid" id="endid" value="" size="12"/><br />
				的备注修改为：<input type="text" name="beizhu" id="beizhu" value="" size="20"/>
				<input type="hidden" name="pid" id="pid" value="{$pid}"/>
				<input type="submit" value="修改"/>
				
				</form>
				
				</td>
				</tr>
				
				<tr>
				<td width="15%">卡号</td>
				<td width="10%">密码</td>
				<td width="10%">套餐</td>
				<td width="12%">激活手机号</td>
				<td width="15%">激活时间</td>
				<td width="15%">激活状态</td>
				<td>备注</td>
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
					<font color="#999999">未激活</font>
				<!--{elseif $value['zt']==3}-->
					<font color="#00FF00">激活中</font>
				<!--{elseif $value['zt']==1}-->
					<font color="#00FF00">激活成功</font>
				<!--{elseif $value['zt']==2}-->
					<font color="#FF0000">激活失败</font>
				<!--{/if}-->
				</td>
				<td>{$value[beizhu]}</td>
				</tr>
				<!--{/loop}-->
				
				<tr><td colspan="6" align="center">
						
							 {$fenarr[sy]} {$fenarr[shangy]}  {$fenarr[xiay]} {$fenarr[weiy]} {$page}/{$zpage}页
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


//根据手机号归属显示套餐
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