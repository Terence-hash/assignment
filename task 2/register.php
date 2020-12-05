<!DOCTYPE html>  
<html>
<head>
<meta charset="utf-8"> 
<title>注册结果</title>
</head>
<body align=center bgcolor=B3DCBF>

<?php
echo "<br><br><br><br><br><br><br><br>";
date_default_timezone_set("PRC");    // 设置北京时间
header("Content-type:text/html; charset=utdf-8");

if(!isset($_POST['submit'])){
    exit("错误执行");
}
$number=$_POST['student_number'];
$name =$_POST['student_name'];
$password =$_POST['password'];
$date=date('Y-m-d');

include('connect.php');

if($number&&$name&&$password){

    if(strlen($number)!=10){
        echo "<b><font color=red><font size=5>学号位数错误：</font></font></b>", "<br><br>";
        echo "输入学号位数为", strlen($number),"，应输入10位学号, 请重新输入";
        echo "<hr>";
        echo "<p>点击返回<a href='register.html'>注册页面</a><p>"; 
       
    }
    else{
        $sql="select * from student where student_number ='$number'";  
        $result=mysqli_query($con, $sql);    
        $rows=mysqli_num_rows($result);
        if($rows){
            echo "<b><font color=red><font size=5>学号已注册：</font></font></b>", "<br><br>";
            echo "该学号已被注册，请使用其他学号进行注册";
            echo "<hr>";
            echo "<p>点击返回<a href='register.html'>注册页面</a><p>"; 
        }
        else{ 
            $sql="insert into student(student_number, student_name, password, submission_date) values ('$number', '$name','$password', '$date')";
            $result=mysqli_query($con, $sql); //执行mysqli
    
            if(!$result){
                die('注册失败: '.mysqli_error($con));
            }
            else{
                echo "<h1>","注册成功！","</h1>";
                echo "欢迎", $_POST["student_name"], "同学加入动态网页设计课堂", "<br>";
                echo "你的学号是", $_POST["student_number"], "<br>";
                echo "你的密码是", $_POST["password"], "<br>";
                echo "<p><a href='login.html'>进入登录页面</a><p>";
            }
        }
    }
}
else{
    echo "<b><font color=red><font size=5>表单填写不完整</font></font></b>", "<br><br>";
    echo "<hr>";
    echo "<p>点击返回<a href='register.html'>注册页面</a><p>"; 
}

mysqli_close($con);   //关闭数据库
?>

</body>
</html>

