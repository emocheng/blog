<?php
$con = mysql_connect("localhost", "root", "root");
if (!$con) {
    die("无法连接数据库:".mysql_error());
}
mysql_query("set names utf8");
mysql_select_db('blog');

$result = mysql_query("select * from user");
while($row = mysql_fetch_array($result)){
	print_r($row);
	echo"<br />";
}

