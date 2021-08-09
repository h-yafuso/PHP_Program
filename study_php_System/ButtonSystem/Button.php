<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button</title>
</head>

<body>
    <form action="Button.php" method="post">
        <input type="number" name="number"><br>
        <div>
            <button type="submit" name="btn" value="1">登録</button>
            <button type="submit" name="btn" value="2">更新</button>
            <button type="submit" name="btn" value="3">削除</button>
        </div>
    </form>
</body>

</html>

<?php

$num = $_POST['number'];
$btn = $_POST['btn'];

if ($btn == '1') {
    echo $num . '件のデータを登録しました。';
} elseif ($btn == '2') {
    echo $num . '件のデータを更新しました。';
} elseif ($btn == '3') {
    echo $num . '件のデータを削除しました。';
}
