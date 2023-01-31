<?php
if (
    !empty($_POST['user_name'])
    && !empty($_POST['password'])
) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if (is_readable("db.json")) {
        $fileData = trim(file_get_contents("db.json"));
        if (!empty($fileData)) {
            $json = json_decode($fileData);
            foreach ($json as $user) {
                if ($user_name == $user->user_name) {
                    if (password_verify($password, $user->password)) {
                        echo 'Авторизация успешна';
//                        header("location: auth_form.php");
                    } else {
                        echo 'Неверный логин или пароль';
                    }
                    exit();
                }
            }
            echo 'Неверный логин или пароль';
            exit();
        } else {
            echo 'Ошибка 500';
        }
    } else {
        echo 'Ошибка 500';
    }
}

