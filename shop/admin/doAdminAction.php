<?php
require_once '../include.php';
$act = $_REQUEST ['act'];
$password1 = $_POST ['password1'];
$password2 = $_POST ['password2'];
$id = $_REQUEST['id'];
if ($act == "logout") {
	echo "<script>window.location='login.php';</script>";
}
if ($act == "addAdmin") {
	if($password1 == $password2)
	{
		addAdmin ();
	}
	else 
	{
		alertMes ( "�����������벻һ�£�����������", "admin_add.php" );
	}
} elseif ($act == "editAdmin") {
	editAdmin($id);
}elseif ($act == "delAdmin"){
	delAdmin($id);
}
