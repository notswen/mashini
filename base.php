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

function authorisation($user_name,$password)
{
    $mysqli = db_connect();

    $sql = "SELECT * FROM users
where login = '{$user_name}'";

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
function GetALLAuthors()
{

    $mysqli = db_connect();

    $sql = "SELECT * FROM authors";

    $avtors = mysqli_query($mysqli, $sql);
    $avtors = mysqli_fetch_all($avtors, MYSQLI_ASSOC);

    db_close($mysqli);

    return $avtors;

}

function AddToBooks($title,$articul,$description,$author_id,$customauthor)
{

    $mysqli = db_connect();

    $title = mysqli_real_escape_string($mysqli, $title);
    $articul = mysqli_real_escape_string($mysqli, $articul);
    $description = mysqli_real_escape_string($mysqli, $description);
    $author_id = mysqli_real_escape_string($mysqli, $author_id);
    $customauthor = mysqli_real_escape_string($mysqli, $customauthor);

    if (!empty($customauthor)){
        $sql = "INSERT INTO `authors`
    (first_name, last_name) values 
    ()
    
        
    }

    $sql = "INSERT INTO `books`
    (title, articul, description, date_of_create, author_id) VALUES 
    ('{$title}','{$articul}','{$description}', now(), '{$author_id}');";
    


    $adding = mysqli_query($mysqli, $sql);

    db_close($mysqli);

    return $adding;

}
