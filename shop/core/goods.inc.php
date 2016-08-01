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
		alertMes("编辑成功！", "goods_sort.php");
	}else {
		alertMes("编辑失败！请重新编辑", "goods_sort.php");
	}
}

function delGoods_cate($id){
	if(delete("shop_cate","id={$id}")){
		alertMes("删除成功！", "goods_sort.php");
	}else{
		alertMes("删除失败！请重新删除", "goods_sort.php");
	}
}

function addGoods_cate(){
	$add = $_POST;
	//var_dump($add);
	//var_dump($_POST);
	if(insert("shop_cate", $add)){
		alertMes("添加成功！", "goods_sort.php");
	}else{
		alertMes("添加失败！请重新添加", "addGoods_cate.php");
	}
}