<?php 
require_once '../include.php';
date_default_timezone_set("PRC");
$time = time();
$rows = getAllAdmin();
//print_r($rows);
if (!$rows){
	alertMes("���޹���Ա��������ӣ�", "admin_add.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <link rel="stylesheet" type="text/css" href="./Style/skin.css" />
</head>
    <body>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!-- ͷ����ʼ -->
            <tr>
                <td width="17" valign="top" background="./Images/mail_left_bg.gif">
                    <img src="./Images/left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="./Images/content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="././Images/content_bg.gif">
                        <tr><td height="31"><div class="title">����Ա����</div></td></tr>
                    </table>
                </td>
                <td width="16" valign="top" background="./Images/mail_right_bg.gif"><img src="./Images/nav_right_bg.gif" width="16" height="29" /></td>
            </tr>
            <!-- �м䲿�ֿ�ʼ -->
            <tr>
                <!--��һ����߿�-->
                <td valign="middle" background="./Images/mail_left_bg.gif">&nbsp;</td>
                <!--��һ���м�����-->
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <!-- �հ���-->
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr>
                                        <td width="100" align="center"><img src="./Images/mime.gif" /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- һ���� -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <!-- ��Ʒ�б�ʼ -->
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <form action="" method="">
                                                <table width="100%"  class="cont tr_color">
                                                    <tr>
                                                        <th>ѡ��</th>
                                                        <th>����</th>
                                                        <th>�û���</th>
                                                        <th>�����ַ</th>
                                                        <th>�ϴε�½ IP</th>
                                                        <th>��ǰ��½ʱ��</th>
                                                        <th>���ʱ��</th>
                                                        <th>����</th>
                                                    </tr>
                                                    <?php foreach ($rows as $row):?>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td><?php echo $row['id'];?></td>
                                                        <td><?php echo $row['username']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $_SERVER["REMOTE_ADDR"];?></td>
                                                        <td><?php echo date('Y-m-d');?></td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="javascript:void(0)" onclick="delAdmin(<?php echo $row['id'];?>);return false;">ɾ��</a> <a href="javascript:void(0)" onclick="editAdmin(<?php echo $row['id'];?>);return false;">�޸�</a></td>
                                                    </tr>
                                                    <?php endforeach;?>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td>2</td>
                                                        <td>Admin</td>
                                                        <td>�</td>
                                                        <td>127.0.0.1</td>
                                                        <td>2015-10-18</td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="#">ɾ��</a> <a href="#">�޸�</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td>3</td>
                                                        <td>Admin</td>
                                                        <td>ͥ��</td>
                                                        <td>127.0.0.1</td>
                                                        <td>2015-10-18</td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="#">ɾ��</a> <a href="#">�޸�</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td>4</td>
                                                        <td>Admin</td>
                                                        <td>�ܶ�</td>
                                                        <td>127.0.0.1</td>
                                                        <td>2015-10-18</td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="#">ɾ��</a> <a href="#">�޸�</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td>5</td>
                                                        <td>Admin</td>
                                                        <td>��Ԫ</td>
                                                        <td>127.0.0.1</td>
                                                        <td>2015-10-18</td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="#">ɾ��</a> <a href="#">�޸�</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td>6</td>
                                                        <td>Admin</td>
                                                        <td>xspbruins</td>
                                                        <td>127.0.0.1</td>
                                                        <td>2015-10-18</td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="#">ɾ��</a> <a href="#">�޸�</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td>7</td>
                                                        <td>Admin</td>
                                                        <td>xspbruins</td>
                                                        <td>127.0.0.1</td>
                                                        <td>2015-10-18</td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="#">ɾ��</a> <a href="#">�޸�</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td>8</td>
                                                        <td>Admin</td>
                                                        <td>xspbruins</td>
                                                        <td>127.0.0.1</td>
                                                        <td>2015-10-18</td>
                                                        <td>2015-10-18</td>
                                                        <td><a href="#">ɾ��</a> <a href="#">�޸�</a></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>
                        <!-- ��Ʒ�б���� -->
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
            <!-- �ײ����� -->
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
<script type="text/javascript">
    function editAdmin(id){
        window.location="editAdmin.php?id="+id;
    }
    function delAdmin(id){
        if(window.confirm("��ȷ��ɾ��ô��")){
        	window.location="doAdminAction.php?act=delAdmin&id="+id;
        }
    }
</script> 
    
</html>