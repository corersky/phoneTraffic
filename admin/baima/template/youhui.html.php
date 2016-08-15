<!--{template header}-->

<style>
#jfglyhgl .inputtext{color:#666;width:180px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showlj .inputtext{color:#666;width:130px;height:26px; font-size:13px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
#showlj .inputtext2{color:#666;width:80px;height:26px; font-size:13px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
#showypj .inputtext{color:#666;width:130px;height:26px; font-size:13px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
#showypj .inputtext2{color:#666;width:80px;height:26px; font-size:13px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
#jfglyhgl .mt{margin-top:12px;}
#jfglyhgl #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#jfglyhgl #mythetable{
	width:740px;
	margin:0 auto;
}
#jfglyhgl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#jfglyhgl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#jfglyhgl #table li span.list1{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#jfglyhgl #table li span.list2{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#jfglyhgl #table li span.list3{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#jfglyhgl #table li span.list4{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#jfglyhgl #table li span.list5{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#jfglyhgl #table li span.list6{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>

<script>
function delyouhui(id){
	var url="{XZKJURL}/useration.php?action=delyouhui&id="+id;
	hiddeniframe.location.href=url;
}


function setyouhui_lj(id,yhname,tj1,tj2,tj3,tj4,msg){
	document.getElementById("lj_id").value=id;
	document.getElementById("lj_yhname").value=yhname;
	document.getElementById("lj_tj1").value=tj1;
	document.getElementById("lj_tj2").value=tj2;
	document.getElementById("lj_tj3").value=tj3;
	document.getElementById("yhnr").value=msg;
	document.getElementById('showlj').style.display='';
}

function setyouhui_pj(id,yhname,tj1,tj2,tj3,tj4,msg){
	document.getElementById("id").value=id;
	document.getElementById("yhname").value=yhname;
	document.getElementById("tj1").value=tj1;
	document.getElementById("tj2").value=tj2;
	document.getElementById("tj3").value=tj3;
	document.getElementById("tj4").value=tj4;
	document.getElementById("msg").value=msg;
	document.getElementById('showypj').style.display='';
}

function setyouhui(type,id,yhname,tj1,tj2,tj3,tj4,msg){
	if(type==1){
		setyouhui_pj(id,yhname,tj1,tj2,tj3,tj4,msg);
	}else{
		setyouhui_lj(id,yhname,tj1,tj2,tj3,tj4,msg);
	}

}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
	<div id="jfglyhgl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">计费管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">优惠管理</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	<div>
                    <div class="fr cp" onClick="setyouhui_pj('','','','','','','');document.getElementById('showypj').style.display='';" style="margin-left:20px;">
                        <img src="baima/template/images/yhglcjyjczhd.png" width="150" height="41">
                    </div>
                    <div class="fr cp" onClick="setyouhui_lj('','','','','','','');document.getElementById('showlj').style.display='';">
                        <img src="baima/template/images/yhglcjljczhd.png" width="150" height="41">
                    </div>
                </div>
                
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>优惠名称</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>优惠类型</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>内容</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发布时间</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>条件</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            
							<!--{loop $youhuiarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[yhname]}</span>
                                <span class="list2 mt">{$value[tjtypestr]}</span>
                                <span class="list3 mt"><a title="{$value[tjstr]}">{$value[tjstr]}</a></span>
                                <span class="list4 mt">{$value[createtime]}</span>
                                <span class="list5 mt" style="color:#006dcb;">
                                	<span class="cp" onClick="setyouhui('{$value[tjtype]}','{$value[id]}','{$value[yhname]}','{$value[tj1]}','{$value[tj2]}','{$value[tj3]}','{$value[tj4]}','{$value[msg]}');">查看</span>
                                </span>
                                <span class="list6 mt" style="color:#006dcb;">
                                    <!--带标识-->
                                    <span class="cp" onClick="document.getElementById('showtdeltips{$key}').style.display='';">删除</span>
                                </span>
                                <!--带标识-->
                                <div id="showtdeltips{$key}" style="position:absolute; font-size:13px; margin-top:-30px; margin-left:518px; width:220px; height:37px; border:#ff8400 1px solid; background-color:#ffface; display:none;">
                                	<div style="float:left; margin-top:12px; margin-left:8px; margin-right:5px;">是否删除该优惠活动？</div>
                                    <div style="float:left; margin:6px; cursor:pointer;"><input type="button" value="" style="width:25px; height:25px;background-image:url(baima/template/images/scfzyes.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onclick="delyouhui('{$value[id]}')"></div>
                                    <!--带标识-->
                                    <div style="float:left; margin:6px; cursor:pointer;" onClick="document.getElementById('showtdeltips{$key}').style.display='none';"><img src="baima/template/images/scfzno.png" width="25" height="25"></div>
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
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="msgno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:180px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            当前还没有优惠活动，请先
                        </div>
                        <div class="fl cp" style="margin-top:-13px; margin-left:20px;" onClick="document.getElementById('showlj').style.display='';">
                            <img src="baima/template/images/yhglcjyhhd.png" width="137" height="41">
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showlj" class="showlj" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-200px 0 0 -350px;width:700px;height:400px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:700px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">新建优惠活动/查看优惠活动</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showlj').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			<form action="{XZKJURL}/useration.php?action=addyouhui" method="post" target="hiddeniframe">
            <div style="width:630px; height:360px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:60px; margin-top:25px;">
                	<span>优惠名称：</span>
                    <span><input class="inputtext" name="yhname" id="lj_yhname" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入优惠名称..."/></span>
                </div>
                <div style="margin-left:60px; margin-top:20px;">
                	<span>优惠条件：累计充值大于</span>
                    <span><input class="inputtext2" name="tj1" id="lj_tj1" type="text" maxlength="10" onKeyPress="this.style.color='black';"/></span>
                    <span>元，并且累计充值小于</span>
                    <span><input class="inputtext2" name="tj2" id="lj_tj2" type="text" maxlength="10" onKeyPress="this.style.color='black';"/></span>
                    <span>元，短信单价高于</span>
                    <span><input class="inputtext2" name="tj3" id="lj_tj3" type="text" maxlength="10" onKeyPress="this.style.color='black';"/></span>
                    <span>元</span>
                </div>
                <div style="margin-left:60px; margin-top:20px;">
                	<div class="fl">优惠内容：</div>
                    <div class="fl"><textarea id="yhnr" name="msg" style="color:#666;width:440px;height:80px; font-size:16px; padding:10px; resize: none; background-color:#FFF; line-height:20px; border:#278ce4 1px solid; outline:none;" placeholder="请输入优惠活动内容..." onKeyPress="this.style.color='black';" maxlength="99"></textarea></div>
                    <div style="position:absolute; margin-top:-25px; margin-left:370px; font-size:12px;"><span>可插入变量：</span><span class="cp" onClick="insertmsg()"><img src="baima/template/images/ljczje.png" width="104" height="21"></span></div>
                </div>
                <div style="margin-left:200px; margin-top:150px;">
                	<div class="fl cp">
						<input type="hidden" name="tjtype" value="0"/>
						<input type="hidden" name="id" id="lj_id" value="0"/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:140px;" onClick="document.getElementById('showlj').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
			</form>
        </div>
	</div>
