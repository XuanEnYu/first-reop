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
            }
            .circle>div{
                border-radius:50%;
                box-sizing:border-box;
            }
            .circle>div:nth-child(1){
                width:200px;
                height:200px;
                border:8px solid red;
            }
        </style>
    </head>
    <body>
            
        <div class="box">
            <div class="area">
                <?php
                    for($i=0;$i<6;$i++){?>
                        <div class="circle">
                            <?php
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