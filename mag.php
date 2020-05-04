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
      <form method="post">
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
    </section>
  </main>
  <footer>
    <?php include("assets/inc/footer.php"); ?>
  </footer>
</body>
</html>