<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="orderjujue"){
	$orderid=trim($_POST["orderid"]);
	$jujuemsg=trim($_POST["jujuemsg"]);

	if(empty($orderid) || empty($jujuemsg)){
		die("<script>alert('�ܾ����ɲ���Ϊ��!');</script>");
	}
	
	$sql="select id,uid,kfje,zt from `smsorders` where id=".$orderid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zt=intval($row["zt"]);
	if(!empty($zt)){
		die("<script>alert('ָ�������ѱ�����!');</script>");
	}
	$uid=trim($row["uid"]);
	$kfje=floatval($row["kfje"]);
	if(empty($uid)){
		die("<script>alert('��ȡ����ʧ��!');</script>");
	}
	
	$inarr=array(
			"shenheid"=>$_SESSION["dl_uid"],
			"zt"=>2,
			"msg"=>$jujuemsg
	);
	$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		
	$sql="UPDATE smsordersinfo set zt=2,msg='�������ܾ�' where tid=".$orderid;
	$re=$con->query($sql);
	
	userdxchongzhi($uid,$kfje,4);
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="orderchuli"){
	$orderid=trim($_GET["orderid"]);
	//$tdtype=intval($_GET["tdtype"]);//ͨ������ 0֪ͨ 1Ӫ��
	if(empty($orderid)){
		die("<script>alert('�Ƿ�����!');</script>");
	}
	
	$sql="select * from `smsorders` where id=".$orderid;
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$zt=intval($orderinfo["zt"]);
	
	if(!empty($zt)){
		die("<script>alert('ָ�������ѱ�����!');</script>");
	}
	
	//����Ƕ�ʱ����
	if(!empty($orderinfo["dssendtime"])){
		$inarr=array(
				"shenheid"=>$_SESSION["dl_uid"],
				"zt"=>3
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		die("<script>alert('����ɹ�');window.parent.location.href=window.parent.location.href;</script>");
	}
	/*
	//��ȡ����ͨ��
	$sql="select id from `tongdaolist` where zt=1 and tdtype=".$tdtype." limit 0,1";
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	$tongdaoid=intval($tongdaoinfo["id"]);
	if(empty($tongdaoid)){
		die("<script>alert('��ȡ��������ͨ��!');</script>");
	}
	*/
	
	//��ȡ���ͺ���
	$sql="select sjh from `smsordersinfo` where tid=".$orderid;
	$re=$con->query($sql);
	$sjharr=array();
	while($row=mysql_fetch_array($re)){
		$sjharr[]=$row["sjh"];
	}
	$sjh=implode(",",$sjharr);
	
	$nei=trim($orderinfo["nei"]);

	$err="";
	$bz=sendsms($sjh,$nei,$orderinfo["tongdaoid"],$err);


	if(empty($bz)){
		//����ʧ��
		$inarr=array(
				"shenheid"=>$_SESSION["dl_uid"],
				"zt"=>2,
				"msg"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$orderid;
		$re=$con->query($sql);
		
		//�����û����
		userdxchongzhi($orderinfo["uid"],$orderinfo["kfje"],4);
		
	}else{
		//���ͳɹ�
		$inarr=array(
				"shenheid"=>$_SESSION["dl_uid"],
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
	}
	
	die("<script>alert('���ͳɹ�');window.parent.location.href=window.parent.location.href;</script>");
	
	
}


?>