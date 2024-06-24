<?php
require 'conn.php';
$sql = "select * from t2";

//mysqli_select_db($conn,'zhuce');

$result = mysqli_query($conn,$sql);
echo "<h2 align='center'>请找到要删除的留言，点击删除</h2>";
echo "<table border='1' bgcolor='yellow' align='center' width=400'>";
   echo "<tr height='30'>";
        echo "<td width='50' align='center'>序号</td>";
        echo "<td width='80' align='center'>用户名</td>";
        echo "<td width='150' align='center'>留言</td>";
        echo "<td width='100' align='center'>是否删除</td>";
    echo "</tr>";

while($arr = mysqli_fetch_array($result))
{
    echo "<tr height='30'>";
    echo "<td width='50' align='center'>".$arr[0]."</td>";
    echo "<td width='50' align='center'>".$arr[1]."</td>";
    echo "<td width='150' align='center'>".$arr[2]."</td>";
   echo "<td><a onclick=\"return confirm('确定删除么')\" href='delete.php?code={$arr[0]}'>删除</a></td>";
 // echo "<td width='150' align='center'><a href='delete.php?code={arr[0]}'>删除</a></td>";
echo "</tr>";
}
echo "</table>";

echo '<p><form action="chakan.php" method="post" align="center">
       <input type="submit" name="fh" value="点击返回">
       </form></p>';
 ?>

