<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["kefu_uid"]) || empty($_SESSION["kefu_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="adduser"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$lxrxm=trim($_POST["lxrxm"]);
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$qianming=trim($_POST["qianming"]);
	$yingxiaoid=trim($_POST["yingxiaoid"]);
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
		die("<script>alert('ָ���绰�Ѵ��ڣ�".$row['username']."��!');</script>");
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
		   "kefuid"=>$_SESSION["kefu_uid"],
		   "yingxiaoid"=>$yingxiaoid,
		    "qianming"=>$qianming,
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
	$qianming=trim($_POST["qianming"]);
	$uid=trim($_POST["uid"]);

	if(empty($uid)){
		die("<script>alert('�Ƿ�����!');</script>");
	}
	
	if(empty($username) || empty($sjh)){
		die("<script>alert('�û����ͺ��ֻ��Ų���Ϊ��!');</script>");
	}
	
	$qmq=substr($qianming,0,2);
	if($qmq !="��"){
		$qianming="��".$qianming."��";
	}
	

	$inarr=array(
			"username"=>$username,
			"sjh"=>$sjh,
			"lxrxm"=>$lxrxm,
			"lxrqq"=>$lxrqq,
			"gsmc"=>$gsmc,
			"dizhi"=>$dizhi,
			"qianming"=>$qianming
			
	);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserkefuid"){
	$uid=trim($_GET["uid"]);
	$kefuid=trim($_GET["kefuid"]);
	if(empty($uid) || empty($kefuid)){
		die("<script>alert('��ѡ��רԱ!');</script>");
	}

	$inarr=array(
				"kefuid"=>$kefuid
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuseryingxiaoid"){
	$uid=trim($_GET["uid"]);
	$kefuid=trim($_GET["kefuid"]);
	if(empty($uid) || empty($kefuid)){
		die("<script>alert('��ѡ��רԱ!');</script>");
	}

	$inarr=array(
				"yingxiaoid"=>$kefuid
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
}elseif($action=="setuserjiage"){
	$uid=trim($_GET["uid"]);
	$jiage=floatval($_GET["jiage"]);
	if(empty($uid) || ($jiage<=0)){
		die("<script>alert('�۸����!');</script>");
	}

	$inarr=array(
				"jiage"=>$jiage
			);
	$re=$con->updatetabe("user",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="tempshenheok"){
	$id=trim($_GET["id"]);
	$temptype=intval($_GET["temptype"]);
	if(empty($id)){
		die("<script>alert('����!');</script>");
	}

	$inarr=array(
				"zt"=>1,
				"temptype"=>$temptype,
				"shenheuid"=>$_SESSION["kefu_uid"],
				"shenhetime"=>time(),
				"msg"=>""
			);
	$re=$con->updatetabe("jiekou_temp",$inarr,$id,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="tempshenheerr"){
	$beizhumsg=trim($_POST["beizhumsg"]);
	$tempid=trim($_POST["tempid"]);
	if(empty($tempid)){
		die("<script>alert('����!');</script>");
	}
	if(empty($beizhumsg)){
		die("<script>alert('���ɲ���Ϊ��!');</script>");
	}
	
	$inarr=array(
				"zt"=>2,
				"shenheuid"=>$_SESSION["kefu_uid"],
				"shenhetime"=>time(),
				"msg"=>$beizhumsg
			);
	$re=$con->updatetabe("jiekou_temp",$inarr,$tempid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="dxchongzhi"){
	$username=trim($_POST["username"]);
	
	if(empty($username)){
		die("<script>alert('�û�������Ϊ��!');</script>");
	}
	
	$jine=intval($_POST["jine"]);
	$zengsongjine=intval($_POST["zengsongjine"]);
	//��ȡ�û�id
	$uid=nicktouid($username);
	if(empty($uid)){
		die("<script>alert('��ȡָ���û���Ϣʧ�ܣ���ȷ���û����Ƿ���ȷ!');</script>");
	}
	$jiage= getuserjiage($uid);
	$jine=$jine*$jiage;
	$zengsongjine=$zengsongjine*$jiage;
	
	$beizhu=trim($_POST["beizhu"]);
	$shje=floatval($_POST["shje"]);
	if($jine>0){
		$cztype=intval($_POST["cztype"]);
		if(empty($cztype)){
			userdxchongzhi_sdcz($uid,$jine,1,$_SESSION["kefu_uid"],$shje,$beizhu);
		}else{
			userdxchongzhi_sdkf($uid,$jine,5,$_SESSION["kefu_uid"],$shje,$beizhu);
		}
		$shje=0;
	}
	
	if($zengsongjine>0){
		userdxchongzhi_sdcz($uid,$zengsongjine,1,$_SESSION["kefu_uid"],$shje,$beizhu,1);
	}
	
	die("<script>alert('��ֵ�ɹ�');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="sendfapiao"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('�Ƿ�����!');</script>");
	}
	$inarr=array(
				"zt"=>1
	);
	$re=$con->updatetabe("fapiao_log",$inarr,$id,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="deltemp"){
	$id=trim($_GET["id"]);
	$sql="DELETE FROM `jiekou_temp` WHERE id = ".$id;
	$re=$con->query($sql);
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}
?>