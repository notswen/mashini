<?php
require_once 'base.php';
$avtors = GetALLAuthors();
if (!empty($_POST)) {
    $title = $_POST['title'];
    $articul = $_POST['articul'];
    $description = $_POST['description'];
    $author_id = $_POST['authors'];
    $customauthor = $_POST['customauthor'];

}


AddToBooks($title, $articul, $description, $author_id,$customauthor);
?>

<link rel="stylesheet" type="text/css" href="design.css"/>
<div class="fonlast">
    <form method="post" style="
              padding-left: 36vw;
              padding-top: 27vh;
              font-size: 177%;
              font-family: cursive;">
        <label><b>Название</b></label>
        <input type="text" name="title">
        <br>
        <br>
        <label><b>Артикул</b></label>
        <input type="text" name="articul">
        <br>
        <br>
        <br>
        <label><b>Описание</b></label>
        <input type="text" name="description">
        <br>
        <br>
        <label><b>Выберите автора из списка</b></label>
        <select name="authors">
            <?php foreach ($avtors as $avtor): ?>
                <option value="<?= $avtor['id'] ?>">
                    <?= $avtor['first_name'] . ' ' . $avtor['last_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <br>
        <label><b>Или добавьте своего автора</b></label>
        <input type="text" name="customauthor">
        <br>
        <br>
        <input type="submit">

    </form>
</div>
