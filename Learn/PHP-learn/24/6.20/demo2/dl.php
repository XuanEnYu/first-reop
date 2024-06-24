<?php 
$name=$_POST['username'];
$password=$_POST['password'];
require 'conn.php';
if($name&&$password){
    $sql="select * from t1 where username='$name' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row){
      header("refresh:0;url=ly.html");
 }else{
    echo "<script>alert('用户名或密码有误，点击确定返回登录或注册！');</script>";
   	header("refresh:0;url=dl.html");
 }
}else{
  echo"<script>alert('账号和密码不能为空，请重新登录');location='dl.html'</script>";
}








?>