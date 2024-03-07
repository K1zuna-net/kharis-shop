<?php
require_once "../template/db.php";

//token取得
$regi_token = filter_input(INPUT_GET, 'token');


//テーブルないから合致するユーザを取得
$sql = 'SELECT * FROM `users` WHERE `regi_token` = :regi_token AND `status` = :status';
$stmt = $pdo ->prepare($sql);
$stmt ->bindValue(':regi_token', $regi_token, \PDO::PARAM_STR);
$stmt ->bindValue(':status', 'tentative', \PDO::PARAM_STR);
$stmt ->execute();
$user = $stmt->fetch(\PDO::FETCH_OBJ);

if (!$user) exit('無効なURLです');

//tokenの有効期限は24時間
$token_limit = (new \DateTime())->modify("-24 hour")->format('Y-m-d H:i:s');

//仮登録が24時間以上前の場合は、有効期限切れとする
if ($user -> regi_token_sent_at < $token_limit) exit('有効期限切れです。');

//submitボタンが押された後の処理
if(!empty($_POST)) {


    //入力情報の不備を検知
    //ユーザーIDが空白だった場合
    if ($_POST['user_id'] === ""){
        $errors['user_id'] = "blank";
    }

    //パスワードが空白だった場合
    if ($_POST['password'] === ""){
        $errors['password'] = "blank";
    }

    //パスワード（確認用）が空白だった場合
    if ($_POST['password_confirm'] === ""){
        $errors['password_confirm'] = "blank"; 
    }

    //パスワードとパスワード（確認用）が一致しない場合
    if ($_POST['password'] <> $_POST['password_confirm']) {
        $errors['password'] = "disagreement";
    }

    //IDが重複していないか確認する
    if (!isset($errors)) {
        $id_check = $pdo->prepare('SELECT COUNT(*) as cnt FROM users WHERE user_id=? AND status = "member"');
        $id_check-> execute(array(
        $_POST['user_id']
        ));
    
        $result = $id_check->fetch();
        if ($result['cnt'] > 0) {
        $errors['user_id'] = 'duplicate';
        }
    }


    //エラーがない場合  
    if (!isset($errors)) {
      $_SESSION['data'] = $_POST;
            header('Location: ./signup_check');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/water.js" defer></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/jquery.ripples-min.js"></script>
    <style>
      label {
    display: inline-block;
    text-align: right;
    width: 170px;
}
    </style>
    <title>本登録フォーム | Kharis.shop</title>
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
    <form action="" method="post" enctype="multipart/form-data">
        <p>会員登録</p>
        <input type="hidden" name="regi_token" value="<?= $regi_token; ?>">
        <label>user ID</label>
        <input type="text" name="user_id" id="user_id" volue="">
        <?php if (!empty($errors["user_id"]) && $errors['user_id'] === 'blank'): ?>
            <p class="error">＊ユーザーIDを入力してください。</p>
        <?php elseif (!empty($errors["user_id"]) && $errors['user_id'] === 'duplicate'): ?>
            <p class="error">＊このIDは既に使用されています。</p>
            <?php endif;?>
        <br>
        <label>パスワード</label>
        <input type="password" name="password">
        <?php if (!empty($errors["password"]) && $errors['password'] === "blank"): ?>
            <p class="error">＊パスワードを入力してください。</p>
            <?php endif;?>
        <br>
        <label>パスワード（確認用）</label>
        <input type="password" name="password_confirm">
        <?php if (!empty($errors["password_confirm"]) && $errors['password_confirm'] === "blank"): ?>
            <p class="error">＊再度パスワードを入力してください。</p>
        <?php elseif (!empty($errors["password"]) && $errors['password'] === "disagreement"): ?>
            <p class="error">＊パスワードが一致しません。</p>
            <?php endif; ?>
            <br>
        <input type="submit" value="確認する">
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
    </div>
</body>
</html>
