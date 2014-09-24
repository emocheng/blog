<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 14/9/23
 * Time: 下午1:42
 */

require("common.php");
if($_POST){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $cid = $_POST["cid"];
    mysql_query("insert into article (title,content,cid)
	values ('$title', '$content','$cid')");
    jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
}


require("templates/add.html");