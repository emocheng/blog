<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 14/9/24
 * Time: 下午4:34
 */

/**
 * 获取文章
 * @return array
 */
function get_info(){
    $info = fetch_all("select * from article order by id desc");
    foreach($info as $k=>$v){
        $cate = fetch_one("select name from category where id = '$v[cid]'");
        $info[$k]["cate"] = $cate["name"];

        $comm = num_rows("select * from comm where aid = '$v[id]' ");
        $info[$k]["comm"] = $comm;
    }
    return $info;
}

/**获取标题
 * @return array
 */
function cat_info(){
    $cat = fetch_all("select * from category");
    return $cat;
}


/**获取评论
 * @return array
 */
function comm(){

    $comm = fetch_all("select * from comm  order by id desc limit 0,5 ");
    return $comm;
}

function show_comm($id){
    $show_comm = fetch_all("select * from comm  where aid=$id  order by id desc limit 0,5 ");
    return $show_comm;

}



/**
 * 统计信息；
 * @return array
 */
function count_info(){
    $num_rizhi = num_rows("select * from article ");
    $num_pinglun =num_rows("select * from comm");
    $num_sum = mysql_fetch_array(mysql_query("select sum(views) as s from article "));

    $count = array(
        "num_rizhi" => $num_rizhi,
        "num_pinglun"=>$num_pinglun,
        "num_sum"=>$num_sum["s"]
    );
    return $count;
}

