$(function(){
	$("#menulidxgl").trigger("click");
	$("#fsdx").css("background-color","#FFF");
	$("#fsdx").css("color","#299be4");
	setInterval(function(){
		if(document.getElementById("thephonetext").value=="")
		{
			document.getElementById("thephonecount").innerHTML="0";
		}
		else
		{
			document.getElementById("thephonecount").innerHTML=document.getElementById("thephonetext").value.split("\n").length;
		}
		
		var vv=parseInt(document.getElementById("thesmstext").value.length)+parseInt(document.getElementById("companyname").innerHTML.length)+2;
		document.getElementById("thesmsnumnow").innerHTML=parseInt(parseInt(vv-1)/67)+1;
	},1000);
})


$(function(){
	setTimeout(function(){
		$("#showthesms").myWords({
        	obj_opts:"textarea",
        	obj_Maxnum:0,
        	obj_Lnum:"#getsmszishu"
    	});
	},1000);
})
jQuery.fn.myWords=function(options){
	var defaults={
		obj_opts:"textarea",
		obj_Maxnum:0,
		obj_Lnum:"#getsmszishu"
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
			html=_num;//�����������input��Ҳ�� maxlength="xx"��������
			$(_obj_Lnum).html(html);
		}
		_this.focus(function(){
			var html;
			$(this).keyup(function(){
				var lend= $(this).val().replace(/[^\x00-\xff]/g, "*").length;
				var _num=parseInt(lend);
				html=_num;//�����������input��Ҳ�� maxlength="xx"��������
				$(_obj_Lnum).html(html);
			});
		});
		
	});
}




var w,h,className;
function getSrceenWH(){
	w = $(window).width();
	h = $(window).height();
	$('#dialogBgshowtxtdr').width(w).height(h);
	$('#dialogBgshownofz').width(w).height(h);
	$('#dialogBgshowfzdr').width(w).height(h);
	$('#dialogBgshowqdtj').width(w).height(h);
	$('#dialogBgshowloading').width(w).height(h);
}

window.onresize = function(){  
	getSrceenWH();
}  
$(window).resize();  

$(function(){
	getSrceenWH();
	
	//��ʾ����
	$('.boxshowtxtdr a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowtxtdr').fadeIn(300);
		$('#dialogshowtxtdr').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowtxtdr').click(function(){
		$('#dialogBgshowtxtdr').fadeOut(300,function(){
			$('#dialogshowtxtdr').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//��ʾ����
	$('.boxshownofz a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshownofz').fadeIn(300);
		$('#dialogshownofz').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshownofz').click(function(){
		$('#dialogBgshownofz').fadeOut(300,function(){
			$('#dialogshownofz').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//��ʾ����
	$('.boxshowfzdr a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowfzdr').fadeIn(300);
		$('#dialogshowfzdr').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowfzdr').click(function(){
		$('#dialogBgshowfzdr').fadeOut(300,function(){
			$('#dialogshowfzdr').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//��ʾ����
	$('.boxshowqrtj a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowqrtj').fadeIn(300);
		$('#dialogshowqrtj').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowqrtj').click(function(){
		$('#dialogBgshowqrtj').fadeOut(300,function(){
			$('#dialogshowqrtj').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//��ʾ����
	$('.boxshowloading a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowloading').fadeIn(300);
		$('#dialogshowloading').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowloading').click(function(){
		$('#dialogBgshowloading').fadeOut(300,function(){
			$('#dialogshowloading').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//��ʾ����
	$('.boxshowopentips a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowopentips').fadeIn(300);
		$('#dialogshowopentips').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//�رյ���
	$('.claseDialogBtnshowopentips').click(function(){
		$('#dialogBgshowopentips').fadeOut(300,function(){
			$('#dialogshowopentips').addClass('bounceOutUp').fadeOut();
		});
	});
});



function jisuan()
{
	document.getElementById("v1").innerHTML=document.getElementById("thephonetext").value.split("\n").length;
	document.getElementById("v2").innerHTML=parseInt(document.getElementById("thesmstext").value.length)+parseInt(document.getElementById("companyname").innerHTML.length)+2;
	document.getElementById("v3").innerHTML=parseInt(document.getElementById("v1").innerHTML)*(parseInt(parseInt(parseInt(document.getElementById("v2").innerHTML)-1)/67)+1);
	document.getElementById("v5").innerHTML=parseFloat(parseInt(document.getElementById("v3").innerHTML)*document.getElementById("v4").innerHTML).toFixed(2);
}
function doguolv()
{
	var num=document.getElementById("thephonetext").value.split("\n").length;
	var str = $('#thephonetext').val();  
	var strArr=str.split("\n");
	  
	strArr.sort();
	var result=new Array();
	var tempStr="";  
	for(var i in strArr)  
	{
		if(strArr[i].length==11)
		{
			 if(strArr[i] != tempStr)  
			 {  
				  result.push(strArr[i]);  
				  tempStr=strArr[i];  
			 }  
			 else  
			 {  
				  continue;  
			 }  
		}
	}
	$('#thephonetext').val(result.join("\r"));
	
	//alert("��Ϊ���˵�"+(num-document.getElementById("thephonetext").value.split("\n").length)+"����/�����");
	
	document.getElementById("theopentipstext").innerHTML="��Ϊ���˵�&nbsp;"+parseInt(num-document.getElementById("thephonetext").value.split("\n").length)+"&nbsp;����/�����";
	document.getElementById('showopentips').click();
	setTimeout(function(){
		document.getElementsByClassName('claseDialogBtnshowopentips').item(0).click();
	},1500);
}



function suresend(){
	if(document.getElementById("thephonetext").value=="")
	{
		document.getElementById("theopentipstext").innerHTML="�ֻ����벻��Ϊ��";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementsByClassName('claseDialogBtnshowopentips').item(0).click();
		},1500);
	}
	else if(document.getElementById("thesmstext").value=="")
	{
		document.getElementById("theopentipstext").innerHTML="�������ݲ���Ϊ��";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementsByClassName('claseDialogBtnshowopentips').item(0).click();
		},1500);
	}
	else
	{
		document.getElementById('showqrtj').click();
		jisuan();
	}
}