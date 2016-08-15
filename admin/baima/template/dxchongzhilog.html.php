<!--{template header}-->
<script src="{XZKJURL}/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	
	var  stime=document.getElementById("thedatestart").value;
	var  etime=document.getElementById("thedateend").value;
	 
	var  czuid=document.getElementById("sosoczuid").value;
	var  cztype=document.getElementById("sosocztype").value;
	 
	   
	var url="{XZKJURL}"+"/index.php?action=dxchongzhilog&nick="+sosonick+"&stime="+stime+"&etime="+etime+"&czuid="+czuid+"&cztype="+cztype;
	window.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="zwglczjl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">账务管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">充值记录</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:130px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索用户名：</div>
                                    <div class="fl" style="margin-left:20px;"><input class="inputtext" type="text" id="sosonick"  value="{$nick}" placeholder="在此输入用户名查询..."></div>
                                </div>

                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-top:30px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索时间段：</div>
                                    <div class="fl" style="margin-left:20px;"><input id="thedatestart" type="text" name="date" style="font-size:13px; color:#666;width:190px;height:27px;cursor:pointer; border:#bbb 1px solid;background:url(baima/template/images/datetextboxinput.png) no-repeat;" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="{$stime}"></div>
                                    <div class="fl" style="margin-top:5px;">&nbsp;&nbsp;至&nbsp;&nbsp;</div>
                                    <div class="fl"><input id="thedateend" type="text" name="date" style="font-size:13px; color:#666;width:190px;height:27px;cursor:pointer; border:#bbb 1px solid; background:url(baima/template/images/datetextboxinput.png) no-repeat; " onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="{$etime}"></div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-top:30px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索充值人：</div>
                                    <div class="fl" style="margin-left:20px;">
                                    	<select name="" id="sosoczuid" class="inputtext2">
											<option value="0">全部</option>
											<option value="-1" <!--{if $czuid==-1}-->selected="selected"<!--{/if}-->>总后台</option>
											<option value="-2" <!--{if $czuid==-2}-->selected="selected"<!--{/if}-->>系统自动充值</option>

											<!--{loop $fuwuzyarr $k=>$v}-->
                                            <option value="{$k}" <!--{if $czuid==$k}-->selected="selected"<!--{/if}-->>{$v}</option>
                                            <!--{/loop}-->
                                        </select>
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; padding-top:30px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索充值类型：</div>
                                    <div class="fl" style="margin-left:5px;">
                                    	<select name="" id="sosocztype" class="inputtext2">
                                            <option value="0">全部</option>
                                            <option value="-1" <!--{if $cztype==-1}-->selected="selected"<!--{/if}-->>在线充值</option>
											<option value="1" <!--{if $cztype==1}-->selected="selected"<!--{/if}-->>手动充值</option>
											<option value="2" <!--{if $cztype==2}-->selected="selected"<!--{/if}-->>套餐按月返还</option>
											<option value="3" <!--{if $cztype==3}-->selected="selected"<!--{/if}-->>套餐最低消费达不到扣费</option>
											<option value="4" <!--{if $cztype==4}-->selected="selected"<!--{/if}-->>提交失败返还</option>
											<option value="5" <!--{if $cztype==5}-->selected="selected"<!--{/if}-->>手动扣费</option>
											<option value="7" <!--{if $cztype==7}-->selected="selected"<!--{/if}-->>发送失败退款</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="position:absolute; margin-left:400px;margin-top:-20px;"><input id="thesearch" type="button" style="width:100px;height:40px; background:url(baima/template/images/search3.png) no-repeat; font-size:13px; color:#666; border:none;cursor:pointer;" name="" onclick="soso()"></div>

                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值时间</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值条数</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>实收金额</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值类型</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值人</div></span>
                            </li>
                            
                            <!--{loop $czlogarr $value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[nick]}</span>
                                <span class="list2 mt">{$value[createtime]}</span>
                                <span class="list3 mt">{$value[jine]}条</span>
<span class="list4 mt">{$value[shje]}元</span>
                                <span class="list5 mt2">
								<!--{if $value['iszs']==1}-->
								手动赠送
								<!--{elseif $value['cztype']==2}-->
								分摊返还赠送
								<!--{else}-->
								{$cztypearr[$value[cztype]]}
									<!--{if !empty($value['beizhu'])}-->
									<img class="cp" src="baima/template/images/tjsbtips.png" width="16" height="16" title="{$value['beizhu']}">
									<!--{/if}-->
								<!--{/if}-->
								</span>
                                <span class="list6 mt">{$value[czynick]}</span>
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
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="msgno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:300px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            暂无充值记录
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zwglczjl.js" type="text/javascript"></script>
		  
<!--{template footer}-->