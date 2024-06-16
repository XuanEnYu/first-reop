<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // 1.递增递减运算符。++  --
            $a=10;
            $a++;//a自身加1，此处a等于11
            echo $a.'<br>';
            /*  
                $a++：先将变量a的值赋值给表达式$a++，然后a再加1
                ++$a：a先加1，再把变量a的值赋值给表达式++$a
            */
            echo $a++.'<br>';//此处a等于12;a++等于11
            echo ++$a.'<br>';//此处a和++a的值相等，都等于13

            echo $a--.'<br>';//此处a等于12
            echo --$a.'<br>';//11

            // 2.比较运算符
            $b=2;
            $c='2';
            $e='4';
            // ==：判等，只要数值相等即可。如果等式成立，返回true(1)，否则返回false(空)
            // ===：判恒等，不仅数值要相等，数据类型也要相等。如果等式成立，返回true(1)，否则返回false(空)
            echo $b==$c.'<br>';
            echo $b===$c.'<br>';
            // 不等于 !=
            echo $c!=$e.'<br>';
            // 不恒等于 !==
            echo $b !== $c.'<br>';
            // 作业：请举例写出 >、>=、<、<=等例子。莫数问
            
        ?>
    </body>
</html>