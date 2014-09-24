<?php
require("common.php");




/*if(isset($_POST["tc"]) && $_POST["tc"]==0){

}*/


if($_POST){
    $name = $_POST["name"];
    mysql_query("insert into category (name) values ('$name')");
    echo $name;
}

//删除文章及评论
if(isset($_GET["action"]) && $_GET["action"]=="del_art"){
    $del_id = $_GET["del_id"];
    mysql_query("delete from article where id='$del_id'");
    mysql_query("delete from comm where aid='$del_id'");
}

//删除栏目，文章，评论
if(isset($_GET["action"]) && $_GET["action"]=="del_cate"){
    $del_id = $_GET["del_id"];  //当前要删除栏目的id
    mysql_query("delete from category where id = '$del_id'");
    mysql_query("delete from article where aid = '$del_id'");

    //查询当前栏目下所有文章的id.
    $res = mysql_query("select id from article where cid = '$del_id'");
    while($r = mysql_fetch_array($res)){
        mysql_query("delete from comm where aid = '$r[id]'");
    }

}
require("templates/index.html");