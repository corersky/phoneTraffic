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


<div id="mains">
<div id="csjllczll">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã����ֻ�����-��ֵ����</div>
        </div>











<?php if(!empty($gonggaoinfo)) { ?>
        <div style="margin-top:-10px; margin-left:-25px; width:775px; height:65px; background-color:#FC6; border-bottom:1px #F00 solid;">
        	<div style="width:735px; height:40px; overflow:hidden; padding-left:20px; padding-top:10px;word-wrap: break-word;word-break: normal; font-family:'΢���ź�'; color:#F00; font-size:16px;">
        		<?=$gonggaoinfo['gonggaomsg']?>
            </div>
        </div>
<?php } ?>














<input type="hidden" id="yidongzk" value="<?=$userinfo['yidongzk']?>">
<input type="hidden" id="liantongzk" value="<?=$userinfo['liantongzk']?>">
<input type="hidden" id="dianxinzk" value="<?=$userinfo['dianxinzk']?>">

        
        <div style="margin-top:50px; margin-left:50px; height:35px;">
        	<div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px;">�������ֻ�

�ţ�</div>
            <div style="float:left;"><input id="thephonenum" type="text" name="" maxlength="11" style="color:#666;width:160px;height:25px; font-size:18px; border:#bbb 1px solid; outline:none;" onafterpaste="this.value=this.value.replace(/\D/g,'')" onKeyUp="showtraffic()"></div>




<div style="float:left; margin-left:10px; margin-top:3px; cursor:pointer;" onClick="checkphonenum()">
            	<img src="baima/template/images/txlglcyxgdgcyqd.png" width="37" height="20">
            </div>





            <div style="float:left; border:#ff6600 1px solid; background-color:#fff2c0; color:#ff6600; font-size:13px; width:130px; margin-left:30px; margin-top:-7px; line-height:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; cursor:default;">
                <div style="margin:3px;">���벻ͬ��Ӫ�̵ĺ������ʾ��ͬ���ײ�!</div>
             </div>
        </div>
        
        
        <div style="margin-top:0px; margin-left:100px; height:35px;">
        	<div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px;">�����أ�</div>
            <div id="attributiontext" style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px; display:none;"></div>
        </div>
        
        
        
        <div id="thetaocan" style="margin-top:0px; margin-left:50px; height:460px; display:none;">
        	<div style="float:left; font-family:'΢���ź�'; font-size:15px; font-weight:bold; margin-top:4px; margin-

right:75px;">������ֵ�ײͣ�</div>
            <div id="theyidong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; 

padding:9px; font-family:'΢���ź�'; font-size:16px;">
                	��ǰΪ�ƶ��ײ�
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic1" name="theydtraffic" type="radio" 

style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�3Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic2" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">30M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�5Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic3" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">70M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�10Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic4" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">150M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�20Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic5" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�30Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic6" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:77px;">�ʷ�50Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic7" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">2G</div>
                    <div style="float:left;margin-left:77px;">�ʷ�70Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic8" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">3G</div>
                    <div style="float:left;margin-left:77px;">�ʷ�100Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic9" name="theydtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">4G</div>
                    <div style="float:left;margin-left:77px;">�ʷ�130Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic10" name="theydtraffic" 

type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">6G</div>
                    <div style="float:left;margin-left:77px;">�ʷ�180Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="theydtraffic11" name="theydtraffic" 

type="radio" style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">11G</div>
                    <div style="float:left;margin-left:68px;">�ʷ�280Ԫ</div>
                </div>
            </div>
            <div id="theliantong" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; 

padding:9px; font-family:'΢���ź�'; font-size:16px;">
                	��ǰΪ��ͨ�ײ�
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic1" name="thelttraffic" type="radio" 

style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">20M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�3Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic2" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�6Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic3" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�10Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic4" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�15Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thelttraffic5" name="thelttraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�30Ԫ</div>
                </div>
            </div>
            <div id="thedianxin" style="float:left; width:320px; height:385px; display:none;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; 

padding:9px; font-family:'΢���ź�'; font-size:16px;">
                	��ǰΪ�����ײ�
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic1" name="thedxtraffic" type="radio" 

style="cursor:pointer;" checked></div>
                    <div style="float:left;margin-left:30px;">5M</div>
                    <div style="float:left;margin-left:77px;">�ʷ�1Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic2" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">10M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�2Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic3" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">30M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�5Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic4" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">50M</div>
                    <div style="float:left;margin-left:68px;">�ʷ�7Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic5" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">100M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�10Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic6" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">200M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�15Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic7" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">500M</div>
                    <div style="float:left;margin-left:60px;">�ʷ�30Ԫ</div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'΢���ź�'; font-size:13px; 

