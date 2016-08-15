<!--{template header}-->
<script>
function jujuetemp(tempid,beizhumsg){
	document.getElementById("tempid").value=tempid;
	document.getElementById("beizhumsg").value=beizhumsg;
}

function showtempnei(nei){
	document.getElementById("tempneirong").value=nei;
}

function soso(){
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=tempweishen&nick="+sosonick;
	window.location.href=url;
}

function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}

function showqitakefu(){
	var  qitakefuid=document.getElementById("qitakefuid").value;
	var url="{XZKJURL}"+"/index.php?action=tempweishen&kefuid="+qitakefuid;
	window.location.href=url;
}

function shenhetemp(id){
	var type=document.getElementById("select_temptype_"+id).value;
	var url="useration.php?action=tempshenheok&id="+id+"&temptype="+type;
	hiddeniframe.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="mbglwshmb" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">模板管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">未审核模板</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">搜索：</div>
                                    <div class="fl"><input class="inputtext" id="sosonick" type="text" name="" placeholder="在此输入用户名查询..."></div>
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:330px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">查看其他客服模板：</div>
                                    <div class="fl">
                                    	<select id="qitakefuid" name="" style="width:120px;height:27px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;" onchange="showqitakefu()" onblur="showqitakefu()">
                                           <!--{loop $fuwuzyarr $id=>$name}-->
                                            <option value="{$id}">{$name}</option>
											<!--{/loop}-->
                                        </select>
                                    </div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交用户名</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交时间</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>模板内容</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>模板类型</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>审核操作</div></span>
                            </li>
                            
                            <!--{loop $userarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[nick]}</span>
                                <span class="list2 mt">{$value[createtime]}</span>
                                <span class="list3 mt" onClick="showtempnei('{$value[temp]}');document.getElementById('showmbnr').style.display='';">{$value[temp]}</span>
				<span class="list4 mt">
                                	<!--带标识-->
                                    <span id="yxa{$key}" style="cursor:pointer;" onClick="yxtext(this)">接囗通知</span>
                                    <!--带标识-->
                                    <span id="yxb{$key}" style="cursor:pointer;display:none;" onClick="yxtext(this)"><img src="baima/template/images/bj.png" width="16" height="16"></span>
                                    <!--带标识-->
                                    <span id="yxc{$key}" style="display:none;">
                                        <select name="" id="select_temptype_{$value[id]}" style="width:90px;height:20px; border:#add1fe 1px solid; font-size:11px; color:#666; font-family:'微软雅黑'; font-weight:bold; cursor:pointer;">
                                             <option value="0">接囗通知</option>
											<option value="1">接囗验证码</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="list5 mt2" style="color:#006dcb;">
                                	<div><a href="#" target="hiddeniframe" style="color:#006dcb;" onclick="shenhetemp('{$value[id]}');return false;">通过</a></div>
                                    <div class="cp" style="margin-top:5px;" onClick="jujuetemp('{$value[id]}','{$value[msg]}');document.getElementById('showtxbtgyy').style.display='';">不通过</div>
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
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="msgno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:300px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            暂无未审核模板
                        </div>
                    </div>
                    
                </li>
            </div>
            
            <div id="msgsearchno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:240px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            您搜索的用户名<span class="colorred">不存在</span>，请核对后重新搜索
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showmbnr" class="showmbnr" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-170px 0 0 -275px;width:550px;height:340px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">模板内容</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showmbnr').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:530px; height:300px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:20px; margin-top:40px;">
                	<span style="vertical-align:top;">短信内容：</span>
                    <span><textarea id="tempneirong" name="" style="color:#666;width:350px;height:170px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:20px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" onKeyPress="this.style.color='black';" readonly></textarea></span>
                </div>
            </div>
        </div>
	</div>
</span>

<span id="showtxbtgyy" class="showtxbtgyy" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-170px 0 0 -275px;width:550px;height:340px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">填写不通过原因</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showtxbtgyy').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
			
			<form action="{XZKJURL}/useration.php?action=tempshenheerr" method="post" target="hiddeniframe">
            <div style="width:530px; height:300px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:20px; margin-top:20px;">
                	<span style="vertical-align:top;">填写原因：</span>
                    <span><textarea name="beizhumsg" id="beizhumsg" style="color:#666;width:350px;height:150px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:20px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" maxlength="100000" placeholder="在此填写不通过原因..." onpropertychange="if(value.length>100000) value=value.substr(0,100000)" onKeyPress="this.style.color='black';"></textarea></span>
                </div>
                <div style="margin-left:230px; margin-top:20px;">
				<input type="hidden" name="tempid" id="tempid" value=""/>
                	<input type="submit" value="" style="width:87px; height:30px;background-image:url(baima/template/images/wshmbtjyy.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
			</form>
			
			
        </div>
	</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/mbglwshmb.js" type="text/javascript"></script>
<script type="text/javascript">
function yxtext(obj)
{
	document.getElementById("yxa"+obj.id.substring(3,obj.id.length)).style.display="none";
	document.getElementById("yxb"+obj.id.substring(3,obj.id.length)).style.display="none";
	document.getElementById("yxc"+obj.id.substring(3,obj.id.length)).style.display="";
}
</script>

<!--{template footer}-->