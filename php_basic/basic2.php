<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basic2.php" method="post">
    <input type="text" name="text1"><br>
    <input type="text" name="t2tex"><br>
        <button type="submit">送信</button>
    </form>
</body>
</html>

<?php

$text1 = $_POST['text1'];
$text2 = $_POST['text2'];


// 変数

/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/


// $Name = '山田太郎';
// $Age = 25;

// echo $Name.'<br>';

// echo $Age.'<br>';


/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/


//変数の上書き
// $Name = '木下花子';
// $Age = 30;

// echo $Name.'<br>';

// echo $Age.'<br>';


/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/


//変数に格納できるもの

//数字・文字列・配列・論理値・オブジェクト


/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/


// PHPが用意するスーパーグローバル変数

// $Text = $_POST['text'];
// echo $Text.'<br>';


/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
