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
                1.单分支语句。只有一种情况需要处理时使用
                语法：if(条件){
                    当条件满足时，执行此处的代码
                }
                2.双分支语句。当有两种情况需要处理时使用
                语法：if(条件){
                    当条件满足时，执行此处代码
                }else{
                    当条件不满足时，执行此处代码
                }
             */
            // 1.妈妈说，如果你考试得到了90分以上，将多给你100元零花钱
            $score=100; //这是我考到的分数
            if($score>=90){
                echo '给你多100块零花钱';
                echo '<br>';
            }
            // 2.爸爸说，如果你这个星期花的钱超过500块，我就打你屁股，如果不超过，你就还是我的好儿子
            $money=500; //这是我花的钱
            if($money>=350){
                echo '花那么多，花到哪里去了？打屁股';
                echo '<br>';
            }else{
                echo '呦呦呦，还知道省钱了';
                echo '<br>';
            }

            // 作业：如果你有50元，今晚就吃炸鸡；如果没有，就去饭堂吃快餐。莫淑雯
            
        ?>
    </body>
</html>