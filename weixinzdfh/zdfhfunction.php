<?php 
//΢���Զ�����
//$orderinfo ������Ϣ
function weixinzdfh($orderinfo,$session){
global $con;
	$receiver_tel=$orderinfo["receiver_tel"];//�ջ����ֻ���
	$remark=$orderinfo["remark"];//����
	$real_amount=floatval($orderinfo["real_amount"]);//ʵ�����
	$open_id=$orderinfo["open_id"];//��˿Ψһ���
	$tid=$orderinfo["order_no"];

	$czsjh=getbuyer_messageinsjh($remark);//Ҫ��ֵ���ֻ���
	if(empty($czsjh)){
		$czsjh=$receiver_tel;
	}

	//��ȡ���л��Ʒ
	$sql="select * from `items`";
	$re=$con->query($sql);
	$itemlistarr=array();
	while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
		$itemlistarr[$row["itemid"]]=$row;
	}
	
	foreach($orderinfo["order_details"] as $value){
			if(empty($itemlistarr[$value["spu_code"]])){
				continue;	
			}
			$liuliang=$itemlistarr[$value["spu_code"]]['liuliang'];
			$sjhtype=$itemlistarr[$value["spu_code"]]['lltype'];
			liuliangsend($open_id,$czsjh,$tid,$liuliang,$sjhtype,$session,$real_amount);
	}
}


//��ȡ�����е��ֻ��� �Ϸ������ֻ��� �Ƿ�����false
function getbuyer_messageinsjh($nei){
	//ȥ����������� �ո� б��
	$nei =preg_replace("/\s|\\\\|\/|\-/is","",$nei);
	//ȫ�ǹ���
	$qian=array("��","��","��","��","��","��","��","��","��","��");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);
	//���Ĺ��� 1
	$qian=array("һ","��","��","��","��","��","��","��","��","��");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);    

	//���Ĺ��� 2
	$qian=array("��","��","��","��","��","��","��","��","��","��");
	$hou=array("1","2","3","4","5","6","7","8","9","0");
	$nei =str_replace($qian,$hou,$nei);
	

	$sjh=preg_replace("/(.*?)(1\d{10})(.*)/is","\\2",$nei);
	if(is_numeric($sjh) && (strlen($sjh)==11)){
		return $sjh;
	}
	return false;     
}

/*****
������ֵ
$sjh,Ҫ��ֵ���ֻ���
$tid,�������
$buyer_nick,����ǳ�
$itemid,��Ʒid
$liuliang,����
$sjhtype,Ҫ��ֵ���ֻ�������
$apizh,�ӿ��˺�
$apipwd �ӿ�����
*******/
function liuliangsend($open_id,$sjh,$tid,$liuliang,$sjhtype,$session,$ddje=0){
	global $con;
	
	$liuliang=intval($liuliang);
	$taskid=liuliangchongzhisend($sjh,$sjhtype,$liuliang,$tid,$open_id);
	$taskid=intval($taskid);
	
	$insql=array(
	    'tid' => $tid,
		'open_id' => $open_id,
		'lltype' => $sjhtype,
		'liuliang' => $liuliang,
		'zt' => 0,
		'taskid' => $taskid,
		'sjh' => $sjh,
		'ddje' => $ddje,
		'createtime'=>time(),
		'beizhu' => ""
	   );
	 
	$logid=$con->insertabe("orderlog",$insql);
	
	if($taskid>0){
		//$a=taobao_logistics_dummy_send($session,$tid);
		logisticsDelivery($session,$tid);
		$nei="������������ײͣ�ϵͳ���ڳ�ֵ�У�����48Сʱδ��Ч���������˿�����������ѯ΢�źţ�18037507065��������ֵ��";
		sendliuliangoksmsmsg($sjh,$nei);
	}
	//cs($a);

}


//���ó�ֵ�ӿ� �ɹ����ش���0�Ķ������
/******
-2 ϵͳ��������
-3 ����
-1 �ײ���ʵ�ʹ����ز�ͬ
0��������

$apizh,�ӿ��˺�
$apipwd �ӿ�����
$sjh,Ҫ��ֵ���ֻ���
$sjhtype,Ҫ��ֵ���ֻ�������
$liuliang,����
$tid,�������
$buyer_nick,����ǳ�
******/
function liuliangchongzhisend($sjh,$sjhtype,$liuliang,$tid,$buyer_nick){
	$apizh="xzkj";
	$apipwd="xzkj168zhangqian";
	$beizhu="".$tid.":".$buyer_nick;
	$SoapRequest="sjh=".$sjh."&liuliang=".$liuliang."&sjhtype=".$sjhtype."&apizh=".$apizh."&apipwd=".$apipwd."&beizhu=".$beizhu."&ly=2";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://duanxin.xzkj168.cn/agent/liuliangserver.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	//var_dump($result);
	return $result; 
}
//���Ͷ���
function sendliuliangoksmsmsg($sjh,$nei){
	$SoapRequest="username=΢�˺�̨ר��&pwd=123123&mobile=".$sjh."&content=".$nei;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://duanxin.xzkj168.cn/server/sendsms.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $SoapRequest);
	$result=curl_exec($ch);
	curl_close($ch);
	var_dump($result);
	return $result; 

}
?>
