//����û����Ƿ����
function checkusernick(){
	 var  username=document.getElementById("username").value;
	 if(username==""){
		return false;	 
	 }
	 
	var bai;
	if(window.XMLHttpRequest){//�����������ʼ��Ajax����
			bai = new XMLHttpRequest();
	}else{//IE�������ʼ��Ajax����
			bai = new ActiveXObject("Microsoft.XMLHTTP");
	}
	bai.onreadystatechange=function (){
	if(bai.readyState==4){
		 if(bai.status==200){
			 	 var str = bai.responseText;
				 str=""+str;
				 if(str=="1"){
					 //document.getElementById('span_checkname').innerHTML="����ʹ��";
					  document.getElementById("div_zhuche_ok").style.display="";
					  document.getElementById("div_zhuche_err").style.display="none";
				}else{
					//document.getElementById('span_checkname').innerHTML="�ѱ�ע��";
					document.getElementById("div_zhuche_ok").style.display="none";
					document.getElementById("div_zhuche_err").style.display="";
				}
				
		  }
		}  
	  }//��������
	  

	
	  //END �ı�״̬
	  username=encodeURIComponent(username);
	  bai.open("GET","logination.php?action=checkusernick&username="+username,true);
	  bai.send(null);//���������������	
	
}

//�����ֻ�����֤��
function sendregisteryzm(){
	 var  lxrdh=document.getElementById("lxrdh").value;
	 if(lxrdh==""){
		return false;	 
	 }
	 
	var bai;
	if(window.XMLHttpRequest){//�����������ʼ��Ajax����
			bai = new XMLHttpRequest();
	}else{//IE�������ʼ��Ajax����
			bai = new ActiveXObject("Microsoft.XMLHTTP");
	}
	bai.onreadystatechange=function (){
	if(bai.readyState==4){
		 if(bai.status==200){
			 	 var str = bai.responseText;
				 str=""+str;
				 if(str=="1"){
					// document.getElementById('span_yanzhengma').innerHTML="�ѷ���";
				}else{
					//document.getElementById('span_yanzhengma').innerHTML="����ʧ��";
				}
				
		  }
		}  
	  }//��������
	  

	
	  //END �ı�״̬
	  lxrdh=encodeURIComponent(lxrdh);
	  bai.open("GET","logination.php?action=sendyanzma&sjh="+lxrdh,true);
	  bai.send(null);//���������������	
	
}



//��������
function sendzhaihuimima(nick){
	var bai;
	if(window.XMLHttpRequest){//�����������ʼ��Ajax����
			bai = new XMLHttpRequest();
	}else{//IE�������ʼ��Ajax����
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
	  }//��������
	  

	
	  //END �ı�״̬
	  nick=encodeURIComponent(nick);
	  bai.open("GET","logination.php?action=sendzhaihuimima&username="+nick,true);
	  bai.send(null);//���������������	
	
}