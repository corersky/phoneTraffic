<!--{template header}-->
<script>
function setsjh(){
	 var  sjh=document.getElementById("userinfo_sjh").value;
	 if(sjh==""){
	 	alert("填写信息不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&sjh='+sjh;
}

function setlxrxm(){
	 var  lxrxm=document.getElementById("lxrxm").value;
	 if(lxrxm==""){
	 	alert("填写信息不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&lxrxm='+lxrxm;
}

function setlxrqq(){
	 var  lxrqq=document.getElementById("lxrqq").value;
	 if(lxrqq==""){
	 	alert("填写信息不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&lxrqq='+lxrqq;
}

function setgsmc(){
	 var  gsmc=document.getElementById("gsmc").value;
	 if(gsmc==""){
	 	alert("填写信息不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&gsmc='+gsmc;
}

function setdizhi(){
	 var  dizhi=document.getElementById("dizhi").value;
	 if(dizhi==""){
	 	alert("填写信息不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&dizhi='+dizhi;
}


function setqianming(){
	 var  qianming=document.getElementById("qianming").value;
	 if(qianming==""){
	 	alert("填写信息不能为空!");
		return false;
	 }
	hiddeniframe.location.href='{XZKJURL}/duanxination.php?action=setuserinfo&qianming='+qianming;
}
</script>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<div id="zhglxgzl">
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">当前位置：账户管理-修改资料</div>
        </div>
        <div class="v1" style="background:url(baima/template/images/xgzlbg.png) no-repeat;">
            <div class="v2" >
            	用户名：<span class="v3" >{$_SESSION["dl_username"]}</span>
            </div>
            <div class="v4" style="position:absolute; font-family:'微软雅黑'; font-size:16px; margin-top:28px; padding-left:75px; width:625px; z-index:6;">
            	联系人电话：
                <span id="lxrdh1" class="v3">{$userinfo[sjh]}</span><span id="lxrdh2" style="display:none;"><input id="userinfo_sjh" type="text" style="width:120px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入修改的电话" /></span>
                <span class="v10" >（注：此手机号为找回密码唯一方式）</span>
                <span id="lxrdhbtn1" class="fr v11" onClick="lxrdh()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrdhbtn2"  class="fr v11" style="display:none;"><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setsjh()"></span>
            </div>
            <div class="v5" style="position:absolute; font-family:'微软雅黑'; font-size:16px; margin-top:80px; padding-left:75px; width:625px; z-index:5;">
            	联系人姓名：
                <span id="lxrxm1" class="v3">{$userinfo[lxrxm]}</span><span id="lxrxm2" style="display:none;"><input id="lxrxm" type="text" style="width:143px; height:25px;" maxlength="20" onKeyPress="this.style.color='black';" placeholder="请输入修改的姓名" /></span>
                <span id="lxrxmbtn1" class="fr v11" onClick="lxrxm()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrxmbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setlxrxm()"></span>
            </div>
            <div class="v6" style="position:absolute; font-family:'微软雅黑'; font-size:16px; margin-top:134px; padding-left:75px; width:625px; z-index:4;">
            	联系人QQ：
                <span id="lxrqq1" class="v3">{$userinfo[lxrqq]}</span><span id="lxrqq2" style="display:none;"><input id="lxrqq" type="text" style="width:148px; height:25px;" maxlength="11" onKeyPress="this.style.color='black';" placeholder="请输入修改的QQ号码" /></span>
                <span id="lxrqqbtn1" class="fr v11" onClick="lxrqq()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="lxrqqbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setlxrqq()"></span>
            </div>
            <div class="v7" style="position:absolute; font-family:'微软雅黑'; font-size:16px; padding-top:188px; padding-left:75px; width:625px; z-index:3;">
            	公司名称：
                <span id="gsmc1" class="v3">{$userinfo[gsmc]}</span><span id="gsmc2" style="display:none;"><input id="gsmc" type="text" style="width:157px; height:25px;" maxlength="100" onKeyPress="this.style.color='black';" placeholder="请输入修改的公司名称" /></span>
                <span id="gsmcbtn1" class="fr v11" onClick="gsmc()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsmcbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setgsmc()"></span>
            </div>
            <div class="v8" style="position:absolute; font-family:'微软雅黑'; font-size:16px; padding-top:240px; padding-left:75px; width:625px; z-index:2;">
            	公司地址：
                <span id="gsdz1" class="v3">{$userinfo[dizhi]}</span><span id="gsdz2" style="display:none;"><input id="dizhi" type="text" style="width:157px; height:25px;" maxlength="500" onKeyPress="this.style.color='black';" placeholder="请输入修改的公司地址" /></span>
                <span id="gsdzbtn1" class="fr v11" onClick="gsdz()"><img src="baima/template/images/xgzlxg.png" width="56" height="25"></span>
                <span id="gsdzbtn2"  class="fr v11" style=" display:none;" ><input class="v12" type="button" value="" style="width:56px; height:25px;background-image:url(baima/template/images/xgzlqd.png);" onclick="setdizhi()"></span>
            </div>
            <div class="v9" style="position:absolute; font-family:'微软雅黑'; font-size:16px; padding-top:295px; padding-left:75px; width:625px; z-index:1;">
            	注册时间：
                <span class="v3">{$createtime}</span>
            </div>
        </div>
        
    </div>
</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/zhglxgzl.js" type="text/javascript"></script>

<!--{template footer}-->