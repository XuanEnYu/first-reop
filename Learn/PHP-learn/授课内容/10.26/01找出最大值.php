<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        /* *：通配符。作用：选中页面中所有标签 */
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }
            .box{
                width: 800px;
                height: 500px;
                background: url(img/bg01.jpg) no-repeat;
                background-size: cover;
                margin: 50px auto;
                position: relative;
            }
            .box>div{
                background: rgba(255, 0, 0, 0.6);
                position: absolute;
                font-size: 24px;
                font-weight: bold;
                padding: 5px 20px;
            }
            #number1{
                bottom: 100px;
                left: 200px;
            }
            #number2{
                bottom: 100px;
                left: 350px;
            }
            #number3{
                bottom: 200px;
                right: 300px;
            }
            #number4{
                height: 41px;
                width: 60px;
                bottom: 200px;
                left: 270px;
            }
            #number5{
                height: 41px;
                width: 60px;
                bottom: 300px;
                left: 350px;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <div>已知数列：25、100、53，其最大值为：<span id="max"></span></div>
            <div id="number1">25</div>
            <div id="number2">100</div>
            <div id="number3">53</div>
            <div id="number4" onclick="compare1()"></div>
            <div id="number5" onclick="compare2()"></div>
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script>
            function compare1(){
                <?php
                    // 1.获取目标文件
                    $html=file_get_contents('01找出最大值.php');
                    // 2.创建一个DOMDocument对象
                    $dom=new DOMDocument();
                    // 3.将PHP文件转换为HTML文件
                    $dom->loadHTML($html);
                    // 获取页面中元素的内容
                    $num1=$dom->getElementById('number1')->nodeValue;
                    $num2=$dom->getElementById('number2')->nodeValue;
                    // 比较两个数的大小
                    if($num1>$num2){
                        // 声明一个变量temp1，用于存放较大的数
                        $temp1=$num1;
                    }else{
                        $temp1=$num2;
                    }
                ?>
                // 将较大的值渲染到页面
                $('#number4').html(<?php echo $temp1; ?>);
            }
            function compare2(){
                <?php
                    // 1.获取目标文件
                    $html=file_get_contents('01找出最大值.php');
                    // 2.创建一个DOMDocument对象
                    $dom=new DOMDocument();
                    // 3.将PHP文件转换为HTML文件
                    $dom->loadHTML($html);
                    // 获取页面中元素的内容
                    $num1=$dom->getElementById('number1')->nodeValue;
                    $num2=$dom->getElementById('number2')->nodeValue;
                    $num3=$dom->getElementById('number3')->nodeValue;
                    // 比较两个数的大小
                    if($num1>$num2){
                        // 声明一个变量temp1，用于存放较大的数
                        $temp1=$num1;
                    }else{
                        $temp1=$num2;
                    }
                    // 用第三个数和较大的数作比较
                    if($num3>$temp1){
                        // temp2用于存放最大的数
                        $temp2=$num3;
                    }else{
                        $temp2=$temp1;
                    }
                ?>
                // 将较大的值渲染到页面
                $('#number4').html(<?php echo $temp1; ?>);
                $('#number5').html(<?php echo $temp2; ?>);
                $('#max').html(<?php echo $temp2; ?>);
            }
        </script>
    </body>
</html>