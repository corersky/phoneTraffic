<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	require_once("../jishenfunction.php");
	$con=new MySql();
	
	exit;
	//��ȡ����δ������
	$createtime=time()-60*60*24*3;
	$sql="SELECT * FROM smsorders where createtime > ".$createtime." and zt=0 and id=43";
	$re=$con->query($sql);
	$orderarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$orderarr[]=$row;
	}
	/*
	//��ȡ����ͨ��
	$sql="select id from `tongdaolist` where zt=1 limit 0,1";
	$re=$con->query($sql);
	$tongdaoinfo=mysql_fetch_array($re);
	$tongdaoid=intval($tongdaoinfo["id"]);
	if(empty($tongdaoid)){
		die("��ȡ��������ͨ��!");
	}
	*/

//ѭ��������
foreach($orderarr as $orderinfo){
	//�Ȱ�ɨ��״̬����
	$sql="update `smsorders` set jishensmbz=1 where id=".$orderinfo["id"];
	$re=$con->query($sql);
	
	$orderid=$orderinfo["id"];//�������
	$smsnei=$orderinfo["nei"];//��������
	$smshmnum=intval($orderinfo["hmnum"]);//���ź�������
	
	$tongdaoid=intval($orderinfo["tongdaoid"]);
	
	//�ж��ǲ��������û�
	$sql="select * from `mianshenuser` where uid=".$orderinfo["uid"];
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(empty($row)){
		//���л���������֤
		if(!jishen_heizidian($smsnei)){
			continue;
		}
		if(!jishen_dianhuayanzheng($smsnei)){
			continue;
		}
		if(!jishen_smssjhnumyanzheng($smshmnum)){
			continue;
		}
	}
	
	
	//����Ƕ�ʱ����
	if(!empty($orderinfo["dssendtime"])){
		$inarr=array(
				"shenheid"=>"0",
				"zt"=>3
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		continue;
	}
	
	
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
	$bz=sendsms($sjh,$nei,$tongdaoid,$err);
	if(empty($bz)){
		//����ʧ��
		$inarr=array(
				"shenheid"=>"0",
				"tongdaoid"=>$tongdaoid,
				"zt"=>2,
				"msg"=>$err
		);
		//cs($inarr);
		//exit;
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
		$sql="UPDATE smsordersinfo set zt=2,msg='".$err."' where tid=".$orderid;
		$re=$con->query($sql);
		
		//�����û����
		userdxchongzhi($orderinfo["uid"],$orderinfo["kfje"],4);
	}else{
		//���ͳɹ�
		$inarr=array(
				"shenheid"=>"0",
				"tongdaoid"=>$tongdaoid,
				"zt"=>1,
				"taskid"=>$bz,
				"beizhu"=>$err
		);
		$re=$con->updatetabe("smsorders",$inarr,$orderid,"id");
	}
}//END ѭ��������
	
	

?>