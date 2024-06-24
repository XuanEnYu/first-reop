<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
            font-family: "微软雅黑";
        }

        .btn {
            width: 380px;
            height: 40px;
            border-radius: 0.5rem;
            border: none;
            background: #413e66;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: all.3s ease;
            margin-top: 20px;
        }
        .btn:hover{
            background: #837eb1;
            transform: scale(1.02);
        }
        h1 {
            text-align: center;
            color: #413e66;
            margin-bottom: 20px;
        }

        body {
            background: url(./bg.PNG) no-repeat center center/cover;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box{
            background: #fff;
            width: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            border-radius: 10px;
            padding: 20px;
            padding-bottom: 10px;
        }
        tr{
            margin: 10px;
            box-shadow: 5px 8px 10px rgba(192, 192, 192, 0.397);
        }
        a{
            display:block;
            text-align:center;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>ALL Guest</h1>
        <?php
    require "conn.php";
    $sql = "select * from Guestbook";
    $result = mysqli_query($conn,$sql);
    echo "<table bgcolor='#f5f8fd' align='conter' width = '380'>";
        echo "<tr height = '50'>";
            echo "<td width = '50' align = 'center'>昵称</td>";
            echo "<td width = '50' align = 'center'>内容</td>";
            echo "<td width = '50' align = 'center'>删除</td>";
        echo "</tr>";
    while($arr = mysqli_fetch_array($result)){
        echo "<tr height = '50'>";
            echo "<td width = '50' align = 'center'>".$arr[0]."</td>";
            echo "<td width = '50' align = 'center'>".$arr[1]."</td>";
            echo "<td><a onclick=\"return confirm('确定删除么')\" href='delete.php?code={$arr[0]}'>删除</a></td>";
        echo "</tr>";
    }
    echo "</table>";
?>
        <form action="ly.php" method="post">
            <input type="submit" value="返回" class="btn">
        </form>
    </div>
</body>

</html>