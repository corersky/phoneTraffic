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



if($action=="ordercx"){
	$id=trim($_GET["id"]);
	
	if(empty($id)){
		liuliangerr("�Ƿ�����");
	}
	if(!is_numeric($id)){
		liuliangerr("�Ƿ�����");
	}
	
	//�ж϶���״̬
	$sql="select * from `liuliangdaili_log` where uid=".$_SESSION["dl_uid"]." and id=".$id;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if($row["zt"]!=3){
		liuliangerr("�Ƿ�����");
	}
	$shje=$row["shje"];
	
    $con->begin();
    
	//��״̬�˿�
	$sql="update `liuliangdaili_log` set zt=2,apimsg='�û�����',beizhu2='�û�����',upzttime=".time()." where uid=".$_SESSION["dl_uid"]." and id=".$id;
	$re=$con->query($sql);
    if(!$re){
        $con->rollback();
        liuliangerr("�����˿���Ϣʧ��!");
    }
	
	$uid=$_SESSION["dl_uid"];
	$sql="select cytkbz from `user_daili` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	$cytkbz=intval($userinfo["cytkbz"]);
	if(!empty($cytkbz)){
		//���·���״̬
		$sql="UPDATE liuliangdaili_log set istk=1 where id=".$id;
		$re=$con->query($sql);
        if(!$re){
            $con->rollback();
            liuliangerr("�����Ƿ��˿��ʶʧ��!");
        }
		
		//�������
		$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
		$re=$con->query($sql);//�����û����
        if(!$re){
            $con->rollback();
            liuliangerr("����ʧ��!");
        }
	}	
    $con->commit();
	
	die("<script>window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}elseif($action=="ordertk"){
	$id=trim($_GET["id"]);
	
	if(empty($id)){
		liuliangerr("�Ƿ�����");
	}
	if(!is_numeric($id)){
		liuliangerr("�Ƿ�����");
	}
	//�ж϶���״̬
	$sql="select * from `liuliangdaili_log` where uid=".$_SESSION["dl_uid"]." and id=".$id." and zt=0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		liuliangerr("����״̬����");
	}
	
	$time=$row["createtime"]+60*60*48;
	$nowtime=time();
	if($time>$nowtime){
		liuliangerr("����48Сʱ��δ����״̬�Ķ����ſ����˿");
	}
    
    $con->begin();
    
	$shje=$row["shje"];
	//��״̬�˿�
	$sql="update `liuliangdaili_log` set istk=1,istk72=1,beizhu2='��ʱ�˿�' where uid=".$_SESSION["dl_uid"]." and id=".$id;
	$re=$con->query($sql);
    if(!$re){
        $con->rollback();
        liuliangerr("�����˿���Ϣʧ��!!");
    }
	
	//�������
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);//�����û����
    if(!$re){
        $con->rollback();
        liuliangerr("����ʧ��!");
    }
	$con->commit();
	die("<script>window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
}
?>