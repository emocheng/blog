<?php

require("config.php");

//项目路径
defined("ROOT_PATH") or define("ROOT_PATH", getcwd());

//模板路径
defined("TEMPLATE_PATH") or define("TEMPLATE_PATH", ROOT_PATH."/templates/");

defined("SITE_URL") or define("SITE_URL", "http://".$_SERVER['HTTP_HOST']);
/* 定义常量 end */


//连接数据库操作
$con = mysql_connect($config["host"],$config["db_name"],$config["db_passwd"]);
if(!$con){
	die("无法连接大到数据库");
}

mysql_query("set names utf8");
mysql_select_db('my_blog');

/**
 * 调试函数
 * @param $arr
 */
function dump($arr) {
    if(is_array($arr)) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    } else {
        echo $arr;
    }
}

/**
 * 跳转函数
 * @param $arr
 */
function jump($url, $msg="操作已经完成，请等待3秒钟") {
   echo $msg;
    echo"<meta http-equiv=refresh content=0;url='".$url."'> ";
    /*echo "<script> window.location.href=".$url."</script>";*/
}

//select * from 表 where ... order by 字段 desc limit 0,5;  6,5


/*
 * 查询记录条数。。首页评论数调用
 * */
function num_rows($sql){
    $result = mysql_query($sql);
    $num = mysql_num_rows($result);
    return $num;
}

/*
 * 查询单条记录。。首页浏览数调用
 * */
function coun_rows($sql){
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
   return $row;
}

function fetch_all($sql){
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)){
        $array[] = $row;
    }
    return $array;
}

//返回一条查询语句
function fetch_one($sql){
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    return $row;
}