</span>


<span id="showypj" class="showypj" style="display:none;">
	<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
	<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-200px 0 0 -350px;width:700px;height:400px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:700px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">新建优惠活动/查看优惠活动</div>
            </div>
            <!--<div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showypj').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>-->
			<form action="{XZKJURL}/useration.php?action=addyouhui" method="post" target="hiddeniframe">
            <div style="width:630px; height:360px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:60px; margin-top:25px;">
                	<span>优惠名称：</span>
                    <span><input class="inputtext" name="yhname" id="yhname" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入优惠名称..."/></span>
                </div>
                <div style="margin-left:60px; margin-top:20px;">
                	<span>优惠条件：注册时间大于</span>
                    <span><input class="inputtext2" name="tj1" id="tj1" type="text" maxlength="2" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/></span>
                    <span>天，并且注册时间小于</span>
                    <span><input class="inputtext2" name="tj2" id="tj2" type="text" maxlength="2" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/></span>
                    <span>天，月平均充值金额大于</span>
                    <span><input class="inputtext2" name="tj3" id="tj3" type="text" maxlength="10" onKeyPress="this.style.color='black';"/></span>
                    <span>元，且小于</span>
                    <span><input class="inputtext2" name="tj4" id="tj4" type="text" maxlength="10" onKeyPress="this.style.color='black';"/></span>
                    <span>元</span>
                </div>
                <div style="margin-left:60px; margin-top:20px;">
                	<div class="fl">优惠内容：</div>
                    <div class="fl"><textarea name="msg" id="msg" style="color:#666;width:440px;height:80px; font-size:16px; padding:10px; resize: none; background-color:#FFF; line-height:20px; border:#278ce4 1px solid; outline:none;" placeholder="请输入优惠活动内容..." onKeyPress="this.style.color='black';" maxlength="99"></textarea></div>
                </div>
                <div style="margin-left:200px; margin-top:150px;">
                	<div class="fl cp">
						<input type="hidden" name="tjtype" value="1"/>
						<input type="hidden" name="id" id="id" value="0"/>
                		<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                    <div class="fl cp" style=" margin-left:140px;" onClick="document.getElementById('showypj').style.display='none';">
                    	<img src="baima/template/images/gb.png" width="73" height="25">
                    </div>
                </div>
            </div>
			</form>
        </div>
	</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/jfglyhgl.js" type="text/javascript"></script>
<!--{template footer}-->