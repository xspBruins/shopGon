<?php
require_once '../include.php';
$act = $_REQUEST['act'];
if(act == "new"){
	$sql = "select p.id,p.pName,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,p.rDay,p.pFavour,c.cName from shop_pro as p join shop_cate c on p.cId = c.id order by p.pubTime desc ";
	$rows = fetchAll($sql);
	if (! $rows) {
		alertMes ( "您请求的页面异常!", "index.php" );
	}
}
if(act == "hot"){
	$sql = "select p.id,p.pName,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,p.rDay,p.pFavour,c.cName from shop_pro as p join shop_cate c on p.cId = c.id where p.isHot=1 order by p.pubTime desc ";
	$rows = fetchAll($sql);
	if (! $rows) {
		alertMes ( "您请求的页面异常!", "index.php" );
	}
}
