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
<script>
function soso(){
var  sosozt=document.getElementById("sosozt").value;
var  sosotime=document.getElementById("sosotime").value;
var url="<?=XZKJURL?>"+"/user.php?action=sendlog&sosozt="+sosozt+"&sosotime="+sosotime;
window.location.href=url;
}

</script>
<div id="mains">
<div id="dxglfsjl">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">您的专属客服专员：<?=$yingxiaoinfo['username']?>，联系电话：<?=$yingxiaoinfo['sjh']?></div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：短信管理-发送记录</div>
        </div>
        <div class="colorred" style="font-size:13px; font-weight:bold;">
        	注：由于短信数据量较大，系统仅显示三个月以内的所有订单
        </div>
        <div class="v1">
        	<div class="v2">
            	<div class="fl v3">订单提交状态：</div>
                <div class="fl">
                	<select class="v4" id="sosozt" onchange="soso()">
<option value="0" <?php if($sosozt==0) { ?>selected="selected"<?php } ?>>订单提交全部状态</option>
<option value="4" <?php if($sosozt==4) { ?>selected="selected"<?php } ?>>订单审核中</option>
<option value="1" <?php if($sosozt==1) { ?>selected="selected"<?php } ?>>订单提交成功</option>
<option value="2" <?php if($sosozt==2) { ?>selected="selected"<?php } ?>>订单提交失败</option>
                    </select>
                </div>
                <div class="fl v3">&nbsp;&nbsp;订单提交时间：</div>
                <div class="fl"><input id="sosotime" class="v5" type="text" name="date" style="background:url(baima/template/images/datetextboxinput.png) no-repeat;"  id="sosotime" value="<?=$sosotime?>" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" onchange="soso();"></div>
            </div>
        </div>
        <div class="v6">
            <div id="mythetable">
                <div id="table">

<?php if(!empty($logarr)) { ?>
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>订单编号</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交时间</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信内容</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>发送通道</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信条</div></span>
                            <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>号码数</div></span>
                            <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交状态</div></span>
                            <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>号码明细</div></span>
                        </li>

                        
                        <div id="nowpage1" class="nowpage">
                            
<?php if(is_array($logarr)) { foreach($logarr as $value) { ?>
                            <li>
                                
                                <span class="list1 mt"><?=$value['id']?></span>
                                <span class="list2 mt2"><?=$value['createtime']?></span>
                                <span class="list3 mt" onClick="showduanxinnei_function('<?=$value['id']?>','<?=$value['nei']?>');document.getElementById('showdxnr').click();"><?=$value['neimsg']?></span>
<span class="list4 mt"><?=$value['tongdaoname']?></span>
                                <span class="list5 mt"><?=$value['num']?></span>
                                <span class="list6 mt"><?=$value['hmnum']?></span>
                                <span class="list7 mt">


<?php if($value['zt']==2) { ?>
<span style="cursor:pointer;" onClick="div_showduanxinerr_function('<?=$value['id']?>','<?=$value['msg']?>');document.getElementById('showtjsb').click();">提交失败<img src="baima/template/images/tjsbtips.png" width="16" height="16"></span>
<?php } elseif($value['zt']==3) { ?>
<span>定时发送<img src="baima/template/images/dsfstips.png" width="16" height="16" title="<?=$value['dssendtimestr']?>"></span>
<?php } elseif($value['zt']==1) { ?>
<span>提交成功</span>
<?php } else { ?>
<span>订单审核中</span>
<?php } ?>

</span>

                                <span class="list8 mt" style="color:#017bb4;" onClick="showoedersendinfo('<?=$value['id']?>');document.getElementById('showck').click();">查看</span>
                                
                            </li>
                            <?php } } ?>
                            
                        </div>
                        
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
                                        <input class="nowpagetext" name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
                                    </span>页
                                    </div>
                                    <div class="pagegoto">
                                        <input type="button" value="" onClick="tiaozhuan('<?=$url?>');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        
                    </ul>

<?php } else { ?>
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>订单编号</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交时间</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信内容</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>短信条</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>号码数</div></span>
                            <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>扣费金额<span style="font-size:11px; font-weight:300;">(元)</span></div></span>
                            <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>提交状态</div></span>
                            <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>号码明细</div></span>
                        </li>
                        
                        <li style="height:120px;">
                        
                            <div style="margin-top:50px; font-size:14px; font-weight:bold;">
                            	当前您没有发送过短信或是三个月以内没有发送短信，请先去<a href="user.php?action=sendsms" style="color:#0078ad;">&gt;&gt;发送短信</a>
                            </div>
                            
                        </li>
                        
                    </ul>
<?php } ?>








                </div>
            </div>
        </div>
        
    </div>
