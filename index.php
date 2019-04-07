<?php
$counterVisiting = (isset($_COOKIE['counterVisiting'])) ? $_COOKIE['counterVisiting'] : 0;
$counterVisiting++;

$userNickName = '';
if (!empty($_POST['userNickName'])) {
    $userNickName = trim(htmlspecialchars($_POST['userNickName']));
} elseif (isset($_COOKIE['userNickName'])) {
    $userNickName = $_COOKIE['userNickName'];
}

setcookie('counterVisiting', $counterVisiting);
setcookie('userNickName', $userNickName);

echo "Количество посищений страницы <b>$counterVisiting</b>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork7_13</title>
</head>
<body>
<h2>Куки</h2>
<p>1) Создайте страничку где будет выводиться количество ее посищения и поле для задание ника, если пользователь уже<br>
    задал свой ник, то подставлять его в это поле. Для выполнения использовать куки.</p>
<form action="" method="POST">
    <label for="userNickName">Псевдоним пользователя:</label>
    <input id="userNickName" type="text" name="userNickName" value="<?=$userNickName;?>">
    <input type="submit" name="action" value="Установить">
</form>
</body>
</html>
