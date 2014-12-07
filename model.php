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
    $info = fetch_all("select a.*, c.name as cate from article as a left join category as c on a.cid = c.id
 order by a.id desc limit 0, 5");

    foreach($info as $k=>$v){

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
    foreach ($cat as $k=>$v){
        $cat_num = num_rows("select * from article where cid = '$v[id]'");
        $cat[$k]["cat_num"] =$cat_num;

    }
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
    $num_sum = fetch_one("select sum(views) as s from article ");

    $count = array(
        "num_rizhi" => $num_rizhi,
        "num_pinglun"=>$num_pinglun,
        "num_sum"=>$num_sum["s"]
    );
    return $count;
}


//首页ajax调用的显示下拉函数
function do_page($num){
    $p = $num*5;
    $res = fetch_all("select a.*, c.name as cate from article as a left join category as c on a.cid = c.id
 order by a.id desc limit $p, 5");
    foreach($res as $k=>$v){
        $comm = num_rows("select * from comm where aid = '$v[id]' ");
        $res[$k]["comm"] = $comm;
    }

    return $res;
}


//删除栏目后，栏目名，栏目下的文章，文章下的评论全部删除
function do_del_cate($del_id){
    Q("delete from category where id = '$del_id'");
    Q("delete from article where cid = '$del_id'");

    $res = fetch_all("select id from article where cid = '$del_id'");

    foreach($res as $v){
        Q("delete from comm where aid = '$v[id]'");
    }
}
