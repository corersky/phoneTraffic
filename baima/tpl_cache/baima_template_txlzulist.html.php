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
var  soso=document.getElementById("soso").value;
var url="<?=XZKJURL?>"+"/user.php?action=txlzulist&soso="+soso;
window.location.href=url;
}

function setzu_bai(id,zuname,beizhu){
document.getElementById("zuname").value=zuname;
document.getElementById("beizhu").value=beizhu;
document.getElementById("zuid").value=id;

}

function deltxlzu(id){
var url="<?=XZKJURL?>/txlation.php?action=delzu&zuid="+id;
hiddeniframe.location.href=url;
}


function showzuuserlist(zuid,zuname){
var title="��"+zuname+"��������Ա";
document.getElementById("div_showzuuserlist_title").innerHTML=title;
document.getElementById("showtxtdr_iframe_glzuuser").src="user.php?action=txlzulist_zuuser&sosozuid="+zuid;
}

</script>

<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<div id="mains">
<div id="txlfzgl">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��<?=$yingxiaoinfo['username']?>����ϵ�绰��<?=$yingxiaoinfo['sjh']?></div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã�ͨѶ¼-�������</div>
        </div>
        
        
        <div class="v1">
            <div class="v2">
                <div class="fl v3">&nbsp;&nbsp;������</div>
                <div class="fl"><input  class="v4" type="text" name="date" placeholder="�ڴ������ֻ�����/������ѯ" id="soso" value="<?=$soso?>"></div>
                <div class="fl v6"><input id="thesearch" class="v5" type="text" name="" style=" background:url(baima/template/images/search2.png) no-repeat; " onclick="soso()"></div>
            </div>
        </div>
        <div class="v7">
        	
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title">
                            <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                            <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ע</div></span>
                            <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��Ա(��)</div></span>
                            <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                        </li>

                        
                        <div id="msgyes">
                            
                            <div class="fl cp" style="position:absolute; margin-left:620px; margin-top:-37px;" onClick="document.getElementById('boxshowcjfz').style.display='';">
                                <img id="thecreateyes" src="baima/template/images/cjfz.png" width="130" height="36">
                            </div>
                            
                            
                            
                            
                            

                            
