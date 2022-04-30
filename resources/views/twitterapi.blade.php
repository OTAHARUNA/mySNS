<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30; URL=/twitter">
    <title>TwitterSNS</title>
</head>

<body>
    @foreach ($twitter as $twitter)
    {!! $twitter[0] !!}<br>
    @endforeach
</body>

</html>
