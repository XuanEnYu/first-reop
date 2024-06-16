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
                box-sizing:border-box;
            }
            .box{
                width:900px;
                height:600px;
                background:url('img/bg01.jpg') no-repeat;
                background-size:cover;
                margin:50px auto;
                display:flex;
                justify-content:space-around;
            }
            .area{
                width:400px;
                height:400px;
                background:rgba(217,195,87,0.48);
                margin-top:50px;
                display:flex;
                flex-wrap:wrap;
            }
            .area>div{
                width:100px;
                height:100px;
                border:1px solid red;
            }
        </style>
    </head>
    <body>
    
        <div class="box">
            <div class="area">
                <?php

                    for($i=0;$i<16;$i++){
                        echo '<div style="background:url(images/dog_'.($i+1).'.jpg) no-repeat;
                        background-size:cover;"></div>';
                    }
                ?>
            </div>
            <div class="area"></div>
        </div>
    </body>
</html>