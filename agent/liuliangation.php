<?php 
	ignore_user_abort();//断开浏览器继续执行
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
	$con=new MySql();
	$action=$_GET["action"];
	if(empty($_SESSION["dl_uid"]) || empty($_SESSION["dl_username"])){
		die("<script>alert('请重新登录!');window.parent.location.href='".XZKJURL."/index.php';</script>");
	}



if($action=="addliuliang"){
	$sjh=trim($_GET["sjh"]);
	$liuliang=trim($_GET["liuliang"]);
	$sjhtype=intval($_GET["sjhtype"]);
	if(empty($sjh) || empty($liuliang)){
		liuliangerr("操作失败！");
	}
	if(!is_numeric($sjh)){
		liuliangerr("操作失败！");
}
	$sjhtype=getsjhdgs($sjh);
	//判断是否重复提交
	$liulianga=intval($liuliang);
	$time=time()-60;
	$sql="select * from `liuliangdaili_log` where uid=".$_SESSION["dl_uid"]." and createtime>=".$time." and sjh='".$sjh."' and liuliang=".$liulianga;
	
	$re=$con->query($sql);
	$row=mysql_fetch_array($re);
	if(!empty($row)){
		liuliangerr("为避免重复提交造成损失，同一个号码对应的同一套餐，一分钟内仅能提交一次，以充值记录为准。");
	}

	$sql="select * from `user_daili` where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
		
	$tongdaoid=0;
	if((!empty($userinfo["lltdbdyd"])) || (!empty($userinfo["lltdbdlt"])) || (!empty($userinfo["lltdbddx"]))){
			$tongdaoid=$userinfo["lltdbdyd"];//默认移动
			if($sjhtype==1){
				//联通处理
				$tongdaoid=$userinfo["lltdbdlt"];
			}elseif($sjhtype==2){
				//电信处理
				$tongdaoid=$userinfo["lltdbddx"];
			}
	}else{
		$sql="select * from `configdb` where configkey='liuliangtdyd'";
		if($sjhtype==1){
			//联通处理
			$sql="select * from `configdb` where configkey='liuliangtdlt'";
		}elseif($sjhtype==2){
			//电信处理
			$sql="select * from `configdb` where configkey='liuliangtddx'";
		}
		$re=$con->query($sql);
		$tongdaoinfo=mysql_fetch_array($re);
		$tongdaoid=$tongdaoinfo["congigvalue"];
	}
	
	//判断是否走省内通道
	
	if(empty($sjhtype)){
		$sjhinfo=getsjhinfo($sjh);
		$bdllarr="";//没用
		$province=$sjhinfo["province"];
		if(empty($province)){
			$province="没意义的文字";
		}
			
		$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszcyd=1";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$sheng=$row["sheng"];
			if(($sheng=="河北") && ($liuliang>150)){
				continue;
			}
			if(($sheng=="新疆") && ($liuliang>150)){
				continue;
			}
			if(($row["id"]==66) && ($liuliang>150)){
				continue;
			}
			if(($row["id"]==17) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			if(($row["id"]==20) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			
			if(($row["id"]==62) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			if(($row["id"]==63) && (($liuliang==70) || ($liuliang==150))){
					continue;
			}
			
			
			$preg_ah="/".$sheng."/is";
			if (preg_match($preg_ah,$province,$bdllarr)) {
				$tongdaoid=$row["id"];
				break;
			}
		}
		
		//如果绑定的是省网通道，强制走省网
		$bdlltdbdydid=$userinfo["lltdbdyd"];
		if(!empty($bdlltdbdydid)){
			$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
			$re=$con->query($sql);
			$row=mysql_fetch_array($re);
			$isbdtd=intval($row["isbdtd"]);//是否是本地通道 0不是 1是
			$sheng=trim($row["sheng"]);//如果是本地通道，此字段存储省份
			if(!empty($isbdtd)){
				$tongdaoid=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("请勿提交没有权限的省份号码！");
				}
				
			}
		}
		
		
	}
	
	if($sjhtype==1){
		$sjhinfo=getsjhinfo($sjh);
		$bdllarr="";//没用
		$province=$sjhinfo["province"];
		if(empty($province)){
			$province="没意义的文字";
		}
			
		$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszclt=1";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$sheng=$row["sheng"];
			
			$preg_ah="/".$sheng."/is";
			if (preg_match($preg_ah,$province,$bdllarr)) {
				$tongdaoid=$row["id"];
				break;
			}
		}
		
		//如果绑定的是省网通道，强制走省网
		$bdlltdbdydid=$userinfo["lltdbdlt"];
		if(!empty($bdlltdbdydid)){
			$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
			$re=$con->query($sql);
			$row=mysql_fetch_array($re);
			$isbdtd=intval($row["isbdtd"]);//是否是本地通道 0不是 1是
			$sheng=trim($row["sheng"]);//如果是本地通道，此字段存储省份
			if(!empty($isbdtd)){
				$tongdaoid=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("请勿提交没有权限的省份号码！");
				}
				
			}
		}


		
		
	}
	
	if($sjhtype==2){
		$sjhinfo=getsjhinfo($sjh);
		$bdllarr="";//没用
		$province=$sjhinfo["province"];
		if(empty($province)){
			$province="没意义的文字";
		}
			
		$sql="select id,sheng from `liuliangtongdaolist` where zt=1 and isbdtd=1 and iszcdx=1";
		$re=$con->query($sql);
		while($row=mysql_fetch_array($re)){
			$sheng=$row["sheng"];
			
			$preg_ah="/".$sheng."/is";
			if (preg_match($preg_ah,$province,$bdllarr)) {
				$tongdaoid=$row["id"];
				break;
			}
		}
		
		//如果绑定的是省网通道，强制走省网
		$bdlltdbdydid=$userinfo["lltdbddx"];
		if(!empty($bdlltdbdydid)){

			$sql="select * from `liuliangtongdaolist` where id=".$bdlltdbdydid;
			$re=$con->query($sql);
			$row=mysql_fetch_array($re);
			$isbdtd=intval($row["isbdtd"]);//是否是本地通道 0不是 1是
			$sheng=trim($row["sheng"]);//如果是本地通道，此字段存储省份
			if(!empty($isbdtd)){
				$tongdaoid=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("请勿提交没有权限的省份号码！");
				}
				
			}
		}
		
		
	}
		
	if(empty($tongdaoid)){
		liuliangerr("获取通道失败！");
	}
	
	
	
	$functionname="liuliang_tongdaoation_".$tongdaoid;
	if(!function_exists($functionname)){
		liuliangerr("获取发送通道程序失败！");
	}
    
	$con->begin();
	$err="";
	$a=$functionname($_SESSION["dl_uid"],$sjh,$liuliang,$err);
	if(empty($a)){
        $con->rollback();
		liuliangerr($err);
	}
    $con->commit();
	
	die("<script>window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhi';</script>");
}
?>