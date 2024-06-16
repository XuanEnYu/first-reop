<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /* 函数：将某段有特定功能的代码封装起来
                语法：function 函数名(参数1,参数2,...){函数体}
                注意：参数为可选项，如不需要则可以不写
            */
            // 1.定义函数。函数定义后，可以被多次调用
            // 无参函数
            function sum(){
                echo '这是函数的内部<br>';
            }
            // 2.调用函数。语法：函数名(参数1,参数2,...)。参数为可选项，如不需要则可以不写
            sum();
            sum();
            sum();
            sum();

            // 3.有参函数。函数定义时的参数叫做形式参数，即形参
            function call($name,$myfriend){
                echo '大家好，我是'.$name.'，我的好朋友叫'.$myfriend.'<br>';
            }
            // 函数调用时的参数叫做实际参数，即实参
            call('梁国标','宣恩宇');
            call('陈炜乐','严梦豪');
        ?>
    </body>
</html>