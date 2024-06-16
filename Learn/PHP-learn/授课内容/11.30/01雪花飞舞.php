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
                width:800px;
                height:550px;
                background:url('img/bg01.jpg') no-repeat;
                background-size:cover;
                margin:50px auto;
                position:relative;
            }
            .box>div{
                position:absolute;
            }
        </style>
    </head>
    <body>
            
        <div class="box">
            <?php
                // 调用生成雪花的函数，传入一个参数，用于决定生成多少朵雪花
                snow(100);
                // 定义一个函数，用于生成雪花
                function snow($n){
                    // 通过for语句，生成n个div
                    for($i=0;$i<$n;$i++){
                        // 生成两个随机数，作为雪花的位置
                        $t=mt_rand(10,500);
                        $l=mt_rand(10,750);
                        // 生成一个随机数，设置雪花的大小
                        $w=mt_rand(10,50);
                        $m=mt_rand(1,7);
                        switch($m){
                            case 1:
                                $pic='img/snow01.png';
                                break;
                            case 2:
                                $pic='img/snow02.png';
                                break;
                            case 3:
                                $pic='img/snow03.png';
                                break;
                            case 4:
                                $pic='img/snow04.png';
                                break;
                            case 5:
                                $pic='img/snow05.png';
                                break;
                            case 6:
                                $pic='img/snow06.png';
                                break;
                            default:
                                $pic='img/snow07.png';
                                break;
                        }
                        echo '<div style="left:'.$l.'px;top:'.$t.'px;">
                            <img src="'.$pic.'" width="'.$w.'">
                        </div>';
                    }
                    
                }
            ?>
        </div>
    </body>
</html>