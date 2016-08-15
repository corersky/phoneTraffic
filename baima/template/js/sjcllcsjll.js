$(function(){
	$("#menulisjcll").trigger("click");
	$("#csjll").css("background-color","#FFF");
	$("#csjll").css("color","#299be4");
})


function showsure()
{
	if(document.getElementById("thephonenum").value.length!=11)
	{
		alert("手机号输入错误");
	}
	else
	{
		document.getElementById("showtraffic").style.display="";
		document.getElementById("myphonenum").innerHTML=document.getElementById("thephonenum").value;
		
		if(document.getElementById("theyidong").style.display=="")
		{
			if(document.getElementById("theydtraffic1").checked)
			{
				document.getElementById("mytraffic").innerHTML="10M";
				document.getElementById("mytrafficsend").innerHTML="10M";
				document.getElementById("mysmsnum").innerHTML="75条";
			}
			else if(document.getElementById("theydtraffic2").checked)
			{
				document.getElementById("mytraffic").innerHTML="30M";
				document.getElementById("mytrafficsend").innerHTML="30M";
				document.getElementById("mysmsnum").innerHTML="125条";
			}
			else if(document.getElementById("theydtraffic3").checked)
			{
				document.getElementById("mytraffic").innerHTML="70M";
				document.getElementById("mytrafficsend").innerHTML="70M";
				document.getElementById("mysmsnum").innerHTML="250条";
			}
			else if(document.getElementById("theydtraffic4").checked)
			{
				document.getElementById("mytraffic").innerHTML="150M";
				document.getElementById("mytrafficsend").innerHTML="150M";
				document.getElementById("mysmsnum").innerHTML="500条";
			}
			else if(document.getElementById("theydtraffic5").checked)
			{
				document.getElementById("mytraffic").innerHTML="500M";
				document.getElementById("mytrafficsend").innerHTML="500M";
				document.getElementById("mysmsnum").innerHTML="750条";
			}
			else if(document.getElementById("theydtraffic6").checked)
			{
				document.getElementById("mytraffic").innerHTML="1G";
				document.getElementById("mytrafficsend").innerHTML="1024M";
				document.getElementById("mysmsnum").innerHTML="1250条";
			}
			else if(document.getElementById("theydtraffic7").checked)
			{
				document.getElementById("mytraffic").innerHTML="2G";
				document.getElementById("mytrafficsend").innerHTML="2048M";
				document.getElementById("mysmsnum").innerHTML="1750条";
			}
			else if(document.getElementById("theydtraffic8").checked)
			{
				document.getElementById("mytraffic").innerHTML="3G";
				document.getElementById("mytrafficsend").innerHTML="3072M";
				document.getElementById("mysmsnum").innerHTML="2500条";
			}
			else if(document.getElementById("theydtraffic9").checked)
			{
				document.getElementById("mytraffic").innerHTML="4G";
				document.getElementById("mytrafficsend").innerHTML="4096M";
				document.getElementById("mysmsnum").innerHTML="3250条";
			}
			else if(document.getElementById("theydtraffic10").checked)
			{
				document.getElementById("mytraffic").innerHTML="6G";
				document.getElementById("mytrafficsend").innerHTML="6144M";
				document.getElementById("mysmsnum").innerHTML="4500条";
			}
			else if(document.getElementById("theydtraffic11").checked)
			{
				document.getElementById("mytraffic").innerHTML="11G";
				document.getElementById("mytrafficsend").innerHTML="11264M";
				document.getElementById("mysmsnum").innerHTML="7000条";
			}
		}
		else if(document.getElementById("theliantong").style.display=="")
		{
			if(document.getElementById("thelttraffic1").checked)
			{
				document.getElementById("mytraffic").innerHTML="20M";
				document.getElementById("mytrafficsend").innerHTML="20M";
				document.getElementById("mysmsnum").innerHTML="75条";
			}
			else if(document.getElementById("thelttraffic2").checked)
			{
				document.getElementById("mytraffic").innerHTML="50M";
				document.getElementById("mytrafficsend").innerHTML="50M";
				document.getElementById("mysmsnum").innerHTML="150条";
			}
			else if(document.getElementById("thelttraffic3").checked)
			{
				document.getElementById("mytraffic").innerHTML="100M";
				document.getElementById("mytrafficsend").innerHTML="100M";
				document.getElementById("mysmsnum").innerHTML="250条";
			}
			else if(document.getElementById("thelttraffic4").checked)
			{
				document.getElementById("mytraffic").innerHTML="200M";
				document.getElementById("mytrafficsend").innerHTML="200M";
				document.getElementById("mysmsnum").innerHTML="375条";
			}
			else if(document.getElementById("thelttraffic5").checked)
			{
				document.getElementById("mytraffic").innerHTML="500M";
				document.getElementById("mytrafficsend").innerHTML="500M";
				document.getElementById("mysmsnum").innerHTML="750条";
			}
		}
		else if(document.getElementById("thedianxin").style.display=="")
		{
			if(document.getElementById("thedxtraffic1").checked)
			{
				document.getElementById("mytraffic").innerHTML="5M";
				document.getElementById("mytrafficsend").innerHTML="5M";
				document.getElementById("mysmsnum").innerHTML="25条";
			}
			else if(document.getElementById("thedxtraffic2").checked)
			{
				document.getElementById("mytraffic").innerHTML="10M";
				document.getElementById("mytrafficsend").innerHTML="10M";
				document.getElementById("mysmsnum").innerHTML="50条";
			}
			else if(document.getElementById("thedxtraffic3").checked)
			{
				document.getElementById("mytraffic").innerHTML="30M";
				document.getElementById("mytrafficsend").innerHTML="30M";
				document.getElementById("mysmsnum").innerHTML="125条";
			}
			else if(document.getElementById("thedxtraffic4").checked)
			{
				document.getElementById("mytraffic").innerHTML="50M";
				document.getElementById("mytrafficsend").innerHTML="50M";
				document.getElementById("mysmsnum").innerHTML="175条";
			}
			else if(document.getElementById("thedxtraffic5").checked)
			{
				document.getElementById("mytraffic").innerHTML="100M";
				document.getElementById("mytrafficsend").innerHTML="100M";
				document.getElementById("mysmsnum").innerHTML="250条";
			}
			else if(document.getElementById("thedxtraffic6").checked)
			{
				document.getElementById("mytraffic").innerHTML="200M";
				document.getElementById("mytrafficsend").innerHTML="200M";
				document.getElementById("mysmsnum").innerHTML="350条";
			}
			else if(document.getElementById("thedxtraffic7").checked)
			{
				document.getElementById("mytraffic").innerHTML="500M";
				document.getElementById("mytrafficsend").innerHTML="500M";
				document.getElementById("mysmsnum").innerHTML="750条";
			}
			else if(document.getElementById("thedxtraffic8").checked)
			{
				document.getElementById("mytraffic").innerHTML="1G";
				document.getElementById("mytrafficsend").innerHTML="1024M";
				document.getElementById("mysmsnum").innerHTML="1250条";
			}
		}
		
		
	}
}