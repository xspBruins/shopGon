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
		alertMes("�����������벻һ�£����������룡", "mem_add.php");
	}
}
if ($act == "delUser"){
	delUser($id);
}