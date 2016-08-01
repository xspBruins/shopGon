<?php
function getAllPro(){
	$sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from shop_pro as p join shop_cate c on p.cId = c.id ";
	$rows = fetchAll($sql);
	return $rows;
}

function getAllImgByProId($id){
	$sql = "select albumPath from shop_album where pId = {$id}";
	$rows = fetchAll($sql);
	return $rows;
}

function addGoods() {
	$arr = $_POST;
	$arr ['pubTime'] = time ();
	//print_r($arr);
	$fileInfo = $_FILES ['pImg'];
	//print_r($fileInfo);
	$uploadfiles = uploadImg ( $fileInfo, "../admin/pro_image" );
	$res = insert ( "shop_pro", $arr );
	$pid = getInsertId ();
	if ($pid && $res) {
		$arr1 ['pId'] = $pid;
		$arr1 ['albumPath'] = $uploadfiles;
		addAlbum ( $arr1 );
		alertMes ( "添加成功!", "goods_list.php" );
	} else {   // 不成功就删除上传文件
		if (file_exists ( "../admin/pro_image/" . $uploadfiles )) {
			unlink ( "../admin/pro_image/" . $uploadfiles );
		}
		alertMes ( "添加失败，请重新添加!", "goods_add.php" );
	}
}

function delGoods($id){
	$where = "id={$id}";
	$res = delete("shop_pro",$where);
	$ProImgs = getAllImgByProId ( $id );
	if ($ProImgs && is_array ( $ProImgs )) {
		foreach ( $ProImgs as $ProImg ) {
			//print_r($ProImg['albumPath']);
			if (file_exists ( "../admin/pro_image/" . $ProImg ['albumPath'] )) {
				unlink ( "../admin/pro_image/" . $ProImg ['albumPath'] );
			}
		}
	}
	$where1 = "pId={$id}";
	$res1 = delete("shop_album",$where1);
	if ($res && $res1)
		alertMes ( "删除成功!", "goods_list.php" );
	else
		alertMes ( "删除失败，请重新删除!", "goods_list.php" );
}

function editGoods($id){
	$arr = $_POST;
	//print_r($arr);
	if (update("shop_pro", $arr,"id={$id}")){
		alertMes("编辑成功！", "Goods_list.php");
	}else {
		alertMes("编辑失败！请重新编辑", "editGoods.php");
	}
}

function addsFavour($id){
	$arr = $_POST;
	$where = "id={$id}";
	$sql = "select pFavour from shop_pro where id={$id}";
	$row = fetchOne($sql);
	$pFavour = $row['pFavour'];
	$pFavour = $pFavour+1;
	$arr['pFavour'] = $pFavour;
	//print_r($arr);
	update("shop_pro", $arr,$where);
	echo "<script>window.location='search.php';</script>";
}
