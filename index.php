<?php
require("common.php");
require("model.php");

$action = isset($_GET["action"]) ? $_GET["action"] : "index";

$action();

//首页
function index(){
    if($_POST){
        $name = $_POST["name"];
        mysql_query("insert into category (name) values ('$name')");
        echo $name;
    }

    //获取统计信息；
    $count = count_info();
    //获取文章
    $info = get_info();
    //获取栏目
    $cat = cat_info();
    //获取评论
    $comm = comm();
    require("templates/index.html");
}

//删除文章及评论
function del_art(){
    $del_id = $_GET["del_id"];
    mysql_query("delete from article where id='$del_id'");
    mysql_query("delete from comm where aid='$del_id'");

    jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
}

//删除栏目，文章，评论
function del_cate(){
    $del_id = $_GET["del_id"];  //当前要删除栏目的id
    mysql_query("delete from category where id = '$del_id'");
    mysql_query("delete from article where aid = '$del_id'");

    //查询当前栏目下所有文章的id.
    $res = mysql_query("select id from article where cid = '$del_id'");
    while($r = mysql_fetch_array($res)){
        mysql_query("delete from comm where aid = '$r[id]'");
    }

    jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
}

function del_comm(){
        $id = $_GET["id"];
        $del_id = $_GET["del_id"];
        mysql_query("delete from comm where id='$del_id'");
        jump("http://127.0.0.1/index.php?action=show&id=".$id,"恭喜您删除成功!请等待3秒钟跳转");
}

//显示页面
function show(){
    $id = $_GET["id"];

    /**
     * 获取show页面的栏目标签；
     */
    $content = fetch_one("select * from article where id = '$id'");

    $cid = $content["cid"];

    $cate_name = fetch_one("select name from category where id = $cid");

    $content["cate_name"]=$cate_name["name"];

    if(isset($_GET["action"]) &&$_GET["action"]=="del"){
        $del_id = $_GET["del_id"];
        mysql_query("delete from comm where id='$del_id'");
    }

    if($_POST){
        $author = $_POST["author"];
        $a = $_POST["a"];
        $aid = $id;
        mysql_query("insert into comm (author,content,aid)
	values ('$author', '$a','$aid')");
    }
    $show_comm = show_comm($id);
    mysql_query("update article set views = views+1 where id = '$id'");

    $count = count_info();
    $info = get_info();
    $cat = cat_info();
    $comm = comm();

    require("templates/show.html");
}


//修改文章
function edit(){

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
}

//添加文章
function add(){
    if($_POST){
        $title = $_POST["title"];
        $content = $_POST["content"];
        $cid = $_POST["cid"];
        mysql_query("insert into article (title,content,cid)
	values ('$title', '$content','$cid')");
        jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
    }

    require("templates/add.html");

}






