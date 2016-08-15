$(function(){
	$("#menulicwgl").trigger("click");
	$("#wdjg").css("background-color","#FFF");
	$("#wdjg").css("color","#299be4");
})



function showstate()
{
	if(document.getElementById("theyhgg").innerHTML=="")
	{
		$("#show1").hide();
		$("#show2").fadeIn();
		setTimeout(function(){
			$("#show2").fadeOut();
			setTimeout(function(){
				$("#show32").fadeIn();
			},500)
		},2000);
	}
	else
	{
		$("#show1").hide();
		$("#show2").fadeIn();
		setTimeout(function(){
			$("#show2").fadeOut();
			setTimeout(function(){
				$("#show31").fadeIn();
			},500)
		},2000);
	}
}