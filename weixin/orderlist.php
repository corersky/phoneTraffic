<?php
require_once("common.php");
$con=new MySql();
$code=trim($_GET["code"]);
$nowtime=time();
if(empty($code)){
	die("�Ƿ���Դ");
}
$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".$code."&grant_type=authorization_code";
$json=get_url_contents($url);
$json=json_decode($json,true);

$openid=$json["openid"];
if(empty($openid)){
	die("��ȡ��Ϣʧ��");
}
//$openid="o4tLkt5vNZEr5tHuD2rajeASvx-Y";
$jihuotime=time()-60*60*24*30;

$sql="select * from `ka_infos` where jihuotime >".$jihuotime." and openid='".$openid."'  ORDER BY id DESC LIMIT 0,10";
$re=$con->query($sql);
$czlog=array();
while($row=mysql_fetch_array($re,MYSQL_ASSOC)){
	$row["liuliangstr"]=$row["liuliang"]."M";
	if($row["liuliang"]>=1024){
		$row["liuliangstr"]="".ceil($row["liuliang"]/1024)."G";
	}
	//״̬ 0δ����  1����ɹ� 2����ʧ�� 3������
	if($row["zt"]==0){
		$row["ztstr"]="δ����";
		$row["beizhustr"]="�˿���δ����";
	}else if($row["zt"]==1){
		$row["ztstr"]="��ֵ�ɹ�";
		$row["beizhustr"]="��ֵ�ɹ���";
	}else if($row["zt"]==2){
		$row["ztstr"]="��ֵʧ��";
		//��ȡ�����̱�ע
		$sql="select kashbz from `user_daili` where id=".$row["uid"]." ORDER BY id DESC LIMIT 0,1";
		$rebuf=$con->query($sql);
		$rw=mysql_fetch_array($rebuf,MYSQL_ASSOC);
		//$row["beizhustr"]=$rw["kashbz"];
		$row["beizhustr"]=$row["beizhu"];
	}else if($row["zt"]==3){
		$row["ztstr"]="��ֵ��";
		$row["beizhustr"]="���ĳ�ֵ�������ύ��ϵͳ���ڳ�ֵ�У���ֵ����ڴ�ҳ�����֪ͨ�������Ժ��ע��ҳ�档";
	}
	$row["jihuotime"]=date("Y��m��d��",$row["jihuotime"]);
	$czlog[]=$row;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>��ֵ��¼</title>
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
ul {list-style: none;
    margin: 0;
    padding: 0;
}
#div {float: right;
    margin-right: 80px;
    color: #666;
    font-size: 42px;
    height: 98px;
    overflow: hidden;
    line-height: 98px;}
#div p{margin: 0 auto;}
#div2 {float: right;
    margin-right: 80px;
    color: #666;
    font-size: 42px;
	width:732px;
    height: 180px;
    overflow: hidden;
    text-align:left;}
#div2 p{margin: 0 auto;}

</style>
</head>
<body bgcolor="#dfeae6" style=" margin: 0;">

<table width="1080" border="0" cellpadding="0" cellspacing="0" style="text-align: center;background:#3bbf90;">
	<tr>
		<td rowspan="2" width="1080" height="120">
			<span style="font-size:48px;color:#fff;font-weight:bold;">��ֵ��¼</span></td>
	</tr>

</table>
<br/>

<ul>

<?php
foreach($czlog as $value){
?>
<li id="1">
<table width="1080" border="0" cellpadding="0" cellspacing="0" style="text-align: center;">
	<tr>
		<td id="time" colspan="2" width="1080" height="98" style="background-image:url(images/j4.jpg);">
		<div id="div"><p>
		<?php echo $value["jihuotime"]; ?>
		</p></div>
			</td>
	</tr>
	<tr>
		<td id="num" colspan="2" width="1080" height="98" style="background-image:url(images/j5.jpg);">
		<div id="div"><p>
		<?php echo $value["sjh"]; ?>
		</p></div>
			</td>
	</tr>
	<tr>
		<td id="m" colspan="2" width="1080" height="98" style="background-image:url(images/j6.jpg);">
		<div id="div"><p>
		<?php echo $value["liuliangstr"]; ?>
		</p></div>
			</td>
	</tr>
	<tr>
		<td id="sta" colspan="2" width="1080" height="98" style="background-image:url(images/j7.jpg);">
		<div id="div"><p style="color:#3bbf90;font-weight: bold;">
		<?php echo $value["ztstr"]; ?> 
		</p></div>
			</td>
	</tr>
	<tr>
		<td id="note" colspan="2" width="1080" height="256" style="background-image:url(images/j8.jpg);">
		<div id="div2"><p>
		<?php echo $value["beizhustr"]; ?>
		</p></div>
			</td>
	</tr>
</table>
</li>
<?php
}
?>

<li id="2">
</li>
</ul>
</body>
</html>