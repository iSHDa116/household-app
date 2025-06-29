<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出費を追加</title>
</head>
<body>

    <h1>出費を追加</h1>

    <form action="{{ route('expenses.store') }}" method="post">
        @csrf

        <label>日付</label>
        <input type="date" name="date" required><br><br>


        <label>買ったもの</label>
        <input type="text" name="item" required><br><br>
        

        <label>金額</label>
        <input type="number" name="amount" required><br><br>


        <button type="submit">保存</button>
    </form>

    <br>
    <a href="{{ route('expenses.index') }}">一覧に戻る</a>

</body>
</html>