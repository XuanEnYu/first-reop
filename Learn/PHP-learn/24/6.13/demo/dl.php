<?php
    require "conn.php";
    $name = $_POST['username'];
    $password = $_POST['password'];
    if($name&&$password){
        $sql = "select username,password from chese where username='$name' and password ='$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if(!$row){
            echo"<script>alert('账户或密码错误，请重新登录');location='demo.html'</script>";
        }else{
            echo"<script>alert('登陆成功，欢迎回来');location='demo.html'</script>";
        }
    }
?>
