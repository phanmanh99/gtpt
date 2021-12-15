<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
    <table>
       <tr>
           <td>Tài khoản</td>
           <td><input type="text" name="username"></td>
       </tr>
       <tr>
           <td>Mật khẩu</td>
           <td><input type="password" name="password" ></td>
       </tr>
       <tr align="center">
           <td colspan="1"><a href="dangky.php">Đăng Ký</a></td>
           <td colspan="1"><input type="submit" name="dangnhap" value="Đăng nhập"/></td>
       </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['dangnhap'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    include("config.php");
    
    $sql = "select id from users where username='".$username."' and password='".$password."'";
    $result = mysqli_query($connect,$sql);
    if($result == true & mysqli_num_rows($result) > 0){
        header("Location: view.php?id=".mysqli_fetch_assoc($result)['id']);
    }
    else{
        echo "Đăng nhập Không thành công";
    
    }
}

?>