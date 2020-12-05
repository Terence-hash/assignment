<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8"> 
<meta name="keywords" content="HTML, PHP">
<meta name="description" content="华中科技大学校历">
<meta name="author" content="Terence">
<meta http-equiv="refresh" content="1">
<title>校历</title>
</head>

<body bgcolor=BBB8DC style="font-family:微软雅黑">
<?php
date_default_timezone_set("PRC");    // 设置北京时间
echo "<span style='color:red'>".date('Y-m-d H:i:s')."</span>";
$y=date("Y");
$m=date("m");
// $m=10;
$d=date('d');
// $d=29;
if($m==1){
    $md=1300+$d;
}
else{
    $md=$m*100+$d;
}
// 设置周次
$w="?";
if(($m==8&&$d==31)||($m==9&&($d>=1&&$d<=6))){
    $w=1;
}
elseif($m==9&&($d>=7&&$d<=13)){
    $w=2;
}
elseif($m==9&&($d>=14&&$d<=20)){
    $w=3;
}
elseif($m==9&&($d>=21&&$d<=27)){
    $w=4;
}
elseif(($m==9&&($d>=28&&$d<=30))||($m==10&&($d>=1&&$d<=4))){
    $w=5;
}
elseif($m==10&&($d>=5&&$d<=11)){
    $w=6;
}
elseif($m==10&&($d>=12&&$d<=18)){
    $w=7;
}
elseif($m==10&&($d>=19&&$d<=25)){
    $w=8;
}
elseif(($m==10&&($d>=26&&$d<=31))||($m==11)&&($d==1)){
    $w=9;
}
elseif($m==11&&($d>=2&&$d<=8)){
    $w=10;
}
elseif($m==11&&($d>=9&&$d<=15)){
    $w=11;
}
elseif($m==11&&($d>=16&&$d<=22)){
    $w=12;
}
elseif($m==11&&($d>=23&&$d<=29)){
    $w=13;
}
elseif(($m==11&&($d==30))||($m==12)&&($d>=1&&$d<=6)){
    $w=14;
}
elseif(($m==12)&&($d>=7&&$d<=13)){
    $w=15;
}
elseif(($m==12)&&($d>=14&&$d<=20)){
    $w=16;
}
elseif(($m==12)&&($d>=21&&$d<=27)){
    $w=17;
}
elseif(($m==12)&&($d>=28&&$d<=31)||($m==1&&($d>=1&&$d<=3))){
    $w=18;
}
elseif(($m==1)&&($d>=4&&$d<=10)){
    $w=19;
}
elseif(($m==1)&&($d>=11&&$d<=16)){
    $w=20;
}
?>

