<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/payment.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js?ver=3.4.1"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="./js/jquery.autoKana.js"></script>
    <title>購入手続き</title>
</head>

<body>
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
    <h1>送付先住所</h1>

    <!--contents-->

    <form action="./thank_you" method="post">

        <label>購入者氏名</label>
        <input type="text" name="sei" placeholder="姓" class="pay_text"><input type="text" name="mei" placeholder="名"
            id="mei" class="pay_text">
        <br>
        <label>読みがな</label>
        <input type="text" name="seikana" placeholder="セイ" class="pay_text"><input type="text" name="meikana"
            placeholder="メイ" id="meikana" class="pay_text">

        <!--▼郵便番号入力フォーム-->
        <br>
        <label>郵便番号</label><input type="text" name="zip01" size="10" maxlength="8"
            onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" class="pay_text">


        <!--▼郵便番号から、自動で住所をテキストボックスに入力する-->

        <!-- ▼住所入力フィールド(都道府県) -->
        <br><label>都道府県</label><input type="text" name="pref01" size="20" class="pay_text">


        <!-- ▼住所入力フィールド(都道府県以降の住所) -->
        <br><label>住所</label><input type="text" name="addr01" size="60" class="pay_text">

        <!--▼確認メール入力フィールド-->
        <br><label>メールアドレス</label><input type="email" name="mail" id="mail" class="pay_text">

        <!--▼支払い方法選択フィールド-->
        <br><label>お支払方法</label><select name="payment" id="payment">
            <option value="credit">クレジットカード</option>
            <option value="Cash on delivery">代金引換</option>
            <option value="deferred payment">後払い</option>
        </select>
        <br>
        <input type="submit" value="購入する">

    </form>
    <!--contents-->
<!--footer-->
<footer class="footer">
    <img src="./imgs/logo/IH12B_3_ロゴ2.png" alt="ロゴ" class="logo" />
    <!--left_nav-->
    <nav class="footer_nav">
        <ul>
            <li><a href="./Products">Products</a></li>
            <li><a href="./about_us">About Us</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>