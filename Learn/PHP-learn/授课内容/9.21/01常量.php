<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            // 常量，不可改变的值称为常量
            //语法： define(常量名,常量值,大小写敏感设置)
            // 第一第二个参数是必选，第三个参数为可选，
            // 第三个参数默认为false，表示大小写敏感，true表示大小写不敏感
            // 声明常量
            define('sId','2023200401',true);
            // echo：在页面中输出内容
            echo sId;
            echo sid;
            // 作业：请声明一个常量，要求大小写敏感。莫淑雯

        ?>
    </body>
</html>