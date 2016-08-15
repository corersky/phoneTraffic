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

<style>
#czglczdx .inputtext{color:#666;width:200px;height:30px; font-size:14px; border:#bbb 1px solid; outline:none;}
#czglczdx .inputtext2{color:#666;width:200px;height:30px; font-size:14px; border:#bbb 1px solid; outline:none;}

#showxzkh .mt{margin-top:10px;}
#showxzkh .mt2{margin-top:3px;}
#showxzkh .pageli{height:58px;}
#showxzkh .thepage{float:left; margin-top:22px; font-size:13px; margin-left:10px; color:#666;}
#showxzkh .pagechoose{border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;}
#showxzkh .pagechoose a{color:#666;}
#showxzkh .pagegoto{float:left; font-size:12px; margin-top:-1px; margin-left:5px; cursor:pointer;}
#showxzkh .pagenum{font-size:12px; margin-left:-4px; margin-right:-4px;}
#showxzkh .nowpagetext{color:#7e7e7e;width:26px;height:18px;font-size:12px;}
#showxzkh .pagego{float:left; font-size:12px; margin-left:10px; margin-top:-2px;}
#showxzkh .pageall{float:left; margin-top:22px; font-size:12px; margin-left:0px; color:#666;}
#showxzkh .pagetheall{float:left; font-size:12px; margin-top:2px;}
#showxzkh .pagetheallfont{font-size:12px;}
#showxzkh .pagelimsga{color:#299be4;}
#showxzkh .pagelia{color:#299be4;}
#showxzkh #table{
float:left;
width:428px;
text-align:left;
border:1px #81beff solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#showxzkh #mythetable{
width:430px;
margin:0 auto;
}
#showxzkh #table li{
float:left;
width:428px;
height:33px;
border-bottom:1px solid #81beff;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#showxzkh #table li.title{
width:428px;
height:20px;
line-height:16px;
font-size:14px;
cursor:default;
background-color:#cdedf8;
padding-top:5px;
}

#showxzkh #table li span.list1{
text-decoration:none;
float:left;
width:140px;
height:16px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#showxzkh #table li span.list2{
text-decoration:none;
float:left;
width:180px;
height:16px;
overflow:hidden;
cursor:pointer;
font-size:13px;
color:#09F;
}
#showxzkh #table li span.list3{
text-decoration:none;
float:left;
width:100px;
height:28px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}

</style>
<input type="hidden" id="themyzk" value="<?=$userinfo['jiage']?>">
<form action="<?=XZKJURL?>/useration.php?action=dxchongzhi" method="post" target="hiddeniframe">
<div id="mains">
<div id="czglczdx" style="margin-bottom:30px;">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：充值管理-充值短信</div>
        </div>
        <div class="v1">
            <div style="width:740px; padding-left:10px; padding-top:20px;">
                <iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

                <div style="margin-top:50px; margin-left:80px; font-family:'微软雅黑'; font-size:16px;">
                    <div>
                        <div class="fl" style="margin-left:40px;">输入用户名：</div>
                        <div class="fl" style="margin-left:22px; margin-top:-6px;"><input id="usernamenow" class="inputtext" name="username" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入用户名..." /></div>
                        
                    </div>
                    <div style="padding-top:100px;">
                        <div class="fl" style="margin-left:55px;">充值条数：</div><div class="fl" style="margin-left:22px; margin-top:-6px;"><input id="theczts" class="inputtext" name="jine" type="text"onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="10" onKeyPress="this.style.color='black';" placeholder="请输入充值条数..."/></div>
                    </div>
                    <div style="padding-top:100px; margin-left:200px; width:131px; height:45px; cursor:pointer;" onClick="showtrafficopen()">
                    	<img src="baima/template/images/sjcllsuretraffic.png" width="131" height="45">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<span id="showtraffic" class="showtraffic" style="display:none;">
