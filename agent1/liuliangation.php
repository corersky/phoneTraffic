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
	//�ж��Ƿ��ظ��ύ
	$liulianga=intval($liuliang);
	$time=time()-60;
	$sql="select * from `liuliangdaili_log` where uid=".$_SESSION["dl_uid"]." and createtime>=".$time." and sjh='".$sjh."' and liuliang=".$liulianga;
	
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		liuliangerr("Ϊ�����ظ��ύ�����ʧ��ͬһ�������Ӧ��ͬһ�ײͣ�һ�����ڽ����ύһ�Σ��Գ�ֵ��¼Ϊ׼��");
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
	$err="";
	$a=$functionname($_SESSION["dl_uid"],$sjh,$liuliang,$err);
	if(empty($a)){
		liuliangerr($err);
	}
	
	die("<script>window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhi';</script>");
}
?>