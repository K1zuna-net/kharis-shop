<?php
session_start();

$cart = array();

// POSTで受け取った場合
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = $_POST['item'];
    $kind = $_POST['kind'];

    if ($kind === 'change') {
        $quantity = $_POST['quantity'];
        $_SESSION['cart'][$item] = $quantity;
    } elseif ($kind === 'delete') {
        unset($_SESSION['cart'][$item]);
    }
}

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kharis | カート</title>
    <link rel="shortcut icon" href="./images/favcon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./css/swiper.min.css">
    <link rel="stylesheet" href="./css/carts.css">
    <script src="./js/main.js"></script>
    <script src="./js/swiper.min.js"></script>
    <script src="./js/water.js" defer></script>
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/jquery.ripples-min.js"></script>
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
    <h1>ショッピングカート</h1>

    <p><a href="./Products">商品一覧へ</a></p>


    <div class="carts_wrap">
        <table class="item_list">
            <tr>
                <th>商品名</th>
                <th>個数</th>
                <th>数量</th>
                <th>数量変更</th>
                <th>商品削除</th>
            </tr>
            <?php foreach($cart as $key => $var): ?>
            <tr>
                <td>
                    <?php
        if ($key === 'VELY VELY S.O.S SPOT POWDER') {
            echo 'VELY VELY S.O.S SPOT POWDER';
        } elseif ($key === 'たまご化粧水') {
            echo 'たまご化粧水';
        } elseif ($key === 'アクアレーベル ホワイトケアローション') {
            echo 'アクアレーベル ホワイトケアローション';
        }   elseif ($key === 'ACNES LABO'){
            echo 'ACNES LABO';
        }   elseif ($key === 'MADECASSOSIDE'){
            echo 'MADECASSOSIDE';
        } elseif ($key === 'IHADA'){
            echo 'IHADA';
        }   elseif ($key === 'オロナインH軟膏'){
            echo 'オロナインH軟膏';
        }   elseif ($key === 'キールズ'){
            echo  'キールズ';
        } elseif ($key === 'テラリコール'){
            echo 'テラリコール';
        }   elseif ($key === 'ペアアクネクリーム'){
            echo 'ペアアクネクリーム';
        } elseif ($key === 'N.M.F アクア アンプルマスクJEX'){
            echo 'N.M.F アクア アンプルマスクJEX';
        } elseif ($key === 'ペアアクネクリーム'){
            echo 'ペアアクネクリーム';
        } elseif ($key === 'ピジョンワセリン'){
            echo 'ピジョンワセリン';
        } elseif ($key === 'MINON Amino Moist'){
            echo 'MINON Amino Moist';
        }   elseif ($key === 'Mogu Lemonade Moisture Lotion'){
            echo 'Mogu Lemonade Moisture Lotion';
        }   elseif ($key === 'Momopuri Moisturizing Barrier Lotion'){
            echo 'Momopuri Moisturizing Barrier Lotion';
        }   elseif ($key === 'ETVOS アルティモイストローション'){
            echo 'ETVOS アルティモイストローション' ;
        }   elseif ($key === 'ORBIS ユードット ローション'){
            echo 'ORBIS ユードット ローション';
        }   elseif ($key === 'CEZANNE 濃密スキンコンディショナー'){
            echo 'CEZANNE 濃密スキンコンディショナー';
        }   elseif ($key === 'DERMA LASER VC100'){
            echo 'DERMA LASER VC100';
        }   elseif ($key === '豆乳イソフラボン'){
            echo '豆乳イソフラボン';
        }   elseif  ($key === 'AQUALABEL'){
            echo 'AQUALABEL';
        }   elseif ($key === 'ASTALIFT MOIST LOTION'){
            echo 'ASTALIFT MOIST LOTION';
        }   elseif ($key === '酒粕しっとり化粧水'){
            echo '酒粕しっとり化粧水';
        }   elseif ($key === '極潤エイジングケア'){
            echo '極潤エイジングケア';
        }   elseif ($key === 'イハダ美白化粧水'){
            echo 'イハダ美白化粧水';
        }   elseif ($key === 'CICAスキン'){
            echo 'CICAスキン';
        }   elseif ($key === '大吟醸うるおい美白水'){
            echo '大吟醸うるおい美白水';
        }   elseif ($key === 'エリクシールホワイト'){
            echo 'エリクシールホワイト';
        }   elseif ($key === 'オルビスホワイトニング'){
            echo 'オルビスホワイトニング';
        }   elseif ($key === 'キュレル美白ケア'){
            echo 'キュレル美白ケア';
        }   elseif ($key === '肌美精 薬用美白化粧水'){
            echo '肌美精 薬用美白化粧水';
        }   elseif ($key === 'トナーエクストラクト'){
            echo 'トナーエクストラクト';
        }   elseif ($key === 'ファンケル化粧水'){
            echo 'ファンケル化粧水';
        }   elseif ($key === 'イニスフリーブライトニングポア'){
            echo 'イニスフリーブライトニングポア';
        }   elseif ($key === 'ポーラ・ホワイトショット'){
            echo 'ポーラ・ホワイトショット';
        }   elseif ($key === 'ホワイトルフィフス'){
            echo 'ホワイトルフィフス';
        }   elseif ($key ==='敏感肌用薬用美白化粧水'){
            echo '敏感肌用薬用美白化粧水';
        }   elseif ($key === 'メラノCC薬用美白化粧水'){
            echo 'メラノCC薬用美白化粧水';
        }   elseif ($key === 'ワンシング化粧水'){
            echo 'ワンシング化粧水';
        }   elseif ($key === 'ソフィーナ ボーテ 高保湿化粧水＜美白＞ しっとり'){
            echo 'ソフィーナ ボーテ 高保湿化粧水＜美白＞ しっとり';
        }   elseif ($key === 'ちふれ'){
            echo 'ちふれ';
        }   elseif ($key === 'NE THING(ワンシング)ガラクトミセス化粧水'){
            echo 'NE THING(ワンシング)ガラクトミセス化粧水';
        }   elseif ($key === 'ロート製薬肌ラボ白潤プレミアム'){
            echo 'ロート製薬肌ラボ白潤プレミアム';
        }   elseif ($key === 'CICA マイルドフォームクレンザー'){
            echo 'CICA マイルドフォームクレンザー';
        }   elseif ($key === 'オバジC 酵素洗顔パウダー'){
            echo 'オバジC 酵素洗顔パウダー';
        }   elseif ($key === 'ロゼット　洗顔パスタ　アクネクリア'){
            echo 'ロゼット　洗顔パスタ　アクネクリア';
        }   elseif ($key === 'ロゼット　洗顔パスタ　海泥スムース'){
            echo 'ロゼット　洗顔パスタ　海泥スムース';
        }   elseif ($key === 'ロゼット　洗顔パスタ　レッドリンクル'){
            echo 'ロゼット　洗顔パスタ　レッドリンクル';
        }   elseif ($key === 'ロゼット　洗顔パスタ　氷河泥クレンズ'){
            echo 'ロゼット　洗顔パスタ　氷河泥クレンズ';
        }   elseif ($key === 'ロゼット　洗顔パスタ　海泥スムース'){
            echo 'ロゼット　洗顔パスタ　海泥スムース';
        }   elseif ($key === 'ロゼット　洗顔パスタ　ガスールブライト'){
            echo 'ロゼット　洗顔パスタ　ガスールブライト';
        }   elseif ($key === 'エブリッシュ　炭スクラブ'){
            echo 'エブリッシュ　炭スクラブ';
        }   elseif ($key === 'FANCL ディープクリア洗顔パウダー'){
            echo 'FANCL ディープクリア洗顔パウダー';
        }   elseif ($key === 'ニベア クリームケア 洗顔料 ブライトアップ'){
            echo 'ニベア クリームケア 洗顔料 ブライトアップ';
        }   elseif ($key === 'ニベア クリームケア 洗顔料 しっとり'){
            echo 'ニベア クリームケア 洗顔料 しっとり';
        }   elseif ($key === 'ニベア クリームケア 洗顔料 とてもしっとり'){
            echo 'ニベア クリームケア 洗顔料 とてもしっとり';
        }   elseif ($key === 'スイサイ　ビューティクリア　パウダーウォッシュN'){
            echo 'スイサイ　ビューティクリア　パウダーウォッシュN';
        }   elseif ($key === 'プレミアムパーフェクトホイップ'){
            echo 'プレミアムパーフェクトホイップ';
        }   elseif ($key === 'プレミアムパーフェクトホイップ'){
            echo 'プレミアムパーフェクトホイップ';
        }   elseif ($key === '無印良品 マイルド洗顔フォーム'){
            echo '無印良品 マイルド洗顔フォーム';
        }   elseif ($key === 'るるるん ルルルンプレシャス クリーム(保湿タイプ)'){
            echo 'るるるん ルルルンプレシャス クリーム(保湿タイプ)';
        }   elseif ($key === 'エリクシール(ELIXIR) ルフレ バランシング みずクリーム'){
            echo 'エリクシール(ELIXIR) ルフレ バランシング みずクリーム';
        }   elseif ($key === 'キュレル 潤浸保湿フェイスクリーム'){
            echo 'キュレル 潤浸保湿フェイスクリーム';
        }   elseif ($key === 'セタフィル モイスチャライジング クリーム'){
            echo 'セタフィル モイスチャライジング クリーム';
        }   elseif ($key === 'ちふれ 保湿クリーム'){
            echo 'ちふれ 保湿クリーム';
        }   elseif ($key === 'SHISEIDO ドルックス ナイトクリーム'){
            echo 'SHISEIDO ドルックス ナイトクリーム';
        }   elseif ($key === 'ニベアクリーム'){
            echo 'ニベアクリーム';
        }   elseif ($key === 'ハトムギ化粧水'){
            echo 'ハトムギ化粧水';
        }   elseif ($key === 'ヴァセリン オリジナル ピュアスキンジェリー'){
            echo 'ヴァセリン オリジナル ピュアスキンジェリー';
        }   elseif ($key ==='極潤薬用ハリ化粧水'){
            echo '極潤薬用ハリ化粧水';
        }   elseif ($key === '極潤プレミアム ヒアルロン液'){
            echo '極潤プレミアム ヒアルロン液';
        }   elseif ($key === '白潤プレミアム 薬用浸透'){
            echo '白潤プレミアム 薬用浸透';
        }   elseif ($key === '松山油脂 肌をうるおす 保湿クリーム'){
            echo '松山油脂 肌をうるおす 保湿クリーム';
        }   elseif ($key === '豆乳イソフラボン'){
            echo '豆乳イソフラボン';
        }   elseif ($key === '無印良品敏感肌用クリーム'){
            echo '無印良品敏感肌用クリーム';
        }
        ?>
                </td>
                <td>
                    <?php echo $var ?>個
                </td>

                <!- 変更ボタン ->
                    <form action="" method="post">
                        <td>
                            <select name="quantity">
                                <?php for($i = 1; $i <10; $i++):?>
                                <option value="<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </option>
                                <?php endfor; ?>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="kind" value="change">
                            <input type="hidden" name="item" value="<?php echo $key ?>">
                            <input type="submit" value="変更">
                        </td>
                    </form>

                    <form action="" method="post">
                        <td>
                            <input type="hidden" name="kind" value="delete">
                            <input type="hidden" name="item" value="<?php echo $key ?>">
                            <input type="submit" value="削除">
                        </td>
                    </form>
                    <?php endforeach; ?>

                    <?php if(!empty($key)) {
                        echo '<form action="./payment" method="post">';
                        echo '<input type="submit" value="購入手続きをする">';
                        echo '</form>';
                    }
                    ?>
            </tr>
        </table>
    </div>
</body>

</html>