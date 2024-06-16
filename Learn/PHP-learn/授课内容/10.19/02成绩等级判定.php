<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /*  作业：莫淑雯
                成绩等级判定，已知成绩范围是0-100
                当成绩为90到100分，等级为A；
                当成绩为80到90分，等级为B；
                当成绩为70到80分，等级为C；
                当成绩为60到70分，等级为D；
                60分以下，等级为E
            */ 
            $score=86; //分数
            if($score<0 || $score>100){
                echo '该分数无效';
            }else if($score>=90){
                echo "等级为A";
            }
        ?>
    </body>
</html>