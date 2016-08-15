<!doctype html>
<html>
<head>
<title>短信服务平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="短信服务平台">
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
                                用户名：<?=$_SESSION["dl_username"]?>
                            </div>
                            <img src="baima/template/images/menutoptexthr.png" width="220" height="4">
                     
                            <div class="dxye">
                                <div class="dxyeyuan">
                                    账户余额：<span class="colorred"><?=$userinfo['dxnum']?>元</span>
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
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulidxgl" class="fl" style="font-family:微软雅黑;">短信管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=adduser"><li id="tjyh" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">添加用户</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=userlist"><li id="wdkh" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">我的客户</div></div></li></a>
<a class="menu_a_a" href="index.php?action=dxchongzhi"><li id="czdx" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">充值短信</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=dxchongzhilog"><li id="czdxjl" style="font-family:微软雅黑;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu12.png" width="20" height="20"></div><div class="fl">充值短信记录</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>
                        
                        
                        

                        
                        
                        
                        
                        
                        
                        <?php if($_SESSION["dl_islluser"]==1) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulicsjll" class="fl" style="font-family:微软雅黑;">充手机流量</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=llchongzhi"><li id="czll" style="font-family:微软雅黑;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">单个号码充值</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=llchongzhipl"><li id="plczll" style="font-family:微软雅黑;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">批量号码充值</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=llchongzhilog"><li id="czlljl" style="font-family:微软雅黑;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu52.png" width="20" height="20"></div><div class="fl">充值流量记录</div></div></li></a>
                            </ul>
                        </li>

                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulikmgl" class="fl" style="font-family:微软雅黑;">卡密管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=kmgl"><li id="kgl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">卡管理</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=kmchongzhi"><li id="kmcz" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">卡密充值</div></div></li></a>
                            </ul>
                        </li>

                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulitjjl" class="fl" style="font-family:微软雅黑;">推荐奖励</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=tuijianjj"><li id="tjjs" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">推荐介绍</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=myjiangli"><li id="wdjl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">我的奖励</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=jianglijiesuan"><li id="jljs" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">奖励结算</div></div></li></a>
                            </ul>
                        </li>
                        
                        <?php } ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:微软雅黑;">账户管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/index.php?action=setuserinfo"><li id="xgzl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">修改资料</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/index.php?action=setpwd"><li id="xgmm" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu22.png" width="20" height="20"></div><div class="fl">修改密码</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulicwgl" class="fl" style="font-family:微软雅黑;">财务管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=caiwulog"><li id="cwjl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">财务记录</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=myjiage"><li id="wdjg" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">我的价格</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=chongzhi"><li id="wycz" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">我要充值</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulilxwm" class="fl" style="font-family:微软雅黑;">联系我们</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=lxwm"><li id="lxwm" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">联系我们</div></div></li></a>
                            </ul>
                        </li>

