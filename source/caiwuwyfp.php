<?
//��ȡ�ۼƳ�ֵ��� ��ֵ���� 0�Զ���ֵ 1�ֶ���ֵ 2�ײͰ��·��� 3�ײ�������Ѵﲻ���۷�  4����ʧ�ܷ���cztype
$sql="select SUM(shje) as num from `chongzhilog` where uid=".$_SESSION["uid"]." and zt=1 and cztype in(0,1,2)";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zjine=floatval($row["num"]);//�ܳ�ֵ���

//$zjine=getusercznum($_SESSION["uid"]);

//����ȡ��Ʊ���
$sql="select SUM(jine) as num from `fapiao_log` where uid=".$_SESSION["uid"]." and zt !=2";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$ylqjine=floatval($row["num"]);//����ȡ��Ʊ���

//��ȡ�û���ȡ��Ʊ��ַ
$sql="select * from `fapiao_userinfo` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$fapiaouserinfo=mysql_fetch_array($re);


include template('caiwuwyfp');
?>