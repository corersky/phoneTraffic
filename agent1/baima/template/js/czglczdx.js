$(function(){
	$("#menuliczgl").trigger("click");
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