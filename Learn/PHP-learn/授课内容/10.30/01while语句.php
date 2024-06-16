<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /*  while语句：重复进行条件判断，当条件成立时，执行循环体，不成立时，结束循环
                语法：while(条件){循环体}
                注意：条件不能永远为真，否则就变成死循环
            */ 
            $n=4;
            while($n<10){
                echo $n.'<br>';
                $n++;
            }
            // 练习：请在页面中输出数字100到200
            $a=100;
            while($a<201){
                echo $a.'<br>';
                $a++;
            }
        ?>
    </body>
</html>