<?php

function getAllGoods(){
	$sql = "select * from shop_cate";
	$rows = fetchAll($sql);
	return $rows;
}

function editGoods_cate($id){
    //var_dump($_POST);
	$arr = $_POST;
	if (update("shop_cate", $arr,"id={$id}")){
		alertMes("�༭�ɹ���", "goods_sort.php");
	}else {
		alertMes("�༭ʧ�ܣ������±༭", "goods_sort.php");
	}
}

function delGoods_cate($id){
	if(delete("shop_cate","id={$id}")){
		alertMes("ɾ���ɹ���", "goods_sort.php");
	}else{
		alertMes("ɾ��ʧ�ܣ�������ɾ��", "goods_sort.php");
	}
}

function addGoods_cate(){
	$add = $_POST;
	//var_dump($add);
	//var_dump($_POST);
	if(insert("shop_cate", $add)){
		alertMes("��ӳɹ���", "goods_sort.php");
	}else{
		alertMes("���ʧ�ܣ����������", "addGoods_cate.php");
	}
}