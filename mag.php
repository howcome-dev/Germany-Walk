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
    <section class="ly_wrapper_conts">
      <h2 class="ly_wrapper_ttl">メールマガジン登録</h2>
      <p>私の旅の予定をお送りします（無料）。<br>ぜひ、ご登録ください。</p>
      <form action="#">
        <table id="form-table">
          <tr>
            <td class="headeing"><label for="yourName">お名前</label></td>
            <td><input type="text" name="yourName" id="yourName"></td>
          </tr>
          <tr>
            <td class="heading"><label for="eMail">メールアドレス</label></td>
            <td><input type="text" name="eMail" id="eMail"></td>
          </tr>
          <tr>
            <td class="heading"><label for="message">メッセージ</label></td>
            <td><textarea name="message" id="message" cols="40" rows="5"></textarea></td>
          </tr>
          <tr>
            <td class="heading"></td>
            <td><input type="submit" name="button" id="button" value="メールマガジンを登録する"></td>
          </tr>
        </table>
      </form>
    </section>
    <aside class="bl_aside">
      <h2 class="ly_wrapper_ttl">新着情報</h2>
      <div class="bl_aside_inner">
        <h3 class="bl_aside_ttl">列車のホームは何度も確認すること</h3>
        <p class="bl_aside_txt">ぼーっとしていると乗り場を間違えてしまうことも。駅員さんは先頭車両にいるので不安だったら確認してもらいましょう。</p>
      </div>
      <div class="bl_aside_inner">
        <h3 class="bl_aside_ttl">アイスバインはベルリンの郷土料理</h3>
        <p class="bl_aside_txt">アイスバインは豚のお肉。ほろほろでおいしいです。でも、パッサウにはありません。ひとくくりにドイツ料理と言っても現地の人でも知らないと言われます。困った顔をされてしまいますのでお気をつけを。</p>
      </div>
      <p><a class="bl_aside_link" href="mag.html" id="mm">メールマガジン登録</a></p>
      <p class="bl_aside_notes">最新情報をメールでお届けします。</p>
    </aside>
  </main>
  <footer>
    <p>Copyright 2020 Germany Walk All rights reserved.</p>
  </footer>
</body>
</html>