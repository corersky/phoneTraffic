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
<div id="userinnersystem">
<div id="container">
    <div id="header">
        <div id="headermsg">
            <div id="headerlogo">
                <img src="baima/template/images/headerlogo.png" width="260" height="35">
            </div>
            <div id="headerset">
                <a href="<?=XZKJURL?>/logination.php?action=logout"><img src="baima/template/images/exit.png" width="90" height="30"></a>
            </div>
        </div>
    </div>
    <div id="main">
        <div id="mainmenu">
            <div style="position:relative;">
                <div class="cont_left fl">
                    <div>
                        <div>
                            <img src="baima/template/images/menutop.png" width="220" height="27">
                        </div>
                        <div class="cztips">
                            <div class="czusername">
                                �û�����<?=$_SESSION["dl_username"]?>
                            </div>
                            <img src="baima/template/images/menutoptexthr.png" width="220" height="4">
                     
                            <div class="dxye">
                                <div class="dxyeyuan">
                                    �˻���<span class="colorred"><?=$userinfo['dxnum']?>Ԫ</span>
                                </div>
                                <div class="czimg">
                                    <a href="index.php?action=chongzhi"><img src="baima/template/images/menutopchong.png" width="19" height="16"></a>
                                </div>
                            </div>
                        </div>
                        <div class="dxyehr">
                            <img src="baima/template/images/menutophr.png" width="220" height="10">
                        </div>
                    </div>
                    <ul class="menuList">
                    	

<?php if($_SESSION["dl_isdxuser"]==1) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulidxgl" class="fl" style="font-family:΢���ź�;">���Ź���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=adduser"><li id="tjyh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">����û�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=userlist"><li id="wdkh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">�ҵĿͻ�</div></div></li></a>
<a class="menu_a_a" href="index.php?action=dxchongzhi"><li id="czdx" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">��ֵ����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=dxchongzhilog"><li id="czdxjl" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu12.png" width="20" height="20"></div><div class="fl">��ֵ���ż�¼</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>
                        
                        
                        

                        
                        
                        
                        
                        
                        
                        <?php if($_SESSION["dl_islluser"]==1) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulicsjll" class="fl" style="font-family:΢���ź�;">���ֻ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=llchongzhi"><li id="czll" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">���������ֵ</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=llchongzhipl"><li id="plczll" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">���������ֵ</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=llchongzhilog"><li id="czlljl" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu52.png" width="20" height="20"></div><div class="fl">��ֵ������¼</div></div></li></a>
                            </ul>
                        </li>

                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulikmgl" class="fl" style="font-family:΢���ź�;">���ܹ���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=kmgl"><li id="kgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=kmchongzhi"><li id="kmcz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">���ܳ�ֵ</div></div></li></a>
                            </ul>
                        </li>

                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulitjjl" class="fl" style="font-family:΢���ź�;">�Ƽ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=tuijianjj"><li id="tjjs" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">�Ƽ�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=myjiangli"><li id="wdjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">�ҵĽ���</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=jianglijiesuan"><li id="jljs" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">��������</div></div></li></a>
                            </ul>
                        </li>
                        
                        <?php } ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:΢���ź�;">�˻�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/index.php?action=setuserinfo"><li id="xgzl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/index.php?action=setpwd"><li id="xgmm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu22.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulicwgl" class="fl" style="font-family:΢���ź�;">�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=caiwulog"><li id="cwjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">�����¼</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=myjiage"><li id="wdjg" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">�ҵļ۸�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=chongzhi"><li id="wycz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">��Ҫ��ֵ</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulilxwm" class="fl" style="font-family:΢���ź�;">��ϵ����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=lxwm"><li id="lxwm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">��ϵ����</div></div></li></a>
                            </ul>
                        </li>

<?php if($_SESSION["dl_uid"]==56) { ?>
  <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulizkgl" class="fl" style="font-family:΢���ź�;">�ƿ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=km_create"><li id="mksckm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">���ɿ���</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=km_pilist"><li id="kmglkm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">������</div></div></li></a>
                                <a class="menu_a_a"  href="card.php" target="_blank"><li id="kmkmcz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">���ܳ�ֵ</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>




                    </ul>
                </div>
            </div>  
        </div>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
<div id="dxgltjyh" style="margin-bottom:30px;">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��û�����-����û�</div>
        </div>
<form action="<?=XZKJURL?>/useration.php?action=adduser" method="post" target="hiddeniframe">
        <div class="v1">
            <div style="width:740px; padding-left:10px; padding-top:20px;">
                
                <div style="margin-top:50px; margin-left:130px; font-family:'΢���ź�'; font-size:16px;">
                    <div>
                        <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">�û�����</div><div class="fl" style="margin-left:53px; margin-top:-6px;"><input class="inputtext" name="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�������û���..." /></div>
                    </div>
                    <div style="padding-top:50px;">
                        <div class="fl colorred" style="margin-top:3px;">*</div><div class="fl" style="margin-left:40px;">��ϵ�˵绰��</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input class="inputtext" name="sjh" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="11" onKeyPress="this.style.color='black';" placeholder="��������ϵ�˵绰..."/></div>
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
                        <div class="fl" style="margin-left:47px;"><font color="#FF0000">ע���¿��û���Ĭ������Ϊ��123123����ͨ��<a href="http://duanxin.xzkj168.cn" target="_blank">http://duanxin.xzkj168.cn</a>ƽ̨��½ʹ�á�</font></div>
                    </div>

                    <div style="padding-top:70px; margin-left:180px;">
                        <input class="v7" type="submit" value="" style="width:105px; height:41px;background-image:url(baima/template/images/tjyhtjyh.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                    </div>
                </div>
                
            </div>
        </div>
        </form>
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxgltjyh.js" type="text/javascript"></script>


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