<p><a href="http://jwc.hust.edu.cn/system/_content/download.jsp?urltype=news.DownloadAttachUrl&owner=1609591927&wbfileid=4618456">点击此处下载校历PDF文件</a></p>
<p><center><img src= "xiaohui.png" alt="校徽" width = 200 height = 157.5></center></p>
<h1 align = center><font color = 303192 style="font-family:华文楷体" >华中科技大学2020~2021学年度</font></h1>
<h2 align = center><font color = D7181E style="font-family:黑体" font size =5>第一学期</font></h2>
<h2 align = center><font color = blue style="font-family:黑体" font size =5><?php echo $y,"年",$m, "月", $d,"日","（第",$w,"周）"; ?></font></h2>  
<table border=3 bordercolor=0095DA  bgcolor=B3DCBF align = center width = 780px height =50px cellspacing = 0px ><font size = 4 >
    <tr height = 48px align = center>
            <th bgcolor = FBA61C><font size=4>周次/日/星期</font></th>
            <th bgcolor=AFABD5 width = 90px>一</th>
            <th bgcolor=AFABD5 width = 90px>二</th>
            <th bgcolor=AFABD5 width = 90px>三</th>
            <th bgcolor=AFABD5 width = 90px>四</th> 
            <th bgcolor=AFABD5 width = 90px>五</th>
            <th width = 90px bgcolor = FBA61C>六</th>
            <th width = 90px bgcolor = FBA61C>日</th>
        </tr>
    <tr height = 40px align = center>
            <th bgcolor=AFABD5> </th><td></td><td></td><td></td><td></td><td></td><td><font color = F68E3A><b>29注册</b></font></td><td><font color = F68E3A><b>30注册</b></font></td>
        </tr>
    <tr height = 40px align = center <?php if($w==1){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>1</th>
            <?php if($md==831){echo "<td><font color = red><b>8.31开学</b></font></td>";} elseif($md>831){echo "<td><font color = B2AFAF>8.31开学</font></td>";} else{echo "<td><font color =0321F7>8.31开学</font></td>";} ?>
            <?php if($md==901){echo "<td bgcolor=7CF508><font color = red><b>9.1</b></font></td>";} elseif($md>901){echo "<td bgcolor=7CF508><font color = B2AFAF>9.1</font></td>";} else{echo "<td bgcolor=7CF508><font color =0321F7>9.1</font></td>";} ?>
            <?php if($md==902){echo "<td><font color = red><b>2</b></font></td>";} elseif($md>902){echo "<td><font color = B2AFAF>2</font></td>";} else{echo "<td><font color =0321F7>2</font></td>";} ?>
            <?php if($md==903){echo "<td><font color = red><b>3</b></font></td>";} elseif($md>903){echo "<td><font color = B2AFAF>3</font></td>";} else{echo "<td><font color =0321F7>3</font></td>";} ?>
            <?php if($md==904){echo "<td><font color = red><b>4</b></font></td>";} elseif($md>904){echo "<td><font color = B2AFAF>4</font></td>";} else{echo "<td><font color =0321F7>4</font></td>";} ?>
            <?php if($md==905){echo "<td><font color = red><b>5</b></font></td>";} elseif($md>905){echo "<td><font color = B2AFAF>5</font></td>";} else{echo "<td><font color =0321F7>5</font></td>";} ?>
            <?php if($md==906){echo "<td><font color = red><b>6</b></font></td>";} elseif($md>906){echo "<td><font color = B2AFAF>6</font></td>";} else{echo "<td><font color =0321F7>6</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==2){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>2</th>
            <?php if($md==907){echo "<td><font color = red><b>7</b></font></td>";} elseif($md>907){echo "<td><font color = B2AFAF>7</font></td>";} else{echo "<td><font color =0321F7>7</font></td>";} ?>
            <?php if($md==908){echo "<td><font color = red><b>8</b></font></td>";} elseif($md>908){echo "<td><font color = B2AFAF>8</font></td>";} else{echo "<td><font color =0321F7>8</font></td>";} ?>
            <?php if($md==909){echo "<td><font color = red><b>9</b></font></td>";} elseif($md>909){echo "<td><font color = B2AFAF>9</font></td>";} else{echo "<td><font color =0321F7>9</font></td>";} ?>
            <?php if($md==910){echo "<td><font color = red><b>10</b></font></td>";} elseif($md>910){echo "<td><font color = B2AFAF>10</font></td>";} else{echo "<td><font color =0321F7>10</font></td>";} ?>
            <?php if($md==911){echo "<td><font color = red><b>11</b></font></td>";} elseif($md>911){echo "<td><font color = B2AFAF>11</font></td>";} else{echo "<td><font color =0321F7>11</font></td>";} ?>
            <?php if($md==912){echo "<td><font color = red><b>12</b></font></td>";} elseif($md>912){echo "<td><font color = B2AFAF>12</font></td>";} else{echo "<td><font color =0321F7>12</font></td>";} ?>
            <?php if($md==913){echo "<td><font color = red><b>13</b></font></td>";} elseif($md>913){echo "<td><font color = B2AFAF>13</font></td>";} else{echo "<td><font color =0321F7>13</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==3){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>3</th>
            <?php if($md==914){echo "<td><font color = red><b>14</b></font></td>";} elseif($md>914){echo "<td><font color = B2AFAF>14</font></td>";} else{echo "<td><font color =0321F7>14</font></td>";} ?>
            <?php if($md==915){echo "<td><font color = red><b>15</b></font></td>";} elseif($md>915){echo "<td><font color = B2AFAF>15</font></td>";} else{echo "<td><font color =0321F7>15</font></td>";} ?>
            <?php if($md==916){echo "<td><font color = red><b>16</b></font></td>";} elseif($md>916){echo "<td><font color = B2AFAF>16</font></td>";} else{echo "<td><font color =0321F7>16</font></td>";} ?>
            <?php if($md==917){echo "<td><font color = red><b>17</b></font></td>";} elseif($md>917){echo "<td><font color = B2AFAF>17</font></td>";} else{echo "<td><font color =0321F7>17</font></td>";} ?>
            <?php if($md==918){echo "<td><font color = red><b>18</b></font></td>";} elseif($md>918){echo "<td><font color = B2AFAF>18</font></td>";} else{echo "<td><font color =0321F7>18</font></td>";} ?>
            <?php if($md==919){echo "<td><font color = red><b>19</b></font></td>";} elseif($md>919){echo "<td><font color = B2AFAF>19</font></td>";} else{echo "<td><font color =0321F7>19</font></td>";} ?>
            <?php if($md==920){echo "<td><font color = red><b>20</b></font></td>";} elseif($md>920){echo "<td><font color = B2AFAF>20</font></td>";} else{echo "<td><font color =0321F7>20</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==4){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>4</th>
            <?php if($md==921){echo "<td><font color = red><b>21</b></font></td>";} elseif($md>921){echo "<td><font color = B2AFAF>21</font></td>";} else{echo "<td><font color =0321F7>21</font></td>";} ?>
            <?php if($md==922){echo "<td><font color = red><b>22</b></font></td>";} elseif($md>922){echo "<td><font color = B2AFAF>22</font></td>";} else{echo "<td><font color =0321F7>22</font></td>";} ?>
            <?php if($md==923){echo "<td><font color = red><b>23</b></font></td>";} elseif($md>923){echo "<td><font color = B2AFAF>23</font></td>";} else{echo "<td><font color =0321F7>23</font></td>";} ?>
            <?php if($md==924){echo "<td><font color = red><b>24</b></font></td>";} elseif($md>924){echo "<td><font color = B2AFAF>24</font></td>";} else{echo "<td><font color =0321F7>24</font></td>";} ?>
            <?php if($md==925){echo "<td><font color = red><b>25</b></font></td>";} elseif($md>925){echo "<td><font color = B2AFAF>25</font></td>";} else{echo "<td><font color =0321F7>25</font></td>";} ?>
            <?php if($md==926){echo "<td><font color = red><b>26</b></font></td>";} elseif($md>926){echo "<td><font color = B2AFAF>26</font></td>";} else{echo "<td><font color =0321F7>26</font></td>";} ?>
            <?php if($md==927){echo "<td><font color = red><b>27</b></font></td>";} elseif($md>927){echo "<td><font color = B2AFAF>27</font></td>";} else{echo "<td><font color =0321F7>27</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==5){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>5</th>
            <?php if($md==928){echo "<td><font color = red><b>28</b></font></td>";} elseif($md>928){echo "<td><font color = B2AFAF>28</font></td>";} else{echo "<td><font color =0321F7>28</font></td>";} ?>
            <?php if($md==929){echo "<td><font color = red><b>29</b></font></td>";} elseif($md>929){echo "<td><font color = B2AFAF>29</font></td>";} else{echo "<td><font color =0321F7>29</font></td>";} ?>
            <?php if($md==930){echo "<td><font color = red><b>30</b></font></td>";} elseif($md>930){echo "<td><font color = B2AFAF>30</font></td>";} else{echo "<td><font color =0321F7>30</font></td>";} ?>
            <?php if($md==1001){echo "<td bgcolor=7CF508><font color = red><b>10.1国庆中秋</b></font></td>";} elseif($md>1001){echo "<td bgcolor=7CF508><font color = B2AFAF>10.1国庆中秋</font></td>";} else{echo "<td bgcolor=7CF508><font color =0321F7>10.1国庆中秋</font></td>";} ?>
            <?php if($md==1002){echo "<td><font color = red><b>2国庆</b></font></td>";} elseif($md>1002){echo "<td><font color = B2AFAF>2国庆</font></td>";} else{echo "<td><font color =0321F7>2国庆</font></td>";} ?>
            <?php if($md==1003){echo "<td><font color = red><b>3国庆</b></font></td>";} elseif($md>1003){echo "<td><font color = B2AFAF>3国庆</font></td>";} else{echo "<td><font color =0321F7>3国庆</font></td>";} ?>
            <?php if($md==1004){echo "<td><font color = red><b>4</b></font></td>";} elseif($md>1004){echo "<td><font color = B2AFAF>4</font></td>";} else{echo "<td><font color =0321F7>4</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==6){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>6</th><?php if($md==1005){echo "<td><font color = red><b>5</b></font></td>";} elseif($md>1005){echo "<td><font color = B2AFAF>5</font></td>";} else{echo "<td><font color =0321F7>5</font></td>";} ?>
            <?php if($md==1006){echo "<td><font color = red><b>6</b></font></td>";} elseif($md>1006){echo "<td><font color = B2AFAF>6</font></td>";} else{echo "<td><font color =0321F7>6</font></td>";} ?>
            <?php if($md==1007){echo "<td><font color = red><b>7</b></font></td>";} elseif($md>1007){echo "<td><font color = B2AFAF>7</font></td>";} else{echo "<td><font color =0321F7>7</font></td>";} ?>
            <?php if($md==1008){echo "<td><font color = red><b>8</b></font></td>";} elseif($md>1008){echo "<td><font color = B2AFAF>8</font></td>";} else{echo "<td><font color =0321F7>8</font></td>";} ?>
            <?php if($md==1009){echo "<td><font color = red><b>9</b></font></td>";} elseif($md>1009){echo "<td><font color = B2AFAF>9</font></td>";} else{echo "<td><font color =0321F7>9</font></td>";} ?>
            <?php if($md==1010){echo "<td><font color = red><b>10</b></font></td>";} elseif($md>1010){echo "<td><font color = B2AFAF>10</font></td>";} else{echo "<td><font color =0321F7>10</font></td>";} ?>
            <?php if($md==1011){echo "<td><font color = red><b>11</b></font></td>";} elseif($md>1011){echo "<td><font color = B2AFAF>11</font></td>";} else{echo "<td><font color =0321F7>11</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==7){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>7</th>
            <?php if($md==1012){echo "<td><font color = red><b>12</b></font></td>";} elseif($md>1012){echo "<td><font color = B2AFAF>12</font></td>";} else{echo "<td><font color =0321F7>12</font></td>";} ?>
            <?php if($md==1013){echo "<td><font color = red><b>13</b></font></td>";} elseif($md>1013){echo "<td><font color = B2AFAF>13</font></td>";} else{echo "<td><font color =0321F7>13</font></td>";} ?>
            <?php if($md==1014){echo "<td><font color = red><b>14</b></font></td>";} elseif($md>1014){echo "<td><font color = B2AFAF>14</font></td>";} else{echo "<td><font color =0321F7>14</font></td>";} ?>
            <?php if($md==1015){echo "<td><font color = red><b>15</b></font></td>";} elseif($md>1015){echo "<td><font color = B2AFAF>15</font></td>";} else{echo "<td><font color =0321F7>15</font></td>";} ?>
            <?php if($md==1016){echo "<td><font color = red><b>16</b></font></td>";} elseif($md>1016){echo "<td><font color = B2AFAF>16</font></td>";} else{echo "<td><font color =0321F7>16</font></td>";} ?>
            <?php if($md==1017){echo "<td><font color = red><b>17</b></font></td>";} elseif($md>1017){echo "<td><font color = B2AFAF>17</font></td>";} else{echo "<td><font color =0321F7>17</font></td>";} ?>
            <?php if($md==1018){echo "<td><font color = red><b>18</b></font></td>";} elseif($md>1018){echo "<td><font color = B2AFAF>18</font></td>";} else{echo "<td><font color =0321F7>18</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==8){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>8</th>
            <?php if($md==1019){echo "<td><font color = red><b>19</b></font></td>";} elseif($md>1019){echo "<td><font color = B2AFAF>19</font></td>";} else{echo "<td><font color =0321F7>19</font></td>";} ?>
            <?php if($md==1020){echo "<td><font color = red><b>20</b></font></td>";} elseif($md>1020){echo "<td><font color = B2AFAF>20</font></td>";} else{echo "<td><font color =0321F7>20</font></td>";} ?>
            <?php if($md==1021){echo "<td><font color = red><b>21</b></font></td>";} elseif($md>1021){echo "<td><font color = B2AFAF>21</font></td>";} else{echo "<td><font color =0321F7>21</font></td>";} ?>
            <?php if($md==1022){echo "<td><font color = red><b>22</b></font></td>";} elseif($md>1022){echo "<td><font color = B2AFAF>22</font></td>";} else{echo "<td><font color =0321F7>22</font></td>";} ?>
            <?php if($md==1023){echo "<td><font color = red><b>23</b></font></td>";} elseif($md>1023){echo "<td><font color = B2AFAF>23</font></td>";} else{echo "<td><font color =0321F7>23</font></td>";} ?>
            <?php if($md==1024){echo "<td><font color = red><b>24</b></font></td>";} elseif($md>1024){echo "<td><font color = B2AFAF>24</font></td>";} else{echo "<td><font color =0321F7>24</font></td>";} ?>
            <?php if($md==1025){echo "<td><font color = red><b>25</b></font></td>";} elseif($md>1025){echo "<td><font color = B2AFAF>25</font></td>";} else{echo "<td><font color =0321F7>25</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==9){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>9</th>
            <?php if($md==1026){echo "<td><font color = red><b>26</b></font></td>";} elseif($md>1026){echo "<td><font color = B2AFAF>26</font></td>";} else{echo "<td><font color =0321F7>26</font></td>";} ?>
            <?php if($md==1027){echo "<td><font color = red><b>27</b></font></td>";} elseif($md>1027){echo "<td><font color = B2AFAF>27</font></td>";} else{echo "<td><font color =0321F7>27</font></td>";} ?>
            <?php if($md==1028){echo "<td><font color = red><b>28</b></font></td>";} elseif($md>1028){echo "<td><font color = B2AFAF>28</font></td>";} else{echo "<td><font color =0321F7>28</font></td>";} ?>
            <?php if($md==1029){echo "<td><font color = red><b>29</b></font></td>";} elseif($md>1029){echo "<td><font color = B2AFAF>29</font></td>";} else{echo "<td><font color =0321F7>29</font></td>";} ?>
            <?php if($md==1030){echo "<td><font color = red><b>30</b></font></td>";} elseif($md>1030){echo "<td><font color = B2AFAF>30</font></td>";} else{echo "<td><font color =0321F7>30</font></td>";} ?>
            <?php if($md==1031){echo "<td><font color = red><b>31</b></font></td>";} elseif($md>1031){echo "<td><font color = B2AFAF>31</font></td>";} else{echo "<td><font color =0321F7>31</font></td>";} ?>
            <?php if($md==1101){echo "<td bgcolor=7CF508><font color = red><b>11.1</b></font></td>";} elseif($md>1101){echo "<td bgcolor=7CF508><font color = B2AFAF>11.1</font></td>";} else{echo "<td bgcolor=7CF508><font color =0321F7>11.1</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==10){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>10</th>
            <?php if($md==1102){echo "<td><font color = red><b>2</b></font></td>";} elseif($md>1102){echo "<td><font color = B2AFAF>2</font></td>";} else{echo "<td><font color =0321F7>2</font></td>";} ?>
            <?php if($md==1103){echo "<td><font color = red><b>3</b></font></td>";} elseif($md>1103){echo "<td><font color = B2AFAF>3</font></td>";} else{echo "<td><font color =0321F7>3</font></td>";} ?>
            <?php if($md==1104){echo "<td><font color = red><b>4</b></font></td>";} elseif($md>1104){echo "<td><font color = B2AFAF>4</font></td>";} else{echo "<td><font color =0321F7>4</font></td>";} ?>
            <?php if($md==1105){echo "<td><font color = red><b>5</b></font></td>";} elseif($md>1105){echo "<td><font color = B2AFAF>5</font></td>";} else{echo "<td><font color =0321F7>5</font></td>";} ?>
            <?php if($md==1106){echo "<td><font color = red><b>6</b></font></td>";} elseif($md>1106){echo "<td><font color = B2AFAF>6</font></td>";} else{echo "<td><font color =0321F7>6</font></td>";} ?>
            <?php if($md==1107){echo "<td><font color = red><b>7</b></font></td>";} elseif($md>1107){echo "<td><font color = B2AFAF>7</font></td>";} else{echo "<td><font color =0321F7>7</font></td>";} ?>
            <?php if($md==1108){echo "<td><font color = red><b>8</b></font></td>";} elseif($md>1108){echo "<td><font color = B2AFAF>8</font></td>";} else{echo "<td><font color =0321F7>8</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==11){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>11</th>
            <?php if($md==1109){echo "<td><font color = red><b>9</b></font></td>";} elseif($md>1109){echo "<td><font color = B2AFAF>9</font></td>";} else{echo "<td><font color =0321F7>9</font></td>";} ?>
            <?php if($md==1110){echo "<td><font color = red><b>10</b></font></td>";} elseif($md>1110){echo "<td><font color = B2AFAF>10</font></td>";} else{echo "<td><font color =0321F7>10</font></td>";} ?>
            <?php if($md==1111){echo "<td><font color = red><b>11</b></font></td>";} elseif($md>1111){echo "<td><font color = B2AFAF>11</font></td>";} else{echo "<td><font color =0321F7>11</font></td>";} ?>
            <?php if($md==1112){echo "<td><font color = red><b>12</b></font></td>";} elseif($md>1112){echo "<td><font color = B2AFAF>12</font></td>";} else{echo "<td><font color =0321F7>12</font></td>";} ?>
            <?php if($md==1113){echo "<td><font color = red><b>13</b></font></td>";} elseif($md>1113){echo "<td><font color = B2AFAF>13</font></td>";} else{echo "<td><font color =0321F7>13</font></td>";} ?>
            <?php if($md==1114){echo "<td><font color = red><b>14</b></font></td>";} elseif($md>1114){echo "<td><font color = B2AFAF>14</font></td>";} else{echo "<td><font color =0321F7>14</font></td>";} ?>
            <?php if($md==1115){echo "<td><font color = red><b>15</b></font></td>";} elseif($md>1115){echo "<td><font color = B2AFAF>15</font></td>";} else{echo "<td><font color =0321F7>15</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==12){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>12</th>
            <?php if($md==1120){echo "<td><font color = red><b>16</b></font></td>";} elseif($md>1116){echo "<td><font color = B2AFAF>16</font></td>";} else{echo "<td><font color =0321F7>16</font></td>";} ?>
            <?php if($md==1117){echo "<td><font color = red><b>17</b></font></td>";} elseif($md>1117){echo "<td><font color = B2AFAF>17</font></td>";} else{echo "<td><font color =0321F7>17</font></td>";} ?>
            <?php if($md==1118){echo "<td><font color = red><b>18</b></font></td>";} elseif($md>1118){echo "<td><font color = B2AFAF>18</font></td>";} else{echo "<td><font color =0321F7>18</font></td>";} ?>
            <?php if($md==1119){echo "<td><font color = red><b>19</b></font></td>";} elseif($md>1119){echo "<td><font color = B2AFAF>19</font></td>";} else{echo "<td><font color =0321F7>19</font></td>";} ?>
            <?php if($md==1120){echo "<td><font color = red><b>20</b></font></td>";} elseif($md>1120){echo "<td><font color = B2AFAF>20</font></td>";} else{echo "<td><font color =0321F7>20</font></td>";} ?>
            <?php if($md==1121){echo "<td><font color = red><b>21</b></font></td>";} elseif($md>1121){echo "<td><font color = B2AFAF>21</font></td>";} else{echo "<td><font color =0321F7>21</font></td>";} ?>
            <?php if($md==1122){echo "<td><font color = red><b>22</b></font></td>";} elseif($md>1122){echo "<td><font color = B2AFAF>22</font></td>";} else{echo "<td><font color =0321F7>22</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==13){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>13</th>
            <?php if($md==1123){echo "<td><font color = red><b>23</b></font></td>";} elseif($md>1123){echo "<td><font color = B2AFAF>23</font></td>";} else{echo "<td><font color =0321F7>23</font></td>";} ?>
            <?php if($md==1124){echo "<td><font color = red><b>24</b></font></td>";} elseif($md>1124){echo "<td><font color = B2AFAF>24</font></td>";} else{echo "<td><font color =0321F7>24</font></td>";} ?>
            <?php if($md==1125){echo "<td><font color = red><b>25</b></font></td>";} elseif($md>1125){echo "<td><font color = B2AFAF>25</font></td>";} else{echo "<td><font color =0321F7>25</font></td>";} ?>
            <?php if($md==1126){echo "<td><font color = red><b>26</b></font></td>";} elseif($md>1126){echo "<td><font color = B2AFAF>26</font></td>";} else{echo "<td><font color =0321F7>26</font></td>";} ?>
            <?php if($md==1127){echo "<td><font color = red><b>27</b></font></td>";} elseif($md>1127){echo "<td><font color = B2AFAF>27</font></td>";} else{echo "<td><font color =0321F7>27</font></td>";} ?>
            <?php if($md==1128){echo "<td><font color = red><b>28</b></font></td>";} elseif($md>1128){echo "<td><font color = B2AFAF>28</font></td>";} else{echo "<td><font color =0321F7>28</font></td>";} ?>
            <?php if($md==1129){echo "<td><font color = red><b>29</b></font></td>";} elseif($md>1129){echo "<td><font color = B2AFAF>29</font></td>";} else{echo "<td><font color =0321F7>29</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==14){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>14</th>
            <?php if($md==1130){echo "<td><font color = red><b>30</b></font></td>";} elseif($md>1130){echo "<td><font color = B2AFAF>30</font></td>";} else{echo "<td><font color =0321F7>30</font></td>";} ?>
            <?php if($md==1201){echo "<td bgcolor=7CF508><font color = red><b>12.1</b></font></td>";} elseif($md>1201){echo "<td bgcolor=7CF508><font color = B2AFAF>12.1</font></td>";} else{echo "<td bgcolor=7CF508><font color =0321F7>12.1</font></td>";} ?>
            <?php if($md==1202){echo "<td><font color = red><b>2</b></font></td>";} elseif($md>1202){echo "<td><font color = B2AFAF>2</font></td>";} else{echo "<td><font color =0321F7>2</font></td>";} ?>
            <?php if($md==1203){echo "<td><font color = red><b>3</b></font></td>";} elseif($md>1203){echo "<td><font color = B2AFAF>3</font></td>";} else{echo "<td><font color =0321F7>3</font></td>";} ?>
            <?php if($md==1204){echo "<td><font color = red><b>4</b></font></td>";} elseif($md>1204){echo "<td><font color = B2AFAF>4</font></td>";} else{echo "<td><font color =0321F7>4</font></td>";} ?>
            <?php if($md==1205){echo "<td><font color = red><b>5</b></font></td>";} elseif($md>1205){echo "<td><font color = B2AFAF>5</font></td>";} else{echo "<td><font color =0321F7>5</font></td>";} ?>
            <?php if($md==1206){echo "<td><font color = red><b>6</b></font></td>";} elseif($md>1206){echo "<td><font color = B2AFAF>6</font></td>";} else{echo "<td><font color =0321F7>6</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==15){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>15</th>
            <?php if($md==1207){echo "<td><font color = red><b>7</b></font></td>";} elseif($md>1207){echo "<td><font color = B2AFAF>7</font></td>";} else{echo "<td><font color =0321F7>7</font></td>";} ?>
            <?php if($md==1208){echo "<td><font color = red><b>8</b></font></td>";} elseif($md>1208){echo "<td><font color = B2AFAF>8</font></td>";} else{echo "<td><font color =0321F7>8</font></td>";} ?>
            <?php if($md==1209){echo "<td><font color = red><b>9</b></font></td>";} elseif($md>1209){echo "<td><font color = B2AFAF>9</font></td>";} else{echo "<td><font color =0321F7>9</font></td>";} ?>
            <?php if($md==1210){echo "<td><font color = red><b>10</b></font></td>";} elseif($md>1210){echo "<td><font color = B2AFAF>10</font></td>";} else{echo "<td><font color =0321F7>10</font></td>";} ?>
            <?php if($md==1211){echo "<td><font color = red><b>11</b></font></td>";} elseif($md>1211){echo "<td><font color = B2AFAF>11</font></td>";} else{echo "<td><font color =0321F7>11</font></td>";} ?>
            <?php if($md==1212){echo "<td><font color = red><b>12</b></font></td>";} elseif($md>1212){echo "<td><font color = B2AFAF>12</font></td>";} else{echo "<td><font color =0321F7>12</font></td>";} ?>
            <?php if($md==1213){echo "<td><font color = red><b>13</b></font></td>";} elseif($md>1213){echo "<td><font color = B2AFAF>13</font></td>";} else{echo "<td><font color =0321F7>13</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==16){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>16</th>
            <?php if($md==1214){echo "<td><font color = red><b>14</b></font></td>";} elseif($md>1214){echo "<td><font color = B2AFAF>14</font></td>";} else{echo "<td><font color =0321F7>14</font></td>";} ?>
            <?php if($md==1215){echo "<td><font color = red><b>15</b></font></td>";} elseif($md>1215){echo "<td><font color = B2AFAF>15</font></td>";} else{echo "<td><font color =0321F7>15</font></td>";} ?>
            <?php if($md==1216){echo "<td><font color = red><b>16</b></font></td>";} elseif($md>1216){echo "<td><font color = B2AFAF>16</font></td>";} else{echo "<td><font color =0321F7>16</font></td>";} ?>
            <?php if($md==1217){echo "<td><font color = red><b>17</b></font></td>";} elseif($md>1217){echo "<td><font color = B2AFAF>17</font></td>";} else{echo "<td><font color =0321F7>17</font></td>";} ?>
            <?php if($md==1218){echo "<td><font color = red><b>18</b></font></td>";} elseif($md>1218){echo "<td><font color = B2AFAF>18</font></td>";} else{echo "<td><font color =0321F7>18</font></td>";} ?>
            <?php if($md==1219){echo "<td><font color = red><b>19</b></font></td>";} elseif($md>1219){echo "<td><font color = B2AFAF>19</font></td>";} else{echo "<td><font color =0321F7>19</font></td>";} ?>
            <?php if($md==1220){echo "<td><font color = red><b>20</b></font></td>";} elseif($md>1220){echo "<td><font color = B2AFAF>20</font></td>";} else{echo "<td><font color =0321F7>20</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==17){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>17</th>
            <?php if($md==1221){echo "<td><font color = red><b>21</b></font></td>";} elseif($md>1221){echo "<td><font color = B2AFAF>21</font></td>";} else{echo "<td><font color =0321F7>21</font></td>";} ?>
            <?php if($md==1222){echo "<td><font color = red><b>22</b></font></td>";} elseif($md>1222){echo "<td><font color = B2AFAF>22</font></td>";} else{echo "<td><font color =0321F7>22</font></td>";} ?>
            <?php if($md==1223){echo "<td><font color = red><b>23</b></font></td>";} elseif($md>1223){echo "<td><font color = B2AFAF>23</font></td>";} else{echo "<td><font color =0321F7>23</font></td>";} ?>
            <?php if($md==1224){echo "<td><font color = red><b>24</b></font></td>";} elseif($md>1224){echo "<td><font color = B2AFAF>24</font></td>";} else{echo "<td><font color =0321F7>24</font></td>";} ?>
            <?php if($md==1225){echo "<td><font color = red><b>25</b></font></td>";} elseif($md>1225){echo "<td><font color = B2AFAF>25</font></td>";} else{echo "<td><font color =0321F7>25</font></td>";} ?>
            <?php if($md==1226){echo "<td><font color = red><b>26</b></font></td>";} elseif($md>1226){echo "<td><font color = B2AFAF>26</font></td>";} else{echo "<td><font color =0321F7>26</font></td>";} ?>
            <?php if($md==1227){echo "<td><font color = red><b>27</b></font></td>";} elseif($md>1227){echo "<td><font color = B2AFAF>27</font></td>";} else{echo "<td><font color =0321F7>27</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==18){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>18</th>
            <?php if($md==1228){echo "<td><font color = red><b>28</b></font></td>";} elseif($md>1228){echo "<td><font color = B2AFAF>28</font></td>";} else{echo "<td><font color =0321F7>28</font></td>";} ?>
            <?php if($md==1229){echo "<td><font color = red><b>29</b></font></td>";} elseif($md>1229){echo "<td><font color = B2AFAF>29</font></td>";} else{echo "<td><font color =0321F7>29</font></td>";} ?>
            <?php if($md==1230){echo "<td><font color = red><b>30</b></font></td>";} elseif($md>1230){echo "<td><font color = B2AFAF>30</font></td>";} else{echo "<td><font color =0321F7>30</font></td>";} ?>
            <?php if($md==1231){echo "<td><font color = red><b>31</b></font></td>";} elseif($md>1231){echo "<td><font color = B2AFAF>31</font></td>";} else{echo "<td><font color =0321F7>31</font></td>";} ?>
            <?php if($md==1301){echo "<td bgcolor=7CF508><font color = red><b>1.1元旦</b></font></td>";} elseif($md>1301){echo "<td bgcolor=7CF508><font color = B2AFAF>1.1元旦</font></td>";} else{echo "<td bgcolor=7CF508><font color =0321F7>1.1元旦</font></td>";} ?>
            <?php if($md==1302){echo "<td><font color = red><b>2</b></font></td>";} elseif($md>1302){echo "<td><font color = B2AFAF>2</font></td>";} else{echo "<td><font color =0321F7>2</font></td>";} ?>
            <?php if($md==1303){echo "<td><font color = red><b>3</b></font></td>";} elseif($md>1303){echo "<td><font color = B2AFAF>3</font></td>";} else{echo "<td><font color =0321F7>3</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==19){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>19</th>
            <?php if($md==1304){echo "<td><font color = red><b>4</b></font></td>";} elseif($md>1304){echo "<td><font color = B2AFAF>4</font></td>";} else{echo "<td><font color =0321F7>4</font></td>";} ?>
            <?php if($md==1305){echo "<td><font color = red><b>5</b></font></td>";} elseif($md>1305){echo "<td><font color = B2AFAF>5</font></td>";} else{echo "<td><font color =0321F7>5</font></td>";} ?>
            <?php if($md==1306){echo "<td><font color = red><b>6</b></font></td>";} elseif($md>1306){echo "<td><font color = B2AFAF>6</font></td>";} else{echo "<td><font color =0321F7>6</font></td>";} ?>
            <?php if($md==1307){echo "<td><font color = red><b>7</b></font></td>";} elseif($md>1307){echo "<td><font color = B2AFAF>7</font></td>";} else{echo "<td><font color =0321F7>7</font></td>";} ?>
            <?php if($md==1308){echo "<td><font color = red><b>8</b></font></td>";} elseif($md>1308){echo "<td><font color = B2AFAF>8</font></td>";} else{echo "<td><font color =0321F7>8</font></td>";} ?>
            <?php if($md==1309){echo "<td><font color = red><b>9</b></font></td>";} elseif($md>1309){echo "<td><font color = B2AFAF>9</font></td>";} else{echo "<td><font color =0321F7>9</font></td>";} ?>
            <?php if($md==1310){echo "<td><font color = red><b>10</b></font></td>";} elseif($md>1310){echo "<td><font color = B2AFAF>10</font></td>";} else{echo "<td><font color =0321F7>10</font></td>";} ?>
        </tr>
    <tr height = 40px align = center <?php if($w==20){echo "bgcolor=03EDF7";} ?> >
            <th bgcolor=AFABD5>20</th>
            <?php if($md==1311){echo "<td><font color = red><b>11</b></font></td>";} elseif($md>1311){echo "<td><font color = B2AFAF>11</font></td>";} else{echo "<td><font color =0321F7>11</font></td>";} ?>
            <?php if($md==1312){echo "<td><font color = red><b>12</b></font></td>";} elseif($md>1312){echo "<td><font color = B2AFAF>12</font></td>";} else{echo "<td><font color =0321F7>12</font></td>";} ?>
            <?php if($md==1313){echo "<td><font color = red><b>13</b></font></td>";} elseif($md>1313){echo "<td><font color = B2AFAF>13</font></td>";} else{echo "<td><font color =0321F7>13</font></td>";} ?>
            <?php if($md==1314){echo "<td><font color = red><b>14</b></font></td>";} elseif($md>1314){echo "<td><font color = B2AFAF>14</font></td>";} else{echo "<td><font color =0321F7>14</font></td>";} ?>
            <?php if($md==1315){echo "<td><font color = red><b>15</b></font></td>";} elseif($md>1315){echo "<td><font color = B2AFAF>15</font></td>";} else{echo "<td><font color =0321F7>15</font></td>";} ?>
            <?php if($md==1316){echo "<td><font color = red><b>16放假</b></font></td>";} elseif($md>1316){echo "<td><font color = B2AFAF>16放假</font></td>";} else{echo "<td><font color =0321F7>16放假</font></td>";} ?>
        </tr> 
    </table>

 
</body>
</html>

