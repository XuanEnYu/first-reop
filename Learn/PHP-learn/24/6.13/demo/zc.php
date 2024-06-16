<?php
require "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql="INSERT INTO chese(username,password) VALUES('$username','$password')";
mysqli_query($conn,$sql);
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('注册成功');location='demo.html'</script>";
    }else{
        echo "<script>alert('注册失败，请稍后再试');location='demo.html'</script>" . mysqli_error($conn);
    };
?>