<?
//获取接口用户信息
$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$jiekouuserinfo=mysql_fetch_array($re);
if(empty($jiekouuserinfo)){
		die("<script>alert('请先申请接口');window.location.href='".XZKJURL."/user.php?action=jiekoushenqing';</script>");
}



//前台的示例代码
$shili_php='<?
$url="'.XZKJURL.'/server/sendsms.php";
$data=array(
	"username"=>"你的账号",
	"pwd"=>"你的密码",
	"mobile"=>"手机号",
	"content"=>"这是短信内容【签名】"
);

  $ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    curl_setopt($ch, CURLOPT_POST, TRUE); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($ch, CURLOPT_URL, $url);
    $ret = curl_exec($ch);
 	curl_close($ch);

var_dump($ret );
?>';

$shili_java='
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
public class SMSTest {
 
private static final String addr = "'.XZKJURL.'/server/sendsms.php";
private static final String uname = "你的用户名";
private static final String upwd = "你的密码";

public static void send(String msgContent, String mobile) throws Exception {
 
//组建请求
String straddr = addr + "?username="+uname+"&pwd="+upwd+"&mobile="+mobile+"&content="+msgContent;
 
StringBuffer sb = new StringBuffer(straddr);
System.out.println("URL:"+sb);
 
//发送请求
URL url = new URL(sb.toString());
HttpURLConnection connection = (HttpURLConnection) url.openConnection();
connection.setRequestMethod("POST");
BufferedReader in = new BufferedReader(new InputStreamReader(
url.openStream()));
 
//返回结果
String inputline = in.readLine();
System.out.println("Response:"+inputline);
 
}
 
 
public static void main(String[] args) {
try {
send("内容", "手机号");
} catch (Exception e) {
e.printStackTrace();
}
}
 
 
 
}';


$shili_asp='<%
httpsendurl="'.XZKJURL.'/server/sendsms.php"
data="username=用户名&pwd=密码&mobile=手机号&content=短信内容【签名】"
Set xmlObj = server.CreateObject("Microsoft.XMLHTTP")
xmlObj.Open "post",httpsendurl,false
xmlObj.setRequestHeader "CONTENT-TYPE", "application/x-www-form-urlencoded" 
xmlObj.send(data)
status = xmlObj.responseText
Set xmlObj = nothing

%>';


$shili_js='123';
include template('jiekougl');
?>