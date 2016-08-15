<!--{template header}-->
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  sosoy=document.getElementById("sosoy").value;
	var  sosom=document.getElementById("sosom").value;
	var url="{XZKJURL}"+"/index.php?action=caiwulog&sosoy="+sosoy+"&sosom="+sosom;
	window.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>



<div id="mains">
	<div id="cwglcwjl" style="margin-bottom:30px;">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：财务管理-财务记录</div>
        </div>
        <div class="v1">
        	<div class="v2">
            	<div class="fl v3">时间查询：&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="sosoy" onchange="soso()">
                        <option value="2015" <!--{if $sosoy==2015}-->selected="selected"<!--{/if}-->>2015</option>
                        <option value="2016" <!--{if $sosoy==2016}-->selected="selected"<!--{/if}-->>2016</option>
						<option value="2017" <!--{if $sosoy==2017}-->selected="selected"<!--{/if}-->>2017</option>
						<option value="2018" <!--{if $sosoy==2018}-->selected="selected"<!--{/if}-->>2018</option>
						<option value="2019" <!--{if $sosoy==2019}-->selected="selected"<!--{/if}-->>2019</option>
						<option value="2020" <!--{if $sosoy==2020}-->selected="selected"<!--{/if}-->>2020</option>
                    </select>
                </div>
                <div class="fl v3">&nbsp;年&nbsp;</div>
                <div class="fl">
                	<select class="v4" name=""  id="sosom" onchange="soso()">
                        <option value="1" <!--{if $sosom==1}-->selected="selected"<!--{/if}-->>1</option>
                        <option value="2" <!--{if $sosom==2}-->selected="selected"<!--{/if}-->>2</option>
                        <option value="3" <!--{if $sosom==3}-->selected="selected"<!--{/if}-->>3</option>
                        <option value="4" <!--{if $sosom==4}-->selected="selected"<!--{/if}-->>4</option>
                        <option value="5" <!--{if $sosom==5}-->selected="selected"<!--{/if}-->>5</option>
                        <option value="6" <!--{if $sosom==6}-->selected="selected"<!--{/if}-->>6</option>
                        <option value="7" <!--{if $sosom==7}-->selected="selected"<!--{/if}-->>7</option>
                        <option value="8" <!--{if $sosom==8}-->selected="selected"<!--{/if}-->>8</option>
                        <option value="9" <!--{if $sosom==9}-->selected="selected"<!--{/if}-->>9</option>
                        <option value="10" <!--{if $sosom==10}-->selected="selected"<!--{/if}-->>10</option>
                        <option value="11" <!--{if $sosom==11}-->selected="selected"<!--{/if}-->>11</option>
                        <option value="12" <!--{if $sosom==12}-->selected="selected"<!--{/if}-->>12</option>
                    </select>
                </div>
                <div class="fl v3">&nbsp;月</div>
            </div>
        </div>
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作时间</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值金额</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>充值方式</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作备注</div></span>
                        </li>

                        
                        <div id="msgyes">
                            <!--{loop $czlogarr $value}-->
                            <li>
                                <span class="list1 mt">{$_SESSION["dl_username"]}</span>
                                <span class="list2 mt">{$value[createtime]}</span>
                                <span class="list3 mt" >{$value[jine]}元</span>
                                <span class="list4 mt" >
									<!--{if empty($value['cztype'])}-->
								手动充值
								<!--{elseif $value['cztype']==1}-->
								手动扣费
								<!--{elseif $value['cztype']==2}-->
								在线充值
								<!--{/if}-->
								</span>
                                <span class="list5 mt">
								<!--{if empty($value['zt'])}-->
								充值失败
								<!--{/if}-->
								{$value[beizhu]}
								</span>
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
                                    亲，未查询到搜索记录...
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
<script src="baima/template/js/cwglcwjl.js" type="text/javascript"></script>

<!--{template footer}-->