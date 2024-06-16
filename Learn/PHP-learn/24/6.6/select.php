<?php
    $age = $_POST['age'];
    require "conn.php";
    $sql = "select id,name,age,sal from emp where age = '$age'";
    $result = mysqli_query($conn,$sql);
    echo "<table border='1' bgcolor='pink' align='conter' width = '700'>";
        echo "<tr height = '50'>";
            echo "<td width = '50' align = 'center'>ID</td>";
            echo "<td width = '50' align = 'center'>名字</td>";
            echo "<td width = '50' align = 'center'>年龄</td>";
            echo "<td width = '50' align = 'center'>工资</td>";
        echo "</tr>";
    while($row = mysqli_fetch_row($result)){
        echo "<tr height = '50'>";
            echo "<td width = '50' align = 'center'>".$row[0]."</td>";
            echo "<td width = '50' align = 'center'>".$row[1]."</td>";
            echo "<td width = '50' align = 'center'>".$row[2]."</td>";
            echo "<td width = '50' align = 'center'>".$row[3]."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
<form action="select.html" method="post">
    <input type="submit"  value="返回">
</form>