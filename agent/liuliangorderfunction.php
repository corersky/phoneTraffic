<?php
//ͨ��������� �������û�id,�ֻ��ţ�����
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_1($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,1,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_2($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,2,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_3($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,3,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_4($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,4,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_5($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,5,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_6($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,6,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_7($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,7,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_8($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,8,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_9($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,9,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_10($uid,$sjh,$liuliang,&$err){
		global $con;
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//������ֵ
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){

				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if(!empty($sjhtype)){
			$err="ͨ�����ʹ���";
			return false;
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}
		
		$mobileProductIdarr=array(
				"10"=>"8a2876934fb6d9a2014fbac56cce0af8",
				"30"=>"8a2876934fb6d9a2014fbac4f5e50af5",
				"70"=>"8a2876934fb6d9a2014fbac4625e0af2",
				"150"=>"8a2876934fb6d9a2014fbac3f7440af0",
				"500"=>"8a2876934fb6d9a2014fbac2cb050aea",
				"1024"=>"8a2876934fb6d9a2014fbac35d8e0aed",
				"2048"=>"8a2876934fb6d9a2014fbac5cb5c0afa",
				"3072"=>"8a2876934fb6d9a2014fbac656840afd",
				"4096"=>"8a2876934fb6d9a2014fbac6abbc0aff",
				"6144"=>"8a2876934fb6d9a2014fbac70a260b01",
				"11264"=>"8a2876934fb6d9a2014fbac763250b04"
		);
		$mobileProductId=$mobileProductIdarr[$liuliang];
		$qita=array("mobileProductId"=>$mobileProductId);
					

		$err="";
		$tongdaoid=10;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err);
		
		
		//��ȡͨ���ۺ�ë��
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if(!empty($sjhtype)){
			$err="ͨ�����ʹ���";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

		
		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_11($uid,$sjh,$liuliang,&$err){
		global $con;
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//������ֵ
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if(!empty($sjhtype)){
			$err="ͨ�����ʹ���";
			return false;
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}
		
		
					
		$qita="";
		$err="";
		$tongdaoid=11;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err);
		
		
		//��ȡͨ���ۺ�ë��
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if(!empty($sjhtype)){
			$err="ͨ�����ʹ���";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

		
		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_12($uid,$sjh,$liuliang,&$err){
		global $con;
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),

			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//������ֵ
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if(!empty($sjhtype)){
			$err="ͨ�����ʹ���";
			return false;
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}
		
		
					
		$qita="";
		$err="";
		$tongdaoid=12;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err);
		
		
		//��ȡͨ���ۺ�ë��
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if(!empty($sjhtype)){
			$err="ͨ�����ʹ���";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

		
		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_13($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,13,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_14($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,14,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_15($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,15,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_16($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,16,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_17($uid,$sjh,$liuliang,&$err){
		global $con;
		//�ж϶Է����͵��ֻ��Ź���
	return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,17,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_18($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,18,$err);
}





//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_19($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,19,$err);
}






//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_20($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,20,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_21($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,21,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_22($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,22,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_23($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,23,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_24($uid,$sjh,$liuliang,&$err){
	global $con;
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("code"=>"104645","mianzhi"=>3),
			"50"=>array("code"=>"104645","mianzhi"=>6),
			"100"=>array("code"=>"104645","mianzhi"=>10),
			"200"=>array("code"=>"104645","mianzhi"=>15),
			"500"=>array("code"=>"104645","mianzhi"=>30)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("code"=>"104645","mianzhi"=>1),
			"10"=>array("code"=>"104645","mianzhi"=>2),
			"30"=>array("code"=>"104645","mianzhi"=>5),
			"50"=>array("code"=>"104645","mianzhi"=>7),
			"100"=>array("code"=>"104645","mianzhi"=>10),
			"200"=>array("code"=>"104645","mianzhi"=>15),
			"500"=>array("code"=>"104645","mianzhi"=>30),
			"1024"=>array("code"=>"104645","mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("code"=>"104645","mianzhi"=>3),
			"30"=>array("code"=>"104645","mianzhi"=>5),
			"70"=>array("code"=>"104645","mianzhi"=>10),
			"150"=>array("code"=>"104645","mianzhi"=>20),
			"500"=>array("code"=>"104645","mianzhi"=>30),
			"1024"=>array("code"=>"104645","mianzhi"=>50),
			"2048"=>array("code"=>"104645","mianzhi"=>70),
			"3072"=>array("code"=>"104645","mianzhi"=>100),
			"4096"=>array("code"=>"104645","mianzhi"=>130),
			"6144"=>array("code"=>"104645","mianzhi"=>180),
			"11264"=>array("code"=>"104645","mianzhi"=>280)
		);
		
		$kfmianzhi=0;//������ֵ
		$qita="";//��������
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
			$qita=trim($yidongtcarr[$liuliang]["code"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
			$qita=trim($liantongtcarr[$liuliang]["code"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
			$qita=trim($dianxintcarr[$liuliang]["code"]);
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//�۷ѽ��
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}

		$err="";
		$tongdaoid=24;
		$qitaarr=array();
		$qitaarr["code"]=$qita;
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,$qitaarr,$err);
		
		//��ȡͨ���ۺ�ë��
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//�۷ѽ��
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;



		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		
	
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		return true;
}





//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_25($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,25,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_26($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,26,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_27($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,27,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_28($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,28,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_29($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,29,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_30($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,30,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_31($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,31,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_32($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,32,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_33($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,33,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_34($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,34,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_35($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,35,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_36($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,36,$err);
}




//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_37($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,37,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_38($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,38,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_39($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,39,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_40($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,40,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_41($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,41,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_42($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,42,$err);
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_43($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,43,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_44($uid,$sjh,$liuliang,&$err){
		global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,44,$err);
}





//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_45($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,45,$err);
}





//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_46($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,46,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_47($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,47,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_48($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,48,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_49($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,49,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_50($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,50,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_51($uid,$sjh,$liuliang,&$err){
		global $con;
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("code"=>"29101089","mianzhi"=>3),
			"50"=>array("code"=>"29100633","mianzhi"=>6),
			"100"=>array("code"=>"29000508","mianzhi"=>10),
			"200"=>array("code"=>"29100634","mianzhi"=>15),
			"500"=>array("code"=>"29000509","mianzhi"=>30),
			"1024"=>array("code"=>"29000506","mianzhi"=>60)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//������ֵ
		$qita="";
		if(empty($sjhtype)){
			$err="ѡ���ײʹ���";
			return false;
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
			$qita=trim($liantongtcarr[$liuliang]["code"]);
		}else if($sjhtype==2){
				$err="ѡ���ײʹ���";
				return false;
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
	
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}
		
		
					

		$err="";
		$tongdaoid=51;
		
		//��ȡͨ���ۺ�ë��
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if($sjhtype!=1){
			$err="ͨ�����ʹ���";
			return false;
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
        
        $functionname=trim($tongdaoinfo["functionname"]); ##��Ӧͨ���������ͷ���
    	if(!function_exists($functionname)){
    		$err="��ȡͨ�����ͷ���ʧ��";
    		return false;
    	}
    
    	//��ȡ����ͨ��ά����Ϣ
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="ָ������ά����";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="ָ���Ŷ��ѹر�";
    			return false;
    	}

		
		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
        if(!$re){
            $err="�û����ÿ۳�ʧ�ܣ�";
            return FALSE;
        }
		
		$zt=1; ##ͨ��51Ĭ�ϳɹ�
		$istk=0;
		
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>0,
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"istk"=>$istk,
			"upzttime"=>time(),
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $err="��������ʧ��!";
            return false;
        }
        
        $a=sendliuliang($sjh,$liuliang,$tongdaoid,$qita,$err,$functionname);
        
        $inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=2;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."ͨ��{$tongdaoid}�ύʧ�� uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
        
		return true;
}



//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_52($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,52,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_53($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,53,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_54($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,54,$err);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_55($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,55,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_56($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,56,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_57($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,57,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_58($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,58,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_59($uid,$sjh,$liuliang,&$err){
	global $con;
		//��ͨ��ʧ��ʱֱ�����͹��������б�����δ������ʱ���͹�����ʶ�����
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),

			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//������ֵ
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//�۷ѽ��
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}
		
		
	
		
		//��ȡͨ���ۺ�ë��
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//�۷ѽ��
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

        $functionname=trim($tongdaoinfo["functionname"]); ##��Ӧͨ���������ͷ���
    	if(!function_exists($functionname)){
    		$err="��ȡͨ�����ͷ���ʧ��";
    		return false;
    	}
    
    	//��ȡ����ͨ��ά����Ϣ
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="ָ������ά����";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="ָ���Ŷ��ѹر�";
    			return false;
    	}

		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
        if(!$re){
            $msg    =   '�۳�����ʧ��!';
            return FALSE;
        }
		$zt=0;
		
	    $tongdaoid=59;
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>"",
			"apimsg"=>"",
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],

			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $msg    =   '���涩����Ϣʧ��!';
            return FALSE;
        }
		
		
		$tongdaoid=59;
		$err="";
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err, $functionname);
		
		$inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."ͨ��{$tongdaoid}�ύʧ�� uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		
		return true;
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_60($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,60,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_61($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,61,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_62($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,62,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_63($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,63,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_64($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,64,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_65($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,65,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_66($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,66,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_67($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,67,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_68($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,68,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_69($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,69,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_70($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,70,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_71($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,71,$err);
}

//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_72($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,72,$err);
}
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_73($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,73,$err);
}
function liuliang_tongdaoation_74($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,74,$err);
}
function liuliang_tongdaoation_75($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,75,$err);
}

function liuliang_tongdaoation_76($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,76,$err);
}
function liuliang_tongdaoation_77($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,77,$err);
}
function liuliang_tongdaoation_78($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,78,$err);
}

function liuliang_tongdaoation_79($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,79,$err);
}

function liuliang_tongdaoation_80($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,80,$err);
}
function liuliang_tongdaoation_81($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,81,$err);
}

function liuliang_tongdaoation_83($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,83);
}


//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_82($uid,$sjh,$liuliang,&$err,$tongdaoid=82){
	global $con;
    
		//��ͨ��ʧ��ʱֱ�����͹��������б�����δ������ʱ���͹�����ʶ�����
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);

		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
            "100"=>array("dxnum"=>300,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//������ֵ
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//�۷ѽ��
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}
	
		
		//��ȡͨ���ۺ�ë��
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//�۷ѽ��
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;

        $functionname=trim($tongdaoinfo["functionname"]); ##��Ӧͨ���������ͷ���
    	if(!function_exists($functionname)){
    		$err="��ȡͨ�����ͷ���ʧ��";
    		return false;
    	}
    
    	//��ȡ����ͨ��ά����Ϣ
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="ָ������ά����";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="ָ���Ŷ��ѹر�";
    			return false;
    	}

		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
        if(!$re){
            $msg    =   '�۳�����ʧ��!';
            return FALSE;
        }
		$zt=0;
		
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>"",
			"apimsg"=>"",
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],

			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $msg    =   '���涩����Ϣʧ��!';
            return FALSE;
        }

		$err="";
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err, $functionname);
		
		$inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."ͨ��{$tongdaoid}�ύʧ�� uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		
		return true;
}

