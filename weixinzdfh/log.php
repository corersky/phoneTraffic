<?php
require_once("common.php");
$con=new MySql();
$time=time()-60*60*24*15;

$sjhtypearr=array(0=>"移动",1=>"联通",2=>"电信");

$sql="select * from `orderlog` where createtime>".$time;
$re=$con->query($sql);
$logarr=array();

while($row=mysql_fetch_array($re)){
	$row["createtime"]=date("Y-m-d H:i:s",$row["createtime"]);
	$logarr[]=$row;
}

?>

<table width="100%">
<tr>
<td width="20%">订单编号</td>
<td width="15%">流量</td>
<td width="15%">手机号</td>
<td width="10%">订单实付金额</td>
<td width="20%">发货时间</td>
<td width="20%">平台订单ID</td>
</tr>
<?
foreach($logarr as $value){
?>
<tr>
<td><?=$value["tid"]?></td>
<td><? echo $sjhtypearr[$value["lltype"]] ;?><?=$value["liuliang"]?>M</td>
<td><?=$value["sjh"]?></td>
<td><?=$value["ddje"]?></td>
<td><?=$value["createtime"]?></td>
<td><?=$value["taskid"]?></td>
</tr>
<?
}
?>

</table>