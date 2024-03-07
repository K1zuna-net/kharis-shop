<?php
require_once "../template/db.php";

$sql = 'UPDATE users SET user_id = :user_id,  password = :password, regi_token_verified_at = :regi_token_verified_at, status = :status WHERE regi_token = :regi_token';

//DBに登録するパスワードをハッシュ化する
$hash_pass = password_hash($_SESSION['data']['password'], PASSWORD_BCRYPT);

//仮登録ユーザーを本登録        ユーザーに変更する
$stmt = $pdo->prepare($sql);
$stmt ->bindValue(':user_id', $_SESSION['data']['user_id'], \PDO::PARAM_STR);
$stmt ->bindValue(':password', $hash_pass, \PDO::PARAM_STR);
$stmt ->bindValue(':regi_token_verified_at', (new \DateTime()) ->format('Y-m-d H:i:s'), \PDO::PARAM_STR);
$stmt ->bindValue(':status', 'public', \PDO::PARAM_STR);
$stmt ->bindValue(':regi_token', $_SESSION['data']['regi_token'], \PDO::PARAM_STR);
$stmt ->execute();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <script src="../js/main.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/water.js" defer></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/jquery.ripples-min.js"></script>
    <title>本登録完了 | Kharis.shop</title>
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
  <div class="login_wrapper">
    <img src="../imgs/logo/logo_transparent.png" class="login_logo">
    <p>本登録が完了しました。</p>
</div>

    <!--footer-->
    <footer class="footer">
    <a href="../index.html"><img src="../../imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" /></a>
    <!--left_nav-->
    <nav class="footer_nav">
      <ul>
        <li><a href="../Products">Products</a></li>
        <li><a href="../about_us">About Us</a></li>
        <li><a href="../contact">Contact</a></li>
      </ul>
    </nav>
  </footer>
    </div>
</head>
<body>
</body>
</html>