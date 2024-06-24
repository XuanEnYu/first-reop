<?php
require "conn.php";
$user = $_POST['username'];
$comment = $_POST['comment'];
print_r($_POST);
if(empty($user)||empty($comment)){
    echo"<script>alert('昵称或内容没有输入,请输入后提交!');window.location='ly.html'</script>";
}else{
     $sql="insert into t2(username,comment) values('$user','$comment')";
     $result = mysqli_query($conn,$sql);    
}
if($result){
    echo "<script>alert('留言成功');</script>";
    header("refresh:0;url=ly.html");
}else{
    echo "<script>alert('留言失败！');</script>";
 }


?>