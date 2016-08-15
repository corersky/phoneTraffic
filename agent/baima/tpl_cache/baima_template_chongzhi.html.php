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
<!--
                                <a class="menu_a_a" href="index.php?action=llchongzhipl"><li id="plczll" style="font-family:微软雅黑;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">批量号码充值</div></div></li></a>
-->
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
<div id="cwglwycz">
        
        
<div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：财务管理-我要充值</div>
        </div>



        <div class="colorred" style="font-size:13px; font-weight:bold; margin-top:30px;">
        	注：充值余额长期有效，没有使用时间限制，单次充值最少500元
        </div>
        <input type="hidden" id="userdxjiage" value="0.2"/>
        <div class="v1">
        	<div class="fl v2" style="font-family:'微软雅黑';">
            	<div class="fl v3">请选择支付方式：&nbsp;</div>
                <div class="fl" style="margin-left:-2px;">
                	<select id="vv" class="v4" name="" onChange="showstate()">
                        <option value="0">网银/支付宝充值</option>
                        <option value="1">打款至银行账户</option>
                    </select>
                </div>
            </div>
            <div id="statetext1" class="fl v5">
            	<span><img src="baima/template/images/wycztips1.png" width="473" height="60"></span>
            </div>
            <div id="statetext2" class="fl v5" style=" display:none;">
            	<span><img src="baima/template/images/wycztips2.png" width="473" height="60"></span>
            </div>
        </div>
        
        
        <form action="dxchongzhi.php?action=smsnumchongzhi" method="post" target="_blank">
        <div id="state1" class="v6">
        	<div class="v8" style="font-family:'微软雅黑';">
            	<div class="fl v3">您要充值的金额：&nbsp;</div>
                <div class="fl" style="margin-left:-2px;">
                	<input id="myyuan" name="chongzhipic" type="text" style="color:#7e7e7e;width:150px;height:28px; font-size:14px; font-weight:bold;border:#add1fe 1px solid;" maxlength="20" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'');" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="请输入充值金额..."/>
                </div>
                <div class="fl v3">&nbsp;元</div>
                <div id="texttips" class="fl v3" style="color:#F00; font-size:12px;">&nbsp;（请输入整数金额）</div>
            </div>
            <div class="v9">
            	<input type="submit" value="" style="width:95px; height:37px;background-image:url(baima/template/images/wyczqcz.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
            </div>
        </div>
        </form>
        
        
        <div id="state2" class="v7" style="display:none;">
            <div id="mythetable">
                <div id="table" class="v6">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>账号</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>账户名</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>开户行</div></span>
                        </li>
                        
                        <li>
                            
                            <span class="list1 mt">9380 7002 0109 1089 41</span>
                            <span class="list2 mt">郑州新中电子科技有限公司</span>
                            <span class="list3 mt">郑州银行股份有限公司大石桥支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6227 0024 3340 0005 579</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国建设银行郑州淮河路支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6222 0217 0200 6661 599</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国工商银行郑州金水路支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6228 4807 1048 1981 417</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国农业银行郑州城北支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6221 8849 1000 8445 964</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国邮政储蓄银行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6217 8580 0001 5066 639</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">中国银行郑州棉纺东路支行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6214 6231 4300 0044 830</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">广发银行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6230 5800 0000 7946 218</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">平安银行</span>
                            
                        </li>
                        <li>
                            
                            <span class="list1 mt">6226 6822 0022 6827</span>
                            <span class="list2 mt">张骞</span>
                            <span class="list3 mt">光大银行</span>
                            
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/cwglwycz.js" type="text/javascript"></script>


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