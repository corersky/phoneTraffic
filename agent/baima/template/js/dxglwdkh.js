$(function(){
	$("#menulidxgl").trigger("click");
	$("#wdkh").css("background-color","#FFF");
	$("#wdkh").css("color","#299be4");
})

function showmovexxxx(obj)
{
	$("#showxxxxtips"+obj.id.substring(4,7)).fadeIn();
}
function showoutxxxx(obj)
{
	$("#showxxxxtips"+obj.id.substring(4,7)).fadeOut();
}