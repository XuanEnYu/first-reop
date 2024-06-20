<?php
require "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
// if($username ==""||$password==""){
//     echo"<script>alert()"
// }
$sql="select username form user where username='$username'";
$insert = "INSERT INTO user(username, password, email) VALUES ('$username','$password','$email')";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if(!$row){
    if(mysqli_query($conn,$insert)){
        echo"<script>alert('注册成功');location='demo.html'</script>";
    }else{
        echo"<script>alert('注册失败')</script>" . mysqli_error($sql);
    }
}else{
    echo"<script>alert('账号已存在');location='demo.html'</script>";
}
// mysqli_query($conn,$sql);
//     if(mysqli_query($conn,$sql)){
//         echo "<script>alert('注册成功');location='demo.html'</script>";
//     }else{
//         echo "" . mysqli_error($conn);
//     };
?>