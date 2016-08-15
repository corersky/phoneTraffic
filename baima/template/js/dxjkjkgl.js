$(function(){
	$("#menulidxjk").trigger("click");
	$("#jkgl").css("background-color","#FFF");
	$("#jkgl").css("color","#299be4");
})

function showjksmwd()
{
	document.getElementById("jksmwd1").style.display="";
	document.getElementById("jksmwd2").style.display="none";
	document.getElementById("dmsl1").style.display="none";
	document.getElementById("dmsl2").style.display="";
	
	document.getElementById("jksmwdshow").style.display="";
	document.getElementById("phpshow").style.display="none";
	document.getElementById("javashow").style.display="none";
	document.getElementById("aspshow").style.display="none";
}
function showdmsl()
{
	document.getElementById("jksmwd1").style.display="none";
	document.getElementById("jksmwd2").style.display="";
	document.getElementById("dmsl1").style.display="";
	document.getElementById("dmsl2").style.display="none";
	
	document.getElementById("jksmwdshow").style.display="none";
	document.getElementById("phpshow").style.display="";
	document.getElementById("javashow").style.display="none";
	document.getElementById("aspshow").style.display="none";
}
function showphp()
{
	document.getElementById("jksmwd1").style.display="none";
	document.getElementById("jksmwd2").style.display="";
	document.getElementById("dmsl1").style.display="";
	document.getElementById("dmsl2").style.display="none";
	
	document.getElementById("jksmwdshow").style.display="none";
	document.getElementById("phpshow").style.display="";
	document.getElementById("javashow").style.display="none";
	document.getElementById("aspshow").style.display="none";
}
function showjava()
{
	document.getElementById("jksmwd1").style.display="none";
	document.getElementById("jksmwd2").style.display="";
	document.getElementById("dmsl1").style.display="";
	document.getElementById("dmsl2").style.display="none";
	
	document.getElementById("jksmwdshow").style.display="none";
	document.getElementById("phpshow").style.display="none";
	document.getElementById("javashow").style.display="";
	document.getElementById("aspshow").style.display="none";
}
function showasp()
{
	document.getElementById("jksmwd1").style.display="none";
	document.getElementById("jksmwd2").style.display="";
	document.getElementById("dmsl1").style.display="";
	document.getElementById("dmsl2").style.display="none";
	
	document.getElementById("jksmwdshow").style.display="none";
	document.getElementById("phpshow").style.display="none";
	document.getElementById("javashow").style.display="none";
	document.getElementById("aspshow").style.display="";
}

function showdsmllist()
{
	document.getElementById("dsmllist").style.display="";
}
function closedsmllist()
{
	document.getElementById("dsmllist").style.display="none";
}
