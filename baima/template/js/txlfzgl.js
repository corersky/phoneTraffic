$(function(){
	$("#menulitxl").trigger("click");
	$("#fzgl").css("background-color","#FFF");
	$("#fzgl").css("color","#299be4");
})

function showbj(obj)
{
	for(var i=0;i<10;i++)
	{
		$("#zmbj"+i).hide();
		$("#bzbj"+i).hide();
		$("#li"+i).css("background-color","#FFF");
	}
	$("#li"+obj.id.substring(2,obj.id.length)).css("background","#e8fbff");
	$("#zmbj"+obj.id.substring(2,obj.id.length)).show();
	$("#bzbj"+obj.id.substring(2,obj.id.length)).show();
}
function closebj(obj)
{
	for(var i=0;i<10;i++)
	{
		$("#zmbj"+i).hide();
		$("#bzbj"+i).hide();
		$("#li"+i).css("background-color","#FFF");
	}
}

$(function(){
	setTimeout(function(){
		$("#showthesms11").myWords({
        	obj_opts:"input",
        	obj_Maxnum:0,
        	obj_Lnum:"#getsmszishu11"
    	});
	},1000);
})
jQuery.fn.myWords=function(options){
	var defaults={
		obj_opts:"input",
		obj_Maxnum:0,
		obj_Lnum:"#getsmszishu11"
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

$(function(){
	setTimeout(function(){
		$("#showthesms12").myWords({
        	obj_opts:"textarea",
        	obj_Maxnum:0,
        	obj_Lnum:"#getsmszishu12"
    	});
	},1000);
})
jQuery.fn.myWords=function(options){
	var defaults={
		obj_opts:"textarea",
		obj_Maxnum:0,
		obj_Lnum:"#getsmszishu12"
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

$(function(){
	setTimeout(function(){
		$("#showthesms21").myWords({
        	obj_opts:"input",
        	obj_Maxnum:0,
        	obj_Lnum:"#getsmszishu21"
    	});
	},1000);
})
jQuery.fn.myWords=function(options){
	var defaults={
		obj_opts:"input",
		obj_Maxnum:0,
		obj_Lnum:"#getsmszishu21"
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

$(function(){
	setTimeout(function(){
		$("#showthesms22").myWords({
        	obj_opts:"textarea",
        	obj_Maxnum:0,
        	obj_Lnum:"#getsmszishu22"
    	});
	},1000);
})
jQuery.fn.myWords=function(options){
	var defaults={
		obj_opts:"textarea",
		obj_Maxnum:0,
		obj_Lnum:"#getsmszishu22"
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