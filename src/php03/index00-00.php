<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>World Clock</title>
<link rel="stylesheet" href="css/sanitize00-00.css">
<link rel="stylesheet" href="css/common00-00.css">
<link rel="stylesheet" href="css/index00-00.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index00-00.php">
                World Clock
            </a>
        </div>
</header>
<main>
    <div class="search-form__content">
        <div class="search-form__heading">
            <h2>日本と世界の時間を比較</h2>
        </div>
<form class="search-form" action="result00-00.php" method="get">
   <div class="search-form__item">
      <select class="search-form__item-select" name="city">
                    <option value="シドニー">シドニー</value>
                    <option value="東京">東京</value>
                    <option value="台中">台中</value>
                    <option value="ニューデリー">ニューデリー</value>
                    <option value="カイロ">カイロ</value>
                    <option value="ローマ">ローマ</value>
                    <option value="パリ">パリ</value>
                    <option value="ロンドン">ロンドン</value>
                    <option value="ニューヨーク">ニューヨーク</value>
                    <option value="バンクーバー">バンクーバー</value>
                </select>
        
            <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">
        送信
      </button>
    </div>
</form>
</div>
</main>
</body>
</html>