<?php
require_once 'base.php';
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
<div class="top">
    <div class="shapka">
        <form method="post">
            <label><b>Логин</b></label>
            <input type="text" name="user_name">
            <br>
            <br>
            <label>Пароль</label>
            <input type="password" name="password">
            <br>
            <br>
            <input type="submit">
        </form>
        <a href="log_out.php.php">Выход</a>
    </div>
</div>

