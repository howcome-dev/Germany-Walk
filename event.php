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
      <h2 class="ly_wrapper_ttl">観光イベント</h2>
      <table class="bl_event">
        <tr>
          <th class="bl_event_th" scope="col">月別</th>
          <th class="bl_event_th" scope="col">イベント名</th>
          <th class="bl_event_th" scope="col">日時</th>
          <th class="bl_event_th" scope="col">会場</th>
        </tr>
        <tr>
          <td rowspan="5" class="bl_event_month">4月</td>
          <td class="bl_event_td">蚤の市<br>Auer Dult</td>
          <td class="bl_event_td">4月後半から5月初め</td>
          <td class="bl_event_td">ミュンヘン<br>マリアヒルフ教会</td>
        </tr>
        <tr>
          <td class="bl_event_td">パイプオルガンコンサート</td>
          <td class="bl_event_td">お昼</td>
          <td class="bl_event_td">パッサウ<br>シュテファン大聖堂</td class="bl_event_td">
        </tr>
        <tr>
          <td class="bl_event_td">スーパー</td>
          <td class="bl_event_td">いつでも</td>
          <td class="bl_event_td">ドイツ</td>
        </tr>
        <tr>
          <td class="bl_event_td">長距離列車</td>
          <td class="bl_event_td">いつでも</td>
          <td class="bl_event_td">ミュンヘン中央駅</td>
        </tr>
        <tr>
          <td class="bl_event_td">イタリアンレストラン</td>
          <td class="bl_event_td">たぶんいつでも</td>
          <td class="bl_event_td">パッサウ</td>
        </tr>
        <tr>
          <td class="bl_event_month">5月</td>
          <td class="bl_event_td">サウンド・オブ・ミュージックツアー</td>
          <td class="bl_event_td">ドイツから近い</td>
          <td class="bl_event_td">ザルツブルク</td>
        </tr>
      </table>
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