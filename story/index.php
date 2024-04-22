<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kurumaya</title>
  <meta name="description" content="SAMPLE" />
  <link rel="icon" href="">
  <meta property="og:title" content="SAMPLE">
  <meta property="og:type" content="website">
  <meta property="og:description" content="SAMPLE">
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>

<body>

  <!----------------- Header
------------------------------------------------------------>
  <?php include ($_SERVER['DOCUMENT_ROOT'] . "/assets/include/_header.php"); ?>


  <!----------------- body
------------------------------------------------------------>
  <main class="main">
    <div class="keyvisual">
      <figure class="modKv">
        <img src="/assets/img/story/img_kv.png" alt="keyvisual Image" width="1440" height="310" loading="eager" />
        <img src="/assets/img/story/img_kv2.png" alt="keyvisual Image" width="1440" height="310" loading="eager" />
      </figure>
      <p class="keyvisual__text">店舗情報</p>
    </div>

    <div class="main__inner">
      <section class="modSection">
        <h2 class="modHeading02">アクセス</h2>
        <picture class="img">
          <source media="(max-width:1023px)" srcset="/assets/img/story/sp/img_map.png" alt="Map Location" loading="lazy"
            width="1095" height="345">
          <img src="/assets/img/story/img_map.png" alt="Map Location" loading="lazy" width="1095" height="345">
        </picture>
      </section>

      <section class="modSection">
        <h2 class="modHeading02">車でお越しの方</h2>
        <p class="modText modText--center">
          中央高速「国立府中インター」をご利用<br class="modBpSp">になると分かりやすく便利です。（インター下車約２０分）<br>
          府中方面出て「青果市場東」信号を右折、 都道20号へ（国道20号の手前）<br>
          野猿街道沿いの駐車場側よりお入りください。
        </p>
        <picture class="img">
          <source media="(max-width:1023px)" srcset="/assets/img/story/sp/img_byCar.png" alt="by Car" loading="lazy" width="1095" height="345">
          <img src="/assets/img/story/img_byCar.png" alt="by Car" loading="lazy" width="1095" height="345">
        </picture>
      </section>

      <section class="modSection">
        <h2 class="modHeading02">電車でお越しの方</h2>
        <p class="modText modText--center modText--byTrain">
          京王相模原線堀之内駅下車<br>
          ２番バス乗り場より「北野行き」または「南大沢行き（折り返し場経由）」乗車約７分、「帝京中高校前」下車。<br>
          道を渡り、バス進行方向に徒歩２分<br>
          野猿街道沿いの駐車場側よりお入りください。
        </p>
      </section>

      <section class="modSection">
        <h2 class="modHeading02">店舗内観</h2>
        <picture class="img">
          <source media="(max-width:1023px)" srcset="/assets/img/story/sp/img_interior.png" alt="by Train" loading="lazy" width="1095" height="345">
          <img src="/assets/img/story/img_interior.png" alt="by Train" loading="lazy" width="1095" height="345">
        </picture>
      </section>

      <section class="modSection modSection--spPd0">
        <h2 class="modHeading02">立ち寄り観光地</h2>
        <figure class="img img--mb img--map">
          <img id="map" class="img__map" src="/assets/img/story/img_transportation.png" alt="transportation"
            loading="lazy" width="1095" height="657">
        </figure>
        <input type="range" id="widthSlider" min="0" max="100" value="100" class="widthSlider modSp">
        <ul class="modListTagsSearch modListTagsSearch--spPd">
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>都立小山内裏公園</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>ぐりーんうぉーく多摩</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>都立多摩動物公園</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>サンリオピューロランド</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>八王子市長池公園</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>武蔵陵墓地（多摩御陵）</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>絹の道資料館</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>京王百草園</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>三井アウトレットパーク 多摩南大沢</span>
            </a>
          </li>
          <li class="modListTagsSearch__item">
            <a href="DUMMY" class="modBtn modBtn--search">
              <span>多摩境天然温泉 森乃彩</span>
            </a>
          </li>
        </ul>
      </section>

      <section class="modSection modSection--calendar modSection--calendarBotBorder0">
        <div class="text">
          <h2 class="modHeading02 modHeading02--leftLine">営業日カレンダー</h2>
          <ul class="text__content">
            <li class="text__content__item">
              <p class="leftTile">営業時間</p>
              <span>11：00 ~ QRコード15：00（Lo.14:30)<br>
                17：00 ~ 20：30（Lo.20:00)</span>
            </li>
            <li class="text__content__item">
              <p class="leftTile">定休日</p>
              <span>毎水曜日・第三木曜日<br>
                毎週火曜日は半休（15時閉店<br>
                <br>※尚、祝祭日の場合は通常営業致します。<br>
                （20時半閉店）</span>
            </li>
          </ul>
        </div>
        <picture class="img">
          <source media="(max-width:1023px)" srcset="/assets/img/top/sp/img_cal.png" alt="Calendar" loading="lazy" width="541" height="473">
          <img src="/assets/img/top/img_cal.png" alt="Calendar" loading="lazy" width="541" height="473">
        </picture>
      </section>
    </div>

  </main>


  <!----------------- Footer
------------------------------------------------------------>
  <?php include ($_SERVER['DOCUMENT_ROOT'] . "/assets/include/_footer.php"); ?>


  <!----------------- Script
------------------------------------------------------------>
  <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/js/common.js"></script>
  <script type="text/javascript" src="/assets/libs/slick.min.js"></script>

</body>

</html>