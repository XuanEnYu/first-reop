<?php
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $conn=mysqli_connect("localhost","root","","mydb");
    if(!$conn){
        echo "连接失败";
    }
    $sql="INSERT INTO emp(name,password,email) VALUES('$name',$password,'$email')";
    mysqli_query($conn,$sql);
        if(mysqli_query($conn,$sql)){
            echo "添加成功";
        }else{
            echo "添加失败";
        };
?>