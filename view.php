<?php
include("config.php");
$sql = "select * from users where id='".$_GET['id']."'";
$result = mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    echo "<h1>Xin chao ".$row['name']."</h1>";
    echo "<table border= '1'>";
        echo "<tr>";
            echo "<th>Tên tài khoản</th>";
            echo "<th>Email</th>";
            echo "<th>Họ tên</th>";
            echo "<th>phone</th>";
            echo "<th>Avatar</th>";
            echo "<th>Sửa</th>";
        echo "</tr>";
            echo "<tr>";
                echo "<td>".$row["username"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["phone"]."</td>";
                echo "<td><img src='".$row["avatar"]."' alt='loi anh'></td>";
                echo "<td><a href='edit.php?id=".$row['id']."'>Sửa</a></td>";
            echo "</tr>";
    echo "</table>";
}
?>
</br>
<a href="dangnhap.php">Đăng xuất</a>