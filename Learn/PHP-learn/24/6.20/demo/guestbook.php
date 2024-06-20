<?php
    require('conn.php');
    $name =  $_POST['name'];
    $message =  $_POST['message'];
    $sql = "INSERT INTO guestbook (name, message) VALUES ('$name', '$message')";
    if(mysqli_query($conn, $sql)){
        echo"<script>alert('留言成功');location='Guestbook.html'</script>";
    }else{
        echo"<script>alert('留言失败');location='Guestbook.html'</script>" . mysqli_error($conn);
    }
?>