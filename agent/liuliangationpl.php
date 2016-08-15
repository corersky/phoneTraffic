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



if($action=="addliuliangpl"){
	$sjh=trim($_POST["sjh"]);
	$liuliang0=trim($_POST["liuliang0"]);
	$liuliang1=intval($_POST["liuliang1"]);
	$liuliang2=intval($_POST["liuliang2"]);

	if(empty($sjh)){
		liuliangerr("操作失败！");
	}
	
	$pieces= preg_split('/\n|,| /', $sjh, -1, PREG_SPLIT_NO_EMPTY);
	$txlarr=array();
	foreach($pieces as $value){
		$sjh=trim($value);
		if((strlen($sjh)==11) && is_numeric($sjh)){
			$txlarr[]=$sjh;
		}
	}
	
	if(empty($txlarr)){
		liuliangerr("请按照规则输入手机号！");
	}


	
	$sql="select * from `user_daili` where id=".$_SESSION["dl_uid"];
	$re=$con->query($sql);
	$userinfo=mysql_fetch_array($re);
		
	$tongdaoid0=0;
	$tongdaoid1=0;
	$tongdaoid2=0;
	if((!empty($userinfo["lltdbdyd"])) || (!empty($userinfo["lltdbdlt"])) || (!empty($userinfo["lltdbddx"]))){
			$tongdaoid0=$userinfo["lltdbdyd"];//默认移动
			$tongdaoid1=$userinfo["lltdbdlt"];//默认移动
			$tongdaoid2=$userinfo["lltdbddx"];//默认移动
	}else{
		$sql="select configkey,congigvalue from `configdb` where configkey in('liuliangtdyd','liuliangtdlt','liuliangtddx')";
		$re=$con->query($sql);
		$tongdaoarr=array();
		while($row=mysql_fetch_array($re)){
				$tongdaoarr[$row["configkey"]]=$row["congigvalue"];
		}
		
		$tongdaoid0=intval($tongdaoarr["liuliangtdyd"]);
		$tongdaoid1=intval($tongdaoarr["liuliangtdlt"]);
		$tongdaoid2=intval($tongdaoarr["liuliangtddx"]);
	}
	
	
	$errsjharr=array();
	$errnum=0;
	foreach($txlarr as $sjh){
		
		$hd=substr($sjh,0,4);
		$sjhtype=getsjhdgs($hd);
		
		$liuliang=$liuliang0;
		$tongdaoidbuf=$tongdaoid0;
		if($sjhtype==1){
			$liuliang=$liuliang1;
			$tongdaoidbuf=$tongdaoid1;
		}elseif($sjhtype==2){
			$liuliang=$liuliang2;
			$tongdaoidbuf=$tongdaoid2;
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
				$tongdaoidbuf=$row["id"];
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
				$tongdaoidbuf=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("请勿提交没有权限的省份号码！");
				}
				
			}
		}
		
	}
	
	
	
	//判断是否走省内通道
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
				$tongdaoidbuf=$row["id"];
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
				$tongdaoidbuf=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("请勿提交没有权限的省份号码！");
				}
				
			}
		}
		
	}
	
	//判断是否走省内通道
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
				$tongdaoidbuf=$row["id"];
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
				$tongdaoidbuf=$bdlltdbdydid;
				
				$preg_ah="/".$sheng."/is";
				if (!preg_match($preg_ah,$province,$bdllarr)) {
					liuliangerr("请勿提交没有权限的省份号码！");
				}
				
			}
		}
		
	}
		
		$functionname="liuliang_tongdaoation_".$tongdaoidbuf;
		$con->begin();
		$err="";
		$a=$functionname($_SESSION["dl_uid"],$sjh,$liuliang,$err);
		if(empty($a)){
			$errsjharr[]=$sjh;
			$errnum++;
            $con->rollback();
            continue;
		}
        $con->commit();
	}
	$errmsg="批量充值成功";
	if($errnum>0){
		$errmsg="批量充值成功,其中 ".$errnum." 个号码提交失败!";
	}
	
	die("<script>alert('".$errmsg."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhilog';</script>");
	
	
}

function liuliangerr($err){
	die("<script>alert('".$err."');window.parent.location.href='".XZKJURL."/index.php?action=llchongzhipl';</script>");
}
?>