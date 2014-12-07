<?php /* Smarty version Smarty-3.1.20, created on 2014-10-20 14:22:46
         compiled from "/Users/tc/www/blog/templates/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:20836634625444a8dcae83b0-47228654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9f3c3976640c2cbef276f22216e299c83f460b' => 
    array (
      0 => '/Users/tc/www/blog/templates/edit.html',
      1 => 1413786163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20836634625444a8dcae83b0-47228654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5444a8dcb62484_33561516',
  'variables' => 
  array (
    'result' => 0,
    'result2' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444a8dcb62484_33561516')) {function content_5444a8dcb62484_33561516($_smarty_tpl) {?><!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="../static/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title"><IMG SRC="../static/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a></div>
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

<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="commentbox">
                <TABLE cellpadding=3 cellspacing=3 width="680px">
                    <TR>
                        <TD colspan="2"><div class="block-title"><H5><IMG SRC="../static/images/modify.gif" WIDTH="20" HEIGHT="23" BORDER="0" ALT="" align="absmiddle"> 编辑日志</H5></div>
                        </TD>
                    </TR>
                    <TR>
                       <td colspan="2">
                            <form METHOD=POST id="form1" >
                                <table cellpadding=3 cellspacing=3 style="font-size:14px">
                                    <tr>
                                        <td colspan="2"><div id="result" class="result none"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" width="20%">标题：</td>
                                        <td class="tLeft">
                                            <input TYPE="text" class="huge text" check='Require'
                                                   warning="标题不能为空" NAME="title" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
">

                                        </td>
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
                                        <td class="tLeft">
                                            <textarea name="content" id="textContent" cols="45" rows="5">
                                                <?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>


                                            </textarea></td>
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
                            
                        
                    </TR>
                </TABLE>
            </div>
        </div>
   <!-- 版权信息区域 -->
    <div id="footer" class="footer" >
        <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
    </div>
</body>
</html><?php }} ?>
