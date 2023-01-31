<?php
if (
    !empty($_POST['title'])
    && !empty($_POST['description'])
) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    date_default_timezone_set('Europe/Moscow');
    $date = date("Y-m-d H:i:s");

$json = [];
if (is_readable("base.json")) {
    $fileData = trim(file_get_contents("base.json"));
    if (!empty($fileData)) {
        $json = json_decode($fileData);
    }
}
    $json[] = [
        'title' => $title,
        'description' => $description,
        'date' => $date,
    ];
    $json = json_encode($json);
    file_put_contents("base.json", $json);
} else {
    echo "Не все поля заполнены";
    echo "<br><a href=\"news_form.php\">Вернуться назад</a>";
}