<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPページ</title>
</head>

<body>
    <h1>TOPページです</h1>
    <ul>
        @foreach ($ideas as $idea)
        <li><a href="">番号:{{$idea["id"]}},メインカテゴリー:{{$idea["main_category"]}}</a></li>
        @endforeach
    </ul>
</body>

</html>