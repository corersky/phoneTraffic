<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="smsnumchongzhi"){
	$pic=floatval($_POST["chongzhipic"]);
	
	if($pic<300){
		die("��ֵ�����Ƿ�!");
	}
	
	//$jiage= getuserjiage($_SESSION["uid"]);
	//$pic=$pic*$jiage;

	
	
	$tid=date("YmdHis").rand(10,99);
	$inactiv=array(
			'uid' =>$_SESSION["uid"],
			'tid'=>$tid, 
			'jine'=>$pic, 
			'shje'=>$pic, 
			'cztype' =>0,
			'zt' =>0, 
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhilog",$inactiv);
	if(empty($id)){
	 	die("��������ʧ�ܣ�");
	}
	die("<script>window.parent.location.href='".XZKJURL."/zfbjsdz/alipayapi.php?tid=".$tid."&inprinc=".$pic."';</script>");
}
?>
