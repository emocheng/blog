<?php
require("common.php");
require("model.php");

$action = isset($_GET["action"]) ? $_GET["action"] : "index";

$action($s);

//首页
function index(){



    if($_POST){
        $name = $_POST["name"];
        Q("insert into category (name) values ('$name')");
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

    A("count", $count);
    A("info", $info);
    A("cat", $cat);
    A("comm", $comm);
    D("index.html");


}

//数据分页
function page(){
    $num = $_POST["num"];
    $res = do_page($num);
    echo json_encode($res);
}


//删除文章及评论
function del_art(){
    $del_id = $_GET["del_id"];
    Q("delete from article where id='$del_id'");
    Q("delete from comm where aid='$del_id'");

    jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
}

//删除栏目，文章，评论
function del_cate(){
    $del_id = $_GET["del_id"];  //获取栏目名
    do_del_cate($del_id);//调用删除栏目的函数

    jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
}

function del_comm(){
        $id = $_GET["id"];
        $del_id = $_GET["del_id"];
        Q("delete from comm where id='$del_id'");
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
        Q("delete from comm where id='$del_id'");
    }

    $show_comm = show_comm($id);
    Q("update article set views = views+1 where id = '$id'");

    $count = count_info();
    $info = get_info();
    $cat = cat_info();
    $comm = comm();

    A("id", $id);
    A("content", $content);
    A("show_comm", $show_comm);
    A("count", $count);
    A("info", $info);
    A("cat", $cat);
    A("comm", $comm);
    A("content", $content);


    D("show.html");
}

function comm_new(){
    $img = $_POST["img"];
    $author = $_POST["author"];
    $area = $_POST["area"];
    $aid = $_POST["aid"];
    Q("insert into comm (author,content,aid,img)
	values ('$author', '$area','$aid','$img')");
    $id =mysql_insert_id();
    $array = array();
    $array["author"] = $author;
    $array["area"] = $area;
    $array["id"] = $id;
    $array["img"] = $img;
    echo json_encode($array);
}


//修改文章
function edit(){

    $id = $_GET["id"];
    $result = fetch_one("select * from article where id = $id");

    $result2 = fetch_all("select * from category");

    if($_POST){
        $title = $_POST["title"];
        $content = $_POST["content"];
        $cid = $_POST["cid"];
        Q("update article set title='$title',content='$content',cid='$cid' where id = $id");
        jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
    }

    A("result", $result);
    A("result2", $result2);
    D("edit.html");
}

//添加文章
function add(){
    $result2 = fetch_all("select * from category");
    if($_POST){
        $title = $_POST["title"];
        $content = $_POST["content"];
        $cid = $_POST["cid"];
        Q("insert into article (title,content,cid)
	values ('$title', '$content','$cid')");
        jump("http://127.0.0.1/index.php","恭喜您修改成功!请等待3秒钟跳转首页");
    }

    A("result2",$result2);
    D("add.html");

}






