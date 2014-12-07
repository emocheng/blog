<?php /* Smarty version Smarty-3.1.20, created on 2014-10-20 15:26:30
         compiled from "/Users/tc/www/blog/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:39202399054449dd5337ee0-06879708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47623a24628966e3ddeeb20815cc4fc3c3839434' => 
    array (
      0 => '/Users/tc/www/blog/templates/index.html',
      1 => 1413789987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39202399054449dd5337ee0-06879708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54449dd548a9d6_78180498',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'count' => 0,
    'cat' => 0,
    'comm' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54449dd548a9d6_78180498')) {function content_54449dd548a9d6_78180498($_smarty_tpl) {?><!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="../static/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<script type="text/javascript" src="jquery-2.1.1.js"></script>
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
<!--中间部分-->
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="announce text" style="border:1px solid silver;padding:5px;font-size:14px;">
                <h4 style="color:#FF3300"><img src="../static/images/wav.gif" width="18" height="18" border="0" alt="" align="absmiddle"> 简单的BLOG示例</h4>
                本示例Blog包括日志的新增、修改、列表、统计、评论和删除等功能,可以作为入门PHP的绝佳示例。<P>请按照下面步骤操作，增加分类、添加日志、增加评论。
            </div>
            <!--
            <div class="article-top">
                <div class="view-mode">浏览模式: <a href="?mode=normal">普通</a> | <a href="?mode=list">列表</a></div><div class="pages">{$page}</div>
            </div>
            -->

            <div class="ajax">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <div class='textbox-title'>
                    <h4>
                    <img src='../static/images/icon_point2.gif' width='13' height='13' border='0'
                              align='absmiddle'>
                    <a href=index.php?action=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                    </h4>
                    <div class='textbox-label'>

                    [ 2014-9-12 15:30:20  | <a href='#'><?php echo $_smarty_tpl->tpl_vars['v']->value['cate'];?>
 </a>]
                    </div>
                    </div>
                    <div class='textbox-content'><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</div>
                   <div class='textbox-bottom'>
                    [ 管理：<a href=index.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
 >编辑</a> <a href=index.php?action=del_art&del_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
>删除 </a> ]

                    | <a href=show.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
>评论:<?php echo $_smarty_tpl->tpl_vars['v']->value['comm'];?>
</a> | 浏览: <?php echo $_smarty_tpl->tpl_vars['v']->value['views'];?>

                    </div>
                <?php } ?>
            </div>
            <div><input type="button" class="btn" value="查看更多文章"></div>
                <script>
                    $(function(){
                        var num = 1;
                        $(".btn").click(function(){

                            $.post("index.php?action=page", {
                                num : num
                            },function(data){
                                console.log(data);
                                $.each(data,function(k,v){
                                var html= "<div class='textbox-title'><h4><img src='../static/images/icon_point2.gif'"
                                    html+="width='13' height='13' border='0' align='absmiddle'>"
                                    html+="<a href=index.php?action=show&id="+ v.id+">"+ v.title+"</a>"
                                    html+="</h4><div class='textbox-label'>[ 2014-9-12 15:30:20  | <a href='#'>"+ v.cate
                                    html+="</a>]</div></div><div class='textbox-content'>"+ v.content+"</div>"
                                    html+="<div class='textbox-bottom'>"
                                    html+="[ 管理：<a href=index.php?action=edit&id="+ v.id+">编辑</a>"
                                    html+="<a href=index.php?action=del_art&del_id="+ v.id+">删除 </a> ]"
                                    html+="| <a href=show.php?id="+ v.id+">评论:"+ v.comm+"</a> | 浏览:"+ v.views
                                    $(".ajax").append(html);
                                })

                            }, "json")

                            num++
                        })

                    })

                </script>

            <!--
            <div class="article-bottom">
                <div class="pages">{$page}
                </div>
            </div>
            -->
        </div>
    </div>

    <div id="sidebar" class="sidebar">
        <div id="innerSidebar">
            <div id="panelSearch" class="panel">
                <div id="panelStats" class="panel">
                    <h5>统计数据</h5>
                    <div class="panel-content">


                        日志总数：<span style='color:#CC9933'><?php echo $_smarty_tpl->tpl_vars['count']->value['num_rizhi'];?>
</span><br />
                        阅读总数：<span style='color:#6699FF'><?php echo $_smarty_tpl->tpl_vars['count']->value['num_sum'];?>
</span><br />
                        评论总数：<span style='color:#FF9900'><?php echo $_smarty_tpl->tpl_vars['count']->value['num_pinglun'];?>
</span><br />


                    </div>
                </div>
                <h5 >日志分类 </h5>
                <div class="panel-content">
                    <ul id="category">



                        <li>
                            <form action="" method="post">
                            <div class="fLeft" >
                                <input TYPE="text" id="categoryName" class="text" NAME="name">
                            </div>
                            <input TYPE="submit" value="增 加" class="submit hMargin small">
                            <br style="clear:both;float:auto"/>
                            </form>
                        </li>


                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <li>
                                <img src='../static/images/folder.gif' width='18' height='18'
                                         border='0'  align='absmiddle'>
                                <a href='#'><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                                 <span><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_num'];?>
</span>
                                <a href=index.php?action=del_cate&del_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
><img src='../static/images/del.gif' style='cursor:pointer' width='20'
                                        height='20' border='0'></a>
                                </li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5 >最新日志</h5>
                <div class="panel-content">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

						<li>
                        <img src='../static/images/icon_ctb.gif' width='11' height='11' border='0'  align='absmiddle'/>
                        <a href='#' ><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                        <sup style='color:silver;font-size:12px'>
                        [<span style='color:#3366CC'><?php echo $_smarty_tpl->tpl_vars['v']->value['views'];?>
<!-- 阅读数 --></span> |<span style='color:#FF6600'><?php echo $_smarty_tpl->tpl_vars['v']->value['comm'];?>
<!-- 评论数 --></span>]
                        </sup>
                        </li>
                           <?php } ?>

                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5 >最新评论</h5>
                <div class="panel-content">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
                            <li>
                            <img src='../static/images/Comment.gif' width='9'
                                      height='9' border='0' align='absmiddle'>
                            <a href='#'> <span style='color:#3366CC'><?php echo $_smarty_tpl->tpl_vars['k']->value['author'];?>
</span></a>
                            <a href='#' ><?php echo $_smarty_tpl->tpl_vars['k']->value['content'];?>
</a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- 版权信息区域 -->
<div id="footer" class="footer" >
    <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html><?php }} ?>
