function menu_show(parentid,chldid){
	$(".menu_a").removeClass("menu_cur");
	$(".menu_ms"+parentid).addClass("menu_cur");
	$(".nav_menu").hide();
	$(".nav_menu"+parentid).show();
	$(".nav_menu"+parentid+" li").eq(chldid).addClass("cur");
}
	
	
	
$(function(){
	$(".nav_menu li").click(function(){
		$(".nav_menu li").removeClass('cur');
		$(this).addClass("cur");
	});
	
	$(".menu_a").click(function(){
		$(".menu_a").removeClass("menu_cur");
		$(this).addClass('menu_cur');
		
		if ( $(this).next().is(":visible") ) {
			$(this).css('background-position','160px 25px');
			$(this).next().slideUp(300);
		} else{
			$(".menu_a").css('background-position','160px 25px');
			$(this).css('background-position','160px -32px');
			$(".Ldat").slideUp(300);
			$(this).next().slideDown(300);
		}
	});

})


$(function(){
	$("#mainmenu").css("height",$("#mains").height());
})
