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
<script>
function setsjh(){
 var  sjh=document.getElementById("userinfo_sjh").value;
 if(sjh==""){
 	alert("��д��Ϣ����Ϊ��!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&sjh='+sjh;
}

function setlxrxm(){
 var  lxrxm=document.getElementById("lxrxm").value;
 if(lxrxm==""){
 	alert("��д��Ϣ����Ϊ��!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&lxrxm='+lxrxm;
}

function setlxrqq(){
 var  lxrqq=document.getElementById("lxrqq").value;
 if(lxrqq==""){
 	alert("��д��Ϣ����Ϊ��!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&lxrqq='+lxrqq;
}

function setgsmc(){
 var  gsmc=document.getElementById("gsmc").value;
 if(gsmc==""){
 	alert("��д��Ϣ����Ϊ��!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&gsmc='+gsmc;
}

function setdizhi(){
 var  dizhi=document.getElementById("dizhi").value;
 if(dizhi==""){
 	alert("��д��Ϣ����Ϊ��!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&dizhi='+dizhi;
}


function setqianming(){
 var  qianming=document.getElementById("qianming").value;
 if(qianming==""){
 	alert("��д��Ϣ����Ϊ��!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&qianming='+qianming;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
<div id="zhglxgzl">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��˻�����-�޸�����</div>
        </div>
        <div class="v1" style="background:url(baima/template/images/xgzlbg.png) no-repeat;">
            <div class="v2" >
            	�û�����<span class="v3" ><?=$_SESSION["dl_username"]?></span>
            </div>
            <div class="v4" style="position:absolute; font-family:'΢���ź�'; font-size:16px; margin-top:28px; padding-left:75px; width:625px; z-index:6;">
            	��ϵ�˵绰��
                <span id="lxrdh1" class="v3"><?=$userinfo['sjh']?></span><span id="lxrdh2" style="display:none;"><input id="userinfo_sjh" type="text" style="width:120px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="�������޸ĵĵ绰" /></span>
                <span class="v10" >��ע�����ֻ���Ϊ�һ�����Ψһ��ʽ��</span>
                <span id="lxrdhbtn1" class="fr v11" onClick="lxrdh()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrdhbtn2"  class="fr v11" style="display:none;"><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setsjh()"></span>
            </div>
            <div class="v5" style="position:absolute; font-family:'΢���ź�'; font-size:16px; margin-top:80px; padding-left:75px; width:625px; z-index:5;">
            	��ϵ��������
                <span id="lxrxm1" class="v3"><?=$userinfo['lxrxm']?></span><span id="lxrxm2" style="display:none;"><input id="lxrxm" type="text" style="width:143px; height:25px;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�������޸ĵ�����" /></span>
                <span id="lxrxmbtn1" class="fr v11" onClick="lxrxm()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrxmbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setlxrxm()"></span>
            </div>
            <div class="v6" style="position:absolute; font-family:'΢���ź�'; font-size:16px; margin-top:134px; padding-left:75px; width:625px; z-index:4;">
            	��ϵ��QQ��
                <span id="lxrqq1" class="v3"><?=$userinfo['lxrqq']?></span><span id="lxrqq2" style="display:none;"><input id="lxrqq" type="text" style="width:148px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="�������޸ĵ�QQ����" /></span>
                <span id="lxrqqbtn1" class="fr v11" onClick="lxrqq()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrqqbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setlxrqq()"></span>
            </div>
            <div class="v7" style="position:absolute; font-family:'΢���ź�'; font-size:16px; padding-top:188px; padding-left:75px; width:625px; z-index:3;">
            	��˾���ƣ�
                <span id="gsmc1" class="v3"><?=$userinfo['gsmc']?></span><span id="gsmc2" style="display:none;"><input id="gsmc" type="text" style="width:157px; height:25px;" maxlength="100" onKeyPress="this.style.color='black';" placeholder="�������޸ĵĹ�˾����" /></span>
                <span id="gsmcbtn1" class="fr v11" onClick="gsmc()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsmcbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setgsmc()"></span>
            </div>
            <div class="v8" style="position:absolute; font-family:'΢���ź�'; font-size:16px; padding-top:240px; padding-left:75px; width:625px; z-index:2;">
            	��˾��ַ��
                <span id="gsdz1" class="v3"><?=$userinfo['dizhi']?></span><span id="gsdz2" style="display:none;"><input id="dizhi" type="text" style="width:157px; height:25px;" maxlength="500" onKeyPress="this.style.color='black';" placeholder="�������޸ĵĹ�˾��ַ" /></span>
                <span id="gsdzbtn1" class="fr v11" onClick="gsdz()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsdzbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setdizhi()"></span>
            </div>
            <div class="v9" style="position:absolute; font-family:'΢���ź�'; font-size:16px; padding-top:295px; padding-left:75px; width:625px; z-index:1;">
            	ע��ʱ�䣺
                <span class="v3"><?=$createtime?></span>
            </div>
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zhglxgzl.js" type="text/javascript"></script>

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