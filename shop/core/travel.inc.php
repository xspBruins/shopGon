<?php
function doUpload(){
	$arr = $_POST;
	$arr['pubTime'] = time();
	//print_r($arr);
	$fileInfo = $_FILES['tAlbumPath'];
	//print_r($fileInfo);
	$uploadfiles = uploadImg ( $fileInfo, "../admin/tra_image" );
	$arr['tAlbumPath'] = $uploadfiles;
	//print_r($uploadfiles);
	$res = insert ( "shop_travel", $arr );
	$pid = getInsertId ();
	if ($pid && $res) {
		alertMes ( "发布成功!", "travel.php" );
	} else {   // 不成功就删除上传文件
		if (file_exists ( "../admin/tra_image/" . $uploadfiles )) {
			unlink ( "../admin/tra_image/" . $uploadfiles );
		}
		alertMes ( "添加失败，请重新添加!", "trupload.php" );
	}
}

function addtFavour($id){
	$arr = $_POST;
	$where = "id={$id}";
	$sql = "select tFavour from shop_travel where id={$id}";
	$row = fetchOne($sql);
	$tFavour = $row['tFavour'];
	$tFavour = $tFavour+1;
	$arr['tFavour'] = $tFavour;
	//print_r($arr);
	update("shop_travel", $arr,$where);
	echo "<script>window.location='travel.php';</script>";
}