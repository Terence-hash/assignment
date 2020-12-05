<?php
$servername = "localhost";   
$username = "root";
// $password = "root";
 
// 创建连接
$con = mysqli_connect($servername, $username);
 
// 检测连接
if(mysqli_connect_error()) {
    die("数据库连接失败: " . mysqli_connect_error());
}
echo "连接成功<br>";

mysqli_query($con, "set names utf8"); //设置编码，防止中文乱码


/* 
//创建数据库
$sql = "CREATE DATABASE class";
$retval = mysqli_query($con, $sql);
if(!$retval){
    die("无法创建数据库: ". mysqli_error($con));
}
echo "数据库创建成功\n";
*/

/*
 //删除数据库
$sql = "DROP DATABASE test";
$retval = mysqli_query($con, $sql);
if(!$retval){
    die("无法删除数据库: ". mysqli_error($con));
}
echo "数据库删除成功\n";
*/

/*
//创建数据表
mysqli_select_db($con, 'class' );   //选择class数据库
$sql = "CREATE TABLE student( ".
        "student_id INT NOT NULL AUTO_INCREMENT, ".
        "student_number VARCHAR(10) NOT NULL, ".
        "student_name VARCHAR(15) NOT NULL, ".
        "password VARCHAR(30) NOT NULL, ".
        "submission_date DATE, ".
        "PRIMARY KEY ( student_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

$retval = mysqli_query($con, $sql);
if(!$retval){
    die("无法创建数据表: ". mysqli_error($con));
}
echo "数据表创建成功\n";
*/

// $sql = "DROP TABLE user";   //删除数据表


//插入数据
mysqli_select_db($con, 'class' );   //选择class数据库
$number1="D202011343";
$name1="Tenence";
$password1="qptl098451";
$date1="2020-11-23";
$sql="insert into student(student_number, student_name, password, submission_date) values ('$number1', '$name1','$password1', '$date1')";

$retval = mysqli_query($con, $sql);
if(!$retval){
    die("无法插入数据: ". mysqli_error($con));
}
echo "数据插入成功\n";

//查询数据
// $sql="SELECT student_number, student_name, password, submission_date FROM student";

/*   //查询数据进行测试
echo "<h2>mysqli_fetch_array测试</h2>";
echo "<table border=1><tr><th>学号</th><th>姓名</th><th>密码</th><th>提交日期</th>";
while($row=mysqli_fetch_array($retval, MYSQLI_ASSOC)){
    echo "<tr><td>{$row['student_number']}</td>".
        "<td>{$row['student_name']}</td>".
        "<td>{$row['password']}</td>".
        "<td>{$row['submission_date']}</td>".
        "<tr>";

}
echo "</table>";
mysqli_free_result($retval);  //释放内存
*/

mysqli_close($con);

?>