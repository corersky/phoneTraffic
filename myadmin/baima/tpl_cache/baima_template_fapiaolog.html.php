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
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulizhgl" class="fl" style="font-family:΢���ź�;">�˻�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=setpwd"><li id="xgmm" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=setuserinfo"><li id="xgzl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">�޸�����</div></div></li></a>
                            </ul>
                        </li>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu2.png" width="25" height="25"></div></span><span id="menuliyhgl" class="fl" style="font-family:΢���ź�;">�û�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=adduser"><li id="tjxyh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">������û�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=userlist"><li id="wdkh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">�ҵĿͻ�</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=jiekouuser"><li id="jkyh" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu2.png" width="20" height="20"></div><div class="fl">�����û�</div></div></li></a>
                            </ul>
                        </li>

<?php if(!empty($_SESSION["kefu_qx_ddgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu4.png" width="25" height="25"></div></span><span id="menuliddgl" class="fl" style="font-family:΢���ź�;">��������</span>
                            </a>

                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=orderweishen"><li id="wshdd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">δ��˶���</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=orderlist"><li id="ycldd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">�Ѵ�����</div></div></li></a>


 <a class="menu_a_a" href="index.php?action=liuliangorderlist"><li id="dhlldd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu4.png" width="20" height="20"></div><div class="fl">�һ���������</div></div></li></a>

                            </ul>
                        </li>
<?php } ?>

<?php if(!empty($_SESSION["kefu_qx_mbgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu3.png" width="25" height="25"></div></span><span id="menulimbgl" class="fl" style="font-family:΢���ź�;">ģ�����</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=tempweishen"><li id="wshmb" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu3.png" width="20" height="20"></div><div class="fl">δ���ģ��</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=templist"><li id="yshmb" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu3.png" width="20" height="20"></div><div class="fl">�����ģ��</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>

<?php if(!empty($_SESSION["kefu_qx_cwgl"])) { ?>
                        <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu5.png" width="25" height="25"></div></span><span id="menulizwgl" class="fl" style="font-family:΢���ź�;">�������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=dxchongzhilog"><li id="czjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">��ֵ��¼</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=dxchongzhi"><li id="cz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">��ֵ</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=fapiaolog"><li id="fpgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu5.png" width="20" height="20"></div><div class="fl">��Ʊ����</div></div></li></a>
                            </ul>
                        </li>
<?php } ?>



<?php if(!empty($_SESSION["kefu_qx_dlsgl"])) { ?>

<li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu1.png" width="25" height="25"></div></span><span id="menulidlsgl" class="fl" style="font-family:΢���ź�;">�����̹���</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=daili_adduser"><li id="tjdls" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">��Ӵ�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_userlist"><li id="gldls" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">���������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_xfjl"><li id="xfjl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">���Ѽ�¼</div></div></li></a>
<a class="menu_a_a" href="index.php?action=daili_czlog"><li id="czjl2" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">��ֵ��¼</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=daili_yaoqinggl"><li id="tjjs" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">�Ƽ�����</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=llweichuliorder"><li id="wcldd" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu1.png" width="20" height="20"></div><div class="fl">δ������</div></div></li></a>
                            </ul>
                        </li>
 <?php } ?>
 
 
 
 <?php if(!empty($_SESSION["kefu_qx_lltdgl"])) { ?>

  <li rel="warp" style="position:relative;">
                            <a class="menu_a" href="javascript:void(0)">
                                <span class="menu_icon fl"><div class="bigimg"><img src="baima/template/images/menu7.png" width="25" height="25"></div></span><span id="menulilltjgl" class="fl" style="font-family:΢���ź�;">����ͨ������</span>
                            </a>
                            <ul class="nav_menu Ldat hide">
                                <a class="menu_a_a" href="index.php?action=liuliangcztj"><li id="cztj" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">��ֵͳ��</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=liuliangxftj2"><li id="xftj" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">����ͳ��</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=lltongdaolist"><li id="lltdgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">����ͨ������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=lltongdaolistsw"><li id="snllgl" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">ʡ����������</div></div></li></a>
                                <a class="menu_a_a" href="index.php?action=kefuczlog"><li id="czrz" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">������־</div></div></li></a>

                                <a class="menu_a_a" href="index.php?action=gonggaolist"><li id="llgg" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">��������</div></div></li></a>

<a class="menu_a_a" href="index.php?action=addcytkuser"><li id="addcyff" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">�����������</div></div></li></a>
<a class="menu_a_a" href="index.php?action=whdq"><li id="whdq" style="font-family:΢���ź�;"><div class="smallimg1"><div class="smallimg2"><img src="baima/template/images/menu7.png" width="20" height="20"></div><div class="fl">ά������</div></div></li></a>
                            </ul>
                        </li>

 <?php } ?>
 
 


                    </ul>
                </div>
            </div>  
        </div>
<script>
function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}
function soso(){
var  sosonick=document.getElementById("sosonick").value;
var url="<?=XZKJURL?>"+"/index.php?action=fapiaolog&nick="+sosonick;
window.location.href=url;
}


function showfapiaodizhineirong(nei){
document.getElementById("fapiaodizhineirong").value=nei;
}

</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
<div id="zwglfpgl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">�������</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">��Ʊ����</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:40px; background-color:#def0fe; border:#c0e3ff 1px solid; margin:-1px 0 0 -1px;">
                                    <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                        <div class="fl" style="margin-top:4px; margin-left:10px;">������</div>
                                        <div class="fl"><input class="inputtext" type="text" id="sosonick"  value="<?=$nick?>" placeholder="�ڴ������û�����ѯ..."></div>
                                        <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                    </div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�û���</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����ʱ��</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>������</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��Ʊ̧ͷ</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ջ���ַ</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ջ���</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ջ��˵绰</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ע</div></span>
                            </li>
                            
                            
<?php if(is_array($orderarr)) { foreach($orderarr as $value) { ?>
                            <li>
                                
                                <span class="list1 mt"><?=$value['nick']?></span>
                                <span class="list2 mt"><?=$value['createtime']?></span>
                                <span class="list3 mt"><?=$value['jine']?>Ԫ</span>
                                <span class="list4 mt"><?=$value['gongshimingc']?></span>
                                <span class="list5 mt" onClick="showfapiaodizhineirong('<?=$value['shdz']?>');document.getElementById('showshdz').style.display='';"><?=$value['shdzmsg']?></span>
                                <span class="list6 mt"><?=$value['lxrxm']?></span>
                                <span class="list7 mt"><?=$value['xlrsjh']?></span>
                                <span class="list8 mt">
<?php if(empty($value['zt'])) { ?>
                                	<span class="cp" style="color:#006dcb;"><a href="<?=XZKJURL?>/useration.php?action=sendfapiao&id=<?=$value['id']?>" target="hiddeniframe" style="color:#006dcb;">���ͷ�Ʊ</a></span>
<?php } else { ?>
 <span style="">��Ʊ�ѷ���</span>
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
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>ҳ
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
                            ���޷�Ʊ�����¼
                        </div>
                    </div>
                    
                </li>
            </div>
            
        </div>
        
    </div>
</div>

<span id="showshdz" class="showshdz" style="display:none;">
<div style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-120px 0 0 -275px;width:550px;height:190px;border:2px solid #278ce4;box-shadow: 0px 0px 12px #278ce4;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#FFF;">
        <div style="width:550px;">
            <div style="height:40px; background-color:#278ce4; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                <div style="padding-top:5px; text-align:center;">��Ʊ�ջ���ַ</div>
            </div>
            <div id="close" style="margin-top:-36px;margin-left:510px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('showshdz').style.display='none';">
                <img src="baima/template/images/openclose.png">
            </div>
            <div style="width:530px; height:150px; overflow:hidden; margin-left:10px; margin-top:10px; font-family:'΢���ź�'; font-size:17px;">
                <div style="margin-left:20px; margin-top:20px;">
                	<textarea name="" id="fapiaodizhineirong" style="color:#666;width:470px;height:80px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; padding:10px; border:#278ce4 1px solid; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;" onKeyPress="this.style.color='black';" readonly></textarea>
                </div>
            </div>
        </div>
</div>
</span>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zwglfpgl.js" type="text/javascript"></script>


  
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