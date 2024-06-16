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
            .content{
                width:1000px;
                margin:50px auto;
            }
            .title{
                text-align:right;
            }
            .line{
                display:flex;
                margin:10px 0;
            }
            .line hr{
                height:2px;
                border:none;
            }
            .footer{
                padding:0 15px;
            }
            .list{
                display:flex;
                flex-wrap:wrap;
                justify-content:space-evenly;
                text-align:center;
                margin-bottom:10px;
            }
            .list>div{
                width:23%;
                border:1px solid #999;
                margin-top:10px;
            }
            .list p{
                margin:15px 0;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title">
                你现在的位置：网站首页>产品知识>豆奶
            </div>
            <div class="line">
                <hr width="70" style="background:tomato;">
                <hr width="930" style="background:gold;">
            </div>
            
            <div class="list">
                <?php   
                    $arr=[
                        ["./img/p01.png", "胶瓶五谷豆奶1L"],
                        ["./img/p02.png", "胶瓶原味豆奶1L"],
                        ["./img/p03.png", "胶瓶花生豆奶1L"],
                        ["./img/p04.png", "胶瓶黑豆豆奶1L"],
                        ["./img/p05.png", "胶瓶红枣枸杞豆奶1L"],
                        ["./img/p06.png", "胶瓶五绿豆奶1L"],
                        ["./img/p07.png", "胶瓶五鸡蛋奶200ml"],
                        ["./img/p08.png", "胶瓶红枣枸杞豆奶200ml"]
                    ];
                    for($i=0;$i<8;$i++){
                        echo '<div>
                            <img src="'.$arr[$i][0].'">
                            <p>'.$arr[$i][1].'</p>
                        </div>';
                    }
                ?>
            </div>
            <div class="footer">
                共8项信息共1页(8项/页)：1|下一页|尾页
            </div>
        </div>
    </body>
</html>