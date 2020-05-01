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
      <?php include("assets/inc/aside.php"); ?>
    </aside>
  </main>
  <footer>
    <?php include("assets/inc/footer.php"); ?>
  </footer>
</body>
</html>