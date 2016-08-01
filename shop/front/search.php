<?php 
require_once '../include.php';
$keywords = $_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where = $keywords?"where p.pName like '%{$keywords}%'":null;
$sql = "select p.id,p.pName,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,p.rDay,p.pFavour,c.cName from shop_pro as p join shop_cate c on p.cId = c.id {$where} order by p.pubTime desc ";
$rows = fetchAll ( $sql );
//print_r($rows);
if (! $rows) {
	alertMes ( "���޲�Ʒ����͹��԰�����", "index.php" );
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>˵Go�͹�</title>
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
					<li><a href="index.php">��ҳ</a></li>
					<li><a href="travel.php">��Ҫȥ����</a></li>
					<li class="active"><a href="search.php">��ҪѰ����</a></li>
					<li><a href="trupload.php">����/��������</a></li>
					<li><a href="#">���ڡ�˵Go�͹���</a></li>
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
									onblur="if(this.value=='')value='- ���� ��Ʒ  -';"
									onfocus="if(this.value=='- ���� ��Ʒ -')value='';"
									onkeypress="search(event)" value="- ���� ��Ʒ -" size="10" /></td>
								<td><input type="image" width="21" height="17"
									class="searchaction" onclick="imgSearch()" alt="Search"
									src="images/magglass.gif" border="0" hspace="2" /></td>
							</tr>
						</table></li>
					<li><a href="javascript:void(0);"
						onclick="refresh_new();return false;">����</a></li>
					<li><a href="javascript:void(0);"
					    onclick="refresh_hot();return false;">����</a></li>
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
							ʣ�����: <span><?php echo $row['pNum'];?></span>
						</p>
						<p class="news">
							ʣ��ʱ��: <span><?php echo $row['rDay'];?>��</span>
						</p>
					</div>
					<!--��Ϣ-->


					<div class="tr-btm">
						<a href="#"><h3><?php echo $row['pName'];?></h3></a>
						<p calss="desc"><?php echo $row['pDesc'];?></p>
						<p class="news">
							���ǵļ۸�: <span>$<?php echo $row['iPrice'];?></span> <b>|</b>�����۸�: <span>$<?php echo $row['mPrice'];?></span>
						</p>
						<ul>
							<li><a href="javascript:void()0;" onclick="addsFavour(<?php echo $row['id'];?>);return false;"><span class="zan"></span></a><label><?php echo $row['pFavour'];?></label></li>
							<li><a href="#"><span class="dis"></span></a><label>����</label></li>
							<li><a href="#"><span class="xin"></span></a><label>˽��</label></li>
							<li><a href="#"><span class="zhuan"></span></a><label>ת��</label></li>
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
	if(et.keyCode == 13){ //�����»س�
		var val = document.getElementById("search").value;
		window.location="search.php?keywords="+val;
	}
}
function imgSearch(){
	var val = document.getElementById("search").value;
	window.location="search.php?keywords="+val;
}

//����XMLHttpRequest���� 
var XMLHttpReq; 
function createXMLHttpRequest() {
	if(window.XMLHttpRequest) { //Mozilla ����� 
		XMLHttpReq = new XMLHttpRequest(); 
		} else if (window.ActiveXObject) { // IE����� 
			try { 
				XMLHttpReq = new ActiveXObject("Msxml2.XMLHTTP"); 
				} catch (e) {
					try { 
						XMLHttpReq = new ActiveXObject("Microsoft.XMLHTTP"); 
						} catch (e) {} 
						} 
				} 
	} 
//����������,ˢ������ 
function refresh_new() { 
	createXMLHttpRequest(); 
	var url = "search.php";
	XMLHttpReq.open("POST", url, true); 
	XMLHttpReq.onreadystatechange = processResponse;//ָ����Ӧ���� 
	XMLHttpReq.send(null); // �������� 
	} 
//��������Ϣ���� 
function processResponse() { 
	if (XMLHttpReq.readyState == 4) { // �ж϶���״̬ 
		if (XMLHttpReq.status == 200) { // ��Ϣ�Ѿ��ɹ����أ���ʼ������Ϣ 
			DisplayNew(); 
			setTimeout("refresh_new()",2000); //�����Զ�ˢ��ʱ�䣬�����Ǻ��룬��2��//RemoveRow(); 
			} else { //ҳ�治���� 
				alert("���������ҳ�����쳣��"); 
				} 
		} 
	} 
function DisplayNew(){
	/*var theDate = XMLHttpReq.responseText ;
	result.innerHTML = theDate ;*/
	window.location="doRefresh.php?act=new";
	window.location.reload();
}

//����������,ˢ������ 
function refresh_hot() { 
	createXMLHttpRequest(); 
	var url = "search.php";
	XMLHttpReq.open("POST", url, true); 
	XMLHttpReq.onreadystatechange = processResponse;//ָ����Ӧ���� 
	XMLHttpReq.send(null); // �������� 
	} 
//��������Ϣ���� 
function processResponse() { 
	if (XMLHttpReq.readyState == 4) { // �ж϶���״̬ 
		if (XMLHttpReq.status == 200) { // ��Ϣ�Ѿ��ɹ����أ���ʼ������Ϣ 
			DisplayHot(); 
			setTimeout("refresh_hot()",2000); //�����Զ�ˢ��ʱ�䣬�����Ǻ��룬��2��//RemoveRow(); 
			} else { //ҳ�治���� 
				alert("���������ҳ�����쳣��"); 
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