<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>

<body>
    <form action="profile.php" method="post">
        <div>
            <h3>地方を選択してください</h3>
            <select name="local_name">
                <option value="">---</option>
                <option value="北海道">北海道</option>
                <option value="東北">東北</option>
                <option value="関東">関東</option>
                <option value="中部">中部</option>
                <option value="関西">関西</option>
                <option value="中国">中国</option>
                <option value="四国">四国</option>
                <option value="九州・沖縄">九州・沖縄</option>
            </select>
        </div>
        <div>
            <h3>苗字・名前を入力してください</h3>
            <input type="text" name="first_name" placeholder="苗字を入力してください"><br>
            <input type="text" name="last_name" placeholder="名前を入力してください"><br>
        </div>
        <div>
            <p><button type="submit">送信</button></p>
        </div>
    </form>
</body>

</html>

<?php

$FullName = '';
$error = '';

//$_POSTで受けとった値をそれぞれの変数に代入する
$LocalName = $_POST['local_name'];
$FirstName = $_POST['first_name'];
$LastName = $_POST['last_name'];

//未入力項目の確認
if (empty($FirstName) || empty($LastName) || empty($LocalName)) {

    $error = '未入力項目があります';
} else {

    $FullName = $FirstName . $LastName;
}

//未入力が存在する場合エラーを出力する
if ($error) {

    echo $error;
} else {

    echo 'お住まいの地域：' . $LocalName . '地方' . '<br>';
    echo 'お客様の氏名：' . $FullName . '<br>';
}
