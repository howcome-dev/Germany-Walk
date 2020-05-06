<?php
//var_dump($_POST);

// 変数の初期化
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

} elseif( !empty($_POST['btn_submit']) ) {

  $page_flag = 2;

  //変数とタイムゾーンを初期化
  $header = null;
  $auto_reply_subject = null;
  $auto_reply_text = null;
  $admin_reply_subject = null;
  $admin_reply_text = null;
  date_default_timezone_set('Asia/Tokyo');

  //ヘッダー情報を設定
  $header = "MIME-Version: 1.0\n";
  $header .= "From: Germany Walk <noreply@howcome.dev>\n";
  $header .= "Reply-To: Germany Walk <noreply@howcome.dev>\n";

  //件名を設定
  $auto_reply_subject = 'Germany Walkの登録ありがとうございます！！！';

  //本文を設定
  $auto_reply_text = "Germany Walkの登録とメッセージありがとうございます！とっても嬉しいです！\n登録してくれたあなたに、私の旅行日程をお届けします！どうぞお楽しみに！\n\n";
  $auto_reply_text .= "お問い合わせ日時" . date("Y-m-d H:i") ."\n";
  $auto_reply_text .= "氏名:" . $_POST['yourName'] ."\n";
  $auto_reply_text .= "メールアドレス:" . $_POST['eMail']. "\n\n";
  $auto_reply_text .= "Germany Walk管理人 R";

  //メール送信
  mb_send_mail( $_POST['eMail'], $auto_reply_subject, $auto_reply_text, $header);

  //自分へ送るメールの件名
  $admin_reply_subject = "Germany Walkへの登録メッセージがありました。";
  $admin_reply_text = "下記の内容で登録メッセージがありました。\n\n";
  $admin_reply_text .= "お問い合わせ日時:" . date("Y-m-d H:i") ."\n";
  $admin_reply_text .= "氏名:" . $_POST['yourName'] . "\n";
  $admin_reply_text .= "メールアドレス:" . $_POST['eMail'] . "\n\n";

  //自分へメール送信
  mb_send_mail( 'noreply@howcome.dev', $admin_reply_subject, $admin_reply_text, $header);

} 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
  <title>Germany Walk</title>
</head>
<body>
  <header class="bl_header">
    <?php include("assets/inc/header.php"); ?>
  </header>
  <main class="ly_wrapper">
    <section class="ly_wrapper_conts bl_mag">
      <h2 class="ly_wrapper_ttl">メールマガジン登録</h2>
      <p>私の旅の予定をお送りします（無料）。<br>ぜひ、ご登録ください。</p>
      
      <?php if( $page_flag === 1): ?>

      <form method="post" action="">
        <div>
          <p><label for="yourName">お名前</label></p>
          <p><?php echo $_POST['yourName']; ?></p>
        </div>
        <div>
          <p><label for="eMail">メールアドレス</label></p>
          <p><?php echo $_POST['eMail']; ?></p>
        </div>
        <div>
          <p><label for="message">メッセージ</label></p>
          <p><?php echo $_POST['message']; ?></p>
        </div>
        <div>
          <p><input type="submit" name="btn_back" value="戻る"></p>
          <p><input type="submit" name="btn_submit" value="送信"></p>
          <p><input type="hidden" name="yourName" value="<?php echo $_POST['yourName']; ?>"></p>
          <p><input type="hidden" name="eMail" value="<?php echo $_POST['eMail']; ?>"></p>
        </div>
      </form>

      <?php elseif( $page_flag === 2 ): ?>

      <p>登録とメッセージありがとうございます！</p>

      <?php else: ?>

      <form method="post" action="">
        <div>
          <p><label for="yourName">お名前</label></p>
          <p><input type="text" name="yourName" value="あなたの　おなまえ"></p>
        </div>
        <div>
          <p><label for="eMail">メールアドレス</label></p>
          <p><input type="text" name="eMail" value="i_love_deutsche_sprache@germany.walk"></p>
        </div>
        <div>
          <p><label for="message">メッセージ</label></p>
          <p><textarea name="message" value="応援メッセージを書いてください。お願いします。" cols="40" rows="5"></textarea></p>
        </div>
        <div>
          <p><input type="submit" name="btn_confirm" value="入力内容を確認する"></p>
        </div>
      </form>

      <?php endif; ?>
      
    </section>
  </main>
  <footer>
    <?php include("assets/inc/footer.php"); ?>
  </footer>
</body>
</html>