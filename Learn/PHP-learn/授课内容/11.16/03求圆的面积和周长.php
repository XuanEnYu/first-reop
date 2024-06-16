<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /*作业：请定义一个函数，实现传入圆的半径，返回圆的面积和周长
            已知：圆的面积=PI*半径*半径
                  圆的周长=2*PI*半径
            */ 
            // 定义常量PI
            define('PI','3.14159');
            function area($r){
                // 求面积
                $s=PI*$r*$r;
                // 求周长。莫淑雯
                $c=2*PI*$r;
                return '面积是：'.$s.'，周长为：'.$c;
            }
            echo area(10);
        ?>
    </body>
</html>