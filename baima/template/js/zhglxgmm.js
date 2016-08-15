$(function(){
	$("#menulizhgl").trigger("click");
	$("#xgmm").css("background-color","#FFF");
	$("#xgmm").css("color","#299be4");
})

function checkmm()
{
	if(document.getElementById("szmm").value!=document.getElementById("qrmm").value)
	{
		document.getElementById("showmmno").style.display="";
	}
	else
	{
		document.getElementById("showmmno").style.display="none";
	}
}