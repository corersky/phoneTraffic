$(function(){
	$("#menulicwgl").trigger("click");
	$("#wyfp").css("background-color","#FFF");
	$("#wyfp").css("color","#299be4");
})


function showmsg()
{
	document.getElementById("wyfpckshdz1").style.display="none";
	document.getElementById("wyfpckshdz2").style.display="";
	$("#showmsgarea").show();
	$("#theborderheight").css("height","200px");
	$("#showmsgarea").css("height","220px");
	$("#wyfpbtn").css("margin-top","160px");
	
}
function closemsg()
{
	document.getElementById("wyfpckshdz1").style.display="";
	document.getElementById("wyfpckshdz2").style.display="none";
	$("#showmsgarea").hide();
	$("#theborderheight").css("height","280px");
	$("#wyfpbtn").css("margin-top","-60px");
}