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
                
                语法：
                for(初始化值;判断条件;操作表达式){
                    循环体
                }
                执行步骤：
                1.执行初始化值
                2.执行判断条件，如果条件符合，执行第三步，否则结束循环
                3.执行循环体
                4.执行操作表达式
            */ 
            
            for($n=25;$n<=100;$n++){
                if($n%2==1){
                    echo $n;  
                    echo '<br>';
                }
            }
           
            for($n=4;$n<10;$n++){
                echo $n;  
                echo '<br>';
            }
        ?>
        <!-- 作业：请使用for语句，在页面中输出九九乘法表 -->
    </body>
</html>