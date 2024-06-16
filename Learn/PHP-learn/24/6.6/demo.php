<?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $sal=$_POST['sal'];

    $conn=mysqli_connect("localhost","root","","mydb");
    if(!$conn){
        echo "连接失败";
    }
    $sql="INSERT INTO emp(id,name,age,sal) VALUES('$id','$name',$age,'$sal')";
    mysqli_query($conn,$sql);
        if(mysqli_query($conn,$sql)){
            echo "添加成功";
        }else{
            echo "添加失败". mysqli_error($conn);
        };
?>
<form action="demo.html" method="post">
    <input type="submit"  value="返回">
</form>