<!--{template header}-->
<script>
function soso(){
	var  sosoname=document.getElementById("sosoname").value;
	var url="{XZKJURL}"+"/index.php?action=km_pilist&nick="+sosoname;
	window.location.href=url;
}

function setname(id){
	document.getElementById("a_setname_"+id).style.display="none";
	document.getElementById("span_setname_"+id).style.display="";
}
function endsetname(id){
	document.getElementById("a_setname_"+id).innerHTML=document.getElementById("setname_"+id).value;
	document.getElementById("a_setname_"+id).style.display="";
	document.getElementById("span_setname_"+id).style.display="none";
}

function setnameaction(id){
	endsetname(id);
	var newname=document.getElementById("setname_"+id).value;
	var url="{XZKJURL}/kmation.php?action=setpiname&id="+id+"&newname="+encodeURIComponent(newname);
	hiddeniframe.location.href=url;
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
				批次名称:<input type="text" id="sosoname" value="{$nick}"/>
				<input type="button" value="搜索" onclick="soso()"/>
				</td>
				</tr>
				
				<tr>
				<td width="15%">批名称</td>
				<td width="15%">卡号数</td>
				<td width="15%">套餐</td>
				<td width="15%">总面值</td>
				<td width="15%">实际金额</td>
				<td>创建时间</td>
				</tr>
				
				<!--{loop $piarr $value}-->
				<tr>
				<td>
				<a id="a_setname_{$value[id]}" onclick="setname('{$value[id]}')">{$value[piname]}</a>
				<span id="span_setname_{$value[id]}" style="display:none;">
				<input type="text" id="setname_{$value[id]}" value="{$value[piname]}" onblur="setnameaction('{$value[id]}')" size="7"/>
				</span>
				</td>
				<td><a href="index.php?action=km_kalist&pid={$value[id]}">{$value[kanum]}</a></td>
				<td>{$value[tcname]}</td>
				<td>{$value[zongmianzhi]}</td>
				<td>{$value[zongssje]}</td>
				<td>{$value[createtime]}</td>
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