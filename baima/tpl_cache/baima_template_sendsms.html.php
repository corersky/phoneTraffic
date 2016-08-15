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
<script src="<?=XZKJURL?>/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>


<form action="<?=XZKJURL?>/duanxination.php?action=sendsms" method="post" target="hiddeniframe">
<div id="mains">
<div id="dxglfsdx">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：<?=$yingxiaoinfo['username']?>，联系电话：<?=$yingxiaoinfo['sjh']?></div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：短信管理-发送短信</div>
        </div>
        
        <div>
        	<div>
            	<div class="v1" style="background:url(baima/template/images/texttipsbg.png) repeat-x;">
                	<div class="v2">当前共计发送<span id="thephonecount">0</span>个号码</div>
                </div>
                <div>
            		<span class="v3">手机号码：</span><span><textarea id="thephonetext" class="v4" name="sjh" maxlength="100000" onpropertychange="if(value.length>100000) value=value.substr(0,100000)" onKeyPress="this.style.color='black';"></textarea></span>
                </div>
                <div class="v5">
                    <span class="cp" onClick="showdaorutxt();"><img src="baima/template/images/dxfs1.png" width="64" height="30"></span>
                    <span class="cp" onClick="showdaoruzu();"><img src="baima/template/images/dxfs2.png" width="79" height="30"></span>
                    <span class="cp" onClick="doguolv()"><img src="baima/template/images/dxfs3.png" width="92" height="30"></span>
                </div>
            </div>

 <div class="v6">
                <div>
            		<span class="v7">选择通道：</span>
                    <span style="margin-left:-8px;">
<select name="tongdaoid" id="tongdaoid" style="width:184px;height:28px; border:#add1fe 1px solid; font-size:13px; 

color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; cursor:pointer;" onChange="showguize()">
<?php if(is_array($tongdaoarr)) { foreach($tongdaoarr as $key=>$value) { ?>
<option value="<?=$key?>"><?=$value['title']?></option>
<?php } } ?>
</select>
</span>
                    
                    
                    <div id="theguizetips" style="position:absolute; border:#ff6600 1px solid; background-color:#fff2c0; color:#ff6600; font-size:13px; width:460px; margin-left:280px; margin-top:-30px; line-height:10px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; display:none;">
                        <div style="margin:8px;"><span id="theguize"></span><span style="float:right;color:#047fb7; font-family:'微软雅黑'; font-size:13px; font-weight:bold; cursor:pointer;" onClick="document.getElementById('showsysm').style.display='';">&lt;&lt;更多详情</span></div>
                    </div>
                    
                    
<?php if(is_array($tongdaoarr)) { foreach($tongdaoarr as $key=>$value) { ?>
<span id="span_tongdaobeizhu_id_<?=$key?>" style="display:none;"><?=$value['guizhe']?></span>
<?php } } ?>

<?php if(is_array($tongdaoarr)) { foreach($tongdaoarr as $key=>$value) { ?>
<span id="span_tongdaokfts_id_<?=$key?>" style="display:none;"><?=$value['kfts']?></span>
<?php } } ?>
</span>
                </div>
            </div>


            <div class="v6">
                <div>
            		<span class="v7">发送时间：</span><span><input id="thedate" class="v8" type="text" name="sendtime"  onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd HH:mm:ss'})"></span><span class="v9">（若不设置则为立即发送）</span>
                </div>
            </div>


            <div id="showthesms" class="v10">
                <div style="padding-top:20px;">
            		<span class="v14">短信内容：</span><span><textarea id="thesmstext" class="v18" name="nei" maxlength="280" onpropertychange="if(value.length>280) value=value.substr(0,280)" onKeyPress="this.style.color='black';"></textarea></span>
                </div>
                <div class="v13">
                    <span id="getsmszishu" class="v15">0</span>/280
                </div>
                <div style="margin-left:80px;">
                    <span class="v16">
                    <div class="fl" style="margin-top:2px;"><input class="cp" type="checkbox" name="syqianming" id="syqianming" value="1" checked/></div>
                    <div class="fl" style=" margin-left:10px;">使用签名:<span id="companyname"><?=$userinfo['qianming']?></span></div>
                    <div class="fl colorred v17">(短信签名字数也计入短信字数，不勾选则为不加签名)</div>
                    </span>
                </div>
            </div>
            <div class="v19" onClick="suresend()">
                <input class="v20" type="button" value="" style="width:132px; height:45px;background-image:url(baima/template/images/fsdxsurebtn.png); ">
            </div>
        </div>
    </div>
</div>


<span class="boxshowtxtdr" id="span_daorutxt" style="display:none;">
<a id="showtxtdr" href="javascript:;" class="bounceIn"></a>
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
<div id="showtxtdrclose" style="position:absolute;margin-top:-280px;padding-left:500px">
<a href="#" class="claseDialogBtnshowtxtdr" onclick="document.getElementById('span_daorutxt').style.display='none';return false;"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>

<span class="boxshownofz">
<a id="shownofz" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshownofz" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60); display:none;"></div>
<div id="dialogshownofz" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-115px 0 0 -280px;width:560px;height:270px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff; display:none;">
<div class="dialogTopshownofz">
<div style="width:560px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">分组导入</div>
                </div>
                <div style="margin-top:6px;">
                	<div style=" margin-top:80px; margin-left:25px; position:absolute;">
                        <div style="float:left; font-size:14px; font-weight:bold; margin-top:8px; margin-left:10px;">当前您通讯录中没有成员/分组，请先去<span style="color:#0077ad;">管理成员</span>中添加成员/添加新组</div>
                    </div>
                </div>
            </div>
