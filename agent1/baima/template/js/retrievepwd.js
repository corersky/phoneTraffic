function showmmtime(){
	document.getElementById("zhmmqrfs1").style.display="none";
	document.getElementById("zhmmqrfs3").style.display="none";
	document.getElementById("zhmmqrfs2").style.display="";
	document.getElementById("showtologin").style.display=""
	
	var v = setInterval(function(){
		var vv=document.getElementById("mmbtntext2").innerHTML.substring(0,document.getElementById("mmbtntext2").innerHTML.length-1);
		if(vv>0)
		{
			document.getElementById("mmbtntext2").innerHTML=(vv-1)+"s";
		}
		else
		{
			document.getElementById("zhmmqrfs3").style.display="";
			document.getElementById("zhmmqrfs2").style.display="none";
			document.getElementById("mmbtntext2").innerHTML="60s";
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