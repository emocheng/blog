<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 14/9/23
 * Time: 下午12:41
 */
require("common.php");
$id = $_GET["id"];
$result = mysql_query("select * from article where id = $id");
$row = mysql_fetch_array($result);

if($_POST){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $cid = $_POST["cid"];
    mysql_query("update article set title='$title',content='$content',cid='$cid' where id = $id");
    jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
}


require("templates/edit.html");