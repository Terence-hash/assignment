<?php
$db_server="localhost";
$db_username="root";
// $db_password="root";
//连接数据库
$con = mysqli_connect($db_server, $db_username);
if(!$con){
    die("fail to connect".mysqli_connect_error($con));
}

mysqli_select_db($con, 'class');   //选择class数据库

?>

