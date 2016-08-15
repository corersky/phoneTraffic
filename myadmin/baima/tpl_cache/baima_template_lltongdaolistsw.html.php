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
#lltjsnllgl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjsnllgl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext4{width:70px;height:24px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext5{width:70px;height:20px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjsnllgl .inputtext6{width:90px;height:18px; border:#bbb 1px solid; font-size:12px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
#lltjsnllgl .v1{}
#lltjsnllgl .v2{}
#lltjsnllgl .v3{}
#lltjsnllgl .v4{}
#lltjsnllgl .v5{}
#lltjsnllgl .v6{}
#lltjsnllgl .v7{}
#lltjsnllgl .v8{}
#lltjsnllgl .mt{margin-top:12px;}
#lltjsnllgl .mt2{margin-top:30px;}
#lltjsnllgl .mt3{margin-top:8px;}
#lltjsnllgl #table{
float:left;
width:740px;
text-align:left;
border:1px #d8d8d8 solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#lltjsnllgl #mythetable{
width:740px;
margin:0 auto;
}
#lltjsnllgl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjsnllgl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjsnllgl #table li span.list1{
text-decoration:none;
float:left;
width:120px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjsnllgl #table li span.list2{
text-decoration:none;
float:left;
width:160px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list3{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list4{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list5{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list6{
text-decoration:none;
float:left;
width:80px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list7{
text-decoration:none;
float:left;
width:70px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjsnllgl #table li span.list8{
text-decoration:none;
float:left;
width:70px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<script>
function soso(){
var  sf=document.getElementById("sf").value;

var url="index.php?action=lltongdaolistsw&sf="+sf;
window.location.href=url;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
<div id="lltjsnllgl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'微软雅黑'; font-size:18px; color:#565656; font-weight:bold;">流量统计管理</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'微软雅黑'; font-size:14px; color:#979797; font-weight:bold;">省内流量管理</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                    
                    
                        <ul>
                            
                            <li style="height:40px; background-color:#288ce2; border:#288ce2 1px solid; margin:-1px 0 0 -1px; text-align:left;">
                            	<div style="float:left;color:#FFF; font-family:'微软雅黑'; font-size:16px; margin-left:20px; margin-top:8px;">
                                	省内流量管理
                                </div>
                                <div style="float:left; margin-left:420px; margin-top:7px;">
                                    <div style="float:left; margin-left:10px; margin-top:5px; font-family:'微软雅黑';  font-size:14px; font-weight:bold; color:#FFF;">
                                    	省份：
                                    </div>
                                	<div style="float:left;">
                                		<select name="sf" id="sf" style="width:100px;height:28px; border:#bbb 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;" onchange="soso()">
                                            <option value="0">全部</option>
                                            <option value="河南" <?php if($sf=='河南') { ?>selected="selected"<?php } ?>>河南</option>
                                            <option value="北京" <?php if($sf=='北京') { ?>selected="selected"<?php } ?>>北京</option>
                                            <option value="河北" <?php if($sf=='河北') { ?>selected="selected"<?php } ?>>河北</option>
                                            <option value="吉林" <?php if($sf=='吉林') { ?>selected="selected"<?php } ?>>吉林</option>
                                            <option value="辽宁" <?php if($sf=='辽宁') { ?>selected="selected"<?php } ?>>辽宁</option>
                                            <option value="黑龙江" <?php if($sf=='黑龙江') { ?>selected="selected"<?php } ?>>黑龙江</option>
                                            <option value="安徽" <?php if($sf=='安徽') { ?>selected="selected"<?php } ?>>安徽</option>
                                            <option value="陕西" <?php if($sf=='陕西') { ?>selected="selected"<?php } ?>>陕西</option>
                                            <option value="山西" <?php if($sf=='山西') { ?>selected="selected"<?php } ?>>山西</option>
                                            <option value="甘肃" <?php if($sf=='甘肃') { ?>selected="selected"<?php } ?>>甘肃</option>
                                            <option value="湖北" <?php if($sf=='湖北') { ?>selected="selected"<?php } ?>>湖北</option>
                                            <option value="天津" <?php if($sf=='天津') { ?>selected="selected"<?php } ?>>天津</option>
                                            <option value="上海" <?php if($sf=='上海') { ?>selected="selected"<?php } ?>>上海</option>
                                            <option value="浙江" <?php if($sf=='浙江') { ?>selected="selected"<?php } ?>>浙江</option>
                                            <option value="福建" <?php if($sf=='福建') { ?>selected="selected"<?php } ?>>福建</option>
                                            <option value="广东" <?php if($sf=='广东') { ?>selected="selected"<?php } ?>>广东</option>
                                            <option value="广西" <?php if($sf=='广西') { ?>selected="selected"<?php } ?>>广西</option>
                                            <option value="贵州" <?php if($sf=='贵州') { ?>selected="selected"<?php } ?>>贵州</option>
                                            <option value="湖南" <?php if($sf=='湖南') { ?>selected="selected"<?php } ?>>湖南</option>
                                            <option value="江苏" <?php if($sf=='江苏') { ?>selected="selected"<?php } ?>>江苏</option>
                                            <option value="江西" <?php if($sf=='江西') { ?>selected="selected"<?php } ?>>江西</option>
                                            <option value="内蒙古" <?php if($sf=='内蒙古') { ?>selected="selected"<?php } ?>>内蒙古</option>
                                            <option value="宁夏" <?php if($sf=='宁夏') { ?>selected="selected"<?php } ?>>宁夏</option>
                                            <option value="青海" <?php if($sf=='青海') { ?>selected="selected"<?php } ?>>青海</option>
                                            <option value="四川" <?php if($sf=='四川') { ?>selected="selected"<?php } ?>>四川</option>
                                            <option value="云南" <?php if($sf=='云南') { ?>selected="selected"<?php } ?>>云南</option>
                                            <option value="新疆" <?php if($sf=='新疆') { ?>selected="selected"<?php } ?>>新疆</option>
                                            <option value="西藏" <?php if($sf=='西藏') { ?>selected="selected"<?php } ?>>西藏</option>
                                            <option value="重庆" <?php if($sf=='重庆') { ?>selected="selected"<?php } ?>>重庆</option>
                                            <option value="海南" <?php if($sf=='海南') { ?>selected="selected"<?php } ?>>海南</option>
                                            <option value="山东" <?php if($sf=='山东') { ?>selected="selected"<?php } ?>>山东</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道名称</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>通道备注</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>移动折扣</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>联通折扣</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>电信折扣</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>省份</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>状态</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>操作</div></span>
                            </li>
                            
                            
 <?php if(is_array($userarr)) { foreach($userarr as $value) { ?>
                            <li style="height:40px;">
                                
                                <span class="list1 mt"><?=$value['title']?></span>
                                <span class="list2 mt">
                                	<!--标识-->
                                    <div id="mytxt1"><?=$value['beizhu']?></div>
                                    <!--标识-->
                                    <div id="myinput1" style="display:none;">
                                        <!--标识-->
                                        <input id="mytheinput1" class="inputtext6" type="text" name="" placeholder="输入通道备注...">
                                    </div>
                                </span>
                                <!--<span class="list3 mt">移动</span>
                                <span class="list4 mt">
                                	
                                    <div id="mylttxt1"><?=$value['yidongzk']?></div>
                                    
                                    <div id="myltinput1" style="display:none;">
                                        
                                        <input id="liantongzk1" class="inputtext6" type="text" name="" value="" placeholder="输入折扣...">
                                    </div>
                                </span>-->
                                
                                <span class="list3 mt"><?=$value['yidongzk']?></span>
                                <span class="list4 mt"><?=$value['liantongzk']?></span>
                                <span class="list5 mt"><?=$value['dianxinzk']?></span>
                                
                                <span class="list6 mt"><?=$value['sheng']?></span>
                                <span class="list7 mt">
<?php if(empty($value['zt'])) { ?>
暂停
<?php } else { ?>
开启
<?php } ?>
</span>
                                <span class="list8 mt">
<?php if(empty($value['zt'])) { ?>
<span><a href="<?=XZKJURL?>/dailiation.php?action=settongdaozt&tongdaoid=<?=$value['id']?>&zt=1" style="color:#03F;" target="hiddeniframe">开启</a></span>
<?php } else { ?>
<span style=""><a href="<?=XZKJURL?>/dailiation.php?action=settongdaozt&tongdaoid=<?=$value['id']?>&zt=0" style="color:#03F;" target="hiddeniframe">暂停</a></span>
<?php } ?>
                                	

                                    

                                </span>
                                <!--<span class="list9 mt" style="margin-top:8px;">
                                    
                                    <div id="myxg1" style="float:left; margin-left:18px; cursor:pointer;" onClick="alert('请在通道管理里面修改')">
                                        <img src="baima/template/images/lltjlltdglxg2.png" width="64" height="23">
                                    </div>
                                    
                                    <div id="mybc1" style="float:left; margin-left:18px; display:none;">
                                        <input type="button" style="width:64px;height:23px; background:url(baima/template/images/lltjlltdglbc2.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="">
                                    </div>
                                </span>-->
                                
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


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/lltjsnllgl.js" charset="utf-8" type="text/javascript"></script>
<script type="text/javascript">
function xg(obj)
{
document.getElementById("mytxt"+obj.id.substring(4,6)).style.display="none";
document.getElementById("myinput"+obj.id.substring(4,6)).style.display="";
document.getElementById("mytheinput"+obj.id.substring(4,6)).value=document.getElementById("mytxt"+obj.id.substring(4,6)).innerHTML;

document.getElementById("mylttxt"+obj.id.substring(4,6)).style.display="none";
document.getElementById("myltinput"+obj.id.substring(4,6)).style.display="";
document.getElementById("liantongzk"+obj.id.substring(4,6)).value=document.getElementById("mylttxt"+obj.id.substring(4,6)).innerHTML;

document.getElementById("myxg"+obj.id.substring(4,6)).style.display="none";
document.getElementById("mybc"+obj.id.substring(4,6)).style.display="";
}


function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
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