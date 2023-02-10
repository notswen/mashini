<?php
const HOSTNAME = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'da';

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

function authorisation($user_name,$password)
{
    $mysqli = db_connect();

    $sql = "SELECT * FROM users";

    $aa = mysqli_query($mysqli, $sql);
    $aa = mysqli_fetch_all($aa, MYSQLI_ASSOC);
    if (!empty($aa)){
        if (password_verify($password, $aa[0]['password'])) {
            return true;
        }
    }

    db_close($mysqli);

    return false;
}
function GetALLBooks()
{
    $mysqli = db_connect();

    $sql = "SELECT * FROM books
    LEFT JOIN authors on authors.id = books.author_id";

    $books = mysqli_query($mysqli, $sql);
    $books = mysqli_fetch_all($books, MYSQLI_ASSOC);

    db_close($mysqli);

    return $books;
}
