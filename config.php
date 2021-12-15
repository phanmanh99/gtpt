<?php

    $connect = mysqli_connect("localhost:3306","root","123456","gtpt");
    if(!$connect){
        die ("Lỗi kết nối". mysqli_connect_error());
    }

?>