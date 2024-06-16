<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // $a是字符串类型。将数据转换为字符串类型。语法：(string)数据
           $a='hello';
        //    检测数据类型
           echo is_string($a);
           echo '<br>';
        //    将字符串类型转换为布尔型。语法：(boolean)数据
           $a=(boolean)$a;
        //    检测数据类型
           echo is_bool($a);
           echo '<br>';
        //    将数据转换为浮点型。(float)数据
           $a=(float)$a;
           echo is_float($a);
           echo '<br>';
        //    将数据转换为整型。语法：(int)数据 或 (integer)数据
           $a=(int)$a;
           echo is_integer($a);
           echo '<br>';
        // 拓展作业：请将变量b转换为浮点型、字符串型、布尔型的数据，并检测
        $b=20;

        ?>
    </body>
</html>