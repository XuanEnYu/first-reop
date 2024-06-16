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
        <table>
        <?php
            /*  请在页面中输出九九乘法表 */
            $row=1; //行数
            while($row<=9){ ?>
            <tr>
            <?php
                // 遍历行
                $col=1; //列数
                while($col<=$row){
                    // 遍历列
                    ?>
                    <td>
                    <?php 
                    echo $col.'X'.$row.'='
                    .$col*$row; ?>
                    </td>
                    <?php
                    $col++;
                }
                // 每一行最后都要换行
                // echo '<br>';
                $row++;
            }
            ?>
            </tr>
        </table>
    </body>
    
</html>