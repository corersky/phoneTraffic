<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	$con=new MySql();
	$pwd=trim($_POST["pwd"]);
	if(!empty($pwd)){
		if($pwd!="1234"){
			die("密码错误");
		}
		$stime=trim($_POST["stime"]);
		$etime=trim($_POST["etime"]);
		$tongdaoid=intval($_POST["tongdaoid"]);
		$sjhtype=intval($_POST["sjhtype"]);
		$liuliang=intval($_POST["liuliang"]);
		$stime=strtotime($stime);
		$etime=strtotime($etime);
		$etime=$etime+60*60*24;
		$sql="select * from `liuliangdaili_log` where  tongdaoid=".$tongdaoid."  AND sjhtype=".$sjhtype."  AND createtime>".$stime." AND createtime<".$etime." and zt=1 and liuliang=".$liuliang;
		$re=$con->query($sql);
		
		$sjhcount=0;
		$arr=array();
		while($row=mysql_fetch_array($re)){
			echo $row["sjh"]."<br>";
			$arr[]=$row["sjh"];
			$sjhcount++;
		}
		
		echo "总共:".$sjhcount." 个号码<br>";
		
		$unique_arr = array_unique ($arr);
    	$repeat_arr = array_diff_assoc ( $arr, $unique_arr ); 
		echo "重复号码：<br>";
		foreach($repeat_arr as $sjh){
		echo $sjh."<br>";
		}
	
		
	}
	

	
?>
查询指定时间充值成功的订单号码<br>
<form action="" method="post">
时间：<input name="stime" value="">---<input name="etime" value="">
通道id:<input name="tongdaoid">
通道类型:<select name="sjhtype">
<option value="0">移动</option>
<option value="1">联通</option>
<option value="2">电信</option>
</select>
流量：<input name="liuliang">
查询密码：<input type="text" name="pwd">
<input type="submit" value="查询">
</form>