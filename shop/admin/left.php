<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <script src="./Js/prototype.lite.js" type="text/javascript"></script>
    <script src="./Js/moo.fx.js" type="text/javascript"></script>
    <script src="./Js/moo.fx.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./Style/skin.css" />
    <script type="text/javascript">
        window.onload = function () {
            var contents = document.getElementsByClassName('content');
            var toggles = document.getElementsByClassName('type');

            var myAccordion = new fx.Accordion(
            toggles, contents, {opacity: true, duration: 400}
            );
            myAccordion.showThisHideOpen(contents[0]);
            for(var i=0; i<document .getElementsByTagName("a").length; i++){
                var dl_a = document.getElementsByTagName("a")[i];
                    dl_a.onfocus=function(){
                        this.blur();
                    }
            }
        }
    </script>
</head>

<body>
    <table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
        <tr>
            <td width="182" valign="top">
                <div id="container">
                    <h1 class="type"><a href="javascript:void(0)">��վ��Ŀ</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="./Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="./cat_add.html" target="main">�����Ŀ</a></li>
                            <li><a href="./cat_manage.html" target="main">��Ŀ����</a></li>
                        </ul>
                    </div>
                    <h1 class="type"><a href="javascript:void(0)">��Ʒ����</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="./Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="./goods_sort.php" target="main">��Ʒ����</a></li>
                            <li><a href="./goods_add.php" target="main">��Ӳ�Ʒ</a></li>
                            <li><a href="./goods_list.php" target="main">��Ʒ�б�</a></li>
                        </ul>
                    </div>
                    <h1 class="type"><a href="javascript:void(0)">��������</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="./Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="./order_1.html" target="main">��������</a></li>
                            <li><a href="./order_2.html" target="main">�����ж���</a></li>
                            <li><a href="./order_3.html" target="main">�ѷ�������</a></li>
                            <li><a href="./order_4.html" target="main">����ɶ���</a></li>
                        </ul>
                    </div>
                    <!-- *********** -->
                    <h1 class="type"><a href="javascript:void(0)">��Ա����</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="./Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="./mem_reg.php" target="main">ע������</a></li>
                            <li><a href="./mem_chk.php" target="main">�������</a></li>
                            <li><a href="./mem_add.php" target="main">��ӻ�Ա</a></li>
                            <li><a href="./mem_list.php" target="main">��Ա����</a></li>
                        </ul>
                    </div>
                    <h1 class="type"><a href="javascript:void(0)">ϵͳ����</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="./Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="./admin.php" target="main">����Ա����</a></li>
                            <li><a href="./admin_add.php" target="main">��ӹ���Ա</a></li>
                        </ul>
                    </div>
                    <!-- *********** -->
                    <h1 class="type"><a href="javascript:void(0)">��������</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="./Images/menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="javascript:void(0)" target="main">��������</a></li>
                            <li><a href="javascript:void(0)" target="main">��������</a></li>
                            <li><a href="javascript:void(0)" target="main">��վͶƱ</a></li>
                            <li><a href="javascript:void(0)" target="main">��������</a></li>
                            <li><a href="javascript:void(0)" target="main">ͼƬ�ϴ�</a></li>
                        </ul>
                    </div>
                    <!-- *********** -->
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
