<?php
require_once "../template/db.php";


if (!isset($_SESSION['pre_data'])) {
    header('Location: ./pre_signup');
    exit();
}

//mailがuserテーブルに登録されているか確認する
$sql = 'SELECT * FROM users WHERE `mail` = :mail';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':mail', $_SESSION['pre_data']['mail'], \PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(\PDO::FETCH_OBJ);

//テーブルに登録がなければ仮登録としてインサートする
if (!$user) {
    $sql = 'INSERT INTO users(mail, regi_token, regi_token_sent_at) VALUES (:mail, :regi_token, :regi_token_sent_at)';
}else{
    $sql =  'UPDATE users SET regi_token = :regi_token, regi_token_sent_at = :regi_token_sent_at WHERE mail = :mail';
}

//token作成
$regi_token = bin2hex(random_bytes(32));

//原子性のため、トランザクション設置
//メール送信失敗したら仮登録も失敗させる

try{
    $pdo->beginTransaction();

//仮登録する

$stmt = $pdo->prepare($sql);
$stmt ->bindValue(':mail', $_SESSION['pre_data']['mail'], \PDO::PARAM_STR);
$stmt ->bindValue(':regi_token', $regi_token, \PDO::PARAM_STR);
$stmt ->bindValue(':regi_token_sent_at', (new \DateTime())->format('Y-m-d H:i:s'), \PDO::PARAM_STR);
$stmt ->execute();

//メール送信 文字化け防止
mb_language("japanese");
mb_internal_encoding("UTF-8");

//本登録用URL
$url = "https://kharis.shop/user/signup?token={$regi_token}";

//件名
$subject = "仮登録完了のお知らせ";

//送信元、Fromを設定	
$from = "noreply@kharis.shop";

//送信先 入力したメールアドレス
$send_to = $_SESSION['pre_data']['mail'];

//headerを設定
$charset = "UTF-8";
$headers['MIME-Version'] = "1.0";
$headers['Content-Type'] = "text/plain; charset=".$charset;
$headers['Content-Transfer-Encoding'] = "8bit";
$headers['From'] = $from;
//BCC設定
$headers['BCC'] = $from;

//headerを作成
foreach ($headers as $key => $val) {
    $arrheader[] = $key . ': ' . $val;
}
$header = implode("\n", $arrheader);

//本文
    $body = <<< EOM
    Kharis.shop事務局でございます。
    この度は仮登録いただきありがとうございます。
    24時間以内に以下のリンクより本登録の手続きをお願いいたします。
    {$url}
    ※このメールは、送信専用メールアドレスからご登録いただいたメールアドレスに送信しています。
    ご返信をいただいても、回答することは出来かねます。
    EOM;

    // mb_send_mailは成功したらtrue、失敗したらfalseを返す
    $isSent = mb_send_mail($send_to, $subject, $body, $headers);

    if (!$isSent) throw new \Exception('メール送信に失敗しました。');

    // メール送信まで成功したら、仮登録を確定
    $pdo->commit();

} catch (\Exception $e) {
    $pdo->rollBack();

    exit($e->getMessage());
}

header('Location: ./pre_result');

?>