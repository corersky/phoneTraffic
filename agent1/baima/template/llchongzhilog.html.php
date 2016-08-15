<!--{template header}-->
<script src="{XZKJURL}/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  sosozt=document.getElementById("sosozt").value;
	var  sososjh=document.getElementById("sososjh").value;
	
	var  starttime=document.getElementById("starttime").value;
	var  endtime=document.getElementById("endtime").value;
	
	var  yystype=document.getElementById("yystype").value;
	var  tkzt=document.getElementById("tkzt").value;
	var  fkzt=document.getElementById("fkzt").value;
	
	   
	 
	var url="{XZKJURL}"+"/index.php?action=llchongzhilog&sjh="+sososjh+"&zt="+sosozt+"&starttime="+starttime+"&endtime="+endtime+"&yystype="+yystype+"&tkzt="+tkzt+"&fkzt="+fkzt;
	window.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="csjllczlljl">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：充手机流量-充值流量记录</div>
        </div>
        
        <div class="v1" style="height:20px;">
        	<div class="v2">
            	<div class="fl v3">充值状态：&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="sosozt" onchange="soso()">
						<option value="0">全部</option>
                        <option value="1" <!--{if $zt==1}-->selected="selected"<!--{/if}-->>充值中</option>
                        <option value="2" <!--{if $zt==2}-->selected="selected"<!--{/if}-->>充值成功</option>
                        <option value="3" <!--{if $zt==3}-->selected="selected"<!--{/if}-->>充值失败</option>
						<option value="4" <!--{if $zt==4}-->selected="selected"<!--{/if}-->>等待充值</option>
                    </select>
                </div>
            </div>
            <div class="v2">
            	<div class="fl v3">&nbsp;时间：&nbsp;</div>
                <div class="fl">
                	<input class="v10" style="width:90px;font-family:'微软雅黑'; font-size:15px;" type="text" id="starttime" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" value="{$starttime}">
                </div>
                <div class="fl"> 
                	&nbsp;-&nbsp;
                </div>
                <div class="fl">
                	<input class="v10" style="width:90px;font-family:'微软雅黑'; font-size:15px;" type="text" id="endtime" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" value="{$endtime}">
                </div>
            </div>
            <div class="v8">
                <div class="fl v9">搜索：</div>
                <div class="fl"><input id="sososjh" class="v10" type="text" name="date" placeholder="在此输入手机号码" value="{$sjh}"></div>
                <div class="fl v12"><input id="thesearch" class="v11" type="text" name="" style="background:url(baima/template/images/search2.png) no-repeat;" onclick="soso()"></div>
            </div>
            <div class="v8">
                <div class="fl v12"><a id="myatip" href="" onClick="daochu()"><img src="baima/template/images/czjldc.png"></a></div>
            </div>
        </div>
        <div class="v1" style="height:20px;">
        	<div class="v2">
            	<div class="fl v3">扣款状态：&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="fkzt" onchange="soso()">
						<option value="0">全部</option>
                        <option value="1" <!--{if $fkzt==1}-->selected="selected"<!--{/if}-->>充值失败返款</option>
                        <option value="2" <!--{if $fkzt==2}-->selected="selected"<!--{/if}-->>充值失败待返款</option>
                    </select>
                </div>
            </div>
            <div class="v2">
            	<div class="fl v3">&nbsp;&nbsp;售后状态：&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="tkzt" onchange="soso()">
						<option value="0">全部</option>
                        <option value="2" <!--{if $tkzt==2}-->selected="selected"<!--{/if}-->>充值成功未到账返款</option>
                        <option value="1" <!--{if $tkzt==1}-->selected="selected"<!--{/if}-->>超时订单返款</option>
                    </select>
                </div>
            </div>
            <div class="v2">
            	<div class="fl v3">&nbsp;&nbsp;运营商：&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="yystype" onchange="soso()">
						<option value="0">全部</option>
                        <option value="3" <!--{if $yystype==3}-->selected="selected"<!--{/if}-->>移动</option>
                        <option value="1" <!--{if $yystype==1}-->selected="selected"<!--{/if}-->>联通</option>
                        <option value="2" <!--{if $yystype==2}-->selected="selected"<!--{/if}-->>电信</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值号码</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>归属地</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>套餐</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值时间</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>状态返回时间</div></span>
                            <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值状态</div></span>
                            <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>消耗金额</div></span>
                            <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>扣款状态</div></span>
                            <span class="list9" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>备注</div></span>
                        </li>

                        
                        <div id="msgyes">
                            
							  <!--{loop $czlogarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[sjh]}</span>
                                <span class="list2 mt">{$value[province]}</span>
                                <span class="list3 mt">{$value[liuliang]}M</span>
                                <span class="list4 mt3">{$value[createtime]}</span>
                                <span class="list5 mt3">{$value[upzttime]}&nbsp;</span>
                                <span class="list6 mt"><span id="myczzt{$key}">{$llczztarr[$value[zt]]}</span>
								<!--{if $value['zt']==3}-->
                                	<span class="cp"><a href="llaction.php?action=ordercx&id={$value['id']}" target="hiddeniframe">撤销</a></span>
                                 <!--{elseif $value['zt']==0 && $value['istk']==0}-->
                                	<span class="cp"><a href="llaction.php?action=ordertk&id={$value['id']}" target="hiddeniframe">退款</a></span>
                                 <!--{/if}-->
								 
								 
								</span>
                                <span class="list7 mt">{$value[shje]}元</span>
                                <span id="zt{$key}" class="list8 mt" onMouseMove="showmovekkzt(this)" onMouseOut="showoutkkzt(this)">
                                    <!--{if $value['istk']==1}-->
                                        已返款
                                    <!--{else}-->
									<!--{if $value['zt']==2}-->
										等待返款<span class="cp"><img src="baima/template/images/showquestiontips.png"></span>
									<!--{else}-->
										已扣款
									<!--{/if}-->
								<!--{/if}-->
									
								</span>
                                <span class="list9 mt">{$value[beizhu2]}</span>
                                
                                
                                <div id="showkkzttips{$key}" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:130px; margin-left:590px; line-height:20px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; display:none;">
                                    <div style="margin:8px; text-align:left;word-break:break-all;word-warp:break-word;">
                                        72小时后自动返款
                                    </div>
                                </div>
                                
                                
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
                                        共<span class="pagetheallfont">{$page}/{$zpage}</span>页
                                    </div>
                                    
                                    <div class="pagego">
                                        <div class="fl">
                                        第<span class="pagenum">
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>页
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
                                    亲，该时间未查询到搜索记录...
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
<script src="baima/template/js/csjllczlljl.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	for(var i=0; i<10;i++)
	{
		if($.trim($("#myczzt"+i).html())=="充值中")
		{
			$("#myczzt"+i).addClass("czz");
		}
		else if($.trim($("#myczzt"+i).html())=="充值失败")
		{
			$("#myczzt"+i).addClass("czsb");
		}
		else if($.trim($("#myczzt"+i).html())=="等待充值")
		{
			$("#myczzt"+i).addClass("ddcl");
		}
		else
		{
			
		}
	}
});
function daochu()
{
	var sjh=encodeURIComponent($("#sososjh").val());
	var zt=encodeURIComponent($("#sosozt").val());
	var starttime=encodeURIComponent($("#starttime").val());
	var endtime=encodeURIComponent($("#endtime").val());
	document.getElementById("myatip").href="liuliangtocsv.php?sjh="+sjh+"&zt="+zt+"&starttime="+starttime+"&endtime="+endtime;
}
function showmovekkzt(obj)
{
	if($("#zt"+obj.id.substring(2,4)).text().trim()=="等待返款")
	{
		$("#showkkzttips"+obj.id.substring(2,4)).fadeIn();
	}
	else
	{
		$("#showkkzttips"+obj.id.substring(2,4)).fadeOut();
	}
}
function showoutkkzt(obj)
{
	$("#showkkzttips"+obj.id.substring(2,4)).fadeOut();
}

String.prototype.trim=function()
{
	return this.replace(/(^\s*)|(\s*$)/g, "");  
} 
</script>

<!--{template footer}-->