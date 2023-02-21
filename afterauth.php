<?php
require_once 'base.php';
$books = GetALLBooks();
?>
<table>
    <thead>
    <tr>
        <th>название</th>
        <th>артикул</th>
        <th>описание</th>
        <th>дата создания</th>
        <th>имя</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book['title'] ?></td>
            <td><?= $book['articul'] ?></td>
            <td><?= $book['description'] ?></td>
            <td><?= $book['date_of_create'] ?></td>
            <td><?= $book['fullname'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="votvash">
    <link rel="stylesheet" type="text/css" href="design.css"/>
    <a class="ssilka" href="addbooks.php" style="color: #43ff21; text-decoration:none; background-image: conic-gradient(#ff6d00, #cfff21, #a44822);color: transparent; -webkit-background-clip: text; "><b>Добавить книгу</b></a>
    <a class="vihod" href="log_out.php" style="color: #ff6d00; text-decoration:none; background-image: conic-gradient(#ff6d00, #cfff21, #a44822);color: transparent; -webkit-background-clip: text;"><b>Выход</b></a>
    <div CLASS="library">LIBRAFORREAL</div>
</div>

