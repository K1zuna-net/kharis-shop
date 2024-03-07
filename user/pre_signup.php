<?php
require_once "../template/db.php";


//submitボタンが押された後の処理
if (!empty($_POST)) {
    //入力情報の不備を検知
    //メールアドレスが空欄だった場合
    if ($_POST['mail'] === "") {
        $errors['mail'] = "blank";
    }
    
    //入力したメールアドレスが、既に登録済みだった場合
    if (!isset($errors)) {
        $users = $pdo->prepare('SELECT COUNT(*) as cnt FROM users WHERE mail=? AND status = "public"');
        $users->execute(array(
            $_POST['mail']
        ));
        $record = $users->fetch();
        if ($record['cnt'] > 0) {
            $errors['mail'] = 'duplicate';
        }
    }

    //空欄エラー、重複エラーがない場合
    if (!isset($errors)) {
        $_SESSION['pre_data'] = $_POST;
            header('Location: ./pre_check');
        exit();
    }
}

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
    <title>仮登録 | Kharis.shop</title>
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
      <a href="./carts"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
      <a href="./login"><i class="fa-solid fa-user"></i></a>
    </div>
  </header>
  <div class="login_wrapper">
    <img src="../imgs/logo/logo_transparent.png" class="login_logo">
    <form action="" method="POST">
        <p>登録するメールアドレスを入力してください。</p>
        <p>メールアドレス：<input type="email" name="mail" id="mail" volue=""></p>  
        <?php if (!empty($errors["mail"]) && $errors['mail'] === 'blank'): ?>
            <p class="error">＊メールアドレスを入力してください。</p>
        <?php elseif (!empty($errors["mail"]) && $errors['mail'] === 'duplicate'): ?>
            <p class="error">＊このメールアドレスは既に登録されています。</p>
        <?php endif; ?>
        <input type="submit" value="入力内容を確認する">
    </form>
        </div>
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