<?php if($_SESSION["dl_uid"]==56) { ?>
  <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulizkgl" class="fl" style="font-family:微软雅黑;">制卡管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=km_create"><li id="mksckm" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">生成卡密</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=km_pilist"><li id="kmglkm" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">管理卡密</div></div></li></a>
                                <a class="menu_a_a"  href="card.php" target="_blank"><li id="kmkmcz" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">卡密充值</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>




                    </ul>
                </div>
            </div>  
        </div>





<div id="mains">
<div id="plcsjllczll">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：充手机流量-批量充值流量</div>
        </div>


<form action="liuliangationpl.php?action=addliuliangpl" method="post">
        
        <div style="margin-top:20px; margin-left:15px; height:125px;">
        	<div style="float:left; font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px;">输入号码区域：</div>
            <div style="float:left;"><textarea id="sjh" name="sjh" style="color:#666;width:590px;height:120px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:#add1fe 1px solid;" name="" maxlength="100000" onpropertychange="if(value.length>100000) value=value.substr(0,100000)" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/[^\r\n0-9]/g,'')" onafterpaste="this.value=this.value.replace(/[^\r\n0-9]/g,'')"></textarea></div>
            
        </div>
        
        <div style="margin-top:0px; margin-left:140px; height:16px; font-family:'微软雅黑'; font-size:13px; color:#F00; font-weight:bold;">
        	注：每行一个手机号码，支持文本粘贴使用。
        </div>
        <div style="margin-left:120px; margin-top:10px;">
        	<span class="cp" onClick="showdaorutxt()"><img src="baima/template/images/dxfs1.png" width="64" height="30"></span>
        </div>
        
        <div id="thetaocan" style="margin-top:0px; margin-left:25px;">
        	<div style="float:left;font-family:'微软雅黑'; font-size:15px; font-weight:bold; margin-top:4px; margin-right:75px;">流量充值套餐：</div>
            <div id="theyidong" style="float:left; width:638px; margin-left:50px;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为移动套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="10"></div>
                    	<div style="float:left;">10M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="30"></div>
                    	<div style="float:left;">30M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="70"></div>
                    	<div style="float:left;">70M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="150"></div>
                    	<div style="float:left;">150M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="500"></div>
                    	<div style="float:left;">500M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="1024"></div>
                    	<div style="float:left;">1G</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="2048"></div>
                    	<div style="float:left;">2G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="3072"></div>
                    	<div style="float:left;">3G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="4096"></div>
                    	<div style="float:left;">4G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="6144"></div>
                    	<div style="float:left;">6G</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:10px;"><input id="liuliang0" name="liuliang0" type="radio" style="cursor:pointer;" value="11264"></div>
                    	<div style="float:left;">11G</div>
                    </div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:10px; text-align:center;">
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费3元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费5元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费10元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费20元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费30元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费50元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费70元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费100元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费130元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费180元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费280元</div>
                </div>
            </div>
            <div id="theyidong" style="float:left; width:638px; margin-left:50px;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为联通套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="20"></div>
                    	<div style="float:left;">20M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="50"></div>
                    	<div style="float:left;">50M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="100"></div>
                    	<div style="float:left;">100M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="200"></div>
                    	<div style="float:left;">200M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang1" name="liuliang1" type="radio" style="cursor:pointer;" value="500"></div>
                    	<div style="float:left;">500M</div>
                    </div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:10px; text-align:center;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费3元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费6元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费10元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费15元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费30元</div>
                </div>
            </div>
            <div id="theyidong" style="float:left; width:638px; margin-left:50px;">
            	<div style="background-color:#1092d0; height:22px; border:#1092d0 1px solid; color:#FFF; text-align:center; padding:9px; font-family:'微软雅黑'; font-size:16px;">
                	当前为电信套餐
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:13px;">
                	<div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="5"></div>
                    	<div style="float:left;">5M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="10"></div>
                    	<div style="float:left;">10M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="30"></div>
                    	<div style="float:left;">30M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:7px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="50"></div>
                    	<div style="float:left;">50M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="100"></div>
                    	<div style="float:left;">100M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="200"></div>
                    	<div style="float:left;">200M</div>
                    </div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:3px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="500"></div>
                    	<div style="float:left;">500M</div>
                    </div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">
                		<div style="float:left; margin-left:13px;"><input id="liuliang2" name="liuliang2" type="radio" style="cursor:pointer;" value="1024"></div>
                    	<div style="float:left;">1G</div>
                    </div>
                </div>
                <div style="height:25px; border:#1092d0 1px solid; border-top:none; font-family:'微软雅黑'; font-size:10px; text-align:center;">
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费1元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费2元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费5元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费7元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费10元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费15元</div>
                    <div style="float:left;width:55px;height:25px; border-right:#1092d0 1px solid;">资费30元</div>
                    <div style="float:left;width:60px;height:25px; border-right:#1092d0 1px solid;">资费50元</div>
                </div>
            </div>
            
            <div id="thesure" style="padding-top:320px; padding-bottom:20px; width:131px; height:45px; margin-left:280px;">
                <input type="submit" style="width:131px;height:45px; background:url(baima/template/images/sjcllsuretraffic.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" value="">
            </div>
        </div>


</form>
        
        
        
    </div>
</div>

<span id="boxshowtxtdr" style="display:none;">
<a id="showtxtdr" href="javascript:;"></a>
<div id="dialogBgshowtxtdr" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div id="dialogshowtxtdr" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-105px 0 0 -275px;width:550px;height:210px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
<div class="dialogTopshowtxtdr">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">TXT文本导入</div>
                </div>
                <div style="margin-top:6px;">
                	<iframe name="showfzdr_daorutxt_iframe" id="showfzdr_daorutxt_iframe" src="#" width="550" height="170" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe> 
                </div>
            </div>
<div id="showtxtdrclose" style="position:absolute;margin-top:-280px;padding-left:500px" onClick="document.getElementById('boxshowtxtdr').style.display='none';">
<a href="javascript:;" class="claseDialogBtnshowtxtdr"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/csjllplczll.js" type="text/javascript" charset="utf-8"></script>

<script>
function setsendsmssjh(sjh){
sjh=sjh.replace(/,/ig,"\n"); 
document.getElementById("sjh").value=document.getElementById("sjh").value+"\n"+sjh;
document.getElementById('boxshowtxtdr').style.display="none";

}

function showdaorutxt(){
document.getElementById("showfzdr_daorutxt_iframe").src="";
document.getElementById("showfzdr_daorutxt_iframe").src="index.php?action=llchongzhipl_daorutxt";
document.getElementById('boxshowtxtdr').style.display='';
}
</script>

    </div>
    <div id="footer">
        <div id="copyright">
            <p>Copyright 2011 郑州新中电子科技有限公司 版权所有 豫ICP备09014995号</p>
            <p>工作时间：周一至周五8:30-18:30（节假日除外）公司地址：郑州市健康路168号</p>
        </div>
    </div>
</div>
</div>

</body>
</html>