$(function(){
	$("#menulidxgl").trigger("click");
	$("#fsjl").css("background-color","#FFF");
	$("#fsjl").css("color","#299be4");
})


var w,h,className;
function getSrceenWH(){
	w = $(window).width();
	h = $(window).height();
	$('#dialogBgshowck').width(w).height(h);
	$('#dialogBgshowdxnr').width(w).height(h);
	$('#dialogBgshowtjsb').width(w).height(h);
}

window.onresize = function(){  
	getSrceenWH();
}  
$(window).resize();  

$(function(){
	getSrceenWH();
	
	//��ʾ����
	$('.boxshowck a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowck').fadeIn(300);
		$('#dialogshowck').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowck').click(function(){
		$('#dialogBgshowck').fadeOut(300,function(){
			$('#dialogshowck').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//��ʾ����
	$('.boxshowdxnr a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowdxnr').fadeIn(300);
		$('#dialogshowdxnr').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowdxnr').click(function(){
		$('#dialogBgshowdxnr').fadeOut(300,function(){
			$('#dialogshowdxnr').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//��ʾ����
	$('.boxshowtjsb a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowtjsb').fadeIn(300);
		$('#dialogshowtjsb').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowtjsb').click(function(){
		$('#dialogBgshowtjsb').fadeOut(300,function(){
			$('#dialogshowtjsb').addClass('bounceOutUp').fadeOut();
		});
	});
	
});