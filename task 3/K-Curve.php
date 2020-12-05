<?php
//连接数据库
$servername = "localhost";   
$username = "root";
$con = mysqli_connect($servername, $username); 
if(!$con){
    die("fail to connect".mysqli_connect_error($con));
}

mysqli_query($con, "set names utf8"); //设置编码，防止中文乱码
mysqli_select_db($con,"stock");   //选择stock数据库

//读取数据表s600105中的数据，保存在变量中
$stockcode=$_POST["stockcode"];
$sql="select * from $stockcode order by 日期";
$stdata=mysqli_query($con, $sql);
if(!$stdata) 
{
    echo "<font color=red>股票代码不存在!</font>";
    exit;
}
$total=mysqli_num_rows($stdata);
for($i=0; $i<$total; $i++){
    $row=mysqli_fetch_array($stdata, MYSQLI_ASSOC);
    $op[$i] = $row['开盘价'];  
    // echo $op[$i],"\t";    
    $h[$i] = $row['最高价'];   
    // echo $h[$i],"\t"; 
    $l[$i] = $row['最低价'];
    // echo $l[$i],"\t";
    $cl[$i] = $row['收盘价'];   
    // echo $cl[$i],"\t";
    $vol[$i] = $row['成交量'];   
    // echo $vol[$i],"\t";
    // echo "<br>";
}

$wide=5;
$gap=4;
$imgwidth=($wide+$gap)*$total;
$imgheight=600;
$upperpart=400;
Header("Content-Type: image/png");
$im=imagecreate($imgwidth, $imgheight);
$red=imagecolorallocate($im, 255,0,0);          //阳线为红色
$green=imagecolorallocate($im, 0,255,0);        //阴线为绿色
$purple=imagecolorallocate($im, 160,32,240);    //五日均线图为紫色
$blue=imagecolorallocate($im, 0,0,255);         //十日均线图为蓝色
$white=imagecolorallocate($im, 255,255,255);    //曲线图的背景为白色
$black=imagecolorallocate($im, 0,0,0);          //最高价与最低价的连线为黑色
imagefilledrectangle($im, 0,0,$imgwidth,$imgheight,$white);    


$mh=$h[0];
for($k=0;$k<$total;$k++) 
    if($h[$k]>$mh) $mh=$h[$k];
$highest=$mh;   //最最高价

$ml=$l[$total-1];
for($k=$total-1;$k>=0;$k--)
    if($l[$k]<$ml) $ml=$l[$k];
$lowest=$ml;    //最最低价

$mv=$vol[0];
for($k=0;$k<$total;$k++)
    if($vol[$k]>$mv) $mv=$vol[$k];
$volmax=$mv;    //最大成交量

$ky=$upperpart/($highest-$lowest);  
$startpt=0;

for($i=$startpt;$i<$total;$i++)
{
    $yop[$i]=intval($upperpart-$ky*($op[$i]-$lowest));
    $ycl[$i]=intval($upperpart-$ky*($cl[$i]-$lowest));
    $yh[$i]=intval($upperpart-$ky*($h[$i]-$lowest));
    $yl[$i]=intval($upperpart-$ky*($l[$i]-$lowest));
    $yv[$i]=intval($imgheight-100*$vol[$i]/$volmax);

}

for($i=$startpt;$i<$total;$i++)
{
    $x[$i]=($wide+$gap)*($i-$startpt);
    $left=$x[$i];
    $right=$x[$i]+$wide;
    //绘制十日均线图
    if($i>=10)
    {
        $py1=($ycl[$i-1]+$ycl[$i-2]+$ycl[$i-3]+$ycl[$i-4]+$ycl[$i-5]+$ycl[$i-6]+$ycl[$i-7]+$ycl[$i-8]+$ycl[$i-9]+$ycl[$i-10])/10;
        $py2=($ycl[$i]+$ycl[$i-1]+$ycl[$i-2]+$ycl[$i-3]+$ycl[$i-4]+$ycl[$i-5]+$ycl[$i-6]+$ycl[$i-7]+$ycl[$i-8]+$ycl[$i-9])/10;
        imageline($im,$x[$i-1]+$wide/2,$py1,$x[$i]+$wide/2, $py2,$blue);
    }
    //绘制五日均线图
    if($i>=5)
    {
        $py3=($ycl[$i-1]+$ycl[$i-2]+$ycl[$i-3]+$ycl[$i-4]+$ycl[$i-5])/5;
        $py4=($ycl[$i]+$ycl[$i-1]+$ycl[$i-2]+$ycl[$i-3]+$ycl[$i-4])/5;
        imageline($im,$x[$i-1]+$wide/2,$py3,$x[$i]+$wide/2, $py4,$purple);
    }
    //收盘价大于等于开盘价，为阳线
    if($cl[$i]>=$op[$i])
    {
        $top=$ycl[$i];     //$cl[$i]越大，$ycl[$i]越小
        $bottom=$yop[$i];
        $topv=$yv[$i];
        $bottomv=$imgheight;
        imageline($im,$left+$wide/2,$yh[$i],$left+$wide/2,$yl[$i],$black);
        imagefilledrectangle($im,$left,$top,$right,$bottom,$red);
        imagefilledrectangle($im,$left,$topv,$right,$bottomv,$red);
     
    }
    //收盘价小于开盘价，为阴线
    if($cl[$i]<$op[$i])
    {
        $top=$yop[$i];
        $bottom=$ycl[$i];
        $topv=$yv[$i];
        $bottomv=$imgheight;
        imageline($im,$left+$wide/2,$yh[$i],$left+$wide/2,$yl[$i],$black);
        imagefilledrectangle($im,$left,$top,$right,$bottom,$green);
        imagefilledrectangle($im,$left,$topv,$right,$bottomv,$green);
        
    }

}

imagepng($im);       //显示图片
imagedestroy($im);   //释放内存


?>