function liuliang_tongdaoation_84($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,84);
}

function liuliang_tongdaoation_85($uid,$sjh,$liuliang,&$err){
	global $con;
		return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,85);
}

function liuliang_tongdaoation_86($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,86);
}
function liuliang_tongdaoation_87($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,87);
}
function liuliang_tongdaoation_88($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,88);
}
function liuliang_tongdaoation_89($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,89);
}
function liuliang_tongdaoation_90($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,90);
}
function liuliang_tongdaoation_91($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,91);
}
function liuliang_tongdaoation_92($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,92);
}
function liuliang_tongdaoation_93($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,93);
}
function liuliang_tongdaoation_94($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,94);
}
function liuliang_tongdaoation_95($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,95);
}
function liuliang_tongdaoation_96($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,96);
}
function liuliang_tongdaoation_97($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,97);
}
function liuliang_tongdaoation_98($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,98);
}
function liuliang_tongdaoation_99($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,99);
}
function liuliang_tongdaoation_100($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,100);
}
function liuliang_tongdaoation_101($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,101);
}
function liuliang_tongdaoation_102($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,102);
}
function liuliang_tongdaoation_103($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,103);
}
function liuliang_tongdaoation_104($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,104);
}
function liuliang_tongdaoation_105($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_82($uid,$sjh,$liuliang,$err,105);
}

