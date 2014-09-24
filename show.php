<?php
require("common.php");

$id = $_GET["id"];
$result = mysql_query("select * from article where id = $id");
$row = mysql_fetch_array($result);
$aid = $id;


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
mysql_query("update article set views = views+1 where id = '$id'");


require("templates/show.html");