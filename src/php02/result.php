<?php

require_once('functions/search_city_time.php');

$tokyo = searchCityTime('東京');

$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
  <div class="result__content"><!--この中に実際の「結果カード」が含まれる。-->
    <div class="result-cards"><!--この部分は、複数の「結果カード」を並べるためのコンテナです。カードが2つ定義されています。-->
<!--1枚目のカード-->
      <div class="result-card">
        <div class="result-card__img-wrapper"><!--ページ全体を囲う外枠のdivに使う、レイアウトを中央に寄せたり、全体を整えるためのコンテナ-->
        <img class="result-card__img" src="img/<?php echo $tokyo['img'] ?>" alt="国旗">
        <!--画像タグで、ここでは国旗の画像を表示する-->
        </div>
        <div class="result-card__body">
<!--画像の下にあるコンテンツ部分。この中には都市名や時刻を表示するための<p>タグがあります。-->
          <p class="result-card__city">
            <?php echo $tokyo['name']?>
            </p>
          <p class="result-card__time">
            <?php echo $tokyo['time']?>
            </p>
        </div>
    </div>
<!--2枚目のカード-->
      <div class="result-card">
        <div class="result-card__img-wrapper">
          <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
        </div>
        <div class="result-card__body">
          <p class="result-card__city">
            <?php echo $comparison['name']?>
          </p>
          <p class="result-card__time">
            <?php echo $comparison['time']?>

          </p>
        </div>
      </div>
    </div>
  </div>
</main>
</body>

</html>
