<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            *{
                margin:0px;
                padding:0px;
                box-sizing:border-box;
            }
            .box{
                width:800px;
                height:500px;
                background:url('img/bg01.jpg') no-repeat;
                background-size:cover;
                margin:50px auto;
                padding:25px;
            }
            .area{
                width:750px;
                height:450px;
                background:rgba(255,255,255,0.5);
            }
            .title{
                font-size:24px;
                color:purple;
                text-align:center;
                line-height:40px;
            }
            .table{
                display:flex;
                justify-content:space-evenly;
            }
            .table>div{
                width:50px;
            }
            .year{
                width:50px;
                height:50px;
                background:tomato;
                border-radius:50%;
                line-height:50px;
                text-align:center;
                color:white;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <div class="area">
                <div class="title"> 
                    2008-2017年北京市高考报名人数
                </div>

                <div class="table">
                    <?php
                        $arr=[
                            ["年份", "人数", "普通文科", "普通理科", "其他"],
                            [2008, 118106, 33642, 70147, 14317],
                            [2009, 100335, 29140, 59052, 12143],
                            [2010, 80241, 25643, 48365, 6233],
                            [2011, 76007, 25418, 45439, 5150],
                            [2012, 73460, 22855, 45494, 5111],
                            [2013, 72736, 20913, 46455, 5368],
                            [2014, 70517, 19389, 45095, 6033],
                            [2015, 67816, 19617, 41819, 6380],
                            [2016, 61222, 18425, 37255, 5542],
                            [2017, 60638, 17641, 36595, 6402],
                        ];
                        // 根据年份的个数，生成div，每个div存放一个年份的信息
                        for($i=0;$i<10;$i++){
                            echo '<div>
                                <div class="year">'.$arr[$i+1][0].'</div>
                            </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>