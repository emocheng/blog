<?php /* Smarty version Smarty-3.1.20, created on 2014-10-21 15:42:41
         compiled from "/Users/tc/www/blog/templates/show.html" */ ?>
<?php /*%%SmartyHeaderCode:8126287905444ae972e8573-98328337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80aac2140e16c6f824d622f730a710758302019a' => 
    array (
      0 => '/Users/tc/www/blog/templates/show.html',
      1 => 1413876551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8126287905444ae972e8573-98328337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5444ae973f1b74_52618626',
  'variables' => 
  array (
    'content' => 0,
    'show_comm' => 0,
    'k' => 0,
    'id' => 0,
    'count' => 0,
    'cat' => 0,
    'v' => 0,
    'info' => 0,
    'comm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444ae973f1b74_52618626')) {function content_5444ae973f1b74_52618626($_smarty_tpl) {?><!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <div class="blog-desc">武汉长乐教育PHP培训</div>
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
            <div class="article-top">
                <div class="prev-article"><a href="#">上一篇博文</a></div>
                <div class="next-article"><a href="#">上一篇博文</a></div>
            </div>
                <div class='textbox-title'>
                <h4>
                <img src='../static/Images/icon_ctb.gif' width='11' height='11' border='0'
                              align='absmiddle'>
                <?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>

               </h4>
                <div style='margin-top:20px;'>
                </div>
                <div class='textbox-label'>
                [<span style='color:gray;font-weight:normal'>2015-9-16 15:33:33 发表在 <a href='#'><?php echo $_smarty_tpl->tpl_vars['content']->value['cate_name'];?>
</span>  ]
                </div>
                </div>
                <div class='textbox-content'>
                <?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>

                </div>
            <div class="textbox-bottom"> <img src="../static/images/cm_t_ArtRank2.gif" width="12" height="12" border="0"  align=""> <a href="#reply">我有话要说</a></div>
            <div class="textbox-urls" align="right"></div>
            <div class="no-comment-box"> [ 管理：<a href=index.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
>编辑日志</a>
                <a href=index.php?action=del_art&del_id=<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
>删除日志</a> ]</div>
            <div id="comments">
        <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show_comm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
                     <div class='commentbox'>

                        <div class='commentbox-title' > <a><?php echo $_smarty_tpl->tpl_vars['k']->value['author'];?>
</a> 发表的评论 <span style='color:gray'>[ 2014-9-11 15:20:20 ]</span>

                         <a href=index.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&action=del_comm&del_id=<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
>删除评论</a></div>
                        <div class='commentbox-content'><?php echo $_smarty_tpl->tpl_vars['k']->value['content'];?>
</div>
                        </div>
                <?php } ?>


            </div>
            <a name="reply"></a>
            <div id="comment">
                <div id="result" class="result none"></div>
                    <table cellpadding=3 cellspacing=3 width="450px">
                        <tr>
                            <td class="tRight tTop"></td>
                            <td>用户名：<input type="text" name="author" class="text"></td>
                            <td><input type="button" value="选择图片" onclick="BrowseServer('thumb1','img_show1')"/></td>
                            <td><input type="hidden" id="thumb1" class="span5" name="thumb"></td>
                            <td><img src="" id="img_show1" width="90px" height="90px" /></td>
                        </tr>
                        <tr>
                            <td class="tRight tTop"></td>

                        </tr>
                        <tr>
                            <td ></td>
                            <td class="center">
                                <input type="hidden" name="ajax" value="1">
                                <input type="hidden" name="module" value="Blog">
                                <textarea cols="70" rows="6" name="a" class="area"></textarea>
                                <br />
                                <div class="fLeft hMargin">
                                    <input type="submit" value="发表评论" class="submit_small">
                                </div>
                            </TD>
                        </tr>
                    </TABLE>
                <script src="../include/ckeditor/ckeditor.js"></script>
                <script src="../include/ckfinder/ckfinder.js"></script>
                <script>
                    function BrowseServer(thumb,img_show) {
                        var finder = new CKFinder();

                        //当选中图片时执行的函数
                        finder.selectActionFunction = function(fileUrl){
                            $("#"+thumb).val(fileUrl);
                            $("#"+img_show).attr("src",""+fileUrl+"");
                        }

                        finder.popup();//调用窗口
                    }
                    $(function(){

                        $(".submit_small").click(function(){
                            var author = $(".text").val();
                            var area = $(".area").val();
                            var img = $("#thumb1").val();
                            $.post("index.php?action=comm_new", {
                                author : author,
                                area : area,
                                aid : <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,
                                img : img
                            },function(data){
                                console.log(data);

                            var html = "<div class='commentbox'>";

                             html+="<div class='commentbox-title'> <a>"+author+"</a> 发表的评论 <span style='color:gray'>[ 2014-9-11 15:20:20 ]</span>";
                            html+="<a href='index.php?id="+<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
+"&action=del_comm&del_id="+data.id+"'>删除评论</a></div>";
                            html+="<div class=commentbox-content>"+area+"</div>";
                            html+="</div>";
                            $("#comments").append(html);

                            }, "json" )

                        })

                    })

                </script>

            </div>
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
                                 <span>
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['cat_num'];?>

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
