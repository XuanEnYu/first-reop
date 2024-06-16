<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table{
                border-collapse:collapse;
            }
            td{
                border:1px solid black;
                width:120px;
                line-height:30px;
                text-align:center;
            }
            /* 莫淑雯 */
        </style>
    </head>
    <body>
        <!-- 
        作业：请使用for语句，在页面中输出九九乘法表 
        注意：先做php部分，再写HTML和CSS部分
        -->
        <table>
            <?php
                for($row=1;$row<=9;$row++){
                    // 遍历行
                    ?>
                    <tr>
                    <?php
                    for($col=1;$col<=$row;$col++){?>
                        <td>
                        <?php
                        echo $col.'X'.$row.'='
                        .$col*$row; ?>
                        </td>
                        <?php
                    }
                    // echo '<br>';
                }
            ?>
            </tr>
        </table>
    </body>
</html>