<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-115px 0 0 -150px;width:300px;height:230px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:300px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">请确认所选信息</div>
            </div>
            
            <div id="mysjhtype" style="display:none;"></div>
            
            <div id="close" style="margin-top:-36px;margin-left:265px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showtraffic').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:280px; height:180px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">充值用户名：</div>
                    <div id="myphonenum" style="float:left; color:#F00;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">充值短信数为：</div>
                    <div id="mysmsnum" style="float:left; color:#F00;"></div>
                </div>
                <div style="margin-top:10px; height:20px;">
                	<div style="float:left; width:150px; overflow:hidden; text-align:right;">消耗金额为：</div>
                    <div id="mysmsyuan" style="float:left; color:#F00;"></div>
                </div>
                <div style="width:91px; margin:0 auto; margin-top:15px; cursor:pointer;">
                    <input type="submit" value="" style="width:91px; height:31px;background-image:url(baima/template/images/sjcllsuretrafficopen.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
        </div>
</div>
</span>

</form>


<span id="showxzkh" class="showxzkh" style="display:none;">
<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-250px 0 0 -225px;width:450px;height:500px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:450px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">请选择客户进行添加</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:410px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showxzkh').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:440px; height:460px; overflow:hidden; font-family:'微软雅黑'; font-size:17px;">
            	<div style="width:540px;">
                    
                    
                    
                    <div style="float:left;width:450px; height:230px;">
                        <div style="margin-top:20px;">
                            <div id="mythetable">
                                <div id="table">
                                    <ul>
                                        <li class="title">
                                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>详细信息</div></span>
                                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div></div></span>
                                        </li>
                    
                                        
                                        <div id="nowpage1" class="nowpage">
                                            
                                            <li>
                                                <!--标识： id="xxxxname1"，id="xxxx1"，id="xxxxqd1"，id="showxxxxtips1"-->
                                                <span id="xxxxname1" class="list1 mt">腾讯科技</span>
                                                <span id="xxxx1" class="list2 mt" onMouseMove="showmovexxxx(this)" onMouseOut="showoutxxxx(this)">详细信息</span>
                                                <span class="list3 mt2"><img id="xxxxqd1" src="baima/template/images/qd.png" width="52" height="28" style="cursor:pointer;" onClick="getuser(this)"></span>
                                                <div id="showxxxxtips1" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:250px; margin-left:270px; margin-top:-60px; line-height:20px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; display:none;">
                                                    <div style="margin:8px; text-align:left;">
                                                        用户名：腾讯科技<br>联系人电话:1111122222<br>联系人姓名:马化腾<br>联系人QQ:111111111<br>公司名称:腾讯控股科技<br>公司地址:深圳市南山区科技园飞亚达大厦3-10楼
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </div>
                                        
                                        <li style="height:58px;">
                                        
                                            <div class="thepage">
                                                <span class="pagechoose"><a href=""> 首&nbsp;&nbsp;页 </a></span>&nbsp;
                                                <span class="pagechoose"><a href=""> 上一页 </a></span>&nbsp;
                                                <span class="pagechoose"><a href=""> 下一页 </a></span>&nbsp;
                                                <span class="pagechoose"><a href=""> 尾&nbsp;&nbsp;页 </a></span>&nbsp;
                                            </div>
                                            <div class="pageall">
                                                <div class="pagetheall">
                                                    共<span class="pagetheallfont">1/10</span>页
                                                </div>
                                                
                                                <div class="pagego">
                                                    <div class="fl">
                                                    第<span class="pagenum">
                                                        <input class="nowpagetext" name="" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
                                                    </span>页
                                                    </div>
                                                    <div class="pagegoto">
                                                        <input type="button" value="" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </li>
                                        
                                    </ul>
                                    <ul style="display:none;">
                                        <li class="title">
                                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>用户名</div></span>
                                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>详细信息</div></span>
                                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div></div></span>
                                        </li>
                    
                                        
                                        <div id="nowpage1" class="nowpage">
                                            
                                            <li style="height:400px;">
                                            
                                                <div style="margin-top:160px; font-size:14px; font-weight:bold;">
                                                    您搜索的号码<span style="color:#F00;">不存在</span>，请核对后重新搜索！
                                                </div>
                                                
                                            </li>
                                            
                                        </div>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
        </div>
</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxglczdx.js" type="text/javascript"></script>




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