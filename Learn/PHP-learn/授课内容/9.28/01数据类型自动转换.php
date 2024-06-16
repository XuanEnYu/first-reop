<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // 1.转换为布尔型
            $a='hello';
            // 变量a在和true进行判断前，先进行了数据类型转换，由1转换为true
            // 此处的数据类型转换为自动转换
            // 除了0、0.0、空数组、空对象会转换为false之外，其余值都会转换为true
            if($a==true){ //1==true
                echo '变量先转换类型，再进行判等';
            }
            // 2.转换为正数
            $b=true;
            $c=10;
            $d='20';
            // 布尔型可以转换为整型
            echo $b+$c;
            // 只有值为数字的字符串才可以转为整型
            echo $d+$b;
            // 3.转换为字符串型。字符串与字符串直接用.连接。+默认转换为整数型或浮点型。
            echo $a.$b;
            echo '<br>';
            echo $c.$d;
        ?>
    </body>
</html>