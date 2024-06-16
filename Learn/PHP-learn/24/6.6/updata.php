<?php
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$sal = $_POST['sal'];
require "conn.php";
$sql = "update emp set name='$name',age='$age',sal='$sal' where id = '$id'";
mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
    echo "更改成功";
}else{
    echo "更改失败</br>" . mysqli_error($conn);
}
?>
<form action="updata.html" method="post">
    <input type="submit"  value="返回">
</form>