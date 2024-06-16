<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // 1.break语句。跳出某个结构
            for($i=1;$i<=100;$i++){
                if($i>10){
                    // 跳出for语句，终止循环。
                    break;
                }
                echo $i.'<br>';
            }
            // 2.continue语句。跳出某个结构
            for($n=1;$n<=100;$n++){
                if($n%2==1){
                    // 跳出for语句，终止本次循环，开始下次循环
                    continue;
                }
                echo $n.'<br>';
            }
        ?>
    </body>
</html>