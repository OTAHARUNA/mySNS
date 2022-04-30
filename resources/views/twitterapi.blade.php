<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwitterSNS</title>
    <script>
        const timer = 5000 // ミリ秒で間隔の時間を指定(5秒ごと)
        window.addEventListener('load', function() {
            setInterval('location.reload()', timer);
        });
    </script>
</head>

<body>
    @foreach ($twitter as $twitter)
    {!! $twitter[0] !!}<br>
    @endforeach
</body>

</html>
