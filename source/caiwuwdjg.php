<?

//��ȡ�ҵ��ײ�
$sql="select * from `taocanlist` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$mytcmsg="";
while($row=mysql_fetch_array($re)){
	if(($row["ayfanhuanjine"]>0) && ($row["yffyueshu"]<$row["yueshu"])){
		$t=date("t",$row["createtime"]);
		$d=date("d",$row["createtime"]);
		$time=$row["createtime"]+(($t-$d+2)*60*60*24);
		$time=date("Y��m��",$time);
		$mytcmsg.="��̯����:".$row["ayfanhuanjine"]."Ԫ����̯".$row["yueshu"]."���£�ÿ�·���".$row["myfhje"]."Ԫ������".$time."��ʼ������ÿ��һ�ŷ�������";
	}
	if($row["myzdxfjine"]>0){
		$mytcmsg.="���������:".$row["myzdxfjine"]."Ԫ";
	}
}
if(empty($mytcmsg)){
	$mytcmsg="��";
}
	
	
//��ȡ�ҵ��Ż���Ϣ
$myyouhuimsg=getmyyouhuimsg($_SESSION["uid"]);

include template('caiwuwdjg');


//��ȡ�ҵ��Ż���Ϣ
function getmyyouhuimsg($uid){
global $con;
	//��ȡ�ۼƳ�ֵ���
	$zjine=getusercznum($uid);
	
	// ƽ���³�ֵ���
	$sql="select id,createtime,jiage from `user` where id=".$uid;
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$createtime=intval($row["createtime"]);
	$jiage=floatval($row["jiage"]);
	$zctimem=ceil((time()-$createtime)/(60*60*24*30));
	$pjyxfjine=$zjine/$zctimem;//ƽ���³�ֵ���
	
	
	
	//�Ż���Ϣ
	$sql="select * from `youhuimsg`";
	$re=$con->query($sql);
	$youhuiarr=array();
	while($row=mysql_fetch_array($re)){
		$youhuiarr[]=$row;
	}
	
	//�о����п����û�������������
	//$zjine; �ۼƳ�ֵ���
	//$jiage; �û�����
	//$createtime;�û�ע��ʱ��
	//$zctimem;ע���·�
	//$pjyxfjine;ƽ����ֵ���
	
	$reyouhuimsgarr=array();//�����Ż���Ϣ
	$reyouhuimsglinshiarr=array();//��ʱ�Ż���Ϣ
	foreach($youhuiarr as $value){
		if(empty($value["tjtype"])){
			$tj1=floatval($value["tj1"]);
			$tj2=floatval($value["tj2"]);
			$tj3=floatval($value["tj3"]);
			if(($zjine>$tj1) && ($zjine<=$tj2) && ($jiage>$tj3)){
				$msg=trim($value["msg"]);
				$msg=preg_replace("/���ۼƳ�ֵ��/","".$zjine." Ԫ",$msg);
				
				$reyouhuimsgarr[]=$msg;
			}
		}else{
			$tj1=floatval($value["tj1"]);
			$tj2=floatval($value["tj2"]);
			$tj3=floatval($value["tj3"]);
			$tj4=floatval($value["tj4"]);
			if(($zctimem>$tj1) && ($zctimem<=$tj2) && ($pjyxfjine>$tj3) && ($pjyxfjine<=$tj4)){
				$msg=trim($value["msg"]);
				$reyouhuimsglinshiarr[]=$msg;
			}
		}
	}
	
	if(!empty($reyouhuimsglinshiarr)){
		return $reyouhuimsglinshiarr[0];
	}
	return $reyouhuimsgarr[0];
	
}
?>