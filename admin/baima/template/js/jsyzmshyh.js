$(function(){
	$("#menulijsyz").trigger("click");
	$("#mshyh").css("background-color","#FFF");
	$("#mshyh").css("color","#1f7ed0");
})



function bdtd(obj)
{
	for(var i=0;i<$("#[id^='li']").length;i++)
	{
		document.getElementById("dja"+i).style.display="";
		document.getElementById("djb"+i).style.display="none";
		document.getElementById("djc"+i).style.display="none";
		
		document.getElementById("yxa"+i).style.display="";
		document.getElementById("yxb"+i).style.display="none";
		document.getElementById("yxc"+i).style.display="none";
		
		document.getElementById("fwa"+i).style.display="";
		document.getElementById("fwb"+i).style.display="none";
		document.getElementById("fwc"+i).style.display="none";
		//alert("2");
	}
	document.getElementById("yxa"+obj.id.substring(3,obj.id.length)).style.display="none";
	document.getElementById("yxb"+obj.id.substring(3,obj.id.length)).style.display="none";
	document.getElementById("yxc"+obj.id.substring(3,obj.id.length)).style.display="";
	
	//$(".yxd"+obj.id.substring(3,obj.id.length)).find("option[text='yxa'+"+obj.id.substring(3,obj.id.length)+"+").attr("selected",true);
	//$(".yxd0").find("option[text='李四']").attr("selected",true);
	//$(".yxdv").find("option[text='李四']").attr("selected",true);

	/*var objv=document.getElementById('yxd'+obj.id.substring(3,obj.id.length));
	var index=objv.selectedIndex; //序号，取当前选中选项的序号
	alert(index);
	var val = objv.options[index].text;
	alert(val);*/

	for(var i=0; i<=document.getElementById('yxd'+obj.id.substring(3,obj.id.length)).getElementsByTagName("option").length-1;i++)
	{
		if(document.getElementById('yxd'+obj.id.substring(3,obj.id.length)).options[i].text==document.getElementById("yxa"+obj.id.substring(3,obj.id.length)).innerHTML.substring(1,document.getElementById("yxa"+obj.id.substring(3,obj.id.length)).innerHTML.indexOf("<img")))
		{
			alert("vv");
			//alert(i);
			//alert(document.getElementById('yxd'+obj.id.substring(3,obj.id.length)).options[i].value);
			var opts = document.getElementById('yxd'+obj.id.substring(3,obj.id.length)).getElementsByTagName('option'),opt_value = document.getElementById('yxd'+obj.id.substring(3,obj.id.length)).options[i].value;
			for(var i in opts){
				if(opts[i].value==opt_value){
					opts[i].selected = 'selected';
					return;
				}
			}
		}
	}
}