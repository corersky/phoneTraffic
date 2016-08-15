<?php 
	ignore_user_abort();//断开浏览器继续执行
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
	
	
	$llczztarr=array("0"=>"充值中","1"=>"充值成功","2"=>"充值失败","3"=>"等待充值");
	
	


	$yysarr=array("0"=>"移动","1"=>"联通","2"=>"电信");
	$ztarr=array("0"=>"提交成功","1"=>"充值成功","2"=>"充值失败","3"=>"提交成功");

$sql="select * from `liuliangdaili_log` where uid=".$uid.$wherestr." ORDER BY id ASC";
$re=$con->query($sql);
$arr=array();
$r=array(
		"sjh"=>"充值号码",
		"province"=>"归属地",
		"liuliang"=>"充值内容",
		"createtime"=>"充值时间",
		"zt"=>"充值状态",
		"shje"=>"消耗金额",
		"kkzt"=>"扣款状态",
		"beizhu"=>"备注"
);
$arr[]=$r;
	
while($row=mysql_fetch_array($re)){
	$ll=$row["liuliang"]."M";
	if($row["liuliang"]>=1024){
		$ll="".ceil($row["liuliang"]/1024)."G";
	}					
	$kkzt="";
	if($row['istk']==1){
		$kkzt="已返款";
	}else{
		if($row['zt']==2){
			$kkzt="等待返款";
		}else{
			$kkzt="已扣款";
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