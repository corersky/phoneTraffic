$(function(){
	if($("#tongdaoid").val()==1)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==2)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==3)
	{
		document.getElementById("syqianming").checked=false;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==4)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==5)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==6)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
})

function showguize()
{
	$("#theguizetips").fadeOut();
	setTimeout(function(){
		$("#theguizetips").fadeIn();
		document.getElementById("tongdaoguizename").innerHTML="“"+$("#tongdaoid").find("option:selected").text()+"”";
		if(document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML.length>0)
		{
			if(document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML.length>26)
			{
				document.getElementById("theguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML.substr(0,26)+"...";
				document.getElementById("thetextareaguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
			}
			else
			{
				document.getElementById("theguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
				document.getElementById("thetextareaguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
			}
		}
		else
		{
			document.getElementById("theguize").innerHTML="暂无通道使用说明";
			document.getElementById("thetextareaguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
		}
	},500)
	
	if($("#tongdaoid").val()==1)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==2)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==3)
	{
		document.getElementById("syqianming").checked=false;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==4)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==5)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==6)
	{
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
}

function suresend(){
	if(document.getElementById("thephonetext").value=="")
	{
		document.getElementById("theopentipstext").innerHTML="手机号码不能为空";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
	}
	else if(document.getElementById("thesmstext").value=="")
	{
		document.getElementById("theopentipstext").innerHTML="短信内容不能为空";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
	}
	else if($("#tongdaoid").val()==1 && !document.getElementById("syqianming").checked)
	{
		document.getElementById("theopentipstext").innerHTML="当前通道需勾选使用签名方可提交";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==2 && !document.getElementById("syqianming").checked)
	{
		document.getElementById("theopentipstext").innerHTML="当前通道需勾选使用签名方可提交";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==3 && document.getElementById("syqianming").checked)
	{
		document.getElementById("theopentipstext").innerHTML="当前通道需取消勾选使用签名方可提交";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
		document.getElementById("syqianming").checked=false;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==4 && !document.getElementById("syqianming").checked)
	{
		document.getElementById("theopentipstext").innerHTML="当前通道需勾选使用签名方可提交";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==5 && !document.getElementById("syqianming").checked)
	{
		document.getElementById("theopentipstext").innerHTML="当前通道需勾选使用签名方可提交";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else if($("#tongdaoid").val()==6 && !document.getElementById("syqianming").checked)
	{
		document.getElementById("theopentipstext").innerHTML="当前通道需勾选使用签名方可提交";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
		document.getElementById("syqianming").checked=true;
		//document.getElementById("syqianming").disabled=true;
	}
	else
	{
		document.getElementById('showqrtj').click();
		jisuan();
	}
}




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
		document.getElementById("thesmsnumnow").innerHTML=parseInt(parseInt(vv-1)/(document.getElementById("span_tongdaokfts_id_"+$("#tongdaoid").val()).innerHTML))+1;
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
	
	//显示弹框
	$('.boxshowtxtdr a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowtxtdr').fadeIn(300);
		$('#dialogshowtxtdr').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//关闭弹窗
	$('.claseDialogBtnshowtxtdr').click(function(){
		$('#dialogBgshowtxtdr').fadeOut(300,function(){
			$('#dialogshowtxtdr').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//显示弹框
	$('.boxshownofz a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshownofz').fadeIn(300);
		$('#dialogshownofz').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//关闭弹窗
	$('.claseDialogBtnshownofz').click(function(){
		$('#dialogBgshownofz').fadeOut(300,function(){
			$('#dialogshownofz').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//显示弹框
	$('.boxshowfzdr a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowfzdr').fadeIn(300);
		$('#dialogshowfzdr').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//关闭弹窗
	$('.claseDialogBtnshowfzdr').click(function(){
		$('#dialogBgshowfzdr').fadeOut(300,function(){
			$('#dialogshowfzdr').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//显示弹框
	$('.boxshowqrtj a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowqrtj').fadeIn(300);
		$('#dialogshowqrtj').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//关闭弹窗
	$('.claseDialogBtnshowqrtj').click(function(){
		$('#dialogBgshowqrtj').fadeOut(300,function(){
			$('#dialogshowqrtj').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//显示弹框
	$('.boxshowloading a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowloading').fadeIn(300);
		$('#dialogshowloading').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//关闭弹窗
	$('.claseDialogBtnshowloading').click(function(){
		$('#dialogBgshowloading').fadeOut(300,function(){
			$('#dialogshowloading').addClass('bounceOutUp').fadeOut();
		});
	});
	
	//显示弹框
	$('.boxshowopentips a').click(function(){
		className = $(this).attr('class');
		$('#dialogBgshowopentips').fadeIn(300);
		$('#dialogshowopentips').removeAttr('class').addClass('animated '+className+'').fadeIn();
	});
	
	//关闭弹窗
	$('.claseDialogBtnshowopentips').click(function(){
		$('#dialogBgshowopentips').fadeOut(300,function(){
			$('#dialogshowopentips').addClass('bounceOutUp').fadeOut();
		});
	});
});



function jisuan()
{
	document.getElementById("v1").innerHTML=document.getElementById("thephonetext").value.split("\n").length;
	if(document.getElementById("syqianming").checked)
	{
		document.getElementById("v2").innerHTML=parseInt(document.getElementById("thesmstext").value.length)+parseInt(document.getElementById("companyname").innerHTML.length);
	}
	else
	{
		document.getElementById("v2").innerHTML=parseInt(document.getElementById("thesmstext").value.length);
	}
	
	document.getElementById("v3").innerHTML=parseInt(document.getElementById("v1").innerHTML)*(parseInt(parseInt(parseInt(document.getElementById("v2").innerHTML)-1)/(document.getElementById("span_tongdaokfts_id_"+$("#tongdaoid").val()).innerHTML))+1);
	document.getElementById("v5").innerHTML=parseFloat(parseInt(document.getElementById("v3").innerHTML)*document.getElementById("v4").innerHTML).toFixed(4);
	document.getElementById("theonesmsnum").innerHTML=document.getElementById("span_tongdaokfts_id_"+$("#tongdaoid").val()).innerHTML;
}
function doguolv()
{
	if(document.getElementById("thephonetext").value!="")
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
		
		//alert("已为您滤掉"+(num-document.getElementById("thephonetext").value.split("\n").length)+"个重/错号码");
		
		document.getElementById("theopentipstext").innerHTML="已为您滤掉&nbsp;"+parseInt(num-document.getElementById("thephonetext").value.split("\n").length)+"&nbsp;个重/错号码";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
	}
	else
	{
		document.getElementById("theopentipstext").innerHTML="已为您滤掉&nbsp;0&nbsp;个重/错号码";
		document.getElementById('showopentips').click();
		setTimeout(function(){
			document.getElementById('dialogBgshowopentips').style.display="none";
			document.getElementById('dialogshowopentips').style.display="none";
		},1500);
	}
}


$(function(){
	$("#theguizetips").fadeIn();
	document.getElementById("tongdaoguizename").innerHTML="“"+$("#tongdaoid").find("option:selected").text()+"”";
	if(document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML.length>0)
	{
		if(document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML.length>26)
		{
			document.getElementById("theguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML.substr(0,26)+"...";
			document.getElementById("thetextareaguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
		}
		else
		{
			document.getElementById("theguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
			document.getElementById("thetextareaguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
		}
	}
	else
	{
		document.getElementById("theguize").innerHTML="暂无通道使用说明";
		document.getElementById("thetextareaguize").innerHTML=document.getElementById("span_tongdaobeizhu_id_"+$("#tongdaoid").val()).innerHTML;
	}
})
