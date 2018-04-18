<?php

//◯ここから

//□データベースに接続する為の各種情報を変数にセット。
$host = "mysql626.db.sakura.ne.jp";//サーバー名変数
$user = "zuta";//サーバーID変数
$pass = "fragment15315";//サーバーパスワード変数
$db   = "zuta_sample";//データベース名変数
//□ここまでが変数セット。

//mysqli_connect：データベースにアクセスする。
//mysqli_connect(サーバーの場所、ID、パスワード)

$conn = mysqli_connect($host, $user, $pass) or die("host接続失敗");
//↑実行して出来た結果を「$conn」という変数に入れている。

//mysqli_select_db：目的のデータベースの選択
//mysqli_select_db(データベースサーバーに接続済みの変数、接続したいデータベース名)
mysqli_select_db($conn, $db) or die("db接続失敗");

//◯ここまでがデータベースサーバーに接続し、更に目的のデータベースに接続する為の設定。


mysqli_set_charset($conn, 'utf-8');


//変数「$sql」に前回のhiddenの変数からそれぞれの情報を入れろと言う内容。
$sql = "INSERT INTO contact (name, kana, mail, address, tel, comment) VALUES('".$_POST["name"]."','".$_POST["kana"]."','".$_POST["mail"]."','".$_POST["address"]."','".$_POST["tel"]."','".$_POST["comment"]."')";

//mysqli_query：実際にSQLを実行せよ、と言う処理。
//$result_flag(アクセスするデータベース,実行内容)
//変数$result_flagに実行結果を保存。
$result_flag = mysqli_query($conn, $sql);

//もし接続に失敗したら「INSERT失敗」と表示して終了。
if (!$result_flag) {
    die('INSERT失敗'.mysqli_error($conn));
}

//データベースのアクセスを切断。
mysqli_close($conn) or die("MySQL切断に失敗しました。");


 mb_language("japanese");
 mb_internal_encoding("UTF-8");

//PHP_EOL：php言語版の「改行」処理。
$body = "氏名:" .$_POST["name"]. PHP_EOL."お問い合わせ内容:". $_POST["comment"];

//メール送信処理
//mb_send_mail(宛先メールアドレス、件名、本文)
mb_send_mail($_POST["mail"], 'お問い合わせありがとうございました', $body);
?>

<html>
 <head>
  <title>お問い合わせフォーム</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 
 <body>
  <p>メールが送信されました。</p>
  <?php //mail("aztak2012@gmail.com","お問い合わせ内容です。",$_POST["comment"]) ?>
 </body>
</html>