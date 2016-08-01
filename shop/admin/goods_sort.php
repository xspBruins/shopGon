<?php
require_once '../include.php';

$sql = "select * from shop_cate";
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
$sql = "select * from shop_cate limit {$offset},{$pageSize}";
$rows = fetchAll ( $sql );
if (!$rows){
	alertMes("现在还没有商品分类信息，请添加!", "goods_add.php");
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
            <!-- 头部开始 -->
            <tr>
                <td width="17" valign="top" background="./Images/mail_left_bg.gif">
                    <img src="./Images/left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="./Images/content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="././Images/content_bg.gif">
                        <tr><td height="31"><div class="title">产品分类</div></td></tr>
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
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr>
                                        <td width="100" align="center"><img src="./Images/mime.gif" /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 一条线 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 商品分类开始 -->
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <form action="" method="">
                                                <table width="100%"  class="cont tr_color">
                                                    <tr>
                                                        <th>排序</th>
                                                        <th>分类名称</th>
                                                        <th>显示/隐藏</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    <?php foreach ($rows as $row):?>
                                                    <tr align="center" class="d">
                                                        <td><?php echo $row['id'];?></td>
                                                        <td><?php echo $row['cName'];?></td>
                                                        <td>显示</td>
                                                        <td>
                                                            <a href="javascript:void(0);" onclick="addGoods_cate();return false;">添加</a>
                                                            <a href="javascript:void(0);" onclick="editGoods_cate(<?php echo $row['id'];?>);return false;">编辑</a> 
                                                            <a href="javascript:void(0);" onclick="delGoods_cate(<?php echo $row['id'];?>);return false;">删除</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach;?>
                                                    <?php if ($rows>$pageSize):?>
                                                    <tr align="center" class="d">
                                                        <td colspan="4"><?php echo getPage($page, $totalPage, null)?></td>
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
                        <!-- 商品分类结束 -->
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
    <script type="text/javascript">
        function addGoods_cate(){
            window.location = "addGoods_cate.php?act=addGoods_cate";
        }
        function editGoods_cate(id){
            window.location = "editGoods_cate.php?act=editGoods_cate&id="+id;
        }
        function delGoods_cate(id){
            if(window.confirm("您确定删除么？")){
                window.location = "doGoodsAction.php?act=delGoods_cate&id="+id;
            }
        }
    </script>
      
</html>