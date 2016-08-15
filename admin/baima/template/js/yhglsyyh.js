$(function(){
	$("#menuliyhgl").trigger("click");
	$("#syyh").css("background-color","#FFF");
	$("#syyh").css("color","#1f7ed0");
})


function showyhgstips(obj)
{
	$("#yhgstips"+obj.id.substring(4,6)).fadeIn();
	setTimeout(function(){
		$("#yhgstips"+obj.id.substring(4,6)).fadeOut();
	},3000);
}