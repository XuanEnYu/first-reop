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
                if多分支语句，语法：
                if(条件1){
                    条件1满足时执行
                }else if(条件2){
                    条件2满足时执行
                }
                ...
                else if(条件n){
                    条件n满足时执行
                }else{
                    以上条件都不满足时执行
                }
            */
            /*
                如果你有300元，你就去吃火锅；
                如果有200元，肯德基；
                如果有100元，吃小炒；
                否则，只能吃快餐
            */ 
            $money=400;
            if($money>=300){
                echo '吃火锅';
            }else if($money>=200){
                echo '吃肯德基';
            }else if($money>=100){
                echo '吃炒菜';
            }else{
                echo '吃快餐';
            }
        ?>
    </body>
</html>