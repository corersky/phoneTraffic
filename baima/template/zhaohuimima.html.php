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
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<script src="{XZKJURL}/baima/template/js/userregister.js" type="text/javascript"></script>

<div id="registers">
<div id="container">
    <div id="header">
        <img src="baima/template/images/indextop.png" width="1000" height="80">
    </div>
    
    <div id="main">



<div id="mains">
    <div id="retrievepwd">
	
        <div class="v1">
        	<img src="baima/template/images/retrevepwdtitle.png" width="100" height="30">
        </div>
		
		<!--{if empty($username)}-->
        <div id="thefirst" class="v2">
		<form action="{XZKJURL}/zhaohuimima.php" method="post" target="">
        	<div>
        		<span class="colorred">*</span><span class="v3">�û�����</span><span class="v4"><input id="findusername" class="inputtext" name="username" id="username" value="" type="text" maxlength="20" onKeyPress="this.style.color='black';" placeholder="�����������û���..." /></span>
            </div>
			
			<div class="cp v5">
               <input class="xybbtn" type="submit" value="" style="background-image:url(baima/template/images/xyb.png);">
            </div>
			
         
			</form>
        </div>
		<!--{else}-->
		
        <div id="thesecound" class="v6">
        	<div style=" width:500px; margin:0 auto;">
            	<div class="fl"><img src="baima/template/images/retrievepwd1.png" width="26" height="26"></div>
            	<div class="fl">�����û�����{$username} </div>
            </div>


            <!--<div class="v8">
            	<div class="fl"><img src="baima/template/images/retrievepwd2.png" width="26" height="26"></div>
            	<div class="fl v9">�����ֻ�����Ϊ��{$sjh} </div>
                <div id="getmm" class="fl cp v10" onClick="showmmtime();sendzhaihuimima('{$username}');"><img src="baima/template/images/getmm.png" width="121" height="29"></div>
                <div id="mmbtnbg" class="fl v11" style=" display:none;"><img src="baima/template/images/mmbtnbg.png" width="310" height="29"></div>
                <div id="mmbtntext" class="fl v12" style=" display:none;">���·�������(60s)</div>
            </div>-->


            <div class="v8">
            	<div class="fl"><img src="baima/template/images/retrievepwd2.png" width="26" height="26"></div>
            	<div class="fl v9">��ע��ʱ�󶨵��ֻ�����Ϊ��{$sjh} </div>
            </div>
            <div class="v10">
                <div id="zhmmqrfs1" class="fl cp v11" onClick="showmmtime();sendzhaihuimima('{$username}');">
                	<div class="fl">
                		<img src="baima/template/images/zhmmqrfs1.png" width="126" height="39">
                    </div>
                    <div id="zhmmqrfs2tip" class="fl v12">�����ͺ����뽫�Զ�����ʽ<br>���������󶨵��ֻ��ڣ�</div>
                </div>
                <div id="zhmmqrfs2" class="fl v13" style="display:none;">
                	<div class="fl">
                		<img src="baima/template/images/zhmmqrfs2.png" width="126" height="39">
                    </div>
                    <div id="mmbtntext" class="fl v14">�ٴη��ͣ�<span id="mmbtntext2">60s</span>��</div>
                    <div id="zhmmqrfs2tip" class="fl v19">�������ѷ��ͣ���û���յ����ţ�<br>���Ժ��ٴη��ͣ�</div>
                </div>
                <div id="zhmmqrfs3" class="fl cp v15" style="display:none;" onClick="showmmtime();sendzhaihuimima('{$username}');">
                	<div class="fl">
                		<img src="baima/template/images/zhmmqrfs3.png" width="126" height="39">
                    </div>
                    <div id="zhmmqrfs3tip" class="fl v16">����û���յ����ţ����ٴη��ͣ�</div>
                </div>
                
                <div id="zhmmqrfs4" class="fl v15" style="display:none;">
                	<div class="fl">
                		<img src="baima/template/images/zhmmqrfs4.png" width="126" height="39">
                    </div>
                    <div id="zhmmqrfs4tipfive" class="fl colorred v12">������������Ƶ����Ϊ��֤���˻���ȫ��<br>����ϵ�ͷ���ȡ���룩</div>
                </div>
                
            </div>
            <div id="showtologin" class="v18" style="display:none;">
                <a href="index.php"><img src="baima/template/images/zhmmtologin.png" width="122" height="33"></a>
            </div>





        </div>
		<!--{/if}-->
		
		
		
		
    </div>
</div>

<script src="baima/template/js/retrievepwd.js" type="text/javascript"></script>



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