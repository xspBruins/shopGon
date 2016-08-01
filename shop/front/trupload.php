<?php
require_once '../include.php';
checkUserLogin ();
$rows = getAllGoods ();
if (! $rows) {
	alertMes ( "网站维护中，请稍后...", "index.php" );
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>说Go就购</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href='http://fonts.googleapis.com/css?family=Istok+Web'
	rel='stylesheet' type='text/css'>
<link href="css/trupload.css" rel="stylesheet" type="text/css" />
<link href="css/smohan.face.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/smohan.face.js" type="text/javascript"></script>
<script src="js/tabbed_pages.js" type="text/javascript"></script>
<!-- 上传文件按钮样式 -->
<style rel="stylesheet" type="text/css">
.file {
	position: relative;
	display: inline-block;
	background: #6C3;
	border: 1px solid #99D3F5;
	border-radius: 4px;
	padding: 4px 12px;
	overflow: hidden;
	color: #ffffff;
	text-decoration: none;
	text-indent: 0;
	line-height: 35px;
	width: 60px;
	height: 30px;
	font-size: 14px;
	margin-left: 450px;
}

.file input {
	position: absolute;
	font-size: 100px;
	right: 0;
	top: 0;
	opacity: 0;
}

.file:hover {
	background: #AADFFD;
	border-color: #78C3F3;
	color: #004974;
	text-decoration: none;
}
/**/
.imgFile {
	position: relative;
	display: inline-block;
	background: #6C3;
	border: 1px solid #99D3F5;
	border-radius: 4px;
	padding: 4px 12px;
	overflow: hidden;
	color: #ffffff;
	text-decoration: none;
	text-indent: 0;
	line-height: 35px;
	width: 60px;
	height: 30px;
	font-size: 14px;
	margin-left: 0px;
}

.imgFile input {
	position: absolute;
	font-size: 100px;
	right: 0;
	top: 0;
	opacity: 0;
}

.imgFile:hover {
	background: #AADFFD;
	border-color: #78C3F3;
	color: #004974;
	text-decoration: none;
}

</style>
</head>
<body>
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
				<a href="index.php"><img src="images/logo1.png" alt="" /></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">首页</a></li>
					<li><a href="travel.php">我要去旅行</a></li>
					<li><a href="search.php">我要寻代购</a></li>
					<li class="active"><a href="trupload.php">旅游/代购发布</a></li>
					<li><a href="#">关于“说Go就购”</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="tr_wrap" id="tr_wrap">

		<div id="gallery">
			<div class="off" title="user_info">
				<span>代购信息发布</span>
			</div>
			<div class="on" title="Smohan_FaceBox">
				<span>旅游心得发布</span>
			</div>
		</div>

		<div class="clear tr_clear">
			<hr
				style="FILTER: alpha(opacity =           100, finishopacity =           0, style =           3)"
				width="100%" color=#987cb9 SIZE=3>
		</div>
		<form action="doUploadTravel.php?act=doUpload" method="post"
			enctype="multipart/form-data">
			<div id="Smohan_FaceBox" class="show">
				<span>请输入标题：</span>
				<textarea name="tTitle" cols="36" rows="1" id="content"
					style="border: 1 solid #888888; LINE-HEIGHT: 18px; padding: 3px;"></textarea>

				<textarea name="tDesc" id="Smohan_text" class="smohan_text"></textarea>

				<p>
					<a href="javascript:void(0)" class="face" title="表情"></a>
					<button type="submit" class="button" id="Smohan_Showface">确定</button>
					<a href="javascript:void(0);" class="file">选择文件 <input type="file"
						name="tAlbumPath">
					</a>
				</p>
			</div>
		</form>

		<script type="text/javascript">
$(function (){
	$("a.face").smohanfacebox({
		Event : "click",	//触发事件	
		divid : "Smohan_FaceBox", //外层DIV ID
		textid : "Smohan_text" //文本框 ID
	});
	//解析表情  $('#Zones').replaceface($('#Zones').html());
});

</script>

		<form action="doUploadSearch.php" method="post" enctype="multipart/form-data">
			<div id="user_info" class="hide">
				<table>
					<tr>
						<th>商品类别：</th>
						<td>
						    <select name="cId">
								<option selected="true">请选择...</option>
                                 <?php foreach ($rows as $row):?>
                                 <option value="<?php echo $row['id'];?>"><?php echo $row['cName'];?></option>
                                 <?php endforeach;?>
                            </select>
                        </td>
					</tr>
					<tr>
						<th>商品名称 :</th>
						<td><input type="text" name="pName" value="" /></td>
					</tr>
					<tr>
						<th>货号 :</th>
						<td><input type="text" name="pSn" value=""></td>
					</tr>
					<tr>
						<th>数量 :</th>
						<td><input type="text" name="pNum" value=""></td>
					</tr>
					<tr>
						<th>产品描述 :</th>
						<td><input type="text" name="pDesc" value=""></td>
					</tr>
					<tr>
						<th>我的价格 :</th>
						<td><input type="text" name="iPrice" value=""></td>
					</tr>
					<tr>
						<th>剩余天数 :</th>
						<td><input type="text" name="rDay" value=""></td>
					</tr>
					<tr>
						<th>官网价格 :</th>
						<td><input type="text" name="mPrice" value=""></td>
					</tr>
					<tr>
					    <th>上传图片：</th>
					    <td><a href="javascript:void(0);" class="imgFile">上传图片 <input type="file" name="pImg"></a>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="确定"><input
							type="reset" value="重置"></td>
					</tr>
				</table>
			</div>
		</form>

	</div>
</body>

</html>