<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("../common.php");
	require_once("../smsfunction.php");
	require_once("serverfunction.php");
	$con=new MySql();
	$username=trim($_POST["username"]);
	$pwd=trim($_POST["pwd"]);
	$mobile=trim($_POST["mobile"]);
	$content=trim($_POST["content"]);
	$sendtime=trim($_POST["sendtime"]);
	
	$lang=trim($_POST["lang"]);//Ĭ��Ϊgbk Ҳ������u8
	if($lang=="u8"){
		$content=iconv("UTF-8","GBK//IGNORE",$content);
	}
	
	
$aaa=date("Y-m-d H:i:s").":".serialize($_GET).":".serialize($_POST).":".$content."\n";
csw("1122333.txt",$aaa);

	if(empty($username) || empty($pwd) || empty($mobile) || empty($content)){
		returnmsg(0,"������Ϣ������");
	}
	
	$sql="select * from `user` where username='".$username."' and pwd='".$pwd."'";
	
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	
	$uid=$userinfo["id"];
	if(empty($uid)){
		returnmsg(1,"�û����������");
	}
	
	//�ж��û��Ƿ��ǽӿ��û�
	$sql="SELECT uid FROM user_jiekou where uid=".$uid." and zt=1";
	
	$re=$con->query($sql);
	$row=mysql_fetch_array($re,MYSQL_ASSOC);
	if(empty($row)){
		returnmsg(6,"���ǽӿ��û�");
	}
	
	//��ȡ�����û�
	$sql="select * from `mianshenuser` where uid=".$uid." and (nbzh=1 or jkms=1)";
	$re=$con->query($sql);
	$mianshenuserinfo=mysql_fetch_array($re,MYSQL_ASSOC);
	$nbzh=intval($mianshenuserinfo["nbzh"]);
	$jkms=intval($mianshenuserinfo["jkms"]);
	
	
	
	if(!empty($nbzh)){
		//�ڲ��˺Ų�����֤
	}elseif(!empty($jkms)){
		//�ӿ������û���֤��ȷ��
	
	}else{
		//һ��ӿ��û���֤
		
		//��ȡ�û�����ģ��
		$sql="SELECT temp,temptype FROM jiekou_temp where uid=".$uid." and zt=1";
		$re=$con->query($sql);
		$temparr=array();
		while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
			$temparr[]=$row;
		}
		
		//��֤�û�����ģ��
		$tempppzt=0;
		$temptype=0;
		foreach($temparr as $tempvalue){
			//ģ����֤
			$temp=$tempvalue["temp"];
			$replace=preg_replace("/(\*\*\*\*\*)/s","baibianliang", $temp);
			$replace = preg_quote($replace, '/');
			$replace=preg_replace("/baibianliang/s","(.*?)", $replace);
			//$replace=preg_replace("/(\*\*\*\*\*)/s","(.*?)", $temp);
			//$replace=preg_replace("/(\*\*\*\*\*)/s","(.*?)", $temp);
			$replace="/".$replace."/is";
			$ppgjzarr="";
			if (preg_match($replace,$content,$ppgjzarr)) {
				$tempppzt=1;
				$temptype=$tempvalue["temptype"];
				break;
			}
		}
		if(empty($tempppzt)){
			returnmsg(2,"�������ݺ�ģ�岻ƥ��");
		}
	}
	
	
	$nowtime=time();
	if(!empty($sendtime)){
		$sendtime=strtotime($sendtime);
		if($sendtime<($nowtime+300)){
			returnmsg(3,"��ʱ����ʱ������Ҫ��������Ժ�");
		}
	}
	
	$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
	if($jiage<=0){
		returnmsg(20,"���ż۸����");
	}
	
	//��ȡͨ��id
	$tongdaoid=0;
	if(empty($temptype)){
		$sql="select id from `tongdaolist` where zt=1 and  qt_jktd=1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$tongdaoid=intval($row["id"]);
	}else{
		$sql="select id from `tongdaolist` where zt=1 and  qt_jkyzmtd=1";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$tongdaoid=intval($row["id"]);
	}
	
	
	if((!empty($nbzh)) || (!empty($jkms))){
		//ʹ��ָ��ͨ������
		$tongdaoid=$mianshenuserinfo["tongdaoid"];
	}
	
	$meitiaosmssizef=67;//ÿ�������������
	
	$sql="select * from `tongdaolist` where id=".$tongdaoid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$meitiaosmssizef=intval($row["kfts"]);
		
	
	$sjharr=explode(',', $mobile);
	$sjharr=filteremptyarr($sjharr);
	if(empty($sjharr)){
		returnmsg(0,"������Ϣ������");
	}
	$sendsjhstr=implode(",",$sjharr);
	
	$nei=$content;
	$smscontentlen=bai_strlen($nei);
	$smsnum=ceil($smscontentlen/$meitiaosmssizef);//ÿ�������������
	$txlarrlen=count($sjharr);//�ֻ��Ÿ���
	$smsnum=$smsnum*$txlarrlen;//���Ͷ�������
	$zongfeiyong=$smsnum*$jiage;//�۷ѽ��
	
	//�жϽ��
	$userdxnum=floatval($userinfo["dxnum"]);
	$userdxnum=$userdxnum-$zongfeiyong;
	if($userdxnum<0){
		returnmsg(4,"����");
	}
	
	$con->query("BEGIN");
	$inarr=array(
		"uid"=>$uid,
		"nei"=>$nei,
		"num"=>$smsnum,
		"hmnum"=>$txlarrlen,
		"kfje"=>$zongfeiyong,
		"zt"=>1,
		"tongdaoid"=>$tongdaoid,
		"dssendtime"=>$sendtime,
		"createtime"=>$nowtime
	);
	$id=$con->insertabe("smsorders",$inarr);
	if(empty($id)){
		returnmsg(5,"����ʧ��");
	}
	
	$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
	$re=$con->query($sql);//�����û����
	$con->query("COMMIT");
	

	//�û��ֻ������
	$con->query("BEGIN");
	foreach($sjharr as $sjh){
		$inarr=array(
			"tid"=>$id,
			"sjh"=>$sjh,
			"zt"=>0
		);
		$con->insertabe("smsordersinfo",$inarr);
	}
	$con->query("COMMIT");
	
	if(!empty($sendtime)){
		$sql="UPDATE smsorders set zt=3 where id=".$id;
		$re=$con->query($sql);
		returnmsg(200,"���ͳɹ�");
	}
	
	//������Ƕ�ʱ���ͣ����Ͷ���
	
	
	//��ȡ����ͨ��
	/*
	$sql="select id from `tongdaolist` where zt=1 and tdtype=0 limit 0,1";
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	$tongdaoid=intval($tongdaoinfo["id"]);
	if(empty($tongdaoid)){
		returnmsg(20,"��ȡ��������ͨ��");
	}
	*/
	
	$sjh=$sendsjhstr;
	$nei=$content;
	$err="";
	$bz=sendsms($sjh,$nei,$tongdaoid,$err);
	if(empty($bz)){
		//����ʧ��
		$inarr=array(
				"shenheid"=>"0",
				"zt"=>2,
				"msg"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$id,"id");
		
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$id;
		$re=$con->query($sql);
		
		//�����û����
		userdxchongzhi($uid,$zongfeiyong,4);
		returnmsg(5,"����ʧ��");
	}else{
		//���ͳɹ�
		$inarr=array(
				"shenheid"=>"0",
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$id,"id");
		returnmsg(200,"���ͳɹ�");
	}
	
	returnmsg(200,"���ͳɹ�");

	/*************
	0��������Ϣ������
	1:�û����������
	2:�������ݺ�ģ�岻ƥ��
	3:��ʱ����ʱ������Ҫ��������Ժ�
	4:����
	5:����ʧ��
	6:���ǽӿ��û�
	
	20:�����쳣����
	200:���ͳɹ�
	*********/
	
?>