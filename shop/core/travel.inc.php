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
		alertMes ( "�����ɹ�!", "travel.php" );
	} else {   // ���ɹ���ɾ���ϴ��ļ�
		if (file_exists ( "../admin/tra_image/" . $uploadfiles )) {
			unlink ( "../admin/tra_image/" . $uploadfiles );
		}
		alertMes ( "���ʧ�ܣ����������!", "trupload.php" );
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