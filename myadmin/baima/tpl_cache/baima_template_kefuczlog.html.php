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
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjczrz .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-

radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjczrz .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; 

font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjczrz .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; 

font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjczrz .v1{}
#lltjczrz .v2{}
#lltjczrz .v3{}
#lltjczrz .v4{}
#lltjczrz .v5{}
#lltjczrz .v6{}
#lltjczrz .v7{}
#lltjczrz .v8{}
#lltjczrz .mt{margin-top:12px;}
#lltjczrz #table{
float:left;
width:740px;
text-align:left;
border:1px #d8d8d8 solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#lltjczrz #mythetable{
width:740px;
margin:0 auto;
}
#lltjczrz #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjczrz #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjczrz #table li span.list1{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjczrz #table li span.list2{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjczrz #table li span.list3{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjczrz #table li span.list4{
text-decoration:none;
float:left;
width:100px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjczrz #table li span.list5{
text-decoration:none;
float:left;
width:200px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
white-space:nowrap;
}
#lltjczrz #table li span.list6{
text-decoration:none;
float:left;
width:140px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<script>
function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}

function soso(){
var  czuid=document.getElementById("czuid").value;

var  sosom=document.getElementById("sosom").value;
var  sosoy=document.getElementById("sosoy").value;
var  cztype=document.getElementById("cztype").value;
 var  sosod=document.getElementById("sosod").value;
   
var url="<?=XZKJURL?>"+"/index.php?action=kefuczlog&czuid="+czuid+"&sosom="+sosom+"&sosoy="+sosoy+"&cztype="+cztype+"&sosod="+sosod;
window.location.href=url;
}
</script>
<div id="mains">
<div id="lltjczrz" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; 

font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;

-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" 

width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; 

font-weight:bold;">操作日志</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -

1px;">
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; 

margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:30px;">操作类型：</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" id="cztype" onchange="soso()">
                                            <option value="0">全部</option>
<option value="500" <?php if($cztype==500) { ?>selected="selected"<?php } ?>>修改价格</option>
<option value="1" <?php if($cztype==1) { ?>selected="selected"<?php } ?>>充值</option>
<option value="2" <?php if($cztype==2) { ?>selected="selected"<?php } ?>>新增代理</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; 

margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">操作人：</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" id="czuid" onchange="soso()">
                                            <option value="0">全部</option>
<option value="-1" <?php if($czuid==-1) { ?>selected="selected"<?php } ?>>总后台</option>
<?php if(is_array($fuwuzyarr)) { foreach($fuwuzyarr as $key=>$value) { ?>
<option value="<?=$key?>" <?php if($cztype==$key) { ?>selected="selected"<?php } ?>><?=$value?></option>
<?php } } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div style="font-size:15px; font-family:'微软雅黑'; font-weight:bold; margin-top:6px; 

margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:30px;">操作时间：</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3" id="sosoy" onchange="soso()">
                                            <option value="2015" <?php if($sosoy==2015) { ?>selected="selected"<?php } ?>>2015</option>
                                            <option value="2016" <?php if($sosoy==2016) { ?>selected="selected"<?php } ?>>2016</option>
                                            <option value="2017" <?php if($sosoy==2017) { ?>selected="selected"<?php } ?>>2017</option>
