<?
if(empty($_SESSION["kefu_qx_cwgl"])){
	die("非法请求，你没有权限操作此功能!");
}
include template('dxchongzhi');
?>