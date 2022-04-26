<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <!--IEブラウザ対策-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="ページの内容を表す文章" />
  <title>mySNS</title>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <!--スマホ,タブレット対応-->
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <!--サイトのアイコン指定-->
  <link rel="icon" href="/images/main_logo_mini.png" sizes="16x16" type="image/png" />
  <link rel="icon" href="/images/main_logo_mini.png" sizes="32x32" type="image/png" />
  <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
  <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
  <!--iphoneのアプリアイコン指定-->
  <link rel="apple-touch-icon-precomposed" href="画像のURL" />
  <!--OGPタグ/twitterカード-->
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <div id="container">
    <div class="row">
      <div class="col-12">
        <header>
          <div class="">
            <img src="" alt="">
            <p>My</p>
          </div>
        </header>
      </div>
    </div>
    <div class="row" style="min-height:100vh;">
      <div class="col-8">
        @yield('content')
      </div>
      <div class="col-4 sub_menu">
        @if(Auth::user()->role == 'admin')
        <div class="">
          <ul>
            <li><a href="/register">ユーザー登録画面へ</a></li>
            <li><a href="/chart">予約管理画面へ</a></li>
            <li><a href="/logout">ログイン画面へ</a></li>
          </ul>
        </div>
        @else
        <div class="">
          <ul>
            <li><a href="/reservation">予約受付画面へ</a></li>
            <li><a href="/mylist">あなたの受付済みの予約一覧</a></li>
            <li><a href="/logout">ログイン画面へ</a></li>
          </ul>
        </div>
        @endif
      </div>

    </div>
  </div>
  <footer>
  </footer>

  <script src="JavaScriptファイルのURL"></script>
</body>

</html>
