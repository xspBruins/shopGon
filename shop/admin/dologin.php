<?php
require_once '../include.php';
// session_start();
$username = $_POST ['username'];
$password = md5($_POST ['password']);
$verify = $_POST ['verify'];
$verify1 = $_SESSION ['verify'];

if ($verify == $verify1) {
	$sql = "select * from shop_admin where username='{$username}' and password='{$password}'";
	$row = checkAdmin ( $sql );
	if ($row) {
		$_SESSION ['adminName'] = $row ['username'];
		$_SESSION ['adminId'] = $row ['id'];
		//header ( "loaction:index.php" );
		echo "<script>window.location='index.php';</script>";
	} else {
		alertMes ( "登录失败，重新登录", "login.php" );
	}
} else {
	alertMes ( "验证码错误", "login.php" );
}