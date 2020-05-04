<?php
var_dump($_POST);

// 変数の初期化
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

} elseif( !empty($_POST['btn_submit']) ) {

  $page_flag = 2;

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