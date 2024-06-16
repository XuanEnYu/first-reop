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
                逻辑运算符
                &&：逻辑与。语法：表达式1&&表达式2...。
                    只有当所有表达式都满足时，才会返回true(1)，只要有一个表达式不满足时，都会返回false(空)
                ||：逻辑或。语法：表达式1 || 表达式2 ...。
                    只要有一个表达式满足时，就会返回true(1)，只有当所有表达式都不满足时，才会返回false(空)
                !：逻辑非。取反。语法：!表达式。返回与表达式相反的结果
            */ 
            $a=20;
            $b=30;
            echo $a>5 && $b>20;
            echo '<br>';
            // 逻辑与的应用：判断$a是否在10到30之间。解析：a要大于等于10，并且要小于等于30
            if($a>=10 && $a<=30){
                // 当所有表达式都满足时，执行此处的代码
                echo '$a在10到30之间';
            }
            echo '<br>';
            echo $a<100 || $b<20;
            echo '<br>';
            // 逻辑或的应用：判断$a是否大于100，或者$b小于50。
            if($a>100 || $b<50){
                echo '有一个表达式满足时，运行此处代码';
            }
            echo '<br>';
            echo !($a>100);
            echo '<br>';
            
            /*作业：莫淑雯
                1、学校饭堂的牛肉面非常畅销，已知牛肉面10元一碗，请你帮小猫判断一下，它今天是否能吃到牛肉面(必做)
                2、已知螺蛳粉12块，打折的时候8块，请你判断一下，什么情况下才可以吃到螺蛳粉(选做)
            */ 
            $money=15; //小猫拥有的钱
            $count=100; //牛肉面的剩余数量
            $price=8;//螺蛳粉打折后的价格
            if($money>=10 && $count>0){
                echo '小猫吃到牛肉面啦！';
            }
            echo '<br>';
            // 第一种情况，你的钱足够多的时候
            if($money>=12){
                echo '可以选择去吃螺蛳粉';
            }
            // 第二种情况，你有8块，但不够12块的时候
            if($money>=8 && $money<12){
                echo '只有打折的时候才能去吃螺蛳粉';
            }
        ?>
    </body>
</html>