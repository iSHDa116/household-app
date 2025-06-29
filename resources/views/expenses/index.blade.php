<!DOCTYPE html>
<html lang="ja">

<head>

    <title>出費一覧</title>

</head>

<body>
    <h2>出費合計：{{ $totalExpenses }} 円</h2>
    <p>警告ライン：{{$warningThreshold }} 円</p>

    @if($totalExpenses > $warningThreshold)

        <h3 style="color : red">⚠️ 出費が月収の15%を超過!!使いすぎです!!</h3>
    @else
        <h3 style="color : yellowgreen">閾値未満です</h3>
    @endif

    <h1>出費一覧</h1>

    <a href="{{ route('expenses.create') }}">新しい出費を追加</a>

    <table border="1">

        <thead>
            <tr>
                <th>日付</th>
                <th>買ったもの</th>
                <th>金額</th>
            </tr>
        </thead>

        <tbody>
            @for ($i = 0; $i < Count($expenses); $i++)
                <tr>
                    <td>{{ $expenses[$i]->data }}</td>
                    <td>{{ $expenses[$i]->item }}</td>
                    <td>{{ $expenses[$i]->amount }}</td>
                </tr>
            @endfor
        </tbody>

    </table>

</body>
</html>