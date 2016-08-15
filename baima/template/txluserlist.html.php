<!--{template header}-->
<script src="{XZKJURL}/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function soso(){
	var  sosozuid=document.getElementById("sosozuid").value;
	var  sosozsjh=document.getElementById("sosozsjh").value;
	var url="{XZKJURL}"+"/user.php?action=txluserlist&sosozuid="+sosozuid+"&sosozsjh="+sosozsjh;
	window.location.href=url;
}



function deltxlzuuser(id){
	var url="{XZKJURL}/txlation.php?action=delzuuser&userid="+id;
	hiddeniframe.location.href=url;
}

function moveusertozu(){
	var  moveusertozuid=document.getElementById("moveusertozuid").value;

	var items = document.getElementsByName("userid[]");
	var userids="";
	for (var i=0; i<items.length; i++){
		if(items[i].checked){
			userids+=items[i].value+",";
		}
	}

	var url="{XZKJURL}/txlation.php?action=moveusertozu&moveusertozuid="+moveusertozuid+"&userids="+userids;
	hiddeniframe.location.href=url;

}

function checkAll(e, itemName) {
	var items = document.getElementsByName(itemName);
	for (var i=0; i<items.length; i++)
	items[i].checked = e.checked;
}

function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}

<!--{$zujsonstr}-->
</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="txlglcy">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：{$yingxiaoinfo[username]}，联系电话：{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：通讯录-分组管理</div>
        </div>
        

        <div class="colorred v7">
        	<div class="fl">
            	<div class="colorred v8">
                	支持excel文档导入成员至通讯录 
                </div>
                <div class="v9">
                	<a href="http://duanxin.xzkj168.cn/%E9%80%9A%E8%AE%AF%E5%BD%95%E7%A4%BA%E4%BE%8B.rar" target="_blank" style="color:#0783bd;">（下载标准格式excel）</a>
                </div>
            </div>
            <div class="fl cp v10" onClick="document.getElementById('boxshowpldr').style.display=''";>
            	<img src="baima/template/images/pldr.png" width="92" height="32">
            </div>
            <div class="fl cp" style="margin-left:50px;" onClick="settxluserinfo(0,'','','','','','','','',zudata,'');showdouser()">
            	<img src="baima/template/images/tjdgcy.png" width="161" height="40">
            </div>
        </div>
        
        <div class="v1">
        	<div class="v2">
            	<div class="fl v3">分组查询：</div>
                <div class="fl">
                	<select class="v4" name="sosozuid" id="sosozuid">
                        <option value="0">全部成员</option>
						<!--{loop $zuarr $key=>$value}-->
						<option value="{$key}">{$value}</option>
						<!--{/loop}-->
                    </select>
                </div>
                <div class="fl v6">&nbsp;&nbsp;搜索：</div>
                <div class="fl"><input class="v12" type="text"  id="sosozsjh" value="{$sosozsjh}" placeholder="在此输入手机号码/组名查询"></div>
                <div class="fl v11"><input id="thesearch" class="v13" type="button" name="" style="width:49px;height:24px; background:url(baima/template/images/search2.png) no-repeat; " onclick="soso()"></div>
            </div>
        </div>
        
        
        <div class="v14">
        	
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>全选</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>手机号码</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>姓名</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>备注</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>分组</div></span>
                            <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                        </li>

                        
                        <div id="msgyes">
                            
							<!--{loop $zuuserarr $key=>$value}-->
                            <li id="li{$key}" onMouseMove="showbj(this)" onMouseOut="closebj(this)">
                                
                                <span class="list1 mt"><input class="cp" type="checkbox" name="userid[]" id="userid[]" value="{$value[id]}"/></span>
                                <span class="list2 mt">{$value[sjh]}</span>
                                <span class="list3 mt">{$value[xm]}</span>
                                <span class="list4 mt">{$value[beizhumsg]}</span>
                                <span class="list5 mt">{$zuarr[$value['zuid']]}</span>
                                <span class="list6 mt" style="color:#017bb4;">
                                	<span><span style="cursor:pointer;" onClick="settxluserinfo('{$value[id]}','{$value[xm]}','{$value[xb]}','{$value[sjh]}','{$value[zuid]}','{$value[gongshi]}','{$value[dizhi]}','{$value[qq]}','{$value[email]}',zudata,'{$value[qita]}');showdouser()">修改</span></span>
                                    |
                                    <span style="cursor:pointer;" onClick="document.getElementById('showtdeltips{$key}').style.display='';">删除</span>
                                </span>
                                <div id="showtdeltips{$key}" class="v15" style=" display:none;">
                                	<div class="v16">是否删除该成员？</div>
                                    <div class="v17"><img src="baima/template/images/scfzyes.png" width="25" height="25" onclick="deltxlzuuser('{$value[id]}')"></div>
                                    <div class="v18" onClick="document.getElementById('showtdeltips{$key}').style.display='none';"><img src="baima/template/images/scfzno.png" width="25" height="25"></div>
                                </div>
                            </li>
							<!--{/loop}-->
							
                            
                            
                            
                            
                            
                            <li style="height:40px;">
                            	<div class="fl v19">
                            		<span onClick="qx()"><input id="qxcheck" class="cp" type="checkbox" onclick="checkAll(this,'userid[]')"></span><span>&nbsp;全选&nbsp;&nbsp;&nbsp;</span>
                                </div>
                                <div class="fl cp v20" onClick="document.getElementById('showtydtips').style.display='';">
                                	<img src="baima/template/images/plydfz.png" width="92" height="23">
                                </div>
                                <div id="showtydtips" class="v21" style=" display:none;">
                                	<div class="fl v22">移动至：</div>
                                    <div class="fl v23">
                                        <select class="v24" name="moveusertozuid" id="moveusertozuid">
											<!--{loop $zuarr $id=>$name}-->
                                            <option value="{$id}">{$name}</option>
											<!--{/loop}-->
                                        </select>
                                    </div>
                                    <div class="cp" style="margin-top:40px;">
                                    	<span>
                                        	<input id="thesearch"  onclick="moveusertozu();"class="v25" type="button" name="" style=" background:url(baima/template/images/glcyydqd.png) no-repeat; border:none;">
											
                                        </span>
                                        <span onClick="document.getElementById('showtydtips').style.display='none';">
                                        	<img src="baima/template/images/glcyydqx.png" width="37" height="20">
                                        </span>
                                    </div>
                                </div>
                            </li>
							
							
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
                                            <input class="nowpagetext" name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
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
                            
                                <div style="margin-top:140px; margin-left:240px; font-size:14px; font-weight:bold;">
                                    <div class="fl">
                                    	当前通讯录中没有成员，请先添加成员
                                    </div>
                                </div>
                                
                            </li>
                        </div>
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<span id="boxshowpldr" class="boxshowpldr" style="display:none;">
	<div id="dialogBgshowpldr" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div id="dialogshowpldr" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-105px 0 0 -275px;width:550px;height:210px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
		<div class="dialogTopshowpldr">
			<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">批量导入</div>
                </div>
                <div style="margin-top:6px;">
                	<iframe name="showpldr" src="user.php?action=txluserlist_daoru" width="550" height="170" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe> 
                </div>
            </div>
			<div id="showpldrclose" style="position:absolute;margin-top:-280px;padding-left:500px; cursor:pointer;" onClick="document.getElementById('boxshowpldr').style.display='none';">
				<img src="baima/template/images/openclose.png" style="margin-top:67px">
			</div>
		</div>
	</div>
</span>
<span id="boxshowtjdgcy" class="boxshowtjdgcy" style="display:none;">
	<div id="dialogBgshowtjdgcy" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div id="dialogshowtjdgcy" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-275px 0 0 -275px;width:550px;height:550px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
		<div class="dialogTopshowtjdgcy">
			<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div class="v1">
                	<div class="v2">创建新组</div>
                </div>
                <div class="v3">
                	<form action="{XZKJURL}/txlation.php?action=settxlzuuserinfo" method="post" target="hiddeniframe">
                        <div class="v4">
                            <div class="v5">
                                基本信息
                            </div>
                            <div class="v6">
                                <div class="fl">
                                    <span>姓氏/名称：</span><span><input id="xm" name="xm" class="inputtext" type="text" maxlength="20" onKeyPress="this.style.color='black';"/></span>
                                </div>
                                <div class="v7">
                                    <span>性别：</span>
                                    <span>
                                    <select id="xb" name="xb" class="vselect">
                                        <option value="1">男</option>
                                        <option value="0">女</option>
                                    </select>
                                    </span>
                                </div>
                            </div>
                            <div class="v8">
                                <div class="fl">
                                    <span>移动电话：</span><span><input id="sjh" name="sjh" class="inputtext" type="text" maxlength="11" onKeyPress="this.style.color='black';"/></span>
                                </div>
                                <div class="v9">
                                    <span>分组：</span>
                                    <span>
                                    <select id="zuid" name="zuid" class="vselect">
                                        <option>未分组</option>
                                    </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="addnewlist" class="v10" style="height:160px;">
                            <div class="v11">
                                信息备注
                            </div>
                            <div class="v12">
                                <div class="fl">
                                    <span>公司名称：</span><span><input id="gongshi" name="gongshi" class="inputtext" type="text" maxlength="100" onKeyPress="this.style.color='black';"/></span>
                                </div>
                                <div class="v13">
                                    <span>公司地址：</span><span><input id="dizhi" name="dizhi" class="inputtext" type="text" maxlength="500" onKeyPress="this.style.color='black';"/></span>
                                </div>
                            </div>
                            <div class="v14">
                                <div class="fl">
                                    <span>联系QQ：</span><span><input id="qq" name="qq" class="inputtext" type="text" maxlength="11" onKeyPress="this.style.color='black';"/></span>
                                </div>
                                <div class="v15">
                                    <span>电子邮箱：</span><span><input id="email" name="email" class="inputtext" type="text" maxlength="100" onKeyPress="this.style.color='black';"/></span>
                                </div>
                            </div>
                            <div id="zdybz">
                            	
                            </div>
                            <div id="addmsgarea" class="v16">
                                <div class="v17" onClick="showaddnewmsg()">
                                    + 新建备注
                                </div>
                                <div id="addnewmsg" style="display:none;">
                                    <div class="fl"><input id="thekey" class="inputtext" name="" type="text" maxlength="10" onKeyPress="this.style.color='black';" style="color:#666;width:130px;height:22px; font-size:14px;" placeholder="例：家庭电话"/></div>
                                    <div class="fl">：</div>
                                    <div class="fl"><input id="thevalue" class="inputtext" name="" type="text" maxlength="500" onKeyPress="this.style.color='black';" style="color:#666;width:130px;height:22px; font-size:14px;" placeholder="例：0371-0645891"/></div>
                                    <div class="fl v18" onClick="addmsg()"><img src="baima/template/images/txlglcyxgdgcyqd.png" width="37" height="20"></div>
                                </div>
                            </div>
                        </div>
                        <div class="v20">
                            <input id="userid" name="userid" type="text" style="display:none;">
                            <input type="submit" class="v21" value="" style="width:117px; height:39px;background-image:url(baima/template/images/bcxg.png);">
                        </div>
                    </form>
                </div>
            </div>
			<div id="showtjdgcyclose" class="v22" onClick="document.getElementById('boxshowtjdgcy').style.display='none';">
				<img src="baima/template/images/openclose.png" style="margin-top:67px">
			</div>
		</div>
	</div>
</span>
<span id="boxshowopentips" class="boxshowopentips" style="display:none;">
	<a id="showopentips" href="javascript:;" class="bounceIn"></a>
	<div id="dialogBgshowopentips" style="position:fixed;top:0;left:0;z-index:99999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div id="dialogshowopentips" class="animated" style="position:fixed;top:50%;left:50%;z-index:100000;margin:0 auto;margin:-25px 0 0 -160px;width:320px;height:50px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
		<div class="dialogTopshowopentips">
			<div style="width:320px; text-align:center; font-family:'微软雅黑'; font-size:18px; font-weight:bold; color:#007ed0;">
            	<div id="theopentipstext" style="margin-top:12px;"></div>
			</div>
            <div id="showqrtjclose" style="position:absolute;">
				<a href="javascript:;" class="claseDialogBtnshowopentips"></a>
			</div>
		</div>
	</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/txlglcy.js" type="text/javascript"></script>

<!--{template footer}-->