<?php
require_once '../include.php';
$act = $_REQUEST['act'];
$id = $_REQUEST['id'];

if($act == "editGoods_cate"){
	editGoods_cate($id);
}
if ($act == "delGoods_cate"){
	delGoods_cate($id);
}
if($act == "addGoods_cate"){
	addGoods_cate();
}
if($act == "addGoods"){
	addGoods();
}
if($act == "delGoods"){
	delGoods($id);
}
if($act == "editGoods"){
	editGoods($id);
}