<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
	
if($action=="adduser"){
	$username=trim($_POST["username"]);
	$sjh=trim($_POST["sjh"]);
	$pwd=trim($_POST["pwd"]);
	$pwd2=trim($_POST["pwd2"]);
	$lxrxm=trim($_POST["lxrxm"]);
	$lxrqq=trim($_POST["lxrqq"]);
	$gsmc=trim($_POST["gsmc"]);
	$dizhi=trim($_POST["dizhi"]);
	$tjrid=trim($_POST["tjrid"]);
	$yingxiaoid=trim($_POST["yingxiaoid"]);
	
	$isdxuser=intval($_POST["isdxuser"]);
	$islluser=intval($_POST["islluser"]);
	if(empty($username) || empty($sjh) || empty($pwd) || empty($pwd2) || empty($lxrxm) || empty($lxrqq) || empty($gsmc) || empty($dizhi)){
		die("<script>alert('��д��Ϣ������!');</script>");
	}
	if($pwd!=$pwd2){
		die("<script>alert('�������벻һ��!');</script>");
	}
	if(empty($isdxuser) && empty($islluser)){
		die("<script>alert('��ѡ���������!');</script>");
	}
	
	//����û����Ƿ����
	$sql="select username from `user_daili` where username='".$username."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('�û����Ѵ���!');</script>");
	}
	//���绰�Ƿ����
	$sql="select username from `user_daili` where sjh='".$sjh."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		die("<script>alert('ָ���绰�Ѵ��ڣ�".$row['username']."��!');</script>");
	}
	
	
	//�洢�û���Ϣ
	$nowtime=time();
	$inarr=array(
		   "username"=>$username,
		   "pwd"=>$pwd,
		   "dxnum"=>0,
		   "jiage"=>"0.045",

		   "sjh"=>$sjh,
		   "gsmc"=>$gsmc,
		   "dizhi"=>$dizhi,
		   "lxrxm"=>$lxrxm,
		   "lxrqq"=>$lxrqq,
		   "tjrid"=>$tjrid,
		   "yingxiaoid"=>$yingxiaoid,
		   "isdxuser"=>$isdxuser,
		   "islluser"=>$islluser,
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("user_daili",$inarr);
	
	$logmsg="��Ӵ�����";
	insertcaozuolog(-1,$tid,"�ܺ�̨",$username,2,$logmsg);
	
	die("<script>alert('��ӳɹ�!');window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="chongzhi"){
	$chongzhi_jine=floatval($_POST["chongzhi_jine"]);
	$chongzhi_uid=trim($_POST["chongzhi_uid"]);
	$chongzhi_beizhu=trim($_POST["chongzhi_beizhu"]);
	if(empty($chongzhi_uid)){
		die("<script>alert('ϵͳ����!');</script>");
	}
	
	//��ȡ��������Ϣ
	$sql="select * from `user_daili` where id=".$chongzhi_uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("<script>alert('ϵͳ����!');</script>");
	}
	

	$inactiv=array(
			'uid' =>$chongzhi_uid,
			'jine'=>$chongzhi_jine, 
			'cztype' =>0,
			'czuid' =>$_SESSION["admin_uid"],
			'shje' =>$chongzhi_jine,
			'beizhu' =>$chongzhi_beizhu,
			'createtime' =>time()
	 );
	$id=$con->insertabe("chongzhidaililog",$inactiv);
	if($chongzhi_jine>0){
		$sql="UPDATE user_daili set dxnum=dxnum+".$chongzhi_jine." where id=".$chongzhi_uid;
		$re=$con->query($sql);//�����û����
		
		$logmsg="��ֵ ".$chongzhi_jine."Ԫ";
		insertcaozuolog(-1,$chongzhi_uid,"�ܺ�̨",$userinfo['username'],1,$logmsg);

	}else{
		$chongzhi_jine=abs($chongzhi_jine);
		$sql="UPDATE user_daili set dxnum=dxnum-".$chongzhi_jine." where id=".$chongzhi_uid;
		$re=$con->query($sql);//�����û����
		$logmsg="�۷� ".$chongzhi_jine."Ԫ";
		insertcaozuolog(-1,$chongzhi_uid,"�ܺ�̨",$userinfo['username'],1,$logmsg);
	}
	die("<script>alert('��ֵ�ɹ�!');window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="setuserinfo"){
	$setuser_id=trim($_GET["setuser_id"]);
	if(empty($setuser_id)){
		die("<script>alert('�Ƿ�����!');</script>");
	}
	
	$sjh=trim($_GET["sjh"]);
	if(!empty($sjh)){
		$sql="UPDATE user_daili set sjh='".$sjh."' where id=".$setuser_id;
		$re=$con->query($sql);
	}
	
	$pwd=trim($_GET["pwd"]);
	if(!empty($pwd)){
		$sql="UPDATE user_daili set pwd='".$pwd."' where id=".$setuser_id;
		$re=$con->query($sql);
	}
	
	$lxrxm=trim($_GET["lxrxm"]);
	if(!empty($lxrxm)){
		$sql="UPDATE user_daili set lxrxm='".$lxrxm."' where id=".$setuser_id;
		$re=$con->query($sql);
	}
	
	$lxrqq=trim($_GET["lxrqq"]);
	if(!empty($lxrqq)){
		$sql="UPDATE user_daili set lxrqq='".$lxrqq."' where id=".$setuser_id;
		$re=$con->query($sql);
	}
	
	$gsmc=trim($_GET["gsmc"]);
	if(!empty($gsmc)){
		$sql="UPDATE user_daili set gsmc='".$gsmc."' where id=".$setuser_id;
		$re=$con->query($sql);
	}
	
	$dizhi=trim($_GET["dizhi"]);
	if(!empty($dizhi)){
		$sql="UPDATE user_daili set dizhi='".$dizhi."' where id=".$setuser_id;
		$re=$con->query($sql);
	}
	

	die("<script>alert('�޸ĳɹ�');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserjiage"){
	$uid=trim($_GET["setjiage_uid"]);
	$jiage=floatval($_GET["jiage"]);
	$ydzk=floatval($_GET["ydzk"]);
	$ltzk=floatval($_GET["ltzk"]);
	$dxzk=floatval($_GET["dxzk"]);
	

	if(empty($uid) || empty($jiage) || empty($ydzk) || empty($ltzk) || empty($dxzk)){
		die("<script>alert('��Ϣ������!');</script>");
	}

	//��ȡ��������Ϣ
	$sql="select * from `user_daili` where id=".$uid;
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("<script>alert('ϵͳ����!');</script>");
	}
	
	$inarr=array(
				"jiage"=>$jiage,
				"yidongzk"=>$ydzk,
				"liantongzk"=>$ltzk,
				"dianxinzk"=>$dxzk,
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	
	$logmsg="�޸ļ۸� ���ż۸�".$jiage."�ƶ��ۿۣ�".$ydzk."��ͨ�ۿۣ�".$ltzk."�����ۿ�".$dxzk;
	insertcaozuolog(-1,$uid,"�ܺ�̨",$userinfo['username'],0,$logmsg);
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="setzfbzhanghao"){
	$uid=trim($_GET["uid"]);
	$zfbzhanghao=trim($_GET["zfbzhanghao"]);
	if(empty($uid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	$inarr=array(
				"zfbzhanghao"=>$zfbzhanghao
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setzfbname"){
	$uid=trim($_GET["uid"]);
	$zfbname=trim($_GET["zfbname"]);
	if(empty($uid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	$inarr=array(
				"zfbname"=>$zfbname
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="sendjiesuanok"){
	$id=trim($_GET["id"]);
	if(empty($id)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	$inarr=array(
			"zt"=>1
	);
	$re=$con->updatetabe("daili_zhangdanlog",$inarr,$id,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setmrlltongdao"){
	$yddefaulttongdaoid=trim($_POST["yddefaulttongdaoid"]);
	$ltdefaulttongdaoid=trim($_POST["ltdefaulttongdaoid"]);
	$dxdefaulttongdaoid=trim($_POST["dxdefaulttongdaoid"]);
	if(empty($ltdefaulttongdaoid) || empty($yddefaulttongdaoid) || empty($dxdefaulttongdaoid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	$sql="update `configdb` set `congigvalue`='".$yddefaulttongdaoid."' where configkey='liuliangtdyd'";
	$re=$con->query($sql);
	
	$sql="update `configdb` set `congigvalue`='".$ltdefaulttongdaoid."' where configkey='liuliangtdlt'";
	$re=$con->query($sql);
	
	$sql="update `configdb` set `congigvalue`='".$dxdefaulttongdaoid."' where configkey='liuliangtddx'";
	$re=$con->query($sql);

	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="adduserlltd"){
	$addusersetusername=trim($_GET["addusersetusername"]);
	$addusersetttyd=trim($_GET["addusersetttyd"]);
	$addusersetttlt=trim($_GET["addusersetttlt"]);
	$addusersetttdx=trim($_GET["addusersetttdx"]);
	if(empty($addusersetusername) || empty($addusersetttyd) || empty($addusersetttlt)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$sql="SELECT * FROM user_daili where username='".$addusersetusername."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=intval($row["id"]);
	if(empty($uid)){
		die("<script>alert('ָ���û�������!');</script>");
	}
	
	$inarr=array(
		 "lltdbdyd"=>$addusersetttyd,
		 "lltdbdlt"=>$addusersetttlt,
		 "lltdbddx"=>$addusersetttdx
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserlltd"){
	$setuserid=trim($_GET["setuserid"]);
	$setuserllttyd=trim($_GET["setuserllttyd"]);
	$setuserllttlt=trim($_GET["setuserllttlt"]);
	$setuserllttdx=trim($_GET["setuserllttdx"]);
	
	if(empty($setuserid) || empty($setuserllttyd) || empty($setuserllttlt)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$sql="SELECT * FROM user_daili where id=".$setuserid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=intval($row["id"]);
	if(empty($uid)){
		die("<script>alert('ָ���û�������!');</script>");
	}
	
	$inarr=array(
		 "lltdbdyd"=>$setuserllttyd,
		 "lltdbdlt"=>$setuserllttlt,
		 "lltdbddx"=>$setuserllttdx
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="deluserlltd"){
	$setuserid=trim($_GET["setuserid"]);
	
	if(empty($setuserid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$sql="SELECT * FROM user_daili where id=".$setuserid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=intval($row["id"]);
	if(empty($uid)){
		die("<script>alert('ָ���û�������!');</script>");
	}
	
	$inarr=array(
		 "lltdbdyd"=>0,
		 "lltdbdlt"=>0,
		 "lltdbddx"=>0
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="settongdaobeizhu"){
	$tongdaoid=trim($_GET["tongdaoid"]);
	$tongdaobeizhu=trim($_GET["tongdaobeizhu"]);
	
	$yidongzk=floatval($_GET["yidongzk"]);
	$liantongzk=floatval($_GET["liantongzk"]);
	$dianxinzk=floatval($_GET["dianxinzk"]);
	
	if(empty($tongdaoid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$inarr=array(
		 "beizhu"=>$tongdaobeizhu,
		 "yidongzk"=>$yidongzk,
		 "liantongzk"=>$liantongzk,
		 "dianxinzk"=>$dianxinzk
	);
	$re=$con->updatetabe("liuliangtongdaolist",$inarr,$tongdaoid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuseryingxiaozy"){
	$uid=trim($_GET["uid"]);
	$yxzyid=trim($_GET["yxzyid"]);
	if(empty($uid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$inarr=array(
		 "yingxiaoid"=>$yxzyid
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="addcytkuser"){
	$dailiname=trim($_POST["dailiname"]);
	if(empty($dailiname)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$sql="SELECT * FROM user_daili where username='".$dailiname."'";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=intval($row["id"]);
	if(empty($uid)){
		die("<script>alert('ָ���û�������!');</script>");
	}
	
	$inarr=array(
		 "cytkbz"=>1
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="delcytkuser"){
	$setuserid=trim($_GET["userid"]);
	
	if(empty($setuserid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$sql="SELECT * FROM user_daili where id=".$setuserid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$uid=intval($row["id"]);
	if(empty($uid)){
		die("<script>alert('ָ���û�������!');</script>");
	}
	
	$inarr=array(
		 "cytkbz"=>0
	);
	$re=$con->updatetabe("user_daili",$inarr,$uid,"id");
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setllsbtktime"){
	$llsbtktime=intval($_POST["llsbtktime"]);
	
	if(empty($llsbtktime)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$sql="update `configdb` set `congigvalue`='".$llsbtktime."' where configkey='llsbtktime'";
	$re=$con->query($sql);

	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="setuserinfotype"){
	$setuser_id=trim($_GET["setuser_id"]);
	$islluser=intval($_GET["islluser"]);
	$isdxuser=intval($_GET["isdxuser"]);
	if(empty($islluser) && empty($isdxuser)){
		die("<script>alert('����ѡ��һ��!');</script>");
	}
	$sql="UPDATE user_daili set islluser=".$islluser.",isdxuser=".$isdxuser." where id=".$setuser_id;
	$re=$con->query($sql);
die("<script>alert('����ɹ�');window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="settongdaozt"){
	$tongdaoid=trim($_GET["tongdaoid"]);
	$zt=intval($_GET["zt"]);
	
	if(empty($tongdaoid)){
		die("<script>alert('��Ϣ������!');</script>");
	}
	
	$inarr=array(
		 "zt"=>$zt
	);
	$re=$con->updatetabe("liuliangtongdaolist",$inarr,$tongdaoid,"id");
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="addtdwhdq"){
	$sheng=trim($_POST["sheng"]);
	$starttime=trim($_POST["starttime"]);
	$endtime=trim($_POST["endtime"]);
	$beizhu=trim($_POST["beizhu"]);
	$tongdaoid=intval($_POST["tongdaoid"]);
	
	if(empty($sheng) || empty($starttime) || empty($endtime) || empty($tongdaoid)){
		die("<script>alert('��д��Ϣ������!');</script>");
	}
	$starttime=strtotime($starttime);
	$endtime=strtotime($endtime);
	
	//�洢�û���Ϣ
	$nowtime=time();
	$inarr=array(
		   "sheng"=>$sheng,
		   "starttime"=>$starttime,

		   "endtime"=>$endtime,
		   "tongdaoid"=>$tongdaoid,
		   "beizhu"=>$beizhu,
		   "createtime"=>$nowtime
	);
	$tid=$con->insertabe("weihudqlist",$inarr);
	die("<script>alert('��ӳɹ�!');window.parent.location.href=window.parent.location.href;</script>");
	
}elseif($action=="deltdwhdq"){
	$tongdaoid=intval($_GET["tongdaoid"]);
	
	if(empty($tongdaoid)){
		die("<script>alert('��д��Ϣ������!');</script>");
	}
	$sql="DELETE FROM weihudqlist WHERE id = ".$tongdaoid;
	$re=$con->query($sql);
die("<script>window.parent.location.href=window.parent.location.href;</script>");
}








?>