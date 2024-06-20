<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:auto;
        }
        .btn{
            display:block;
            margin:20px auto;
        }
    </style>
</head>
<body>
<?php
    require "conn.php";
    $sql = "SELECT name,message FROM guestbook WHERE 1";
    $result = mysqli_query($conn,$sql);
    echo "<table border='1' bgcolor='pink' align='conter' width = '700'>";
        echo "<tr height = '50'>";
            echo "<td width = '50' align = 'center'>昵称</td>";
            echo "<td width = '50' align = 'center'>内容</td>";
        echo "</tr>";
    while($row = mysqli_fetch_row($result)){
        echo "<tr height = '50'>";
            echo "<td width = '50' align = 'center'>".$row[0]."</td>";
            echo "<td width = '50' align = 'center'>".$row[1]."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
<form action="Guestbook.html" method="post">
    <input type="submit"  value="返回" class="btn">
</form>
</body>
</html>