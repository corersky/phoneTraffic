<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="adduser"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$lxrxm=trim($_POST["lxrxm"]);
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$qianming="";
	$yingxiaoid=0;
	if(empty($username) || empty($sjh)){
		die("<script>alert('��д��Ϣ������!');</script>");
	}
	
	if(empty($qianming)){
		$qianming="��".$username."��";
	}
	$qmq=substr($qianming,0,2);
	if($qmq !="��"){
		$qianming="��".$qianming."��";
	}
	
	//����û����Ƿ����
	$sql="select username from `user` where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('�û����Ѵ���!');</script>");
	}
	//���绰�Ƿ����
	$sql="select username from `user` where sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('ָ���绰�Ѵ���!');</script>");
	}
	
	
	//�洢�û���Ϣ
	$nowtime=time();
	$ip= GetIP();
	$inarr=array(
		   "username"=>$username,
		   "pwd"=>"123123",
		   "dxnum"=>0,
		   "jiage"=>"0.0625",
		   
		   "zhdltime"=>$nowtime,
		   "zhdlip"=>$ip,
		   "sjh"=>$sjh,
		   "gsmc"=>$gsmc,
		   "dizhi"=>$dizhi,
		   "lxrxm"=>$lxrxm,
		   "lxrqq"=>$lxrqq,
		   "kefuid"=>0,
		   "yingxiaoid"=>$yingxiaoid,
		   "qianming"=>$qianming,
		   "dlid"=>$_SESSION["dl_uid"],
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("user",$inarr);
	die("<script>alert('��ӳɹ�!');window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="setuserinfo"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$lxrxm=trim($_POST["lxrxm"]);
	
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$uid=trim($_POST["uid"]);

	if(empty($uid)){
		die("<script>alert('�Ƿ�����!');</script>");
	}
	
	if(empty($username) || empty($sjh)){
		die("<script>alert('�û����ͺ��ֻ��Ų���Ϊ��!');</script>");
	}
	
	

	$inarr=array(
			"username"=>$username,
			"sjh"=>$sjh,
			"lxrxm"=>$lxrxm,
			"lxrqq"=>$lxrqq,
			"gsmc"=>$gsmc,
			"dizhi"=>$dizhi
			
	);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserbeizhu"){
	$uid=trim($_POST["uid"]);
	$beizhu=trim($_POST["beizhu"]);
	if(empty($uid)){
		die("<script>alert('�Ƿ�����!');</script>");
	}

	$inarr=array(
				"beizhu"=>$beizhu
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="dxchongzhi"){
	$username=trim($_POST["username"]);
	if(empty($username)){
		die("<script>alert('�û�������Ϊ��!');</script>");
	}
	$jine=intval($_POST["jine"]);
	if($jine<0){
		die("<script>alert('��ֵ��������!');</script>");
	}
	//��ȡ�û�id
	$sql="select * from `user` where username='".$username."' and dlid=".$_SESSION["dl_uid"];
	echo $sql;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=$row["id"];
	if(empty($uid)){
		die("<script>alert('��ȡָ���û���Ϣʧ�ܣ���ȷ���û����Ƿ���ȷ!');</script>");
	}
	//��ȡ��������Ϣ
	$sql="select * from `user_daili` where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$dljiage= floatval($userinfo["jiage"]);
	$dldxnum= floatval($userinfo["dxnum"]);
	$shje=$jine*$dljiage;
	if($shje>$dldxnum){
		die("<script>alert('����!');</script>");
	}
	//�۷�
	$sql="UPDATE user_daili set dxnum=dxnum-".$shje." where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);//�����û����
	
	
	$jiage= getuserjiage($uid);
	$jine=$jine*$jiage;
	
	userdxchongzhi_sdcz($uid,$jine,6,'-2',$shje,"�����̳�ֵ");
	
	die("<script>alert('��ֵ�ɹ�');window.parent.location.href=window.parent.location.href;</script>");
}
?>