<option value="2018" <?php if($sosoy==2018) { ?>selected="selected"<?php } ?>>2018</option>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">年&nbsp;&nbsp;</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3"  id="sosom" onchange="soso()">
                                            <option value="1" <?php if($sosom==1) { ?>selected="selected"<?php } ?>>1</option>
                                            <option value="2" <?php if($sosom==2) { ?>selected="selected"<?php } ?>>2</option>
                                            <option value="3" <?php if($sosom==3) { ?>selected="selected"<?php } ?>>3</option>
                                            <option value="4" <?php if($sosom==4) { ?>selected="selected"<?php } ?>>4</option>
                                            <option value="5" <?php if($sosom==5) { ?>selected="selected"<?php } ?>>5</option>
                                            <option value="6" <?php if($sosom==6) { ?>selected="selected"<?php } ?>>6</option>
                                            <option value="7" <?php if($sosom==7) { ?>selected="selected"<?php } ?>>7</option>
                                            <option value="8" <?php if($sosom==8) { ?>selected="selected"<?php } ?>>8</option>
                                            <option value="9" <?php if($sosom==9) { ?>selected="selected"<?php } ?>>9</option>
                                            <option value="10" <?php if($sosom==10) { ?>selected="selected"<?php } ?>>10</option>
                                            <option value="11" <?php if($sosom==11) { ?>selected="selected"<?php } ?>>11</option>
                                            <option value="12" <?php if($sosom==12) { ?>selected="selected"<?php } ?>>12</option>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">月&nbsp;&nbsp;</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3" id="sosod" onchange="soso()">

                                            <option value="1" <?php if($sosod==1) { ?>selected="selected"<?php } ?>>1</option>
                                            <option value="2" <?php if($sosod==2) { ?>selected="selected"<?php } ?>>2</option>
                                            <option value="3" <?php if($sosod==3) { ?>selected="selected"<?php } ?>>3</option>
                                            <option value="4" <?php if($sosod==4) { ?>selected="selected"<?php } ?>>4</option>
                                            <option value="5" <?php if($sosod==5) { ?>selected="selected"<?php } ?>>5</option>
                                            <option value="6" <?php if($sosod==6) { ?>selected="selected"<?php } ?>>6</option>
                                            <option value="7" <?php if($sosod==7) { ?>selected="selected"<?php } ?>>7</option>
                                            <option value="8" <?php if($sosod==8) { ?>selected="selected"<?php } ?>>8</option>
                                            <option value="9" <?php if($sosod==9) { ?>selected="selected"<?php } ?>>9</option>
                                            <option value="10" <?php if($sosod==10) { ?>selected="selected"<?php } ?>>10</option>
                                            <option value="11" <?php if($sosod==11) { ?>selected="selected"<?php } ?>>11</option>
                                            <option value="12" <?php if($sosod==12) { ?>selected="selected"<?php } ?>>12</option>
                                            <option value="13" <?php if($sosod==13) { ?>selected="selected"<?php } ?>>13</option>
                                            <option value="14" <?php if($sosod==14) { ?>selected="selected"<?php } ?>>14</option>
                                            <option value="15" <?php if($sosod==15) { ?>selected="selected"<?php } ?>>15</option>
                                            <option value="16" <?php if($sosod==16) { ?>selected="selected"<?php } ?>>16</option>
                                            <option value="17" <?php if($sosod==17) { ?>selected="selected"<?php } ?>>17</option>
                                            <option value="18" <?php if($sosod==18) { ?>selected="selected"<?php } ?>>18</option>
                                            <option value="19" <?php if($sosod==19) { ?>selected="selected"<?php } ?>>19</option>
                                            <option value="20" <?php if($sosod==20) { ?>selected="selected"<?php } ?>>20</option>
                                            <option value="21" <?php if($sosod==21) { ?>selected="selected"<?php } ?>>21</option>
                                            <option value="22" <?php if($sosod==22) { ?>selected="selected"<?php } ?>>22</option>
                                            <option value="23" <?php if($sosod==23) { ?>selected="selected"<?php } ?>>23</option>
                                            <option value="24" <?php if($sosod==24) { ?>selected="selected"<?php } ?>>24</option>
                                            <option value="25" <?php if($sosod==25) { ?>selected="selected"<?php } ?>>25</option>
                                            <option value="26" <?php if($sosod==26) { ?>selected="selected"<?php } ?>>26</option>
                                            <option value="27" <?php if($sosod==27) { ?>selected="selected"<?php } ?>>27</option>
                                            <option value="28" <?php if($sosod==28) { ?>selected="selected"<?php } ?>>28</option>
                                            <option value="29" <?php if($sosod==29) { ?>selected="selected"<?php } ?>>29</option>
                                            <option value="30" <?php if($sosod==30) { ?>selected="selected"<?php } ?>>30</option>
                                            <option value="31" <?php if($sosod==31) { ?>selected="selected"<?php } ?>>31</option>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">日</div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>编号</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>操作人</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>操作类型</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>操作对象</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>操作内容</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; 

color:#363636;"><div>操作时间</div></span>
                            </li>
                            
                            <?php if(is_array($logarr)) { foreach($logarr as $value) { ?>
                            <li>
                                
                                <span class="list1 mt"><?=$value['id']?></span>
                                <span class="list2 mt"><?=$value['uname']?></span>
                                <span class="list3 mt"><?=$cztypearr[$value['cztype']]?></span>
                                <span class="list4 mt"><?=$value['buname']?></span>
                                <span class="list5 mt" style="text-align:left;"><a title="<?=$value['czmsg']?>"><?=$value['czmsg']?>

</a></span>
                                <span class="list6 mt"><?=$value['createtime']?></span>

                            </li>
                            <?php } } ?>
                            
                            <li style="height:58px;">
                            
                               <div class="thepage">
                                    <span class="pagechoose"><?=$fenarr['sy']?></span>&nbsp;
<span class="pagechoose"><?=$fenarr['shangy']?>

</span>&nbsp;
<span class="pagechoose"><?=$fenarr['xiay']?>

</span>&nbsp;
<span class="pagechoose"><?=$fenarr['weiy']?>

</span>&nbsp;
                                </div>
                                <div class="pageall">
                                    <div class="pagetheall">
                                        共<span class="pagetheallfont"><?=$page?>/<?=$zpage?></span>页
                                    </div>
                                    
                                    <div class="pagego">
                                        <div class="fl">
                                        第<span class="pagenum">
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" 

maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>页
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('<?=$url?>');" style="width:40px; 

height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; 

cursor:pointer;color:#FFF; font-size:16px;">
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



<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjczrz.js" type="text/javascript"></script>


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