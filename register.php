<?php

// Проверка на существование данных
if (
    !empty($_POST['user_name'])
    && !empty($_POST['password'])
    && !empty($_POST['password_repeat'])
) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    // Проверка повторения пароля
    if ($password != $_POST['password_repeat']) {
        echo("Пароль не совпадают");
        exit();
    }

    // Хэшируем пароль
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $json = [];
    if (is_readable("db.json")) {
        $fileData = trim(file_get_contents("db.json"));
        if (!empty($fileData)) {
            $json = json_decode($fileData);
            foreach ($json as $user) {
                if ($user_name == $user->user_name) {
                    echo 'Такой пользователь уже есть';
                    exit();
                }
            }
        }
    }
    $json[]= [
        'user_name' => $user_name,
        'password' => $hash,
    ];
    // Запись в файл
    $json = json_encode($json);
    file_put_contents("db.json", $json);
    header("location: auth_form.php");
} else {
    header("location: 123.php");
}


