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
var  sosozt=document.getElementById("sosozt").value;
var  sososjh=document.getElementById("sososjh").value;

var  starttime=document.getElementById("starttime").value;
var  endtime=document.getElementById("endtime").value;

var  yystype=document.getElementById("yystype").value;
var  tkzt=document.getElementById("tkzt").value;
var  fkzt=document.getElementById("fkzt").value;

   
 
var url="<?=XZKJURL?>"+"/index.php?action=llchongzhilog&sjh="+sososjh+"&zt="+sosozt+"&starttime="+starttime+"&endtime="+endtime+"&yystype="+yystype+"&tkzt="+tkzt+"&fkzt="+fkzt;
window.location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
<div id="csjllczlljl">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã����ֻ�����-��ֵ������¼</div>
        </div>
        
        <div class="v1" style="height:20px;">
        	<div class="v2">
            	<div class="fl v3">��ֵ״̬��&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="sosozt" onchange="soso()">
<option value="0">ȫ��</option>
                        <option value="1" <?php if($zt==1) { ?>selected="selected"<?php } ?>>��ֵ��</option>
                        <option value="2" <?php if($zt==2) { ?>selected="selected"<?php } ?>>��ֵ�ɹ�</option>
                        <option value="3" <?php if($zt==3) { ?>selected="selected"<?php } ?>>��ֵʧ��</option>
<option value="4" <?php if($zt==4) { ?>selected="selected"<?php } ?>>�ȴ���ֵ</option>
                    </select>
                </div>
            </div>
            <div class="v2">
            	<div class="fl v3">&nbsp;ʱ�䣺&nbsp;</div>
                <div class="fl">
                	<input class="v10" style="width:90px;font-family:'΢���ź�'; font-size:15px;" type="text" id="starttime" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" value="<?=$starttime?>">
                </div>
                <div class="fl"> 
                	&nbsp;-&nbsp;
                </div>
                <div class="fl">
                	<input class="v10" style="width:90px;font-family:'΢���ź�'; font-size:15px;" type="text" id="endtime" onClick="WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd'})" value="<?=$endtime?>">
                </div>
            </div>
            <div class="v8">
                <div class="fl v9">������</div>
                <div class="fl"><input id="sososjh" class="v10" type="text" name="date" placeholder="�ڴ������ֻ�����" value="<?=$sjh?>"></div>
                <div class="fl v12"><input id="thesearch" class="v11" type="text" name="" style="background:url(baima/template/images/search2.png) no-repeat;" onclick="soso()"></div>
            </div>
            <div class="v8">
                <div class="fl v12"><a id="myatip" href="" onClick="daochu()"><img src="baima/template/images/czjldc.png"></a></div>
            </div>
        </div>
        <div class="v1" style="height:20px;">
        	<div class="v2">
            	<div class="fl v3">�ۿ�״̬��&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="fkzt" onchange="soso()">
<option value="0">ȫ��</option>
                        <option value="1" <?php if($fkzt==1) { ?>selected="selected"<?php } ?>>��ֵʧ�ܷ���</option>
                        <option value="2" <?php if($fkzt==2) { ?>selected="selected"<?php } ?>>��ֵʧ�ܴ�����</option>
                    </select>
                </div>
            </div>
            <div class="v2">
            	<div class="fl v3">&nbsp;&nbsp;�ۺ�״̬��&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="tkzt" onchange="soso()">
<option value="0">ȫ��</option>
                        <option value="2" <?php if($tkzt==2) { ?>selected="selected"<?php } ?>>��ֵ�ɹ�δ���˷���</option>
                        <option value="1" <?php if($tkzt==1) { ?>selected="selected"<?php } ?>>��ʱ��������</option>
                    </select>
                </div>
            </div>
            <div class="v2">
            	<div class="fl v3">&nbsp;&nbsp;��Ӫ�̣�&nbsp;</div>
                <div class="fl">
                	<select class="v4" name="" id="yystype" onchange="soso()">
