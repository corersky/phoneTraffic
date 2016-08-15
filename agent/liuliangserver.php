<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	
	$con=new MySql();
	
$aaa=serialize($_POST);
	csw("log11.txt",$aaa);
	
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
		$beizhu="接口充值";
		if(empty($ly)){
			$ly=2;
		}
	}
	
	if(empty($sjh) || empty($liuliang)){
		//die("-2");
	}
	if(!is_numeric($sjh)){
		die("-2");
	}
	
	$sql="select * from `user_daili` where username='".$apizh."' and pwd='".$apipwd."'";
//echo $sql;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("-2");
	}
    
    if(!in_array($sjhtype, array(0,1,2,3))){
        die("-2");
    }
    
	$uid=$userinfo["id"];

    $con->begin();
    $a=addliuliang_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,$ly);
    if(!$a){
        $con->rollback();
        die("-1");
    }
    $con->commit();
	echo $a;
	
	








?>