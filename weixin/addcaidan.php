<?
require_once("common.php");
$con=new MySql();
$access_token=tool_get_access_token();//获取access_token
//创建菜单
$button1=array("type"=>"view","url"=>"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxab652eb57a808500&redirect_uri=http://duanxin.xzkj168.cn/weixin/sendliuliang.php&response_type=code&scope=snsapi_base&state=sendliuliang#wechat_redirect","name"=>urlencode("点击充值"));
$button2=array("type"=>"view","url"=>"http://duanxin.xzkj168.cn/weixin/myinfo.php","name"=>urlencode("关于我们"));

$sub_button1=array("type"=>"view","url"=>"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxab652eb57a808500&redirect_uri=http://duanxin.xzkj168.cn/weixin/orderlist.php&response_type=code&scope=snsapi_base&state=orderlist#wechat_redirect","name"=>urlencode("充值状态查询"));
$sub_button2=array("type"=>"view","url"=>"http://duanxin.xzkj168.cn/weixin/g2.php","name"=>urlencode("功能2"));
$sub_button3=array("type"=>"view","url"=>"http://duanxin.xzkj168.cn/weixin/g3.php","name"=>urlencode("功能3"));

$button1=json_encode($button1);
$button1=json_decode($button1);
$button2=json_encode($button2);
$button2=json_decode($button2);

$sub_button1=json_encode($sub_button1);
$sub_button2=json_encode($sub_button2);
$sub_button3=json_encode($sub_button3);

$sub_button1=json_decode($sub_button1);
$sub_button2=json_decode($sub_button2);
$sub_button3=json_decode($sub_button3);



$arr=array(
	"button"=>array(
		$button1,
		array("name"=>urlencode("更多功能"),"sub_button"=>array(
			$sub_button1,
			$sub_button2,
			$sub_button3
		)),
		$button2
	)
);

$a=json_encode($arr);
$a=urldecode($a);
echo $a;
$url=APIURL."/menu/create?access_token=".$access_token;
$b=do_post($url, $a);

echo "<pre>";
var_dump($b);



echo "<he>";
$b=json_decode($b);
echo "<pre>";
print_r($b);
?>