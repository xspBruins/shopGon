<?php
date_default_timezone_set ( "PRC" );
function checkUserLogin(){
	if($_SESSION['uid']==""){
		alertMes("���ȵ�¼", "index.php");
	}
}

function checkUser($sql) {
	return fetchOne ( $sql );
}
function registerUser() {
	$add ['username'] = $_POST ['username'];
	$add ['password'] = md5 ( $_POST ['password1'] );
	$add ['email'] = $_POST ['email'];
	$add ['mobile'] = $_POST ['mobile'];
	$add ['regTime'] = date ( 'Y-m-d' );
	
	// var_dump($add);
	if (insert ( "shop_user", $add )) {
		echo "<script>window.location='index.php';</script>";
	} else {
		alertMes ( "ע��ʧ�ܣ�������ע��!", "register.php" );
	}
}
function addUser() {
	$arr ['username'] = $_POST ['username'];
	$arr ['password'] = md5 ( $_POST ['password2'] );
	$arr ['email'] = $_POST ['email'];
	$arr ['mobile'] = $_POST ['mobile'];
	$arr ['regTime'] = date ( 'Y-m-d' );
	//var_dump ( $arr );
	if (insert ( "shop_user", $arr )) {
		//echo "<script>window.location='mem_list.php';</script>";
		alertMes("��ӳɹ���", "mem_list.php");
	} else {
		alertMes ( "���ʧ�ܣ����������!", "mem_add.php" );
	}
}

function getAllUser(){
	$sql = "select * from shop_user ";
	$rows = fetchAll($sql);
	return $rows;
}

function delUser($id){
	if(delete("shop_user","id={$id}")){
		alertMes("ɾ���ɹ���", "mem_list.php");
	}else {
		alertMes("ɾ��ʧ�ܣ�������ɾ��", "mem_list.php");
	}
}


