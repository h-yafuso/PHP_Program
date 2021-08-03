<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Calcurate</title>
</head>

<body>
    <h2>四則演算ツール</h2>
    <form action="tests.php" method="post">
        <input type="number" name="number1">
        <select name="symbol">
            <option value="null">---</option>
            <option value="0">+(足し算)</option>
            <option value="1">-(引き算)</option>
            <option value="2">*(掛け算)</option>
            <option value="3">/(割り算)</option>
        </select>
        <input type="number" name="number2"><br>
        <button type="submit">送信</button>
    </form>
</body>

</html>

<?php
$Answer = 0;

$num1 = $_POST['number1'];
$num2 = $_POST['number2'];

$symbol = $_POST['symbol'];

if ($symbol == '0') {

    $Answer = $num1 + $num2;
    echo $Answer;

} elseif ($symbol == '1') {

    $Answer = $num1 - $num2;
    echo $Answer;

} elseif ($symbol == '2') {

    $Answer = $num1 * $num2;
    echo $Answer;

} elseif ($symbol == '3') {

    $Answer = $num1 / $num2;
    echo $Answer;

}else{
    echo '演算子を選択してください';
}
