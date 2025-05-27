<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
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
    <div class="search-form__content">
      <h2 class="search-form__content-title">
        日本と世界の時間を比較</h2>
    </div>
    <form class="search-form" action="result.php" method="get">
<!--formタグは、ユーザーの入力をサーバーに送信するためのフォームです。
action="result.php"は、フォームが送信される先のURL（result.php）を指定しています。選択された都市がresult.phpに送信され、そこで処理されることになります。
method="get"は、データがURLの一部（クエリ文字列）として送信されることを示します。-->
      <div class="search-form__item">
        <select class="search-form__item-select" name="city">
<!--selectタグは、ドロップダウンメニューを作成するためのタグです。name="city"は、この選択肢の名前をcityとして指定しており、送信されたデータでこの名前が使用されます。-->
          <option value="シドニー">シドニー</option>
          <option value="上海">上海</option>
          <option value="モスクワ">モスクワ</option>
          <option value="ロンドン">ロンドン</option>
          <option value="ヨハネスブルグ">ヨハネスブルグ</option>
          <option value="ニューヨーク">ニューヨーク</option>
        </select>
      </div>
      <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">
          検索
        </button>
      </div>
    </form>
  </main>
</body>

</html>
<?php
    echo 'COACHTECH';
?>
