<?php
require_once '../include.php';
checkLogin();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>说Go就购 - 网站后台管理中心</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="description" content="说Go就购网站后台管理系统" />
    <meta name="keywords" content="说Go就购,网站管理系统" />
    <meta name="Author" content="说Go就购" />
    <meta name="CopyRight" content="说Go就购" />
</head>
<frameset rows="64,*"  frameborder="no" border="0" framespacing="0">
    <!--头部-->
    <frame src="top.php" name="top" noresize="noresize" frameborder="0"  scrolling="no" marginwidth="0" marginheight="0" />
    <!--主体部分-->
    <frameset cols="185,*">
        <!--主体左部分-->
        <frame src="left.php" name="left" noresize="noresize" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" />
        <!--主体右部分-->
        <frame src="main.php" name="main" frameborder="0" scrolling="auto" marginwidth="0" marginheight="0" />
</frameset><noframes></noframes>
</html>