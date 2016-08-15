<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	
	$con=new MySql();
	
	
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
	
	$uid=$userinfo["id"];
	if(empty($sjhtype)){
		//处理移动
		$a=addliuliang_server($uid,$sjh,$liuliang,0,$beizhu,$ly);
		echo $a;
		exit;
	}elseif($sjhtype==1){
		//联通处理
		$a=addliuliang_server($uid,$sjh,$liuliang,1,$beizhu,$ly);
		echo $a;
		exit;
	}elseif($sjhtype==2){
		//电信处理
		$a=addliuliang_server($uid,$sjh,$liuliang,2,$beizhu,$ly);
		echo $a;
		exit;
	}elseif($sjhtype==3){
		//电信处理
		$a=addliuliang_server($uid,$sjh,$liuliang,3,$beizhu,$ly);
		echo $a;
		exit;
	}else{
		die("-2");
	}
	








?>