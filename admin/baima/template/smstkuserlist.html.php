<!--{template header}-->

<style>
#showxq .inputtext{color:#666;width:296px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#showjg .inputtext{color:#666;width:196px;height:20px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjlltdgl .inputtext{color:#666;width:140px;height:26px; font-size:13px; border:#bbb 1px solid; outline:none; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;}
#lltjlltdgl .inputtext2{width:80px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext3{width:60px;height:28px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext4{width:70px;height:24px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .inputtext5{width:70px;height:20px; border:#add1fe 1px solid; font-size:13px; color:#666; font-family:'微软雅黑'; font-weight:bold; outline:none; border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px; cursor:pointer;}
#lltjlltdgl .v1{}
#lltjlltdgl .v2{}
#lltjlltdgl .v3{}
#lltjlltdgl .v4{}
#lltjlltdgl .v5{}
#lltjlltdgl .v6{}
#lltjlltdgl .v7{}
#lltjlltdgl .v8{}
#lltjlltdgl .mt{margin-top:12px;}
#lltjlltdgl .mt2{margin-top:30px;}
#lltjlltdgl .mt3{margin-top:8px;}
#lltjlltdgl #table{
	float:left;
	width:740px;
	text-align:left;
	border:1px #d8d8d8 solid;
	border-bottom:none;
	color:#5c5c5c;
	margin-left:-1px;
}
#lltjlltdgl #mythetable{
	width:740px;
	margin:0 auto;
}
#lltjlltdgl #table li{
float:left;
width:740px;
height:40px;
border-bottom:1px solid #d8d8d8;
border-top:none;
list-style-type:none;
vertical-align:bottom;
text-align:center;
}
#lltjlltdgl #table li.title{
width:740px;
height:30px;
line-height:20px;
font-size:14px;
cursor:default;
background-color:#f0f0f0;
padding-top:13px;
}

#lltjlltdgl #table li span.list1{
text-decoration:none;
float:left;
width:160px;
height:14px;
overflow:hidden;
cursor:default;
font-size:13px;
cursor:default;
}
#lltjlltdgl #table li span.list2{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list3{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list4{
text-decoration:none;
float:left;
width:120px;
height:20px;
overflow:hidden;
cursor:default;
font-size:13px;
}
#lltjlltdgl #table li span.list5{
text-decoration:none;
float:left;
width:220px;
height:30px;
overflow:hidden;
cursor:default;
font-size:13px;
border-right:none;
}
</style>
<script>
function tiaozhuan(url){
		var page=document.getElementById("tiaozhuanpage").value;
		url=url+"&page="+page;
		location.href=url;
}
</script>


<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>

<div id="mains">
	<form action="index.php?action=smstkuserlist&atc=add" method="post" target="hiddeniframe">
		用户名：<input type="text" name="username" id="username"/>
		返款时间:<input type="text" name="fksj" id="fksj" size="5"/>小时
		<input  type="submit" value="添加"/>
	</form>
	
	<br /><br /><br />
	
	<table width="100%" border="0">
	<tr>
	<td width="30%">用户名</td>
	<td width="30%">返款时间（小时）</td>
	<td width="">操作</td>
	</tr>
	<!--{loop $userarr $value}-->
	<tr>
	<td>{$value[username]}</td>
	<td>{$value[tksj]}</td>
	<td><a href="index.php?action=smstkuserlist&atc=del&id={$value[id]}" target="hiddeniframe">删除</a></td>
	</tr>
	<!--{/loop}-->
	
	</table>
	
	
	
</div>




<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>


		

<!--{template footer}-->