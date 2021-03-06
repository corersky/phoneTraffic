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
                                用户名：<?=$_SESSION["username"]?>
                            </div>
                            <img src="baima/template/images/menutoptexthr.png" width="220" height="4">
                            <!--<div class="dxye">
                                <div class="dxyeyuan">
                                    短信余额：<span class="colorred"><?=$userinfo['dxnum']?>条</span>
                                </div>
                                <div class="czimg">
                                    <a href="<?=XZKJURL?>/user.php?action=caiwuchongzhi"><img src="baima/template/images/menutopcz.png" width="37" height="23"></a>
                                </div>
                            </div>-->
                            <div class="dxye">
                                <div class="dxyeyuan">
                                    账户余额：<span class="colorred"><?=$userinfo['dxnum']?>条</span>
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
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulidxgl" class="fl" style="font-family:微软雅黑;">短信管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=sendsms"><li id="fsdx" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">发送短信</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=sendlog"><li id="fsjl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu12.png" width="20" height="20"></div><div class="fl">发送记录</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=smshuifu"><li id="dxhf" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu13.png" width="20" height="20"></div><div class="fl">短信回复</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:微软雅黑;">账户管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=setuserinfo"><li id="xgzl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">修改资料</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=setpwd"><li id="xgmm" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu22.png" width="20" height="20"></div><div class="fl">修改密码</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulitxl" class="fl" style="font-family:微软雅黑;">通讯录</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=txlzulist"><li id="fzgl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">分组管理</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=txluserlist"><li id="glcy" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">管理成员</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulicwgl" class="fl" style="font-family:微软雅黑;">财务管理</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuwyfp"><li id="wyfp" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu41.png" width="20" height="20"></div><div class="fl">我要发票</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuchongzhilog"><li id="czjl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">充值记录</div></div></li></a>


                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuwdjg"><li id="wdjg" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">我的价格</div></div></li></a>

 <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuchongzhi"><li id="wycz" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu44.png" width="20" height="20"></div><div class="fl">我要充值</div></div></li></a>



                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulidxjk" class="fl" style="font-family:微软雅黑;">短信接囗</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekoushenqing"><li id="jksq" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">接囗申请</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekougl"><li id="jkgl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu52.png" width="20" height="20"></div><div class="fl">接囗管理</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekoutemp"><li id="dxmb" style="font-family:微软雅黑;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu53.png" width="20" height="20"></div><div class="fl">短信模板</div></div></li></a>
                            </ul>
                        </li>

<li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span id="menulisjcll" class="fl" style="font-family:微软雅黑;margin-left:65px;">手机充流量</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <!--<a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=liuliangchongzhi"><li id="csjll" style="font-family:微软雅黑;"><div class="smallimg1"><div class="fl">充手机流量</div></div></li></a>-->
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=liuliangchongzhilog"><li id="dhjl" style="font-family:微软雅黑;"><div class="smallimg1"><div class="fl">兑换记录</div></div></li></a>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>  
        </div>

<div id="mains">
<div id="cwglwycz">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：<?=$yingxiaoinfo['username']?>，联系电话：<?=$yingxiaoinfo['sjh']?></div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：财务管理-我要充值</div>
        </div>
        <div class="colorred" style="font-size:13px; font-weight:bold; margin-top:30px;">
        	注：短信充值余额长期有效，没有使用时间限制，单次充值最少300元
        </div>
<input type="hidden" id="userdxjiage" value="<?=$userinfo['jiage']?>"/>
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


<form action="dxchongzhi.php?action=smsnumchongzhi" method="post" target="_blank" onsubmit="return checkok()">
        <div id="state1" class="v6">
        	<div class="v8" style="font-family:'微软雅黑';">
            	<div class="fl v3">您要充值的金额：&nbsp;</div>
                <div class="fl" style="margin-left:-2px;">
                	<input id="myyuan" name="chongzhipic" type="text" style="color:#7e7e7e;width:150px;height:28px; font-size:14px; font-weight:bold;border:#add1fe 1px solid;" maxlength="20" onKeyPress="this.style.color='black';" onKeyUp="this.value=this.value.replace(/\D/g,'');shownum()" onafterpaste="this.value=this.value.replace(/\D/g,'')" placeholder="请输入充值金额..." onBlur="checkok()"/>
                </div>
                <div class="fl v3">&nbsp;元</div>
                <div id="texttips" class="fl v3" style="color:#F00; font-size:12px;">&nbsp;（请输入整数金额）</div>
            </div>
            <div style="height:30px;">
                <div id="thecznumdiv" style="padding-top:50px; font-size:15px; display:none;">
                    当前可充值短信条数为：<span id="thecznum" style="color:#F00; font-size:18px;">0</span>条
                </div>
            </div>
            <div class="v9">
            	<input type="submit" value="" style="width:95px; height:37px;background-image:url(baima/template/images/wyczqcz.png);background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onClick="checkok()">
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
            <p>Copyright 2011 郑州新中电子科技有限公司 版权所有 豫ICP备09015928号</p>
            <p>工作时间：周一至周五8:30-18:30（节假日除外）公司地址：郑州市健康路168号</p>
<script type="text/javascript" src="http://js.tongji.linezing.com/3594310/tongji.js"></script><noscript><a href="http://www.linezing.com"><img src="http://img.tongji.linezing.com/3594310/tongji.gif"/></a></noscript>

        </div>
    </div>
</div>
</div>

</body>
</html>