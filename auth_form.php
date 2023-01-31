<?php
session_start();
if (!empty($_SESSION['user_name'])){
//    header("location: site.php");
}
?>
<form action="auth.php" method="post">
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
<?php
var_dump($_SESSION['user_name']);