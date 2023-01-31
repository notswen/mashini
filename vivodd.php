<?php
$fileData = trim(file_get_contents("base.json"));
$vyvod = json_decode($fileData);
foreach ($vyvod as $row) {
    echo "Название: " . $row->title . "<br>";
    echo "Описание: " . $row->description . "<br>";
    echo "Дата создания новости:  " . $row->date . "<br>";
    echo "<br>";
}
