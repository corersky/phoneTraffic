<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	
    $con   =   MySQL::getInstance();
    
	csw("log11.txt",date('Y-m-d H:i:s').':'.json_encode($_POST));
	
	
	$sjh=trim($_POST["sjh"]);
	$liuliang=trim($_POST["liuliang"]);
	$sjhtype=intval($_POST["sjhtype"]);
	if(!isset($_POST["sjhtype"])){
		$sjhtype=3;
	}
	$ly=intval($_POST["ly"]);
	
	$apizh=trim($_POST["apizh"]);
	$apipwd=trim($_POST["apipwd"]);
	$beizhu=trim($_POST["beizhu"]);
	if(empty($beizhu)){
		$beizhu="�ӿڳ�ֵ";
		if(empty($ly)){
			$ly=2;
		}
	}
    
    if(empty($sjh)){
        $errMsg    =   '�ֻ��Ų���Ϊ��!';
        liuliangerr_server($apizh, $sjh, $liuliang, $sjhtype, $beizhu, $errMsg, $ly, -1);
    }
    
    if(empty($liuliang)){
        $errMsg    =   '��������Ϊ��!';
        liuliangerr_server($apizh, $sjh, $liuliang, $sjhtype, $beizhu, $errMsg, $ly, -2);
    }
	
	if(!is_numeric($sjh)){
		$errMsg    =   '�ֻ��Ÿ�ʽ����ȷ!';
        liuliangerr_server($apizh, $sjh, $liuliang, $sjhtype, $beizhu, $errMsg, $ly, -3);
	}
	
	$sql="select * from `user_daili` where username='".$apizh."' and pwd='".$apipwd."'";
//echo $sql;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		$errMsg    =   '�û���Ϣ����ȷ!!';
        liuliangerr_server($apizh, $sjh, $liuliang, $sjhtype, $beizhu, $errMsg, $ly, -4);
	}
    
    if(!in_array($sjhtype, array(0,1,2,3))){
        $errMsg    =   '�ֻ�����Ӫ�̲���ȷ!'.$sjhtype;
        liuliangerr_server($apizh, $sjh, $liuliang, $sjhtype, $beizhu, $errMsg, $ly, -5);
    }
    
	$uid=$userinfo["id"];

    $con->begin();
    $a=addliuliang_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,$ly);
    if(!$a){
        $con->rollback();
        $errMsg    =   '���涩����Ϣʧ��!';
        liuliangerr_server($apizh, $sjh, $liuliang, $sjhtype, $beizhu, $errMsg, $ly, -6);
    }
    $con->commit();
	echo $a;
	
	








?>