<?php
  
require 'conn.php';

$sql="select * from t2";
$result = mysqli_query($conn,$sql);


echo "<h2 align='center'>所有留言</h2>";
echo "<table border='1' bgcolor='pink' align='center' width=300'>";
   echo "<tr height='30'>";
        echo "<td width='50' align='center'>序号</td>";
        echo "<td width='50' align='center'>用户名</td>";
        echo "<td width='150' align='center'>留言</td>";
    echo "</tr>";
while($row = mysqli_fetch_row($result))
{
    echo "<tr height='30'>";
    echo "<td width='50' align='center'>".$row[0]."</td>";
    echo "<td width='50' align='center'>".$row[1]."</td>";
    echo "<td width='150' align='center'>".$row[2]."</td>";
echo "</tr>";
}
echo '</table>';

echo '<p><form action="ly.html" method="post" align="center">
            <input type="submit" name="fanhui" value="点击返回">
         </form>
      </p>';
echo '<p><form action="del.php" method="post" align="center">
            <input type="submit" name="shanchu" value="删除留言">
         </form>
      </p>';


?>