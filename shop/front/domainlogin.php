<?php
require_once '../include.php';

$username = $_POST['uname'];
$password = md5($_POST['pword']);
$sql = "select * from shop_admin where username='{$username}' and password='{$password}'";
$row = checkUser($sql);
$autoflag = $_POST['autoflag'];

if($row){
	if($autoflag){
		setcookie("userId",$row['id'],time()+1*24*3600);
		setcookie("userName",$row['username'],time()+1*24*3600);
	}
	$_SESSION['uname'] = $row['username'];
	$_SESSION['uid'] = $row['id'];

	echo "<script>window.location='index.php';</script>";
}else {
	alertMes("µÇÂ¼Ê§°Ü£¡ÇëÖØÐÂµÇÂ½", "index.php");
}