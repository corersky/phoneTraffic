<!doctype html>
<html>
<head>
<title>���ŷ���ƽ̨</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="���ŷ���ƽ̨">
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="Bookmark" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="baima/template/css/style.css" />
</head>
<body>

<style>
#dlsgltjjsck .mt{margin-top:10px;}
#dlsgltjjsck .pageli{height:58px;}
#dlsgltjjsck .thepage{float:left; margin-top:22px; font-size:13px; margin-left:25px; color:#666;}
#dlsgltjjsck .pagechoose{border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;}
#dlsgltjjsck .pagechoose a{color:#666;}
#dlsgltjjsck .pagegoto{float:left; font-size:12px; margin-top:-1px; margin-left:5px; cursor:pointer;}
#dlsgltjjsck .pagenum{font-size:12px; margin-left:-4px; margin-right:-4px;}
#dlsgltjjsck .nowpagetext{color:#7e7e7e;width:26px;height:18px;font-size:12px;}
#dlsgltjjsck .pagego{float:left; font-size:12px; margin-left:10px; margin-top:-2px;}
#dlsgltjjsck .pageall{float:left; margin-top:22px; font-size:12px; margin-left:20px; color:#666;}
#dlsgltjjsck .pagetheall{float:left; font-size:12px; margin-top:2px;}
#dlsgltjjsck .pagetheallfont{font-size:12px;}
#dlsgltjjsck .pagelimsga{color:#299be4;}
#dlsgltjjsck .pagelia{color:#299be4;}
#dlsgltjjsck #table{
float:left;
width:530px;
text-align:left;
border:1px #81beff solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#dlsgltjjsck #mythetable{
width:530px;
margin:0 auto;
}
#dlsgltjjsck #table li{
float:left;
width:530px;
height:33px;
border-bottom:1px solid #81beff;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#dlsgltjjsck #table li.title{
width:530px;
height:20px;
line-height:16px;
font-size:14px;
cursor:default;
background-color:#cdedf8;
padding-top:5px;
}

#dlsgltjjsck #table li span.list1{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#dlsgltjjsck #table li span.list2{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsgltjjsck #table li span.list3{
text-decoration:none;
float:left;
width:170px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsgltjjsck #table li span.list4{
text-decoration:none;
float:left;
width:70px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsgltjjsck #table li span.list5{
text-decoration:none;
float:left;
width:70px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>

<script>
function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}
 
function setzfbzhanghao(uid){
var zfbzhanghao=document.getElementById("zfbinputtxt").value;
hiddeniframe.location.href='<?=XZKJURL?>/dailiation.php?action=setzfbzhanghao&uid='+uid+'&zfbzhanghao='+zfbzhanghao;

}
function setzfbname(uid){
var zfbname=document.getElementById("yhminputtxt").value;
hiddeniframe.location.href='<?=XZKJURL?>/dailiation.php?action=setzfbname&uid='+uid+'&zfbname='+zfbname;

}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="dlsgltjjsck" style="float:left;width:550px; height:230px;">
    <div style="margin-top:20px; margin-left:20px;">
        <div style="font-size:13px; font-family:'΢���ź�'; font-weight:bold;">
        
            <div class="fl" style="margin-top:2px;">֧�����˺ţ�</div>
            <div class="fl" style="width:210px;">
                <div id="zfbtxt" style="height:20px; overflow:hidden;"><?=$userinfo['zfbzhanghao']?></div>
                <div id="zfbinput" style="height:26px;display:none;">
                    <input id="zfbinputtxt" name="" type="text" onKeyPress="this.style.color='black';" style="color:#666;width:200px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;" />
                </div> 
            </div>
            <div class="fl" style="width:25px; height:26px; cursor:pointer; margin-left:5px;">
                <div id="zfbbj" style="width:25px; height:25px; cursor:pointer;" onClick="showzfbinput()">
                    <img src="baima/template/images/mybj.png" width="25" height="25">
                </div>
                <div id="zfbbc" style="width:25px; height:25px; cursor:pointer; display:none;">
                    <input type="button" value="" onclick="setzfbzhanghao('<?=$uid?>')" style="width:25px; height:25px;background-image:url(baima/template/images/mybc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            
            <div class="fl" style="margin-top:2px; margin-left:20px;">�û�����</div>
            <div class="fl" style="width:80px;">
                <div id="yhmtxt" style="height:20px; overflow:hidden;"><?=$userinfo['zfbname']?></div>
                <div id="yhminput" style="height:26px;display:none;">
                    <input id="yhminputtxt" name="" type="text" onKeyPress="this.style.color='black';" style="color:#666;width:70px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;"/>
                </div>
            </div>
            <div class="fl" style="width:25px; height:26px; cursor:pointer; margin-left:5px;">
                <div id="yhmbj" style="width:25px; height:25px; cursor:pointer;" onClick="showyhminput()">
                    <img src="baima/template/images/mybj.png" width="25" height="25">
                </div>
                <div id="yhmbc" style="width:25px; height:25px; cursor:pointer; display:none;">
                    <input type="button" value="" onclick="setzfbname('<?=$uid?>');" style="width:25px; height:25px;background-image:url(baima/template/images/mybc.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            
        </div>
    </div>

    <div style="margin-top:60px;">
        <div id="mythetable">
            <div id="table">
                <ul>
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�û���</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ֻ���</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���ʱ��</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ���</div></span>
                        <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�������</div></span>
                    </li>
