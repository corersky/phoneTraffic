<!doctype html>
<html>
<head>
<title>���ŷ���ƽ̨</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="���ŷ���ƽ̨">
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
                                �û�����<?=$_SESSION["dl_username"]?>
                            </div>
                            <img src="baima/template/images/menutoptexthr.png" width="220" height="4">
                     
                            <div class="dxye">
                                <div class="dxyeyuan">
                                    �˻���<span class="colorred"><?=$userinfo['dxnum']?>Ԫ</span>
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
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulidxgl" class="fl" style="font-family:΢���ź�;">���Ź���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=adduser"><li id="tjyh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">����û�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=userlist"><li id="wdkh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">�ҵĿͻ�</div></div></li></a>
<a class="menu_a_a" href="index.php?action=dxchongzhi"><li id="czdx" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">��ֵ����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=dxchongzhilog"><li id="czdxjl" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu12.png" width="20" height="20"></div><div class="fl">��ֵ���ż�¼</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>
                        
                        
                        

                        
                        
                        
                        
                        
                        
                        <?php if($_SESSION["dl_islluser"]==1) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulicsjll" class="fl" style="font-family:΢���ź�;">���ֻ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=llchongzhi"><li id="czll" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">���������ֵ</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=llchongzhipl"><li id="plczll" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu51.png" width="20" height="20"></div><div class="fl">���������ֵ</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=llchongzhilog"><li id="czlljl" style="font-family:΢���ź�;"><div class="smallimg1" style="width:115px;"><div class="smallimg2"><img src="baima/template/images/menu52.png" width="20" height="20"></div><div class="fl">��ֵ������¼</div></div></li></a>
                            </ul>
                        </li>

                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulikmgl" class="fl" style="font-family:΢���ź�;">���ܹ���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=kmgl"><li id="kgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu31.png" width="20" height="20"></div><div class="fl">������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=kmchongzhi"><li id="kmcz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu32.png" width="20" height="20"></div><div class="fl">���ܳ�ֵ</div></div></li></a>
                            </ul>
                        </li>

                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulitjjl" class="fl" style="font-family:΢���ź�;">�Ƽ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=tuijianjj"><li id="tjjs" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">�Ƽ�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=myjiangli"><li id="wdjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">�ҵĽ���</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=jianglijiesuan"><li id="jljs" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu11.png" width="20" height="20"></div><div class="fl">��������</div></div></li></a>
                            </ul>
                        </li>
                        
                        <?php } ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:΢���ź�;">�˻�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="<?=XZKJURL?>/index.php?action=setuserinfo"><li id="xgzl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                                <a class="menu_a_a" href="<?=XZKJURL?>/index.php?action=setpwd"><li id="xgmm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu22.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulicwgl" class="fl" style="font-family:΢���ź�;">�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=caiwulog"><li id="cwjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">�����¼</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=myjiage"><li id="wdjg" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">�ҵļ۸�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=chongzhi"><li id="wycz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">��Ҫ��ֵ</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menulilxwm" class="fl" style="font-family:΢���ź�;">��ϵ����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=lxwm"><li id="lxwm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu21.png" width="20" height="20"></div><div class="fl">��ϵ����</div></div></li></a>
                            </ul>
                        </li>

<?php if($_SESSION["dl_uid"]==56) { ?>
  <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menulizkgl" class="fl" style="font-family:΢���ź�;">�ƿ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                            	<a class="menu_a_a" href="index.php?action=km_create"><li id="mksckm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">���ɿ���</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=km_pilist"><li id="kmglkm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu43.png" width="20" height="20"></div><div class="fl">������</div></div></li></a>
                                <a class="menu_a_a"  href="card.php" target="_blank"><li id="kmkmcz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu42.png" width="20" height="20"></div><div class="fl">���ܳ�ֵ</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>




                    </ul>
                </div>
            </div>  
        </div>
<script src="<?=XZKJURL?>/baima/template/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}
function soso(){
var  kazt=document.getElementById("kazt").value;
var  czzt=document.getElementById("czzt").value;

var  sjh=document.getElementById("sjh").value;
 
var url="<?=XZKJURL?>"+"/index.php?action=kmgl&kazt="+kazt+"&czzt="+czzt+"&sjh="+sjh;
window.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<style>
#kmglkgl .inputtext{color:#666;width:230px;height:30px; font-size:14px;}
#kmglkgl .v1{margin-top:20px;}
#kmglkgl .v2{font-size:13px; font-family:'΢���ź�'; font-weight:bold;}
#kmglkgl .v3{margin-top:8px;}
#kmglkgl .v4{font-size:11px; color:#666;width:120px;height:30px; border:#add1fe 1px solid; cursor:pointer; font-size:13px; font-family:"΢���ź�"; font-weight:bold;}
#kmglkgl .v7{margin-top:10px;margin-left:-20px;}
#kmglkgl .v8{font-size:13px; font-family:'΢���ź�'; font-weight:bold;}
#kmglkgl .v9{margin-top:8px;}
#kmglkgl .v10{font-size:11px; color:#666;width:150px;height:27px; border:#add1fe 1px solid; outline:none;}
#kmglkgl .v11{font-size:13px; color:#666;border:none;cursor:pointer;width:49px;height:24px;}
#kmglkgl .v12{margin-left:10px;margin-top:2px;}
#kmglkgl .mt{margin-top:12px;}
#kmglkgl .mt2{margin-top:5px;}
#kmglkgl .pageli{height:58px;}
#kmglkgl .thepage{float:left; margin-top:22px; font-size:13px; margin-left:140px; color:#666;}
#kmglkgl .pagechoose{border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;}
#kmglkgl .pagechoose a{color:#666;}
#kmglkgl .pagegoto{float:left; font-size:12px; margin-top:-1px; margin-left:5px; cursor:pointer;}
#kmglkgl .pagenum{font-size:12px; margin-left:-4px; margin-right:-4px;}
#kmglkgl .nowpagetext{color:#7e7e7e;width:26px;height:18px;font-size:12px;}
#kmglkgl .pagego{float:left; font-size:12px; margin-left:10px; margin-top:-2px;}
#kmglkgl .pageall{float:left; margin-top:22px; font-size:12px; margin-left:20px; color:#666;}
#kmglkgl .pagetheall{float:left; font-size:12px; margin-top:2px;}
#kmglkgl .pagetheallfont{font-size:12px;}
#kmglkgl .pagelimsga{color:#299be4;}
#kmglkgl .pagelia{color:#299be4;}
#kmglkgl #table{
float:left;
width:750px;
text-align:left;
border:1px #81beff solid;
border-bottom:none;
color:#5c5c5c;
margin-left:-1px;
}
#kmglkgl #mythetable{
width:750px;
margin:0 auto;
}
#kmglkgl #table li{
float:left;
width:750px;
height:40px;
border-bottom:1px solid #81beff;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#kmglkgl #table li.title{
width:750px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#cdedf8;
padding-top:13px;
}

