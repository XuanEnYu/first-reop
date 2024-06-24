<?php
require 'conn.php';
$code = $_GET["code"];
$sql = "delete from guestbook where id ='{$code}'";
$r = mysqli_query($conn, $sql );

if(! $r )
{
  die('数据删除失败: ' . mysqli_error($conn));
}
echo "数据删除成功，马上返回！";
header("refresh:1;url=del.php");

?>