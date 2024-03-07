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
  <link rel="stylesheet" href="../../css/item.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="../../css/style.css" />
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
          <img src="../../imgs/antiage/オルビス_アンチ.png" alt="ORBIS ユードット ローション" />
          <h2 class="item_name">ORBIS ユードット ローション</h2>
        </div>
        <div>
          <p class="item-text">
            うるおいを肌表面のすみずみまで広げ、<br>深層まで届ける「サウンドチャージ処方」を採用。<br>
            みずみずしく、濃密でとろみのあるローションがなめらかに広がり、<br>硬くなった肌にさっと浸透していきます。<br>
            また、美白有効成分やシミも予防もアプローチ。<br>
            すぐに実感したい方に特におすすめです。
          </p>

          <h2 class="price">￥3,630</h2>
          <div class="quan_btn">
            <select name="quantity">
              <option value="">個数</option>
              <?php for ($i = 1; $i < 10; $i++): ?>
              <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
              </option>
              <?php endfor; ?>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
            </select>
            <input type="hidden" name="item" value= "ORBIS ユードット ローション">
            <input type="submit" value="カートに入れる" class="btn-btn-tag">
          </div>
        </div>
      </div>
  </form>
  </div>
   <!--footer-->
   <footer class="footer">
    <a href="../../index.html"><img src="../../imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" /></a>
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