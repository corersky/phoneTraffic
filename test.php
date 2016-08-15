<?php
$a  =   sendOrder('15343517949');
print_r($a);exit;
//a:4:{s:3:"sjh";s:11:"15343517949";s:5:"apizh";s:5:"xyzkj";s:6:"apipwd";s:7:"xyz6688";s:8:"liuliang";s:4:"1024";}

function sendOrder($phone){
    $arr    =   array('apizh'=>'xyzkj','apipwd'=>'xyz6688','sjh'=>$phone,'liuliang'=>1024,'sjhtype'=>2);
    $arr    =   http_build_query($arr);
    $url    =   'http://localhost/agent/liuliangserver.php';
    $contents   =   curl($url, $arr);
    return $contents;
}


//$url    =   'http://localhost/c3getstate.php';
//$arr    =   array('mobile'=>'15690790398','clientOrderId'=>'9047','time'=>'2015-01-08 15:33:10','status'=>'00000');;
//
//$vars   =   array(
//                0=>json_encode($arr)
//            );
            
function curl($url, $data){
    $ch	=	curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
    //curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($vars));
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    $content	=	curl_exec($ch);
    curl_close($ch);
    return $content;
}


?>