<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$usernick=trim($_POST["usernick"]);
	$time=intval($_POST["time"]);
	$pwd=trim($_POST["pwd"]);
	if(!empty($usernick)){
		if($pwd!="123321"){
		die("<script>alert('�������');window.location.href='".XZKJURL."/setuserordergetzt.php';</script>");
		}
		$time=time()-60*60*24*$time;
		$sql="select id from `user_daili` where username='".$usernick."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$uid=trim($row["id"]);
		if(empty($uid)){
			die("<script>alert('ָ���û��������ڣ�');window.location.href='".XZKJURL."/setuserordergetzt.php';</script>");
		}
		$sql="UPDATE liuliangdaili_log SET getzt = 0 where uid=".$uid." and createtime>".$time;
		$re=$con->query($sql);
		die("<script>alert('�޸ĳɹ���');window.location.href='".XZKJURL."/setuserordergetzt.php';</script>");
	}

?>

<form action="" method="post">
�û�����<input  type="text" name="usernick" id="usernick" value=""/><br />
ʱ�䣺<input  type="radio" name="time" id="time" value="1"/>1���� &nbsp;
<input  type="radio" name="time" id="time" value="3"/>3���� &nbsp;
<input  type="radio" name="time" id="time" value="7"/>7���� <br />
���룺<input  type="password" name="pwd" id="pwd"/><br />
<input  type="submit" value="�޸�"/>
</form>
