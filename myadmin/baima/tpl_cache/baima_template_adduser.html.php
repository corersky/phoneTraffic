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
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
<div id="yhgltjxyh" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site2.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">�û�����</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">������û�</div>
        </div>
        <form action="<?=XZKJURL?>/useration.php?action=adduser" method="post" target="hiddeniframe">
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
        	<div style="margin-top:50px; margin-left:130px; font-family:'΢���ź�'; font-size:16px;">
                <div>
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">�û�����</div><div class="fl" style="margin-left:53px; margin-top:-6px;"><input class="inputtext" name="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�������û���..." /></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��ϵ�˵绰��</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="sjh" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="12" onKeyPress="this.style.color='black';" placeholder="��������ϵ�˵绰..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl" style="margin-left:47px;">��ϵ��������</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="lxrxm" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="��������ϵ������..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl" style="margin-left:47px;">��ϵ��QQ��</div><div class="fl" style="margin-left:28px; margin-top:-6px;"><input class="inputtext" name="lxrqq" type="text" maxlength="10" onKeyPress="this.style.color='black';"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="��������ϵ��QQ..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl" style="margin-left:47px;">��˾���ƣ�</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="gsmc" type="text" maxlength="100" onKeyPress="this.style.color='black';" placeholder="�����빫˾����..."/></div>
                </div>
                <div style="padding-top:50px;">
                    <div class="fl" style="margin-left:47px;">��˾��ַ��</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="dizhi" type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="�����빫˾��ַ..."/></div>
                </div>

<div style="padding-top:50px;">
                    <div class="fl" style="margin-left:47px;">Ӫ��רԱ��</div><div class="fl" style="margin-left:38px; margin-top:-6px;">
<select name="yingxiaoid" id="yingxiaoid">
<option value="0">��˾</option>
<?php if(is_array($yingxiaozyarr)) { foreach($yingxiaozyarr as $id=>$value) { ?>
<option value="<?=$id?>"><?=$value?></option>
<?php } } ?>
</select>
</div>
                </div>

                <div style="padding-top:50px;">
                    <div class="fl" style="margin-left:47px;">����ǩ����</div><div class="fl" style="margin-left:38px; margin-top:-6px;"><input class="inputtext2" name="qianming" type="text" maxlength="10000" onKeyPress="this.style.color='black';" placeholder="���������ǩ��...(Ĭ��Ϊ�û���)"/></div>
                </div>
                <div style="padding-top:70px; margin-left:180px;">
                    <input class="v7" type="submit" value="" style="width:105px; height:41px;background-image:url(baima/template/images/tjyhtjyh.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
            
        </div>
        </form>
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/yhgltjxyh.js" type="text/javascript"></script>

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