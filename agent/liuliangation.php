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
	$sjhtype=getsjhdgs($sjh);
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
	
	//�ж��Ƿ���ʡ��ͨ��
	
	if(empty($sjhtype)){
		$sjhinfo=getsjhinfo($sjh);
		$bdllarr="";//û��
		$province=$sjhinfo["province"];
		if(empty($province)){
			$province="û���������";
		}
			
		$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszcyd=1";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$sheng=$row["sheng"];
			if(($sheng=="�ӱ�") && ($liuliang>150)){
				continue;
			}
			if(($sheng=="�½�") && ($liuliang>150)){
				continue;
			}
			if(($row["id"]==66) && ($liuliang>150)){
				continue;
			}
			if(($row["id"]==17) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			if(($row["id"]==20) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			
			if(($row["id"]==62) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			if(($row["id"]==63) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			
			
			$preg_ah="/".$sheng."/is";
			if (preg_match($preg_ah,$province,$bdllarr)) {
				$tongdaoid=$row["id"];
				break;
			}
		}
		
		//����󶨵���ʡ��ͨ����ǿ����ʡ��
		$bdlltdbdydid=$userinfo["lltdbdyd"];
		if(!empty($bdlltdbdydid)){
			$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
			$re=$con->query($sql);
			$row=mysql_fetch_array($re);
			$isbdtd=intval($row["isbdtd"]);//�Ƿ��Ǳ���ͨ�� 0���� 1��
			$sheng=trim($row["sheng"]);//����Ǳ���ͨ�������ֶδ洢ʡ��
			if(!empty($isbdtd)){
				$tongdaoid=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("�����ύû��Ȩ�޵�ʡ�ݺ��룡");
				}
				
			}
		}
		
		
	}
	
	if($sjhtype==1){
		$sjhinfo=getsjhinfo($sjh);
		$bdllarr="";//û��
		$province=$sjhinfo["province"];
		if(empty($province)){
			$province="û���������";
		}
			
		$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszclt=1";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$sheng=$row["sheng"];
			
			$preg_ah="/".$sheng."/is";
			if (preg_match($preg_ah,$province,$bdllarr)) {
				$tongdaoid=$row["id"];
				break;
			}
		}
		
		//����󶨵���ʡ��ͨ����ǿ����ʡ��
		$bdlltdbdydid=$userinfo["lltdbdlt"];
		if(!empty($bdlltdbdydid)){
			$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
			$re=$con->query($sql);
			$row=mysql_fetch_array($re);
			$isbdtd=intval($row["isbdtd"]);//�Ƿ��Ǳ���ͨ�� 0���� 1��
			$sheng=trim($row["sheng"]);//����Ǳ���ͨ�������ֶδ洢ʡ��
			if(!empty($isbdtd)){
				$tongdaoid=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("�����ύû��Ȩ�޵�ʡ�ݺ��룡");
				}
				
			}
		}


		
		
	}
	
	if($sjhtype==2){
		$sjhinfo=getsjhinfo($sjh);
		$bdllarr="";//û��
		$province=$sjhinfo["province"];
		if(empty($province)){
			$province="û���������";
		}
			
		$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszcdx=1";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$sheng=$row["sheng"];
			
			$preg_ah="/".$sheng."/is";
			if (preg_match($preg_ah,$province,$bdllarr)) {
				$tongdaoid=$row["id"];
				break;
			}
		}
		
		//����󶨵���ʡ��ͨ����ǿ����ʡ��
		$bdlltdbdydid=$userinfo["lltdbddx"];
		if(!empty($bdlltdbdydid)){

			$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
			$re=$con->query($sql);
			$row=mysql_fetch_array($re);
			$isbdtd=intval($row["isbdtd"]);//�Ƿ��Ǳ���ͨ�� 0���� 1��
			$sheng=trim($row["sheng"]);//����Ǳ���ͨ�������ֶδ洢ʡ��
			if(!empty($isbdtd)){
				$tongdaoid=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("�����ύû��Ȩ�޵�ʡ�ݺ��룡");
				}
				
			}
		}
		
		
	}
		
	if(empty($tongdaoid)){
		liuliangerr("��ȡͨ��ʧ�ܣ�");
	}
	
	
	
	$functionname="liuliang_tongdaoation_".$tongdaoid;
	if(!function_exists($functionname)){
		liuliangerr("��ȡ����ͨ������ʧ�ܣ�");
	}
    
	$con->begin();
	$err="";
	$a=$functionname($_SESSION["dl_uid"],$sjh,$liuliang,$err);
	if(empty($a)){
        $con->rollback();
		liuliangerr($err);
	}
    $con->commit();
	
	die("<script>window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhi';</script>");
}
?>