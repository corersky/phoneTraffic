<?php
//mobile:Ҫ��ͨ���ֻ��� orderMmount ���� ���� 30M  effectiveDate ��Чʱ�� Ĭ��0������Ч 1������Ч
function ordermount_yidong($mobile,$orderMmount,$effectiveDate,&$err){
	$timeStamp=date("YmdHis");
	$msgId="".$timeStamp.rand(100,999);//�Զ�����Ϣid
	$userId="ws0002";//�û�id
	$userPwd="8789wh";//����
	$serviceCode="yd";//ҵ�����
	$userPwd=md5($userPwd."|".$timeStamp);
	
	

$SoapRequest="timeStamp=".$timeStamp."&userId=".$userId."&userPwd=".$userPwd."&mobile=".$mobile."&orderMmount=".$orderMmount."&orderTime=1&serviceCode=".$serviceCode."&msgId=".$msgId."&effectiveDate=".$effectiveDate."&extend=";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://flow.hbsmservice.com:8080/flow_interface/cClientFlowOrderMountInfo.do");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	$json=json_decode($result,true);
	$code=$json["code"];
	if($code=="0000"){
		$err="";
		return $json["msgId"];
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	return false;
}

//Ҫ��ѯ�Ķ�����¼ msgId���Զ�����Ϣid restr�����������ص�״̬
function getordermountzt_yidong($msgId,&$err){
	global $con;
	$timeStamp=date("YmdHis");
	$userId="ws0002";//�û�id
	$userPwd="8789wh";//����
	$userPwd=md5($userPwd."|".$timeStamp);
	
	$SoapRequest="timeStamp=".$timeStamp."&userId=".$userId."&userPwd=".$userPwd."&msgId=".$msgId."&extend=";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://flow.hbsmservice.com:8080/flow_interface/cClientGetReportInfoByMsgId.do");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	$restr=$result;
	
	$json=json_decode($result,true);
	//echo "<pre>";
	//print_r($json);

	$remsgId="";
	$err="";
	if(is_array($json["result"])){
		$remsgId=$json["result"][0]["msgId"];
		$err=intval($json["result"][0]["err"]);
	}
	
	$isdaili=0;//�Ƿ��Ǵ����� 0���� 1��	
	$tablename="liuliang_log";
	$time=time()-60*60*24*14;

	$sql="select * from `liuliang_log` where msgId='".$msgId."' and createtime>".$time;
	$re=$con->query($sql);
	$rw=mysql_fetch_array($re);
	if(empty($rw)){
		$isdaili=1;
		$tablename="liuliangdaili_log";
	}
		
	if(($remsgId==$msgId) && empty($err)){
		$sql="UPDATE ".$tablename." SET zt=1,apimsg='' where msgId='".$msgId."' and createtime>".$time;
		$con->query($sql);
		return true;
	}
	
	if(($remsgId==$msgId) && (!empty($err))){
		$sql="UPDATE ".$tablename." SET zt=2,apimsg='�ӿڷ���ʧ��:".$err."' where msgId='".$msgId."' and createtime>".$time;
		$con->query($sql);
		if(empty($isdaili)){
			liuliang_fanhuandxnum($msgId);
		}else{
			liuliang_fanhuandxnum_daili($msgId);
		}
		
		return true;
	}
	return false;
}


//mobile:Ҫ��ͨ���ֻ��� package ���� ���� 30  range 0 ȫ������ 1ʡ������
function ordermount_liantong($mobile,$package,$range=0,&$err){
	$action="charge";
	$v="1.1";
	$account="���пƼ�";//�˺�
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//ǩ��
	$key="15be05a4b87f4f4d9486f87609495372";//��Կ
	
	$p="account=".$account."&mobile=".$mobile."&package=".$package."&key=".$key;
	$sign=md5($p);
	$SoapRequest="account=".urlencode($account)."&action=".$action."&mobile=".$mobile."&package=".$package."&range=".$range."&v=".$v."&sign=".$sign;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://121.40.211.78:8083/api.aspx");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	$json=json_decode($result,true);
	$code=trim($json["Code"]);
	$TaskID=trim($json["TaskID"]);
	if(($code=="0") && !empty($TaskID)){
		$err="";
		return $TaskID;
	}
	$result=iconv("UTF-8","GBK//IGNORE",$result);
	$err=$result;
	return false;
}

//Ҫ��ѯ�Ķ�����¼ msgId���Զ�����Ϣid restr�����������ص�״̬
function getordermountzt_liantong(){
	global $con;
	$action="getReports";
	$v="1.1";
	$count=50;
	$account="���пƼ�";//�˺�
	$account=iconv("GBK","UTF-8//IGNORE",$account);
	$sign="";//ǩ��
	$key="15be05a4b87f4f4d9486f87609495372";//��Կ
	
	$p="account=".$account."&count=".$count."&key=".$key;
	$sign=md5($p);
	$SoapRequest="account=".urlencode($account)."&action=".$action."&count=".$count."&v=".$v."&sign=".$sign;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://121.40.211.78:8083/api.aspx");




	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	//var_dump($result);
	
	//$result='{"Code":"0","Message":"OK","Reports":[{"TaskID":69,"Mobile":"18501254686","Status":4,"ReportTime":"2015-08-10 17:40:24","ReportCode":"0000"}]}';	
//var_dump($result);
	curl_close($ch);
	$json=json_decode($result,true);
//cs($json);
	if(!is_array($json["Reports"])){
		return false;
		
	}
	$time=time()-60*60*24*14;
	
	$arr=$json["Reports"];
	foreach($arr as $value){
		$TaskID=trim($value["TaskID"]);
		$Status=intval($value["Status"]);
		
		$sql="select * from `liuliang_log` where msgId='".$TaskID."' and createtime>".$time;
		$re=$con->query($sql);
		$rw=mysql_fetch_array($re);
		if(!empty($rw)){
			//����һ���û�
			if($Status==4){
				$sql="UPDATE liuliang_log SET zt=1,apimsg='' where msgId='".$TaskID."' and createtime>".$time;
				$con->query($sql);
			}else if($Status==5){
				$sql="UPDATE liuliang_log SET zt=2,apimsg='�ӿڷ���ʧ��:".$value['ReportCode']."' where msgId='".$TaskID."' and createtime>".$time;
				$con->query($sql);
				
				liuliang_fanhuandxnum($TaskID);
			}
		}else{
			//���������
			if($Status==4){
			$sql="UPDATE liuliangdaili_log SET zt=1,apimsg='' where msgId='".$TaskID."' and createtime>".$time;
			$con->query($sql);
			}else if($Status==5){
				$sql="UPDATE liuliangdaili_log SET zt=2,apimsg='�ӿڷ���ʧ��:".$value['ReportCode']."' where msgId='".$TaskID."' and createtime>".$time;
				$con->query($sql);
				
				liuliang_fanhuandxnum_daili($TaskID);
			}
		
		}
	}//END foreach
}




//��ͨ���� �ƶ�
function addliuliang_yidong($uid,$sjh,$liuliang){
	global $con;
		$liuliang=intval($liuliang);
		$sql="select * from `user` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
		if($jiage<=0){
			liuliangerr("�û���Ϣ����");
		}
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
		if(empty($yidongtcarr[$liuliang])){
			liuliangerr("ѡ���ײͲ����ڣ�");
		}
		$kfdxnum=intval($yidongtcarr[$liuliang]["dxnum"]);
		$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		if($kfdxnum<=0){
			liuliangerr("ѡ���ײʹ���");
		}
		$zongfeiyong=$kfdxnum*$jiage;//�۷ѽ��
		//�жϽ��
		$userdxnum=floatval($userinfo["dxnum"]);
		$userdxnum=$userdxnum-$zongfeiyong;
		if($userdxnum<0){
			liuliangerr("���㣡");
		}
		$liuliangbuf="".$liuliang."M";
		$err="";
		$a=ordermount_yidong($sjh,$liuliangbuf,0,$err);

		$zt=0;
		if(!empty($a)){
			//��ͨ�ɹ�
			$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
			$re=$con->query($sql);//�����û����
		}else{
			$zt=2;
		}
		$msg=$kfdxnum."�����Ŷһ�".$liuliangbuf."����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>0,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>$kfdxnum,
	
			"mianzhi"=>$kfmianzhi,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliang_log",$inarr);
		return true;
}




//��ͨ���� ��ͨ
function addliuliang_liantong($uid,$sjh,$liuliang,$sjhtype){
	global $con;
		$liuliang=intval($liuliang);
		
		$sql="select * from `user` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$jiage=floatval($userinfo["jiage"]);//ÿ�����ŵļ۸�
		if($jiage<=0){
			liuliangerr("�û���Ϣ����");
		}
		
		/*
		//������ͨ�ײ�
		$liantongtcarr=array(
			"10"=>array("dxnum"=>50,"mianzhi"=>3),
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>5),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
		);*/
		
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
		$kfdxnum=0;
		$kfmianzhi=0;
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				liuliangerr("ѡ���ײͲ����ڣ�");
			}
			$kfdxnum=intval($yidongtcarr[$liuliang]["dxnum"]);
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				liuliangerr("ѡ���ײͲ����ڣ�");
			}
			$kfdxnum=intval($liantongtcarr[$liuliang]["dxnum"]);
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				liuliangerr("ѡ���ײͲ����ڣ�");
			}
			$kfdxnum=intval($dianxintcarr[$liuliang]["dxnum"]);
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
		}
		
		
		
		
		if($kfdxnum<=0){
			liuliangerr("ѡ���ײʹ���");
		}
		$zongfeiyong=$kfdxnum*$jiage;//�۷ѽ��
		//�жϽ��
		$userdxnum=floatval($userinfo["dxnum"]);
		$userdxnum=$userdxnum-$zongfeiyong;
		if($userdxnum<0){
			liuliangerr("���㣡");
		}

		$err="";
		$a=ordermount_liantong($sjh,$liuliang,0,$err);

		$zt=0;
		if(!empty($a)){
			//��ͨ�ɹ�
			$sql="UPDATE user set dxnum=".$userdxnum." where id=".$uid;
			$re=$con->query($sql);//�����û����
		}else{
			$zt=2;
		}
		$msg=$kfdxnum."�����Ŷһ�".$liuliang."����";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>$kfdxnum,
	
			"mianzhi"=>$kfmianzhi,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>$a,
			"apimsg"=>$err,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliang_log",$inarr);
		return true;
}




function liuliang_fanhuandxnum($tid){
	global $con;
	$time=time()-60*60*24*15;
	$sql="select * from `liuliang_log` where msgId='".$tid."' and createtime>".$time;
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$uid=$orderinfo["uid"];
	$dxnum=intval($orderinfo["dxnum"]);
	if(empty($uid) && ($dxnum<=0)){
		return false;
	}
	//��������
	userdxchongzhi_dxnum($uid,$dxnum);
	
	$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	csw("liuliangerr.log",$str);
	
}



function liuliang_fanhuandxnum_daili($tid){
	global $con;
	$time=time()-60*60*24*15;
	$sql="select * from `liuliangdaili_log` where msgId='".$tid."' and createtime>".$time;
	$re=$con->query($sql);
	$orderinfo=mysql_fetch_array($re);
	$uid=$orderinfo["uid"];
	
	$shje=floatval($orderinfo["shje"]);
	if(empty($uid) && ($shje<=0)){
		return false;
	}
	//�������
	$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$uid;
	$re=$con->query($sql);//�����û����
	
	
	$str=date("Y-m-d H:i:s")."uid:".$uid." dxnum:".$dxnum."\n";
	csw("liuliangerr.log",$str);
	
}


?>