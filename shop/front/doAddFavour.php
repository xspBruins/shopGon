<?php
require_once '../include.php';
$id = $_REQUEST['id'];
$act = $_REQUEST['act'];

if($act == "addsFavour"){
	addsFavour($id);
}
if($act == "addtFavour"){
	addtFavour($id);
}