<?php
require_once "../template/db.php";

//submitボタンが押された時の処理

$auth['id'] = "";
$auth['password'] = "";


if (!empty($_POST)) {

    //入力エラーの確認
    if ($_POST['user_id'] === ""){
        $error['user_id'] = 'blank';
    }

    if ($_POST['password'] === ""){
        $error['password'] = 'blank';
    }

    //入力エラーがない場合
    if (!isset($error)) {
    //入力したデータを変数に入れる
    $user_id = $_POST['user_id'];   
    $password = $_POST['password'];

            //入力したデータを検索
            $sql = 'SELECT * FROM users WHERE user_id = :user_id';
            $stmt = $pdo->prepare($sql);
            $stmt ->bindValue(':user_id',$user_id);
            $stmt ->execute();
            $acc = $stmt->fetch();
            
            //user_idが存在するか確認
            if(!isset($acc['user_id'])) {
                $auth['id'] = 'fail';
            }
            //ハッシュ値がパスワードにマッチしているか確認
            if (password_verify($password, $acc['password'])) {
                //ユーザー情報をセッションに保存する
                $_SESSION['user_id'] = $acc['user_id'];
                $_SESSION['user_img'] = $acc['user_img'];
                if($user_id === "admin"){
                    $_SESSION['admin'] = $_POST;
                }
                header('Location: https://kharis.shop/');
            }else{
                    $auth['password'] = 'fail';
                    }
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
    <title>サインインする | Kharis.shop</title>
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
    <div class="login_wrapper">
    <img src="../imgs/logo/logo_transparent.png" class="login_logo">
    <br>
    <a href="https://kharis.shop/user/pre_signup" class="register">会員でない方はこちら</a>
    <form action="" method="post">
    <?php if (!empty($auth['id']) && $auth['id'] === 'fail' ||  ($auth['password']) && $auth['password'] === 'fail')  : ?> 
    <p class="error">IDもしくはパスワードが間違っています。</p>
    <?php endif; ?>
        <p>ユーザーID</p>
        <input type="text" name="user_id" id="user_id">
        <?php if (!empty($error["user_id"]) && $error['user_id'] === 'blank'): ?>
            <p class="error">＊ユーザーIDを入力してください。</p>
            <?php endif; ?>
        <br>
        <p>パスワード</p>
        <input type="password" name="password" id="password">
        <?php if (!empty($error["password"]) && $error['password'] === 'blank'): ?>
            <p class="error">＊パスワードを入力してください。</p>
            <?php endif; ?>
        <br>
        <input type="submit" value="ログインする" class="login_button">
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