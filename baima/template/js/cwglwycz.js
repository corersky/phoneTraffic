$(function(){
	$("#menulicwgl").trigger("click");
	$("#wycz").css("background-color","#FFF");
	$("#wycz").css("color","#299be4");
})


function checkok()
{
	if(document.getElementById("myyuan").value<300)
	{
		$("#myyuan").css("border","#F00 1px solid");
		document.getElementById("texttips").innerHTML="&nbsp;*���γ�ֵ����Ϊ300Ԫ";
		return false;
	}
	else
	{
		$("#myyuan").css("border","#add1fe 1px solid");
		document.getElementById("texttips").innerHTML="&nbsp;��������������";
	}
}
function showstate()
{
	if($("#vv").val()==0)
	{
		document.getElementById("statetext1").style.display="";
		document.getElementById("statetext2").style.display="none";
		document.getElementById("state1").style.display="";
		document.getElementById("state2").style.display="none";
	}
	else if($("#vv").val()==1)
	{
		document.getElementById("statetext1").style.display="none";
		document.getElementById("statetext2").style.display="";
		document.getElementById("state1").style.display="none";
		document.getElementById("state2").style.display="";
	}
}

function shownum()
{
	if(document.getElementById("thecznum").innerHTML=="")
	{
		$("#thecznumdiv").fadeOut();
	}
	else
	{
		$("#thecznumdiv").fadeIn();
		document.getElementById("thecznum").innerHTML="0";
		document.getElementById("thecznum").innerHTML=parseInt(parseInt(document.getElementById("myyuan").value)/parseFloat(document.getElementById("userdxjiage").value));
		if(document.getElementById("thecznum").innerHTML=="NaN")
		{
			document.getElementById("thecznumdiv").style.display="none";
		}
		else
		{
			$("#thecznumdiv").fadeIn();
			document.getElementById("thecznum").innerHTML="0";
			document.getElementById("thecznum").innerHTML=parseInt(parseInt(document.getElementById("myyuan").value)/parseFloat(document.getElementById("userdxjiage").value));
		}
	}
}