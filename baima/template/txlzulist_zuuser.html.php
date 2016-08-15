<!doctype html>
<html>
<head>
<title>短信服务平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="短信服务平台">
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="Bookmark" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="baima/template/css/style.css" />
</head>
<body>
<script>
function soso(){
	var  sosozsjh=document.getElementById("sosozsjh").value;
	var url="{XZKJURL}"+"/user.php?action=txlzulist_zuuser&sosozuid={$sosozuid}&sosozsjh="+sosozsjh;
	window.location.href=url;
}

function moveusertozu(e,userids){
	var  moveusertozuid=document.getElementById("moveusertozuid").value;

	var url="{XZKJURL}/txlation.php?action=moveusertozu&moveusertozuid="+e.value+"&userids="+userids;
	hiddeniframe_1.location.href=url;
}
</script>

<iframe id='hiddeniframe_1' name='hiddeniframe_1' width='0' height='0' style='display:none'></iframe>
<div id="txlfzglglzy" style="float:left;width:550px; height:230px;">
    <div style="margin-top:20px; margin-left:20px;">
        <div style="font-size:13px; font-family:'微软雅黑'; font-weight:bold;">
            <div class="fl" style="margin-top:2px;">&nbsp;&nbsp;搜索：</div>
            <div class="fl"><input id="sosozsjh" value="{$sosozsjh}" type="text" name="date" placeholder="在此输入手机号码查询" style="font-size:11px; color:#666;width:150px;height:22px;cursor:pointer; border:#add1fe 1px solid;"></div>
            <div class="fl" style="margin-left:10px;"><input id="thesearch" type="text" name="date" style="font-size:13px; color:#666;width:41px;height:22px;cursor:pointer; background:url(baima/template/images/search.png) no-repeat; border:#add1fe 1px solid;" onclick="soso()"></div>
        </div>
    </div>
    <div style="margin-top:60px;">
        <div id="mythetable">
            <div id="table">
                <ul>
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>手机号</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>姓名</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                    </li>
					
					
					
					
					
					<!--{if !empty($zuuserarr) || empty($sosozsjh)}-->

                    <div>
                        <div>
                            
							<!--{loop $zuuserarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[sjh]}</span>
                                <span class="list2 mt">{$value[xm]}</span>
								
                                <span class="list3 mt" style="color:#017bb4;" onClick="document.getElementById('showtmovetips{$key}').style.display='';">移至其他组</span>
								
                                <div id="showtmovetips{$key}" style="position:absolute; font-size:13px; margin-top:-30px; margin-left:330px; width:180px; height:37px; border:#ff8400 1px solid; background-color:#ffface; display:none;">
                                    <div class="fl" style="margin-top:12px; margin-left:8px; margin-right:5px;">移动至</div>
                                    <div class="fl" style="margin-top:5px;">
                                        <select name="moveusertozuid" id="moveusertozuid" onchange="moveusertozu(this,'{$value[id]}')">
											<option value="0">请选择组</option>
											<!--{loop $zuarr $key=>$value}-->
											<option value="{$key}">{$value}</option>
											<!--{/loop}-->
										</select>
                                    </div>
                                </div>
                            </li>
							<!--{/loop}-->
							
                            
                        </div>
                        
                        <li style="height:58px;">
                        
                            <div class="thepage">
                                <span class="pagechoose">{$fenarr[sy]}</span>&nbsp;
                                <span class="pagechoose">{$fenarr[shangy]} </span>&nbsp;
                                <span class="pagechoose">{$fenarr[xiay]} </span>&nbsp;
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
                    
                    
					
					<!--{else}-->
                    <div>
                    	<li style="height:120px;">
                        
                            <div style="margin-top:50px; font-size:14px; font-weight:bold;">
                            	您搜索的号码<span style="color:#F00;">不存在</span>，请核对后重新搜索！
                            </div>
                            
                        </li>
                    </div>
					<!--{/if}-->
					
					
					
					
                    
                </ul>
            </div>
        </div>
    </div>
</div>


<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
</script>

</body>
</html>