<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>Chi tiết</title>
    <style type="text/css">
        .container {
            margin: 0 auto;
            display: grid;
            grid-template-columns: 600px 300px;
            grid-gap: 0px 50px;
            width: 950px;
        }
        .info-motel img{
            width: 100%;
            height: auto;
        }
        .info-people button{
            width: 100%;
            border: none;
            padding: 10px 0px 10px 0px;
        }
    </style>
</head>
<body>
    <?php
    include("config.php");
    if (!empty($_GET['id'])) {
        $sql = "select * from motel where id='".$_GET['id']."'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
        }
    ?>
    <div class="container">
            <h1><?php echo $row['title']?></h1>
            <h3>Thông tin người đăng</h3>
        <div class="info-motel">
            <img src="uploads/<?php echo $row['images']?>">
            <h3>Mô tả</h3>
            <p><?php echo $row['description']?></p>
        </div>
        <div class="info-people">
            <button><i class="fas fa-phone-square"></i> Liên hệ: <?php echo $row['phone']?></button>
            <b><p>Địa chỉ: </p></b>
            <p><b>Giá phòng:</b> <?php echo $row['price']?> VND</p>
            <p><b>diện tích:</b> 20m<sup>2</sup></p>
            <b><p>Tiện ích phòng trọ</p></b>
            <p><i class="fas fa-check"></i> <?php echo $row['utilities']?></p>
            <h2>BÁO CÁO</h2>
            <label>Đã cho thuê</label>
            <input type="checkbox" name="" disabled="disabled" <?php if ($row['approve'] == 1) echo 'checked=""' ?>>
            <br>
            <label>Sai thông tin</label>
            <input type="checkbox" name="" disabled="">
        </div>
    </div>
    <?php
    }
    else {
        echo "loi trang web";
    }
    $row['count_view']++;
    $sql = "update motel set count_view = ".$row['count_view']." where id='".$_GET['id']."'";
    mysqli_query($connect, $sql);
    ?>
</body>
</html>