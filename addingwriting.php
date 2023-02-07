<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=ogo",'root','');
    if (empty($_POST['name'])) exit("Поле не заполнено");
    if (empty($_POST['content'])) exit("Поле не заполнено");

    $query = "INSERT INTO writing VALUES (NULL, :name, NOW())";
    $wrt = $conn->prepare($query);
    $wrt->execute(['name' => $_POST['name']]);

    $wrt_id = $conn->lastInsertId();

    $query = "INSERT INTO message content VALUES (NULL, :content, :writing_id)";
    $wrt = $conn->prepare($query);
    $wrt->execute(['content' => $_POST['content'], 'writing_id' => $wrt_id]);

    header("Location: forma.html");



}
catch (PDOException $e)
{
    echo "error";
}