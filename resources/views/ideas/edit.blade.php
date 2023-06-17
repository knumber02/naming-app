<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集ページ</title>
</head>

<body>
    <h1>命名したいものを作成</h1>
    <h2>命名したいものを選択・入力してください。</h2>
    <div><a href="/ideas">TOPページに戻る</a></div>
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">この命名を削除する</button>
    </form>

    @if (session('message'))
    <p class="alert alert-success">
        {{ session('message') }}
    </p>
    @endif

    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PUT')
        <label for="main_category">メインカテゴリー:</label>
        <input type="text" id="main_category" name="main_category" value="{{ $idea->main_category }}">

        <label for="style">スタイル:</label>
        <input type="text" id="style" name="style" value="{{ $idea->style }}">

        <label for="key_word">キーワード:</label>
        <input type="text" id="key_word" name="keywords" value="{{ $idea->keywords }}">
        <input type="submit">
    </form>
</body>

</html>
