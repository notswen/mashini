<?php
require_once 'base.php';
$books = GetALLBooks();
?>
<table>
    <tr>
        <th>название</th>
        <th>артикул</th>
        <th>описание</th>
        <th>дата создания</th>
        <th>имя</th>
    </tr>
    <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book['title'] ?></td>
            <td><?= $book['articul'] ?></td>
            <td><?= $book['description'] ?></td>
            <td><?= $book['date_of_create'] ?></td>
            <td><?= $book['first_name'].$book['last_name'] ?></td>
        </tr>
    <?php endforeach;?>
</table>

