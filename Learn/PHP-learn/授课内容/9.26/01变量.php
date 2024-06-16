<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // 变量。语法：$变量名。php为弱语言，变量的数据类型由变量的值决定。

            // 1.布尔型(boolean)。只有true和false两个值
            $a=false; 
            $b=true;
            // 检测数据类型，语法：is_*(要检测的数据)。如果符合，则输出1；如果不符合，则输出空
            echo '检测数据是否为布尔型：'.is_bool($b).'<br>';
            echo '检测数据是否为整型：'.is_integer($b).'<br>';
            echo '检测数据是否为浮点型：'.is_float($b).'<br>';
            echo '检测数据是否为字符串型：'.is_string($b).'<br>';
            // 2.整型(integer)。即整数，可正可负可为0
            $_a=10;
            $int=-23;
            // 3.浮点型(float)。即小数，可正可负可为0.0
            $a_b=3.14195;
            $ss=-0.3555546;
            // 4.字符串型(string)。即使用""或''包裹起来的数据
            $a2='hello';
            $a3='10';
            $sadfo="true";
            // echo $a2;
            // 练习：请给每种数据类型声明一个变量
            // 作业：请检测$int、$a_b、$a3的数据类型。
        ?>
    </body>
</html>