$(function(){
	$("#menulidlsgl").trigger("click");
	$("#gldls").css("background-color","#FFF");
	$("#gldls").css("color","#1f7ed0");
})


function showxqtxt12()
{
	document.getElementById("showxqtxt11").style.display="none";
	document.getElementById("showxqtxt12").style.display="";
	document.getElementById("showxqbtn11").style.display="none";
	document.getElementById("showxqbtn12").style.display="";
}
function showxqtxt11()
{
	document.getElementById("showxqtxt11").style.display="";
	document.getElementById("showxqtxt12").style.display="none";
	document.getElementById("showxqbtn11").style.display="";
	document.getElementById("showxqbtn12").style.display="none";
}
function showxqtxt22()
{
	document.getElementById("showxqtxt21").style.display="none";
	document.getElementById("showxqtxt22").style.display="";
	document.getElementById("showxqbtn21").style.display="none";
	document.getElementById("showxqbtn22").style.display="";
}
function showxqtxt21()
{
	document.getElementById("showxqtxt21").style.display="";
	document.getElementById("showxqtxt22").style.display="none";
	document.getElementById("showxqbtn21").style.display="";
	document.getElementById("showxqbtn22").style.display="none";
}
function showxqtxt32()
{
	document.getElementById("showxqtxt31").style.display="none";
	document.getElementById("showxqtxt32").style.display="";
	document.getElementById("showxqbtn31").style.display="none";
	document.getElementById("showxqbtn32").style.display="";
}
function showxqtxt31()
{
	document.getElementById("showxqtxt31").style.display="";
	document.getElementById("showxqtxt32").style.display="none";
	document.getElementById("showxqbtn31").style.display="";
	document.getElementById("showxqbtn32").style.display="none";
}
function showxqtxt42()
{
	document.getElementById("showxqtxt41").style.display="none";
	document.getElementById("showxqtxt42").style.display="";
	document.getElementById("showxqbtn41").style.display="none";
	document.getElementById("showxqbtn42").style.display="";
}
function showxqtxt41()
{
	document.getElementById("showxqtxt41").style.display="";
	document.getElementById("showxqtxt42").style.display="none";
	document.getElementById("showxqbtn41").style.display="";
	document.getElementById("showxqbtn42").style.display="none";
}
function showxqtxt52()
{
	document.getElementById("showxqtxt51").style.display="none";
	document.getElementById("showxqtxt52").style.display="";
	document.getElementById("showxqbtn51").style.display="none";
	document.getElementById("showxqbtn52").style.display="";
}
function showxqtxt51()
{
	document.getElementById("showxqtxt51").style.display="";
	document.getElementById("showxqtxt52").style.display="none";
	document.getElementById("showxqbtn51").style.display="";
	document.getElementById("showxqbtn52").style.display="none";
}
function showxqtxt62()
{
	document.getElementById("showxqtxt61").style.display="none";
	document.getElementById("showxqtxt62").style.display="";
	document.getElementById("showxqbtn61").style.display="none";
	document.getElementById("showxqbtn62").style.display="";
}
function showxqtxt61()
{
	document.getElementById("showxqtxt61").style.display="";
	document.getElementById("showxqtxt62").style.display="none";
	document.getElementById("showxqbtn61").style.display="";
	document.getElementById("showxqbtn62").style.display="none";
}
function showxqtxt72()
{
	document.getElementById("showxqtxt71").style.display="none";
	document.getElementById("showxqtxt72").style.display="";
	document.getElementById("showxqbtn71").style.display="none";
	document.getElementById("showxqbtn72").style.display="";
}
function showxqtxt71()
{
	document.getElementById("showxqtxt71").style.display="";
	document.getElementById("showxqtxt72").style.display="none";
	document.getElementById("showxqbtn71").style.display="";
	document.getElementById("showxqbtn72").style.display="none";
}

function showjgtxt2()
{
	document.getElementById("showjgtxt11").style.display="none";
	document.getElementById("showjgtxt12").style.display="";
	document.getElementById("showjgtxt21").style.display="none";
	document.getElementById("showjgtxt22").style.display="";
	document.getElementById("showjgtxt31").style.display="none";
	document.getElementById("showjgtxt32").style.display="";
	document.getElementById("showjgtxt41").style.display="none";
	document.getElementById("showjgtxt42").style.display="";
	document.getElementById("showxqbtn1").style.display="none";
	document.getElementById("showxqbtn2").style.display="";
}
function showjgtxt1()
{
	document.getElementById("showjgtxt11").style.display="";
	document.getElementById("showjgtxt12").style.display="none";
	document.getElementById("showjgtxt21").style.display="";
	document.getElementById("showjgtxt22").style.display="none";
	document.getElementById("showjgtxt31").style.display="";
	document.getElementById("showjgtxt32").style.display="none";
	document.getElementById("showjgtxt41").style.display="";
	document.getElementById("showjgtxt42").style.display="none";
	document.getElementById("showxqbtn1").style.display="";
	document.getElementById("showxqbtn2").style.display="none";
}


function showthetips()
{
	if(document.getElementById("theczje").value=="")
	{
		alert("请输入充值金额");
		return false;
	}
}



function yxtext(obj)
{
	for(var i=0;i<$("#[id^='li']").length;i++)
	{
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
			//alert("vv");
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