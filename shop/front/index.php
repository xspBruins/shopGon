<?php 
require_once '../include.php';
$rows = getAllGoods();
if(!$rows){
	alertMes("��Ǹ����û����Ӧ����...", "index.php");
}
$sql = "select * from shop_hot";
$hotrows = fetchAll($sql);
if(!$hotrows){
	alertMes("��Ǹ����û����Ӧ��Ʒ...", "index.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>˵Go�͹�</title>	
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/login.css" type="text/css" rel="stylesheet" />
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.min.js" type="text/javascript"></script>

<script src="focusjs/myfocus-2.0.1.min.js" type="text/javascript"></script>
<script src="focusjs/mf-pattern/mF_taobao2010.js" type="text/javascript"></script>
<link href="focusjs/mf-pattern/mF_taobao2010.css" type="text/css" rel="stylesheet"/>

<!--<script src="sortjs/jquery.min.js" type="text/javascript"></script>-->

<script type="text/javascript">
$(document).ready(function(){
	var k=!0;

	$(".loginmask").css("opacity",0.8);
	
	if($.browser.version <= 6){
		$('#reg_setp,.loginmask').height($(document).height());
	}
	
	$(".thirdlogin ul li:odd").css({marginRight:0});	
	
	$(".openlogin").click(function(){
		k&&"0px"!=$("#loginalert").css("top")&& ($("#loginalert").show(),$(".loginmask").fadeIn(500),$("#loginalert").animate({top:0},400,"easeOutQuart"))
	});
	
	$(".loginmask,.closealert").click(function(){
		k&&(k=!1,$("#loginalert").animate({top:-600},400,"easeOutQuart",function(){$("#loginalert").hide();k=!0}),$(".loginmask").fadeOut(500))
	});
	
	
	$("#sigup_now,.reg a").click(function(){
		$("#reg_setp,#setp_quicklogin").show();
		$("#reg_setp").animate({left:0},500,"easeOutQuart")
	});																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
	
	$(".back_setp").click(function(){
		"block"==$("#setp_quicklogin").css("display")&&$("#reg_setp").animate({left:"100%"},500,"easeOutQuart",function(){$("#reg_setp,#setp_quicklogin").hide()})
	});
	
}); 
</script>

<script type="text/javascript">
myFocus.set({
	id:'main-ad',
	pattern:'mF_taobao2010',
	time:3,
	trigger:'click'
	});
</script><!--����ͼ����-->

</head>
<body>
<div class="header_top">

<div id="header">
	<ul class="login fr">
		<li class="openlogin">
		<?php 
		if(isset($_SESSION['uname'])){
		echo $_SESSION['uname'];
		}elseif (isset($_COOKIE['userName'])){
        echo $_COOKIE['userName'];
        }
		?>
		<a href="javascript:void(0);">��¼</a></li>
        <li>|</li>
		<li class="reg"><a href="register.php">ע��</a></li>
	</ul>
</div>

<div class="loginmask"></div>

<div id="loginalert">
	
	<div class="pd20 loginpd">
		<h3><i class="closealert fr"></i><div class="clear"></div></h3>
		<div class="loginwrap">
			<div class="loginh">
				<div class="fl">��Ա��¼</div>
				<div class="fr">��û���˺�<a id="sigup_now" href="register.php">����ע��</a></div>
			</div>
			<h3><span class="fl">����/�û�����¼</span><div class="clear"></div></h3>
			<form action="domainlogin.php" method="post" id="login_form">
				<div class="logininput">
					<input type="text" name="uname" class="loginusername" value="" placeholder="�û���" />
					<input type="password" name="pword" class="loginuserpasswordt" value="" placeholder="����" />
					<!-- <input type="password" name="password" class="loginuserpasswordp" style="display:none" /> -->
				</div>
				<div class="loginbtn">
					<div class="loginsubmit fl"><input type="submit" value="��¼" class="btn" /></div>
					<div class="fl" style="margin:26px 0 0 0;"><input id="bcdl" name="autoflag" type="checkbox" checked="true" />���ֵ�¼</div>
					<div class="fr" style="margin:26px 0 0 0;"><a href="javascript:void(0);">��������?</a></div>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="thirdlogin">
		<div class="pd50">
			<h4>�õ������ʺ�ֱ�ӵ�¼</h4>
			<ul>
				<li id="sinal"><a href="http://d.weibo.com/">΢���˺ŵ�¼</a></li>
				<li id="qql"><a href="http://openapi.qzone.qq.com/oauth/qzoneoauth_authorize?oauth_consumer_key=220387&oauth_token=3441217780361590120&oauth_callback=http%3A%2F%2Fwww.ctsgz.cn%2Fqq%2Fcallback%2Fuser">QQ�˺ŵ�¼</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	
</div><!--loginalert end-->

<div class="wrap">
	<div class="logo">
		<a href="#"><img src="images/logo1.png" alt=""/></a>
	</div>
	<div class="menu">
		<ul>
			<li class="active"><a href="index.php">��ҳ</a></li>
			<li><a href="travel.php">��Ҫȥ����</a></li>
			<li><a href="search.php">��ҪѰ����</a></li>
			<li><a href="trupload.php">����/��������</a></li>
			<li><a href="contact.php">���ڡ�˵Go�͹���</a></li>
		</ul>
	</div>
<div class="clear"></div>
</div>
</div>

<div class="wrap">
  <div class="main-con">
  <div class="header">
  
   <div class=" possible-about">
     <h4>��ͬ���ң�</h4>
     
     <div class="tab1">
      <ul class="place">
          
          <li class="sort"><span>���</span> ��</li>
          <li class="by"><img src="images/do.png" alt=""></li>
              <div class="clearfix"> </div>
      </ul>
      <div class="single-bottom">
          <?php foreach ($rows as $row):?>
          <a href="#">
              <input type="checkbox"  id="brand" value="">
              <label for="brand"><span></span><b><?php echo $row['cName'];?></b></label>
          </a>
          <?php endforeach;?>			
	  </div>
    </div><!--tab1-->
    
    <div class="tab2">
      <ul class="place">
          
          <li class="sort"><span>�Ĵ�����</span> ��</li>
          <li class="by"><img src="images/do.png" alt=""></li>
              <div class="clearfix"> </div>
      </ul>
      <div class="single-bottom">
          <?php foreach ($rows as $row):?>
          <a href="#">
              <input type="checkbox"  id="brand" value="">
              <label for="brand"><span></span><b><?php echo $row['cName'];?></b></label>
          </a>
          <?php endforeach;?>				
	  </div>
    </div><!--tab2-->
    
    <div class="tab4">
      <ul class="place">
          
          <li class="sort"><span>����</span> ��</li>
          <li class="by"><img src="images/do.png" alt=""></li>
              <div class="clearfix"> </div>
      </ul>
      <div class="single-bottom">
         <?php foreach ($rows as $row):?>
          <a href="#">
              <input type="checkbox"  id="brand" value="">
              <label for="brand"><span></span><b><?php echo $row['cName'];?></b></label>
          </a>
          <?php endforeach;?>				
	  </div>
    </div><!--tab4-->
    
      <!--script �����б�-->
      <script>
		$(document).ready(function(){
			$(".tab1 .single-bottom").hide();
			$(".tab2 .single-bottom").hide();
			$(".tab3 .w_nav2").hide();
			$(".tab4 .single-bottom").hide();
			$(".tab5 .star-at").hide();
			$(".tab1 ul").click(function(){
				$(".tab1 .single-bottom").slideToggle(300);
				$(".tab2 .single-bottom").hide();
				$(".tab3 .w_nav2").hide();
				$(".tab4 .single-bottom").hide();
				$(".tab5 .star-at").hide();
			})
			$(".tab2 ul").click(function(){
				$(".tab2 .single-bottom").slideToggle(300);
				$(".tab1 .single-bottom").hide();
				$(".tab3 .w_nav2").hide();
				$(".tab4 .single-bottom").hide();
				$(".tab5 .star-at").hide();
			})
			$(".tab3 ul").click(function(){
				$(".tab3 .w_nav2").slideToggle(300);
				$(".tab4 .single-bottom").hide();
				$(".tab5 .star-at").hide();
				$(".tab2 .single-bottom").hide();
				$(".tab1 .single-bottom").hide();
			})
			$(".tab4 ul").click(function(){
				$(".tab4 .single-bottom").slideToggle(300);
				$(".tab5 .star-at").hide();
				$(".tab3 .w_nav2").hide();
				$(".tab2 .single-bottom").hide();
				$(".tab1 .single-bottom").hide();
			})	
			$(".tab5 ul").click(function(){
				$(".tab5 .star-at").slideToggle(300);
				$(".tab4 .single-bottom").hide();
				$(".tab3 .w_nav2").hide();
				$(".tab2 .single-bottom").hide();
				$(".tab1 .single-bottom").hide();
			})	
		});
	</script><!--script �����б�-->
   <div class="content-bottom-grid">
     <h3>����������</h3>
     <?php foreach ($hotrows as $hotrow):?>
     <div class="latest-grid">
      <div class="news">
          <a href="search.html"><img class="img-responsive" src="images/<?php echo $hotrow['albumPath'];?>" title="name" alt=""></a>
      </div>
      <div class="news-in">
          <h6><a href="single.html"><?php echo $hotrow['pName'];?></a></h6>
          <p><?php echo $hotrow['pDesc'];?> </p>
          <ul>
              <li>�����۸�: <span>$<?php echo $hotrow['mPrice'];?></span> </li><b>|</b><br/>
              <li>���Ǽ۸�: <span>$<?php echo $hotrow['iPrice'];?></span> </li><b>|</b><br/>
              <li>����: <span><?php echo $hotrow['pCountry'];?></span></li>
          </ul>
      </div>
      <div class="clear"> </div>
    </div>
    <?php endforeach;?>
   </div>

   </div>  <!--possible-about-->
      
    <div  style=" float:right; height:520px; width:0px; margin-right:45px; border-left:2px dashed #e1e1e1"></div>  <!--�ָ���-->
    <div id="main-ad">
      <div class="pic">
        <ul>
          <li><a href="#"><img src="images/ad1.jpg" thumb="" text="" /></a></li>
          <li><a href="#"><img src="images/ad2.jpg" thumb="" text="" /></a></li>
          <li><a href="#"><img src="images/ad3.jpg" thumb="" text="" /></a></li>
        </ul>
      </div>
    </div> <!--����ͼ-->
  
    <div class="wrap">
      <div class="main">
        <div class="content_top">
          <h3>�������´�ѧ---˵Go�͹�</h3>
          <span>�����������������һ�廯</span>
          <p>��û������������п�������Ҫ�������������İ���˵����
             ��û��������Լ������ж�һ��ƽ̨���Լ��Ŀ��ַ����ÿ���ˣ�
             �Ҵ����㣬�����Ǯ������˵Go�͹��ɣ�
             <a href="#"><img src="images/read_bullet.gif">read more</a>
          </p>
        </div>
      </div>
    </div>
    
  </div>
  </div>
</div>


</div>	
</body>
</html>

