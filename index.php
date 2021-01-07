<?php 
  session_start();
  require './dbconnect.php';
  if(!isset($_SESSION['username'])){
      header("location: ./pages/dangnhap.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Quản lý Phiếu mượn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/scripts.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <img src="./assets/image/logo.png"/>
        <div class="navbar">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="navId">
                <li class="nav-item">
                    <a href="./index.php" class="nav-link active">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a href="./pages/dsphieumuon.php" class="nav-link">Danh sách phiếu mượn</a>
                </li>
                <li class="nav-item">
                    <a href="./pages/lapphieumuon.php" class="nav-link">Lập phiếu mượn</a>
                </li>
                <li class="nav-item">
                    <a href="./pages/dangnhap.php" class="nav-link">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="content">
        <label class="title">Quản lý phiếu mượn</label>
    </div>
    <div class="footer">
        <div class="footer-right">
          <label>Mã sinh viên : 75397 </label>
          <label>| Tên sinh viên : Quách Thanh Tùng</label>
          <label>| Lớp : CNT58DH</label>
        </div>
    </div>


    <!-- <input type="text" name="time-local" id="time-local"  /> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>