<?php
//ͨ��������� �������û�id,�ֻ��ţ�����
//���ͳɹ�����true ʧ�� false 
function liuliang_tongdaoation_1($uid,$sjh,$liuliang,&$err){
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
		
		$yidongzk=floatval($userinfo["yidongzk"]);//�ƶ��ۿ�
		$liantongzk=floatval($userinfo["liantongzk"]);//�ۿ�
		$dianxinzk=floatval($userinfo["dianxinzk"]);//�ۿ�
		
		$sjhinfo=getsjhinfo($sjh);
		
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
		
		$liuliangbuf="".$liuliang."M";
		
		$err="";
		$tongdaoid=1;
		$a=sendliuliang($sjh,$liuliangbuf,$tongdaoid,"",$err);
		
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
		$msg=$zongfeiyong."Ԫ����".$liuliangbuf."����";
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
function liuliang_tongdaoation_2($uid,$sjh,$liuliang,&$err){
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
		$tongdaoid=2;
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
function liuliang_tongdaoation_3($uid,$sjh,$liuliang,&$err){
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
		$tongdaoid=3;
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
	$id=$con->insertabe("liuliangdaili_log",$inarr);
	die("0");
}