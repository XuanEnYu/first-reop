<?php
$name=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$email =$_POST['email'];
 require "conn.php";
if(empty($name)||empty($password1)||empty($password2)||empty($email)){
   echo"<script>alert('请输入完整信息');location='demo.html'</script>";
 }elseif($password1!=$password2){
    echo"<script>alert('两次输入密码不同，请重新输入');location='demo.html'</script>";
 }else{
     $sql="select * from user where username='$name'";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_num_rows($result);
     if($row>0){
        echo"<script>alert('用户名已存在，请重新注册');location='demo.html'</script>";
     }else{
         echo"用户名可用";
         $sql_insert="insert into user(username,password,email) values('$name','$password1','$email')";
         $result=mysqli_query($conn,$sql_insert);
         if(!$result){
             echo"注册不成功";
         }else{
             echo"注册成功！";
             echo "正在返回登录界面，请稍后~";
            header("refresh:5;url=demo.html"); 
         }
     }
 }
?>