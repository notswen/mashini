<link rel="stylesheet" type="text/css" href="design.css"/>
<div class="jopa">
    <div class="nadpis">
<?php
class User{
    public $lastname;
    public $firstname;
    public $email;
    public $age;

}
$user = new User();
$user->lastname = 'gorin';
$user->firstname = 'gennadiy';
$user->email = 'etoposlefanty@gmail.com';
$user->age = 50;

echo 'Фамилия: ' . $user->lastname . '<br>';
echo 'Имя: ' . $user->firstname . '<br>';
echo 'Почта: ' . $user->email . '<br>';
echo 'Возраст: ' . $user->age . '<br>';
?>
    </div>
</div>