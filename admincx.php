<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	$con=new MySql();
	$pwd=trim($_POST["pwd"]);
	if(!empty($pwd)){
		if($pwd!="1234"){
			die("�������");
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
		
		echo "�ܹ�:".$sjhcount." ������<br>";
		
		$unique_arr = array_unique ($arr);
    	$repeat_arr = array_diff_assoc ( $arr, $unique_arr ); 
		echo "�ظ����룺<br>";
		foreach($repeat_arr as $sjh){
		echo $sjh."<br>";
		}
	
		
	}
	

	
?>
��ѯָ��ʱ���ֵ�ɹ��Ķ�������<br>
<form action="" method="post">
ʱ�䣺<input name="stime" value="">---<input name="etime" value="">
ͨ��id:<input name="tongdaoid">
ͨ������:<select name="sjhtype">
<option value="0">�ƶ�</option>
<option value="1">��ͨ</option>
<option value="2">����</option>
</select>
������<input name="liuliang">
��ѯ���룺<input type="text" name="pwd">
<input type="submit" value="��ѯ">
</form>