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
	var  sosozt=document.getElementById("sosozt").value;
	var  sososjh=document.getElementById("sososjh").value;
	var url="{XZKJURL}"+"/user.php?action=sendlog_sjhlist&sosozt="+sosozt+"&sososjh="+sososjh+"&tid="+{$tid};
	window.location.href=url;
}

</script>
<div id="dxglfsjlck" style="float:left;width:550px; height:230px;">
    <div style="margin-top:20px; margin-left:20px;">
        <div style="font-size:13px; font-family:'微软雅黑'; font-weight:bold;">
            <div class="fl" style="margin-top:2px;">发送状态：</div>
            <div class="fl">
                <select style="font-size:11px; width:100px;height:22px; border:#add1fe 1px solid; cursor:pointer;" id="sosozt">
                    <option value="0"  <!--{if $sosozt==1}-->selected="selected"<!--{/if}-->>全部</option>
                    <option value="4"  <!--{if $sosozt==4}-->selected="selected"<!--{/if}-->>未知</option>
                    <option value="1"  <!--{if $sosozt==1}-->selected="selected"<!--{/if}-->>发送成功</option>
                    <option value="2"  <!--{if $sosozt==2}-->selected="selected"<!--{/if}-->>发送失败</option>
                </select>
            </div>
            <div class="fl" style="margin-top:2px;">&nbsp;&nbsp;搜索：</div>
            <div class="fl"><input id="sososjh" type="text" name="date" placeholder="在此输入手机号" style="font-size:11px; color:#666;width:100px;height:22px;cursor:pointer; border:#add1fe 1px solid;" value="{$sososjh}"></div>
            <div class="fl" style="margin-left:10px;"><input id="thesearch" type="text" name="" style="font-size:13px; color:#666;width:41px;height:22px;cursor:pointer; background:url(baima/template/images/search.png) no-repeat; border:#add1fe 1px solid;" onClick="soso();"></div>
        </div>
    </div>
    <div style="margin-top:60px;">
        <div id="mythetable">
            <div id="table">
			
			
			
			<!--{if !empty($logarr) ||  empty($sososjh)}-->
                <ul>
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信号码</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>姓名</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送时间</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送状态</div></span>
                    </li>

                    
                    <div id="nowpage1" class="nowpage">
                        
						<!--{loop $logarr $value}-->
                        <li>
                            
                            <span class="list1 mt">{$value[sjh]}</span>
                            <span class="list2 mt">{$value[nick]}</span>
                            <span class="list3 mt">{$value[createtime]}</span>
                            <span class="list4 mt">
							<!--{if $value['zt']==0}-->
							<span style="color:#ff8a00;">未知</span>
							<!--{elseif $value['zt']==1}-->
							<span style="color:#03b520;">发送成功</span>
							<!--{elseif $value['zt']==2}-->
							<span style="color:#ec0000;">发送失败</span>
							<!--{/if}-->
							</span>
                            
                        </li>
						<!--{/loop}-->
						
                        
                    </div>
                    
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
                                    <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
                                </span>页
                                </div>
                                <div class="pagegoto">
                                    <input type="button" value="" onClick="tiaozhuan('{$url}');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                </div>
                            </div>
                        </div>
                        
                    </li>
                    
                </ul>
				
				
				
				
			<!--{else}-->
                <ul>
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信号码</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>姓名</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送时间</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送状态</div></span>
                    </li>

                    
                    <div id="nowpage1" class="nowpage">
                    	
                        <li style="height:400px;">
                        
                            <div style="margin-top:160px; font-size:14px; font-weight:bold;">
                            	您搜索的号码<span style="color:#F00;">不存在</span>，请核对后重新搜索！
                            </div>
                            
                        </li>
                        
                    </div>
                    
                </ul>
				
				
			<!--{/if}-->	
				
				
				
				
				
				
				
				
				
				
				
				
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