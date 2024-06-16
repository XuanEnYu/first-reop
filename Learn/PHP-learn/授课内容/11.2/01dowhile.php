<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /*
                先执行循环体，再重复进行条件判断，如果条件符合，则进入循环体，否则结束循环
                语法：do{循环体}while(条件)

                while和dowhile的区别：
                while：先进行条件判断，条件符合再执行循环体
                dowhile：先执行循环体，再进行条件判断
            */ 
            $n=25;
            do{
                // 输出单数
                if($n%2==1){
                    echo $n;  
                    echo '<br>';
                }
                $n++;
            }while($n<=100)

            // 练习：请使用dowhile语句在页面中输出25到100的数字
        ?>
    </body>
</html>