#kmglkgl #table li span.list1{
text-decoration:none;
float:left;
width:100px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#kmglkgl #table li span.list2{
text-decoration:none;
float:left;
width:100px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list3{
text-decoration:none;
float:left;
width:100px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list4{
text-decoration:none;
float:left;
width:80px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list5{
text-decoration:none;
float:left;
width:100px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list6{
text-decoration:none;
float:left;
width:90px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list7{
text-decoration:none;
float:left;
width:90px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#kmglkgl #table li span.list8{
text-decoration:none;
float:left;
width:90px;
height:22px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>

<div id="mains">
<div id="kmglkgl">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã����ܹ���-������</div>
        </div>
        
        <div class="v1">
        	<div class="v2">
            	<div style="height:40px;">
                    <div class="fl v3">&nbsp;&nbsp;��״̬��&nbsp;</div>
                    <div class="fl">
                        <select class="v4" name="" id="kazt" onchange="soso()">
<option value="0">ȫ��</option>
                            <option value="1" <?php if($kazt==1) { ?>selected="selected"<?php } ?>>δ��ֵ����</option>
                            <option value="2" <?php if($kazt==2) { ?>selected="selected"<?php } ?>>�ѳ�ֵ����</option>
                        </select>
                    </div>
                    <div class="fl v3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ֵ״̬��&nbsp;</div>
                    <div class="fl">
                        <select class="v4" name="" id="czzt" onchange="soso()">
<option value="0">ȫ��</option>
                            <option value="1" <?php if($czzt==1) { ?>selected="selected"<?php } ?>>��ֵ�ɹ�</option>
                            <option value="2" <?php if($czzt==2) { ?>selected="selected"<?php } ?>>��ֵʧ��</option>
                            <option value="3" <?php if($czzt==3) { ?>selected="selected"<?php } ?>>��ֵ��</option>
                        </select>
                    </div>
                    <div class="fl v3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;������&nbsp;</div>
                    <div class="fl">
                        <input class="v10" type="text" name="date" id="sjh" value="<?=$sjh?>" placeholder="�ڴ����뵥���ֻ��Ż򿨺�...">
                    </div>
                    <div class="fl v12"><input id="thesearch" class="v11" type="text" name="" style="background:url(baima/template/images/search2.png) no-repeat;" onclick="soso()"></div>
                </div>
            </div>
        </div>
        
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ײ�</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ״̬</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵʱ��</div></span>
                            <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��Ӫ��</div></span>
                            <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ����</div></span>
                            <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ۿ�״̬</div></span>
                        </li>

                        
                        <div id="msgyes">
                             <?php if(is_array($kaarr)) { foreach($kaarr as $value) { ?>
                            <li>
                                <span class="list1 mt"><?=$value['id']?></span>
                                <span class="list2 mt"><?=$value['pwd']?></span>
                                <span class="list3 mt" ><?=$value['liuliang']?>M</span>
                                <span class="list4 mt" ><?=$llczztarr[$value['zt']]?></span>
                                <span class="list5 mt2"><?=$value['jihuotime']?></span>
                                <span class="list6 mt"><?=$sjhtypearr[$value['sjhtype']]?></span>
                                <span class="list7 mt"><?=$value['sjh']?></span>
                                <span class="list8 mt"><?=$value['kkmsg']?></span>
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
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>ҳ
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('<?=$url?>');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                        </div>
                        <div id="msgno" style="display:none;">
                            <li style="height:300px;">
                            
                                <div style="margin-top:140px; font-size:14px; font-weight:bold;">
                                    �ף�δ��ѯ��������¼...
                                </div>
                                
                            </li>
                        </div>
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/kmglkgl.js" type="text/javascript"></script>


    </div>
    <div id="footer">
        <div id="copyright">
            <p>Copyright 2011 ֣�����е��ӿƼ����޹�˾ ��Ȩ���� ԥICP��09014995��</p>
            <p>����ʱ�䣺��һ������8:30-18:30���ڼ��ճ��⣩��˾��ַ��֣���н���·168��</p>
        </div>
    </div>
</div>
</div>

</body>
</html>