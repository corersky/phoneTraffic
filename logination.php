<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("smsfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
$nowtime=time();
if($action=="login"){
	$username=trim($_POST["username"]);
	$pwd=trim($_POST["pwd"]);
	$jzmm=trim($_POST["jzmm"]);
	
	if(empty($username) || empty($pwd)){
		die("<script>alert('�û������벻��Ϊ��!');</script>");
	}
	
	$sql="select * from `user` where username='".$username."' and pwd='".$pwd."'";

	$re=$con->query($sql);
	$row=mysql_fetch_array($re);

	if(empty($row["id"])){
die("<script>alert('��������û��������벻�ԣ���������ϰ��û�������ʱ����www.tongxun168.comƽ̨��½��');window.parent.location.href='http://www.tongxun168.com';</script>");
		
		die("<script>alert('�û������������!');window.parent.location.href=window.parent.location.href;</script>");
	}
	$ip= GetIP();
	$sql="UPDATE user set zhdltime=".$nowtime.",zhdlip='".$ip."' where id=".$row["id"];
	$re=$con->query($sql);
		
	$_SESSION["uid"]=intval($row["id"]);
	$_SESSION["username"]=trim($row["username"]);
	$_SESSION["zhdltime"]=date("Y-m-d H:i:s",$row["zhdltime"]);
	$_SESSION["zhdlip"]=trim($row["zhdlip"]);
	
	if(!empty($jzmm)){
		$ctime=time()+60*60*24*30;
		setcookie("jzmm",1, $ctime);
		setcookie("username",$username, $ctime);
		setcookie("cctime",authcode($pwd),$ctime);
	}else{
		setcookie("jzmm",0);
		setcookie("username",'');
		setcookie("cctime",'');
	}	
	
	die("<script>window.parent.location.href='".XZKJURL."/user.php?action=userindex';</script>");
}elseif($action=="checkusernick"){
	$username=trim($_GET["username"]);
	if(empty($username)){
		die("err");
	}
	u8togbk($username);
	$sql="select * from `user` where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row["id"])){
		die("1");
	}else{
		die("0");
	}
	

}elseif($action=="sendyanzma"){
	$sjh=trim($_GET["sjh"]);
	if(empty($sjh)){
		$arr=array("zt"=>0,"msg"=>"�ֻ��Ų���Ϊ��!");
		$a=returnajaxjson_fengzhuang($arr);
		die($a);
	}
	if(strlen($sjh)<11){
		$arr=array("zt"=>0,"msg"=>"����ʧ��!");
		$a=returnajaxjson_fengzhuang($arr);
		die($a);
	}
	
	//�ж��ֻ����Ƿ��ظ�
	$sql="select * from `user` where sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row["id"])){
		$arr=array("zt"=>0,"msg"=>"ָ���ֻ����Ѵ���!");
		$a=returnajaxjson_fengzhuang($arr);
		die($a);
	}
	
	
	//ÿ���ֻ���60s��������һ����֤��
	$time=time()-60;
	$sql="select sjh from `yanzhengma` where createtime>".$time." and sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		$arr=array("zt"=>0,"msg"=>"����Ƶ��������֤��!");
		$a=returnajaxjson_fengzhuang($arr);
		die($a);
	}
	
	//��ȡ��֤��ģ��
	$sql="select configname,nei from `tongzhitemp` where configname='yanzhengma'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$temp=trim($row["nei"]);
	if(empty($temp)){
		$arr=array("zt"=>0,"msg"=>"��ȡ��֤��ģ��ʧ��!");
		$a=returnajaxjson_fengzhuang($arr);
		die($a);
	}
	
	$yzm=rand(100000,999999);
	$nei=preg_replace("/(.*?)(\*\*\*\*\*)(.*)/is","\\1 ".$yzm." \\3",$temp);

	//�洢
	$nowtime=time();
	$inarr=array(
		   "sjh"=>$sjh,
		   "nei"=>$nei,
		   "yzm"=>$yzm,
		   "yzmconfigname"=>$row["configname"],
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("yanzhengma",$inarr);
	
	//��ȡ������֤��ͨ��id
	$tongdaoid=gettongdaoid_yzm();
	//���Ͷ���
	$err="";
	$bz=sendsms($sjh,$nei,$tongdaoid,&$err);
	if($bz){
		$arr=array("zt"=>1,"msg"=>"���ͳɹ�!");
		$a=returnajaxjson_fengzhuang($arr);
		die($a);
	}
	$arr=array("zt"=>0,"msg"=>"����ʧ�ܣ����Ժ�����!");
	$a=returnajaxjson_fengzhuang($arr);
	die($a);
}elseif($action=="register"){
	$username=trim($_POST["username"]);
	$pwd=trim($_POST["pwd"]);
	$pwd2=trim($_POST["pwd2"]);
	$lxrdh=trim($_POST["lxrdh"]);
	$lxrdhyzm=trim($_POST["lxrdhyzm"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$lxrxm=trim($_POST["lxrxm"]);
	$lxrqq=trim($_POST["lxrqq"]);
	if(empty($username) || empty($pwd) || empty($lxrdh) || empty($gsmc) || empty($lxrxm) || empty($lxrqq)){
		die("<script>alert('��д��Ϣ������!');</script>");
	}
	if($pwd!=$pwd2){
		die("<script>alert('�����������벻һ��!');</script>");
	}
	/*
	//��֤�ֻ�����֤��
	$time=time()-300;
	$sql="select sjh,yzm from `yanzhengma` where createtime>".$time." and sjh='".$lxrdh."' order by id desc limit 0,1";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$yzm=trim($row["yzm"]);
	if($lxrdhyzm != $yzm){
		die("<script>alert('��֤���������!');</script>");
	}
	*/
	$qianming="��".$username."��";
	//�洢�û���Ϣ
	$nowtime=time();
	$ip= GetIP();
	$inarr=array(
		   "username"=>$username,
		   "pwd"=>$pwd,
		   "dxnum"=>0,
		   "jiage"=>"0.0625",
		   
		   "zhdltime"=>$nowtime,
		   "zhdlip"=>$ip,
		   "sjh"=>$lxrdh,
		   "gsmc"=>$gsmc,
		   "dizhi"=>$dizhi,
		   "lxrxm"=>$lxrxm,
		   "lxrqq"=>$lxrqq,
		    "qianming"=>$qianming,
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("user",$inarr);
	
	$ctime=time()+60*60*24*30;
	setcookie("jzmm",1, $ctime);
	setcookie("username",$username, $ctime);
	setcookie("cctime",authcode($pwd),$ctime);
		
	die("<script>alert('��ϲ��ע��ɹ������μ������û�����".$username."�����ص���ҳ��½��');window.parent.location.href='".XZKJURL."/index.php';</script>");
}elseif($action=="sendzhaihuimima"){
	$username=trim($_GET["username"]);
	if(empty($username)){
		die("err");
	}
	u8togbk($username);
	$sql="select id,username,sjh,pwd from `user` where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$sjh=trim($row["sjh"]);
	$pwd=trim($row["pwd"]);
	if(empty($sjh)){
		die("err");
	}
	
	//ÿ���ֻ���60s��������һ����֤��
	$time=time()-60;
	$sql="select sjh from `yanzhengma` where createtime>".$time." and sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("0");
	}

//ÿ���ֻ���24H��������5����֤��
	$time=date("Y-m-d");
	$time=strtotime($time);
	$sql="select count(*) as num from `yanzhengma` where createtime>".$time." and sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$num=intval($row["num"]);
	if($num>=5){
		die("0");
	}
	
	//��ȡ��֤��ģ��
	$sql="select configname,nei from `tongzhitemp` where configname='sendmima'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$temp=trim($row["nei"]);
	if(empty($temp)){
		die("0");
	}
	
	
	$nei=preg_replace("/(.*?)(\*\*\*\*\*)(.*)/is","\\1 ".$pwd." \\3",$temp);

	//�洢
	$nowtime=time();
	$inarr=array(
		   "sjh"=>$sjh,
		   "nei"=>$nei,
		   "yzm"=>'',
		   "yzmconfigname"=>$row["configname"],
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("yanzhengma",$inarr);
	
	//��ȡ������֤��ͨ��id
	$tongdaoid=gettongdaoid_yzm();
	//���Ͷ���
	$err="";
	$bz=sendsms($sjh,$nei,$tongdaoid,&$err);
	if($bz){
		die("1");
	}
	die("0");
	
	


}if($action=="logout"){
	$_SESSION=array();
	die("<script>window.parent.location.href='".XZKJURL."/index.php';</script>");

}



?>