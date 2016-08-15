<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>状态</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=360, user-scalable=no"/>
<style type="text/css">
@media only screen
and (min-device-width : 320px)
and (max-device-width : 1024px) {
	select:focus,
	textarea:focus,
	input:focus {font-size: 36px !important;
	}
}
#warn1{
color: #3BBF90; font-size: 60px; text-align: center;}
#warn2{ 
font-size: 42px; text-align: center; color: #666666;}
</style>
</head>
<body bgcolor="#dfeae6" style=" margin: 0;">
<?php
$msg=trim($_GET["msg"]);
$code=intval($_GET["code"]);
?>
<table width="1080" border="0" cellpadding="0" cellspacing="0" style="text-align: center;">
<tbody>
	<tr>
		<td colspan="3">
			<img src="images/t1.jpg" width="1080" height="774" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="4" width="186" height="700">
			</td>
		<td width="705" height="190">
        <p id="warn1"><?php echo $msg; ?></p>
        <p id="warn2">请返回重新提交。</p>
			</td>
		<td rowspan="4" width="186" height="700" >
			</td>
	</tr>
	<tr>
		<td width="558" height="214">
			</td>
	</tr>
	<tr>
		<td width="558" height="81">
			</td>
	</tr>
</tbody>
</table>
</body>
</html>