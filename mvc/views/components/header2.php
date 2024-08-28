<?php
  require_once './helpers/helpers.php';
  $search =$_POST['search'] ?? null;
  if ($search)
  {
    $search = khongdau($search);
    $search =  strtoupper($search);
    if ($search == 'DAY CHUYEN' || $search == 'DAYCHUYEN')
        header('Location: ../Sanpham');
    else  if ($search == 'BONG TAI' || $search == 'BONGTAI')
        header('Location: ../Sanpham/Bongtai');
        else  if ($search == 'VONG TAY'  || $search == 'VONGTAY')
            header('Location: ../Sanpham/Vongtay');
            else  if ($search == 'NHAN' || $search == 'NHẪN')
                header('Location: ../Sanpham/Nhan');
                else  if ($search == 'MAT DAY CHUYEN'  || $search == 'MATDAYCHUYEN')
                        header('Location: ../Sanpham/Matdaychuyen');
                        else  if ($search == 'VANG MIENG'  || $search == 'VANGMIENG')
                              header('Location: ../Sanpham/Vangmieng');
                                 else header('Location: ../Khongtimthay');
  }
  
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/fonts/fontawesome-free-6.3.0-web/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Trang sức</title>
</head>
  <nav class="navbar navbar-expand-lg" id="header">
    <div class="container-fluid" >
            <a href="Trangchu" id="name-nav">ATJ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-reset" aria-current="page" href="../Trangchu">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-reset" href="../Sanpham">Sản phẩm</a>
                </li>
                <li class="nav-item dropdown active text-reset">
                  <a class="nav-link dropdown-toggle active text-reset" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Tài khoản
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../Dangnhap">Đăng nhập</a></li>
                    <li><a class="dropdown-item" href="../Dangky">Đăng ký</a></li>
                    <li><a class="dropdown-item" href="../Dangxuat">Đăng xuất</a></li>
                  </ul>
                </li>
                <?php $grant=$_SESSION['user'][0]['user_grant'] ?? null;
                        if ($grant=='admin'): ?>
                           <li class="nav-item">
                              <a class="nav-link active text-reset" href="Nguoidung">Người dùng</a>
                          </li>        
                <?php endif; ?>
              </ul>
              
              <form class="d-flex" role="search" method="POST" >
                <div class="icon-header"><a href="../Thongtin">
                    <div class="ten">
                      <?php if (isset($_SESSION['user'])): ?>
                          <i class="ten-user"><?= $_SESSION['user']['username']; ?></i>
                      <?php else:  ?>
                          <i class="ten-user">Khách</i>
                          
                      <?php endif; ?>
                      <i class="fa-solid fa-user"></i>
                    </div>
                </a></div>
                <div class="icon-header"><a href=""><i class="fa-solid fa-cart-shopping"></i></i></a></div>
                <input  id="search"  class="form-control me-2 " type="search" placeholder="Bạn đang tìm gì?" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Tìm </button>
              </form>
             
            </div>
    </div>
  </nav>
  <div class="chuchay"><marquee behavior="" direction=""> Tiệm vàng ATJ - Mọi thứ bạn mong đợi từ những món trang sức quý giá -
  Tiệm vàng ATJ - Mọi thứ bạn mong đợi từ những món trang sức quý giá -
  Tiệm vàng ATJ - Mọi thứ bạn mong đợi từ những món trang sức quý giá  </marquee></div>