<?php
function liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,&$err){
		global $con;
		//判断对方传送的手机号归属
		$hd=substr($sjh,0,4);
		$sql="select gs from `tool_haoduan` where hd='".$hd."'";
		$re=$con->query($sql);
		$row=mysql_fetch_array($re);
		$sjhtype= intval($row["gs"]);
		$liuliang=intval($liuliang);
		$sql="select * from `user` where id=".$uid;
		$re=$con->query($sql);
		$userinfo=mysql_fetch_array($re);
		$jiage=floatval($userinfo["jiage"]);//每条短信的价格
		if($jiage<=0){
			$err="用户信息错误！";
			return false;
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
		$kfdxnum=0;
		if(empty($sjhtype)){
			if(empty($yidongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($yidongtcarr[$liuliang]["mianzhi"]);
			$kfdxnum=  intval($yidongtcarr[$liuliang]["dxnum"]);
		}else if($sjhtype==1){
			if(empty($liantongtcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($liantongtcarr[$liuliang]["mianzhi"]);
			$kfdxnum=  intval($liantongtcarr[$liuliang]["dxnum"]);
		}else if($sjhtype==2){
			if(empty($dianxintcarr[$liuliang])){
				$err="选择套餐错误！";
				return false;
			}
			$kfmianzhi=intval($dianxintcarr[$liuliang]["mianzhi"]);
			$kfdxnum=  intval($dianxintcarr[$liuliang]["dxnum"]);
		}
		if($kfdxnum<=0){
			$err="选择套餐错误！";
			return false;
		}
		$zongfeiyong=$kfdxnum*$jiage;//扣费金额
		//判断金额
		$userdxnum=floatval($userinfo["dxnum"]);
		$userdxnum=$userdxnum-$zongfeiyong;
		if($userdxnum<0){
			$err="余额不足！";
			return false;
		}
		$liuliangbuf="".$liuliang."M";
		$err="";
        
        //开通成功
		//$sql="UPDATE user_daili set dxnum=".$userdxnum." where id=".$uid;
		$sql="UPDATE user_daili set dxnum=dxnum-".$zongfeiyong." where id=".$uid;
		$re=$con->query($sql);//更新用户余额
        if(!$re){
            $err    =   '扣除费用失败！';
            return FALSE;
        }
		$zt=0;
	
		$msg=$zongfeiyong."元购买".$liuliang."M流量";
		$inarr=array(
			"uid"=>$uid,
			"sjh"=>$sjh,
			"sjhtype"=>$sjhtype,
			"tcid"=>0,
			"liuliang"=>intval($liuliang),
			"dxnum"=>0,
	
			"mianzhi"=>$kfmianzhi,
			"shje"=>$zongfeiyong,
			"msg"=>$msg,
			
			"zt"=>$zt,
			"msgId"=>'',
			"apimsg"=>$err,
			"tdjg"=>$tdzongfeiyong,
			"maoli"=>$maoli,
			
			"province"=>$sjhinfo["province"],
			"city"=>$sjhinfo["city"],
			
			"tongdaoid"=>$tongdaoid,
			"createtime"=>time()
		);
		$id=$con->insertabe("liuliangdaili_log",$inarr);
        if(!$id){
            $err    =   '保存订单信息失败!';
            return FALSE;
        }
        
        $a=sendliuliang($sjh,$liuliang,$tongdaoid,"",$err);
        
        $inarr=array(
			"msgId"=>$a,
			"apimsg"=>$err
		);
		
		if(empty($a)){
			$inarr["zt"]=3;
		}
        
		$re=$con->updatetabe("liuliangdaili_log",$inarr,$id,"id");
        if(!$re){
            $aaa=date("Y-m-d H:i:s")."通道{$tongdaoid}提交失败 uid:".$uid." sjh:".$sjh." id:".$id.' msgId:'.$a.' '.json_encode($inarr);
			csw("submitFail.log",$aaa);
        }
		return true;
}


function liuliang_tongdaoation_1($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=1;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}

function liuliang_tongdaoation_2($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=2;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}









function liuliang_tongdaoation_3($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=3;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_4($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=4;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_5($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=5;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_6($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=6;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_7($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=7;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_8($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=8;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_9($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=9;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_10($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=10;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_11($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=11;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_12($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=12;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_13($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=13;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_14($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=14;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_15($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=15;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_16($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=16;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_17($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=17;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_18($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=18;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_19($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=19;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_20($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=20;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_21($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=21;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_22($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=22;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_23($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=23;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_24($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=24;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_25($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=25;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_26($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=26;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}

function liuliang_tongdaoation_27($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=27;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_28($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=28;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}
function liuliang_tongdaoation_29($uid,$sjh,$liuliang,&$err){
		global $con;
		$tongdaoid=29;
		return liuliang_tongdaoation_tongyong($uid,$sjh,$liuliang,$tongdaoid,$err);
}