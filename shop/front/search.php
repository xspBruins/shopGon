<?php 
require_once '../include.php';
$keywords = $_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where = $keywords?"where p.pName like '%{$keywords}%'":null;
$sql = "select p.id,p.pName,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,p.rDay,p.pFavour,c.cName from shop_pro as p join shop_cate c on p.cId = c.id {$where} order by p.pubTime desc ";
$rows = fetchAll ( $sql );
//print_r($rows);
if (! $rows) {
	alertMes ( "暂无产品，请客官稍安勿躁", "index.php" );
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>说Go就购</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href='http://fonts.googleapis.com/css?family=Istok+Web'
	rel='stylesheet' type='text/css'>
<link href="css/search.css" rel="stylesheet" type="text/css" />
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
					<li class="active"><a href="search.php">我要寻代购</a></li>
					<li><a href="trupload.php">旅游/代购发布</a></li>
					<li><a href="#">关于“说Go就购”</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="tr_wrap">
		<div class="header">
			<div class="select">
				<ul>
					<li><table border="0" align="center" cellpadding="0"
							cellspacing="0" class="tab_search">
							<tr>
								<td><input type="text" name="q" title="Search"
									class="searchinput" id="search"
									onkeydown="if (event.keyCode==13) {}"
									onblur="if(this.value=='')value='- 搜索 商品  -';"
									onfocus="if(this.value=='- 搜索 商品 -')value='';"
									onkeypress="search(event)" value="- 搜索 商品 -" size="10" /></td>
								<td><input type="image" width="21" height="17"
									class="searchaction" onclick="imgSearch()" alt="Search"
									src="images/magglass.gif" border="0" hspace="2" /></td>
							</tr>
						</table></li>
					<li><a href="javascript:void(0);"
						onclick="refresh_new();return false;">最新</a></li>
					<li><a href="javascript:void(0);"
					    onclick="refresh_hot();return false;">最热</a></li>
				</ul>
			</div>
		</div>
		<div class="clear tr_clear">
			<hr
				style="FILTER: alpha(opacity =   100, finishopacity =   0, style =   3)"
				width="100%" color=#987cb9 SIZE=3>
		</div>

		<?php 
		foreach ($rows as $row):
		$proImg = getProImgById($row['id']);
		?>
		<div class="tr-ads">
			<div class="tr_content">
				<div class="tr">
					<a href="#"><img
						src="../admin/pro_image/<?php echo $proImg['albumPath'];?>" /></a>
					<div class="news-in">
						<p class="news">
							剩余件数: <span><?php echo $row['pNum'];?></span>
						</p>
						<p class="news">
							剩余时间: <span><?php echo $row['rDay'];?>天</span>
						</p>
					</div>
					<!--信息-->


					<div class="tr-btm">
						<a href="#"><h3><?php echo $row['pName'];?></h3></a>
						<p calss="desc"><?php echo $row['pDesc'];?></p>
						<p class="news">
							我们的价格: <span>$<?php echo $row['iPrice'];?></span> <b>|</b>官网价格: <span>$<?php echo $row['mPrice'];?></span>
						</p>
						<ul>
							<li><a href="javascript:void()0;" onclick="addsFavour(<?php echo $row['id'];?>);return false;"><span class="zan"></span></a><label><?php echo $row['pFavour'];?></label></li>
							<li><a href="#"><span class="dis"></span></a><label>评论</label></li>
							<li><a href="#"><span class="xin"></span></a><label>私信</label></li>
							<li><a href="#"><span class="zhuan"></span></a><label>转发</label></li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php endforeach;?>

	</div>
</body>
<script type="text/javascript">
function search(et){
	if(et.keyCode == 13){ //代表按下回车
		var val = document.getElementById("search").value;
		window.location="search.php?keywords="+val;
	}
}
function imgSearch(){
	var val = document.getElementById("search").value;
	window.location="search.php?keywords="+val;
}

//创建XMLHttpRequest对象 
var XMLHttpReq; 
function createXMLHttpRequest() {
	if(window.XMLHttpRequest) { //Mozilla 浏览器 
		XMLHttpReq = new XMLHttpRequest(); 
		} else if (window.ActiveXObject) { // IE浏览器 
			try { 
				XMLHttpReq = new ActiveXObject("Msxml2.XMLHTTP"); 
				} catch (e) {
					try { 
						XMLHttpReq = new ActiveXObject("Microsoft.XMLHTTP"); 
						} catch (e) {} 
						} 
				} 
	} 
//发送请求函数,刷新最新 
function refresh_new() { 
	createXMLHttpRequest(); 
	var url = "search.php";
	XMLHttpReq.open("POST", url, true); 
	XMLHttpReq.onreadystatechange = processResponse;//指定响应函数 
	XMLHttpReq.send(null); // 发送请求 
	} 
//处理返回信息函数 
function processResponse() { 
	if (XMLHttpReq.readyState == 4) { // 判断对象状态 
		if (XMLHttpReq.status == 200) { // 信息已经成功返回，开始处理信息 
			DisplayNew(); 
			setTimeout("refresh_new()",2000); //设置自动刷新时间，这里是毫秒，即2秒//RemoveRow(); 
			} else { //页面不正常 
				alert("您所请求的页面有异常。"); 
				} 
		} 
	} 
function DisplayNew(){
	/*var theDate = XMLHttpReq.responseText ;
	result.innerHTML = theDate ;*/
	window.location="doRefresh.php?act=new";
	window.location.reload();
}

//发送请求函数,刷新最热 
function refresh_hot() { 
	createXMLHttpRequest(); 
	var url = "search.php";
	XMLHttpReq.open("POST", url, true); 
	XMLHttpReq.onreadystatechange = processResponse;//指定响应函数 
	XMLHttpReq.send(null); // 发送请求 
	} 
//处理返回信息函数 
function processResponse() { 
	if (XMLHttpReq.readyState == 4) { // 判断对象状态 
		if (XMLHttpReq.status == 200) { // 信息已经成功返回，开始处理信息 
			DisplayHot(); 
			setTimeout("refresh_hot()",2000); //设置自动刷新时间，这里是毫秒，即2秒//RemoveRow(); 
			} else { //页面不正常 
				alert("您所请求的页面有异常。"); 
				} 
		} 
	} 
function DisplayHot(){
	/*var theDate = XMLHttpReq.responseText ;
	result.innerHTML = theDate ;*/
	window.location="doRefresh.php?act=hot";
	window.location.reload();
}

function addsFavour(id){
	window.location="doAddFavour.php?act=addsFavour&id="+id;
}
</script>


</html>