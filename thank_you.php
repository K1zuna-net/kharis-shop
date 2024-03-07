<?php

session_start();

unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kharis | 厳選された化粧品</title>
    <link rel="shortcut icon" href="./images/favcon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/thank_you.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet" />
</head>
<body>
  <div id="wrapper">

  <header class="header">
    <a href="./index.html"><img src="./imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" /></a>
    <nav class="nav">
        <ul>
            <li><a href="./Products">Products</a></li>
            <li><a href="./about_us">About Us</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>
    </nav>
    <!--left_icon-->
    <div class="icon_wrapper">
        <a href="./carts"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        <a href="./user/login"><i class="fa-solid fa-user"></i></a>
    </div>
</header>
  <div class="thank_you">
    <img src="./imgs/logo/logo_transparent.png" class="thank_you_logo">
    <h1>ご注文ありがとうございます！</h1>
    <p>商品の購入が完了しました。注文番号はお問合せ時に必要です。</p>
    <table>
      <tr>注文番号:</tr>
      <tr><?php echo (mt_rand())?></tr>
    </table>
  </div>
    <footer class="footer">
    <img src="./imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" />
    <!--left_nav-->
    <nav class="footer_nav">
      <ul>
        <li><a href="./Products">Products</a></li>
        <li><a href="./about_us">About Us</a></li>
        <li><a href="./contact">Contact</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </nav>
  </footer>
</div>
  </body>
</html>