<?php if(is_array($userarr)) { foreach($userarr as $value) { ?>
                    <li>
                        
                        <span class="list1 mt"><?=$value['username']?></span>
                        <span class="list2 mt"><?=$value['sjh']?></span>
                        <span class="list3 mt"><?=$value['createtime']?></span>
                        <span class="list4 mt"><?=$value['chongzhijine']?>Ԫ</span>
                        <span class="list5 mt"><?=$value['jianglijine']?>Ԫ</span>
                        
                    </li>
                    <?php } } ?>
                    <li style="height:58px;">
                    
                         <div class="thepage">
                                    <span class="pagechoose"><?=$fenarr['sy']?></span>&nbsp;
<span class="pagechoose"><?=$fenarr['shangy']?></span>&nbsp;
<span class="pagechoose"><?=$fenarr['xiay']?></span>&nbsp;
<span class="pagechoose"><?=$fenarr['weiy']?></span>&nbsp;
                                </div>
                                <div class="pageall">
                                    <div class="pagetheall">
                                        ��<span class="pagetheallfont"><?=$page?>/<?=$zpage?></span>ҳ
                                    </div>
                                    
                                    <div class="pagego">
                                        <div class="fl">
                                        ��<span class="pagenum">
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>ҳ
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('<?=$url?>');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                </div>
                            </div>
                        </div>
                        
                    </li>
                    
                </ul>
                <ul style="display:none;">
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���ź���</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����ʱ��</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����״̬</div></span>
                    </li>

                    
                    <div id="nowpage1" class="nowpage">
                    	
                        <li style="height:400px;">
                        
                            <div style="margin-top:160px; font-size:14px; font-weight:bold;">
                            	�������ĺ���<span style="color:#F00;">������</span>����˶Ժ�����������
                            </div>
                            
                        </li>
                        
                    </div>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function showzfbinput()
{
document.getElementById("zfbtxt").style.display="none";
document.getElementById("zfbinput").style.display="";
document.getElementById("zfbbj").style.display="none";
document.getElementById("zfbbc").style.display="";
document.getElementById("zfbinputtxt").value = document.getElementById("zfbtxt").innerHTML;
}
function showyhminput()
{
document.getElementById("yhmtxt").style.display="none";
document.getElementById("yhminput").style.display="";
document.getElementById("yhmbj").style.display="none";
document.getElementById("yhmbc").style.display="";
document.getElementById("yhminputtxt").value = document.getElementById("yhmtxt").innerHTML;
}
</script>


</body>
</html>