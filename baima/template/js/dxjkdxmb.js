$(function(){
	$("#menulidxjk").trigger("click");
	$("#dxmb").css("background-color","#FFF");
	$("#dxmb").css("color","#299be4");
})


$(function(){
	setTimeout(function(){
		$("#thesms").myWords({
        	obj_opts:"textarea",
        	obj_Maxnum:0,
        	obj_Lnum:"#mysmsnum"
    	});
	},1000);
})
jQuery.fn.myWords=function(options){
	var defaults={
		obj_opts:"textarea",
		obj_Maxnum:0,
		obj_Lnum:"#mysmsnum"
	}
	var opts=$.extend(defaults,options);
	return this.each(function(){
		var _this=$(this).find(opts.obj_opts);
		var num=parseInt(opts.obj_Maxnum);
		var _obj_Lnum=$(this).find(opts.obj_Lnum);
		$(_obj_Lnum).find("strong").text(num);
		if(_this.val()!=""){
			var len= _this.val().replace(/[^\x00-\xff]/g, "*").length;
			var _num=parseInt(len);
			html=_num;//输入个数，在input中也用 maxlength="xx"来限制下
			$(_obj_Lnum).html(html);
		}
		_this.focus(function(){
			var html;
			$(this).keyup(function(){
				var lend= $(this).val().replace(/[^\x00-\xff]/g, "*").length;
				var _num=parseInt(lend);
				html=_num;//输入个数，在input中也用 maxlength="xx"来限制下
				$(_obj_Lnum).html(html);
			});
		});
		
	});
}

function crbl()
{
	document.getElementById("thesmstext").value=document.getElementById("thesmstext").value+"*****";
}