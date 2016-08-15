$(function(){
	$("#menulizhgl").trigger("click");
	$("#xgmm").css("background-color","#FFF");
	$("#xgmm").css("color","#1f7ed0");
})


function checkmm(form)
{
	if(document.getElementById("xmm").value!=document.getElementById("qrmm").value && document.getElementById("xmm").value!="" && document.getElementById("qrmm").value!="")
	{
		document.getElementById("showmmno").style.display="";
		$("#qrmm").css("border","#F00 1px solid");
		return false;
	}
	else
	{
		document.getElementById("showmmno").style.display="none";
		$("#qrmm").css("border","#ccc 1px solid");
	}
}
