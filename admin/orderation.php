<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}
if($action=="orderjujue"){
	$orderid=trim($_POST["orderid"]);
	$jujuemsg=trim($_POST["jujuemsg"]);

	if(empty($orderid) || empty($jujuemsg)){
		die("<script>alert('�ܾ����ɲ���Ϊ��!');</script>");
	}
	
	$sql="select id,uid,kfje,zt from `smsorders` where id=".$orderid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$zt=intval($row["zt"]);
	if(!empty($zt)){
		die("<script>alert('ָ�������ѱ�����!');</script>");
	}
	$uid=trim($row["uid"]);
	$kfje=floatval($row["kfje"]);
	if(empty($uid)){
		die("<script>alert('��ȡ����ʧ��!');</script>");
	}
	
	$inarr=array(
			"shenheid"=>"-1",
			"zt"=>2,
			"msg"=>$jujuemsg
	);
	$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		
	$sql="UPDATE smsordersinfo set zt=2,msg='�������ܾ�' where tid=".$orderid;
	$re=$con->query($sql);
	
	userdxchongzhi($uid,$kfje,4,0);
	
	die("<script>window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="orderchuli"){
	$orderid=trim($_GET["orderid"]);
	//$tdtype=intval($_GET["tdtype"]);//ͨ������ 0֪ͨ 1Ӫ��
	if(empty($orderid)){
		die("<script>alert('�Ƿ�����!');</script>");
	}
	
	$sql="select * from `smsorders` where id=".$orderid;
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$zt=intval($orderinfo["zt"]);
	
	if(!empty($zt)){
		die("<script>alert('ָ�������ѱ�����!');</script>");
	}
	
	//����Ƕ�ʱ����
	if(!empty($orderinfo["dssendtime"])){
		$inarr=array(
				"shenheid"=>"-1",
				"zt"=>3
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		die("<script>alert('����ɹ�');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	/*
	//��ȡ����ͨ��
	$sql="select id from `tongdaolist` where zt=1 and tdtype=".$tdtype." limit 0,1";
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	$tongdaoid=intval($tongdaoinfo["id"]);
	if(empty($tongdaoid)){
		die("<script>alert('��ȡ��������ͨ��!');</script>");
	}
	*/
	//��ȡ���ͺ���
	$sql="select sjh from `smsordersinfo` where tid=".$orderid;
	$re=$con->query($sql);
	$sjharr=array();
	while($row=mysql_fetch_array($re)){
		$sjharr[]=$row["sjh"];
	}
	$sjh=implode(",",$sjharr);
	
	$nei=trim($orderinfo["nei"]);

	$err="";
	$bz=sendsms($sjh,$nei,$orderinfo["tongdaoid"],$err);

	if(empty($bz)){
		//����ʧ��
		$inarr=array(
				"shenheid"=>"-1",
				"zt"=>2,
				"msg"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$orderid;
		$re=$con->query($sql);
		
		//�����û����
		userdxchongzhi($orderinfo["uid"],$orderinfo["kfje"],4,0);
		
	}else{
		//���ͳɹ�
		$inarr=array(
				"shenheid"=>"-1",
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
	}
	
	die("<script>alert('���ͳɹ�');window.parent.location.href=window.parent.location.href;</script>");
	
	
}elseif($action=="sdsendtongzhi"){
	$sendduixiang=intval($_POST["sendduixiang"]);
	$zcshichang=intval($_POST["zcshichang"]);
	$ljczjine=intval($_POST["ljczjine"]);
	$dxyedayu=intval($_POST["dxyedayu"]);
	$dxyexiaoyu=intval($_POST["dxyexiaoyu"]);
	
	$tongzhimsg=trim($_POST["tongzhimsg"]);
	
	
	$zcshichang=time()-60*60*24*$zcshichang;
	$smscontentlen=bai_strlen($tongzhimsg);
	$dxnum=ceil($smscontentlen/67);//ÿ�������������
	

	if(empty($tongzhimsg)){
		die("<script>alert('֪ͨ���ݲ���Ϊ��!');</script>");
	}
	$sql="select id,username,dxnum,jiage,sjh from `user` where createtime<".$zcshichang." and dxnum>=".$dxyedayu." and dxnum<=".$dxyexiaoyu;
	$re=$con->query($sql);
	$sjharr=array();
	while($row=mysql_fetch_array($re)){
		//���Ͷ����ж�
		if(!empty($sendduixiang)){
			if($sendduixiang==1){
				$sql="select uid from `user_jiekou` where uid=".$row["id"];
				$r=$con->query($sql);
				$a=mysql_fetch_array($r);
				if(empty($a)){
					continue;
				}
			}elseif($sendduixiang==2){
				$sql="select uid from `taocanlist` where uid=".$row["id"];
				$r=$con->query($sql);
				$a=mysql_fetch_array($r);
				if(empty($a)){
					continue;
				}
			}elseif($sendduixiang==3){
				$sql="select uid from `taocanlist` where uid=".$row["id"];
				$r=$con->query($sql);
				$a=mysql_fetch_array($r);
				if(!empty($a)){
					continue;
				}
			}
		
		}
		
		//�ۼƳ�ֵ����ж�
		if($ljczjine>0){
			$ljczje=getusercznum($row["id"]);
		
			if($ljczje < $ljczjine){
				continue;
			}
		}
		
		$sjharr[]=$row["sjh"];
	}
	
	$nowtime=time();
	$con->query("BEGIN");
	foreach($sjharr as $sjh){
			//�洢
			$inarr=array(
				   "sjh"=>$sjh,
				   "nei"=>$tongzhimsg,
				   "yzm"=>"",
				   "yzmconfigname"=>"sdsendtongzhi",
				   "num"=>$dxnum,
				   "createtime"=>$nowtime
			);
			$tid=$con->insertabe("yanzhengma",$inarr);
	}
	$con->query("COMMIT");
	//���Ͷ���
	$sjh=implode(",",$sjharr);
	
	$sql="select id from `tongdaolist` where qt_jktd=1";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$id=intval($row["id"]);//�ܳ�ֵ���
	
	$err="";
	$bz=sendsms($sjh,$tongzhimsg,$id,$err);
	die("<script>alert('���ͳɹ�');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="getsdsendtongzhinum"){
	$sendduixiang=intval($_GET["sendduixiang"]);
	$zcshichang=intval($_GET["zcshichang"]);
	$ljczjine=intval($_GET["ljczjine"]);
	$dxyedayu=intval($_GET["dxyedayu"]);
	$dxyexiaoyu=intval($_GET["dxyexiaoyu"]);
	
	$zcshichang=time()-60*60*24*$zcshichang;
	$sql="select id,username,dxnum,jiage,sjh from `user` where createtime<".$zcshichang." and dxnum>=".$dxyedayu." and dxnum<=".$dxyexiaoyu;
	$re=$con->query($sql);
	$sjharr=array();
	while($row=mysql_fetch_array($re)){
		if($ljczjine>0){
			$ljczje=getusercznum($row["id"]);
		
			if($ljczje < $ljczjine){
				continue;
			}
		}
		
		$sjharr[]=$row["sjh"];
	}

	$num=count($sjharr);
	echo($num);
	exit;
	
}



?>