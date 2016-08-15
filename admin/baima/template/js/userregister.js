//检查用户名是否可用
function checkusernick(){
	 var  username=document.getElementById("username").value;
	 if(username==""){
		return false;	 
	 }
	 
	var bai;
	if(window.XMLHttpRequest){//其他浏览器初始化Ajax对象
			bai = new XMLHttpRequest();
	}else{//IE浏览器初始化Ajax对象
			bai = new ActiveXObject("Microsoft.XMLHTTP");
	}
	bai.onreadystatechange=function (){
	if(bai.readyState==4){
		 if(bai.status==200){
			 	 var str = bai.responseText;
				 str=""+str;
				 if(str=="1"){
					 //document.getElementById('span_checkname').innerHTML="可以使用";
					  document.getElementById("div_zhuche_ok").style.display="";
					  document.getElementById("div_zhuche_err").style.display="none";
				}else{
					//document.getElementById('span_checkname').innerHTML="已被注册";
					document.getElementById("div_zhuche_ok").style.display="none";
					document.getElementById("div_zhuche_err").style.display="";
				}
				
		  }
		}  
	  }//函数结束
	  

	
	  //END 改变状态
	  username=encodeURIComponent(username);
	  bai.open("GET","logination.php?action=checkusernick&username="+username,true);
	  bai.send(null);//向服务器发送请求	
	
}

//发送手机号验证码
function sendregisteryzm(){
	 var  lxrdh=document.getElementById("lxrdh").value;
	 if(lxrdh==""){
		return false;	 
	 }
	 
	var bai;
	if(window.XMLHttpRequest){//其他浏览器初始化Ajax对象
			bai = new XMLHttpRequest();
	}else{//IE浏览器初始化Ajax对象
			bai = new ActiveXObject("Microsoft.XMLHTTP");
	}
	bai.onreadystatechange=function (){
	if(bai.readyState==4){
		 if(bai.status==200){
			 	 var str = bai.responseText;
				 str=""+str;
				 if(str=="1"){
					// document.getElementById('span_yanzhengma').innerHTML="已发送";
				}else{
					//document.getElementById('span_yanzhengma').innerHTML="发送失败";
				}
				
		  }
		}  
	  }//函数结束
	  

	
	  //END 改变状态
	  lxrdh=encodeURIComponent(lxrdh);
	  bai.open("GET","logination.php?action=sendyanzma&sjh="+lxrdh,true);
	  bai.send(null);//向服务器发送请求	
	
}



//发送密码
function sendzhaihuimima(nick){
	var bai;
	if(window.XMLHttpRequest){//其他浏览器初始化Ajax对象
			bai = new XMLHttpRequest();
	}else{//IE浏览器初始化Ajax对象
			bai = new ActiveXObject("Microsoft.XMLHTTP");
	}
	bai.onreadystatechange=function (){
	if(bai.readyState==4){
		 if(bai.status==200){
			 	 var str = bai.responseText;
				 str=""+str;
				// alert(str);
				
		  }
		}  
	  }//函数结束
	  

	
	  //END 改变状态
	  nick=encodeURIComponent(nick);
	  bai.open("GET","logination.php?action=sendzhaihuimima&username="+nick,true);
	  bai.send(null);//向服务器发送请求	
	
}