<?php
function checkAdmin($sql){
	return fetchOne($sql);
	
}

function checkLogin(){
	if($_SESSION['adminId']==""){
		alertMes("���ȵ�¼", "login.php");
	}
}

function addAdmin(){
	$add['username'] = $_POST['username'];
	$add['password'] = md5($_POST['password2']);
	$add['email'] = $_POST['email'];
	//var_dump($add);
	//var_dump($_POST);
	if(insert("shop_admin", $add)){
		alertMes("��ӳɹ���", "admin.php");
	}else{
		alertMes("���ʧ�ܣ����������", "admin_add.php");
	}
}

function getAllAdmin(){
	$sql = "select id,username,email from shop_admin";
	$rows = fetchAll($sql);
	return $rows;
}

function editAdmin($id){
	//var_dump($_POST);
	$arr = $_POST;
	if (update("shop_admin", $arr,"id={$id}")){
		alertMes("�༭�ɹ���", "admin.php");
	}else {
		alertMes("�༭ʧ�ܣ������±༭", "admin.php");
	}
}

function delAdmin($id){
	if(delete("shop_admin","id={$id}")){
		alertMes("ɾ���ɹ���", "admin.php");
	}else {
		alertMes("ɾ��ʧ�ܣ�������ɾ��", "admin.php");
	}
}
