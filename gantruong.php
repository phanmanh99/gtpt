<?php
include("config.php");
$limit = 4;
$sql = "select * from motel";
$result = mysqli_query($connect,$sql);
$pages_max = ceil(mysqli_num_rows($result) / $limit);
if (!empty($_GET['pages'])) $pages = $_GET['pages'];
else $pages = 1;
$sql = "select * from motel limit ".($pages-1)*$limit.",".$limit;
$result = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<style>
.title a {  
  display: inline-block;  
  height: 21px;  
  margin: 0 10px 0 0;  
  padding: 0 7px 0 14px;  
  white-space: nowrap;  
  position: relative;  
  
  background: -moz-linear-gradient(top, #fed970 0%, #febc4a 100%);  
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fed970), color-stop(100%,#febc4a));  
  background: -webkit-linear-gradient(top, #fed970 0%,#febc4a 100%);  
  background: -o-linear-gradient(top, #fed970 0%,#febc4a 100%);  
  background: linear-gradient(to bottom, #fed970 0%,#febc4a 100%);  
  background-color: #FEC95B;  
  
  color: #963;  
  font: bold 11px/21px Arial, Tahoma, sans-serif;  
  text-decoration: none;  
  text-shadow: 0 1px rgba(255,255,255,0.4);  
  
  border-top: 1px solid #EDB14A;  
  border-bottom: 1px solid #CE922E;  
  border-right: 1px solid #DCA03B;  
  border-radius: 1px 3px 3px 1px;  
  box-shadow: inset 0 1px #FEE395, 0 1px 2px rgba(0,0,0,0.21);  
}  

.title a:before { 
  content: '';  
  position: absolute;  
  top: 5px;  
  left: -6px;  
  width: 10px;  
  height: 10px;  
  
  background: -moz-linear-gradient(45deg, #fed970 0%, #febc4a 100%);  
  background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#fed970), color-stop(100%,#febc4a));  
  background: -webkit-linear-gradient(-45deg, #fed970 0%,#febc4a 100%);  
  background: -o-linear-gradient(45deg, #fed970 0%,#febc4a 100%);  
  background: linear-gradient(135deg, #fed970 0%,#febc4a 100%);  
  background-color: #FEC95B;  
  
  border-left: 1px solid #EDB14A;  
  border-bottom: 1px solid #CE922E;  
  border-radius: 0 0 0 2px;  
  box-shadow: inset 1px 0 #FEDB7C, 0 2px 2px -2px rgba(0,0,0,0.33);  
} 

.title a:before { 
  -webkit-transform: scale(1, 1.5) rotate(45deg);  
  -moz-transform: scale(1, 1.5) rotate(45deg);  
  -ms-transform: scale(1, 1.5) rotate(45deg);  
  transform: scale(1, 1.5) rotate(45deg);  
}  

.title a:after { 
  content: '';  
  position: absolute;  
  top: 7px;  
  left: 1px;  
  width: 5px;  
  height: 5px;  
  background: #FFF;  
  border-radius: 4px;  
  border: 1px solid #DCA03B;  
  box-shadow: 0 1px 0 rgba(255,255,255,0.2), inset 0 1px 1px rgba(0,0,0,0.21);  
} 
.container {
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px 40px;
  width: 80%;
}

.container a{
  text-decoration: none;
  color: #000;
}
.card {
  display: inline-flex;
  box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
  border-radius: 5px;
  background-color: rgba(255, 255, 255, .15);
  
  backdrop-filter: blur(5px);
}

.card-image img{
  height: 250px;
  width: 250px;
  margin: 0 50px 50px 0px;
  border-radius: 5px;
}
.card-status {
  background: white;
  position: absolute;
  border-radius: 5px;
}

.card-status h3 {
  margin: 10px;
}

.card-information {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 0 10px;
}

.page {
  text-decoration: none;
  padding: 5px 20px 5px 20px;
  display: inline-flex;
  box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
  border-radius: 5px;
  background-color: rgba(255, 255, 255, .15);
  color: #000;
  backdrop-filter: blur(5px);
}

</style>
</head>
<body>
  <div class ="title">
    <a href="xemnhieunhat.php">Các phòng trọ xem nhiều nhất</a>
    <a href="moidang.php">Các phòng trọ mới đăng</a>
    <a href="gantruong.php">Các phòng trọ gần trường ĐH Vinh</a>
    <a href="timkiem.php">Tìm kiếm</a>
  </div>
  <h1>Phòng trọ gần trường DH Vinh</h1>
  <div class="container">
  <?php 
  if (mysqli_num_rows($result) > 0){
      while($row = $result->fetch_assoc()) {
        $sql_user = "select * from users where id='".$row['user_id']."'";
          $result_user = mysqli_query($connect,$sql_user);
          if(mysqli_num_rows($result) > 0){
            $row_user = mysqli_fetch_assoc($result_user);
          }
  ?>
  <a href="chitietphongtro.php?id=<?php echo $row['id'] ?>">
    <div class="card">
      <div class="card-image">
        <div class="card-status">
          <h3>Ở ghép</h3>
        </div>
        <img src="uploads/<?php echo $row['images'] ?>">
      </div>
      <div class="card-body">
        <div class="card-title">
          <h3><?php echo $row['title'] ?></h3>
        </div>
        <div class="card-information">
          <div class="card-information-l">
            <p><i class="fas fa-user"></i> Người đăng: <?php echo $row_user['name'] ?></p>
            <p><i class="fas fa-bullseye"></i> Diện tích: </p>
            <p><i class="fas fa-map-marker-alt"></i> Địa chỉ: <?php echo $row['address'] ?></p>
          </div>
          <div class="card-information-r">
            <p><i class="fas fa-clock"></i> <?php echo $row['created_at'] ?></p>
            <p><i class="fas fa-eye"></i> Lượt xem: <?php echo $row['count_view'] ?></p>
          </div>
        </div>
        <div class="card-price">
          <p><i class="fas fa-money-bill-alt"></i> Giá thuê: <?php echo $row['price'] ?> VND</p>
        </div>
      </div>
    </div>
  </a>
    <?php
      }
    }
    $connect->close(); 
    ?>
  </div>
  <div style="display: table; margin: 0 auto;">
    <?php 
    for ($i = 1; $i <= $pages_max; $i++) echo "<a class='page'  href='?pages=$i'>$i</a>"
    ?>
  </div>
</body>
</html>