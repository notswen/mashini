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
        <div CLASS="library">LIBRAFORREAL</div>
        <form method="post" style="
              padding-left: 39vw;
              padding-top: 27vh;
              font-size: 177%;
              font-family: cursive;">
            <label class="pripiska_one"><b>Логин</b></label>
            <input type="text" class="forform" placeholder="введите логин" name="user_name">
            <br>
            <br>
            <label class="pripiska_two"><b>Пароль</b></label>
            <input type="password" class="forform" placeholder="введите пароль" name="password">
            <br>
            <?php if (!$auth): ?>
                <h1>Авторизация неуспешна</h1>
            <?php endif; ?>
            <br>
            <input type="submit" class="forform" style="font-size: 117%">
        </form>
    </div>
</div>