<?php 
require_once '../include.php';
$sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from shop_pro as p join shop_cate c on p.cId = c.id";
$totalRows = getResultNum ( $sql );

$pageSize = 7;
$totalPage = ceil ( $totalRows / $pageSize );
$page = $_REQUEST ['page'] ? ( int ) $_REQUEST ['page'] : 1;
if ($page < 1 || $page == null || ! is_numeric ( $page )) {
	$page = 1;
}
if ($page > $totalPage) {
	$page = $totalPage;
}
$offset = ($page - 1) * $pageSize;
$sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from shop_pro as p join shop_cate c on p.cId = c.id limit {$offset},{$pageSize}";
$rows = fetchAll ( $sql );
if (! $rows) {
	alertMes ( "���޲�Ʒ��������ӣ�", "goods_add.php" );
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
                        <tr><td height="31"><div class="title">��Ʒ�б�</div></td></tr>
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
                                                        <th>��Ʒ����</th>
                                                        <th>��ͨ�۸�</th>
                                                        <th>��վ�۸�</th>
                                                        <th>��Ʒ����</th>
                                                        <th>����</th>
                                                        <th>����ʱ��</th>
                                                        <th>����</th>
                                                    </tr>
                                                    <?php foreach ($rows as $row):?>
                                                    <tr align="center" class="d">
                                                        <td><input type="checkbox" value="" /></td>
                                                        <td><?php echo $row['pSn'];?></td>
                                                        <td><?php echo $row['pName'];?></td>
                                                        <td><?php echo $row['mPrice'];?></td>
                                                        <td><?php echo $row['iPrice'];?></td>
                                                        <td><?php echo $row['cName'];?></td>
                                                        <td><?php echo $row['pNum'];?></td>
                                                        <td><?php echo $row['pubTime'];?></td>
                                                        <td><a href="javascript:void(0)" onclick="editGoods(<?php echo $row['pSn'];?>);return false;">�޸�</a>&nbsp;&nbsp;<a href="javascript:void(0);" onclick="delGoods(<?php echo $row['id'];?>);return false;">ɾ��</a></td>
                                                    </tr>
                                                    <?php endforeach;?>
                                                    <?php if($rows>$pageSize):?>
                                                <tr align="center" class="d">
													<td colspan="9"><?php echo getPage($page, $totalPage, null)?></td>
												</tr>
                                                    <?php endif;?>
                                                    
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
        function delGoods(id){
            if(window.confirm("��ȷ��ɾ��ô��")){
                window.location="doGoodsAction.php?act=delGoods&id="+id;
            }
        }
        function editGoods(pSn){
            window.location="editGoods.php?pSn="+pSn;
        }
    </script>
      
</html>