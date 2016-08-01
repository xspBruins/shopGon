<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>说Go就购注册</title>
<link rel="stylesheet" type="text/css" href="css/register.css" />
<style type="text/css">
#wizard {
	border:1px solid #789;
	font-size:12px;
	height:400px;
	margin:20px auto;
	width:600px;
	overflow:hidden;
	position:relative;
	border-radius:10px;
	}
#wizard .items{width:20000px; clear:both; position:absolute;}
#wizard .right{float:right;}
#wizard #status{height:35px;background:#123;padding-left:25px !important;}
#wizard #status li{ font-size:14px; font-family:"微软雅黑";}
#status li{float:left;color:#fff;padding:10px 60px;}
#status li.active{background-color:#369;font-weight:normal;}
.input{width:240px; height:18px; margin:10px auto; line-height:20px; border:1px solid #d3d3d3; padding:2px}
.page{padding:20px 30px;width:600px;float:left;}
.page h3{height:42px; font-size:16px; border-bottom:1px dotted #ccc; margin-bottom:20px; padding-bottom:5px}
.page h3 em{font-size:12px; font-weight:500; font-style:normal}
.page p{line-height:24px;}
.page p label{font-size:14px; display:block;}
.btn_nav{height:36px; line-height:36px; margin:20px auto; margin-right:60px;}
.prev,.next{width:100px; height:32px; line-height:32px; background:url(btn_bg.gif) repeat-x bottom; border:1px solid #d3d3d3; cursor:pointer}
</style>
<script type="text/javascript" src="registerjs/jquery.min.js"></script>
<script type="text/javascript"  src="registerjs/scrollable.js"></script>
</head>

<body>

<div id="main">
   <h2 class="top_title">欢迎用户注册</h2>
   <form action="doRegisterAction.php?act=register" method="post">
	<div id="wizard">
		<ul id="status">
			<li class="active"><strong>1.</strong>创建账户</li>
			<li><strong>2.</strong>填写联系信息</li>
			<li><strong>3.</strong>完成</li>
		</ul>

		<div class="items">
			<div class="page">
               <h3>创建一个账户<br/><em>请填写您的注册账户信息，用于登录。</em></h3>
               <p><label>用户名：</label><input type="text" class="input" id="user" name="username" /></p>
               <p><label>密码：</label><input type="password" class="input" id="pass" name="password" /></p>
               <p><label>确认密码：</label><input type="password" class="input" id="pass1" name="password1" /></p>
               <div class="btn_nav">
                  <input type="button" class="next right" value="下一步&raquo;" />
               </div>
            </div>
			<div class="page">
               <h3>填写联系信息<br/><em>请告诉我们您的联系方式。</em></h3>
               <p><label>E-mail：</label><input type="text" class="input" id="email" name="email" /></p>
               <p><label>手机号码：</label><input type="text" class="input" id="mobile" name="mobile" /></p>
               <div class="btn_nav">
                  <input type="button" class="prev" style="float:left" value="&laquo;上一步" />
                  <input type="button" class="next right" value="下一步&raquo;" />
               </div>
            </div>
			<div class="page">
               <h3>完成注册<br/><em>点击确定完成注册。</em></h3>
               <h4>“说Go就购”欢迎您！</h4>
               <p>请点击“确定”按钮完成注册。</p>
               <br/>
               <br/>
               <br/>
               <div class="btn_nav">
                  <input type="button" class="prev" style="float:left" value="&laquo;上一步" />
                  <input type="submit" class="next right" id="sub" value="确定" />
               </div>
            </div>
		</div><!--items-->
	</div><!--wizard-->
</form><br />
</div>

<script type="text/javascript">
$(function(){
	$("#wizard").scrollable({
		onSeek: function(event,i){
			$("#status li").removeClass("active").eq(i).addClass("active");
		},
		onBeforeSeek:function(event,i){
			if(i==1){
				var user = $("#user").val();
				if(user==""){
					alert("请输入用户名！");
					return false;
				}
				
				var pass = $("#pass").val();
				var pass1 = $("#pass1").val();
				if(pass==""){
				    alert("请输入密码！");
					return false;
				}
				if(pass1 != pass){
				    alert("两次密码不一致！");
					return false;
				}
				
			}
		}
	});
	/*$("#sub").click(function(){
		var data = $("form").serialize();
		alert(data);
	});*/
	$("#sub").click(function(){
		window.location.href="index.php";
		});
});
</script>

</div>
</body>
</html>
