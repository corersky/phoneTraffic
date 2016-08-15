<?
//获取累计充值金额 充值类型 0自动充值 1手动充值 2套餐按月返还 3套餐最低消费达不到扣费  4发送失败返还cztype
$sql="select SUM(shje) as num from `chongzhilog` where uid=".$_SESSION["uid"]." and zt=1 and cztype in(0,1,2)";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$zjine=floatval($row["num"]);//总充值金额

//$zjine=getusercznum($_SESSION["uid"]);

//已领取发票金额
$sql="select SUM(jine) as num from `fapiao_log` where uid=".$_SESSION["uid"]." and zt !=2";
$re=$con->query($sql);
$row=mysql_fetch_array($re);
$ylqjine=floatval($row["num"]);//已领取发票金额

//获取用户收取发票地址
$sql="select * from `fapiao_userinfo` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$fapiaouserinfo=mysql_fetch_array($re);


include template('caiwuwyfp');
?>