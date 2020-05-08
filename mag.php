<?php

// 変数の初期化
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

} elseif( !empty($_POST['btn_submit']) ) {

  $page_flag = 2;

  // 変数とタイムゾーンを初期化
  $header = null;
  $auto_reply_subject = null;
  $auto_reply_text = null;
  $admin_reply_subject = null;
  $admin_reply_text = null;
  date_default_timezone_set('Asia/Tokyo');

  // ヘッダー情報を設定
  $header = "MIME-Version: 1.0\n";
  $header .= "From: Germany Walk <noreply@howcome.dev>\n";
  $header .= "Reply-To: Germany Walk <noreply@howcome.dev>\n";

  // 件名を設定
  $auto_reply_subject = 'Germany Walkの登録ありがとうございます！！！';

  // 本文を設定
  $auto_reply_text = "Germany Walkの登録とメッセージありがとうございます！とっても嬉しいです！\n登録してくれたあなたに、私の旅行日程をお届けします！どうぞお楽しみに！\n\n";
  $auto_reply_text .= "お問い合わせ日時" . date("Y-m-d H:i") ."\n";
  $auto_reply_text .= "氏名:" . $_POST['last_name'] . $_POST['first_name'] ."\n";
  $auto_reply_text .= "メールアドレス:" . $_POST['email']. "\n\n";
  $auto_reply_text .= "Germany Walk管理人 R";

  // メール送信
  mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);

  // 自分へ送るメールの件名
  $admin_reply_subject = "Germany Walkへの登録メッセージがありました。";

  // 自分へ送るメールの本文
  $admin_reply_text = "下記の内容で登録メッセージがありました。\n\n";
  $admin_reply_text .= "お問い合わせ日時:" . date("Y-m-d H:i") ."\n";
  $admin_reply_text .= "氏名:" . $_POST['last_name'] . $_POST['first_name']. "\n";
  $admin_reply_text .= "メールアドレス:" . $_POST['email'] . "\n\n";

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
      <ol class="bl_mag_steps">
        <li class="bl_mag_steps_item">
          <span class="bl_mag_steps_itemNum">01</span>
          <span class="bl_mag_steps_itemLabel">入力</span>
        </li>
        <li class="bl_mag_steps_item">
          <span class="bl_mag_steps_itemNum">02</span>
          <span class="bl_mag_steps_itemLabel">確認</span>
        </li>
        <li class="bl_mag_steps_item">
          <span class="bl_mag_steps_itemNum">03</span>
          <span class="bl_mag_steps_itemLabel">完了</span>
        </li>
      </ol>
      <p class="bl_mag_txt">私の旅の予定をお送りします。<br>ぜひ、ご登録ください。</p>
      
      <?php if( $page_flag === 1): ?>

      <form class="bl_mag_form" method="post" action="">
        <fieldset class="bl_mag_form_input">
          <legend>
            <span class="bl_mag_form_labelTxt">お名前 Name</span>
          </legend>
          <?php echo $_POST['last_name']; ?>
          <?php echo $_POST['first_name']; ?>
        </fieldset>
        <p class="bl_mag_form_input">
          <span class="bl_mag_form_labelTxt">メールアドレス Mail</span>
          <?php echo $_POST['email']; ?>
        </p>
        <p class="bl_mag_form_input">
          <span class="bl_mag_form_labelTxt">メッセージ Message</span>
          <?php echo $_POST['message']; ?>
        </p>
        <p class="bl_mag_form_submit">
          <button class="ly_btn" name="btn_submit" type="submit">送信</button>
          <button class="ly_btn" name="btn_back" type="submit">入力画面に戻る</button>
        </p>
        <p><input type="hidden" name="last_name" value="<?php echo $_POST['last_name']; ?>"></p>
        <p><input type="hidden" name="first_name" value="<?php echo $_POST['first_name']; ?>"></p>
        <p><input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"></p>
        <p><input type="hidden" name="message" value="<?php echo $_POST['message']; ?>"></p>
      </form>

      <?php elseif( $page_flag === 2 ): ?>

      <p>登録完了です！メッセージありがとうございました。</p>

      <?php else: ?>

      <form class="bl_mag_form" method="post" action="">
        <fieldset class="bl_mag_form_input">
          <legend>
            <span class="bl_mag_form_labelTxt">お名前 Name</span>
          </legend>
          <input class="bl_mag_form_txtfield" name="last_name" type="text" placeholder="姓 Family Name" value="">
          <input class="bl_mag_form_txtfield" name="first_name" type="text" placeholder="名 First Name" value="">
        </fieldset>
        <p class="bl_mag_form_input">
          <span class="bl_mag_form_labelTxt">メールアドレス Mail</span>
          <input class="bl_mag_form_txtfield" name="email" type="text" placeholder="xxxx@germanywalk.com" value="">
        </p>
        <p class="bl_mag_form_input">
          <span class="bl_mag_form_labelTxt">メッセージ Message</span>
          <textarea class="bl_mag_form_txtarea" name="message" rows="8" placeholder="最大文字数1000字まで。熱い想いを語ってください。" value=""></textarea>
        <p class="bl_mag_form_submit">
          <button class="ly_btn" name="btn_confirm" type="submit">入力内容を確認する</button>
        </p>
      </form>

      <?php endif; ?>
      
    </section>
  </main>
  <footer>
    <?php include("assets/inc/footer.php"); ?>
  </footer>
</body>
</html>