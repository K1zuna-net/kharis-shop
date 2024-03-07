<?php
session_start();

// POSTで受け取った場合
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $_SESSION['cart'][$item] = $quantity;
  header('Location: ../../carts.php');
}

$cart = array();

if (isset($_SESSION['cart'])) {
  $cart = $_SESSION['cart'];
}

?>
<!DOCTYPE html>
<html lang="jpg">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kharis</title>
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="../../css/item.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
<div id="wrapper">
    <header class="header">
      <a href="../../index.html"><img src="../../imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" /></a>
      <nav class="nav">
        <ul>
          <li><a href="../../Products">Products</a></li>
          <li><a href="../../about_us">About Us</a></li>
          <li><a href="../../contact">Contact</a></li>
        </ul>
      </nav>
      <!--left_icon-->
      <div class="icon_wrapper">
        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
        <i class="fa-solid fa-user"></i>
      </div>
    </header>
  </div>


  <form action="" method="post">
    <div>
      <div class="item-box">
        <div class="item-img">
          <img src="../../imgs/whiting/ワンシング.png" alt="ワンシング化粧水 " width="500" height="500" />
          <h2 class="item_name">ワンシング化粧水
          </h2>
        </div>
        <div>
          <p class="item-text">
            肌鎮静作用、肌の弾力アップ、抗酸化作用のある化粧水。<br>
            原料のみを使用した100%植物性製品で、化学添加物は使用していない<br />
            植物由来成分が中心の商品です



          </p>

          <h2 class="price">￥2,300</h2>
          <div class="quan_btn">
            <select name="quantity">
              <?php for ($i = 1; $i < 11; $i++) : ?>
                <option value="<?php echo $i; ?>">
                  <?php echo $i; ?>
                </option>
              <?php endfor; ?>
            </select>
            <input type="hidden" name="item" value="ワンシング化粧水">
            <input type="submit" value="カートに入れる" class="btn-btn-tag">
          </div>
        </div>
      </div>
  </form>
  </div>
    <!--footer-->
    <footer class="footer">
    <img src="../../imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" />
    <!--left_nav-->
    <nav class="footer_nav">
      <ul>
        <li><a href="../../Products">Products</a></li>
        <li><a href="../../about_us">About Us</a></li>
        <li><a href="../../contact">Contact</a></li>
      </ul>
    </nav>
  </footer>
  <!--footer fin-->

</body>

</html>