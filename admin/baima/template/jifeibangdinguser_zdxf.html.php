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
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
</script>
<div id="jfgljfgl2ck1" style="float:left;width:550px; height:230px;">

    <div style="margin-top:50px;">
        <div id="mythetable">
            <div id="table">
                <ul>
                	
                	<div style="position:absolute; margin-top:-27px; font-size:14px; color:#FFF; font-weight:bold;">
                        <span class="fl cp">
                        	<div>
                        	<img src="baima/template/images/jfglffmx1.png" width="78" height="26">
                        	</div>
                            <div style="position:absolute; margin-top:-23px; margin-left:10px;">
                            	�������
                            </div>
                        </span>
                        <span class="fl cp" style="margin-left:10px;">
                            <a href="index.php?action=jifeibangdinguser_ayfh&uid={$uid}">
                                <div>
                                <img src="baima/template/images/jfglffmx2.png" width="78" height="26">
                                </div>
                                <div style="position:absolute; margin-top:-23px; margin-left:10px;">
                                    ���·���
                                </div>
                            </a>
                        </span>
                    </div>
                            
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�Ʒ�����</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�۷ѽ��</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�۷�ʱ��</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�۷�״̬</div></span>
                    </li>
						<!--{loop $userarr $value}-->
                        <li>
                            
                            <span class="list1 mt">�������</span>
                            <span class="list2 mt">{$value[jine]}</span>
                            <span class="list3 mt">{$value[createtime]}</span>
                            <span class="list4 mt">
							�۷ѳɹ�
							</span>
                            
                        </li>
						<!--{/loop}-->
						
			
					
                    
                    <li style="height:58px;">
                    
                        <div class="thepage">
                            <span class="pagechoose">{$fenarr[sy]}</span>&nbsp;
                            <span class="pagechoose">{$fenarr[shangy]}</span>&nbsp;
                            <span class="pagechoose">{$fenarr[xiay]}</span>&nbsp;
                            <span class="pagechoose">{$fenarr[weiy]}</span>&nbsp;
                        </div>
                        <div class="pageall">
                            <div class="pagetheall">
                                ��<span class="pagetheallfont">{$page}/{$zpage}</span>ҳ
                            </div>
                            
                            <div class="pagego">
                                <div class="fl">
                                ��<span class="pagenum">
                                    <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="" maxlength="3" onKeyPress="this.style.color='black';" />
                                </span>ҳ
                                </div>
                                <div class="pagegoto">
                                    <input type="button" value="" onClick="tiaozhuan('{$url}');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                                </div>
                            </div>
                        </div>
                        
                    </li>
                    
                </ul>
                <ul style="display:none;">
                    <li class="title">
                        <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���ź���</div></span>
                        <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����</div></span>
                        <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����ʱ��</div></span>
                        <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����״̬</div></span>
                    </li>

                    
                    <div id="nowpage1" class="nowpage">
                    	
                        <li style="height:400px;">
                        
                            <div style="margin-top:160px; font-size:14px; font-weight:bold;">
                            	�������ĺ���<span style="color:#F00;">������</span>����˶Ժ�����������
                            </div>
                            
                        </li>
                        
                    </div>
                    
                </ul>
            </div>
        </div>
    </div>
</div>



</body>
</html>