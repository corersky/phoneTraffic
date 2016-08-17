<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}

    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$orderarr=array();
	$sjh=trim($_POST["sjh"]);

	if(!empty($sjh)){
		$time=time()-60*60*24*30;

		$sql="select * from `liuliangdaili_log` where sjh='".$sjh."'";
		$re=$con->query($sql);
		
		while($row=mysql_fetch_array($re)){
			$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
			$row["dlnick"]=getdailishangnick($row["uid"]);
			$row["unick"]=$row["sjh"];
			$row["jine"]="".$row["liuliang"]."M";
			if(!empty($row["upzttime"])){
				$row["upzttime"]=date("Y-m-d H:i:s",$row["upzttime"]);
			}
			
			$orderarr[]=$row;
		}
	}
	
$llczztarr=array("0"=>"充值中","1"=>"充值成功","2"=>"充值失败","3"=>"等待充值");
	
function getdailishangnick($uid){
	global $con;
	
	 $sql="select username from `user_daili` where id=".$uid;
	 $re=$con->query($sql);
	 $row=mysql_fetch_array($re);
	return $row["username"];

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>退款</title>

</head>
<body>
<iframe id='hiddeniframe' name='hiddeniframe' width='0' height='0' style='display:none'></iframe>
<form action="" method="post">
手机号:<input type="text" name="sjh"/>
<input  type="submit" value="查询"/>
</form>
<table width="100%">
<tr>
<td width="100">代理商</td>
<td width="130">手机号</td>
<td width="130">充值套餐</td>
<td width="200">充值时间</td>
<td width="100">状态</td>
<td>操作</td>
</tr>
<?php
foreach($orderarr as $value){
?>
<tr>
<td><?=$value["dlnick"]?></td>
<td><?=$value["sjh"]?></td>
<td><?=$value["jine"]?></td>
<td><?=$value["createtime"]?></td>
<td><?=$llczztarr[$value["zt"]]?></td>
<td>
<a href="llordertk.php?tid=<?=$value["id"]?>" target="hiddeniframe">退款</a>
</td>
</tr>
<?php
}
?>

</table>





</body></html>