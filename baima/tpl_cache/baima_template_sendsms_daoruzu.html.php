<!doctype html>
<html>
<head>
<title>短信服务平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name=robots content="all">
<meta name=keywords content="短信服务平台">
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="Bookmark" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="baima/template/css/style.css" />
</head>
<body>


<div id="dxglfsdxfzdr">
<?php if(empty($zuarr)) { ?>

<div style="float:left; font-size:14px; font-weight:bold; margin-top:8px; margin-left:10px;">当前您通讯录中没有成员/分组，请先去<span style="color:#0077ad;"><a href="" style="color:#0077ad;">>>管理成员</a></span>中添加成员/添加新组</div>


<?php } else { ?>
<form action="" method="post">
    <div class="v1">
        <div class="v2">
            <span class="cp" onClick="qx()"><img src="baima/template/images/qx.png" width="48" height="28"></span>
            <span class="cp" onClick="qxqx()"><img src="baima/template/images/qxyx.png" width="75" height="28"></span>
        </div>
        <div class="v3">

 
<?php if(is_array($zuarr)) { foreach($zuarr as $value) { ?>
            <span class="v4"><input type="checkbox" name="mycheckbox[]" id="mycheckbox[]" value="<?=$value['id']?>"><?=$value['zuname']?>(<?=$value['num']?>人)</span>
<?php } } ?>


        </div>
    </div>
    
    
    <div class="v5" >
        <div class="v6" >
            <span style="border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;"><?=$fenarr['sy']?></span>&nbsp;
            <span style="border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;"><?=$fenarr['shangy']?></span>&nbsp;
            <span style="border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;"><?=$fenarr['xiay']?></span>&nbsp;
            <span style="border:#ddd 1px solid; padding:5px 3px 5px 10px; color:#666;"><?=$fenarr['weiy']?></span>&nbsp;
        </div>
        <div class="v7" >
            <div class="v10" >
                共<span class="v11" style=";"><?=$page?>/<?=$zpage?></span>页
            </div>
            
            <div class="v8" >
                <div class="fl">
                第<span class="v9" >
                    <input class="nowpagetext" name="tiaozhuanpage" id="tiaozhuanpage" type="text" style="color:#7e7e7e;width:26px;height:18px;font-size:12px;" maxlength="3" onKeyPress="this.style.color='black';" />
                </span>页
                </div>
                <div class="v12" >
                    <input type="button" value="" onclick="tiaozhuan('<?=$url?>');" style="width:40px; height:20px;background-image:url(baima/template/images/gothepage.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
                </div>
            </div>
        </div>
    </div>
    <div class="v13" >
        <div class="v14" >
            <input type="submit" value="" style="width:83px; height:37px;background-image:url(baima/template/images/qddr.png); background-color:transparent; border:none; cursor:pointer;color:#FFF; font-size:16px;">
        </div>
    </div>
</form>
<?php } ?>	






</div>

<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
function qx()
{
$("input[name='mycheckbox[]']").attr("checked","true");
}
function qxqx()
{
$("input[name='mycheckbox[]']").removeAttr("checked");
}

function tiaozhuan(url){
var page=document.getElementById("tiaozhuanpage").value;
url=url+"&page="+page;
location.href=url;
}
</script>




</body>
</html>