padding-top:5px;">
                	<div style="float:left; margin-left:30px;"><input id="thedxtraffic8" name="thedxtraffic" type="radio" 

style="cursor:pointer;"></div>
                    <div style="float:left;margin-left:30px;">1G</div>
                    <div style="float:left;margin-left:77px;">�ʷ�50Ԫ</div>
                </div>
            </div>
            <div id="thesure" style="padding-top:400px; width:131px; height:45px; margin-left:270px;">
                <img src="baima/template/images/sjcllsuretraffic.png" width="131" height="45" style="cursor:pointer;" 

onClick="showsure()">
            </div>
        </div>
        
        
        
    </div>
</div>

<span id="showtraffic" class="showtraffic" style="display:none;">
<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-

color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-100px 0 0 -

150px;width:300px;height:200px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-

radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:300px;">
            <div style="height:40px; background-color:#278ce4; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-

radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">��ȷ����ѡ��Ϣ</div>
            </div>
            
            <div id="mysjhtype" style="display:none;"></div>
            
            <div id="close" style="margin-top:-36px;margin-left:265px; width:30px; height:30px; cursor:pointer;" 

onClick="document.getElementById('showtraffic').style.display='none';">
                <img src="baima/template/images/openclose.png">

            </div>
            <div style="width:280px; height:150px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'΢����

��'; font-size:17px;">
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">��������ֻ��ţ�</div>
                    <div id="myphonenum" style="float:left; color:#F00;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">��ֵ�ײ�Ϊ��</div>
                    <div id="mytraffic" style="float:left; color:#F00;"></div>
<div id="mytrafficsend" style="display:none;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">���Ľ��Ϊ��</div>
                    <div id="mysmsnum" style="float:left; color:#F00;"></div>
                </div>
                <div style="width:91px; margin:0 auto; margin-top:15px; cursor:pointer;" onClick="sendliuliang()">
                	<img src="baima/template/images/sjcllsuretrafficopen.png" width="91" height="31">
                </div>
            </div>
        </div>
</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/csjllczll.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
function sendliuliang()
{
var sjh = encodeURIComponent(document.getElementById("myphonenum").innerHTML);
var liuliang = encodeURIComponent(document.getElementById("mytrafficsend").innerHTML);
var sjhtype = encodeURIComponent(document.getElementById("mysjhtype").innerHTML);
//alert(sjh+"��"+liuliang+"��"+sjhtype);
window.location.href="liuliangation.php?action=addliuliang&sjh="+sjh+"&liuliang="+liuliang+"&sjhtype="+sjhtype;
}

function showtraffic(){
if(document.getElementById("thephonenum").value.length==4)
{
var requestshowtraffic;
if(window.XMLHttpRequest){
requestshowtraffic = new XMLHttpRequest();
}else{
requestshowtraffic = new ActiveXObject("Microsoft.XMLHTTP");
}

var hd=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,4));

requestshowtraffic.open("GET","getsjhgs.php?hd="+hd,true);
requestshowtraffic.onreadystatechange=function (){
if(requestshowtraffic.readyState==4 && requestshowtraffic.status==200){

var str = eval(requestshowtraffic.responseText);

if(str=="-1")
{
//alert("�Ŷ�δ��ʶ��");
}
else if(str=="0")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="0";
}
else if(str=="1")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="1";
}
else if(str=="2")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="";

document.getElementById("mysjhtype").innerHTML="2";
}
else
{
alert("�Ŷ�ʶ�����");
}
}
}
requestshowtraffic.send(null);
}
else if(document.getElementById("thephonenum").value.length>4 && document.getElementById("thephonenum").value.length<9)
{

document.getElementById("attributiontext").text="none";
}
else if(document.getElementById("thephonenum").value.length>=9)
{ 

//alert("v");
var requestshowAttribution;
if(window.XMLHttpRequest){
requestshowAttribution = new XMLHttpRequest();
}else{
requestshowAttribution = new ActiveXObject("Microsoft.XMLHTTP");
}

var mysjh=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,11));

requestshowAttribution.open("GET","getsjhinfo.php?sjh="+mysjh,true);
requestshowAttribution.onreadystatechange=function (){
if(requestshowAttribution.readyState==4 && requestshowAttribution.status==200){
//alert(requestshowAttribution.responseText);
var str = requestshowAttribution.responseText;

document.getElementById("attributiontext").style.display="";
document.getElementById("attributiontext").innerHTML=str.split(":")[0];
}
}
requestshowAttribution.send(null);

