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
                                �û�����<?=$_SESSION["username"]?>
                            </div>
                            <img src="baima/template/images/menutoptexthr.png" width="220" height="4">
                            <!--<div class="dxye">
                                <div class="dxyeyuan">
                                    ������<span class="colorred"><?=$userinfo['dxnum']?>��</span>
                                </div>
                                <div class="czimg">
                                    <a href="<?=XZKJURL?>/user.php?action=caiwuchongzhi"><img src="baima/template/images/menutopcz.png" width="37" height="23"></a>
                                </div>
                            </div>-->
                            <div class="dxye">
                                <div class="dxyeyuan">
                                    �˻���<span class="colorred"><?=$userinfo['dxnum']?>��</span>
                                </div>
                                <div class="czimg">
                                    <a href="<?=XZKJURL?>/user.php?action=caiwuchongzhi"><img src="baima/template/images/menutopchong.png" width="19" height="16"></a>
                                </div>
                            </div>
                        </div>
                        <div class="dxyehr">
                            <img src="baima/template/images/menutophr.png" width="220" height="10">
                        </div>
                    </div>
                    <ul class="menuList">
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulidxgl" class="fl" style="font-family:΢���ź�;">���Ź���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=sendsms"><li id="fsdx" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">���Ͷ���</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=sendlog"><li id="fsjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu12.png" width="20" height="20"></div><div class="fl">���ͼ�¼</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=smshuifu"><li id="dxhf" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu13.png" width="20" height="20"></div><div class="fl">���Żظ�</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:΢���ź�;">�˻�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=setuserinfo"><li id="xgzl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=setpwd"><li id="xgmm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu22.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulitxl" class="fl" style="font-family:΢���ź�;">ͨѶ¼</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=txlzulist"><li id="fzgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">�������</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=txluserlist"><li id="glcy" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">�����Ա</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulicwgl" class="fl" style="font-family:΢���ź�;">�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuwyfp"><li id="wyfp" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu41.png" width="20" height="20"></div><div class="fl">��Ҫ��Ʊ</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuchongzhilog"><li id="czjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">��ֵ��¼</div></div></li></a>


                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuwdjg"><li id="wdjg" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">�ҵļ۸�</div></div></li></a>

 <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuchongzhi"><li id="wycz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu44.png" width="20" height="20"></div><div class="fl">��Ҫ��ֵ</div></div></li></a>



                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulidxjk" class="fl" style="font-family:΢���ź�;">���Ž���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekoushenqing"><li id="jksq" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">��������</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekougl"><li id="jkgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu52.png" width="20" height="20"></div><div class="fl">�������</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekoutemp"><li id="dxmb" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu53.png" width="20" height="20"></div><div class="fl">����ģ��</div></div></li></a>
                            </ul>
                        </li>

<li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span id="menulisjcll" class="fl" style="font-family:΢���ź�;margin-left:65px;">�ֻ�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <!--<a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=liuliangchongzhi"><li id="csjll" style="font-family:΢���ź�;"><div class="smallimg1"><div class="fl">���ֻ�����</div></div></li></a>-->
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=liuliangchongzhilog"><li id="dhjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="fl">�һ���¼</div></div></li></a>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>  
        </div>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="<?=XZKJURL?>/duanxination.php?action=setpwd" method="post" target="hiddeniframe">
<div id="mains">
<div id="zhglxgmm">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��<?=$yingxiaoinfo['username']?>����ϵ�绰��<?=$yingxiaoinfo['sjh']?></div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��˻�����-�޸�����</div>
        </div>
        <div class="v1">
            <div>
            	<div class="fl colorred">*</div><div class="fl v2">��������룺</div><div class="fl v3"><input class="inputtext" name="jiupwd" id="jiupwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="�����������..." /></div>
            </div>
            <div class="v8">
            	<div class="fl colorred">*</div><div class="fl v2">�������룺</div><div class="fl v4"><input id="pwd" class="inputtext" name="pwd" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="������������..." /></div>
            </div>
            <div class="v8">
            	<div class="fl colorred">*</div><div class="fl v2">ȷ�����룺</div><div class="fl v4"><input id="pwd2" class="inputtext" name="pwd2" type="password" maxlength="18" onKeyPress="this.style.color='black';" placeholder="���ظ���������������..."  onBlur="checkmm()"/></div>
                <div id="showmmno" class="fl v5" style="display:none;">�������벻һ��</div>
            </div>
            <div class="v6">
                <input class="v7" type="submit" value="" style="width:125px; height:39px;background-image:url(baima/template/images/xgwc.png); ">
            </div>
        </div>
        
    </div>
</div>
</form>
<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zhglxgmm.js" type="text/javascript"></script>


    </div>
    <div id="footer">
        <div id="copyright">
            <p>Copyright 2011 ֣�����е��ӿƼ����޹�˾ ��Ȩ���� ԥICP��09015928��</p>
            <p>����ʱ�䣺��һ������8:30-18:30���ڼ��ճ��⣩��˾��ַ��֣���н���·168��</p>
<script type="text/javascript" src="http://js.tongji.linezing.com/3594310/tongji.js"></script><noscript><a href="http://www.linezing.com"><img src="http://img.tongji.linezing.com/3594310/tongji.gif"/></a></noscript>

        </div>
    </div>
</div>
</div>

</body>
</html>