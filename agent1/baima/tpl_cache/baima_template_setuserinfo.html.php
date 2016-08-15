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
<script>
function setsjh(){
 var  sjh=document.getElementById("userinfo_sjh").value;
 if(sjh==""){
 	alert("填写信息不能为空!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&sjh='+sjh;
}

function setlxrxm(){
 var  lxrxm=document.getElementById("lxrxm").value;
 if(lxrxm==""){
 	alert("填写信息不能为空!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&lxrxm='+lxrxm;
}

function setlxrqq(){
 var  lxrqq=document.getElementById("lxrqq").value;
 if(lxrqq==""){
 	alert("填写信息不能为空!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&lxrqq='+lxrqq;
}

function setgsmc(){
 var  gsmc=document.getElementById("gsmc").value;
 if(gsmc==""){
 	alert("填写信息不能为空!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&gsmc='+gsmc;
}

function setdizhi(){
 var  dizhi=document.getElementById("dizhi").value;
 if(dizhi==""){
 	alert("填写信息不能为空!");
return false;
 }
hiddeniframe.location.href='<?=XZKJURL?>/duanxination.php?action=setuserinfo&dizhi='+dizhi;
}


function setqianming(){
 var  qianming=document.getElementById("qianming").value;
 if(qianming==""){
 	alert("填写信息不能为空!");
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
            <div class="fl kfsitetipstext">当前位置：账户管理-修改资料</div>
        </div>
        <div class="v1" style="background:url(baima/template/images/xgzlbg.png) no-repeat;">
            <div class="v2" >
            	用户名：<span class="v3" ><?=$_SESSION["dl_username"]?></span>
            </div>
            <div class="v4" style="position:absolute; font-family:'微软雅黑'; font-size:16px; margin-top:28px; padding-left:75px; width:625px; z-index:6;">
            	联系人电话：
                <span id="lxrdh1" class="v3"><?=$userinfo['sjh']?></span><span id="lxrdh2" style="display:none;"><input id="userinfo_sjh" type="text" style="width:120px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入修改的电话" /></span>
                <span class="v10" >（注：此手机号为找回密码唯一方式）</span>
                <span id="lxrdhbtn1" class="fr v11" onClick="lxrdh()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrdhbtn2"  class="fr v11" style="display:none;"><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setsjh()"></span>
            </div>
            <div class="v5" style="position:absolute; font-family:'微软雅黑'; font-size:16px; margin-top:80px; padding-left:75px; width:625px; z-index:5;">
            	联系人姓名：
                <span id="lxrxm1" class="v3"><?=$userinfo['lxrxm']?></span><span id="lxrxm2" style="display:none;"><input id="lxrxm" type="text" style="width:143px; height:25px;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入修改的姓名" /></span>
                <span id="lxrxmbtn1" class="fr v11" onClick="lxrxm()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrxmbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setlxrxm()"></span>
            </div>
            <div class="v6" style="position:absolute; font-family:'微软雅黑'; font-size:16px; margin-top:134px; padding-left:75px; width:625px; z-index:4;">
            	联系人QQ：
                <span id="lxrqq1" class="v3"><?=$userinfo['lxrqq']?></span><span id="lxrqq2" style="display:none;"><input id="lxrqq" type="text" style="width:148px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入修改的QQ号码" /></span>
                <span id="lxrqqbtn1" class="fr v11" onClick="lxrqq()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrqqbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setlxrqq()"></span>
            </div>
            <div class="v7" style="position:absolute; font-family:'微软雅黑'; font-size:16px; padding-top:188px; padding-left:75px; width:625px; z-index:3;">
            	公司名称：
                <span id="gsmc1" class="v3"><?=$userinfo['gsmc']?></span><span id="gsmc2" style="display:none;"><input id="gsmc" type="text" style="width:157px; height:25px;" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入修改的公司名称" /></span>
                <span id="gsmcbtn1" class="fr v11" onClick="gsmc()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsmcbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setgsmc()"></span>
            </div>
            <div class="v8" style="position:absolute; font-family:'微软雅黑'; font-size:16px; padding-top:240px; padding-left:75px; width:625px; z-index:2;">
            	公司地址：
                <span id="gsdz1" class="v3"><?=$userinfo['dizhi']?></span><span id="gsdz2" style="display:none;"><input id="dizhi" type="text" style="width:157px; height:25px;" maxlength="500" onKeyPress="this.style.color='black';" placeholder="请输入修改的公司地址" /></span>
                <span id="gsdzbtn1" class="fr v11" onClick="gsdz()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsdzbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setdizhi()"></span>
            </div>
            <div class="v9" style="position:absolute; font-family:'微软雅黑'; font-size:16px; padding-top:295px; padding-left:75px; width:625px; z-index:1;">
            	注册时间：
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
            <p>Copyright 2011 郑州新中电子科技有限公司 版权所有 豫ICP备09014995号</p>
            <p>工作时间：周一至周五8:30-18:30（节假日除外）公司地址：郑州市健康路168号</p>
        </div>
    </div>
</div>
</div>

</body>
</html>