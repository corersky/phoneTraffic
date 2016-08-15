$(function(){
	$("#menulilltjgl").trigger("click");
	$("#lltdgl").css("background-color","#FFF");
	$("#lltdgl").css("color","#1f7ed0");
})


function xg1()
{
	document.getElementById("theyd1txt").style.display="none";
	document.getElementById("theyd1select").style.display="";
	document.getElementById("theyd2txt").style.display="none";
	document.getElementById("theyd2select").style.display="";
	document.getElementById("theyd3txt").style.display="none";
	document.getElementById("theyd3select").style.display="";
	document.getElementById("thexg1").style.display="none";
	document.getElementById("thebc1").style.display="";
}

function xg2(obj)
{
	//alert(obj.id.substring(4,6));
	document.getElementById("myydtxt"+obj.id.substring(4,6)).style.display="none";
	document.getElementById("myydselect"+obj.id.substring(4,6)).style.display="";
	document.getElementById("mylttxt"+obj.id.substring(4,6)).style.display="none";
	document.getElementById("myltselect"+obj.id.substring(4,6)).style.display="";
	document.getElementById("mydxtxt"+obj.id.substring(4,6)).style.display="none";
	document.getElementById("mydxselect"+obj.id.substring(4,6)).style.display="";
	
	document.getElementById("myxg"+obj.id.substring(4,6)).style.display="none";
	document.getElementById("mybc"+obj.id.substring(4,6)).style.display="";
}