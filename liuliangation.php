<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	//require_once("source/liuliangfunction.php");
	require_once("liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}



if($action=="addliuliang"){
	$sjh=trim($_GET["sjh"]);
	$liuliang=trim($_GET["liuliang"]);
	$sjhtype=intval($_GET["sjhtype"]);
	if(empty($sjh) || empty($liuliang)){
		liuliangerr("����ʧ�ܣ�");
	}
	if(!is_numeric($sjh)){
		liuliangerr("����ʧ�ܣ�");
	}
	$uid=$_SESSION["uid"];
	$sql="select * from `user` where id=".$_SESSION["uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		liuliangerr("�û���Ϣ����");
	}
	
	
	
	
	$tongdaoid="";
	if(empty($sjhtype)){
		//�����ƶ�
		$sql="select * from `configdb` where configkey='liuliangtdyd'";
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}elseif($sjhtype==1){
		//��ͨ����
		$sql="select * from `configdb` where configkey='liuliangtdlt'";
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}elseif($sjhtype==2){
		//���Ŵ���
		$sql="select * from `configdb` where configkey='liuliangtddx'";
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}
	
	if(empty($tongdaoid)){
		liuliangerr("��ȡͨ��ʧ�ܣ�");
	}
	$functionname="liuliang_tongdaoation_".$tongdaoid;
	if(!function_exists($functionname)){
		liuliangerr("��ȡ����ͨ������ʧ�ܣ�");
	}
	$err="";
	$a=$functionname($_SESSION["uid"],$sjh,$liuliang,$err);
	if(empty($a)){
		liuliangerr($err);
	}
	
	die("<script>window.parent.location.href='".XZKJURL."/user.php?action=liuliangchongzhilog';</script>");
	
	
}






function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/user.php?action=liuliangchongzhi';</script>");
}
?>