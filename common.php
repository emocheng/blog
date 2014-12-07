<?php

require("config.php");

//项目路径
defined("APP_PATH") or define("APP_PATH", getcwd());


// smarty 配置
require('include/smarty/Smarty.class.php');

class My_Smarty extends Smarty {
    function __construct()
    {
        parent::__construct();

        //模板的路径
        $this->setTemplateDir(APP_PATH.'/templates/');

        //编译模板位置
        $this->setCompileDir(APP_PATH.'/templates/templates_c/');

        //配置文件路径
        $this->setConfigDir(APP_PATH.'/templates/configs/');

        //缓存路径
        $this->setCacheDir(APP_PATH.'/templates/cache/');

        $this->left_delimiter = "{{";
        $this->right_delimiter = "}}";
    }
}

$s = new My_Smarty();


//连接数据库操作
$mysqli= new mysqli($config["host"],$config["db_name"],$config["db_passwd"],$config["form_name"]);
if(mysqli_connect_error()){

    exit("连接失败：%s<br>".mysqli_connect_error());
}

$mysqli->query("set names utf8");

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


function A($a,$b){
    global $s;
    return $s->assign($a,$b);
}

function D($a){
    global $s;
    return $s->display($a);
}

function Q($sql){
    global $mysqli;
    return $mysqli->query($sql);

}


/*
 * 查询记录条数。。首页评论数调用
 * */
function num_rows($sql){
    $result = Q($sql);
    $num = $result->num_rows;
    return $num;
}

/*
 * 查询单条记录。。首页浏览数调用
 * */
function coun_rows($sql){
    $result = Q($sql);
    $row = $result->fetch_array();
   return $row;
}

function fetch_all($sql){
    $result = Q($sql);
    $array = array(); //定义一个空数组。。防止下面return数组时数组内没有值报错。
    while($row = $result->fetch_array()){
        $array[] = $row;
    }
    return $array;

}

//返回一条查询语句
function fetch_one($sql){
    $result = Q($sql);
    $row = $result->fetch_array();
    return $row;
}







