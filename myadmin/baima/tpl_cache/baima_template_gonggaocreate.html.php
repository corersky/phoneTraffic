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
#lltjllggxj .inputtext{color:#666;width:180px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjllggxj .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjllggxj .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjllggxj .inputtext4{color:#666;width:80px;height:30px; font-size:14px; border:#bbb 1px solid; outline:none;}
#lltjllggxj .v1{}
#lltjllggxj .v2{}
#lltjllggxj .v3{}
#lltjllggxj .v4{}
#lltjllggxj .v5{}
#lltjllggxj .v6{}
#lltjllggxj .v7{}
#lltjllggxj .v8{}
#lltjllggxj .mt{margin-top:12px;}
#lltjllggxj #table{
float:left;
width:740px;
text-align:left;
border:1px #d8d8d8 solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#lltjllggxj #mythetable{
width:740px;
margin:0 auto;
}
#lltjllggxj #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjllggxj #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjllggxj #table li span.list1{
text-decoration:none;
float:left;
width:70px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjllggxj #table li span.list2{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list3{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list4{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list5{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjllggxj #table li span.list6{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
<div id="lltjllggxj" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">����ͳ�ƹ���</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">��������</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:10px;">
        	<form action="gaonggaoation.php?action=addgonggao" method="post" target="hiddeniframe">
        	<div style="margin-top:10px; margin-left:50px; font-family:'΢���ź�'; font-size:16px;">
                <div style="padding-top:50px;">
                    <div class="fl">���⣺</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><input class="inputtext" name="title" id="title" value="<?=$gonggaoinfo['title']?>" type="text" placeholder="���������..." onKeyPress="this.style.color='black';" /></div>
                </div>
                
                <div id="showthesms" style="padding-top:50px;">
                    <div class="fl">���ݣ�</div><div class="fl" style="margin-left:10px; margin-top:-6px;"><textarea name="gonggaomsg" id="gonggaomsg" style="color:#666;width:480px;height:80px; font-size:16px; padding:10px; resize: none; background-color:#FFF; line-height:20px; border:#bbb 1px solid; outline:none;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;" placeholder="����������..." onpropertychange="if(value.length>67) value=value.substr(0,67)" onKeyPress="this.style.color='black';"><?=$gonggaoinfo['gonggaomsg']?></textarea></div>
                </div>
                <div style="width:73px; height:25px; margin-top:140px; margin-left:280px;">
<input  type="hidden" name="id" id="id" value="<?=$id?>"/>
                	<input type="submit" value="" style="width:73px; height:25px;background-image:url(baima/template/images/bc.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            </form>
        </div>
        
    </div>
</div>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjllgg.js" type="text/javascript"></script>


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
