<?php 
	ignore_user_abort();//�Ͽ����������ִ��
	require_once("common.php");
	require_once("../liuliangfunction.php");
	require_once("liuliangorderfunction.php");
    require_once("php-export-data.class.php");
	
	$con=new MySql();
    
    $sql    =   'select id,username from user_daili where 1=1';
    $res    =   $con->query($sql);
    $users  =   array();
    while($row  =   mysql_fetch_array($res)){
        $uid    =   $row['id'];
        $name   =   $row['username'];
        $users[$uid]    =   $name;
    }
    
    $statuses   =   array(0=>'��ֵ��', '1'=>'��ֵ�ɹ�', '2'=>'��ֵʧ��', '3'=>'�ȴ���ֵ');
    
    
    $start  =   strtotime('2016-06-01');
    $end    =   strtotime('2016-06-30 23:59:59');
    $sql    =   "SELECT sjh,zt,shje,istk,uid  FROM `liuliangdaili_log` WHERE `createtime` between '{$start}' and '{$end}' order by createtime desc";
    $res    =   $con->query($sql);
    $excel  =   new ExportDataExcel('browser', "6��".".xls");
    $excel->initialize();
    
    while($row  =   mysql_fetch_array($res)){
        $phone  =   $row['sjh'];
        $zt  =   $row['zt'];
        $uid    =   $row['uid'];
        $money  =   $row['shje'];
        $istk   =   $row['istk'];
        $status =   $statuses[$zt];
        $tkStatus   =   '�ѿۿ�';
        if($istk == 1){
            $tkStatus   =   '�ѷ���';
        }else if($zt == 2){
            $tkStatus   =   '�ȴ�����';
        }
        
        $status =   iconv('GBK', 'utf-8', $status);
        $tkStatus =   iconv('GBK', 'utf-8', $tkStatus);
        
        $phone =   iconv('GBK', 'utf-8', $phone);
        $money =   iconv('GBK', 'utf-8', $money);
        
        $user   =   $users[$uid];
        $user =   iconv('GBK', 'utf-8', $user);
        $tdarr  =   array($user, $phone, $money, $status, $tkStatus);
        $excel->addRow($tdarr);
    }
    $excel->finalize();
    exit();
?>