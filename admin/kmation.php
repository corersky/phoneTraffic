<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	
    //$con=new MySql();
    $con   =   MySQL::getInstance();
    
	$action=$_GET["action"];
	
	if(empty($_SESSION["admin_uid"]) || empty($_SESSION["admin_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}



if($action=="addkm"){
	$piname=trim($_POST["piname"]);
	$kanum=intval($_POST["kanum"]);
	$sjhtype=intval($_POST["sjhtype"]);
	$taocanliuliang=intval($_POST["taocanliuliang"]);
	$uid=0;
	$guoqitime=0;
	
	$liuliang=$taocanliuliang;
	if(empty($piname) || ($kanum<=0) || ($taocanliuliang<=0)){
		liuliangerr("填写信息错误！");
	}
	
	//处理移动
	$yidongtcarr=array(
			"10"=>array("dxnum"=>75,"mianzhi"=>3),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"70"=>array("dxnum"=>250,"mianzhi"=>10),
			"150"=>array("dxnum"=>500,"mianzhi"=>20),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
			"2048"=>array("dxnum"=>1750,"mianzhi"=>70),
			"3072"=>array("dxnum"=>2500,"mianzhi"=>100),
			"4096"=>array("dxnum"=>3250,"mianzhi"=>130),
			"6144"=>array("dxnum"=>4500,"mianzhi"=>180),
			"11264"=>array("dxnum"=>7000,"mianzhi"=>280)
	);
	//处理联通套餐
	$liantongtcarr=array(
			"20"=>array("dxnum"=>75,"mianzhi"=>3),
			"50"=>array("dxnum"=>150,"mianzhi"=>6),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30)
	);
		
	//处理电信套餐
	$dianxintcarr=array(
			"5"=>array("dxnum"=>25,"mianzhi"=>1),
			"10"=>array("dxnum"=>50,"mianzhi"=>2),
			"30"=>array("dxnum"=>125,"mianzhi"=>5),
			"50"=>array("dxnum"=>175,"mianzhi"=>7),
			"100"=>array("dxnum"=>250,"mianzhi"=>10),
			"200"=>array("dxnum"=>375,"mianzhi"=>15),
			"500"=>array("dxnum"=>750,"mianzhi"=>30),
			"1024"=>array("dxnum"=>1250,"mianzhi"=>50),
	);
		
	$kfmianzhi=0;//付款面值
	if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				liuliangerr("选择套餐错误,指定套餐已失效！");
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
	}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				liuliangerr("选择套餐错误,指定套餐已失效！");
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
	}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				liuliangerr("选择套餐错误,指定套餐已失效！");
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
	}
	if($kfmianzhi<=0){
			liuliangerr("选择套餐错误,指定套餐已失效！");
	}
		
	
	
		//余额够的话开始生成卡密
		$con->query("BEGIN");
		
		$inarr=array(
			"uid"=>$uid,
			"piname"=>$piname,
			"kanum"=>$kanum,
			"liuliang"=>intval($liuliang),
			"sjhtype"=>$sjhtype,
			"guoqitime"=>$guoqitime,
			"zongmianzhi"=>0,
			"zongssje"=>0,
			"createtime"=>time()
		);
		$kid=$con->insertabe("ka_picilist",$inarr);
	
		if(empty($kid)){
			liuliangerr("生成失败！");
		}
		//批量生成卡密
		for($i=0;$i<$kanum;$i++){
			$pwd=rand(1000000,9999999);
			$inarr=array(
				"uid"=>$uid,
				"pwd"=>$pwd,
				"pid"=>$kid,
				"liuliang"=>$liuliang,
				"sjhtype"=>$sjhtype,
				"mianzhi"=>$kfmianzhi,
				"shje"=>0,
				"zt"=>0,
				"createtime"=>time()
			);
			$id=$con->insertabe("ka_infos",$inarr);
		}
		$con->query("COMMIT");
	
	
	
	die("<script>alert('生成成功');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	
	
}elseif($action=="setpiname"){
	$newname=trim($_GET["newname"]);
	$id=trim($_GET["id"]);
	u8togbk($newname);
	if(empty($newname) || empty($id)){
		die("<script>alert('填写信息错误');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	
	$sql="UPDATE ka_picilist set piname='".$newname."' where id=".$id."";
	$re=$con->query($sql);
	exit;
}elseif($action=="plsetkabeizhu"){
	$startid=trim($_POST["startid"]);
	$endid=trim($_POST["endid"]);
	$beizhu=trim($_POST["beizhu"]);
	if(empty($startid) || empty($endid) || empty($beizhu)){
		die("<script>alert('填写信息错误');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	if((!is_numeric($startid)) || (!is_numeric($endid))){
		die("<script>alert('填写信息错误');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	
	$sql="UPDATE ka_infos set beizhu='".$beizhu."' where id>=".$startid." and id<=".$endid."";
	$re=$con->query($sql);
	die("<script>alert('备注成功');window.parent.location.href=window.parent.location.href;</script>");

}elseif($action=="plmoveka"){
	$startid=trim($_POST["startid"]);
	$endid=trim($_POST["endid"]);
	$dailiname=trim($_POST["dailiname"]);
	if(empty($startid) || empty($endid) || empty($dailiname)){
		die("<script>alert('填写信息错误');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	if((!is_numeric($startid)) || (!is_numeric($endid))){
		die("<script>alert('填写信息错误');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	
	//查看代理商是否存在
	
	//查看指定批量卡号是否有已转移的
	$sql="select count(*) as num from ka_infos where id>=".$startid." and id<=".$endid." and uid != 0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$ztiao=intval($row["num"]);//总条数
	if($ztiao>0){
		liuliangerr('转移失败，指定批次中有已转移的卡。');
	}
	
	/***************开始批量转移*****************/
	//获取本次转移的总面值
	$sql="select sum(mianzhi) as num,sjhtype from ka_infos where id>=".$startid." and id<=".$endid." and uid=0";
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	$kfmianzhi=floatval($row["num"]);//本次转移的总面值
	$sjhtype=floatval($row["sjhtype"]);//本次转移的运营商
	
	$sql="select * from user_daili where username='".$dailiname."'";
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("<script>alert('指定代理商不存在');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	$dxnum=floatval($userinfo["dxnum"]);//余额
	$liantongzk=floatval($userinfo["liantongzk"]);//折扣
	$dianxinzk=floatval($userinfo["dianxinzk"]);//折扣
	$yidongzk=floatval($userinfo["yidongzk"]);//折扣
	$uid=$userinfo["id"];
	
	$sqlzk=$yidongzk;
	$zongfeiyong=$kfmianzhi*$yidongzk*0.1;//扣费金额
	if($sjhtype==1){
		$zongfeiyong=$kfmianzhi*$liantongzk*0.1;//扣费金额
		$sqlzk=$liantongzk;
	}elseif($sjhtype==2){
		$zongfeiyong=$kfmianzhi*$dianxinzk*0.1;//扣费金额
		$sqlzk=$dianxinzk;
	}
	$sqlzk=$sqlzk*0.1;
	//判断金额
	$userdxnum=$dxnum-$zongfeiyong;
	if($userdxnum<0){
		liuliangerr("余额不足！");
	}
	//余额够的话开始生成卡密
	$con->query("BEGIN");
	$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
	$re=$con->query($sql);//更新用户余额
	
	$sql="UPDATE ka_infos SET uid=".$uid.",shje = mianzhi * ".$sqlzk." where id>=".$startid." and id<=".$endid." and uid=0";
	$re=$con->query($sql);//更新卡归属
		
	$con->query("COMMIT");
	

	die("<script>alert('转移成功');window.parent.location.href=window.parent.location.href;</script>");

}elseif($action=="dlshbeizhu"){
	$beizhu=trim($_POST["beizhu"]);
	$dailiname=trim($_POST["dailiname"]);
	$sql="select * from user_daili where username='".$dailiname."'";
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
	if(empty($userinfo)){
		die("<script>alert('指定代理商不存在');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	$uid=$userinfo["id"];
	$sql="UPDATE user_daili set kashbz='".$beizhu."' where id=".$uid;
	$re=$con->query($sql);//更新用户备注
	die("<script>alert('操作成功');window.parent.location.href=window.parent.location.href;</script>");
}elseif($action=="kazhuxiao"){
	$kaid=trim($_POST["kaid"]);
	$sql="select * from ka_infos where id=".$kaid;
	$re=$con->query($sql);
	$kainfo=mysql_fetch_array($re);
	if(empty($kainfo)){
		die("<script>alert('指定卡不存在');window.parent.location.href='".XZKJURL."/index.php?action=km_pilist';</script>");
	}
	if($kainfo["zt"]!=0){
			die("<script>alert('此卡已被使用');window.parent.location.href=window.parent.location.href;</script>");
	}
	
	if($kainfo["uid"]<=0){
		$sql="UPDATE ka_infos set uid=-1 where id=".$kaid;
		$re=$con->query($sql);
		die("<script>alert('注销成功');window.parent.location.href=window.parent.location.href;</script>");
	}else{
		//如果卡已分配，则退款
		$dlid=$kainfo["uid"];
		$shje=$kainfo["shje"];
		
		$sql="UPDATE user_daili set dxnum=dxnum+".$shje." where id=".$dlid;
		$re=$con->query($sql);//更新用户余额
		
		$sql="UPDATE ka_infos set uid=-1 where id=".$kaid;
		$re=$con->query($sql);
		die("<script>alert('注销成功并退款');window.parent.location.href=window.parent.location.href;</script>");
	
	}
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=km_create';</script>");
}
?>