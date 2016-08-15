<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../smsfunction.php");
	$con=new MySql();
	$usernick=trim($_POST["usernick"]);
	$time=intval($_POST["time"]);
	$pwd=trim($_POST["pwd"]);
	if(!empty($usernick)){
		if($pwd!="123321"){
		die("<script>alert('密码错误！');window.location.href='".XZKJURL."/setuserordergetzt.php';</script>");
		}
		$time=time()-60*60*24*$time;
		$sql="select id from `user_daili` where username='".$usernick."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$uid=trim($row["id"]);
		if(empty($uid)){
			die("<script>alert('指定用户名不存在！');window.location.href='".XZKJURL."/setuserordergetzt.php';</script>");
		}
		$sql="UPDATE liuliangdaili_log SET getzt = 0 where uid=".$uid." and createtime>".$time;
		$re=$con->query($sql);
		die("<script>alert('修改成功！');window.location.href='".XZKJURL."/setuserordergetzt.php';</script>");
	}

?>

<form action="" method="post">
用户名：<input  type="text" name="usernick" id="usernick" value=""/><br />
时间：<input  type="radio" name="time" id="time" value="1"/>1天内 &nbsp;
<input  type="radio" name="time" id="time" value="3"/>3天内 &nbsp;
<input  type="radio" name="time" id="time" value="7"/>7天内 <br />
密码：<input  type="password" name="pwd" id="pwd"/><br />
<input  type="submit" value="修改"/>
</form>
