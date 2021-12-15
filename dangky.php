<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đăng ký</h1>
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
       <tr>
           <td>Nhập lại Mật khẩu</td>
           <td><input type="password" name="password1" ></td>
       </tr>
       <tr>
           <td>Email</td>
           <td><input type="text" name="email"></td>
       </tr>
       <tr>
           <td>Tên hiện thị</td>
           <td><input type="text" name="name"></td>
       </tr>
       <tr align="center">
           <td colspan="1"><a href="dangnhap.php">Đăng nhập</a></td>
           <td colspan="1"><input type="submit" name="dangky" value="Đăng ký">
           </td>
       </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['dangky'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    include("config.php");
    
    $sql = "insert into users (username,password,email,name) values ('$username','$password','$email','$name')";
    if(mysqli_query($connect,$sql) == true){
        header("Location: view.php");
    }
    else{
        echo "Đăng ký Không thành công";
    
    }
}

?>