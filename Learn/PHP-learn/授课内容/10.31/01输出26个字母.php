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
                background:url('img/1.webp') no-repeat;
                background-size:cover;
                margin:50px auto;
                overflow:hidden;
            }
            table{
                border-collapse:collapse;
                margin:50px auto;
            }
            td{
                width:100px;
                line-height:30px;
                border:1px solid black;
                text-align:center;
                color:red;
                font-size:24px;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <table>
                <tr>
                    <?php // 练习：请使用while语句，根据ASCII值，在页面中输出A-Z 26个字母
                    // chr(ASCII值)：从不同 ASCII 值返回字符
                        $a=65;
                        $n=1;
                        while($a<=90){
                            ?>
                            <td>
                            <?php echo chr($a); ?>
                            </td>
                            <?php
                            $a++;
                            // 6个字母为一行
                            if($n%6==0){
                                ?>
                                </tr>
                                <tr>
                                <?php
                            }
                            $n++;
                        }  ?>
                </tr>
            </table>
        </div>
    </body>
</html>