<?php
require_once 'base.php';
$avtors = GetALLAuthors();
?>

<link rel="stylesheet" type="text/css" href="design.css"/>
<div class="fonlast">
    <form method="post">
        <label><b>Название</b></label>
        <input type="text" name="title">
        <br>
        <br>
        <label>Артикул</label>
        <input type="text" name="articul">
        <br>
        <br>
        <br>
        <label>Описание</label>
        <input type="text" name="description">
        <br>
        <br>
        <label>Выберите автора из списка</label>
        <select name="authors">
            <?php foreach ($avtors as $avtor): ?>
                <option value="<?= $avtor['id'] ?>">
                    <?= $avtor['first_name'] . ' ' . $avtor['last_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <br>
        <label>Или добавьте своего автора</label>
        <input type="text" name="customauthor">
        <br>
        <br>
        <input type="submit">

    </form>
</div>
