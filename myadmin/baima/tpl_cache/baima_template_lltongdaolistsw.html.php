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
#lltjsnllgl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjsnllgl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext4{width:70px;height:24px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext5{width:70px;height:20px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext6{width:90px;height:18px; border:#bbb 1px solid; font-size:12px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
#lltjsnllgl .v1{}
#lltjsnllgl .v2{}
#lltjsnllgl .v3{}
#lltjsnllgl .v4{}
#lltjsnllgl .v5{}
#lltjsnllgl .v6{}
#lltjsnllgl .v7{}
#lltjsnllgl .v8{}
#lltjsnllgl .mt{margin-top:12px;}
#lltjsnllgl .mt2{margin-top:30px;}
#lltjsnllgl .mt3{margin-top:8px;}
#lltjsnllgl #table{
float:left;
width:740px;
text-align:left;
border:1px #d8d8d8 solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#lltjsnllgl #mythetable{
width:740px;
margin:0 auto;
}
#lltjsnllgl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjsnllgl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjsnllgl #table li span.list1{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjsnllgl #table li span.list2{
text-decoration:none;
float:left;
width:160px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list3{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list4{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list5{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list6{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list7{
text-decoration:none;
float:left;
width:70px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list8{
text-decoration:none;
float:left;
width:70px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<script>
function soso(){
var  sf=document.getElementById("sf").value;

var url="index.php?action=lltongdaolistsw&sf="+sf;
window.location.href=url;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
<div id="lltjsnllgl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">����ͳ�ƹ���</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">ʡ����������</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                    
                    
                        <ul>
                            
                            <li style="height:40px; background-color:#288ce2; border:#288ce2 1px solid; margin:-1px 0 0 -1px; text-align:left;">
                            	<div style="float:left;color:#FFF; font-family:'΢���ź�'; font-size:16px; margin-left:20px; margin-top:8px;">
                                	ʡ����������
                                </div>
                                <div style="float:left; margin-left:420px; margin-top:7px;">
                                    <div style="float:left; margin-left:10px; margin-top:5px; font-family:'΢���ź�';  font-size:14px; font-weight:bold; color:#FFF;">
                                    	ʡ�ݣ�
                                    </div>
                                	<div style="float:left;">
                                		<select name="sf" id="sf" style="width:100px;height:28px; border:#bbb 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;" onchange="soso()">
                                            <option value="0">ȫ��</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="�ӱ�" <?php if($sf=='�ӱ�') { ?>selected="selected"<?php } ?>>�ӱ�</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="������" <?php if($sf=='������') { ?>selected="selected"<?php } ?>>������</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="ɽ��" <?php if($sf=='ɽ��') { ?>selected="selected"<?php } ?>>ɽ��</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="���" <?php if($sf=='���') { ?>selected="selected"<?php } ?>>���</option>
                                            <option value="�Ϻ�" <?php if($sf=='�Ϻ�') { ?>selected="selected"<?php } ?>>�Ϻ�</option>
                                            <option value="�㽭" <?php if($sf=='�㽭') { ?>selected="selected"<?php } ?>>�㽭</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="�㶫" <?php if($sf=='�㶫') { ?>selected="selected"<?php } ?>>�㶫</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="���ɹ�" <?php if($sf=='���ɹ�') { ?>selected="selected"<?php } ?>>���ɹ�</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="�ຣ" <?php if($sf=='�ຣ') { ?>selected="selected"<?php } ?>>�ຣ</option>
                                            <option value="�Ĵ�" <?php if($sf=='�Ĵ�') { ?>selected="selected"<?php } ?>>�Ĵ�</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="�½�" <?php if($sf=='�½�') { ?>selected="selected"<?php } ?>>�½�</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="����" <?php if($sf=='����') { ?>selected="selected"<?php } ?>>����</option>
                                            <option value="ɽ��" <?php if($sf=='ɽ��') { ?>selected="selected"<?php } ?>>ɽ��</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>ͨ������</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>ͨ����ע</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ƶ��ۿ�</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ͨ�ۿ�</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�����ۿ�</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>ʡ��</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>״̬</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                            </li>
                            
                            
 <?php if(is_array($userarr)) { foreach($userarr as $value) { ?>
                            <li style="height:40px;">
                                
                                <span class="list1 mt"><?=$value['title']?></span>
                                <span class="list2 mt">
                                	<!--��ʶ-->
                                    <div id="mytxt1"><?=$value['beizhu']?></div>
                                    <!--��ʶ-->
                                    <div id="myinput1" style="display:none;">
                                        <!--��ʶ-->
                                        <input id="mytheinput1" class="inputtext6" type="text" name="" placeholder="����ͨ����ע...">
                                    </div>
                                </span>
                                <!--<span class="list3 mt">�ƶ�</span>
                                <span class="list4 mt">
                                	
                                    <div id="mylttxt1"><?=$value['yidongzk']?></div>
                                    
                                    <div id="myltinput1" style="display:none;">
                                        
                                        <input id="liantongzk1" class="inputtext6" type="text" name="" value="" placeholder="�����ۿ�...">
                                    </div>
                                </span>-->
                                
                                <span class="list3 mt"><?=$value['yidongzk']?></span>
                                <span class="list4 mt"><?=$value['liantongzk']?></span>
                                <span class="list5 mt"><?=$value['dianxinzk']?></span>
                                
                                <span class="list6 mt"><?=$value['sheng']?></span>
                                <span class="list7 mt">
<?php if(empty($value['zt'])) { ?>
��ͣ
<?php } else { ?>
����
<?php } ?>
</span>
                                <span class="list8 mt">
<?php if(empty($value['zt'])) { ?>
<span><a href="<?=XZKJURL?>/dailiation.php?action=settongdaozt&tongdaoid=<?=$value['id']?>&zt=1" style="color:#03F;" target="hiddeniframe">����</a></span>
<?php } else { ?>
<span style=""><a href="<?=XZKJURL?>/dailiation.php?action=settongdaozt&tongdaoid=<?=$value['id']?>&zt=0" style="color:#03F;" target="hiddeniframe">��ͣ</a></span>
<?php } ?>
                                	

                                    

                                </span>
                                <!--<span class="list9 mt" style="margin-top:8px;">
                                    
                                    <div id="myxg1" style="float:left; margin-left:18px; cursor:pointer;" onClick="alert('����ͨ�����������޸�')">
                                        <img src="baima/template/images/lltjlltdglxg2.png" width="64" height="23">
                                    </div>
                                    
                                    <div id="mybc1" style="float:left; margin-left:18px; display:none;">
                                        <input type="button" style="width:64px;height:23px; background:url(baima/template/images/lltjlltdglbc2.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="">
                                    </div>
                                </span>-->
                                
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
<script src="baima/template/js/lltjsnllgl.js" charset="utf-8" type="text/javascript"></script>
<script type="text/javascript">
function xg(obj)
{
document.getElementById("mytxt"+obj.id.substring(4,6)).style.display="none";
document.getElementById("myinput"+obj.id.substring(4,6)).style.display="";
document.getElementById("mytheinput"+obj.id.substring(4,6)).value=document.getElementById("mytxt"+obj.id.substring(4,6)).innerHTML;

document.getElementById("mylttxt"+obj.id.substring(4,6)).style.display="none";
document.getElementById("myltinput"+obj.id.substring(4,6)).style.display="";
document.getElementById("liantongzk"+obj.id.substring(4,6)).value=document.getElementById("mylttxt"+obj.id.substring(4,6)).innerHTML;

document.getElementById("myxg"+obj.id.substring(4,6)).style.display="none";
document.getElementById("mybc"+obj.id.substring(4,6)).style.display="";
}


function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}
</script>


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