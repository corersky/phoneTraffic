<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangresendfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];

if(empty($_SESSION["kefu_uid"]) && empty($_SESSION["admin_uid"])){
		die("<script>alert('���¼���ύ');</script>");
	}

if($action=="resend"){
die("<script>alert('�Ƿ�����');</script>");
exit;
	$tid=trim($_GET["tid"]);
	$tidarr=array();
	if(!empty($tid)){
		if(!is_numeric($tid)){
			die("<script>alert('�Ƿ�����');</script>");
		}
		$tidarr[]=$tid;
	}else{
		//�������id����������ǰX��
		$plsize=100;
		$sql="SELECT id FROM liuliangdaili_log where zt=3 ORDER BY id DESC LIMIT 0,".$plsize;
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
			$tidarr[]=$row["id"];
		}
	}
	
	foreach($tidarr as $tid){
		 addliuliang_resend($tid);
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="jujue"){
	$tid=trim($_GET["tid"]);
	$tidarr=array();
	if(!empty($tid)){
		$tidarr[]=$tid;
	}else{
		//�������id����������ǰX��
		$tidarr[]=0;
		$plsize=100;
		$sql="SELECT id FROM liuliangdaili_log where zt=3 ORDER BY id DESC LIMIT 0,".$plsize;
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
			$tidarr[]=$row["id"];
		}
	}
	

	foreach($tidarr as $tid){
		 addliuliang_jujue($tid);
	}
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}
?>