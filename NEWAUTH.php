<?php
require_once 'base.php';
if (!empty($_POST['user_name'])){
    $auth = authorisation($_POST['user_name'],$_POST['password']);
    if ($auth){
        header ("Location: afterauth.php");
    }

}

//var_dump(password_hash('user', PASSWORD_DEFAULT));
?>
<form method="post">
    <label>Логин</label>
    <input type="text" name="user_name">
    <br>
    <br>
    <label>Пароль</label>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit">
</form>
<a href="123.php">Регистрация</a>
