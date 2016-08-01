<?php
function addAlbum($arr){
	insert("shop_album", $arr);
}

function getProImgById($id){
	$sql = "select albumPath from shop_album where pId={$id} limit 1";
	$row = fetchOne($sql);
	return $row;

}