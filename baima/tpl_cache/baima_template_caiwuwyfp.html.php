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
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>


<div id="mains">
<div id="cwglwyfp">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��<?=$yingxiaoinfo['username']?>����ϵ�绰��<?=$yingxiaoinfo['sjh']?></div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã��������-��Ҫ��Ʊ</div>
        </div>
        <div class="colorred fl v1">
        	ע�����ŷ�Ʊ����1000Ԫ���ݷѣ�����1000Ԫ���ԹҺ��ŵ���ʽ����
        </div>
        <div class="fr v2" onClick="document.getElementById('boxshowck').style.display='';">
        	<img src="baima/template/images/ckfpsqjl.png" width="129" height="28">
        </div>
        <div class="v3">
            <div id="mythetable">
                <div id="table">
                    <ul>
                        <li class="title" style="font-family:'΢���ź�';">
                            ���뷢Ʊ
                        </li>
                        <li>
                            <div class="v4">


<form action="<?=XZKJURL?>/caiwuation.php?action=syfapiao" method="post" target="hiddeniframe">
                            	<div id="theborderheight" class="v5">
                                    <div class="v6">
                                        <span>��</span><span class="v8">��ǰ���ۼƿ���ȡ��Ʊ���Ϊ��</span><span class="colorred"><?=$zjine?></span><span>&nbsp;Ԫ</span>
                                    </div>
                                    <div class="v7">
                                        <span>��</span><span class="v8">��ǰ���Ѿ���ȡ��Ʊ���Ϊ��</span><span class="colorred"><?=$ylqjine?></span><span>&nbsp;Ԫ</span>
                                    </div>
                                    <div style="width:550px; height:1px; background-color:#caedf8; margin:0 auto; margin-top:15px; margin-left:-70px;"></div>
                                    <div style="margin-top:15px;">
                                        <span>��</span><span class="v8">����д��Ҫ���ķ�Ʊ��</span><span class="colorred"><input class="v9" name="syjine" id="syjine" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�ڴ����뷢Ʊ���..." /></span><span style="color:#2391d5;">&nbsp;Ԫ</span>
                                    </div>
                                    <div class="v7">
                                        <span>��</span><span class="v8">����д��Ҫ��Ʊ�Ĺ�˾ȫ�ƣ�</span><span class="colorred"><input class="v9" name="fpgongshi" id="fpgongshi" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�ڴ����뷢Ʊ̧ͷ..." /></span>
                                    </div>
                                    <div class="v7">
                                        <span><input type="radio" checked></span><span class="v8">ʹ��Ĭ�ϼ��͵�ַ</span><span id="wyfpckshdz1" class="colorred" style="cursor:pointer;" onClick="showmsg()"><img src="baima/template/images/wyfpckshdz.png" width="150" height="16"></span><spa id="wyfpckshdz2" class="colorred cp" style="display:none;" onClick="closemsg()"><img src="baima/template/images/wyfpckshdz2.png" width="150" height="16"></span>
                                    </div>
                                </div>
                                
                                <div id="wyfpbtn" class="v10">
                                	<input class="v13" type="submit" value="" style="width:136px; height:39px;background-image:url(baima/template/images/ljlqfp.png);">
                                </div>
 </form>







                                <form action="<?=XZKJURL?>/caiwuation.php?action=setfapiaouserinfo" method="post" target="hiddeniframe">
                                <div id="showmsgarea" class="v11">
                                	<div class="v12">
                                        <div style="margin-top:20px;">
                                        	<span>��Ʊ�ջ���ϵ�ˣ�</span><span class="colorred"><input class="v14" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�ڴ�������ϵ��..." name="lxrxm" id="lxrxm" value="<?=$fapiaouserinfo['lxrxm']?>"/></span>
                                    	</div>
                                        <div style="margin-top:10px;">
                                        	<span>��Ʊ�ջ���ϵ�˵绰��</span><span class="colorred"><input class="v14" type="text" maxlength="12" onKeyPress="this.style.color='black';" placeholder="�ڴ�������ϵ�˵绰..." name="xlrsjh" id="xlrsjh" value="<?=$fapiaouserinfo['xlrsjh']?>"/></span>
                                    	</div>
                                        <div style="margin-top:10px;">
                                        	<div class="fl">
                                        		<span>���ķ�Ʊ�ʼĵ�ַ��</span><span class="colorred"><input class="v15"  type="text" maxlength="500" onKeyPress="this.style.color='black';" placeholder="�ڴ����뷢Ʊ�ʼĵ�ַ..." name="shdz" id="shdz" value="<?=$fapiaouserinfo['shdz']?>"/></span>
                                            </div>
                                            <div class="fl cp v16"><input class="v13" type="submit" value="" style="width:69px; height:24px;background-image:url(baima/template/images/wyfpbc.png);"></div>
                                    	</div>
                                    </div>
                                </div>
 </form>



                            </div>
                        </li>

                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<span id="boxshowck" class="boxshowck" style="display:none;">
<div id="dialogBgshowck" style="position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background-color:#ccc;opacity:.6;filter:alpha(opacity=60);"></div>
<div id="dialogshowck" class="animated" style="position:fixed;top:50%;left:50%;z-index:10000;margin:0 auto;margin:-245px 0 0 -275px;width:550px;height:490px;border:3px solid #2da4eb;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;background-color:#fff;">
<div class="dialogTopshowck">
<div style="width:550px;">
            	<div id="myopenthehmdid" style="display:none;"></div>
            	<div style="height:40px; background-color:#2da4eb; font-family:'΢���ź�'; font-size:22px; color:#FFF;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;">
                	<div style="padding-top:5px; text-align:center;">��Ʊ�����¼</div>
                </div>
                <div style="margin-top:6px;">
                	<iframe name="showck" src="user.php?action=caiwuwyfp_log" width="550" height="450" frameborder="0" scrolling="no" style="padding:5px 0px; margin-top:-11px;">���ŷ���ƽ̨ʹ���˿�ܼ��������������������֧�ֿ�ܣ����������������Ա�����ʹ�á� </iframe> 
                </div>
            </div>
<div id="showckclose" style="position:absolute;margin-top:-560px;margin-left:500px; cursor:pointer;" onClick="document.getElementById('boxshowck').style.display='none';">
<img src="baima/template/images/openclose.png" style="margin-top:67px">
</div>
</div>
</div>
</span>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/cwglwyfp.js" type="text/javascript"></script>
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