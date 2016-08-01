<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <link rel="stylesheet" type="text/css" href="./Style/skin.css" />
</head>
    <body>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!-- 头部开始 -->
            <tr>
                <td width="17" valign="top" background="./Images/mail_left_bg.gif">
                    <img src="./Images/left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="./Images/content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="././Images/content_bg.gif">
                        <tr><td height="31"><div class="title">欢迎界面</div></td></tr>
                    </table>
                </td>
                <td width="16" valign="top" background="./Images/mail_right_bg.gif"><img src="./Images/nav_right_bg.gif" width="16" height="29" /></td>
            </tr>
            <!-- 中间部分开始 -->
            <tr>
                <!--第一行左边框-->
                <td valign="middle" background="./Images/mail_left_bg.gif">&nbsp;</td>
                <!--第一行中间内容-->
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <!-- 空白行-->
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        <!--**********这里是内容**********-->
                        <!--**********这里是内容**********-->
                        <!--**********这里是内容**********-->
                        <!--**********这里是内容**********-->
                        <tr>
                            <!--左边内容-->
                            <td colspan="2" valign="top">
                                <h3 style="margin:0 0 10px 10px;">感谢您使用说Go就购 网站管理系统程序</h3>
                                <img src="./Images/ts.gif" width="16" height="16" style="margin-left:10px;"> 提示：<br />
                                <p style="text-indent:20px;line-height:25px;margin-left:10px;font-size:15px;">我带着你，<br /></p>
                                <p style="text-indent:20px;line-height:25px;margin-left:10px;font-size:15px;">你带着钱，<br /></p>
                                <p style="text-indent:20px;line-height:25px;margin-left:10px;font-size:15px;">我们说Go就购！<br /></p>
                            </td>
                            <!--间隔-->
                            <td width="7%">&nbsp;</td>
                            <!--右边内容-->
                            <td width="40%" valign="top">
                                <table width="100%" height="150" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC;">
                                    <tr>
                                        <td width="7%" height="27" background="./Images/news_title_bg.gif">
                                            <img src="./Images/news_title_bg.gif" width="2" height="27">
                                        </td>
                                        <td width="93%" background="./Images/news_title_bg.gif" class="left_bt">最新动态</td>
                                    </tr>
                                    <tr><td height="5" colspan="2">&nbsp;</td></tr>
                                    <tr>
                                        <td height="100" valign="top" colspan="2" id="news">
                                            <marquee direction="up" scrollamount="2" vspace="30px" width="400px" height="100px" onmouseout="this.start()" onmouseover="this.stop()">
                                                <ul>
                                                    <li>说Go就购网站管理系统！</li>
                                                    <li>说Go就购网站管理系统</li>
                                                    <li>说Go就购网站管理系统！</li>
                                                    <li>说Go就购网站管理系统</li>
                                                    <li>说Go就购网站管理系统！</li>
                                                </ul>
                                            </marquee>
                                        </td>
                                    </tr>
                                    <tr><td height="5" colspan="2">&nbsp;</td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="20"><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        <!--第二行-->
                        <tr>
                            <td colspan="2" valign="top">
                                <table width="100%" height="210" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC;">
                                    <tr>
                                        <td width="15%" background="./Images/news_title_bg.gif">
                                            <img src="./Images/news_title_bg.gif" width="2" height="27">
                                        </td>
                                        <td width="85%" background="./Images/news_title_bg.gif" class="left_bt">系统信息</td>
                                    </tr>
                                    <tr>
                                        <th>操作系统</th>
                                        <td height="35" ><?php echo PHP_OS;?></td>
                                    </tr>
                                    <tr>
                                        <th>Apache版本</th>
                                        <td height="35" ><?php echo apache_get_version();?></td>
                                    </tr>
                                    <tr>
                                        <th>PHP版本</th>
                                        <td height="35" ><?php echo PHP_VERSION;?></td>
                                    </tr>
                                    <tr>
                                        <th>运行方式</th>
                                        <td height="35" ><?php echo PHP_SAPI;?></td>
                                    </tr>
                                    
                                </table>
                            </td>
                            <td>&nbsp;</td>
                            <td valign="top">
                                <table width="100%" height="230" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC;">
                                    <tr>
                                        <td width="15%" background="./Images/news_title_bg.gif">
                                            <img src="./Images/news_title_bg.gif" width="2" height="27">
                                        </td>
                                        <td width="85%" height="27" background="./Images/news_title_bg.gif" class="left_bt">软件信息</td>
                                    </tr>
                                    <tr>
                                        <td height="27" valign="top">系统名称</td>
                                        <td height="27" valign="top">说Go就购团体网站</td>
                                    </tr>
                                    <tr>
                                        <td height="27" valign="top">开发团队</td>
                                        <td height="27" valign="top">HERE WE GO团队</td>      
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td background="./Images/mail_right_bg.gif">&nbsp;</td>
            </tr>
            <!-- 底部部分 -->
            <tr>
                <td valign="bottom" background="./Images/mail_left_bg.gif">
                    <img src="./Images/buttom_left.gif" width="17" height="17" />
                </td>
                <td background="./Images/buttom_bgs.gif">
                    <img src="./Images/buttom_bgs.gif" width="17" height="17">
                </td>
                <td valign="bottom" background="./Images/mail_right_bg.gif">
                    <img src="./Images/buttom_right.gif" width="16" height="17" />
                </td>           
            </tr>
        </table>
    </body>
</html>