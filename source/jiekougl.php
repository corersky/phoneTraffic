<?
//��ȡ�ӿ��û���Ϣ
$sql="select * from `user_jiekou` where uid=".$_SESSION["uid"];
$re=$con->query($sql);
$jiekouuserinfo=mysql_fetch_array($re);
if(empty($jiekouuserinfo)){
		die("<script>alert('��������ӿ�');window.location.href='".XZKJURL."/user.php?action=jiekoushenqing';</script>");
}



//ǰ̨��ʾ������
$shili_php='<?
$url="'.XZKJURL.'/server/sendsms.php";
$data=array(
	"username"=>"����˺�",
	"pwd"=>"�������",
	"mobile"=>"�ֻ���",
	"content"=>"���Ƕ������ݡ�ǩ����"
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
private static final String uname = "����û���";
private static final String upwd = "�������";

public static void send(String msgContent, String mobile) throws Exception {
 
//�齨����
String straddr = addr + "?username="+uname+"&pwd="+upwd+"&mobile="+mobile+"&content="+msgContent;
 
StringBuffer sb = new StringBuffer(straddr);
System.out.println("URL:"+sb);
 
//��������
URL url = new URL(sb.toString());
HttpURLConnection connection = (HttpURLConnection) url.openConnection();
connection.setRequestMethod("POST");
BufferedReader in = new BufferedReader(new InputStreamReader(
url.openStream()));
 
//���ؽ��
String inputline = in.readLine();
System.out.println("Response:"+inputline);
 
}
 
 
public static void main(String[] args) {
try {
send("����", "�ֻ���");
} catch (Exception e) {
e.printStackTrace();
}
}
 
 
 
}';


$shili_asp='<%
httpsendurl="'.XZKJURL.'/server/sendsms.php"
data="username=�û���&pwd=����&mobile=�ֻ���&content=�������ݡ�ǩ����"
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