<option value="0">ȫ��</option>
                        <option value="3" <?php if($yystype==3) { ?>selected="selected"<?php } ?>>�ƶ�</option>
                        <option value="1" <?php if($yystype==1) { ?>selected="selected"<?php } ?>>��ͨ</option>
                        <option value="2" <?php if($yystype==2) { ?>selected="selected"<?php } ?>>����</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="v7">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ����</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>������</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ײ�</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵʱ��</div></span>
                            <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>״̬����ʱ��</div></span>
                            <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ״̬</div></span>
                            <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���Ľ��</div></span>
                            <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ۿ�״̬</div></span>
                            <span class="list9" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ע</div></span>
                        </li>

                        
                        <div id="msgyes">
                            
  <?php if(is_array($czlogarr)) { foreach($czlogarr as $key=>$value) { ?>
                            <li>
                                
                                <span class="list1 mt"><?=$value['sjh']?></span>
                                <span class="list2 mt"><?=$value['province']?></span>
                                <span class="list3 mt"><?=$value['liuliang']?>M</span>
                                <span class="list4 mt3"><?=$value['createtime']?></span>
                                <span class="list5 mt3"><?=$value['upzttime']?>&nbsp;</span>
                                <span class="list6 mt"><span id="myczzt<?=$key?>"><?=$llczztarr[$value['zt']]?></span>
<?php if($value['zt']==3) { ?>
                                	<span class="cp"><a href="llaction.php?action=ordercx&id=<?=$value['id']?>" target="hiddeniframe">����</a></span>
                                 <?php } elseif($value['zt']==0 && $value['istk']==0) { ?>
                                	<span class="cp"><a href="llaction.php?action=ordertk&id=<?=$value['id']?>" target="hiddeniframe">�˿�</a></span>
                                 <?php } ?>
 
 
</span>
                                <span class="list7 mt"><?=$value['shje']?>Ԫ</span>
                                <span id="zt<?=$key?>" class="list8 mt" onMouseMove="showmovekkzt(this)" onMouseOut="showoutkkzt(this)">
                                    <?php if($value['istk']==1) { ?>
                                        �ѷ���
                                    <?php } else { ?>
<?php if($value['zt']==2) { ?>
�ȴ�����<span class="cp"><img src="baima/template/images/showquestiontips.png"></span>
<?php } else { ?>
�ѿۿ�
<?php } ?>
<?php } ?>

</span>
                                <span class="list9 mt"><?=$value['beizhu2']?></span>
                                
                                
                                <div id="showkkzttips<?=$key?>" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:130px; margin-left:590px; line-height:20px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; display:none;">
                                    <div style="margin:8px; text-align:left;word-break:break-all;word-warp:break-word;">
                                        72Сʱ���Զ�����
                                    </div>
                                </div>
                                
                                
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
                                    �ף���ʱ��δ��ѯ��������¼...
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
<script src="baima/template/js/csjllczlljl.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
for(var i=0; i<10;i++)
{
if($.trim($("#myczzt"+i).html())=="��ֵ��")
{
$("#myczzt"+i).addClass("czz");
}
else if($.trim($("#myczzt"+i).html())=="��ֵʧ��")
{
$("#myczzt"+i).addClass("czsb");
}
else if($.trim($("#myczzt"+i).html())=="�ȴ���ֵ")
{
$("#myczzt"+i).addClass("ddcl");
}
else
{

}
}
});
function daochu()
{
var sjh=encodeURIComponent($("#sososjh").val());
var zt=encodeURIComponent($("#sosozt").val());
var starttime=encodeURIComponent($("#starttime").val());
var endtime=encodeURIComponent($("#endtime").val());
document.getElementById("myatip").href="liuliangtocsv.php?sjh="+sjh+"&zt="+zt+"&starttime="+starttime+"&endtime="+endtime;
}
function showmovekkzt(obj)
{
if($("#zt"+obj.id.substring(2,4)).text().trim()=="�ȴ�����")
{
$("#showkkzttips"+obj.id.substring(2,4)).fadeIn();
}
else
{
$("#showkkzttips"+obj.id.substring(2,4)).fadeOut();
}
}
function showoutkkzt(obj)
{
$("#showkkzttips"+obj.id.substring(2,4)).fadeOut();
}

String.prototype.trim=function()
{
return this.replace(/(^\s*)|(\s*$)/g, "");  
} 
</script>

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