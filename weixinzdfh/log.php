<?php
require_once("common.php");
$con=new MySql();
$time=time()-60*60*24*15;

$sjhtypearr=array(0=>"�ƶ�",1=>"��ͨ",2=>"����");

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
<td width="20%">�������</td>
<td width="15%">����</td>
<td width="15%">�ֻ���</td>
<td width="10%">����ʵ�����</td>
<td width="20%">����ʱ��</td>
<td width="20%">ƽ̨����ID</td>
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