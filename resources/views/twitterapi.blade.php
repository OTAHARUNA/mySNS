<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwitterSNS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script>
        const timer = 100000 // ミリ秒で間隔の時間を指定(5秒ごと)
        window.addEventListener('load', function() {
            setInterval('location.reload()', timer);
        });
        // setInterval(countUp, timer);
    </script>
    <script>
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //     }
        // });
        // $(function() {
        //     $('#search_word').click(function() {
        //         $.ajax({
        //             url: "/twitter", //どのサーバーに？（ サーバーのURLなど）
        //             type: "POST", //どんな方法で？（ GET / POSTなど）
        //             // dataType: 'json',
        //         }).done(function(data) { //通信状態に問題がないかどうか
        //             //データ取得処理を書く
        //             console.log(data);
        //             console.log("通信は成功");
        //         }).fail(function(XMLHttpRequest, textStatus, errorThrown) { //通信エラーになった場合の処理
        //             //エラー処理を書く
        //             alert('error!!!');
        //             console.log("XMLHttpRequest : " + XMLHttpRequest.status);
        //             console.log("textStatus     : " + textStatus);
        //             console.log("errorThrown    : " + errorThrown.message);
        //         });
        //     });
        // });
    </script>
</head>

<body>
    <form action="/twitter" method="POST">
        @csrf
        <audio id="audioElement" src="sound/MineArm.wav"></audio>

        <div class="text-center">
            <table class="mx-auto">
                <tr>
                    <th>通知</th>
                    <td class="text-right">
                        <div class="toggle">
                            <input type="checkbox" name="check" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>検索ワード</th>
                    <td><input type="text" id="search_word" name="search_word" value="{{ $search_word }}"></td>
                </tr>
            </table>
            <button id="btn">検索</button>
        </div>
    </form>
    @foreach ($twitter as $twitter)
    {!! $twitter[0] !!}<br>
    @endforeach
</body>

</html>
