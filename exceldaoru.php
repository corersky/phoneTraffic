<?
ignore_user_abort();//�Ͽ����������ִ��
require_once("common.php");
include_once("PHPExcel/PHPExcel.php"); //����PHP-ExcelReader 
$con=new MySql();
if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
	die("<script>alert('�����µ�¼!');window.parent.location.href='".XZKJURL."/index.php';</script>");
}
$userid=$_SESSION["uid"];
//����
$filePath="./excelfile/".$_FILES['fileField']['name'];
if(substr($filePath,-3)!="xls"){
		die("<script>alert('���ϴ�excel�ļ�!');</script>");
}
if(!move_uploaded_file($_FILES['fileField']['tmp_name'],$filePath)){
	    die("<script>alert('�ϴ��ļ�ʧ��!');</script>");
}

$PHPExcel = new PHPExcel();

/**Ĭ����excel2007��ȡexcel������ʽ���ԣ�����֮ǰ�İ汾���ж�ȡ*/
$PHPReader = new PHPExcel_Reader_Excel2007();
if(!$PHPReader->canRead($filePath)){
	$PHPReader = new PHPExcel_Reader_Excel5();
	if(!$PHPReader->canRead($filePath)){
		die("<script>alert('��ȡ�ļ�ʧ�ܣ����ϴ�excel�ļ�!');</script>");
	}
}

$PHPExcel = $PHPReader->load($filePath);
/**��ȡexcel�ļ��еĵ�һ��������*/
$currentSheet = $PHPExcel->getSheet(0);
/**ȡ�������к�*/
//$allColumn = $currentSheet->getHighestColumn();
/**ȡ��һ���ж�����*/
$allRow = $currentSheet->getHighestRow();
/**�ӵڶ��п�ʼ�������Ϊexcel���е�һ��Ϊ����*/

$userarr=array();
for($currentRow = 2;$currentRow <= $allRow;$currentRow++){
	$sjh = $currentSheet->getCellByColumnAndRow(0,$currentRow)->getValue();//��ȡ��1���ֶ�
	$name = $currentSheet->getCellByColumnAndRow(1,$currentRow)->getValue();//��ȡ��2���ֶ�
	if(!empty($sjh)){
		$name =iconv("UTF-8","GBK//IGNORE",$name);
		$row=array(
			"sjh"=>$sjh,
			"name"=>$name
		);
		$userarr[]=$row;
	}
	
}


//�û��ֻ������
$con->query("BEGIN");
foreach($userarr as $value){
	$inarr=array(
		"zuid"=>0,
		"uid"=>$userid,
		"sjh"=>$value["sjh"],
		"xm"=>$value["name"]
	);
	$con->insertabe("txluser",$inarr);
}
$con->query("COMMIT");

die("<script>alert('����ɹ�!');window.parent.location.href=window.parent.location.href;</script>");
?>