</div>



<span class="boxshowck">
<a id="showck" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshowck" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60); display:none;"></div>
<div id="dialogshowck" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-275px 0 0 -275px;width:550px;height:550px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff; display:none;">
<div class="dialogTopshowck">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;" id="div_showduanxinsendinfo_title">“1234567”订单发送详情</div>
                </div>  
                <div style="margin-top:6px;">
                	<iframe name="iframe_showck" id="iframe_showck" src="#" width="550" height="510" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">短信服务平台使用了框架技术，但是您的浏览器不支持框架，请更换您的浏览器以便正常使用。 </iframe> 
                </div>
            </div>
<div id="showckclose" style="position:absolute;margin-top:-620px;padding-left:500px">
<a href="javascript:;" class="claseDialogBtnshowck"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>

<span class="boxshowdxnr">
<a id="showdxnr" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshowdxnr" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60); display:none;"></div>
<div id="dialogshowdxnr" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-175px 0 0 -275px;width:550px;height:350px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff; display:none;">
<div class="dialogTopshowdxnr">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;" id="div_showduanxinnei_title">“1234567”订单短信内容</div>
                </div>
                <div style="position:absolute;margin:25px; width:500px; height:250px; overflow:hidden;" id="div_showduanxinnei_nei">  
                	短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容短信内容
                </div>
            </div>
<div id="showdxnrclose" style="position:absolute;margin-top:-105px;padding-left:500px">
<a href="javascript:;" class="claseDialogBtnshowdxnr"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>
<span class="boxshowtjsb">
<a id="showtjsb" href="javascript:;" class="bounceIn"></a>
<div id="dialogBgshowtjsb" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60); display:none;"></div>
<div id="dialogshowtjsb" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-110px 0 0 -275px;width:550px;height:220px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff; display:none;">
<div class="dialogTopshowtjsb">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'微软雅黑'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;" id="div_showduanxinerr_title">“1234567”订单提交失败原因</div>
                </div>
                <div style="position:absolute;margin:20px; width:500px; height:143px; overflow:hidden;" id="div_showduanxinerr_nei">  
                	发送营销短信需要按照以下要求：1.需加报备过的签名，或报备自己的签名2.内容开头需加：尊敬的用户：3.内容结尾需加：回T退订4.请联系QQ1398967845更改签名或者报备签名。
                </div>
            </div>
<div id="showtjsbclose" style="position:absolute;margin-top:-105px;padding-left:500px">
<a href="javascript:;" class="claseDialogBtnshowtjsb"><img src="baima/template/images/openclose.png" style="margin-top:67px"></a>
</div>
</div>
</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxglfsjl.js" type="text/javascript"></script>

<script>
function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}


function showduanxinnei_function(tid,nei){
var title="“"+tid+"”订单短信内容";
document.getElementById("div_showduanxinnei_title").innerHTML=title;
document.getElementById("div_showduanxinnei_nei").innerHTML=nei;
}

function div_showduanxinerr_function(tid,nei){
var title="“"+tid+"”订单提交失败原因";
document.getElementById("div_showduanxinerr_title").innerHTML=title;
document.getElementById("div_showduanxinerr_nei").innerHTML=nei;
}

function showoedersendinfo(tid){
var title="“"+tid+"”订单发送详情";
document.getElementById("div_showduanxinsendinfo_title").innerHTML=title;
document.getElementById("iframe_showck").src="user.php?action=sendlog_sjhlist&tid="+tid;
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