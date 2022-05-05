<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwitterSNS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script>
        const timer = 100000 // ミリ秒で間隔の時間を指定(5秒ごと)
        window.addEventListener('load', function() {
            setInterval('location.reload()', timer);
        });
    </script>
</head>

<body>
    <form action="/twitter" method="POST">
        @csrf
        <div class="text-center">
            <table class="mx-auto">
                <tr>
                    <th>検索ワード</th>
                    <td><input type="text" id="search_word" name="search_word"></td>
                </tr>
            </table>
            <button>検索</button>
        </div>
    </form>
    @foreach ($twitter as $twitter)
    {!! $twitter[0] !!}<br>
    @endforeach
</body>

</html>
