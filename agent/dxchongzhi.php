<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
	//die("��δ����!");
if($action=="smsnumchongzhi"){
	$pic=floatval($_POST["chongzhipic"]);
	
	if($pic<500){
		die("��ֵ����С��500Ԫ!");
	}
	
	$tid=time().rand(1000,9999);
	$inactiv=array(
			'uid' =>$_SESSION["dl_uid"],
			'tid'=>$tid, 
			'jine'=>$pic, 
			'shje'=>$pic, 
			'cztype'=>2,
			'czuid'=>-1,
			'zt' =>0, 
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhidaililog",$inactiv);
	if(empty($id)){
	 	die("��������ʧ�ܣ�");
	}
	die("<script>window.parent.location.href='".XZKJURL."/zfbjsdz/alipayapi.php?tid=".$tid."&inprinc=".$pic."';</script>");
}elseif($action=="resendchongzhi"){
	$tid=intval($_GET["tid"]);
	if(empty($tid)){
	 die("�Ƿ�����");
	}
	$sql="select * from `chongzhidaililog` where id=".$tid." and uid=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
	 die("ָ�����������ڣ�");
	}
	$tid=$row["tid"];
	$pic=$row["jine"];
	$pic = number_format($pic,2,'.', '');
	die("<script>window.parent.location.href='".XZKJURL."/zfbjsdz/alipayapi.php?tid=".$tid."&inprinc=".$pic."';</script>");

}
?>
