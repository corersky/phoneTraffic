function showmmtime(){
	document.getElementById("getmm").style.display="none";
	document.getElementById("mmbtnbg").style.display=""
	document.getElementById("mmbtntext").style.display=""
	
	
	var v = setInterval(function(){
		var vv=document.getElementById("mmbtntext").innerHTML.substring(7,document.getElementById("mmbtntext").innerHTML.length-2);
		if(vv>0)
		{
			document.getElementById("mmbtntext").innerHTML="重新发送密码("+(vv-1)+")s";
		}
		else
		{
			document.getElementById("getmm").style.display="";
			document.getElementById("mmbtnbg").style.display="none";
			document.getElementById("mmbtntext").style.display="none";
			document.getElementById("mmbtntext").innerHTML="重新发送密码(60s)";
			clearInterval(v);
		}
	},1000);
}
function showxyb()
{
	if(document.getElementById("findusername").value!="")
	{
		document.getElementById("thefirst").style.display="none";
		document.getElementById("thesecound").style.display=""
	}
}