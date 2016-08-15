<?
ignore_user_abort();//断开浏览器继续执行
require_once("common.php");
include_once("PHPExcel/PHPExcel.php"); //引入PHP-ExcelReader 
$con=new MySql();
if(empty($_SESSION["uid"]) || empty($_SESSION["username"])){
	die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
}
$userid=$_SESSION["uid"];
//导入
$filePath="./excelfile/".$_FILES['fileField']['name'];
if(substr($filePath,-3)!="xls"){
		die("<script>alert('请上传excel文件!');</script>");
}
if(!move_uploaded_file($_FILES['fileField']['tmp_name'],$filePath)){
	    die("<script>alert('上次文件失败!');</script>");
}

$PHPExcel = new PHPExcel();

/**默认用excel2007读取excel，若格式不对，则用之前的版本进行读取*/
$PHPReader = new PHPExcel_Reader_Excel2007();
if(!$PHPReader->canRead($filePath)){
	$PHPReader = new PHPExcel_Reader_Excel5();
	if(!$PHPReader->canRead($filePath)){
		die("<script>alert('读取文件失败，请上传excel文件!');</script>");
	}
}

$PHPExcel = $PHPReader->load($filePath);
/**读取excel文件中的第一个工作表*/
$currentSheet = $PHPExcel->getSheet(0);
/**取得最大的列号*/
//$allColumn = $currentSheet->getHighestColumn();
/**取得一共有多少行*/
$allRow = $currentSheet->getHighestRow();
/**从第二行开始输出，因为excel表中第一行为列名*/

$userarr=array();
for($currentRow = 2;$currentRow <= $allRow;$currentRow++){
	$sjh = $currentSheet->getCellByColumnAndRow(0,$currentRow)->getValue();//读取第1个字段
	$name = $currentSheet->getCellByColumnAndRow(1,$currentRow)->getValue();//读取第2个字段
	if(!empty($sjh)){
		$name =iconv("UTF-8","GBK//IGNORE",$name);
		$row=array(
			"sjh"=>$sjh,
			"name"=>$name
		);
		$userarr[]=$row;
	}
	
}


//用户手机号入库
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

die("<script>alert('导入成功!');window.parent.location.href=window.parent.location.href;</script>");
?>