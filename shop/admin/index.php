<?php
require_once '../include.php';
checkLogin();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>˵Go�͹� - ��վ��̨��������</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="description" content="˵Go�͹���վ��̨����ϵͳ" />
    <meta name="keywords" content="˵Go�͹�,��վ����ϵͳ" />
    <meta name="Author" content="˵Go�͹�" />
    <meta name="CopyRight" content="˵Go�͹�" />
</head>
<frameset rows="64,*"  frameborder="no" border="0" framespacing="0">
    <!--ͷ��-->
    <frame src="top.php" name="top" noresize="noresize" frameborder="0"  scrolling="no" marginwidth="0" marginheight="0" />
    <!--���岿��-->
    <frameset cols="185,*">
        <!--�����󲿷�-->
        <frame src="left.php" name="left" noresize="noresize" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" />
        <!--�����Ҳ���-->
        <frame src="main.php" name="main" frameborder="0" scrolling="auto" marginwidth="0" marginheight="0" />
</frameset><noframes></noframes>
</html>