var requestshowtraffic;
if(window.XMLHttpRequest){
requestshowtraffic = new XMLHttpRequest();
}else{
requestshowtraffic = new ActiveXObject("Microsoft.XMLHTTP");
}

var hd=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,4));

requestshowtraffic.open("GET","getsjhgs.php?hd="+hd,true);
requestshowtraffic.onreadystatechange=function (){
if(requestshowtraffic.readyState==4 && requestshowtraffic.status==200){

var str = eval(requestshowtraffic.responseText);

if(str=="-1")
{
//alert("�Ŷ�δ��ʶ��");
}
else if(str=="0")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="0";
}
else if(str=="1")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="1";
}
else if(str=="2")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="";

document.getElementById("mysjhtype").innerHTML="2";
}
else
{
alert("�Ŷ�ʶ�����");
}
}
}
requestshowtraffic.send(null);
}
else
{
document.getElementById("thetaocan").style.display="none";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="none";

document.getElementById("attributiontext").style.display="none";
document.getElementById("attributiontext").text="none";

document.getElementById("mysjhtype").innerHTML="";
}
}
function checkphonenum(){
if(document.getElementById("thephonenum").value.length>=4 && document.getElementById("thephonenum").value.length<11)
{
var requestshowtraffic;
if(window.XMLHttpRequest){
requestshowtraffic = new XMLHttpRequest();
}else{
requestshowtraffic = new ActiveXObject("Microsoft.XMLHTTP");
}

var hd=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,4));

requestshowtraffic.open("GET","getsjhgs.php?hd="+hd,true);
requestshowtraffic.onreadystatechange=function (){
if(requestshowtraffic.readyState==4 && requestshowtraffic.status==200){

var str = eval(requestshowtraffic.responseText);

if(str=="-1")
{
//alert("�Ŷ�δ��ʶ��");
}
else if(str=="0")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="0";
}
else if(str=="1")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="1";
}
else if(str=="2")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="";

document.getElementById("mysjhtype").innerHTML="2";
}
else
{
alert("�Ŷ�ʶ�����");
}
}
}
requestshowtraffic.send(null);
}
if(document.getElementById("thephonenum").value.length>=11)
{
var requestshowAttribution;
if(window.XMLHttpRequest){
requestshowAttribution = new XMLHttpRequest();
}else{
requestshowAttribution = new ActiveXObject("Microsoft.XMLHTTP");
}

var mysjh=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,11));

requestshowAttribution.open("GET","getsjhinfo.php?sjh="+mysjh,true);
requestshowAttribution.onreadystatechange=function (){
if(requestshowAttribution.readyState==4 && requestshowAttribution.status==200){

var str = requestshowAttribution.responseText;

document.getElementById("attributiontext").style.display="";
document.getElementById("attributiontext").innerHTML=str.split(":")[0];
}
}
requestshowAttribution.send(null);

var requestshowtraffic;
if(window.XMLHttpRequest){
requestshowtraffic = new XMLHttpRequest();
}else{
requestshowtraffic = new ActiveXObject("Microsoft.XMLHTTP");
}

var hd=encodeURIComponent(document.getElementById("thephonenum").value.substring(0,4));

requestshowtraffic.open("GET","getsjhgs.php?hd="+hd,true);
requestshowtraffic.onreadystatechange=function (){
if(requestshowtraffic.readyState==4 && requestshowtraffic.status==200){

var str = eval(requestshowtraffic.responseText);

if(str=="-1")
{
//alert("�Ŷ�δ��ʶ��");
}
else if(str=="0")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="0";
}
else if(str=="1")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="";
document.getElementById("thedianxin").style.display="none";

document.getElementById("mysjhtype").innerHTML="1";
}
else if(str=="2")
{
document.getElementById("thetaocan").style.display="";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="";

document.getElementById("mysjhtype").innerHTML="2";
}
else
{
alert("�Ŷ�ʶ�����");
}
}
}
requestshowtraffic.send(null);


}
else
{
document.getElementById("thetaocan").style.display="none";
document.getElementById("theyidong").style.display="none";
document.getElementById("theliantong").style.display="none";
document.getElementById("thedianxin").style.display="none";

document.getElementById("attributiontext").style.display="none";
document.getElementById("attributiontext").text="none";

document.getElementById("mysjhtype").innerHTML="";
}
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