<?php
require_once "../template/header.php";

$_SESSION = array();
session_destroy();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./css/swiper.min.css">
    <script src="../js/main.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/water.js" defer></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/jquery.ripples-min.js"></script>
    <title>ログアウトしました | Kharis.shop</title>
</head>
<body>
    <div id="wrapper">
    <header class="header">
      <a href="../index.html"><img src="../imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" /></a>
      <nav class="nav">
        <ul>
          <li><a href="../Products">Products</a></li>
          <li><a href="../about_us">About Us</a></li>
          <li><a href="../contact">Contact</a></li>
        </ul>
      </nav>
      <!--left_icon-->
      <div class="icon_wrapper">
        <a href="../carts"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        <a href="./login"><i class="fa-solid fa-user"></i></a>
      </div>
    </header>
<p>log outしました。</p>
    <button onclick="location.href='https://kharis.shop/'">Topページへ</button>
    <!--footer-->
    <footer class="footer">
    <img src="../imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" />
    <!--left_nav-->
    <nav class="footer_nav">
      <ul>
        <li><a href="../Products">Products</a></li>
        <li><a href="../about_us">About Us</a></li>
        <li><a href="../contact">Contact</a></li>
      </ul>
    </nav>
  </footer>
  <!--footer fin-->
</div>
</body>
</html>