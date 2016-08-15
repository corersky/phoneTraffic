$(function(){
	$("#menulitxl").trigger("click");
	$("#glcy").css("background-color","#FFF");
	$("#glcy").css("color","#299be4");
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
	//settxluserinfo('3','1','0','1','200','1','1','1','1@163.com',"records:[{zuid:1, zuname:1}{zuid:2, zuname:2}]","key1:value1`key2:value2`key3:value3");
})

function showdouser()
{
	document.getElementById('boxshowtjdgcy').style.display="";
	
	
	if($("[id^=zdybzmsgarea]").length+1==1)
	{
		$("#addnewlist").css("height","160px");
	}
	else if($("[id^=zdybzmsgarea]").length+1==2)
	{
		$("#addnewlist").css("height","202px");
	}
	else if($("[id^=zdybzmsgarea]").length+1==3)
	{
		$("#addnewlist").css("height","244px");
	}
	else if($("[id^=zdybzmsgarea]").length+1==4)
	{
		$("#addnewlist").css("height","286px");
	}
	else if($("[id^=zdybzmsgarea]").length+1==5)
	{
		$("#addmsgarea").fadeOut();
		$("#addnewlist").css("height","280px");
	}
}
function qx()
{
	if(document.getElementById("qxcheck").checked)
	{
		$("input[name='mycheckbox']").attr("checked","true");
	}
	else
	{
		$("input[name='mycheckbox']").removeAttr("checked");
	}
}
function addmsg()
{
	if(document.getElementById("thekey").value=="" || document.getElementById("thevalue").value=="")
	{
		document.getElementById("theopentipstext").innerHTML="请填写完整备注内容";
		document.getElementById('boxshowopentips').style.display="";
		setTimeout(function(){
			document.getElementById('boxshowopentips').style.display="none";
		},1500);
	}
	else
	{
		var num=$("[id^=zdybzmsgarea]").length+1;
		if(num<=4)
		{
			$("#zdybz").append("<div id=\'zdybzmsgarea"+num+"\' class=\'zdybzmsgarea\'><span id=\'zdybzmsgkey"+num+"\'></span><span>：</span><span><input id=\'zdybzmsgvalue"+num+"\' class=\'inputtext\' type=\'text\' maxlength=\'100\' onKeyPress=\'this.style.color='black';\' onBlur=\'getkeyvalue(this)\' value=\'\'/></span><span id=\'delthemsg"+num+"\' class=\'zdybzsc\' onClick=\'delthemsg(this)\'>删除</span><span style=\'display:none;\'><input id=\'zdybzmsgkeyvalue"+num+"\' name=\'userbeizhu[]\' type=\'text\'/></span></div>");
			
			$("#addnewlist").css("height",($("#addnewlist").height()+42)+"px");
			$("#zdybzmsgkey"+num).text(document.getElementById("thekey").value);
			$("#zdybzmsgvalue"+num).val(document.getElementById("thevalue").value);
			
			$("#zdybzmsgkeyvalue"+num).val($("#zdybzmsgkey"+num).text()+":"+$("#zdybzmsgvalue"+num).val());
			
			document.getElementById("thekey").value="";
			document.getElementById("thevalue").value="";
			$("#addnewmsg").fadeOut();
			
			if($("[id^=zdybzmsgarea]").length+1>4)
			{
				$("#addmsgarea").fadeOut();
				$("#addnewlist").css("height","280px");
			}
		}
		else
		{
			document.getElementById("theopentipstext").innerHTML="添加自定义备注已达到最大条数";
			document.getElementById('boxshowopentips').style.display="";
			setTimeout(function(){
				document.getElementById('boxshowopentips').style.display="none";
			},1500);
		}
	}
}
function delthemsg(obj)
{
	$("#zdybzmsgarea"+obj.id.substring(9,obj.id.length)).remove();
	if($("[id^=zdybzmsgarea]").length+1<4)
	{
		$("#addmsgarea").fadeIn();
		$("#addnewlist").css("height",($("#addnewlist").height()-42)+"px");
	}
	else if($("[id^=zdybzmsgarea]").length+1==4)
	{
		$("#addmsgarea").fadeIn();
		$("#addnewlist").css("height",($("#addnewlist").height())+"px");
	}
	
	
	for(var i=obj.id.substring(9,obj.id.length);i<=4;i++)
	{
		
		$('#zdybzmsgarea'+i).attr('id','zdybzmsgarea'+(i-1));
		$('#zdybzmsgkey'+i).attr('id','zdybzmsgkey'+(i-1));
		$('#zdybzmsgvalue'+i).attr('id','zdybzmsgvalue'+(i-1));
		$('#delthemsg'+i).attr('id','delthemsg'+(i-1));
		$('#zdybzmsgkeyvalue'+i).attr('id','zdybzmsgkeyvalue'+(i-1));
	}
	
	
}
function getkeyvalue(obj)
{
	$("#zdybzmsgkeyvalue"+obj.id.substring(13,obj.id.length)).val($("#zdybzmsgkey"+obj.id.substring(13,obj.id.length)).text()+":"+$("#zdybzmsgvalue"+obj.id.substring(13,obj.id.length)).val());
}
function settxluserinfo(id,xm,xb,sjh,zuid,gongshi,dizhi,qq,email,zuarr,qitastr)
{
	document.getElementById("userid").value="";
	document.getElementById("xm").value="";
	document.getElementById("xb").value="0";
	document.getElementById("sjh").value="";
	//document.getElementById("zuid").value="";
	document.getElementById("gongshi").value="";
	document.getElementById("dizhi").value="";
	document.getElementById("qq").value="";
	document.getElementById("email").value="";
	
	
	//$("#myselect").empty();
	//$("#myselect").html("<select id=\"zuid\" name=\"zuid\" class=\"vselect\"><option>未分组</option></select>");
	
	//document.getElementById("zuid").innerHTML = "<option>未分组</option>";
	
	$("#zdybz").html("");
	
	document.getElementById("thekey").value="";
	document.getElementById("thevalue").value="";
	$("#addnewmsg").fadeOut();
	
	
	
	
	
	
	
	document.getElementById("userid").value=id;
	document.getElementById("xm").value=xm;
	document.getElementById("xb").value=xb;
	document.getElementById("sjh").value=sjh;
	//document.getElementById("zuid").value=zuid;//在本地测的话，这是对的，但程序加载列表是在下面，该句在程序中应该在最后
	document.getElementById("gongshi").value=gongshi;
	document.getElementById("dizhi").value=dizhi;
	document.getElementById("qq").value=qq;
	document.getElementById("email").value=email;
	
	
	var vv=qitastr;
	/*for(var i=1;i<=qitastr.split("`").length;i++)
	{
		var v1=vv.substring(0,vv.indexOf(":"));
		var v2=vv.substring(vv.indexOf(":")+1,vv.indexOf("`"));
		alert(v1+","+v2);
		var vv=vv.substring(vv.indexOf("`")+1,vv.length);
	}*/
	if(qitastr!="")
	{
		for(var i=0;i<=qitastr.split("`").length-1;i++)
		{
			
			myvv=vv.split("`");
			var v1=myvv[i].substring(0,myvv[i].indexOf(":"));
			var v2=myvv[i].substring(myvv[i].indexOf(":")+1,myvv[i].length);
			
			$("#zdybz").append("<div id=\'zdybzmsgarea"+i+"\' class=\'zdybzmsgarea\'><span id=\'zdybzmsgkey"+i+"\'>"+v1+"</span><span>：</span><span><input id=\'zdybzmsgvalue"+i+"\' class=\'inputtext\' type=\'text\' maxlength=\'100\' onKeyPress=\'this.style.color='black';\' onBlur=\'getkeyvalue(this)\' value=\'"+v2+"\'/></span><span id=\'delthemsg"+i+"\' class=\'zdybzsc\' onClick=\'delthemsg(this)\'>删除</span><span style=\'display:none;\'><input id=\'zdybzmsgkeyvalue"+i+"\' name=\'userbeizhu[]\' type=\'text\'/ value=\'"+v1+':'+v2+"\'></span></div>");
		}
	}
	
	
	for(var i=0;i<zuarr.records.length;i++){
		$("#zuid").append("<option value='"+zuarr.records[i].zuid+"'>"+zuarr.records[i].zuname+"</option>");
	}
	
	document.getElementById("zuid").value=zuid;
}

function showaddnewmsg()
{
	$("#addnewmsg").fadeIn();
}