<?php
require_once("common.php");
$sjh = trim($_GET['sjh']);
$sjhinfo=getsjhinfo($sjh);
$province=iconv("GBK","UTF-8//IGNORE",$sjhinfo["province"]);
$city=iconv("GBK","UTF-8//IGNORE",$sjhinfo["city"]);
echo $province.":".$city;
exit;
?>