<div id="shownofzclose" style="position:absolute;margin-top:-110px;padding-left:500px">
<a href="javascript:;" class="claseDialogBtnshownofz"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>

<span class="boxshowfzdr" id="spandaoru_fenzu" style="display:none;">
<a id="showfzdr" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshowfzdr" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div id="dialogshowfzdr" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-190px 0 0 -280px;width:560px;height:380px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
<div class="dialogTopshowfzdr">
<div style="width:560px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">分组导入</div>
                </div>
                <div style="margin-top:6px;">
                	<iframe name="showfzdr_daoruzu_iframe" id="showfzdr_daoruzu_iframe" src="#" width="560" height="340" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe> 
                </div>
            </div>
<div id="showfzdrclose" style="position:absolute;margin-top:-450px;padding-left:500px">
<a href="#" class="claseDialogBtnshowfzdr123123" onclick="document.getElementById('spandaoru_fenzu').style.display='none';return false;"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>


<span class="boxshowqrtj">
<a id="showqrtj" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshowqrtj" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60); display:none;"></div>
<div id="dialogshowqrtj" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-150px 0 0 -160px;width:320px;height:250px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff; display:none;">
<div class="dialogTopshowqrtj">
<div style="width:320px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">确认提交</div>
                </div>
                <div style="margin-top:20px; width:220px; margin:0 auto; text-align:left; font-family:'黑体'; font-size:18px;">
                	<div style=" margin-top:30px; margin-left:25px;">
                        发送号码：<span id="v1" style="color:#F00;"></span>个
                    </div>
                    <div style=" margin-top:10px; margin-left:25px;">
                        短信内容：<span id="v2" style="color:#F00;"></span>字
                    </div>
                    <div style=" margin-top:10px; margin-left:25px;">
                        短信条数：<span id="v3" style="color:#F00;"></span>条
                    </div>
                </div>
                <div style=" padding-top:30px; width:220px; margin:0 auto; text-align:left; font-family:'黑体'; font-size:18px; color:#F00; text-align:center;">
                    <span style="margin:10px;"><input type="submit" value="" style="width:83px; height:37px;background-image:url(baima/template/images/qrtj.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;" onClick="document.getElementsByClassName('claseDialogBtnshowqrtj').item(0).click();document.getElementById('showloading').click();"></span>
                    <span style="margin:10px; cursor:pointer;"><a href="javascript:;" class="claseDialogBtnshowqrtj"><img src="baima/template/images/qxtj.png" width="83" height="37"></a></span>
                </div>
            </div>
<div id="showqrtjclose" style="position:absolute;margin-top:-290px;padding-left:280px">
<a href="javascript:;" class="claseDialogBtnshowqrtj"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>
<span class="boxshowloading">
<a id="showloading" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshowloading" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60); display:none;"></div>
<div id="dialogshowloading" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-175px 0 0 -160px;width:320px;height:350px;display:none;">
<div class="dialogTopshowloading">
<div style="width:320px;">
            	<div id="myloading" style="display:block;">
                    <div id="thisload">
                        <div id="load1"></div>
                        <div id="load2"></div>
                        <div id="load3"></div>
                    </div>

                </div>
</div>
</div>
</div>
</span>

<span class="boxshowopentips">
<a id="showopentips" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshowopentips" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60); display:none;"></div>
<div id="dialogshowopentips" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-25px 0 0 -160px;width:320px;height:50px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff; display:none;">
<div class="dialogTopshowopentips">
<div style="width:320px; text-align:center; font-family:'微软雅黑'; font-size:18px; font-weight:bold; color:#007ed0;">
            	<div id="theopentipstext" style="margin-top:12px;"></div>
</div>
            <div id="showqrtjclose" style="position:absolute;">
<a href="javascript:;" class="claseDialogBtnshowopentips"></a>
</div>
</div>
</div>
</span>
<span id="showsysm" class="showsysm" style="display:none;">
<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-170px 0 0 -275px;width:550px;height:340px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;"><span id="tongdaoguizename"></span>使用说明</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showsysm').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:530px; height:300px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'微软雅黑'; font-size:17px;">
                <div style="margin-left:20px; margin-top:30px;">
                	<textarea id="thetextareaguize" name="" style="color:#666;width:450px;height:190px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:20px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" onKeyPress="this.style.color='black';" readonly></textarea>
                </div>
            </div>
        </div>
</div>
</span>
</form>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxglfsdx.js" type="text/javascript"></script>

<script>
function setsendsmssjh(sjh,id){
sjh=sjh.replace(/,/ig,"\n"); 
document.getElementById("thephonetext").value=document.getElementById("thephonetext").value+"\n"+sjh;
doguolv();
document.getElementById(id).style.display="none";

}

function showdaoruzu(){
document.getElementById("showfzdr_daoruzu_iframe").src="";
document.getElementById("showfzdr_daoruzu_iframe").src="user.php?action=sendsms_daoruzu";
document.getElementById('spandaoru_fenzu').style.display="";
}
function showdaorutxt(){
document.getElementById("showfzdr_daorutxt_iframe").src="";
document.getElementById("showfzdr_daorutxt_iframe").src="user.php?action=sendsms_daorutxt";
document.getElementById('span_daorutxt').style.display="";
}

</script>
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