<?php
require_once("../common.php");
/* *
 * ���ܣ�֧�����������첽֪ͨҳ��
 * �汾��3.3
 * ���ڣ�2012-07-23
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���


 *************************ҳ�湦��˵��*************************
 * ������ҳ���ļ�ʱ�������ĸ�ҳ���ļ������κ�HTML���뼰�ո�
 * ��ҳ�治���ڱ������Բ��ԣ��뵽�������������ԡ���ȷ���ⲿ���Է��ʸ�ҳ�档
 * ��ҳ����Թ�����ʹ��д�ı�����logResult���ú����ѱ�Ĭ�Ϲرգ���alipay_notify_class.php�еĺ���verifyNotify
 * ���û���յ���ҳ�淵�ص� success ��Ϣ��֧��������24Сʱ�ڰ�һ����ʱ������ط�֪ͨ
 */

require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");

$con=new MySql();

//����ó�֪ͨ��֤���
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();

if($verify_result) {//��֤�ɹ�
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//������������̻���ҵ���߼������

	
	//�������������ҵ���߼�����д�������´�������ο�������
	
    //��ȡ֧������֪ͨ���ز������ɲο������ĵ��з������첽֪ͨ�����б�
	
	//�̻�������
	$out_trade_no = $_POST['out_trade_no'];
	//֧�������׺�
	$trade_no = $_POST['trade_no'];
	//����״̬
	$trade_status = $_POST['trade_status'];


    if($_POST['trade_status'] == 'TRADE_FINISHED') {
		//�жϸñʶ����Ƿ����̻���վ���Ѿ���������
			//���û�������������ݶ����ţ�out_trade_no�����̻���վ�Ķ���ϵͳ�в鵽�ñʶ�������ϸ����ִ���̻���ҵ�����
			//���������������ִ���̻���ҵ�����
				
		//ע�⣺
		//���ֽ���״ֻ̬����������³���
		//1����ͨ����ͨ��ʱ���ˣ���Ҹ���ɹ���
		//2����ͨ�˸߼���ʱ���ˣ��Ӹñʽ��׳ɹ�ʱ�����𣬹���ǩԼʱ�Ŀ��˿�ʱ�ޣ��磺���������ڿ��˿һ�����ڿ��˿�ȣ���

        //�����ã�д�ı�������¼������������Ƿ�����
        //logResult("����д����Ҫ���ԵĴ������ֵ�����������еĽ����¼");
		$sql="select * from `chongzhidaililog` where tid=".$out_trade_no;
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		if(!empty($row)){
		 	    $zt=intval($row["zt"]);
				$jine=floatval($row["jine"]);
				if($zt==0){
					$con->query("BEGIN");
					$sql="UPDATE user_daili set dxnum=dxnum+".$jine." where id=".$row["uid"];
					$re=$con->query($sql);
					$sql="UPDATE `chongzhidaililog` set zt=1 where tid=".$out_trade_no;
					$re=$con->query($sql);
					$con->query("COMMIT");
				}
		}
	
    }
    else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
		//�жϸñʶ����Ƿ����̻���վ���Ѿ���������
			//���û�������������ݶ����ţ�out_trade_no�����̻���վ�Ķ���ϵͳ�в鵽�ñʶ�������ϸ����ִ���̻���ҵ�����
			//���������������ִ���̻���ҵ�����
				
		//ע�⣺
		//���ֽ���״ֻ̬��һ������³��֡�����ͨ�˸߼���ʱ���ˣ���Ҹ���ɹ���

        //�����ã�д�ı�������¼������������Ƿ�����
        //logResult("����д����Ҫ���ԵĴ������ֵ�����������еĽ����¼");
		$sql="select * from `chongzhidaililog` where tid=".$out_trade_no;
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		if(!empty($row)){
		 	    $zt=intval($row["zt"]);
				$jine=floatval($row["jine"]);
				if($zt==0){
					$con->query("BEGIN");
					$sql="UPDATE user_daili set dxnum=dxnum+".$jine." where id=".$row["uid"];
					$re=$con->query($sql);
					$sql="UPDATE `chongzhidaililog` set zt=1 where tid=".$out_trade_no;
					$re=$con->query($sql);
					$con->query("COMMIT");
				}
		}
		
    }

	//�������������ҵ���߼�����д�������ϴ�������ο�������
        
	echo "success";		//�벻Ҫ�޸Ļ�ɾ��
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //��֤ʧ��
    echo "fail";

    //�����ã�д�ı�������¼������������Ƿ�����
    //logResult("����д����Ҫ���ԵĴ������ֵ�����������еĽ����¼");
}
?>