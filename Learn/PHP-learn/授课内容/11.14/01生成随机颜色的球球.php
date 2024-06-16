<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            *{
                margin:0;
                padding:0;
            }
            .box{
                width:700px;
                height:550px;
                background:url('img/bg01.jpg') no-repeat;
                background-size:cover;
                margin:50px auto;
                display:flex;
                flex-wrap:wrap;
                padding:30px 35px;
                box-sizing:border-box;
            }
            .box div{
                width:90px;
                height:90px;
                border-radius:50%;
            }
            .red{
                background:-webkit-radial-gradient(center, white, red);
            }
            .yellow{
                background:-webkit-radial-gradient(center, white, yellow);
            }
            .green{
                background:-webkit-radial-gradient(center, white, green);
            }
            .blue{
                background:-webkit-radial-gradient(center, white, blue);
            }
            .purple{
                background:-webkit-radial-gradient(center, white, purple);
            }
            .tomato{
                background:-webkit-radial-gradient(center, white, tomato);
            }
        </style>
    </head>
    <body>
        <?php
        // rand()：生成一个随机的整数
        // 生成1到6的随机数
            // $n=rand(1,6);
            // echo $n;
        ?>
        <div class="box">
            <?php
                // for循环语句生成球球
                for($i=0;$i<35;$i++){
                    $n=rand(1,6);
                    switch($n){
                        case 1:
                            $color='red';
                            goto end;
                        case 2:
                            $color='yellow';
                            goto end;
                        case 3:
                            $color='green';
                            goto end;
                        case 4:
                            $color='blue';
                            goto end;
                        case 5:
                            $color='purple';
                            goto end;
                        default:
                            $color='tomato';
                            goto end;
                    }
                    end:
                    echo '<div class="'.$color.'"></div>';
                }
            ?>
        </div>
    </body>
</html>