function liuliang_tongdaoation_106($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,106);
}

function liuliang_tongdaoation_107($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,107);
}

function liuliang_tongdaoation_108($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,108);
}

function liuliang_tongdaoation_109($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,109);
}

function liuliang_tongdaoation_110($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,110);
}

function liuliang_tongdaoation_111($uid,$sjh,$liuliang,&$err){
  global $con;
  return liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$err,111);
}


/************ͨ��************/
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_ty($uid,$sjh,$liuliang,$tongdaoid,&$err){
	global $con;
		//�ж϶Է����͵��ֻ��Ź���
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		//������ͨ�ײ�
		$liuliang=intval($liuliang);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),

			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
		);
		$kfmianzhi=0;//������ֵ
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="ѡ���ײʹ���";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			$err="ѡ���ײʹ���";
			return false;
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//�۷ѽ��
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="���㣡";
			return false;
		}

		$err="";
		//��ȡͨ���ۺ�ë��
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//�۷ѽ��
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
        
        $functionname=trim($tongdaoinfo["functionname"]); ##��Ӧͨ���������ͷ���
    	if(!function_exists($functionname)){
    		$err="��ȡͨ�����ͷ���ʧ��";
    		return false;
    	}
    
    	//��ȡ����ͨ��ά����Ϣ
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="ָ������ά����";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="ָ���Ŷ��ѹر�";
    			return false;
    	}

		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����
        if(!$re){
            $err    =   '�۳�����ʧ�ܣ�';
            return FALSE;
        }
		$zt=0;
	
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>'',
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $err    =   '���涩����Ϣʧ��!';
            return FALSE;
        }
        
        $a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err,$functionname);
        
        $inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."ͨ��{$tongdaoid}�ύʧ�� uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		return true;
}



