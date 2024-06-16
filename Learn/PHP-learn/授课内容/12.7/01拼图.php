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
                flex-wrap:wrap;
            }
            .reset{
                opacity:0;
            }
            #btn{
                width:120px;
                height:45px;
                border:none;
                background:#c74e4e99;
                color:white;
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
                // range()：生成某个范围的数组，此处生成一个0到15的数组
                    $arr=range(0,15);
                    // print_r($arr);
                    $arr= mess($arr,20);//调用乱序函数，将一个乱序的函数赋值给$arr
                    for($i=0;$i<16;$i++){
                        echo '<div style="background:url(img/part'.($arr[$i]+1).'.png) no-repeat;
                        background-size:cover;"></div>';
                    }
                    // 定义一个乱序函数
                    function mess($a,$n){
                        // $a：代表一个0到15的数组
                        // $n：代表要经过n轮的交换
                        for($i=0;$i<$n;$i++){
                            // 1.先将第一个数组元素放在一个临时变量中
                            $temp=$a[0];
                            // 2.将第随机个数组元素放在第一个的位置
                            $rand=mt_rand(1,15);
                            $a[0]=$a[$rand];
                            // 3.将原来第一个数组元素放在第随机个元素的位置
                            $a[$rand]=$temp;
                        }
                        return $a;
                    }
                ?>
            </div>
            <div class="area reset" id="reset">
                <?php
                    $arr=range(0,15);
                    // print_r($arr);
                    for($i=0;$i<16;$i++){
                        echo '<div style="background:url(img/part'.($arr[$i]+1).'.png) no-repeat;
                        background-size:cover;"></div>';
                    }
                ?>
            </div>

            <button id="btn">恢复</button>
            <script>
                document.getElementById('btn').onclick=function(){
                    document.getElementById('reset').style.opacity='1';
                }
            </script>
        </div>
    </body>
</html>