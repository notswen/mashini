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
            <td><?= $book['first_name'] . $book['last_name'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="votvash">
    <link rel="stylesheet" type="text/css" href="design.css"/>
    <a class="ssilka" href="addbooks.php" style="color: rgba(255,120,12,0.71); text-decoration:none;"><b>Добавить книгу</b></a>
    <a class="vihod" href="log_out.php" style="color: #a0461e; text-decoration:none;"><b>Выход</b></a>
</div>


