<!doctype html>
<html>
<head>
<title>���ŷ���ƽ̨</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="���ŷ���ƽ̨">
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
                                �û�����<?=$_SESSION["username"]?>
                            </div>
                            <img src="baima/template/images/menutoptexthr.png" width="220" height="4">
                            <!--<div class="dxye">
                                <div class="dxyeyuan">
                                    ������<span class="colorred"><?=$userinfo['dxnum']?>��</span>
                                </div>
                                <div class="czimg">
                                    <a href="<?=XZKJURL?>/user.php?action=caiwuchongzhi"><img src="baima/template/images/menutopcz.png" width="37" height="23"></a>
                                </div>
                            </div>-->
                            <div class="dxye">
                                <div class="dxyeyuan">
                                    �˻���<span class="colorred"><?=$userinfo['dxnum']?>��</span>
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
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulidxgl" class="fl" style="font-family:΢���ź�;">���Ź���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=sendsms"><li id="fsdx" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">���Ͷ���</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=sendlog"><li id="fsjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu12.png" width="20" height="20"></div><div class="fl">���ͼ�¼</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=smshuifu"><li id="dxhf" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu13.png" width="20" height="20"></div><div class="fl">���Żظ�</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:΢���ź�;">�˻�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=setuserinfo"><li id="xgzl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=setpwd"><li id="xgmm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu22.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulitxl" class="fl" style="font-family:΢���ź�;">ͨѶ¼</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=txlzulist"><li id="fzgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">�������</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=txluserlist"><li id="glcy" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">�����Ա</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulicwgl" class="fl" style="font-family:΢���ź�;">�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuwyfp"><li id="wyfp" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu41.png" width="20" height="20"></div><div class="fl">��Ҫ��Ʊ</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuchongzhilog"><li id="czjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">��ֵ��¼</div></div></li></a>


                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuwdjg"><li id="wdjg" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">�ҵļ۸�</div></div></li></a>

 <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=caiwuchongzhi"><li id="wycz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu44.png" width="20" height="20"></div><div class="fl">��Ҫ��ֵ</div></div></li></a>



                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulidxjk" class="fl" style="font-family:΢���ź�;">���Ž���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekoushenqing"><li id="jksq" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">��������</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekougl"><li id="jkgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu52.png" width="20" height="20"></div><div class="fl">�������</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=jiekoutemp"><li id="dxmb" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu53.png" width="20" height="20"></div><div class="fl">����ģ��</div></div></li></a>
                            </ul>
                        </li>

<li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span id="menulisjcll" class="fl" style="font-family:΢���ź�;margin-left:65px;">�ֻ�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <!--<a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=liuliangchongzhi"><li id="csjll" style="font-family:΢���ź�;"><div class="smallimg1"><div class="fl">���ֻ�����</div></div></li></a>-->
                                <a class="menu_a_a" href="<?=XZKJURL?>/user.php?action=liuliangchongzhilog"><li id="dhjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="fl">�һ���¼</div></div></li></a>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>  
        </div>
<script src="<?=XZKJURL?>/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function soso(){
var  sosoy=document.getElementById("sosoy").value;
var  sosom=document.getElementById("sosom").value;
var url="<?=XZKJURL?>"+"/user.php?action=caiwuchongzhilog&sosoy="+sosoy+"&sosom="+sosom;
window.location.href=url;
}

</script>


<div id="mains">
<div id="cwglczjl">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��<?=$yingxiaoinfo['username']?>����ϵ�绰��<?=$yingxiaoinfo['sjh']?></div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��������-��ֵ��¼</div>
        </div>
        
        <div class="v1">
        	<div class="v2">
            	<div class="fl v3">ʱ���ѯ��&nbsp;</div>
                <div class="fl">
                	<select class="v4"  id="sosoy" onchange="soso()">
                        <option value="2015" <?php if($sosoy==2015) { ?>selected="selected"<?php } ?>>2015</option>
<option value="2016" <?php if($sosoy==2016) { ?>selected="selected"<?php } ?>>2016</option>
<option value="2017" <?php if($sosoy==2017) { ?>selected="selected"<?php } ?>>2017</option>
<option value="2018" <?php if($sosoy==2018) { ?>selected="selected"<?php } ?>>2018</option>
<option value="2019" <?php if($sosoy==2019) { ?>selected="selected"<?php } ?>>2019</option>
<option value="2020" <?php if($sosoy==2020) { ?>selected="selected"<?php } ?>>2020</option>
<option value="2021" <?php if($sosoy==2021) { ?>selected="selected"<?php } ?>>2021</option>
<option value="2022" <?php if($sosoy==2022) { ?>selected="selected"<?php } ?>>2022</option>
<option value="2023" <?php if($sosoy==2023) { ?>selected="selected"<?php } ?>>2023</option>
<option value="2024" <?php if($sosoy==2024) { ?>selected="selected"<?php } ?>>2024</option>
                    </select>
                </div>
                <div class="fl v3">&nbsp;��&nbsp;</div>
                <div class="fl">
                	<select class="v4"  id="sosom" onchange="soso()">
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
                <div class="fl v3">&nbsp;��</div>
            </div>
        </div>
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵʱ��</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ����(��)</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>ʵ�ս��(Ԫ)</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ��ʽ</div></span>
                        </li>

                        
<?php if(!empty($czlogarr)) { ?>
                        <div id="msgyes">
                            <?php if(is_array($czlogarr)) { foreach($czlogarr as $value) { ?>
                            <li>
                                
                                <span class="list1 mt"><?=$value['createtime']?></span>
                                <span class="list2 mt"><?=$value['jine']?></span>
<span class="list3 mt"><?=$value['shje']?></span>
                                <span class="list4 mt2"><?=$cztypearr[$value['cztype']]?>
<?php if(!empty($value['beizhu'])) { ?>
<img class="cp" src="baima/template/images/tjsbtips.png" width="16" height="16" title="<?=$value['beizhu']?>">
<?php } ?>
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
                                        ��<span class="pagetheallfont"><?=$page?>/<?=$zpage?></span>ҳ
                                    </div>
                                    
                                    <div class="pagego">
                                        <div class="fl">
                                        ��<span class="pagenum">
                                            <input class="nowpagetext" name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>ҳ
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('<?=$url?>');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                        </div>

<?php } else { ?>
                        <div id="msgno">
                            <li style="height:300px;">
                            
                                <div style="margin-top:140px; font-size:14px; font-weight:bold;">
                                    �ף���ʱ��δ��ѯ��������¼...
                                </div>
                                
                            </li>
                        </div>
<?php } ?>




                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/cwglczjl.js" type="text/javascript"></script>


<script>
function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}
  
</script>


    </div>
    <div id="footer">
        <div id="copyright">
            <p>Copyright 2011 ֣�����е��ӿƼ����޹�˾ ��Ȩ���� ԥICP��09015928��</p>
            <p>����ʱ�䣺��һ������8:30-18:30���ڼ��ճ��⣩��˾��ַ��֣���н���·168��</p>
<script type="text/javascript" src="http://js.tongji.linezing.com/3594310/tongji.js"></script><noscript><a href="http://www.linezing.com"><img src="http://img.tongji.linezing.com/3594310/tongji.gif"/></a></noscript>

        </div>
    </div>
</div>
</div>

</body>
</html>