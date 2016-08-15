<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("smsfunction.php");
	require_once("jishenfunction.php");
	$con=new MySql();
	

	//已领取发票金额
	$sql="select sjh from `smsordersinfo` where tid=8429";
	$re=$con->query($sql);
	while($row=mysql_fetch_array($re)){
	echo $row['sjh']."<br>";
	}
?>