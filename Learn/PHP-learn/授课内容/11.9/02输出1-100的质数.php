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
                height:500px;
                background:url(img/1.webp) no-repeat;
                background-size:cover;
                margin:50px auto;
            }
            table{
                width:100%;
                text-align:center;
                border-collapse:collapse;
            }
            td{
                border:1px solid black;
                line-height:40px;
            }
            .color{
                background:rgba(255,0,0,0.5);
            }
        </style>
    </head>
    <body>
        <div class="box">
        <table>
        <tr>
            <?php
                /* 质数，也叫素数。一个数除了1和其本身，没有其他数可以将它整除
                如：1，2，3，5，7，11，12
                作业：请在页面中输出1到100的质数
                */
                // 第一轮循环，遍历1到100
                for($n=1;$n<=100;$n++){
                    // 每个数从2开始对前面的取余
                    for($m=2;$m<=$n;$m++){
                        if($n%$m==0){
                            // 当余数为0时，跳出循环
                            break;
                        }
                    }
                    // 如果当前的数只能被自身整除，那么这个数是质数
                    if($n==$m){
                        echo '<td class="color">'.$n.'</td>';
                    }else{
                        echo '<td>'.$n.'</td>';
                    }
                    if($n%10==0){ //每10个数为一行
                        echo '</tr></tr>';
                    }
                }
            ?>
            </tr>
            </table>
        </div>
    </body>
</html>