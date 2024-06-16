<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
        // 1.算数运算符：+(加) -(减) *(乘) /(除) %(取余) 注意：一个数的余数不能大于该数本身
        // 先乘除后加减，同级的运算符从左到右执行
            $a=10;
            $b=$a+1;
            echo $a+$b.'<br>';
            echo $a-$b.'<br>';
            echo $a*$b.'<br>';
            echo $a/$b.'<br>';
            echo $a+$a*$b-$b/$a.'<br>'; //118.9

            echo $b%$a.'<br>'; //1
            $c=$a+$b;
            echo $c%$a.'<br>';  //1

            // 2.赋值运算符。=(赋值) +=(加等于) -=(减等于) *=(乘等于) /=(除等于) %=(模等于) .=(连接等于)
            $aa=100;
            $bb=$aa;//莫数问
            $aa+=10;//相当于$aa=$aa+10;
            echo $aa.'<br>';
            // 请分别举例写出-=(减等于) *=(乘等于) /=(除等于)的例子
            $bb-=20;//相当于$bb=$bb-20
            echo $bb.'<br>';
            $aa*=2;//相当于$aa=$aa*2
            echo $aa.'<br>';
            $aa/=25;//相当于$aa=$aa/25
            echo $aa.'<br>';

        ?>
    </body>
</html>