$(function(){
	$("#menulidxgl").trigger("click");
	$("#czdx").css("background-color","#FFF");
	$("#czdx").css("color","#299be4");
})

function showmovexxxx(obj)
{
	$("#showxxxxtips"+obj.id.substring(4,7)).fadeIn();
}
function showoutxxxx(obj)
{
	$("#showxxxxtips"+obj.id.substring(4,7)).fadeOut();
}

function getuser(obj)
{
	document.getElementById("usernamenow").value=document.getElementById("xxxxname"+obj.id.substring(6,8)).innerHTML;
	document.getElementById("showxzkh").style.display="none";
}

function showtrafficopen()
{
	if(document.getElementById("usernamenow").value=="")
	{
		alert("请输入用户名");
	}
	else if(document.getElementById("theczts").value=="")
	{
		alert("请输入充值条数");
	}
	else
	{
		document.getElementById("showtraffic").style.display="";
		document.getElementById("myphonenum").innerHTML=document.getElementById("usernamenow").value;
		document.getElementById("mysmsnum").innerHTML=document.getElementById("theczts").value+"条";
		document.getElementById("mysmsyuan").innerHTML=parseFloat(parseFloat(document.getElementById("theczts").value)*parseFloat(document.getElementById("themyzk").value)).toFixed(4)+"元";
	}
}