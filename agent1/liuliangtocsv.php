<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	header("Content-Type: application/vnd.ms-excel; charset=GB2312");
	header("Content-Disposition: attachment;filename=xzkj168data.csv");
	require_once("common.php");
	$con=new MySql();
	
	$wherestr=" and ly!=3";
	$sjh=trim($_GET["sjh"]);
	$zt=intval($_GET["zt"]);
	$starttime=trim($_GET["starttime"]);
	$endtime=trim($_GET["endtime"]);
	$uid=$_SESSION["dl_uid"];
	if(empty($uid)){
		die("error!");
	}
	
	if(!empty($sjh)){
		$wherestr.=" and sjh='".$sjh."'";
	}
	
	
	if(!empty($zt)){
		$ztbuf=$zt-1;
		$wherestr.=" and zt=".$ztbuf;
		
	}
	
	
	if(empty($starttime)){
		$starttime=date("Y-m-d",(time()-60*60*24*10));
	}
	
	$starttimebuf=strtotime($starttime);
	$wherestr.=" and createtime>".$starttimebuf;
	
	
	if(empty($endtime)){
		$endtime=date("Y-m-d");
	}
	
	$endtimebuf=strtotime($endtime);
	$endtimebuf+=60*60*24;
	$wherestr.=" and createtime<".$endtimebuf;
	
	
	$llczztarr=array("0"=>"��ֵ��","1"=>"��ֵ�ɹ�","2"=>"��ֵʧ��","3"=>"�ȴ���ֵ");
	
	


	$yysarr=array("0"=>"�ƶ�","1"=>"��ͨ","2"=>"����");
	$ztarr=array("0"=>"�ύ�ɹ�","1"=>"��ֵ�ɹ�","2"=>"��ֵʧ��","3"=>"�ύ�ɹ�");

$sql="select * from `liuliangdaili_log` where uid=".$uid.$wherestr." ORDER BY id ASC";
$re=$con->query($sql);
$arr=array();
$r=array(
		"sjh"=>"��ֵ����",
		"province"=>"������",
		"liuliang"=>"��ֵ����",
		"createtime"=>"��ֵʱ��",
		"zt"=>"��ֵ״̬",
		"shje"=>"���Ľ��",
		"kkzt"=>"�ۿ�״̬",
		"beizhu"=>"��ע"
);
$arr[]=$r;
	
while($row=mysql_fetch_array($re)){
	$ll=$row["liuliang"]."M";
	if($row["liuliang"]>=1024){
		$ll="".ceil($row["liuliang"]/1024)."G";
	}					
	$kkzt="";
	if($row['istk']==1){
		$kkzt="�ѷ���";
	}else{
		if($row['zt']==2){
			$kkzt="�ȴ�����";
		}else{
			$kkzt="�ѿۿ�";
		}
	}
	$r=array(
		"sjh"=>$row["sjh"],
		"province"=>$row["province"],
		"liuliang"=>$ll,
		"createtime"=>date("Y-m-d H:i:s",$row["createtime"]),
		"zt"=>$ztarr[$row["zt"]],
		"shje"=>$row["shje"],
		"kkzt"=>$kkzt,
		"beizhu"=>$row["beizhu2"]
	);
	$arr[]=$r;
}

$str = '';
foreach ($arr as $row) {
    $str_arr = array();
    foreach ($row as $column) {
        $str_arr[] = '"' . str_replace('"', '""', $column) . '"';
    }
    $str.=implode(',', $str_arr) . PHP_EOL;
}
echo $str;
	
?>