$(function(){
	$("#menulitdgl").trigger("click");
	$("#gltdzl").css("background-color","#FFF");
	$("#gltdzl").css("color","#1f7ed0");
})

function djtext(obj)
{
	for(var i=0;i<$("#[id^='li']").length;i++)
	{
		document.getElementById("dja"+i).style.display="";
		document.getElementById("djb"+i).style.display="none";
		//alert("1");
	}
	document.getElementById("dja"+obj.id.substring(3,obj.id.length)).style.display="none";
	document.getElementById("djb"+obj.id.substring(3,obj.id.length)).style.display="";
	document.getElementById("djc"+obj.id.substring(3,obj.id.length)).value=document.getElementById("dja"+obj.id.substring(3,obj.id.length)).innerHTML;
}