<!doctype html>
<html>
<head>
<title>���ŷ���ƽ̨</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="���ŷ���ƽ̨">
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="Bookmark" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="baima/template/css/style.css" />
</head>
<body>
<div id="userinnersystem">
<div id="container">
    <div id="header">
        <div id="headermsg">
            <div id="headerlogo">
                <img src="baima/template/images/headerlogo.png" width="260" height="35">
            </div>
            <div id="headerset">
                <a href="index.php?action=login"><img src="baima/template/images/exit.png" width="90" height="30"></a>
            </div>
        </div>
    </div>
    <div id="main">
        <div id="mainmenu">
            <div style="position:relative;">
                <div class="cont_left fl">
                    <ul class="menuList">
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:΢���ź�;">�˻�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=setpwd"><li id="xgmm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=setuserinfo"><li id="xgzl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menuliyhgl" class="fl" style="font-family:΢���ź�;">�û�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=adduser"><li id="tjxyh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">������û�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=userlist"><li id="wdkh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">�ҵĿͻ�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=jiekouuser"><li id="jkyh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">�����û�</div></div></li></a>
                            </ul>
                        </li>

<?php if(!empty($_SESSION["kefu_qx_ddgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menuliddgl" class="fl" style="font-family:΢���ź�;">��������</span>
                            </a>

                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=orderweishen"><li id="wshdd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">δ��˶���</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=orderlist"><li id="ycldd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">�Ѵ�����</div></div></li></a>


 <a class="menu_a_a" href="index.php?action=liuliangorderlist"><li id="dhlldd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">�һ���������</div></div></li></a>

                            </ul>
                        </li>
<?php } ?>

<?php if(!empty($_SESSION["kefu_qx_mbgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulimbgl" class="fl" style="font-family:΢���ź�;">ģ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=tempweishen"><li id="wshmb" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu3.png" width="20" height="20"></div><div class="fl">δ���ģ��</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=templist"><li id="yshmb" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu3.png" width="20" height="20"></div><div class="fl">�����ģ��</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>

<?php if(!empty($_SESSION["kefu_qx_cwgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulizwgl" class="fl" style="font-family:΢���ź�;">�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=dxchongzhilog"><li id="czjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">��ֵ��¼</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=dxchongzhi"><li id="cz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">��ֵ</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=fapiaolog"><li id="fpgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">��Ʊ����</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>



<?php if(!empty($_SESSION["kefu_qx_dlsgl"])) { ?>

<li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulidlsgl" class="fl" style="font-family:΢���ź�;">�����̹���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=daili_adduser"><li id="tjdls" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">��Ӵ�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_userlist"><li id="gldls" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">���������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_xfjl"><li id="xfjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">���Ѽ�¼</div></div></li></a>
<a class="menu_a_a" href="index.php?action=daili_czlog"><li id="czjl2" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">��ֵ��¼</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_yaoqinggl"><li id="tjjs" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">�Ƽ�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=llweichuliorder"><li id="wcldd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">δ������</div></div></li></a>
                            </ul>
                        </li>
 <?php } ?>
 
 
 
 <?php if(!empty($_SESSION["kefu_qx_lltdgl"])) { ?>

  <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu7.png" width="25" height="25"></div></span><span id="menulilltjgl" class="fl" style="font-family:΢���ź�;">����ͨ������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=liuliangcztj"><li id="cztj" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">��ֵͳ��</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=liuliangxftj2"><li id="xftj" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">����ͳ��</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=lltongdaolist"><li id="lltdgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">����ͨ������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=lltongdaolistsw"><li id="snllgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">ʡ����������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=kefuczlog"><li id="czrz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">������־</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=gonggaolist"><li id="llgg" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">��������</div></div></li></a>

<a class="menu_a_a" href="index.php?action=addcytkuser"><li id="addcyff" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">�����������</div></div></li></a>
<a class="menu_a_a" href="index.php?action=whdq"><li id="whdq" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">ά������</div></div></li></a>
                            </ul>
                        </li>

 <?php } ?>
 
 


                    </ul>
                </div>
            </div>  
        </div>

<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjxftj .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjxftj .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjxftj .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjxftj .v1{}
#lltjxftj .v2{}
#lltjxftj .v3{}
#lltjxftj .v4{}
#lltjxftj .v5{}
#lltjxftj .v6{}
#lltjxftj .v7{}
#lltjxftj .v8{}
#lltjxftj .mt{margin-top:12px;}
#lltjxftj #table{
float:left;
width:740px;
text-align:left;
border:1px #d8d8d8 solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#lltjxftj #mythetable{
width:740px;
margin:0 auto;
}
#lltjxftj #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjxftj #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjxftj #table li span.list1{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjxftj #table li span.list2{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list3{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list4{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjxftj #table li span.list5{
text-decoration:none;
float:left;
width:140px;
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
function soso(){
var  sosoy=document.getElementById("sosoy").value;
var  sosom=document.getElementById("sosom").value;
var  sosonick=document.getElementById("sosonick").value;
var url="<?=XZKJURL?>"+"/index.php?action=liuliangxftj&sosoy="+sosoy+"&sosom="+sosom+"&nick="+sosonick;
window.location.href=url;
}

function xfjlqh(){
var  sosoy=document.getElementById("sosoy").value;
var  sosom=document.getElementById("sosom").value;
var  sosonick=document.getElementById("sosonick").value;
var url="<?=XZKJURL?>"+"/index.php?action=liuliangxftj2&sosoy="+sosoy+"&sosom="+sosom+"&nick="+sosonick;
window.location.href=url;

}
</script>
<div id="mains">
<div id="lltjxftj" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">����ͳ�ƹ���</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">����ͳ��</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:80px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                            	<div style="height:35px;">
                                    <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">���ѷ�ʽ��</div>
                                        <div class="fl">
                                           	<select name="" class="inputtext2" onchange="xfjlqh()">
                                            <option value="1">���ų�ֵ</option>
                                            <option value="2">������ֵ</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:295px;">ʱ���ѯ��</div>
                                        <div class="fl">
                                            <select name="" class="inputtext3" id="sosoy" onchange="soso()">
                                             <option value="2015" <?php if($sosoy==2015) { ?>selected="selected"<?php } ?>>2015</option>
                                            <option value="2016" <?php if($sosoy==2016) { ?>selected="selected"<?php } ?>>2016</option>
                                            <option value="2017" <?php if($sosoy==2017) { ?>selected="selected"<?php } ?>>2017</option>
<option value="2018" <?php if($sosoy==2018) { ?>selected="selected"<?php } ?>>2018</option>
                                        </select>
                                        </div>
                                        <div class="fl" style="margin-top:4px; margin-left:5px;">��&nbsp;&nbsp;</div>
                                        <div class="fl">
                                           <select name="" class="inputtext3" id="sosom" onchange="soso()">
                                            <option value="1" <?php if($sosom==1) { ?>selected="selected"<?php } ?>>1</option>
<option value="2" <?php if($sosom==2) { ?>selected="selected"<?php } ?>>2</option>
<option value="3" <?php if($sosom==3) { ?>selected="selected"<?php } ?>>3</option>
<option value="4" <?php if($sosom==4) { ?>selected="selected"<?php } ?>>4</option>
<option value="5" <?php if($sosom==5) { ?>selected="selected"<?php } ?>>5</option>
<option value="6" <?php if($sosom==6) { ?>selected="selected"<?php } ?>>6</option>
<option value="7" <?php if($sosom==7) { ?>selected="selected"<?php } ?>>7</option>
<option value="8" <?php if($sosom==8) { ?>selected="selected"<?php } ?>>8</option>
<option value="9" <?php if($sosom==9) { ?>selected="selected"<?php } ?>>9</option>
<option value="10" <?php if($sosom==10) { ?>selected="selected"<?php } ?>>10</option>
<option value="11" <?php if($sosom==11) { ?>selected="selected"<?php } ?>>11</option>
<option value="12" <?php if($sosom==12) { ?>selected="selected"<?php } ?>>12</option>
                                        </select>
                                        </div>
                                        <div class="fl" style="margin-top:4px; margin-left:5px;">��</div>
                                    </div>
                                </div>
                                <div style="height:40px;">
                                	<div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">������</div>
                                        <div class="fl"><input class="inputtext" type="text" name="" id="sosonick" value="<?=$nick?>" placeholder="�ڴ���������̲�ѯ..."></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                    </div>
                                    <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:250px;">�����̽���ܺͣ�<span style="color:#F00; font-size:16px;"><?=$zengkoufeinum?></span>Ԫ</div>
                                    </div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>������</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���ѷ�ʽ</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����ʱ��</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��������</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�����̼�</div></span>
                        
                            </li>
                            
                            <?php if(is_array($userarr)) { foreach($userarr as $value) { ?>
                            <li>
                                
                                <span class="list1 mt"><?=$value['dlnick']?></span>
                                <span class="list2 mt">���ų�ֵ</span>
                                <span class="list3 mt"><?=$value['createtime']?></span>
                                <span class="list4 mt"><?=$value['jine']?>��</span>
                                <span class="list5 mt"><?=$value['shje']?></span>
                            
                                
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
                    </div>
                </div>
            </div>
            
            <div id="msgno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:300px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            ���޷�Ʊ�����¼
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjxftj.js" type="text/javascript"></script>



    </div>
    <div id="footer">
        <div id="copyright">
            <p>Copyright 2011 ֣�����е��ӿƼ����޹�˾ ��Ȩ���� ԥICP��09014995��</p>
            <p>����ʱ�䣺��һ������8:30-18:30���ڼ��ճ��⣩��˾��ַ��֣���н���·168��</p>
        </div>
    </div>
</div>
</div>

</body>
</html>