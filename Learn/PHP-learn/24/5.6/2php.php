<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <div class="bigbox">
<div class="box">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername,$username,$password);
    if($conn->connect_error){
        die("<h1>连接失败</h1>" . mysqli_connect_error());
    }else{
        echo "<h1>连接成功</h1>";
    }
?>
</div>
</div>
</body>
</html>