//�ӿڿ�ͨ����
function addliuliang_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,$ly){
	global $con;
		$liuliang=intval($liuliang);
		if(empty($sjh) || empty($liuliang)){
			die("-2");
		}

		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$dxnum=floatval($userinfo["dxnum"]);//���
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		$yidongzk=floatval($userinfo["yidongzk"]);//�ۿ�
		
		//�ж϶Է����͵��ֻ��Ź�����ʵ�ʹ����Ƿ���ͬ
		$hd=substr($sjh,0,4);
		$sjhgsd=getsjhdgs($hd);
		if($sjhtype==3){
			$sjhtype=$sjhgsd;
		}
		if($sjhgsd!=$sjhtype){
			die("-1");
		}
		$sjhinfo=getsjhinfo($sjh);
		//������ͨ�ײ�
		$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"300"=>array("dxnum"=>600,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1500,"mianzhi"=>60)
		);
		
		//��������ײ�
		$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),

			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
		);
		
		//�����ƶ�
		$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"300"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"700"=>array("dxnum"=>750,"mianzhi"=>40),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
			
			
		);
		$kfmianzhi=0;//������ֵ
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"ѡ���ײͲ����ڣ�",$ly);
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"ѡ���ײͲ����ڣ�",$ly);
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"ѡ���ײͲ����ڣ�",$ly);
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		if($kfmianzhi<=0){
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"ѡ���ײʹ���",$ly);
		}
		
		$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//�۷ѽ��
		if($sjhtype==1){
			$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//�۷ѽ��
		}
		
		//�жϽ��
		$userdxnum=$dxnum-$zongfeiyong;
		if($userdxnum<0){
			die("-3");
		}

		$tongdaoid=0;
		if((!empty($userinfo["lltdbdyd"])) || (!empty($userinfo["lltdbdlt"])) || (!empty($userinfo["lltdbddx"]))){
			if(empty($sjhtype)){
			//�����ƶ�
				$tongdaoid=$userinfo["lltdbdyd"];
			}elseif($sjhtype==1){
				//��ͨ����
				$tongdaoid=$userinfo["lltdbdlt"];
			}elseif($sjhtype==2){
				//���Ŵ���
				$tongdaoid=$userinfo["lltdbddx"];
			}
		}else{
		
			$sql="select * from `configdb` where configkey='liuliangtdyd'";
			if(empty($sjhtype)){
				//�����ƶ�
				$sql="select * from `configdb` where configkey='liuliangtdyd'";
			}elseif($sjhtype==1){
				//��ͨ����
				$sql="select * from `configdb` where configkey='liuliangtdlt'";
			}elseif($sjhtype==2){
				//���Ŵ���
				$sql="select * from `configdb` where configkey='liuliangtddx'";
			}
			$re=$con->query($sql);
			$tongdaoinfo=mysql_fetch_array($re);
			$tongdaoid=$tongdaoinfo["congigvalue"];//Ĭ��ͨ��id
		}
		


		if(empty($tongdaoid)){
			liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,"��ȡͨ��ʧ�ܣ�",$ly);
		}
		
		
		//�ж��Ƿ���ʡ��ͨ��
		if(empty($sjhtype)){
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
		
		
		
		
		
		$err="";
        
		//��ȡͨ���ۺ�ë��
		$sql="select * from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
        if(empty($tongdaoinfo)){
            $err="δ��ȡ��ͨ����Ϣ!";
    		return FALSE;
        }
        
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//�۷ѽ��
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
        
    	$functionname=trim($tongdaoinfo["functionname"]); ##��Ӧͨ���������ͷ���
    	if(!function_exists($functionname)){
    		$err="��ȡͨ�����ͷ���ʧ��";
    		return false;
    	}
    
    	//��ȡ����ͨ��ά����Ϣ
    	$nowtime=time();
    	$sql="select sheng,starttime,endtime  from `weihudqlist` where tongdaoid=".$tongdaoid." and starttime<".$nowtime." and  endtime>".$nowtime;
    	$re=$con->query($sql);
    	$shengs="";
    	while($row=mysql_fetch_array($re)){
    		$shengs.=$row["sheng"].",";
    	}
    	if(!empty($shengs)){
    		$sjhinfo=getsjhinfo($sjh);
    		$province=$sjhinfo["province"];
    		$bdllarr="";
    		$preg_ah="/".$province."/is";
    		if (preg_match($preg_ah,$shengs,$bdllarr)) {
    			$err="ָ������ά����";
    			return false;
    		}
    	}
    
    	$sjhhd=substr($sjh,0,3);
    	if(($sjhhd=="147") || ($sjhhd=="170")){
    			$err="ָ���Ŷ��ѹر�";
    			return false;
    	}
		
		
		//��ͨ�ɹ�
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//�����û����

		if(empty($re)){
			$aaa=date("Y-m-d H:i:s").":�۷�ʧ�ܣ� uid:".$uid." sjh:".$sjh.'sql:'.$sql.' '.mysql_error();
			csw("agentOrderPostError.log",$aaa);
            return FALSE;
		}

		$zt=0;
		
		
		$msg=$zongfeiyong."Ԫ����".$liuliang."M����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,

			"msgId"=>0,
			"apimsg"=>$err,
			"beizhu"=>$beizhu,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"ly"=>$ly,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $aaa=date("Y-m-d H:i:s")."�����涩����Ϣʧ�ܣ� uid:".$uid." sjh:".$sjh.' ��Ϣ:'.json_encode($inarr);
			csw("agentOrderPostError.log",$aaa);
            return FALSE;
        }
        
        if(isset($_POST['test'])){
            echo '���Գɹ�!';
            exit;
        }else{
            $a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err,$functionname);
        }
        
        
        $inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}

		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."ͨ��{$tongdaoid}�ύʧ�� uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		return $id;
}









