<!DOCTYPE HTML> 
<html>
<head>
<meta charset = "utf-8">
<meta name="author" content="Terence">
<title>登录结果</title>
</head>
<body align=center bgcolor=B3DCBF>

<?php
echo "<br><br><br><br><br><br><br><br>";
header("Content-Type:text/html; charset=utf-8");
if(!isset($_POST['submit'])){
  exit("错误执行");
}

include("connect.php");
$number=$_POST['student_number'];
$name=$_POST['student_name'];
$password=$_POST['password'];

if($number&&$name&&$password){
    $sql="select * from student where student_number ='$number' and student_name ='$name' and password = '$password'";  
    $result=mysqli_query($con, $sql);    
    $rows=mysqli_num_rows($result);
    if($rows){
        echo "<b><font color=01000E><font size=7>欢迎学习动态网页设计!<br></font></font></b>";
        echo "<hr>";
        echo "<i><font size=5>6秒后跳转至动态网页百度百科，或者直接点击<a href=https://baike.baidu.com/item/%E5%8A%A8%E6%80%81%E7%BD%91%E9%A1%B5/6327050?fr=aladdin>动态网页<a>进行跳转</font></i>";
        header("refresh:6;url=https://baike.baidu.com/item/%E5%8A%A8%E6%80%81%E7%BD%91%E9%A1%B5/6327050?fr=aladdin");
        exit;
    }
    else{
        echo "<b><font color=red><font size=5>学号、姓名或密码存在错误!</font></font></b>", "<br><br>";
        echo "<hr>";
        echo "<p>点击返回<a href='login.html'>登录页面</a><p>"; 
        /*
        echo "
            <script>
            setTimeout(function(){window.location.href='login.html';},1000);
            </script>
        ";
        */
    }
}
else{
    echo "<b><font color=red><font size=5>表单填写不完整</font></font></b>", "<br><br>";
    echo "<hr>";
    echo "<p>点击返回<a href='login.html'>登录页面</a><p>"; 
    /*
    echo "
    <script>
    setTimeout(function(){window.location.href='login.html';},1000);
    </script>
";
*/
}

mysqli_close($con);   //关闭数据库
?>

</body>
</html>
