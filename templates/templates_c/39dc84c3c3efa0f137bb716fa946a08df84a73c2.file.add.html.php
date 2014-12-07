<?php /* Smarty version Smarty-3.1.20, created on 2014-10-21 14:37:27
         compiled from "/Users/tc/www/blog/templates/add.html" */ ?>
<?php /*%%SmartyHeaderCode:13529273815444a41523bfc8-37953941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39dc84c3c3efa0f137bb716fa946a08df84a73c2' => 
    array (
      0 => '/Users/tc/www/blog/templates/add.html',
      1 => 1413873400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13529273815444a41523bfc8-37953941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5444a415297f36_82595700',
  'variables' => 
  array (
    'result2' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444a415297f36_82595700')) {function content_5444a415297f36_82595700($_smarty_tpl) {?><!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="../static/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript" src="../jquery-2.1.1.js"></script>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title">
                <IMG SRC="../static/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a>
            </div>
            <div class="blog-desc">武汉长乐教育PHP课程-博客系统开发</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">日志首页</a></li>
                <li><a href="index.php?action=add">撰写日志</a></li>
                <li><a href="">官方网站</a></li>
            </ul>
        </div>
    </div>
</div>
<!--中间部分-->
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">

            <div class="commentbox">
                <table cellpadding=3 cellspacing=3 width="680px" >
                    <tr>
                        <td colspan="2"><div class="block-title"><H5><IMG SRC="../static/images/modify.gif" WIDTH="20" HEIGHT="23" BORDER="0" ALT="" align="absmiddle"> 发表新的日志</H5></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form METHOD=POST id="form1" >
                                <table cellpadding=3 cellspacing=3 style="font-size:14px">
                                    <tr>
                                        <td colspan="2"><div id="result" class="result none"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" width="20%">标题：</td>
                                        <td class="tLeft"><input TYPE="text" class="huge text" check='Require' warning="标题不能为空" NAME="title"></td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" >类别：</td>
                                        <td class="tLeft">
                                            <select NAME="cid" class="medium text">
                                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                                <OPTION VALUE=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                                                    <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" >日志：</td>
                                        <td class="tLeft"><textarea name="content" id="textContent" cols="45" rows="5"></textarea></td>
                                    </tr>

                                    <tr>
                                        <td ></td>
                                        <td class="center">
                                            <div style="width:85%;color:gray">
                                                <div class="fLeft hMargin"><input TYPE="reset" class="submit small"  value="重 置" ></div>
                                                <div class="fLeft hMargin">
                                                    <input TYPE="submit" id="submit" value="发表日志" class="submit small">
                                                </div>
                                            </div></td>
                                    </tr>
                                </table>
                            </form>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script src="../include/ckeditor/ckeditor.js"></script>
        <script src="../include/ckfinder/ckfinder.js"></script>
        <script>
            CKEDITOR.replace('textContent',
                    {
                        filebrowserBrowseUrl: '../include/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../include/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl: '../include/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl: '../include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '../include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });
        </script>

<div id="footer" class="footer" >
    <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html><?php }} ?>
