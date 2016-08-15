<!doctype html>
<html>
<head>
<title>短信服务平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="短信服务平台">
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
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:微软雅黑;">账户管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=setpwd"><li id="xgmm" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">修改密码</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=setuserinfo"><li id="xgzl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">修改资料</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menuliyhgl" class="fl" style="font-family:微软雅黑;">用户管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=adduser"><li id="tjxyh" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">添加新用户</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=userlist"><li id="wdkh" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">我的客户</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=jiekouuser"><li id="jkyh" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">接囗用户</div></div></li></a>
                            </ul>
                        </li>

<?php if(!empty($_SESSION["kefu_qx_ddgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menuliddgl" class="fl" style="font-family:微软雅黑;">订单管理</span>
                            </a>

                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=orderweishen"><li id="wshdd" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">未审核订单</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=orderlist"><li id="ycldd" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">已处理订单</div></div></li></a>


 <a class="menu_a_a" href="index.php?action=liuliangorderlist"><li id="dhlldd" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">兑换流量订单</div></div></li></a>

                            </ul>
                        </li>
<?php } ?>

<?php if(!empty($_SESSION["kefu_qx_mbgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulimbgl" class="fl" style="font-family:微软雅黑;">模板管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=tempweishen"><li id="wshmb" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu3.png" width="20" height="20"></div><div class="fl">未审核模板</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=templist"><li id="yshmb" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu3.png" width="20" height="20"></div><div class="fl">已审核模板</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>

<?php if(!empty($_SESSION["kefu_qx_cwgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulizwgl" class="fl" style="font-family:微软雅黑;">账务管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=dxchongzhilog"><li id="czjl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">充值记录</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=dxchongzhi"><li id="cz" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">充值</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=fapiaolog"><li id="fpgl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">发票管理</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>



<?php if(!empty($_SESSION["kefu_qx_dlsgl"])) { ?>

<li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulidlsgl" class="fl" style="font-family:微软雅黑;">代理商管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=daili_adduser"><li id="tjdls" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">添加代理商</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_userlist"><li id="gldls" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">管理代理商</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_xfjl"><li id="xfjl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">消费记录</div></div></li></a>
<a class="menu_a_a" href="index.php?action=daili_czlog"><li id="czjl2" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">充值记录</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_yaoqinggl"><li id="tjjs" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">推荐结算</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=llweichuliorder"><li id="wcldd" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">未处理订单</div></div></li></a>
                            </ul>
                        </li>
 <?php } ?>
 
 
 
 <?php if(!empty($_SESSION["kefu_qx_lltdgl"])) { ?>

  <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu7.png" width="25" height="25"></div></span><span id="menulilltjgl" class="fl" style="font-family:微软雅黑;">流量通道管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=liuliangcztj"><li id="cztj" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">充值统计</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=liuliangxftj2"><li id="xftj" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">消费统计</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=lltongdaolist"><li id="lltdgl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">流量通道管理</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=lltongdaolistsw"><li id="snllgl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">省内流量管理</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=kefuczlog"><li id="czrz" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">操作日志</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=gonggaolist"><li id="llgg" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">流量公告</div></div></li></a>

<a class="menu_a_a" href="index.php?action=addcytkuser"><li id="addcyff" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">添加立即返还</div></div></li></a>
<a class="menu_a_a" href="index.php?action=whdq"><li id="whdq" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">维护地区</div></div></li></a>
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
#lltjlltdgl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjlltdgl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext4{width:70px;height:24px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext5{width:70px;height:20px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .v1{}
#lltjlltdgl .v2{}
#lltjlltdgl .v3{}
#lltjlltdgl .v4{}
#lltjlltdgl .v5{}
#lltjlltdgl .v6{}
#lltjlltdgl .v7{}
#lltjlltdgl .v8{}
#lltjlltdgl .mt{margin-top:12px;}
#lltjlltdgl .mt2{margin-top:30px;}
#lltjlltdgl .mt3{margin-top:8px;}
#lltjlltdgl #table{
float:left;
width:740px;
text-align:left;
border:1px #d8d8d8 solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#lltjlltdgl #mythetable{
width:740px;
margin:0 auto;
}
#lltjlltdgl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjlltdgl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjlltdgl #table li span.list1{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjlltdgl #table li span.list2{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list3{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list4{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list5{
text-decoration:none;
float:left;
width:220px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<script>
function addusersettt(){
var  addusersetusername=document.getElementById("addusersetusername").value;
var  addusersetttyd=document.getElementById("addusersetttyd").value;
var  addusersetttlt=document.getElementById("addusersetttlt").value;
var  addusersetttdx=document.getElementById("addusersetttdx").value;
   
var url="<?=XZKJURL?>/dailiation.php?action=adduserlltd&addusersetusername="+addusersetusername+"&addusersetttyd="+addusersetttyd+"&addusersetttlt="+addusersetttlt+"&addusersetttdx="+addusersetttdx;
hiddeniframe.location.href=url;
}

function setusersettt(uid){
var  setuserllttyd=document.getElementById("setuserllttyd"+uid).value;
var  setuserllttlt=document.getElementById("setuserllttlt"+uid).value;
var  setuserllttdx=document.getElementById("setuserllttdx"+uid).value;
   
var url="<?=XZKJURL?>/dailiation.php?action=setuserlltd&setuserid="+uid+"&setuserllttyd="+setuserllttyd+"&setuserllttlt="+setuserllttlt+"&setuserllttdx="+setuserllttdx;
hiddeniframe.location.href=url;
}

function delusersettt(uid){
var url="<?=XZKJURL?>/dailiation.php?action=deluserlltd&setuserid="+uid;
hiddeniframe.location.href=url;
}

function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
<div id="lltjlltdgl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">流量通道管理</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul style="height:170px;">
                            
                            <li style="height:40px; background-color:#288ce2; border:#288ce2 1px solid; text-align:left;">
                            	<div style="color:#FFF; font-family:'微软雅黑'; font-size:16px; margin-left:20px; margin-top:8px;">
                                	代理商通道管理
                                </div>
                                <div style="float:right; width:128px; height:23px; margin-top:-20px; margin-right:20px; cursor:pointer;" onClick="document.getElementById('showgllltd').style.display='';">
                                	<img src="baima/template/images/lltjlltdglgllltd.png" width="128" height="23">
                                </div>
                            </li>
                            
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>代理商</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>移动通道</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>联通通道</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>电信通道</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>修改通道</div></span>
                            </li>
                            
                       <form action="<?=XZKJURL?>/dailiation.php?action=setmrlltongdao" method="post" target="hiddeniframe">
                            <li style="height:80px;">
                                
                                <span class="list1 mt2" style="font-family:'微软雅黑'; font-size:16px; height:30px;">全部代理</span>
                                <span class="list2 mt2" style="font-family:'微软雅黑'; font-size:16px; height:30px;">
                                    <div id="theyd1txt">通道<?=$ydtongdaoid?></div>
                                    <div id="theyd1select" style="display:none;">
                                    	<select name="yddefaulttongdaoid" class="inputtext4">
<?php if(is_array($tongdaoarr)) { foreach($tongdaoarr as $value) { ?>
                                            <option value="<?=$value['id']?>" <?php if($ydtongdaoid==$value['id']) { ?>selected="selected"<?php } ?>><?=$value['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                </span>
                                <span class="list3 mt2" style="font-family:'微软雅黑'; font-size:16px; height:30px;">
                                	<div id="theyd2txt">通道<?=$lttongdaoid?></div>
                                    <div id="theyd2select" style="display:none;">
                                    	<select name="ltdefaulttongdaoid" class="inputtext4">
                                           <?php if(is_array($tongdaoarr)) { foreach($tongdaoarr as $value) { ?>
                                            <option value="<?=$value['id']?>" <?php if($lttongdaoid==$value['id']) { ?>selected="selected"<?php } ?>><?=$value['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                </span>
                                <span class="list4 mt2" style="font-family:'微软雅黑'; font-size:16px; height:30px;">
                                	<div id="theyd3txt">通道<?=$dxtongdaoid?></div>
                                    <div id="theyd3select" style="display:none;">
                                    	<select name="dxdefaulttongdaoid" class="inputtext4">
                                            <?php if(is_array($tongdaoarr)) { foreach($tongdaoarr as $value) { ?>
                                            <option value="<?=$value['id']?>" <?php if($dxtongdaoid==$value['id']) { ?>selected="selected"<?php } ?>><?=$value['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                </span>
                                <span class="list5 mt2">
                                    <div id="thexg1" style="cursor:pointer;" onClick="xg1()">
                                        <img src="baima/template/images/lltjlltdglxg.png" width="80" height="29">
                                    </div>
                                    <div id="thebc1" style="cursor:pointer;">
                                        <input type="submit" value="" style="width:80px;height:29px; background:url(baima/template/images/lltjlltdglbc.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="">
                                    </div>
                                </span>
                                
                            </li>
                            </form>
                        </ul>



                        
                        
                        
                      
                        <ul style="margin-top:20px;">
                            
                            <li style="height:40px; background-color:#288ce2; border:#288ce2 1px solid; margin:-1px 0 0 -1px; text-align:left;">
                            	<div style="color:#FFF; font-family:'微软雅黑'; font-size:16px; margin-left:20px; margin-top:8px;">
                                	单个商通道管理
                                </div>
                            </li>
                            
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;"> 
                                    <div class="fl"><input  id="addusersetusername" class="inputtext" type="text" name="" placeholder="在此输入代理商添加..."></div>
                                </div>
                                <div id="czbtn" style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div id="myaddydselect" class="fl" style="margin-left:45px; margin-top:2px;">
                                    	<select name="" id="addusersetttyd" class="inputtext4">
                                            <?php if(is_array($alltongdaoarr)) { foreach($alltongdaoarr as $value) { ?>
                                            <option value="<?=$value['id']?>"><?=$value['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                    <div id="myaddltselect" class="fl" style="margin-left:45px; margin-top:2px;">
                                    	<select name="" id="addusersetttlt" class="inputtext4">
                                            <?php if(is_array($alltongdaoarr)) { foreach($alltongdaoarr as $value) { ?>
                                            <option value="<?=$value['id']?>"><?=$value['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                    <div id="myadddxselect" class="fl" style="margin-left:45px; margin-top:2px;">
                                    	<select name="" id="addusersetttdx" class="inputtext4">
                                           <?php if(is_array($alltongdaoarr)) { foreach($alltongdaoarr as $value) { ?>
                                            <option value="<?=$value['id']?>"><?=$value['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-left:50px;margin-top:2px;"><input type="button" onclick="addusersettt()" style="width:64px;height:23px; background:url(baima/template/images/lltjlltdglbc2.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name=""></div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>代理商</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>移动通道</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>联通通道</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>电信通道</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>管理通道</div></span>
                            </li>
                            
                             <?php if(is_array($userarr)) { foreach($userarr as $key=>$value) { ?>
                            <li style="height:40px;">
                                
                                <span class="list1 mt"><?=$value['username']?></span>
                                <span class="list2 mt">
                                	<!--标识-->
                                	<div id="myydtxt<?=$key?>">通道<?=$value['lltdbdyd']?></div>
                                    <!--标识-->
                                    <div id="myydselect<?=$key?>" style="display:none;">
                                    	<select name="" id="setuserllttyd<?=$value['id']?>" class="inputtext5">
                                             <?php if(is_array($alltongdaoarr)) { foreach($alltongdaoarr as $val) { ?>
                                            <option value="<?=$val['id']?>" <?php if($value['lltdbdyd']==$val['id']) { ?>selected="selected"<?php } ?>><?=$val['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                </span>
                                <span class="list3 mt">
                                	<!--标识-->
                                	<div id="mylttxt<?=$key?>">通道<?=$value['lltdbdlt']?></div>
                                    <!--标识-->
                                    <div id="myltselect<?=$key?>" style="display:none;">
                                    	<select name="" id="setuserllttlt<?=$value['id']?>" class="inputtext5">
                                            <?php if(is_array($alltongdaoarr)) { foreach($alltongdaoarr as $val) { ?>
                                            <option value="<?=$val['id']?>" <?php if($value['lltdbdlt']==$val['id']) { ?>selected="selected"<?php } ?>><?=$val['title']?></option>
<?php } } ?>
                                        </select>
                                    </div> 
                                </span>
                                <span class="list4 mt">
                                	<!--标识-->
                                	<div id="mydxtxt<?=$key?>">通道<?=$value['lltdbddx']?></div>
                                    <!--标识-->
                                    <div id="mydxselect<?=$key?>" style="display:none;">
                                    	<select name="" id="setuserllttdx<?=$value['id']?>" class="inputtext5">
                                              <?php if(is_array($alltongdaoarr)) { foreach($alltongdaoarr as $val) { ?>
                                            <option value="<?=$val['id']?>" <?php if($value['lltdbddx']==$val['id']) { ?>selected="selected"<?php } ?>><?=$val['title']?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                </span>
                                <span class="list5 mt3">
                                	<!--标识-->
                                	<div id="myxg<?=$key?>" style="float:left; margin-left:30px; cursor:pointer;" onClick="xg2(this)">
                                		<img src="baima/template/images/lltjlltdglxg2.png" width="64" height="23">
                                    </div>
                                    <!--标识-->
                                    <div id="mybc<?=$key?>" style="float:left; margin-left:30px; display:none;">
                                    	<input type="button" style="width:64px;height:23px; background:url(baima/template/images/lltjlltdglbc2.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="setusersettt('<?=$value['id']?>')">
                                    </div>
                                    <div id="mysc" style="float:left; margin-left:30px;">
                                    	<input type="button" style="width:64px;height:23px; background:url(baima/template/images/lltjlltdglsc2.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="delusersettt('<?=$value['id']?>')">
                                    </div>
                                </span>
                                
                            </li>
                             <?php } } ?>
 
                            
                            <li style="height:58px;">
                            
                               <div class="thepage">
                                    <span class="pagechoose"><?=$fenarr['sy']?></span>&nbsp;
<span class="pagechoose"><?=$fenarr['shangy']?></span>&nbsp;
<span class="pagechoose"><?=$fenarr['xiay']?></span>&nbsp;
<span class="pagechoose"><?=$fenarr['weiy']?></span>&nbsp;
                                </div>
                                <div class="pageall">
                                    <div class="pagetheall">
                                        共<span class="pagetheallfont"><?=$page?>/<?=$zpage?></span>页
                                    </div>
                                    
                                    <div class="pagego">
                                        <div class="fl">
                                        第<span class="pagenum">
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>页
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('<?=$url?>');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                            
                        </ul>
                       
                        
                        
                        
                    </div>
                </div>
            </div>
            
            <div id="msgno" style="display:none;">
                <li style="height:300px;">
                
                    <div style="margin-top:140px; margin-left:300px; font-size:14px; font-weight:bold;">
                        <div class="fl">
                            暂无发票管理记录
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showgllltd" class="showgllltd" style="display:none;">
<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-275px 0 0 -275px;width:550px;height:560px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">流量通道管理</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showgllltd').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:550px; height:500px; overflow:hidden; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <iframe name="showck" src="index.php?action=lltongdaolist_list" width="550" height="510" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe>
            </div>
        </div>
</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjlltdgl.js" charset="utf-8" type="text/javascript"></script>




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