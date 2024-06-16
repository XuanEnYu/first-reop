<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php   
            /* switch语句。注意：表达式一定有值
                语法：case后面跟期望值，即你需要的值
                switch(表达式){
                    case 结果1:
                        执行代码1;
                        break;
                    case 结果2:
                        执行代码2;
                        break;
                    ...
                    case 结果n:
                        执行代码n;
                        break;
                    default:
                        以上结果都不符合时，执行此处代码
                        break;
                }
            */
            $n=1;
            switch($n){ //此处的$n为表达式
                case 1: //case 后面跟着变量n的可能值
                    echo 'n='.$n;
                    // break：跳出switch语句。如果不写break，代码从上到下
                    // 执行，直到switch语句结束。
                    // 注意：每种结果代码执行结束后，都要写break语句
                    break;
                case 2:
                case 3:
                case 4:
                    // 此处表示，表达式的值为2、3、4时，都执行相同的代码
                    echo '多个结果执行同一段代码，可以写在一起，n='.$n;
                    break;
                default:
                    echo '不是想要的值，此时n='.$n;
                    break;
            }
        ?>
    </body>
</html>