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
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/item.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

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
          <img src="../../imgs/acnccare/vely vely_ver3.jpg" alt="VELY VELY" />
          <h2 class="item_name">VELY VELY <br />S.O.S SPOT POWDER</h2>
        </div>
        <div>
          <p class="item-text">
            メイクで隠すのに必死だった肌トラブルをピンポイントにケアできるスポットパウダー！<br />
            透明なアルコール層とピンクのカラミンパウダー層の2層構造。<br />
            皮脂や角質をケアし、老廃物を取り除いでくれる効果も期待出来ます。<br />
            気になる部分に集中してケアができます。
          </p>

          <h2 class="price">￥2,200</h2>
          <div class="quan_btn">
            <select name="quantity">
              <?php for ($i = 1; $i < 11; $i++): ?>
              <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
              </option>
              <?php endfor; ?>
            </select>


            <input type="hidden" name="item" value="VELY VELY S.O.S SPOT POWDER">
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