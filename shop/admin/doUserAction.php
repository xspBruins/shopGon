<?php
require_once '../include.php';

$act = $_REQUEST['act'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$id = $_REQUEST['id'];

if ($act == "addUser"){
	if ($password1 == $password2){
		addUser();
	}else {
		alertMes("两次输入密码不一致，请重新输入！", "mem_add.php");
	}
}
if ($act == "delUser"){
	delUser($id);
}