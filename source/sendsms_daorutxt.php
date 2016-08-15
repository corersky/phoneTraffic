<?
if(!empty($_FILES['fileField']['name'])){
	//导入
	$filePath="./excelfile/".$_FILES['fileField']['name'];
	if(substr($filePath,-3)!="txt"){
			die("<script>alert('请上传txt文件!');window.parent.frames.setsendsmssjh('','span_daorutxt');</script>");
	}
	if(!move_uploaded_file($_FILES['fileField']['tmp_name'],$filePath)){
			die("<script>alert('上次文件失败!');window.parent.frames.setsendsmssjh('','span_daorutxt');</script>");
	}
	
	$handle = fopen($filePath, "r");
	$contents = fread($handle, filesize ($filePath));
	fclose($handle);

	$pieces = explode("\n", $contents);
	$pieces= preg_split('/\n|,| /', $contents, -1, PREG_SPLIT_NO_EMPTY);
	
	$txlarr=array();
	foreach($pieces as $value){
		$sjh=trim($value);
		if(strlen($sjh)==11){
			$txlarr[]=$sjh;
		}
	}

	$sjhs = implode(",", $txlarr);
	die("<script>window.parent.frames.setsendsmssjh('".$sjhs."','span_daorutxt');</script>");
	

}


include template('sendsms_daorutxt');
?>