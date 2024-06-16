<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            *{
                margin:0;
                padding:0
            }
            .box{
                width:700px;
                height:500px;
                background:url('img/1.webp') no-repeat;
                background-size:cover;
                margin:50px auto;
                overflow:hidden;
            }
            .area{
                width:600px;
                height:400px;
                background:rgba(255,255,255,0.6);
                margin:50px auto;
                display:flex;
                flex-wrap:wrap;
            }
            .circle{
                width:200px;
                height:200px;
                position:relative;
            }
            .circle>div{
                border-radius:50%;
                box-sizing:border-box;
                position:absolute;
            }
            .circle>div:nth-child(1){
                width:200px;
                height:200px;
                border:8px solid red;
                top:0;
                left:0;
            }
            .circle>div:nth-child(2){
                width:170px;
                height:170px;
                border:8px solid lime;
                top:15px;
                left:15px;
            }
            .circle>div:nth-child(3){
                width:140px;
                height:140px;
                border:8px solid pink;
                top:30px;
                left:30px;
            }
            .circle>div:nth-child(4){
                width:110px;
                height:110px;
                border:8px solid blue;
                top:45px;
                left:45px;
            }
            .circle>div:nth-child(5){
                width:80px;
                height:80px;
                border:8px solid black;
                top:60px;
                left:60px;
            }
            /* 练习：请完成第3、4、5个环的样式 */
        </style>
    </head>
    <body>
            
        <div class="box">
            <div class="area">
                <?php
                // 第一轮遍历，生成6个靶
                    for($i=0;$i<6;$i++){?>
                        <div class="circle">
                            <?php
                            // 第二轮遍历，每个靶生成5个环
                                for($j=0;$j<5;$j++){?>
                                    <div></div>
                                <?php
                                }
                            ?>
                        </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </body>
</html>