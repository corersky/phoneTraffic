<!--{template header}-->
<style>
#dlsglxfjl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#dlsglxfjl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#dlsglxfjl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'΢���ź�'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#dlsglxfjl .v1{}
#dlsglxfjl .v2{}
#dlsglxfjl .v3{}
#dlsglxfjl .v4{}
#dlsglxfjl .v5{}
#dlsglxfjl .v6{}
#dlsglxfjl .v7{}
#dlsglxfjl .v8{}
#dlsglxfjl .mt{margin-top:12px;}
#dlsglxfjl .mt2{margin-top:5px;}
#dlsglxfjl #table{
	float:left;
	width:1130px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#dlsglxfjl #mythetable{
	width:1130px;
	margin:0 auto;
}
#dlsglxfjl #table li{
float:left;
width:1130px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#dlsglxfjl #table li.title{
width:1130px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#dlsglxfjl #table li span.list1{
text-decoration:none;
float:left;
width:90px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#dlsglxfjl #table li span.list2{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list3{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list4{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list5{
text-decoration:none;
float:left;
width:80px;
height:14px;
overflow:hidden;
cursor:pointer;
font-size:13px;
}
#dlsglxfjl #table li span.list6{
text-decoration:none;
float:left;
width:50px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list7{
text-decoration:none;
float:left;
width:50px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list8{
text-decoration:none;
float:left;
width:40px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list9{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list10{
text-decoration:none;
float:left;
width:70px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list11{
text-decoration:none;
float:left;
width:90px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list12{
text-decoration:none;
float:left;
width:60px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list13{
text-decoration:none;
float:left;
width:60px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list14{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#dlsglxfjl #table li span.list15{
text-decoration:none;
float:left;
width:150px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}


.czz{
	color:#36F;
}
.czsb{
	color:#F00;
}
.ddcz{
	color:#0C3;
}
</style>

<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
function soso(){
	var  sosoy=document.getElementById("sosoy").value;
	var  sosom=document.getElementById("sosom").value;
	var  sosonick=document.getElementById("sosonick").value;
	
	var  sosod=document.getElementById("sosod").value;
	var  sosozt=document.getElementById("sosozt").value;
	var  sosoly=document.getElementById("sosoly").value;
	
	var  tongdaoid=document.getElementById("tongdaoid").value;
	var  yystype=document.getElementById("yystype").value;
	
	var  liuliang=document.getElementById("ydtaocan").value;
	
	var  sheng=document.getElementById("sheng").value;
	var  tkzt=document.getElementById("tkzt").value;
     
	  
	
	var url="{XZKJURL}"+"/index.php?action=daili_xfjl2&sosoy="+sosoy+"&sosom="+sosom+"&nick="+sosonick+"&sosod="+sosod+"&zt="+sosozt+"&ly="+sosoly+"&tongdaoid="+tongdaoid+"&yystype="+yystype+"&liuliang="+liuliang+"&sheng="+sheng+"&tkzt="+tkzt;
	window.location.href=url;
}

function xfjlqh(){
	var  sosoy=document.getElementById("sosoy").value;
	var  sosom=document.getElementById("sosom").value;
	var  sosonick=document.getElementById("sosonick").value;
	var url="{XZKJURL}"+"/index.php?action=daili_xfjl&sosoy="+sosoy+"&sosom="+sosom+"&nick="+sosonick;
	window.location.href=url;

}
</script>

<div id="mains">
	<div id="dlsglxfjl" style="margin-bottom:30px;">
    	<div style="width:750px; height:40px; padding-left:10px; padding-top:20px;">
        	<div class="fl"><img src="baima/template/images/site1.png" width="38" height="38"></div>
            <div class="fl" style="margin-left:15px; margin-top:7px; font-family:'΢���ź�'; font-size:18px; color:#565656; font-weight:bold;">�����̹���</div>
        </div>
        <div style="width:750px; height:40px; padding-left:10px; margin-top:10px; background-color:#eee; border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;">
        	<div class="fl" style="margin-top:10px; margin-left:30px;"><img src="baima/template/images/siteimg.png" width="14" height="18"></div>
            <div class="fl" style="margin-top:10px; margin-left:10px; font-family:'΢���ź�'; font-size:14px; color:#979797; font-weight:bold;">���Ѽ�¼</div>
        </div>
        
        <div style="width:740px; padding-left:10px; padding-top:20px;">
        	
            <div id="msgyes">
            	
                <div id="mythetable">
                    <div id="table">
                        <ul>
                                
                            <li style="height:120px; background-color:#def0fe; border:#c0e3ff 1px solid;">
<div style="height:35px;">
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">������</div>
                                    <div class="fl"><input class="inputtext" type="text" name="" id="sosonick" value="{$nick}" placeholder="�ڴ������û������ֻ��Ų�ѯ..."></div>
                                    <div class="fl" style="margin-left:10px;margin-top:4px;"><input id="thesearch" type="button" style="width:45px;height:20px; background:url(baima/template/images/search.png) no-repeat; font-size:13px; color:#666;border:none;cursor:pointer;" name="" onclick="soso()"></div>
                                </div>
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">��Ӫ�̣�</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" id="yystype" onchange="soso()">
											<option value="0">ȫ��</option> 
                                            <option value="3" <!--{if $yystype==3}-->selected="selected"<!--{/if}-->>�ƶ�</option>
                                            <option value="1" <!--{if $yystype==1}-->selected="selected"<!--{/if}-->>��ͨ</option>
                                            <option value="2" <!--{if $yystype==2}-->selected="selected"<!--{/if}-->>����</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">ͨ����</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" id="tongdaoid" onchange="soso()">
                                            <option value="0">ȫ��</option>
                                            <!--{loop $tongdaoarr $value}-->
											<option value="{$value[id]}" <!--{if $tongdaoid==$value[id]}-->selected="selected"<!--{/if}-->>{$value[title]}</option>
											<!--{/loop}-->
                                        </select>
                                    </div>
                                </div>
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">���ѷ�ʽ��</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" onchange="xfjlqh()">
											<option value="2">������ֵ</option>
                                            <option value="1">���ų�ֵ</option>
                                            
                                        </select>
                                    </div>
                                </div>
</div>
<div style="height:35px;">
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:-10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:30px;">ʱ���ѯ��</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3" id="sosoy" onchange="soso()">
                                             <option value="2015" <!--{if $sosoy==2015}-->selected="selected"<!--{/if}-->>2015</option>
                                            <option value="2016" <!--{if $sosoy==2016}-->selected="selected"<!--{/if}-->>2016</option>
                                            <option value="2017" <!--{if $sosoy==2017}-->selected="selected"<!--{/if}-->>2017</option>
											<option value="2018" <!--{if $sosoy==2018}-->selected="selected"<!--{/if}-->>2018</option>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">��&nbsp;&nbsp;</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3" id="sosom" onchange="soso()">
                                            <option value="1" <!--{if $sosom==1}-->selected="selected"<!--{/if}-->>1</option>
											<option value="2" <!--{if $sosom==2}-->selected="selected"<!--{/if}-->>2</option>
											<option value="3" <!--{if $sosom==3}-->selected="selected"<!--{/if}-->>3</option>
											<option value="4" <!--{if $sosom==4}-->selected="selected"<!--{/if}-->>4</option>
											<option value="5" <!--{if $sosom==5}-->selected="selected"<!--{/if}-->>5</option>
											<option value="6" <!--{if $sosom==6}-->selected="selected"<!--{/if}-->>6</option>
											<option value="7" <!--{if $sosom==7}-->selected="selected"<!--{/if}-->>7</option>
											<option value="8" <!--{if $sosom==8}-->selected="selected"<!--{/if}-->>8</option>
											<option value="9" <!--{if $sosom==9}-->selected="selected"<!--{/if}-->>9</option>
											<option value="10" <!--{if $sosom==10}-->selected="selected"<!--{/if}-->>10</option>
											<option value="11" <!--{if $sosom==11}-->selected="selected"<!--{/if}-->>11</option>
											<option value="12" <!--{if $sosom==12}-->selected="selected"<!--{/if}-->>12</option>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">��</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext3" id="sosod" onchange="soso()">
											<option value="0">ȫ��</option>
                                            <option value="1" <!--{if $sosod==1}-->selected="selected"<!--{/if}-->>1</option>
                                            <option value="2" <!--{if $sosod==2}-->selected="selected"<!--{/if}-->>2</option>
                                            <option value="3" <!--{if $sosod==3}-->selected="selected"<!--{/if}-->>3</option>
                                            <option value="4" <!--{if $sosod==4}-->selected="selected"<!--{/if}-->>4</option>
                                            <option value="5" <!--{if $sosod==5}-->selected="selected"<!--{/if}-->>5</option>
                                            <option value="6" <!--{if $sosod==6}-->selected="selected"<!--{/if}-->>6</option>
                                            <option value="7" <!--{if $sosod==7}-->selected="selected"<!--{/if}-->>7</option>
                                            <option value="8" <!--{if $sosod==8}-->selected="selected"<!--{/if}-->>8</option>
                                            <option value="9" <!--{if $sosod==9}-->selected="selected"<!--{/if}-->>9</option>
                                            <option value="10" <!--{if $sosod==10}-->selected="selected"<!--{/if}-->>10</option>
                                            <option value="11" <!--{if $sosod==11}-->selected="selected"<!--{/if}-->>11</option>
                                            <option value="12" <!--{if $sosod==12}-->selected="selected"<!--{/if}-->>12</option>
                                            <option value="13" <!--{if $sosod==13}-->selected="selected"<!--{/if}-->>13</option>
                                            <option value="14" <!--{if $sosod==14}-->selected="selected"<!--{/if}-->>14</option>
                                            <option value="15" <!--{if $sosod==15}-->selected="selected"<!--{/if}-->>15</option>
                                            <option value="16" <!--{if $sosod==16}-->selected="selected"<!--{/if}-->>16</option>
                                            <option value="17" <!--{if $sosod==17}-->selected="selected"<!--{/if}-->>17</option>
                                            <option value="18" <!--{if $sosod==18}-->selected="selected"<!--{/if}-->>18</option>
                                            <option value="19" <!--{if $sosod==19}-->selected="selected"<!--{/if}-->>19</option>
                                            <option value="20" <!--{if $sosod==20}-->selected="selected"<!--{/if}-->>20</option>
                                            <option value="21" <!--{if $sosod==21}-->selected="selected"<!--{/if}-->>21</option>
                                            <option value="22" <!--{if $sosod==22}-->selected="selected"<!--{/if}-->>22</option>
                                            <option value="23" <!--{if $sosod==23}-->selected="selected"<!--{/if}-->>23</option>
                                            <option value="24" <!--{if $sosod==24}-->selected="selected"<!--{/if}-->>24</option>
                                            <option value="25" <!--{if $sosod==25}-->selected="selected"<!--{/if}-->>25</option>
                                            <option value="26" <!--{if $sosod==26}-->selected="selected"<!--{/if}-->>26</option>
                                            <option value="27" <!--{if $sosod==27}-->selected="selected"<!--{/if}-->>27</option>
                                            <option value="28" <!--{if $sosod==28}-->selected="selected"<!--{/if}-->>28</option>
                                            <option value="29" <!--{if $sosod==29}-->selected="selected"<!--{/if}-->>29</option>
                                            <option value="30" <!--{if $sosod==30}-->selected="selected"<!--{/if}-->>30</option>
                                            <option value="31" <!--{if $sosod==31}-->selected="selected"<!--{/if}-->>31</option>
                                        </select>
                                    </div>
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">��</div>
                                </div>

                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:37px;">��Դ��</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" id="sosoly" onchange="soso()">
                                            <option value="0">ȫ��</option>
											<option value="500" <!--{if $ly==500}-->selected="selected"<!--{/if}-->>ƽ̨��ֵ</option>
											<option value="1" <!--{if $ly==1}-->selected="selected"<!--{/if}-->>�Ա���ֵ</option>
											<option value="2" <!--{if $ly==2}-->selected="selected"<!--{/if}-->>�ӿڳ�ֵ</option>
											<option value="3" <!--{if $ly==3}-->selected="selected"<!--{/if}-->>���ܳ�ֵ</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:37px;">��ֵ״̬��</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2" id="sosozt" onchange="soso()">
                                            <option value="0">ȫ��</option>
                                            
											<option value="1" <!--{if $zt==1}-->selected="selected"<!--{/if}-->>��ֵ��</option>
											<option value="2" <!--{if $zt==2}-->selected="selected"<!--{/if}-->>��ֵ�ɹ�</option>
											
											<option value="3" <!--{if $zt==3}-->selected="selected"<!--{/if}-->>��ֵʧ��</option>
											<option value="4" <!--{if $zt==4}-->selected="selected"<!--{/if}-->>�ȴ���ֵ</option>
                                        </select>
                                    </div>
                                </div>
</div>
<div style="height:35px;">
                                
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">�ײͣ�</div>
                               
                                    <div id="theydselect" class="fl">
                                    	<select name="" class="inputtext2" style="width:100px;" id="ydtaocan" onchange="soso()" onFocus="showyys()">
											<option value="0">����</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">�˿</div>
                               
                                    <div id="theydselect" class="fl">
                                    	<select name="" class="inputtext2" style="width:100px;" id="tkzt"  onchange="soso()">
											<option value="0">ȫ��</option>
                                            <option value="1" <!--{if $tkzt==1}-->selected="selected"<!--{/if}-->>��ʱ�˿�</option>
                                            <option value="2" <!--{if $tkzt==2}-->selected="selected"<!--{/if}-->>δ�����˿�</option>
                                        </select>
                                    </div>  
                                </div> 
                                
                                <div style="font-size:15px; font-family:'΢���ź�'; font-weight:bold; margin-top:6px; margin-left:10px;">
                                    <div class="fl" style="margin-top:4px; margin-left:10px;">ʡ�ݣ�</div>
                                    <div class="fl">
                                    	<select name="" class="inputtext2"  id="sheng"  onchange="soso()">
                                            <option value="0">ȫ��</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="�ӱ�" <!--{if $sheng=='�ӱ�'}-->selected="selected"<!--{/if}-->>�ӱ�</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="������" <!--{if $sheng=='������'}-->selected="selected"<!--{/if}-->>������</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="ɽ��" <!--{if $sheng=='ɽ��'}-->selected="selected"<!--{/if}-->>ɽ��</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="���" <!--{if $sheng=='���'}-->selected="selected"<!--{/if}-->>���</option>
                                            <option value="�Ϻ�" <!--{if $sheng=='�Ϻ�'}-->selected="selected"<!--{/if}-->>�Ϻ�</option>
                                            <option value="�㽭" <!--{if $sheng=='�㽭'}-->selected="selected"<!--{/if}-->>�㽭</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="�㶫" <!--{if $sheng=='�㶫'}-->selected="selected"<!--{/if}-->>�㶫</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="���ɹ�" <!--{if $sheng=='���ɹ�'}-->selected="selected"<!--{/if}-->>���ɹ�</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="�ຣ" <!--{if $sheng=='�ຣ'}-->selected="selected"<!--{/if}-->>�ຣ</option>
                                            <option value="�Ĵ�" <!--{if $sheng=='�Ĵ�'}-->selected="selected"<!--{/if}-->>�Ĵ�</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="�½�" <!--{if $sheng=='�½�'}-->selected="selected"<!--{/if}-->>�½�</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="ɽ��" <!--{if $sheng=='ɽ��'}-->selected="selected"<!--{/if}-->>ɽ��</option>
                                            <option value="���" <!--{if $sheng=='���'}-->selected="selected"<!--{/if}-->>���</option>
                                            <option value="����" <!--{if $sheng=='����'}-->selected="selected"<!--{/if}-->>����</option>
                                            <option value="̨��" <!--{if $sheng=='̨��'}-->selected="selected"<!--{/if}-->>̨��</option>
                                        </select>
                                       
                                    </div>
                                </div>
                                
</div>
                            </li>
                                
                            <li class="title">
                                <span class="list1" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>������</div></span>
                                <span class="list2" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���ѽ��</div></span>
                                <span class="list3" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>���ѷ�ʽ</div></span>
                                <span class="list4" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��������</div></span>
                                <span class="list5" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ����</div></span>
                                <span class="list6" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>������</div></span>
                                <span class="list7" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��Ӫ��</div></span>
                                <span class="list8" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>ͨ��</div></span>
                                <span class="list9" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��Դ</div></span>
                                <span class="list10" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>����ʱ��</div></span>
                                <span class="list11" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>״̬����ʱ��</div></span>
                                <span class="list12" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��ֵ״̬</div></span>
                                <span class="list13" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�ۿ�״̬</div></span>
                                <span class="list14" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>�û�����ʾ</div></span>
                                <span class="list15" style="font-size:14px; font-weight:bold; cursor:default; height:20px; color:#363636;"><div>��̨��ʾ</div></span>
                            </li>
							
			    <div style="border-bottom:#d8d8d8 1px solid;">
                            	<div style="margin-top:10px; margin-left:20px; text-align:left; font-family:'΢���ź�'; font-size:15px; color:#333;">
                                	
                                </div>
                            </div>
                            
                            <!--{loop $userarr $key=>$value}-->
                            <li>
                                
                                <span class="list1 mt">{$value[dlnick]}</span>
                                <span class="list2 mt">{$value[shje]}Ԫ</span>
                                <span class="list3 mt">������ֵ</span>
                                <span class="list4 mt">{$value[jine]}</span>
                                <span class="list5 mt">{$value[unick]}</span>
                                <span class="list6 mt">{$value[province]}</span>
                                <span class="list7 mt">{$sjhtypearr[$value['sjhtype']]} 
								<!--{if !empty($value['iseccl'])}-->
								1
								<!--{/if}--></span>
                                <span class="list8 mt">ͨ��{$value[tongdaoid]}</span>
                                <span class="list9 mt">{$lyarr[$value['ly']]}</span>
                                <span class="list10 mt2">{$value[createtime]}</span>
                                <span class="list11 mt2">{$value[upzttime]}</span>
                                <span id="zt{$key}" class="list12 mt" onMouseMove="showmovezt(this)" onMouseOut="showoutzt(this)">
								
                                <span id="myczzt{$key}">
                                {$llczztarr[$value['zt']]}
								</span>
                                
								</span>
                                <span class="list13 mt">
								<!--{if $value['istk']==1}-->
									�ѷ���
								<!--{else}-->
									<!--{if $value['zt']==2}-->
									�ȴ�����
									<!--{else}-->
										�ѿۿ�
									<!--{/if}-->
								<!--{/if}-->
								</span>
                                <span class="list14 mt">{$value[beizhu2]}</span>
                                <span class="list15 mt">{$value[apimsg]}</span>
                                
                                <div id="showzttips{$key}" style="position:absolute; border:#ff6600 1px solid; background-color:#FFF; color:#ff6600; font-size:13px; width:180px; margin-left:440px; line-height:20px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px; display:none;">
                                    <div style="margin:8px; text-align:left;word-break:break-all;word-warp:break-word;">
                                        {$value[apimsg]}
                                    </div>
                                </div>

                                
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
                                            <input class="nowpagetext"  name="tiaozhuanpage" id="tiaozhuanpage" type="text" maxlength="3" onKeyPress="this.style.color='black';" />
                                        </span>ҳ
                                        </div>
                                        <div class="pagegoto">
                                            <input type="button" value="" onClick="tiaozhuan('{$url}');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
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

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dlsglxfjl.js" type="text/javascript"></script>
<script type="text/javascript">
function showmovezt(obj)
{
	$("#showzttips"+obj.id.substring(2,4)).fadeIn();
}
function showoutzt(obj)
{
	$("#showzttips"+obj.id.substring(2,4)).fadeOut();
}
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
			$("#myczzt"+i).addClass("ddcz");
		}
		else
		{
			
		}
	}
});
/*function selectmsg(v)
{
	var t = document.getElementById('selecttc');
    document.getElementById('selecttc').style.display = '';
    switch(v){
        case '1':
        	document.getElementById("theydselect").style.display="";
			document.getElementById("theltselect").style.display="none";
			document.getElementById("thedxselect").style.display="none";
        	break;
        case '2':
        	document.getElementById("theydselect").style.display="none";
			document.getElementById("theltselect").style.display="";
			document.getElementById("thedxselect").style.display="none";
        	break;
        case '3':
        	document.getElementById("theydselect").style.display="none";
			document.getElementById("theltselect").style.display="none";
			document.getElementById("thedxselect").style.display="";
        	break;
    }
}*/
function showyys()
{
	//alert($("#selecttheyys").val());
	if($("#yystype").val()=="0")
	{
		document.getElementById("ydtaocan").innerHTML="<option value='0'>����</option>";
	}
	else if($("#yystype").val()=="3")
	{
		document.getElementById("ydtaocan").innerHTML="<option value='0'>����</option><option value='10'>10M</option><option value='30'>30M</option><option value='70'>70M</option><option value='150'>150M</option><option value='500'>500M</option><option value='1024'>1G</option><option value='2048'>2G</option><option value='3072'>3G</option><option value='4096'>4G</option><option value='6144'>6G</option><option value='11264'>11G</option>";
	}
	else if($("#yystype").val()=="1")
	{
		document.getElementById("ydtaocan").innerHTML="<option value='0'>����</option><option value='20'>20M</option><option value='50'>50M</option><option value='100'>100M</option><option value='200'>200M</option><option value='500'>500M</option>";
	}
	else if($("#yystype").val()=="2")
	{
		document.getElementById("ydtaocan").innerHTML="<option value='0'>����</option><option value='5'>5M</option><option value='10'>10M</option><option value='30'>30M</option><option value='50'>50M</option><option value='100'>100M</option><option value='200'>200M</option><option value='500'>500M</option><option value='1024'>1G</option>";
	}
	
}
</script>

<!--{template footer}-->