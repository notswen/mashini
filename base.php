<?php
const HOSTNAME = 'localhost';
const USERNAME = 'root';
const PASSWORD = 'root';
const DATABASE = 'forcourse';

function db_connect()
{
    $mysqli = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if (mysqli_connect_errno()) {
        printf(
            'Ошибка подключения к БД: %s',
            mysqli_connect_error()
        );
        die();
    }

    if (!mysqli_set_charset($mysqli, 'utf8')) {
        printf(
            'Ошибка установки кодировки к БД: %s',
            mysqli_error($mysqli)
        );
        die();
    }

    return $mysqli;
}

function db_close($mysqli)
{
    return mysqli_close($mysqli);
}

function authorisation($user_name)
{
    $mysqli = db_connect();

    $sql = "SELECT * FROM users
    where login = '{$user_name}'";

    $aa = mysqli_query($mysqli, $sql);
    $aa = mysqli_fetch_all($aa, MYSQLI_ASSOC);

    db_close($mysqli);

    return $aa;
}
