<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作成ページ</title>
</head>

<body>
    <h1>命名したいものを作成</h1>
    <h2>命名したいものを選択・入力してください。</h2>
    <div><a href="{{ route('ideas.index') }}">TOPページに戻る</a></div>
    @if (count($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('ideas.store') }}">
        @csrf
        <label for="main_category">メインカテゴリー:</label>
        <input type="text" id="main_category" name="main_category">

        <label for="style">スタイル:</label>
        <input type="text" id="style" name="style">

        <label for="key_word">キーワード:</label>
        <input type="text" id="key_word" name="keywords">
        <input type="submit">
    </form>
</body>

</html>
