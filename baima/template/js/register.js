function checkmm()
{
	if(document.getElementById("dlmm").value!=document.getElementById("qrmm").value)
	{
		document.getElementById("showmmno").style.display="";
	}
	else
	{
		document.getElementById("showmmno").style.display="none";
	}
}
function showyzmtips()
{
	document.getElementById("lxrtips").style.display="block";
	setTimeout(function(){
		document.getElementById("lxrtips").style.display="none";
	},3000);
}
function showyzmtime(){
	document.getElementById("getyzm").style.display="none";
	document.getElementById("lxrtips").style.display="none";
	document.getElementById("yzmbtnbg").style.display="";
	document.getElementById("yzmbtntext").style.display="";
	
	
	var v = setInterval(function(){
		var vv=document.getElementById("yzmbtntext").innerHTML.substring(4,document.getElementById("yzmbtntext").innerHTML.length-1);
		if(vv>0)
		{
			document.getElementById("yzmbtntext").innerHTML="重新发送"+(vv-1)+"s";
		}
		else
		{
			
			document.getElementById("getyzm").style.display="";
			document.getElementById("lxrtips").style.display="none";
			document.getElementById("yzmbtnbg").style.display="none";
			document.getElementById("yzmbtntext").style.display="none";
			document.getElementById("yzmbtntext").innerHTML="重新发送60s";
			clearInterval(v);
		}
	},1000);
}
function showoktips()
{
	document.getElementById("theoktips").style.display="";
}