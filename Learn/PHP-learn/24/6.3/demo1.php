<?php
    $age = $_POST['age'];
    require "conn.php";
    $sql = "select name,password,email,age from emp where age = '$age'";
    $result = mysqli_query($conn,$sql);
    echo "<table border='1' bgcolor='pink' align='conter' width = '700'>";
        echo "<tr height = '50'>";
            echo "<td width = '50' align = 'center'>名字</td>";
            echo "<td width = '50' align = 'center'>密码</td>";
            echo "<td width = '50' align = 'center'>邮箱</td>";
            echo "<td width = '50' align = 'center'>年龄</td>";
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