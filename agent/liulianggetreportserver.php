<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("source/liuliangfunction.php");
	$con=new MySql();
	
	
	$apizh=trim($_POST["apizh"]);
	$apipwd=trim($_POST["apipwd"]);
	
	if(empty($apizh) || empty($apipwd)){
		$a=array("code"=>"-2","result"=>array());
		returnajaxjson_liuliangserver($a);
	}
	
	$sql="select * from `user_daili` where username='".$apizh."' and pwd='".$apipwd."'";
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		$a=array("code"=>"-2","result"=>array());
		returnajaxjson_liuliangserver($a);
	}
	
	$uid=$userinfo["id"];
	
	//获取推送状态
	$time=time()-60*60*24*15;//状态保留15天
	$sql="select id,sjh,zt from `liuliangdaili_log` where uid=".$uid." and createtime > ".$time." and (zt = 1 or zt=2) and getzt=0 LIMIT 0,100";
	$re=$con->query($sql);
	$resultarr=array();
	$idsarr=array(0);
	while($row=mysql_fetch_array($re)){
		$r=array(
			"mobile"=>$row["sjh"],
			"msgid"=>$row["id"],
			"status"=>$row["zt"]
		);
		$resultarr[]=$r;
		$idsarr[]=$row["id"];
	}
	
	$idsstr = implode(",", $idsarr);
	
	//更新获取状态
	$sql="UPDATE liuliangdaili_log SET getzt=1,getzttime=".time()." where id in(".$idsstr.")";
	$re=$con->query($sql);
	
	$a=array("code"=>"0","result"=>$resultarr);
	returnajaxjson_liuliangserver($a);
	
	
	
//封装返回json信息
function returnajaxjson_liuliangserver($arr){
	gbktou8_liuliangserver($arr);	
	$jsonstr=json_encode($arr);
	//$jsonstr=preg_replace("/\"/is","'",$jsonstr);

$aaa=date("Y-m-d H:i:s").":".time().$jsonstr;
	csw("zhuangtailog.txt",$aaa);

	die($jsonstr);
}

function gbktou8_liuliangserver(&$arr){
	if(is_object($arr)){
		$arr=(array)$arr;
	}
	if(is_array($arr)){
		foreach($arr as $k=>$v){
			if(is_array($v) || is_object($v)){
				 gbktou8_liuliangserver($arr[$k]);
			}else{
			   $arr[$k]=iconv("GBK","UTF-8//IGNORE",$arr[$k]);
			}
		}
	}else{
		$arr=iconv("GBK","UTF-8//IGNORE",$arr);
	}

}
?>