//��ֵ����ͨ����
function addliuliang_km($kid,$sjh,$openid,&$err){
	global $con;
		if(empty($kid) || empty($sjh)){
			$err="ϵͳ�����쳣";
			return false;
		}


		
		$sql="select * from `ka_infos` where id=".$kid;
		$re=$con->query($sql);
		$kainfo=mysql_fetch_array($re);
		if(empty($kainfo)){
			$err="�����쳣";
			return false;
		}
		if(!empty($kainfo["zt"])){
			$err="�˿��ѱ�ʹ�ã�";
			return false;
		}
		
		
		$liuliang=$kainfo["liuliang"];
		$uid=$kainfo["uid"];
		
		$kfmianzhi=$kainfo["mianzhi"];
		$zongfeiyong=$kainfo["shje"];
		//�ж϶Է����͵��ֻ��Ź�����ʵ�ʹ����Ƿ���ͬ
		$sjhtype=$kainfo["sjhtype"];
		$hd=substr($sjh,0,4);
		$sjhgsd=getsjhdgs($hd);
	
		
		if($sjhgsd!=$sjhtype){
			$err="�ֻ�������Ӫ�̺Ϳ��ײͲ���!";
			return false;
		}
		$sjhinfo=getsjhinfo($sjh);
		
		$sql="select * from `user_daili` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		
		$tongdaoid=0;
		if((!empty($userinfo["lltdbdyd"])) || (!empty($userinfo["lltdbdlt"])) || (!empty($userinfo["lltdbddx"]))){
			if(empty($sjhtype)){
			//�����ƶ�
				$tongdaoid=$userinfo["lltdbdyd"];
			}elseif($sjhtype==1){
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
			$tongdaoid=$tongdaoinfo["congigvalue"];//Ĭ��ͨ��id
		}

		//�ж��Ƿ���ʡ��ͨ��

		if(empty($sjhtype)){
			$bdllarr="";//û��
			$province=$sjhinfo["province"];
			if(empty($province)){
				$province="û���������";
			}
			$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1";
			$re=$con->query($sql);
			while($row=mysql_fetch_array($re)){
				$sheng=$row["sheng"];
				if(($sheng=="�ӱ�") && ($liuliang>150)){
					continue;
				}
				
			
				$preg_ah="/".$sheng."/is";
				if (preg_match($preg_ah,$province,$bdllarr)) {
					$tongdaoid=$row["id"];
					break;
				}
			}
		}
		
		if(empty($tongdaoid)){
			$err="��ȡͨ��ʧ��!";
			return false;
		}
		
		$err="";
		$a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err);
		//��ȡͨ���ۺ�ë��
		$sql="select id,yidongzk,liantongzk,dianxinzk from `liuliangtongdaolist` where id=".$tongdaoid;
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tdyidongzk=floatval($tongdaoinfo["yidongzk"]);//�ƶ��ۿ�
		$tdliantongzk=floatval($tongdaoinfo["liantongzk"]);//�ۿ�
		$tddianxinzk=floatval($tongdaoinfo["dianxinzk"]);//�ۿ�
		
		$tdzongfeiyong=$kfmianzhi*$tdyidongzk*0.1;//ͨ���۷ѽ��
		if($sjhtype==1){
			$tdzongfeiyong=$kfmianzhi*$tdliantongzk*0.1;//�۷ѽ��
		}elseif($sjhtype==2){
			$tdzongfeiyong=$kfmianzhi*$tddianxinzk*0.1;//�۷ѽ��
		}
		$maoli=$zongfeiyong-$tdzongfeiyong;
		
		
		//��ͨ�ɹ�
		$zt=0;
		if(empty($a))
		{
			$zt=3;
		}
		$msg="��ֵ������".$liuliang."M����";
		$beizhu="���ܼ���";
		$ly=3;
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"beizhu"=>$beizhu,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			"tongdaoid"=>$tongdaoid,
			"ly"=>$ly,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
		
		//�ѿ����Ϊ����״̬
		$sql="UPDATE ka_infos set sjh='".$sjh."',zt=3,jihuotime=".time().",tid=".$id.",openid='".$openid."' where id=".$kid;
		$re=$con->query($sql);
		
		return $id;
}






//�ӿڿ�ͨ���� ��ͨ
function liuliangerr_server($uid,$sjh,$liuliang,$sjhtype,$beizhu,$errmsg,$ly){
	global $con;
	$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>0,
			"shje"=>0,
			"msg"=>$errmsg,
			
			"zt"=>2,
			"msgId"=>0,
			"apimsg"=>$errmsg,
			"beizhu"=>$beizhu,
			"ly"=>$ly,

			"createtime"=>time()
	);
    $aaa=date("Y-m-d H:i:s").":������Ϣ���� uid:".$uid." sjh:".$sjh.' ��Ϣ:'.$errmsg;
	csw("agentOrderPostError.log",$aaa);
	//$id=$con->insertabe("liuliangdaili_log",$inarr);
	die("0");
}