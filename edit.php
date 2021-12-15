
<?php
include("config.php");
$sql = "select * from users where id='".$_GET['id']."'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

?>

<h1>Sửa tài khoản</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo  $_GET['id']; ?>">
    <table>
       <tr>
           <td>Tên tài khoản</td>
           <td><input type="text" name="username" value="<?php echo $row["username"] ?>"></td>
       </tr>
       <tr>
           <td>Email</td>
           <td><input type="text" name="email" value="<?php echo $row["email"] ?>" ></td>
       </tr>
       <tr>
           <td>Họ tên</td>
           <td><input type="text" name="name" value="<?php echo $row["name"] ?>" ></td>
       </tr>
       <tr>
           <td>Mật khẩu</td>
           <td><input type="password" name="password" value="<?php echo $row["password"] ?>" ></td>
       </tr>
       <tr>
           <td>Số điện thoại</td>
           <td><input type="text" name="phone" value="<?php echo $row["phone"] ?>" ></td>
       </tr>
       <tr>
           <td>Avatar</td>
           <td><input type="file" name="fileupload" id="fileupload"></td>
       </tr>
       <tr align="center">
           <td colspan="2"><input type="submit" name="update" value="Cập nhật">
           </td>
       </tr>
    </table>
    </form>
    
<?php
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $target_dir = "uploads/";
    $avatar = $target_dir . basename($_FILES["fileupload"]["name"]);
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $avatar))
      {
          echo "File ". basename( $_FILES["fileupload"]["name"]).
          " Đã upload thành công.";

          echo "File lưu tại " . $avatar;

      }
      else
      {
          echo "Có lỗi xảy ra khi upload file.";
      }
    include("config.php");

    $sql = "update users set username = '$username', email = '$email', name = '$name', password = '$password', phone = '$phone', avatar = '$avatar' where id = '$id'";
    echo $sql;
    if(mysqli_query($connect,$sql) == true){
        header("Location: view.php?id=".$id);
    }
    else{
    echo "Sửa du lieu không thành cong";

    }
    mysqli_close($connect);
}
?>