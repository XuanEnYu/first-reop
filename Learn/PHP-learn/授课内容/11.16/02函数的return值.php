<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        /*在函数外部访问函数，得到的是函数的return值，如果没有指定return值，则默认return空
        */ 
            function sum($a,$b){
                $c=$a+$b;
                // 遇到return，表示函数结束，不再继续往下执行
                return '这是任意你想要别人看到的内容';
                // return $a;
            }
            echo sum(10,12);
            
        ?>
    </body>
</html>