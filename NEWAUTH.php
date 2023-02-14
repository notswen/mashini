<?php
require_once 'base.php';
session_start();
$auth = true;
if (!empty($_POST['user_name'])) {
    $auth = authorisation($_POST['user_name'], $_POST['password']);
    if ($auth) {
        header("Location: afterauth.php");
    }

}

//var_dump(password_hash('nuda', PASSWORD_DEFAULT));
?>
<head>
    <link rel="stylesheet" type="text/css" href="design.css"/>
</head>
<div class="shapka">
    <div class="top">
        <form method="post" style="
              padding-left: 39vw;
              padding-top: 33vh;
              font-size: 177%;
              font-family: cursive;">
            <label class="pripiska_one"><b>Логин</b></label>
            <input type="text" placeholder="введите логин" name="user_name">
            <br>
            <br>
            <label class="pripiska_two"><b>Пароль</b></label>
            <input type="password" placeholder="введите пароль" name="password">
            <br>
            <?php if (!$auth): ?>
                <h1>Авторизация неуспешна</h1>
            <?php endif; ?>
            <br>
            <input type="submit" style="font-size: 117%">
        </form>
    </div>
</div>
