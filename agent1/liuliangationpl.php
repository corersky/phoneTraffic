<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}



if($action=="addliuliangpl"){
	$sjh=trim($_POST["sjh"]);
	$liuliang0=trim($_POST["liuliang0"]);
	$liuliang1=intval($_POST["liuliang1"]);
	$liuliang2=intval($_POST["liuliang2"]);

	if(empty($sjh)){
		liuliangerr("����ʧ�ܣ�");
	}
	
	$pieces= preg_split('/\n|,| /', $sjh, -1, PREG_SPLIT_NO_EMPTY);
	$txlarr=array();
	foreach($pieces as $value){
		$sjh=trim($value);
		if((strlen($sjh)==11) && is_numeric($sjh)){
			$txlarr[]=$sjh;
		}
	}
	
	if(empty($txlarr)){
		liuliangerr("�밴�չ��������ֻ��ţ�");
	}


	
	$sql="select * from `user_daili` where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
		
	$tongdaoid=0;
	if((!empty($userinfo["lltdbdyd"])) || (!empty($userinfo["lltdbdlt"])) || (!empty($userinfo["lltdbddx"]))){
			$tongdaoid=$userinfo["lltdbdyd"];//Ĭ���ƶ�
			if($sjhtype==1){
				//��ͨ����
				$tongdaoid=$userinfo["lltdbdlt"];
			}elseif($sjhtype==2){
				//���Ŵ���
				$tongdaoid=$userinfo["lltdbddx"];
			}
	}else{
		$sql="select * from `configdb` where configkey='liuliangtdyd'";
		if($sjhtype==1){
			//��ͨ����
			$sql="select * from `configdb` where configkey='liuliangtdlt'";
		}elseif($sjhtype==2){
			//���Ŵ���
			$sql="select * from `configdb` where configkey='liuliangtddx'";
		}
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
	
	
	
	$errsjharr=array();
	$errnum=0;
	foreach($txlarr as $sjh){
		
		$hd=substr($sjh,0,4);
		$sjhtype=getsjhdgs($hd);
		
		$liuliang=$liuliang0;
		if($sjhtype==1){
			$liuliang=$liuliang1;
		}elseif($sjhtype==2){
			$liuliang=$liuliang2;
		}
		
		$err="";
		$a=$functionname($_SESSION["dl_uid"],$sjh,$liuliang,$err);
		if(empty($a)){
			$errsjharr[]=$sjh;
			$errnum++;
		}
	}
	$errmsg="������ֵ�ɹ�";
	if($errnum>0){
		$errmsg="������ֵ�ɹ�,���� ".$errnum." �������ύʧ��!";
	}
	
	die("<script>alert('".$errmsg."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhipl';</script>");
}
?>