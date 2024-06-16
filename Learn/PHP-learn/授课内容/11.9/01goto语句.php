<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // goto语句：跳转到程序的某个位置
            for($i=1;$i<=10;$i++){
                if($i>5){
                    // goto 目标标记; 跳转到end标记处。目标标记是自定义的标记，可以叫任意的名称
                    // goto end;
                    goto home;
                }
                echo $i.'<br>';
            }
            // end：目标标记后面加:
            // end:
            home:
            echo '跳转到程序的目标位置：'.$i.'<br>';
        ?>
    </body>
</html>