<?php if(is_array($zuarr)) { foreach($zuarr as $key=>$value) { ?>
                            <li id="li<?=$key?>" onMouseMove="showbj(this)" onMouseOut="closebj(this)">
                                
                                <span class="list1 mt" style="cursor:pointer;" onClick="setzu_bai('<?=$value['id']?>','<?=$value['zuname']?>','<?=$value['beizhu']?>');document.getElementById('boxshowxgfz').style.display='';"><?=$value['zuname']?><span id="zmbj<?=$key?>" style="cursor:pointer;display:none;" onClick="setzu_bai('<?=$value['id']?>','<?=$value['zuname']?>','<?=$value['beizhu']?>');document.getElementById('boxshowxgfz').style.display='';"><img src="baima/template/images/bj.png" width="16" height="16"></span></span>
                                <span class="list2 mt"  style="cursor:pointer;" onClick="setzu_bai('<?=$value['id']?>','<?=$value['zuname']?>','<?=$value['beizhu']?>');document.getElementById('boxshowxgfz').style.display='';"><?=$value['beizhumsg']?><span id="bzbj<?=$key?>" style="cursor:pointer;display:none;" onClick="setzu_bai('<?=$value['id']?>','<?=$value['zuname']?>','<?=$value['beizhu']?>');document.getElementById('boxshowxgfz').style.display='';"><img src="baima/template/images/bj.png" width="16" height="16"></span></span>
                                <span class="list3 mt"><?=$value['num']?></span>
                                <span class="list4 mt" style="color:#017bb4;">
<span>
    <?php if(0 && empty($value['num'])) { ?>
                                	<span style="color:#a5a5a5; cursor:default;">����Ա</span>
<?php } else { ?>
<span style="cursor:pointer;" onClick="showzuuserlist('<?=$value['id']?>','<?=$value['zuname']?>');document.getElementById('boxshowglzy').style.display='';">������Ա</span>
<?php } ?>
</span>
                                    |
                                    <span style="cursor:pointer;" onClick="document.getElementById('showtdeltips<?=$key?>').style.display='';">ɾ����</span>
                                </span>
                                <div id="showtdeltips<?=$key?>" style="position:absolute; font-size:13px; margin-top:-30px; margin-left:578px; width:170px; height:37px; border:#ff8400 1px solid; background-color:#ffface; display:none;">
                                	<div style="float:left; margin-top:12px; margin-left:8px; margin-right:5px;">�Ƿ�ɾ���飿</div>
                                    <div style="float:left; margin:6px; cursor:pointer;"><img src="baima/template/images/scfzyes.png" width="25" height="25" onclick="deltxlzu('<?=$value['id']?>');"></div>
                                    <div style="float:left; margin:6px; cursor:pointer;" onClick="document.getElementById('showtdeltips<?=$key?>').style.display='none';"><img src="baima/template/images/scfzno.png" width="25" height="25"></div>
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
                        
                        <div id="msgno" style="display:none;">
                            <li style="height:300px;">
                            
                                <div style="margin-top:140px; margin-left:170px; font-size:14px; font-weight:bold;">
                                    <div class="fl">
                                    	�ף�����û�з��飬�봴������
                                    </div>
                                    <div class="fl cp" style="margin-top:-10px; margin-left:20px;" onClick="document.getElementById('boxshowcjfz').style.display='';">
                                    	<img id="thecreateno" src="baima/template/images/cjfz.png" width="130" height="36">
                                    </div>
                                </div>
                                
                            </li>
                        </div>
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<span id="boxshowcjfz" class="boxshowcjfz" style="display:none;">
<div id="dialogBgshowcjfz" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div id="dialogshowcjfz" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-175px 0 0 -275px;width:550px;height:300px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
<div class="dialogTopshowcjfz">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div class="v8">
                	<div class="v9">��������</div>
                </div>
                <div class="v10">
                	


<form action="<?=XZKJURL?>/txlation.php?action=settxlzu" method="post" target="hiddeniframe">
                    <div>
                    	<div id="showthesms11">
                        	<div>
                    			<span class="v11">������</span><span><input class="inputtext v12" name="zuname" type="text" maxlength="10" onpropertychange="if(value.length>10) value=value.substr(0,10)" onKeyPress="this.style.color='black';" placeholder="���ڴ���������..."/></span>
                            </div>
                            <div class="v13">
                                <span id="getsmszishu11" style="font-size:16px;">0</span>/10
                            </div>
                        </div>
                        <div id="showthesms12" class="v14">
                        	<div>
                            	<span class="v11">��ע��</span><span><textarea id="thesmstext" class="v15" name="beizhu" maxlength="25" onpropertychange="if(value.length>25) value=value.substr(0,25)" onKeyPress="this.style.color='black';" placeholder="���ڴ������鱸ע ���磺����Ϊ�г����пͻ�"></textarea></span>
                            </div>
                            <div class="v16">
                                <span id="getsmszishu12" style="font-size:16px;">0</span>/25
                            </div>
                        </div>
                        <div class="v17">
<input type="hidden" name="zuid" value=""/>
                        	<input class="v18" type="submit" value="" style="width:83px; height:37px;background-image:url(baima/template/images/cjfz2.png);">
                        </div>
                    </div>
</form>
                    




                </div>
            </div>
<div id="showcjfzclose" class="v19" onClick="document.getElementById('boxshowcjfz').style.display='none';">
<img src="baima/template/images/openclose.png" style="margin-top:67px">
</div>
</div>
</div>
</span>
<span id="boxshowxgfz" class="boxshowxgfz" style="display:none;">
<div id="dialogBgshowxgfz" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div id="dialogshowxgfz" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-175px 0 0 -275px;width:550px;height:300px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
<div class="dialogTopshowxgfz">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div class="v8">
                	<div class="v9">�޸ķ���</div>
                </div>
                <div class="v10">
                	


<form action="<?=XZKJURL?>/txlation.php?action=settxlzu" method="post" target="hiddeniframe">
                    <div>
                    	<div id="showthesms21">
                        	<div>
                    			<span class="v11">������</span><span><input class="inputtext v12" name="zuname" id="zuname" value="" type="text" maxlength="10" onpropertychange="if(value.length>10) value=value.substr(0,10)" onKeyPress="this.style.color='black';" placeholder="���ڴ���������..."/></span>
                            </div>
                            <div class="v13">
                                <span id="getsmszishu21" style="font-size:16px;">0</span>/10
                            </div>
                        </div>
                        <div id="showthesms22" class="v14">
                        	<div>
                            	<span class="v11">��ע��</span><span><textarea name="beizhu" id="beizhu" class="v15" maxlength="25" onpropertychange="if(value.length>25) value=value.substr(0,25)" onKeyPress="this.style.color='black';" placeholder="���ڴ������鱸ע ���磺����Ϊ�г����пͻ�"></textarea></span>
                            </div>
                            <div class="v16">
                                <span id="getsmszishu22" style="font-size:16px;">0</span>/25
                            </div>
                        </div>
                        <div class="v17">
<input type="hidden" name="zuid" id="zuid" value=""/>
                        	<input class="v18" type="submit" value="" style="width:83px; height:37px;background-image:url(baima/template/images/qrxg.png);">
                        </div>
                    </div>
</form>





                    
                </div>
            </div>
<div id="showxgfzclose" class="v19" onClick="document.getElementById('boxshowxgfz').style.display='none';">
<img src="baima/template/images/openclose.png" style="margin-top:67px">
</div>
</div>
</div>
</span>
<span id="boxshowglzy" class="boxshowglzy" style="display:none;">
<div id="dialogBgshowglzy" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div id="dialogshowglzy" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-270px 0 0 -275px;width:550px;height:540px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
<div class="dialogTopshowglzy">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;" id="div_showzuuserlist_title">������������������Ա</div>
                </div>
                <div style="margin-top:6px;">

                	<iframe name="showtxtdr_iframe_glzuuser" id="showtxtdr_iframe_glzuuser" src="#" width="550" height="500" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">���ŷ���ƽ̨ʹ���˿�ܼ��������������������֧�ֿ�ܣ����������������Ա�����ʹ�á� </iframe>

                </div>
            </div>
<div id="showglzyclose" style="position:absolute;margin-top:-610px;margin-left:500px; width:30px; height:30px; cursor:pointer;" onClick="document.getElementById('boxshowglzy').style.display='none';">
<img src="baima/template/images/openclose.png" style="margin-top:67px">
</div>
</div>
</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/txlfzgl.js" type="text/javascript"></script>


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